<?php

namespace App\Core;

class Request
{
    
    public static function Method()
    {
        $method = $_SERVER['REQUEST_METHOD'];

        // Check if the request method is POST and the _method field is set
        if ($method === 'POST' && isset($_POST['_method'])) {
            $method = strtoupper($_POST['_method']);
        }

        return $method;
    }

    /**
     * Get the requested URI.
     *
     * @return string
     */
    public static function Route()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $uri = parse_url($uri, PHP_URL_PATH); // Extract the path component
         
        return $uri;
    }
}





