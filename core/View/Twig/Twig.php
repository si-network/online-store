<?php

namespace Core\View\Twig;

use Core\Interfaces\View\ViewTemplateEngine;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Twig implements ViewTemplateEngine
{
    /**
     * @var Environment
     */
    protected $engineInstance;

    /**
     * Twig constructor.
     *
     * @param $templatesPath
     * @param $cashPath
     */
    public function __construct($templatesPath, $cashPath)
    {
        $loader = new FilesystemLoader($templatesPath);
        $this->engineInstance = new Environment($loader, [
            'cache' => $cashPath,
        ]);
    }

    /**
     * @param $template
     * @param $variables
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function callView($template, $variables)
    {
        if (isset($this->engineInstance)) {

            if (empty($variables)) {
                return $this->engineInstance->render($template);
            } else {
                return $this->engineInstance->render($template, $variables);
            }
        } else {
            throw new \Exception("An instance of the template engine class has not been initiated in " . get_class($this));
        }
    }
}