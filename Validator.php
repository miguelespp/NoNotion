<?php

class Validator
{
    public static function checkRegularString(string $value, int $min = 1,  $max = INF) : bool
    {
        $value = trim($value);
        return strlen($value) > $min && strlen($value) <= $max;
    }

    public static function checkEmail(string $value) : bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}