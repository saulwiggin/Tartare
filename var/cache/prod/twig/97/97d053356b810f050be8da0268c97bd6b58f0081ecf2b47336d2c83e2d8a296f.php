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

/* SyliusShopBundle:Checkout/Complete:_header.html.twig */
class __TwigTemplate_42d4ffa8721afc29eed846832d636992b01168b4933f69ddb269c0fc009194c5 extends \Twig\Template
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
        $macros["flags"] = $this->macros["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusShopBundle:Checkout/Complete:_header.html.twig", 1)->unwrap();
        // line 2
        echo "
<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.summary_of_your_order"), "html", null, true);
        echo "
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\" id=\"sylius-order-currency-code\" ";
        // line 9
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["order-currency-code"]);
        echo ">
                    ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 10), "html", null, true);
        echo "
                </div>
                <div class=\"item\" id=\"sylius-order-locale-name\" ";
        // line 12
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["order-locale-name"]);
        echo ">
                    ";
        // line 13
        echo twig_call_macro($macros["flags"], "macro_fromLocaleCode", [twig_get_attribute($this->env, $this->source, ($context["sylius"] ?? null), "localeCode", [], "any", false, false, false, 13)], 13, $context, $this->getSourceContext());
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->getLocaleName(twig_get_attribute($this->env, $this->source, ($context["sylius"] ?? null), "localeCode", [], "any", false, false, false, 13)), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
</h1>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/Complete:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  60 => 12,  55 => 10,  51 => 9,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Checkout/Complete:_header.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/Complete/_header.html.twig");
    }
}
