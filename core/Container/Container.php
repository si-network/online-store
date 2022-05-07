<?php

namespace Core\Container;

use Core\Interfaces\Container\Container as ContainerInterface;
use Closure;
use ReflectionClass;
use ReflectionException;


/**
 * Class Container
 */
class Container implements ContainerInterface
{
    /**
     * Container instance
     *
     * @var
     */
    protected static $instance;

    /**
     * All registered instances and resolved in the process
     *
     * @var array
     */
    protected $instances = [];

    /**
     * All registered singletons in the keys, and resolved object will be added in the value only after resolve
     *
     * @var array
     */
    public $singletons = [];

    /**
     * Parameters, that are not an object type
     *
     * @var array
     */
    protected $registeredParameters = [];

    /**
     * Get resolved instance
     *
     * @param string $abstract
     * @param array $parameters
     * @return mixed|object
     * @throws ReflectionException
     */
    public function get(string $abstract, array $parameters = [])
    {
        try {
            return $this->resolve($abstract, $parameters);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }
    }

    /**
     * @param string $abstract
     * @param array $parameters
     * @return mixed|object
     * @throws ReflectionException
     */
    public function resolve(string $abstract, array $parameters = [])
    {
        if ($this->has($abstract)) {
            if ($this->isSingleton($abstract))
                return $this->resolveSingleton($abstract);

            return $this->generate($this->instances[$abstract], $parameters);
        }
        
        return $this->generate($abstract, $parameters);
    }

    /**
     * Check if the instance is registered
     *
     * @param $abstract
     * @return bool
     */
    protected function has($abstract): bool
    {
        return isset($this->instances[$abstract]);
    }

    /**
     * Is the given key registered as singleton
     *
     * @param $key
     * @return bool
     */
    protected function isSingleton($key) : bool
    {
        return array_key_exists($key, $this->singletons);
    }

    /**
     * @param $abstract
     * @return mixed|object
     * @throws ReflectionException
     */
    protected function resolveSingleton($abstract)
    {
        if (!empty($this->singletons[$abstract])) {
            return $this->singletons[$abstract];
        }

        return $this->singletons[$abstract] = $this->generate($this->instances[$abstract]);
    }

    /**
     * Generate a ready-made instance
     *
     * @param $concrete
     * @param array $parameters
     * @return mixed|object
     * @throws ReflectionException
     */
    protected function generate($concrete, $parameters = [])
    {
        if ($concrete instanceof Closure)
            return $concrete($this, $parameters);

        $reflectionClass = new ReflectionClass($concrete);

        $constructor = $reflectionClass->getConstructor();
        if (is_null($constructor))
            return $reflectionClass->newInstance();

        $constructorParameters = $constructor->getParameters();
        $dependencies = $this->getDependencies($concrete, $constructorParameters, $parameters);

        return $reflectionClass->newInstanceArgs($dependencies);
    }

    /**
     * Get all instance dependencies
     *
     * @param $constructorParameters
     * @param $parameters
     * @return array
     * @throws ReflectionException
     */
    protected function getDependencies($concrete, $constructorParameters, $parameters) : array
    {
        $dependencies = [];

        foreach ($constructorParameters as $parameter) {

            if (isset($this->registeredParameters[$concrete][$parameter->name])) {
                $dependencies[] = $this->registeredParameters[$concrete][$parameter->name];
                continue;
            }

            if ($parameter->isDefaultValueAvailable()) {
                $dependencies[] = $parameter->getDefaultValue();
                continue;
            }

            if ($parameter->hasType() && !$parameter->getType()->isBuiltin()) {
                $dependencies[] = $this->get($parameter->getType()->getName());
            }

//            if ($parameters[$parameter->getName()]) {
//                $dependencies[] = $parameters[$parameter->getName()];
//            }
        }
        return $dependencies;
    }

    /**
     * Register an instance
     *
     * @param $abstract
     * @param null $concrete
     * @param array $parameters
     */
    public function register($abstract, $concrete = null, $parameters = [])
    {

        $concrete = $concrete ?? $abstract;
        $this->instances[$abstract] = $concrete;
        if (!empty($parameters))
            $this->setRegisteredParameters($concrete ,$parameters);
    }

    /**
     * Register a single instance
     *
     * @param $abstract
     * @param null $concrete
     * @param array $parameters
     */
    public function singleton($abstract, $concrete = null, $parameters = [])
    {
        $this->register($abstract, $concrete, $parameters);
        $this->singletons[$abstract] = '';
    }

    /**
     * Get all registered and resolved in the process instances
     *
     * @return array
     */
    public function getInstances() : array
    {
        return $this->instances;
    }

    /**
     * Get single container instance
     *
     * @return ContainerInterface
     */
    public static function getInstance() : ContainerInterface
    {
        if (is_null(static::$instance)) {
            $container = new static;
            static::$instance = $container;
            $container->singleton(ContainerInterface::class, get_class($container));
            $container->singletons[ContainerInterface::class] = $container;
        }

        return static::$instance;
    }

    /**
     * Get registered static parameters
     *
     * @param $concrete
     * @return mixed|null
     */
    protected function getRegisteredParameters($concrete)
    {
        if (isset($this->registeredParameters[$concrete]))
            return $this->registeredParameters[$concrete];
    }

    /**
     * Set registered static parameters
     *
     * @param $concrete
     * @param $parameters
     */
    protected function setRegisteredParameters($concrete, $parameters)
    {
        $this->registeredParameters[$concrete] = $parameters;
    }

    /**
     * Set the path to the file with registrations
     *
     * @param $path
     */
    public function setRegistersPath($path)
    {
        if (file_exists($path)) {
            require_once $path;
        }
    }
}