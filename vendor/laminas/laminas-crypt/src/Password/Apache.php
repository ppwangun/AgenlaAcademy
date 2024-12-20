<?php

declare(strict_types=1);

namespace Laminas\Crypt\Password;

use Laminas\Crypt\Utils;
use Laminas\Math\Rand;
use Traversable;

use function addcslashes;
use function base64_encode;
use function chr;
use function crypt;
use function explode;
use function implode;
use function in_array;
use function is_array;
use function mb_strlen;
use function mb_substr;
use function md5;
use function min;
use function pack;
use function preg_match;
use function sha1;
use function sprintf;
use function str_contains;
use function strrev;
use function strtolower;
use function strtr;

/**
 * Apache password authentication
 *
 * @see http://httpd.apache.org/docs/2.2/misc/password_encryptions.html
 */
class Apache implements PasswordInterface
{
    public const BASE64  = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
    public const ALPHA64 = './0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

    /** @var array */
    protected $supportedFormat = [
        'crypt',
        'sha1',
        'md5',
        'digest',
    ];

    protected string $format;

    /** @var string AuthName (realm) for digest authentication */
    protected string $authName;

    protected string $userName;

    /**
     * Constructor
     *
     * @throws Exception\InvalidArgumentException
     */
    public function __construct(Traversable|array $options = [])
    {
        if (empty($options)) {
            return;
        }
        if (! is_array($options) && ! $options instanceof Traversable) {
            throw new Exception\InvalidArgumentException(
                'The options parameter must be an array or a Traversable'
            );
        }
        foreach ($options as $key => $value) {
            switch (strtolower((string) $key)) {
                case 'format':
                    $this->setFormat($value);
                    break;
                case 'authname':
                    $this->setAuthName($value);
                    break;
                case 'username':
                    $this->setUserName($value);
                    break;
            }
        }
    }

    /**
     * Generate the hash of a password
     *
     * @throws Exception\RuntimeException
     */
    public function create(string $password): string
    {
        if (! isset($this->format) || ($this->format === '' || $this->format === '0')) {
            throw new Exception\RuntimeException(
                'You must specify a password format'
            );
        }
        switch ($this->format) {
            case 'crypt':
                $hash = crypt($password, Rand::getString(2, self::ALPHA64));
                break;
            case 'sha1':
                $hash = '{SHA}' . base64_encode(sha1($password, true));
                break;
            case 'md5':
                $hash = $this->apr1Md5($password);
                break;
            case 'digest':
                if (
                    ! isset($this->userName)
                    || ($this->userName === '' || $this->userName === '0')
                    || (! isset($this->authName) || ($this->authName === '' || $this->authName === '0'))
                ) {
                    throw new Exception\RuntimeException(
                        'You must specify UserName and AuthName (realm) to generate the digest'
                    );
                }
                $hash = md5($this->userName . ':' . $this->authName . ':' . $password);
                break;
        }

        return $hash;
    }

    /**
     * Verify if a password is correct against a hash value
     */
    public function verify(string $password, string $hash): bool
    {
        if (mb_substr($hash, 0, 5, '8bit') === '{SHA}') {
            $hash2 = '{SHA}' . base64_encode(sha1($password, true));
            return Utils::compareStrings($hash, $hash2);
        }

        if (mb_substr($hash, 0, 6, '8bit') === '$apr1$') {
            $token = explode('$', $hash);
            if (empty($token[2])) {
                throw new Exception\InvalidArgumentException(
                    'The APR1 password format is not valid'
                );
            }
            $hash2 = $this->apr1Md5($password, $token[2]);
            return Utils::compareStrings($hash, $hash2);
        }

        $bcryptPattern = '/\$2[ay]?\$[0-9]{2}\$[' . addcslashes((string) static::BASE64, '+/') . '\.]{53}/';

        if (mb_strlen($hash, '8bit') > 13 && ! preg_match($bcryptPattern, $hash)) { // digest
            if (
                ! isset($this->userName)
                || ($this->userName === '' || $this->userName === '0')
                || (! isset($this->authName) || ($this->authName === '' || $this->authName === '0'))
            ) {
                throw new Exception\RuntimeException(
                    'You must specify UserName and AuthName (realm) to verify the digest'
                );
            }
            $hash2 = md5($this->userName . ':' . $this->authName . ':' . $password);
            return Utils::compareStrings($hash, $hash2);
        }

        return Utils::compareStrings($hash, crypt($password, $hash));
    }

    /**
     * Set the format of the password
     *
     * @throws Exception\InvalidArgumentException
     * @return Apache Provides a fluent interface
     */
    public function setFormat(string $format): Apache
    {
        $format = strtolower($format);
        if (! in_array($format, $this->supportedFormat)) {
            throw new Exception\InvalidArgumentException(sprintf(
                'The format %s specified is not valid. The supported formats are: %s',
                $format,
                implode(',', $this->supportedFormat)
            ));
        }
        $this->format = $format;

        return $this;
    }

    /**
     * Get the format of the password
     */
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * Set the AuthName (for digest authentication)
     */
    public function setAuthName(string $name): static
    {
        $this->authName = $name;

        return $this;
    }

    /**
     * Get the AuthName (for digest authentication)
     */
    public function getAuthName(): string
    {
        return $this->authName;
    }

    /**
     * Set the username
     */
    public function setUserName(string $name): static
    {
        $this->userName = $name;

        return $this;
    }

    /**
     * Get the username
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * Convert a binary string using the alphabet "./0-9A-Za-z"
     */
    protected function toAlphabet64(string $value): string
    {
        return strtr(strrev(mb_substr(base64_encode($value), 2, null, '8bit')), self::BASE64, self::ALPHA64);
    }

    /**
     * APR1 MD5 algorithm
     */
    protected function apr1Md5(string $password, string|null $salt = null): string
    {
        if (null === $salt) {
            $salt = Rand::getString(8, self::ALPHA64);
        } else {
            if (mb_strlen($salt, '8bit') !== 8) {
                throw new Exception\InvalidArgumentException(
                    'The salt value for APR1 algorithm must be 8 characters long'
                );
            }
            for ($i = 0; $i < 8; $i++) {
                if (! str_contains(self::ALPHA64, $salt[$i])) {
                    throw new Exception\InvalidArgumentException(
                        'The salt value must be a string in the alphabet "./0-9A-Za-z"'
                    );
                }
            }
        }
        $len  = mb_strlen($password, '8bit');
        $text = $password . '$apr1$' . $salt;
        $bin  = pack("H32", md5($password . $salt . $password));
        for ($i = $len; $i > 0; $i -= 16) {
            $text .= mb_substr($bin, 0, min(16, $i), '8bit');
        }
        for ($i = $len; $i > 0; $i >>= 1) {
            $text .= ($i & 1) !== 0 ? chr(0) : $password[0];
        }
        $bin = pack("H32", md5($text));
        for ($i = 0; $i < 1000; $i++) {
            $new = ($i & 1) !== 0 ? $password : $bin;
            if ($i % 3 !== 0) {
                $new .= $salt;
            }
            if ($i % 7 !== 0) {
                $new .= $password;
            }
            $new .= ($i & 1) !== 0 ? $bin : $password;
            $bin  = pack("H32", md5($new));
        }
        $tmp = '';
        for ($i = 0; $i < 5; $i++) {
            $k = $i + 6;
            $j = $i + 12;
            if ($j === 16) {
                $j = 5;
            }
            $tmp = $bin[$i] . $bin[$k] . $bin[$j] . $tmp;
        }
        $tmp = chr(0) . chr(0) . $bin[11] . $tmp;

        return '$apr1$' . $salt . '$' . $this->toAlphabet64($tmp);
    }
}
