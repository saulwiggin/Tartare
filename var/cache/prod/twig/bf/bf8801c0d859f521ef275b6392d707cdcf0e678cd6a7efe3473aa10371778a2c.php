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

/* SyliusShopBundle:Account/Order/Grid/Action:_pay_deprecated.html.twig */
class __TwigTemplate_22ade37e96e16148baf6efeeaa5b4687936a8e6872d573aa95488c80136b5636 extends \Twig\Template
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
        @trigger_error("The \"pay\" grid action is deprecated, use \"shop_pay\" instead."." (\"SyliusShopBundle:Account/Order/Grid/Action:_pay_deprecated.html.twig\" at line 1).", E_USER_DEPRECATED);
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("@SyliusShop/Account/Order/Grid/Action/pay.html.twig", "SyliusShopBundle:Account/Order/Grid/Action:_pay_deprecated.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Grid/Action:_pay_deprecated.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Account/Order/Grid/Action:_pay_deprecated.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/Order/Grid/Action/_pay_deprecated.html.twig");
    }
}
