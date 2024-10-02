<?php

declare(strict_types=1);

namespace Laminas\Crypt\Symmetric;

use Psr\Container\ContainerInterface;

use function array_key_exists;
use function sprintf;

/**
 * Plugin manager implementation for the padding adapter instances.
 *
 * Enforces that padding adapters retrieved are instances of
 * Padding\PaddingInterface. Additionally, it registers a number of default
 * padding adapters available.
 */
final class PaddingPluginManager implements ContainerInterface
{
    /** @var array<string, string> */
    private array $paddings = [
        'pkcs7'     => Padding\Pkcs7::class,
        'nopadding' => Padding\NoPadding::class,
        'null'      => Padding\NoPadding::class,
    ];

    /**
     * Do we have the padding plugin?
     */
    public function has(string $id): bool
    {
        return array_key_exists($id, $this->paddings);
    }

    /**
     * Retrieve the padding plugin
     *
     * @return Padding\PaddingInterface
     */
    public function get(string $id)
    {
        if (! $this->has($id)) {
            throw new Exception\NotFoundException(sprintf(
                "The padding adapter %s does not exist",
                $id
            ));
        }
        $class = $this->paddings[$id];
        return new $class();
    }
}
