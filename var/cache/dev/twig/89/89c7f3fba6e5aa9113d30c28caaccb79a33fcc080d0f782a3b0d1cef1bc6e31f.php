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
class __TwigTemplate_ad5625d0af9e677eff742b86cf595801a7a9260f8d2937237b3ac3a63b24b9b4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Complete:_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Complete:_header.html.twig"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "currencyCode", [], "any", false, false, false, 10), "html", null, true);
        echo "
                </div>
                <div class=\"item\" id=\"sylius-order-locale-name\" ";
        // line 12
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["order-locale-name"]);
        echo ">
                    ";
        // line 13
        echo twig_call_macro($macros["flags"], "macro_fromLocaleCode", [twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 13, $this->source); })()), "localeCode", [], "any", false, false, false, 13)], 13, $context, $this->getSourceContext());
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->getLocaleName(twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 13, $this->source); })()), "localeCode", [], "any", false, false, false, 13)), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
</h1>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  70 => 13,  66 => 12,  61 => 10,  57 => 9,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@SyliusUi/Macro/flags.html.twig' as flags %}

<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        {{ 'sylius.ui.summary_of_your_order'|trans }}
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\" id=\"sylius-order-currency-code\" {{ sylius_test_html_attribute('order-currency-code') }}>
                    {{ order.currencyCode }}
                </div>
                <div class=\"item\" id=\"sylius-order-locale-name\" {{ sylius_test_html_attribute('order-locale-name') }}>
                    {{ flags.fromLocaleCode(sylius.localeCode) }}{{ sylius.localeCode|locale_name }}
                </div>
            </div>
        </div>
    </div>
</h1>
", "SyliusShopBundle:Checkout/Complete:_header.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/Complete/_header.html.twig");
    }
}
