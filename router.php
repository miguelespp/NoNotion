<?php


// Primera forma(Tradicional)
//$uri = $_SERVER['REQUEST_URI'];
//
//if ($uri === '/') {
//    require 'controllers/index.php';
//} else if ($uri === '/about') {
//    require 'controllers/about.php';
//} else if ($uri === '/contact') {
//    require 'controllers/contact.php';
//} else {
//    http_response_code(404);
//    require 'controllers/404.php';
//    die();
//}

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
    '/' => 'controllers/index',
    '/notes' => 'controllers/note/notes',
    '/note' => 'controllers/note/note',
    '/note/create' => 'controllers/note/note-create',
    '/about' => 'controllers/about',
    '/contact' => 'controllers/contact'
];

function abort(int $code)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

function routerToController($uri, $routes)
{
    if (!array_key_exists($uri, $routes)) {
        abort(404);
    } else {
        require "{$routes[$uri]}.php";
    }
}

routerToController($uri, $routes);




