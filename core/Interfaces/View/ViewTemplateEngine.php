<?php

namespace Core\Interfaces\View;

interface ViewTemplateEngine
{
    public function callView($template, $variables);
}