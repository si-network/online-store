<?php
namespace Core\Routing;

use Core\Interfaces\Routing\Router as RouterInterface;
use Core\Interfaces\Config\Config;
use Core\Interfaces\Request\Request;
use Core\Interfaces\Container\Container;
use Closure;

class Router implements RouterInterface
{
    /**
     * Config instance
     *
     * @var Config
     */
	protected $config;

    /**
     * Request instance
     *
     * @var Request
     */
	protected $request;

    /**
     * Container instance
     *
     * @var Container
     */
	protected $container;

    /**
     * UrI instance
     *
     * @var UrI
     */
	protected $uri;

    /**
     * Router constructor.
     *
     * @param Config $config
     * @param Request $request
     * @param Container $container
     * @param Uri $uri
     * @param $routesFile
     */
	function __construct(Config $config, Request $request, Container $container, Uri $uri, $routesFile)
	{	
		$this->config = $config;
		$this->request = $request;
		$this->container = $container;
		$this->uri = $uri;

		if (file_exists($routesFile)) 
			require_once $routesFile;
	}

    /**
     * Bootstrap router
     *
     * @throws \Exception
     */
	public function boot()
	{
		foreach (RouteCollection::$routes as $route) {
			if ($this->isFoundRouteForURI($route)) 
				$this->bootRouteResponse($route);
		}
	}

    /**
     * Check the availability of the appropriate route
     *
     * @param Route $route
     * @return bool
     */
	protected function isFoundRouteForURI(Route $route) : bool
	{
		return preg_match($route->getRouteExpression(), $this->request->uri) && $route->getMethod() == $this->request->method;
	}

    /**
     * @param Route $route
     * @throws \Exception
     */
	protected function bootRouteResponse(Route $route)
	{
		if ($route->getController() !== null) {
			$this->callController($route->getController(), $route->getAction(), $this->uri->fetchParameters($route));
		} elseif ($route->getCallback() !== null) {
			$this->callCallback($route->getCallback(), $route->getParameters()); // Доработать
		}
	}

    /**
     * Call bound controller
     *
     * @param $controller
     * @param $method
     * @param $parameters
     * @return mixed
     * @throws \Exception
     */
	protected function callController($controller, $method, $parameters)
	{	
		if (file_exists($this->config->get('path.controller') . '/' . $controller . 'Controller.php')) {
			$controllerClass = $this->config->get('namespace.controller') . '\\' . $controller . 'Controller';
			$calledController = $this->container->get($controllerClass);
            return $calledController->callMethod($method, $parameters);
		}
		throw new \Exception("Controller $controller not found", 1);
	}

    /**
     * Call bound callback function
     *
     * @param $function
     * @param $parameters
     * @return false|mixed
     */
	protected function callCallback($function, $parameters)
	{
		return call_user_func($function,$parameters);
	}

    /**
     * @param string $method
     * @param string $route
     * @param Closure|null $callback
     * @return Route
     */
	protected static function addRoute(string $method, string $route, Closure $callback = null) : Route
	{
		return new Route($method, $route, $callback);
	}

    /**
     * Add a route with the get method
     *
     * @param string $route
     * @param Closure|null $callback
     * @return Route
     */
	public static function get(string $route, Closure $callback = null) : Route
    {
    	return static::addRoute('GET', $route, $callback);
    }

    /**
     * Add a route with the post method
     *
     * @param string $route
     * @param Closure|null $callback
     * @return Route
     */
    public static function post(string $route, Closure $callback = null) : Route
    {
    	return static::addRoute('POST', $route, $callback);
    }

    /**
     * Add a route with the put method
     *
     * @param string $route
     * @param Closure|null $callback
     * @return Route
     */
    public static function put(string $route, Closure $callback = null) : Route
    {
    	return static::addRoute('PUT', $route, $callback);
    }

    /**
     * Add a route with the delete method
     *
     * @param string $route
     * @param Closure|null $callback
     * @return Route
     */
    public static function delete(string $route, Closure $callback = null) : Route
    {
    	return static::addRoute('DELETE', $route, $callback);
    }
}