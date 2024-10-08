<?php

declare(strict_types=1);

namespace Laminas\Crypt\PublicKey\Rsa\Exception;

use Laminas\Crypt\Exception;

/**
 * Runtime argument exception
 */
class RuntimeException extends Exception\RuntimeException implements ExceptionInterface
{
}
