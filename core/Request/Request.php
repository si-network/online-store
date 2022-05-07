<?php

namespace Core\Request;

use Core\Interfaces\Request\Request as RequestInterface;

class Request implements RequestInterface
{
    /**
     * $_SERVER global variable
     *
     * @var array
     */
    protected $server;

    /**
     * $_GET global variable
     *
     * @var array
     */
    protected $get;

    /**
     * $_POST global variable
     *
     * @var array
     */
    protected $post;

    /**
     * $_FILES global variable
     *
     * @var array
     */
    protected $files;

    /**
     * $_COOKIE global variable
     *
     * @var array
     */
    protected $cookies;

    /**
     * $_SESSION global variable
     *
     * @var array
     */
    protected $session;

    /**
     * HTTP methods
     *
     * @var string[]
     */
    protected $methods = ['GET', 'POST', 'PUT', 'DELETE', 'HEAD', 'OPTIONS', 'PATCH', 'TRACE', 'CONNECT'];

    /**
     * Request headers
     *
     * @var string[]
     */
    protected $headers = [
        'ip'            => 'REMOTE_ADDR',
        'host'          => 'REMOTE_HOST',
        'port'          => 'REMOTE_PORT',
        'requestTime'   => 'REQUEST_TIME',
        'method'        => 'REQUEST_METHOD',
        'agent'         => 'HTTP_USER_AGENT',
        'uri'           => 'REQUEST_URI',
        'protocol'      => 'SERVER_PROTOCOL'
    ];

    /**
     * Request constructor.
     */
    public function __construct()
    {
        $this->server   = $_SERVER;
        $this->get      = $_GET;
        $this->post     = $_POST;
        $this->files    = $_FILES;
        $this->cookies  = $_COOKIE;
        session_start();
        $this->session  = $_SESSION;
    }

    /**
     * Check whether the incoming request has a method
     *
     * @return bool
     */
    public function hasMethod() : bool
    {
        return in_array($this->method, $this->methods);
    }

    /**
     * Get values of request headers
     * 
     * @param $name
     * @return mixed
     */
    public function __get($name) : string
    {
        if (array_key_exists($name, $this->headers))
            return $this->server[$this->headers[$name]];
    }

    public function __call($name, $arguments)
    {
        if (isset($this->$name)) {
            return $this->$name[implode(',', $arguments)];
        }
    }
}