<?php

namespace core;

use Illuminate\Auth\Access\AuthorizationException;

class Container
{
    protected array $bindings = [];

    public function bind(string $key, callable $fn) : void
    {
        $this->bindings[$key] = $fn;
    }

    /**
     * @throws \Exception
     */
    public function resolve(string $key)
    {
        if (!array_key_exists('core\Database', $this->bindings)){
            throw new \Exception("Not find container {$key  }");
        }

            $resolver = $this->bindings[$key];
            return call_user_func($resolver);
    }
}