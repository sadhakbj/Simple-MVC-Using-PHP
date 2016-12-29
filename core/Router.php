<?php
namespace Core;

use Exception;

/**
 * Class Router
 * @package Core
 */
class Router
{
    /**
     * @var array
     */
    protected $routes = [
        'GET'  => [],
        'POST' => [],
    ];

    /**
     * @param $file
     * @return static
     */
    public static function load($file)
    {
        $router = new static;
        require $file;

        return $router;
    }

    /**
     * @param $uri
     * @param $controller
     */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    /**
     * @param $uri
     * @param $controller
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * @param $uri
     * @param $requestType
     * @return mixed
     * @throws Exception
     */
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }

        throw  new Exception('No routes defined for this URI');
    }
}