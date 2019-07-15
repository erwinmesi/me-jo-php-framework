<?php

require 'String.php';

if (!function_exists('view')) {
    function view($file, $data = null)
    {
        return ['viewPath' => "resources/views/{$file}.php", 'viewData' => $data];
    }
}
