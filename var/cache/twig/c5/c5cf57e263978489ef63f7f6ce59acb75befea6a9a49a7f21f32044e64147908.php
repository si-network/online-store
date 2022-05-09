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

/* promotions.twig */
class __TwigTemplate_0f8a6f99e7f2947d6cfc7d9cd5f620c0a7de07c87f926c3e6fd6a3e99ad72059 extends Template
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
        $this->parent = $this->loadTemplate("default.twig", "promotions.twig", 1);
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
\t<link rel=\"stylesheet\" href=\"/css/promotions.css\">
";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Акции";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "\t<div class=\"container\">
\t\t
\t\t<div class=\"promotions\">
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["promotions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
            // line 15
            echo "\t\t\t<div class=\"promo\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getId", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"promo__img\">
\t\t\t\t\t<a href=\"/promotions/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getId", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getImagePath", [], "any", false, false, false, 18), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"promo__title\">
\t\t\t\t\t<a href=\"/promotions/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getId", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
\t\t\t\t\t\t<p class=\"promo__title__head\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getTitle", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
\t\t\t\t\t</a>
\t\t\t\t\t<p class=\"promo__title__foot\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "getTitleAddition", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t</div>

\t</div>
";
    }

    public function getTemplateName()
    {
        return "promotions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 29,  106 => 25,  101 => 23,  97 => 22,  90 => 18,  86 => 17,  80 => 15,  76 => 14,  71 => 11,  67 => 10,  60 => 8,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "promotions.twig", "D:\\OpenServer\\domains\\toda\\app\\Views\\promotions.twig");
    }
}
