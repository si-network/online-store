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

/* navigation.twig */
class __TwigTemplate_759e63646b4b04ab9ef549fa74451ddfb6b7a80d80e4444616232d8c5b3aeda1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- NAVIGATION -->
\t<div class=\"navbar-nav\"></div>
\t<section id=\"navigation\">
\t\t<div class=\"container\">
\t<!--\t<h5 class=\"logo\">TECHNO STORE</h5>  -->
\t\t\t<nav class=\"navbar\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"/\">ГЛАВНАЯ</a></li>
\t\t\t\t\t<li><a href=\"/catalog\">КАТАЛОГ</a></li>
\t\t\t\t\t<li><a href=\"/promotions\">АКЦИИ</a></li>
\t\t\t\t\t<li><a href=\"/about\">О МАГАЗИНЕ</a></li>
\t\t\t\t\t<li><a href=\"/contacts\">КОНТАКТЫ</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</section>
<!-- END NAVIGATION -->";
    }

    public function getTemplateName()
    {
        return "navigation.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navigation.twig", "D:\\OpenServer\\domains\\toda\\app\\Views\\navigation.twig");
    }
}
