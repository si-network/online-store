<?php

namespace Core\Config;

use Core\Interfaces\Config\Config as ConfigInterface;

class Config implements ConfigInterface
{
    /**
     *  Global configuration from config file
     *
     * @var array
     */
    protected $config = [];

    /**
     * Config constructor
     *
     * @param array $config Set global configuration file
     */
    function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Pass the configuration keys to the config object to as arguments
     *
     * @param string $value A string of the form key1.key2.[...]
     * @return mixed|string Value of selected key
     */
    public function __invoke(string $value)
    {
        return $this->parse($value);
    }

    /**
     * Get value of configuration variable
     *
     * @param string $value A string of the form key1.key2.[...]
     * @return mixed|string Value of selected key
     */
    public function get(string $value) : string
    {
        return $this->parse($value);
    }

    /**
     * Parse the incoming string from configuration
     *
     * @param string $value String for parsing
     * @return mixed|string Value of selected key
     */
    protected function parse(string $value) : string
    {
        $keys = explode('.', $value);

        $value = '';
        foreach ($keys as $key) {
            $value = !empty($value) ? $value[$key] : $this->config[$key];
        }
        return  $value;
    }
}