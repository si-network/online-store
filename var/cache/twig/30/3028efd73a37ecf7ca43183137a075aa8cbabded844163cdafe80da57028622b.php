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

/* footer.twig */
class __TwigTemplate_3c3a172aa5d5145291c1c452bc63361681182042493be2a0ff943f4007e26c87 extends Template
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
        echo "<!-- FOOTER -->
\t<footer>
\t\t<div class=\"container\">
\t\t\t<div class=\"footer__content\">
\t\t\t\t<div class=\"footer__items\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"\">Доставка</a></li>
\t\t\t\t\t\t<li><a href=\"\">Оплата</a></li>
\t\t\t\t\t\t<li><a href=\"\">Возврат и обмен</a></li>
\t\t\t\t\t\t<li><a href=\"\">Партнерская программа</a></li>
\t\t\t\t\t\t<li><a href=\"\">Юридическим лицам</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__contacts\">
\t\t\t\t\t<div class=\"telephone\">
\t\t\t\t\t\t<span>Телефон службы доставик:</span>
\t\t\t\t\t\t<p>+7 888 888-88-88</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"footer__schedule\">
\t\t\t\t\t\t<span>Режим работы:</span>
\t\t\t\t\t\t<p>КРУГЛОСУТОЧНО</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__social\">
\t\t\t\t\t<span>Мы в социальных сетях</span>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"https://www.instagram.com/\" target=\"_blank\"><i class=\"fa-2x fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"https://vk.com/\" target=\"_blank\"><i class=\"fa-2x fa fa-vk\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"https://www.youtube.com/\" target=\"_blank\"><i class=\"fa-2x fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
<!-- END FOOTER -->
";
    }

    public function getTemplateName()
    {
        return "footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.twig", "D:\\OpenServer\\domains\\toda\\app\\Views\\footer.twig");
    }
}
