<?php

declare(strict_types=1);

namespace Laminas\Crypt;

use Laminas\Crypt\BlockCipher;
use Laminas\Crypt\PublicKey\Rsa;
use Laminas\Crypt\PublicKey\Rsa\PrivateKey;
use Laminas\Crypt\PublicKey\Rsa\PublicKey as PubKey;
use Laminas\Math\Rand;
use Stringable;

use function array_search;
use function base64_decode;
use function base64_encode;
use function explode;
use function is_array;
use function is_string;
use function sprintf;

/**
 * Hybrid encryption (OpenPGP like)
 *
 * The data are encrypted using a BlockCipher with a random session key
 * that is encrypted using RSA with the public key of the receiver.
 * The decryption process retrieves the session key using RSA with the private
 * key of the receiver and decrypts the data using the BlockCipher.
 */
class Hybrid
{
    protected BlockCipher $bCipher;

    /**
     * Constructor
     */
    public function __construct(?BlockCipher $bCipher = null, protected Rsa $rsa = new Rsa())
    {
        $this->bCipher = $bCipher ?? BlockCipher::factory('openssl');
    }

    /**
     * Encrypt using a keyrings
     *
     * @throws RuntimeException
     */
    public function encrypt(string $plaintext, array|string|Stringable|null $keys = null): string
    {
        // generate a random session key
        $sessionKey = Rand::getBytes($this->bCipher->getCipher()->getKeySize());

        // encrypt the plaintext with blockcipher algorithm
        $this->bCipher->setKey($sessionKey);
        $ciphertext = $this->bCipher->encrypt($plaintext);

        if (! is_array($keys)) {
            $keys = ['' => $keys];
        }

        $encKeys = '';
        // encrypt the session key with public keys
        foreach ($keys as $id => $pubkey) {
            if (! $pubkey instanceof PubKey && ! is_string($pubkey)) {
                throw new Exception\RuntimeException(sprintf(
                    "The public key must be a string in PEM format or an instance of %s",
                    PubKey::class
                ));
            }
            $pubkey   = is_string($pubkey) ? new PubKey($pubkey) : $pubkey;
            $encKeys .= sprintf(
                "%s:%s:",
                base64_encode((string) $id),
                base64_encode($this->rsa->encrypt($sessionKey, $pubkey))
            );
        }
        return $encKeys . ';' . $ciphertext;
    }

    /**
     * Decrypt using a private key
     *
     * @throws RuntimeException
     */
    public function decrypt(
        string $msg,
        string|PrivateKey|null $privateKey = null,
        ?string $passPhrase = null,
        string $id = ""
    ): string|false {
        // get the session key
        [$encKeys, $ciphertext] = explode(';', $msg, 2);

        $keys = explode(':', $encKeys);
        $pos  = array_search(base64_encode($id), $keys);
        if (false === $pos) {
            throw new Exception\RuntimeException(
                "This private key cannot be used for decryption"
            );
        }

        if (! $privateKey instanceof PrivateKey && ! is_string($privateKey)) {
            throw new Exception\RuntimeException(sprintf(
                "The private key must be a string in PEM format or an instance of %s",
                PrivateKey::class
            ));
        }
        $privateKey = is_string($privateKey) ? new PrivateKey($privateKey, $passPhrase) : $privateKey;

        // decrypt the session key with privateKey
        $sessionKey = $this->rsa->decrypt(base64_decode($keys[$pos + 1]), $privateKey);

        // decrypt the plaintext with the blockcipher algorithm
        $this->bCipher->setKey($sessionKey);
        return $this->bCipher->decrypt($ciphertext);
    }

    /**
     * Get the BlockCipher adapter
     */
    public function getBlockCipherInstance(): BlockCipher
    {
        return $this->bCipher;
    }

    /**
     * Get the Rsa instance
     */
    public function getRsaInstance(): Rsa
    {
        return $this->rsa;
    }
}
