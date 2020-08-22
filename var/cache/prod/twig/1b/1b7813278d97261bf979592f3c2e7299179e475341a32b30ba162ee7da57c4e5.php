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

/* SyliusShopBundle:Checkout:_steps.html.twig */
class __TwigTemplate_ec6ac15f48fa17ccc5bd381910d8070ffc1d6b9ea561f82817e392a22e989723 extends \Twig\Template
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
        if (( !array_key_exists("active", $context) || (($context["active"] ?? null) == "address"))) {
            // line 2
            echo "    ";
            $context["steps"] = ["address" => "active", "select_shipping" => "disabled", "select_payment" => "disabled", "complete" => "disabled"];
        } elseif ((        // line 3
($context["active"] ?? null) == "select_shipping")) {
            // line 4
            echo "    ";
            $context["steps"] = ["address" => "completed", "select_shipping" => "active", "select_payment" => "disabled", "complete" => "disabled"];
        } elseif ((        // line 5
($context["active"] ?? null) == "select_payment")) {
            // line 6
            echo "    ";
            $context["steps"] = ["address" => "completed", "select_shipping" => "completed", "select_payment" => "active", "complete" => "disabled"];
        } else {
            // line 8
            echo "    ";
            $context["steps"] = ["address" => "completed", "select_shipping" => "completed", "select_payment" => "completed", "complete" => "active"];
        }
        // line 10
        echo "
";
        // line 11
        $context["order_requires_payment"] = call_user_func_array($this->env->getFunction('sylius_is_payment_required')->getCallable(), [($context["order"] ?? null)]);
        // line 12
        $context["order_requires_shipping"] = call_user_func_array($this->env->getFunction('sylius_is_shipping_required')->getCallable(), [($context["order"] ?? null)]);
        // line 13
        echo "
";
        // line 14
        $context["steps_count"] = "four";
        // line 15
        if (( !($context["order_requires_payment"] ?? null) &&  !($context["order_requires_shipping"] ?? null))) {
            // line 16
            echo "    ";
            $context["steps_count"] = "two";
        } elseif (( !        // line 17
($context["order_requires_payment"] ?? null) ||  !($context["order_requires_shipping"] ?? null))) {
            // line 18
            echo "    ";
            $context["steps_count"] = "three";
        }
        // line 20
        echo "
<div class=\"ui ";
        // line 21
        echo twig_escape_filter($this->env, ($context["steps_count"] ?? null), "html", null, true);
        echo " steps\">
    <a class=\"";
        // line 22
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["steps"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["address"] ?? null) : null), "html", null, true);
        echo " step\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_address");
        echo "\" ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["step-address"]);
        echo ">
        <i class=\"map icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.address"), "html", null, true);
        echo "</div>
            <div class=\"description\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.fill_in_your_billing_and_shipping_addresses"), "html", null, true);
        echo "</div>
        </div>
    </a>
    ";
        // line 29
        if (($context["order_requires_shipping"] ?? null)) {
            // line 30
            echo "    <a class=\"";
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["steps"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["select_shipping"] ?? null) : null), "html", null, true);
            echo " step\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_select_shipping");
            echo "\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["step-shipping"]);
            echo ">
        <i class=\"truck icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping"), "html", null, true);
            echo "</div>
            <div class=\"description\">";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.choose_how_your_goods_will_be_delivered"), "html", null, true);
            echo "</div>
        </div>
    </a>
    ";
        }
        // line 38
        echo "    ";
        if (($context["order_requires_payment"] ?? null)) {
            // line 39
            echo "    <a class=\"";
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["steps"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["select_payment"] ?? null) : null), "html", null, true);
            echo " step\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_select_payment");
            echo "\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["step-payment"]);
            echo ">
        <i class=\"payment icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.payment"), "html", null, true);
            echo "</div>
            <div class=\"description\">";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.choose_how_you_will_pay"), "html", null, true);
            echo "</div>
        </div>
    </a>
    ";
        }
        // line 47
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["steps"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["complete"] ?? null) : null), "html", null, true);
        echo " step\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_complete");
        echo "\">
        <i class=\"checkered flag icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.complete"), "html", null, true);
        echo "</div>
            <div class=\"description\">";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.review_and_confirm_your_order"), "html", null, true);
        echo "</div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:_steps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 51,  165 => 50,  156 => 47,  149 => 43,  145 => 42,  134 => 39,  131 => 38,  124 => 34,  120 => 33,  109 => 30,  107 => 29,  101 => 26,  97 => 25,  87 => 22,  83 => 21,  80 => 20,  76 => 18,  74 => 17,  71 => 16,  69 => 15,  67 => 14,  64 => 13,  62 => 12,  60 => 11,  57 => 10,  53 => 8,  49 => 6,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Checkout:_steps.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/_steps.html.twig");
    }
}
