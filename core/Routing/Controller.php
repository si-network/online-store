<?php

namespace Core\Routing;

class Controller
{
    /**
     * Call the passed controller method
     *
     * @param $method
     * @param $parameters
     */
	public function callMethod($method, $parameters)
	{
		call_user_func_array(array($this,$method),$parameters);
	}
}