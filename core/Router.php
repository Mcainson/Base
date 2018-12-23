<?php

class Router
{
    public $routes = [

    'GET'   => [],
    'POST'  => []
    ];

     public static function load($file)
     //static methode
    {
        $router = new static;
        //because i want a new royer instance
        require $file;
        return $router;
        //return an instance of the same methode
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
    
    

public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])){
                return $this->routes[$requestType][$uri];
        }

        throw new Exception('No route defined for this Uri.');
    }
}

