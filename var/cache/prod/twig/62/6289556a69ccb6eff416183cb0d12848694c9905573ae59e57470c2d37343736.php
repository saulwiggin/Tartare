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

/* @SyliusShop/Account/Order/Grid/Field/total.html.twig */
class __TwigTemplate_c04466c45491010547890ca12934bf73dd879439db2bf95a4ac2e3e216f8984d extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Account/Order/Grid/Field/total.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "total", [], "any", false, false, false, 3), twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "currencyCode", [], "any", false, false, false, 3)], 3, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Account/Order/Grid/Field/total.html.twig";
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
        return new Source("", "@SyliusShop/Account/Order/Grid/Field/total.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/Order/Grid/Field/total.html.twig");
    }
}
