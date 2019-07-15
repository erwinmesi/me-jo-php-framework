<?php

$controllersPath = 'App\Http\Controllers\\';

@include('routes/web.php');

$uri = $_SERVER['REQUEST_URI'];

if (array_key_exists($uri, $routes)) {
    $targetMethod = $routes[$uri];
} else {
    http_response_code(404);
    @include('resources/views/errors/404.php');
    die();
}

[$controller, $method] = explode('@', $targetMethod);

$class = "{$controllersPath}{$controller}";

extract((new $class)->{$method}());

