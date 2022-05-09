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

/* header.twig */
class __TwigTemplate_dd88e2708e93889f30301f937aabd1e075462c1d64b683dd38952e3d34c28d27 extends Template
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
        echo "<!-- HEADER -->
\t<header>
\t\t<div class=\"container\">
\t\t\t<div class=\"logo-mobile\">TECHNO<br>STORE</div>
\t\t\t<div class=\"header__item\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i><span class=\"location\">Москва</span></div>
\t\t\t<div class=\"header__item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i><span class=\"favorite\">Избранное</span></div>
\t\t\t<div class=\"search\">
\t\t\t\t<input class=\"search__input\" placeholder=\"Поиск\">
\t\t\t\t<div class=\"search__button\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></div>
\t\t\t</div>
\t\t\t<div class=\"header__item\"><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i><span class=\"registration\">Авторизация</span></div>
\t\t\t<div class=\"header__item\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i><span class=\"cart\">Корзина</span></div>
\t\t\t<span class=\"bar\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></span>
\t\t</div>
\t</header>
\t<div id=\"mobile-header\">
\t\t<div class=\"header__item\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i><span class=\"location\">Москва</span></div>
\t\t<div class=\"header__item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i><span class=\"favorite\">Избранное</span></div>
\t\t<div class=\"header__item\"><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i><span class=\"registration\">Авторизация</span></div>
\t\t<div class=\"header__item\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i><span class=\"cart\">Корзина</span></div>
\t</div>
<!--END HEADER -->";
    }

    public function getTemplateName()
    {
        return "header.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.twig", "D:\\OpenServer\\domains\\toda\\app\\Views\\header.twig");
    }
}
