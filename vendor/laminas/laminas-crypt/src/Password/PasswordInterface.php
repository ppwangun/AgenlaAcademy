<?php

declare(strict_types=1);

namespace Laminas\Crypt\Password;

interface PasswordInterface
{
    /**
     * Create a password hash for a given plain text password
     *
     * @param  string $password The password to hash
     * @return string The formatted password hash
     */
    public function create(string $password): string;

    /**
     * Verify a password hash against a given plain text password
     *
     * @param  string $password The password to hash
     * @param  string $hash     The supplied hash to validate
     * @return bool Does the password validate against the hash
     */
    public function verify(string $password, string $hash): bool;
}
