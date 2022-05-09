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

/* main.twig */
class __TwigTemplate_2400bb13930e6e546bea4fdc1b1aa88ffed23df4c45ac0c0279a960720f4e8a2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
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
        $this->parent = $this->loadTemplate("default.twig", "main.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "TECHNOSTORE - магазин компьютерной техники";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<!-- BANNER -->
\t<section class=\"banner\">
\t\t<div class=\"container\">
\t\t\t<div class=\"banner-block owl-carousel\">
\t\t\t\t<img class=\"item\" src=\"/images/main/banner1.png\" alt=\"\">
\t\t\t\t<img class=\"item\" src=\"/images/main/banner2.png\" alt=\"\">
\t\t\t\t<img class=\"item\" src=\"/images/main/banner3.png\" alt=\"\">
\t\t\t</div>
\t\t</div>
\t</section>
<!-- END BANNER -->

<!-- SALES -->
\t<section id=\"sales\">
\t\t<div class=\"container\">
\t\t\t<h2>
\t\t\t\t<a href=\"/discounts\">Товары по скидке</a>
\t\t\t</h2>
\t\t\t<div id=\"sales__carousel\" class=\"owl-carousel\">
\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["discountProducts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 26
            echo "\t\t\t\t<a href=\"/products/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\"sales__item\">
\t\t\t\t\t\t<div class=\"sales__img item__img\">
\t\t\t\t\t\t\t<div class=\"sales__logo\">-";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getDiscount", [], "any", false, false, false, 29), "html", null, true);
            echo "%</div>
\t\t\t\t\t\t\t<img src=\"/images/catalog/products/";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 30), "html", null, true);
            echo "/main.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sales__service item__service\">
\t\t\t\t\t\t\t<div class=\"sales__about item__about\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "any", false, false, false, 33), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"sales__footer item__footer\">
\t\t\t\t\t\t\t\t<div class=\"sales__price\"><div class=\"line_olp_price\"></div>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "any", false, false, false, 35), "html", null, true);
            echo "р.</div>
\t\t\t\t\t\t\t\t<div class=\"sales__price discount__price\"><b>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getDiscountPrice", [], "any", false, false, false, 36), "html", null, true);
            echo "р.</b></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t</div>
\t\t</div>
\t</section>
<!-- END HIT SALES -->

<!-- SHOWCASE -->
\t<section id=\"showcase\">
\t\t<div class=\"container\">
\t\t\t<h2>Популярные товары</h2>
\t\t\t<div class=\"showcase-grid\">
\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["popularProducts"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 53
            echo "\t\t\t\t";
            $this->loadTemplate("catalog_product.twig", "main.twig", 53)->display($context);
            // line 54
            echo "\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t</div>
\t\t\t<div class=\"show_more\" count-products=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["popularProducts"] ?? null)), "html", null, true);
        echo "\">
\t\t\t\t<span>ПОКАЗАТЬ ЕЩЁ</span>
\t\t\t\t<i class=\"fa fa-angle-double-down fa-4x\" aria-hidden=\"true\"></i>
\t\t\t</div>
\t\t</div>
\t</section>
<!-- END SHOWCASE -->

<!-- NEW PRODUCTS -->
\t<section id=\"new-products\">
\t\t<div class=\"container\">
\t\t\t<h2>
\t\t\t\t<a href=\"/new_goods\">Новинки</a>
\t\t\t</h2>
\t\t\t";
        // line 70
        $context["num"] = 2;
        // line 71
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newProducts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 72
            echo "\t\t\t<div class=\"new-product\">
\t\t\t\t";
            // line 73
            if ((0 === twig_compare((($context["num"] ?? null) % 2), 0))) {
                // line 74
                echo "\t\t\t\t<div class=\"new-product__left\">
\t\t\t\t\t<div class=\"new-product__img\">
\t\t\t\t\t\t<img src=\"/images/catalog/products/";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 76), "html", null, true);
                echo "/main.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"new-product__right\">
\t\t\t\t\t<div class=\"new-product__title\">
\t\t\t\t\t\t<p>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "any", false, false, false, 81), "html", null, true);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 85
                echo "\t\t\t\t<div class=\"new-product__right\">
\t\t\t\t\t<div class=\"new-product__title\">
\t\t\t\t\t\t<p>";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "any", false, false, false, 87), "html", null, true);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"new-product__left\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"new-product__img\">
\t\t\t\t\t\t<img src=\"/images/catalog/products/";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 93), "html", null, true);
                echo "/main.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t";
            $context["num"] = (($context["num"] ?? null) + 1);
            // line 98
            echo "\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "\t\t</div>
\t</section>
<!-- END NEW PRODUCTS -->
";
    }

    // line 105
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "
<!-- JS PLUGIN OwlCarousel2 -->
\t<script src=\"/js/plugins/owl/owl.carousel.min.js\"></script>
\t<script src=\"/js/plugins/owl/owl-setting.js\"></script>
\t<link rel=\"stylesheet\" href=\"/js/plugins/owl/owl.carousel.min.css\">
\t<link rel=\"stylesheet\" href=\"/js/plugins/owl/owl.theme.default.min.css\">

";
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 106,  256 => 105,  249 => 100,  242 => 98,  239 => 97,  232 => 93,  223 => 87,  219 => 85,  212 => 81,  204 => 76,  200 => 74,  198 => 73,  195 => 72,  190 => 71,  188 => 70,  171 => 56,  168 => 55,  154 => 54,  151 => 53,  134 => 52,  122 => 42,  110 => 36,  106 => 35,  101 => 33,  95 => 30,  91 => 29,  84 => 26,  80 => 25,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main.twig", "D:\\OpenServer\\domains\\toda\\app\\Views\\main.twig");
    }
}
