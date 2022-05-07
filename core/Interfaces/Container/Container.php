<?php

namespace Core\Interfaces\Container;

interface Container
{
    public function get(string $abstract, array $parameters = []);

    public function register($abstract, $concrete = null, $parameters = []);

    public function singleton($abstract, $concrete = null, $parameters = []);

    public function getInstances();

    public static function getInstance();

    public function setRegistersPath($path);
}