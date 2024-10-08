<?php

declare(strict_types=1);

namespace Laminas\Crypt\Exception;

use DomainException;
use Psr\Container\NotFoundExceptionInterface as PsrNotFoundException;

/**
 * Runtime argument exception
 */
class NotFoundException extends DomainException implements PsrNotFoundException
{
}
