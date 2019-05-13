<?php

function printr($thing, $die = false)
{
    echo '<pre>';
    print_r($thing);
    echo '</pre>';

    if ($die == true) {
        die();
    }
}

function shape_filename()
{
    $referrer = debug_backtrace();
    $path = $referrer[0]['file'];
    echo basename($path, '.php');
}

function random($max = 10000)
{
    $random = rand(1, $max);
    return $random;
}
