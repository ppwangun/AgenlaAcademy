<?php

declare(strict_types=1);

namespace Laminas\Crypt\PublicKey\Rsa\Exception;

use Laminas\Crypt\Exception;

/**
 * Invalid argument exception
 */
class InvalidArgumentException extends Exception\InvalidArgumentException implements ExceptionInterface
{
}
