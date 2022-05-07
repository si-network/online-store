<?php

namespace Core\Routing;

class Uri
{
    /**
     * Fetch parameters from route
     *
     * @param Route $route
     * @return mixed
     */
	public function fetchParameters(Route $route)
	{
		preg_match_all($route->getRouteExpression(), $_SERVER['REQUEST_URI'], $fetchedParameters);
		unset($fetchedParameters[0]);
		array_walk($fetchedParameters, function(&$value) {$value = $value[0];});
		return $fetchedParameters;
	}
}