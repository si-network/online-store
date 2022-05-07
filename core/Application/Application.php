<?php

namespace Core\Application;

use Core\Interfaces\Application\Application as ApplicationInterface;
use Core\Interfaces\Container\Container;
use Core\Interfaces\Request\Request;
use Core\Interfaces\Routing\Router;

class Application implements ApplicationInterface
{
    /**
     *  Container instance
     *
     * @var Container
     */
    protected $container;

    /**
     * Request instance
     *
     * @var Request
     */
    protected $request;

    /**
     *  Router instance
     *
     * @var Router
     */
    protected $router;

    /**
     * Application constructor.
     *
     * @param Container $container
     * @param Request $request
     * @param Router $router
     */
    public function __construct(Container $container, Request $request, Router $router)
    {
        $this->container = $container;
        $this->request = $request;
        $this->router = $router;
    }

    /**
     * Start application
     */
    public function start()
    {
        if ($this->request->hasMethod()) {
            $this->httpLoad();
        } else 
            $this->CLILoad();
        
    }

    /**
     * Boot http request
     *
     */
    protected function httpLoad()
    {
        $this->router->boot();
    }

    /**
     * Boot CLI request
     */
    protected function CLILoad()
    {

    }
}