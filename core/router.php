<?php

use core\Route;
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

//$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//dd($_SERVER);
Route::get('/', function (){
    require base_path('controllers/index');
})->name('home');

Route::get('/about', function (){
    require base_path('controllers/about');
})->name('about');

Route::get('/contact', function (){
    require base_path('controllers/contact');
})->name('contact');

Route::delete('/notes', function (){
    require base_path('controllers/note/index');
})->name('notes');

Route::post('/note/create', function (){
    require base_path('controllers/note/create');
})->name('note.create');

Route::get('/note', function (){
    require  base_path('controllers/note/show');
})->name('note.show');

//$router  = new Route();
//dd($router->getRoutes());
//var_dump($routes);

/*

$routes = [
    '/' => 'controllers/index',
    '/notes' => 'controllers/note/index',
    '/note' => 'controllers/note/show',
    '/note/create' => 'controllers/note/create',
    '/about' => 'controllers/about',
    '/contact' => 'controllers/contact'
];

 function abort(int $code) : void
{
    http_response_code($code);
    require base_path("views/errors/{$code}");
    die();
}

function routerToController($uri, $routes)
{
    if (!array_key_exists($uri, $routes)) {
        abort(404);
    } else {
        require base_path($routes[$uri]);
    }
}

//routerToController($uri, $routes);


*/

