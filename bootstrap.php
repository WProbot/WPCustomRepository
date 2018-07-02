<?php

require __DIR__ . '/vendor/autoload.php';

$router = new \Klein\Klein();

try {
// .env Configuration
    $dotenv = new Dotenv\Dotenv(__DIR__);
    $dotenv->load();
} catch (Exception $exception) {
    trigger_error('Could not load .env file (not found or erroneous).');
}

function projectDir($echo = false) {
    if (!$echo) {
        return __DIR__;
    }
    echo __DIR__;
}
function publicDir($echo = false) {
    if (!$echo) {
        return __DIR__.'/public';
    }
    echo __DIR__.'/public';
}
function tempDir($echo = false) {
    if (!$echo) {
        return __DIR__.'/var';
    }
    echo  __DIR__.'/var';
}
function viewsDir($echo = false) {
    if ( ! $echo ) {
        return __DIR__.'/resources/views';
    }
    echo  __DIR__.'/resources/views';
}
