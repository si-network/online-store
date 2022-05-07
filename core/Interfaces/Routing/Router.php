<?php

namespace Core\Interfaces\Routing;

use Closure;


interface Router
{
	public function boot();

	public static function get(string $route, Closure $callback = null); 

    public static function post(string $route, Closure $callback = null); 

    public static function put(string $route, Closure $callback = null);

    public static function delete(string $route, Closure $callback = null);
}