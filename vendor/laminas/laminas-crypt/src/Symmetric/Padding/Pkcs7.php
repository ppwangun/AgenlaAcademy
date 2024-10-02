<?php

declare(strict_types=1);

namespace Laminas\Crypt\Symmetric\Padding;

use function chr;
use function mb_strlen;
use function mb_substr;
use function ord;
use function str_repeat;

/**
 * PKCS#7 padding
 */
class Pkcs7 implements PaddingInterface
{
    /**
     * Pad the string to the specified size
     *
     * @param string $string    The string to pad
     * @param int $blockSize The size to pad to
     * @return string The padded string
     */
    public function pad(string $string, int $blockSize = 32): string
    {
        $pad = $blockSize - (mb_strlen($string, '8bit') % $blockSize);
        return $string . str_repeat(chr($pad), $pad);
    }

    /**
     * Strip the padding from the supplied string
     *
     * @param string $string The string to trim
     * @return string|false The unpadded string
     */
    public function strip(string $string): string|false
    {
        $end  = mb_substr($string, -1, null, '8bit');
        $last = ord($end);
        $len  = mb_strlen($string, '8bit') - $last;
        if (mb_substr($string, $len, null, '8bit') === str_repeat($end, $last)) {
            return mb_substr($string, 0, $len, '8bit');
        }
        return false;
    }
}
