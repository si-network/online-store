<?php

namespace Core\Facades;

use Core\Interfaces\Container\Container;
use Exception;

class Facade
{
    /**
     * Container instance
     *
     * @var Container
     */
	protected static $container;

    /**
     * Registered facades
     *
     * @var array
     */
	protected static $bindings = [];

    /**
     *
     * Set container instance
     * @param Container $container
     */
    public static function setContainer(Container $container)
    {
        static::$container = $container;
    }

    /**
     * Register facade
     *
     * @param $facade
     * @param $called
     */
    public static function register($facade, $called)
    {
        if (class_exists($facade) && interface_exists($called))
            static::$bindings[$facade] = $called;
    }

    /**
     * Register array of facades
     *
     * @param array $registers
     */
    public static function registerAll(array $registers)
    {
        foreach ($registers as $facade => $called) {
            static::register($facade, $called);
        }
    }

    /**
     * @return string
     */
	protected static function getClass() : string
    {
        return get_called_class();
    }

    /**
     * Get resolved instance for facade
     *
     * @return mixed
     * @throws Exception
     */
	protected static function getCalledClass()
    {
        $calledFacade = static::getClass();

        if (array_key_exists($calledFacade, static::$bindings) && isset(static::$container)) {

            if (array_key_exists(static::$bindings[$calledFacade], static::$container->getInstances()))
                return static::$container->get(static::$bindings[$calledFacade]);
        }
        throw new Exception("Facade {$calledFacade} is not registered ");
    }

    /**
     * @param $method
     * @param $args
     * @return false|mixed
     */
    public static function __callStatic($method, $args)
    {
        try {
            return call_user_func_array(array(static::getCalledClass(), $method), $args);
        } catch (Exception $error) {
            echo $error->getMessage();
        }
    }
}