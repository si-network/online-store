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

/* catalog_product.twig */
class __TwigTemplate_0a129725ad02aadb4b18f4f4a491f3b4b6227a00e221d5a2b587f60b71ab4f39 extends Template
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
        echo "<a href=\"/products/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getId", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<div class=\"hit__item\">
\t\t<div class=\"item__img\">
\t\t\t";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getDiscount", [], "any", false, false, false, 4)) {
            // line 5
            echo "\t\t\t<div class=\"item__sale_logo\">СКИДКА ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getDiscount", [], "any", false, false, false, 5), "html", null, true);
            echo "%</div>
\t\t\t";
        }
        // line 7
        echo "\t\t\t<img src=\"/images/catalog/products/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getId", [], "any", false, false, false, 7), "html", null, true);
        echo "/main.png\" alt=\"\">
\t\t</div>
\t\t<div class=\"hit__service item__service\">
\t\t\t<div class=\"hit__about item__about\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getTitle", [], "any", false, false, false, 10), "html", null, true);
        echo "</div>
\t\t\t<div class=\"item__quantity\">Осталось: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getQuantity", [], "any", false, false, false, 11), "html", null, true);
        echo "</div>
\t\t\t<div class=\"hit__footer item__footer\">
\t\t\t\t<div class=\"hit__price item__price ";
        // line 13
        echo ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getDiscount", [], "any", false, false, false, 13)) ? ("hit__price_sale") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPrice", [], "any", false, false, false, 13), "html", null, true);
        echo "р.</div>
\t\t\t\t<div class=\"hit__comment\">
\t\t\t\t\t<span>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getCountComments", [], "any", false, false, false, 15), "html", null, true);
        echo "</span>
\t\t\t\t\t<i class=\"fa fa-commenting\" aria-hidden=\"true\" style=\"color: #A0A0A0\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"hit__rating\">
\t\t\t\t\t<span>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getRating", [], "any", false, false, false, 19), "html", null, true);
        echo "</span>
\t\t\t\t\t<i class=\"fa fa-star\" aria-hidden=\"true\" style=\"color: #FFB266\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</a>";
    }

    public function getTemplateName()
    {
        return "catalog_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  75 => 15,  68 => 13,  63 => 11,  59 => 10,  52 => 7,  46 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog_product.twig", "D:\\OpenServer\\domains\\toda\\app\\Views\\catalog_product.twig");
    }
}
