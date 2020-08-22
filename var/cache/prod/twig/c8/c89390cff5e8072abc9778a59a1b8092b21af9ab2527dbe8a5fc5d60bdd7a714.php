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

/* SyliusShopBundle:Checkout/SelectPayment:_navigation.html.twig */
class __TwigTemplate_e3881ec6da8300870cd7d699a002ec2e4a5e7025a8b14ebc80488a07c4d54da5 extends \Twig\Template
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
        $context["enabled"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payments", [], "any", false, false, false, 1));
        // line 2
        echo "
<div class=\"ui two column grid\">
    <div class=\"column\">
        ";
        // line 5
        if (call_user_func_array($this->env->getFunction('sylius_is_shipping_required')->getCallable(), [($context["order"] ?? null)])) {
            // line 6
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_select_shipping");
            echo "\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_shipping_method"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 8
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_address");
            echo "\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_address"), "html", null, true);
            echo "</a>
        ";
        }
        // line 10
        echo "    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled";
        // line 12
        if ( !($context["enabled"] ?? null)) {
            echo " disabled";
        }
        echo " button\" ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["next-step"]);
        echo ">
            <i class=\"arrow right icon\"></i>
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.next"), "html", null, true);
        echo "
        </button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectPayment:_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 14,  66 => 12,  62 => 10,  54 => 8,  46 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Checkout/SelectPayment:_navigation.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/SelectPayment/_navigation.html.twig");
    }
}
