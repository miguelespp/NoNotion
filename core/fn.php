<?php

use core\Response;

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function isURL($value) : bool
{
    return $_SERVER['REQUEST_URI'] === $value ;
}

function auth(bool $condition)
{
    if(! $condition){
        abort(Response::HTTP_FORBIDDEN);
    }
}

function base_path(string $path = '') : string
{
    return BASE_PATH . $path . '.php';
}

function view(string $path, array $data = []) : void
{
    extract($data);
    require base_path( 'views/' . $path . '.view');
}

