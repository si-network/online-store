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

/* catalog.twig */
class __TwigTemplate_fa849cce6a9beb10926fa37b9173eaba1d12752081d8ae4a6a759755a6ff9a64 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'styles' => [$this, 'block_styles'],
            'scriptsStart' => [$this, 'block_scriptsStart'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'catalog_navigation' => [$this, 'block_catalog_navigation'],
            'catalog_content' => [$this, 'block_catalog_content'],
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
        $this->parent = $this->loadTemplate("default.twig", "catalog.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $this->displayParentBlock("styles", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"/css/catalog.css\">
";
    }

    // line 7
    public function block_scriptsStart($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $this->displayParentBlock("scriptsStart", $context, $blocks);
        echo "
<script src=\"/js/catalog.js\"></script>
";
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Каталог";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "<div class=\"container\">
\t<div class=\"catalog\">
\t\t<div class=\"catalog_navigation\">
\t\t";
        // line 16
        $this->displayBlock('catalog_navigation', $context, $blocks);
        // line 37
        echo "\t\t</div>
\t\t<div class=\"catalog_content\">
\t\t";
        // line 39
        $this->displayBlock('catalog_content', $context, $blocks);
        // line 41
        echo "\t\t</div>
\t</div>
</div>
";
    }

    // line 16
    public function block_catalog_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "\t\t\t<div class=\"catalog_categories cc\">
\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 19
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "getParentId", [], "any", false, false, false, 19)) {
                // line 20
                echo "\t\t\t\t<a href=\"/catalog/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getName", [], "any", false, false, false, 20), "html", null, true);
                echo "\" class=\"category_wrapper_link\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId", [], "any", false, false, false, 20), "html", null, true);
                echo "\" parent_id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getParentId", [], "any", false, false, false, 20), "html", null, true);
                echo "\">
\t\t\t\t\t<div class=\"category_wrapper\" >
\t\t\t\t\t\t<div class=\"category child_category\" id=\"";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId", [], "any", false, false, false, 22), "html", null, true);
                echo "\" parent_id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getParentId", [], "any", false, false, false, 22), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getTitle", [], "any", false, false, false, 22), "html", null, true);
                echo "</div>
\t\t\t\t\t\t<div class=\"catalog_categories childs\" id=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId", [], "any", false, false, false, 23), "html", null, true);
                echo "\"></div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t<a href=\"/catalog/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getName", [], "any", false, false, false, 27), "html", null, true);
                echo "\" class=\"category_wrapper_link\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId", [], "any", false, false, false, 27), "html", null, true);
                echo "\">
\t\t        \t<div class=\"category_wrapper\">
\t\t        \t\t<div class=\"category\" id=\"";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId", [], "any", false, false, false, 29), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getTitle", [], "any", false, false, false, 29), "html", null, true);
                echo "</div>
\t\t        \t\t<div class=\"catalog_categories childs\" id=\"";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId", [], "any", false, false, false, 30), "html", null, true);
                echo "\"></div>
\t\t        \t</div>
\t        \t</a>\t
\t\t\t\t";
            }
            // line 34
            echo "\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t</div>
\t\t";
    }

    // line 39
    public function block_catalog_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 40,  175 => 39,  170 => 35,  164 => 34,  157 => 30,  151 => 29,  143 => 27,  136 => 23,  128 => 22,  118 => 20,  115 => 19,  111 => 18,  108 => 17,  104 => 16,  97 => 41,  95 => 39,  91 => 37,  89 => 16,  84 => 13,  80 => 12,  73 => 11,  66 => 8,  62 => 7,  55 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog.twig", "D:\\OpenServer\\domains\\toda\\app\\Views\\catalog.twig");
    }
}
