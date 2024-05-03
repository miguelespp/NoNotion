<?php

namespace core;

class App
{
    protected static Container $container;

    public static function getContainer(): Container
    {
        return self::$container;
    }

    public static function setContainer(Container $container): void
    {
        self::$container = $container;
    }

    /**
     * @throws \Exception
     */
    public static function resolve($key)
    {
        return static::getContainer()->resolve($key);
    }

    public static function bind($key, $resolve): void
    {
        static::getContainer()->bind($key, $resolve);
    }


}