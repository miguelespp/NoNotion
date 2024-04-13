<?php

namespace core;

class Route
{
    private static array $routes = [];

    public function __construct(){

    }

    public function __invoke()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_POST['method'] ?? $_SERVER['REQUEST_METHOD'];
//        dd($method);

        foreach (self::$routes as $route) {
//            dd($method);
            if ($route['uri'] === $uri ){
//                dd($route['method']);
//                var_dump($route['uri']);
                if (is_callable($route['param'])) {
                    $route['param']();
                } else {
                   echo 'papu';
                }
                return;
            }
        }
        abort();
    }
    private static function add(string $uri, array|string|callable|null $param, string $method): void
    {
        self::$routes[] = [
            'uri' => $uri,
            'param' => $param,
            'method' => $method,
            'name' => ''
        ];

    }
    public static function get(string $uri, array|string|callable|null $param = null) : self
    {
        self::add($uri, $param, 'GET');
        return new self();
    }

    public static function post(string $uri, array|string|callable|null $param = null)
    {
        self::add($uri, $param, 'POST');
        return new self();
    }

    public static function put(string $uri, array|string|callable|null $param = null)
    {
        self::add($uri, $param, 'PUT');
        return new self();
    }

    public static function delete(string $uri, array|string|callable|null $param = null)
    {
        self::add($uri, $param, 'DELETE');
        return new self();
    }

    public static function patch(string $uri, array|string|callable|null $param = null)
    {
        self::add($uri, $param, 'PATCH');
        return new self();
    }

    public function name(string $name) : void
    {
        self::$routes[array_key_last(self::$routes)]['name'] = $name;
    }

//    public function run()
//    {
//        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//        $method = $_SERVER['REQUEST_METHOD'];
//
//        foreach (self::$routes as $route) {
////            dd($method);
//            if ($route['uri'] === $uri ){
////                var_dump($route['uri']);
//                if (is_callable($route['param'])) {
//                    $route['param']();
//                } else {
//                   echo 'papu';
//                }
//                return;
//            }
//        }
//        $this->abort();
//    }

}