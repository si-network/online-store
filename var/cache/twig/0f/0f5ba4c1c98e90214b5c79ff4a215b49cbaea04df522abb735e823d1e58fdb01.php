<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default.twig */
class __TwigTemplate_46d2f385268207a9b094aae58de29c7b1c1dac52439782acd85179020d44a8e9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'styles' => [$this, 'block_styles'],
            'scriptsStart' => [$this, 'block_scriptsStart'],
            'wrapper' => [$this, 'block_wrapper'],
            'header' => [$this, 'block_header'],
            'content_wrapper' => [$this, 'block_content_wrapper'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
        // line 7
        $this->displayBlock('styles', $context, $blocks);
        // line 11
        echo "\t";
        $this->displayBlock('scriptsStart', $context, $blocks);
        // line 15
        echo "
</head>
<body>
\t<noscript><p>Необходимо включить Javascript или обновить браузер до последней версии.</p></noscript>
\t";
        // line 19
        $this->displayBlock('wrapper', $context, $blocks);
        // line 38
        echo "</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 7
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/style.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/font-awesome/css/font-awesome.min.css\">
\t";
    }

    // line 11
    public function block_scriptsStart($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "\t<script src=\"/js/jquery-3.5.1.min.js\"></script>
\t<script src=\"/js/default.js\"></script>
\t";
    }

    // line 19
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "\t\t";
        $this->displayBlock('header', $context, $blocks);
        // line 23
        echo "\t\t";
        $this->displayBlock('content_wrapper', $context, $blocks);
        // line 32
        echo "\t\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 35
        echo "\t\t";
        $this->displayBlock('scripts', $context, $blocks);
        // line 37
        echo "\t";
    }

    // line 20
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "\t\t\t";
        $this->loadTemplate("header.twig", "default.twig", 21)->display($context);
        // line 22
        echo "\t\t";
    }

    // line 23
    public function block_content_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "\t\t\t<div class=\"content_wrapper\">
\t\t\t\t";
        // line 25
        $this->loadTemplate("navigation.twig", "default.twig", 25)->display($context);
        // line 26
        echo "\t\t\t\t<div class=\"content\">
\t\t\t\t\t";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "\t\t\t\t\t";
    }

    // line 32
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "\t\t\t";
        $this->loadTemplate("footer.twig", "default.twig", 33)->display($context);
        // line 34
        echo "\t\t";
    }

    // line 35
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "default.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 36,  171 => 35,  167 => 34,  164 => 33,  160 => 32,  156 => 28,  152 => 27,  146 => 29,  144 => 27,  141 => 26,  139 => 25,  136 => 24,  132 => 23,  128 => 22,  125 => 21,  121 => 20,  117 => 37,  114 => 35,  111 => 32,  108 => 23,  105 => 20,  101 => 19,  95 => 12,  91 => 11,  85 => 8,  81 => 7,  75 => 6,  70 => 38,  68 => 19,  62 => 15,  59 => 11,  57 => 7,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default.twig", "D:\\OpenServer\\domains\\toda\\app\\Views\\default.twig");
    }
}
