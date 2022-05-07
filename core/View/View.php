<?php

namespace Core\View;

use Core\Interfaces\View\View as ViewInterface;
use Core\Interfaces\View\ViewTemplateEngine;

class View implements ViewInterface
{
    /**
     * Template engine instance
     *
     * @var ViewTemplateEngine
     */
    protected $templateEngineInstance;

    /**
     * Template file
     *
     * @var
     */
    protected $template;

    /**
     * Variables passed to template file
     *
     * @var array
     */
    protected $variables = [];

    /**
     * Accepts an instance of the template engine
     *
     * @param ViewTemplateEngine $templateEngineInstance
     */
    public function __construct(ViewTemplateEngine $templateEngineInstance)
    {
            $this->templateEngineInstance = $templateEngineInstance;
    }

    /**
     * Registers template filename
     *
     * @param $template
     * @return $this
     */
	public function show($template)
	{
	    $this->template = $template;
	    return $this;
	}

    /**
     * Registers variables passed to template file
     *
     * @param $variable
     * @param null $value
     * @return $this
     */
	public function with($variable, $value = null) //доделать
	{
        !is_array($variable) ? $this->variables[$variable] = $value : $this->variables = $variable;
        return $this;
	}

    /**
     * Call the prepared view
     *
     * @return mixed
     */
	public function callView()
    {
        try {
            if (isset($this->templateEngineInstance))
                return $this->templateEngineInstance->callView($this->template, $this->variables);
            else
                throw new \Exception("There is no instance of the template engine in " . get_class($this));
        } catch (\Exception $error) {
            echo $error->getMessage();
        }
    }

    /**
     * @return bool
     */
    public function hasTemplate() : bool
    {
        return isset($this->template);
    }

    /**
     * @return array
     */
    public function getVariables()
    {
        return $this->variables;
    }
}