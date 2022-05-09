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

/* promotion.twig */
class __TwigTemplate_553328a35d51ceefce4aad79f9a0b5cd646e8198fcd831a36933118431838c72 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'styles' => [$this, 'block_styles'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "default.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("default.twig", "promotion.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        $this->displayParentBlock("styles", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"/css/promotion.css\">
";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "getTitle", [], "any", false, false, false, 8), "html", null, true);
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "\t<div class=\"container\">
\t\t<div class=\"promotion_wrapper\">
\t\t\t<h2 class=\"promotion_title\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "getTitle", [], "any", false, false, false, 13), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "getTitleAddition", [], "any", false, false, false, 13), "html", null, true);
        echo "</h2>
\t\t\t<div class=\"promotion_img\">
\t\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "getImagePath", [], "any", false, false, false, 15), "html", null, true);
        echo "\" alt=\"\">
\t\t\t</div>
\t\t\t<div class=\"promotion_content\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "getDescription", [], "any", false, false, false, 17), "html", null, true);
        echo "</div>
\t\t\t<div class=\"promotion_period\">
\t\t\t\t<div>Период проведения акции:</div>&nbsp;  
\t\t\t\t<div>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "getDateFrom", [], "any", false, false, false, 20), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "getDateTo", [], "any", false, false, false, 20), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "promotion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 20,  87 => 17,  82 => 15,  75 => 13,  71 => 11,  67 => 10,  60 => 8,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "promotion.twig", "D:\\OpenServer\\domains\\toda\\app\\Views\\promotion.twig");
    }
}
