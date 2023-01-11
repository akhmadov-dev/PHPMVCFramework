<?php

/**
 * Summary of Router
 * @author AkhmadovDev
 * @copyright (c) 2023
 */

namespace app\core;

class Router
{

    /**
     * $routes
     * @var array
     */
    protected array $routes = [];

    /**
     * get method
     * @param string $path
     * @param callable $callback
     * @return void
     */
    public function get(string $path, callable $callback): void
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        
    }

}