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

/* catalog_category.twig */
class __TwigTemplate_3f969fc7f16054b3b74f0e59807c11b072107be8a6b08af5ee252484cf5e5561 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'catalog_navigation' => [$this, 'block_catalog_navigation'],
            'catalog_content' => [$this, 'block_catalog_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "catalog.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("catalog.twig", "catalog_category.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 4
    public function block_catalog_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div class=\"categories_wrapper\">
\t<div class=\"categories_swapper\">
\t\t<span>Все категории</span>
\t\t<i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
\t</div>
\t";
        // line 10
        $this->displayParentBlock("catalog_navigation", $context, $blocks);
        echo "
</div>

";
        // line 13
        if (($context["childs"] ?? null)) {
            // line 14
            echo "<div class=\"catalog_categories childs_categories\">
\t";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["childs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 16
                echo "\t<a href=\"/catalog/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "getName", [], "any", false, false, false, 16), "html", null, true);
                echo "\"  id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "getId", [], "any", false, false, false, 16), "html", null, true);
                echo "\" parent_id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "getParentId", [], "any", false, false, false, 16), "html", null, true);
                echo "\">
\t\t<div class=\"category_wrapper\" >
\t\t\t<div class=\"category\" id=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "getId", [], "any", false, false, false, 18), "html", null, true);
                echo "\" parent_id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "getParentId", [], "any", false, false, false, 18), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "getTitle", [], "any", false, false, false, 18), "html", null, true);
                echo "</div>
\t\t\t<div class=\"catalog_categories childs\" id=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "getId", [], "any", false, false, false, 19), "html", null, true);
                echo "\"></div>
\t\t</div>
\t</a>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "</div>
";
        }
        // line 25
        echo "
";
        // line 26
        if (($context["filters"] ?? null)) {
            // line 27
            echo "<div class=\"category_filters\">
\t<div class=\"category_filters_wrapper\">
\t";
            // line 29
            $this->loadTemplate("catalog_filters.twig", "catalog_category.twig", 29)->display($context);
            // line 30
            echo "\t</div>
</div>
";
        }
        // line 33
        echo "
";
    }

    // line 35
    public function block_catalog_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "<div class=\"childs_categories_block\">
\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["childs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 38
            echo "\t<div class=\"child_category_block\">
\t\t<a href=\"/catalog/";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "getName", [], "any", false, false, false, 39), "html", null, true);
            echo "\">
\t\t\t<div class=\"child_category_img\">
\t\t\t\t<img src=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "getImagePath", [], "any", false, false, false, 41), "html", null, true);
            echo "\" alt=\"\">
\t\t\t</div>
\t\t</a>
\t\t<div>
\t\t\t<a href=\"/catalog/";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "getName", [], "any", false, false, false, 45), "html", null, true);
            echo "\"  id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "getId", [], "any", false, false, false, 45), "html", null, true);
            echo "\" parent_id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "getParentId", [], "any", false, false, false, 45), "html", null, true);
            echo "\">
\t\t\t\t<div>
\t\t\t\t\t<div class=\"child_category_title\" id=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "getId", [], "any", false, false, false, 47), "html", null, true);
            echo "\" parent_id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "getParentId", [], "any", false, false, false, 47), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "getTitle", [], "any", false, false, false, 47), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "</div>
";
        // line 54
        if (($context["products"] ?? null)) {
            // line 55
            echo "<div class=\"showcase-grid\">
";
            // line 56
            $this->loadTemplate("catalog_products.twig", "catalog_category.twig", 56)->display($context);
            // line 57
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "catalog_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 57,  193 => 56,  190 => 55,  188 => 54,  185 => 53,  169 => 47,  160 => 45,  153 => 41,  148 => 39,  145 => 38,  141 => 37,  138 => 36,  134 => 35,  129 => 33,  124 => 30,  122 => 29,  118 => 27,  116 => 26,  113 => 25,  109 => 23,  99 => 19,  91 => 18,  81 => 16,  77 => 15,  74 => 14,  72 => 13,  66 => 10,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog_category.twig", "D:\\OpenServer\\domains\\toda\\app\\Views\\catalog_category.twig");
    }
}
