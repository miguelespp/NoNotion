<?php

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

