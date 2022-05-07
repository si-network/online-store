<?php
namespace Core\Routing;

use Core\Interfaces\Routing\Route as RouteInterface;
use Closure;

class Route implements RouteInterface
{
    /**
     * Routes uri
     *
     * @var string
     */
	protected $route;

    /**
     * Routes expression
     *
     * @var
     */
	protected $routeExpression;

    /**
     * Routes controller
     *
     * @var
     */
	protected $controller;

    /**
     * Routes controller method
     *
     * @var
     */
	protected $action;

    /**
     * Routes callback function
     *
     * @var
     */
	protected $callback;

    /**
     * Routes parameters from uri
     *
     * @var
     */
	protected $parameters = [];

    /**
     * Routes http method
     *
     * @var
     */
	protected $method;

    /**
     * Route constructor.
     *
     * @param string $method
     * @param string|null $route
     * @param Closure|null $callback
     */
	function __construct(string $method, string $route = null,  Closure $callback = null)
	{
		if ($route) {
			RouteCollection::$routes[] = $this;
			$this->route = $route;
			$this->method = $method;
			$this->parse();
		}	
		if ($callback) {
			$this->callback = $callback;
		}
	}

    /**
     * Bind the controller
     *
     * @param string $controller
     * @param string $action
     * @return $this
     */
    public function controller(string $controller,string $action) : Route
    {
        $this->controller = $controller;
        $this->action = $action;
        return $this;
    }

    /**
     * Bind the expressions
     *
     * @param array $expressions
     */
    public function where(array $expressions)
    {
        // wrap all $expressions values by parentheses
        array_walk($expressions, function(&$expValue) {$expValue = '('.$expValue.')';});
        // wrap all $expressions keys by curly braces
        $expressions = array_combine(array_map(function($expKey) {return "{" . $expKey . "}";}, array_keys($expressions)), $expressions);

        $this->parameters = array_replace($this->parameters, $expressions);
        $this->routeExpression = $this->convertRouteToExpression($this->changeParametersToExpression());
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return  $this->controller;
    }

    /**
     * @return mixed
     */
    public function getRouteExpression()
    {
        return  $this->routeExpression;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return array
     */
    public function getParameters() : array
    {
        return $this->parameters;
    }

    /**
     * @return string
     */
    public function getMethod() : string
    {
        return $this->method;
    }

    /**
     * @return Closure
     */
    public function getCallback() : Closure
    {
        return $this->callback;
    }

    /**
     * Parse route
     */
	protected function parse()
	{	
		$this->parameters = array_fill_keys($this->fetchParameters()[0], '([a-zA-Z0-9_]+\b)');

		if (empty($this->parameters)) {
			$this->routeExpression = $this->convertRouteToExpression($this->route);
			return;
		}
		$this->routeExpression = $this->convertRouteToExpression($this->changeParametersToExpression());						
	}

    /**
     * @return string
     */
	protected function changeParametersToExpression() : string
	{
		return str_replace(array_keys($this->parameters), $this->parameters , $this->route);
	}

    /**
     * @param $route
     * @return string
     */
	protected function convertRouteToExpression($route) : string
	{
		return '~^' . $route . '/?$~';
	}

    /**
     * @return array
     */
	protected function fetchParameters() : array
	{
		preg_match_all('/\{(.*?)\}/', $this->route, $parameters);
		return $parameters;
	}
}