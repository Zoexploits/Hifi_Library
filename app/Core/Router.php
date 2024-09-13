<?php

namespace App\Core;

use App\Core\Request;

class Router
{
    protected static $routes = [];
    
    protected static $basePath = '/hifi_library'; // Include project folder in the base path

    public static function setBasePath($basePath)
    {
        self::$basePath = $basePath;
    }

    public static function get($uri, $action)
    {
      
        
        self::$routes['GET'][trim(self::$basePath . $uri, '/')] = $action;
    }

    public static function delete($uri, $action)
    {
      
        
        self::$routes['DELETE'][trim(self::$basePath . $uri, '/')] = $action;
    }


    public static function put($uri, $action)
    {
      
        
        self::$routes['PUT'][trim(self::$basePath . $uri, '/')] = $action;
    }

    public static function post($uri, $action)
    {
        self::$routes['POST'][trim(self::$basePath . $uri, '/')] = $action;
    }

    public function resolve()
    {


    


        $method = Request::Method();
        $uri = trim(Request::Route(), '/');
        // $uri = preg_replace('#^' . preg_quote(trim(self::$basePath, '/')) . '#', '', $uri);

        if (isset(self::$routes[$method][$uri])) {
            $action = self::$routes[$method][$uri];
            if (is_array($action)) {
                [$controller, $method] = $action;
                $controller = new $controller;
                $controller->$method();
            } else {
                call_user_func($action);
            }
        } else {
            http_response_code(404);
            echo "Page Not Found";
        }
    }
}




