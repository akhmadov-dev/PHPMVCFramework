<?php

/**
 * Summary of Application
 * @author AkhmadovDev
 * @copyright (c) 2023
 */

namespace app\core;

/**
 * Class Application
 * @package app\core
 */
class Application
{
    public Router $router;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function run()
    {
        $this->router->resolve();
    }
}

?>