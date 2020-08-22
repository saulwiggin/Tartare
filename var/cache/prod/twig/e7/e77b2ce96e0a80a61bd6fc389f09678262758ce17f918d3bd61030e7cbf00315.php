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

/* SyliusShopBundle:Cart/Summary:_totals.html.twig */
class __TwigTemplate_bd1a98ea583e9c00ab0d4bff2571d0505a738165d1a21602b7cd985806bd2193 extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Cart/Summary:_totals.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["itemsSubtotal"] = $this->extensions['Sylius\Bundle\ShopBundle\Twig\OrderItemsSubtotalExtension']->getSubtotal(($context["cart"] ?? null));
        // line 4
        $context["taxIncluded"] = $this->extensions['Sylius\Bundle\ShopBundle\Twig\OrderTaxesTotalExtension']->getIncludedTax(($context["cart"] ?? null));
        // line 5
        $context["taxExcluded"] = $this->extensions['Sylius\Bundle\ShopBundle\Twig\OrderTaxesTotalExtension']->getExcludedTax(($context["cart"] ?? null));
        // line 6
        echo "
<div class=\"ui segment\">
    <h2 class=\"ui dividing header\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.summary"), "html", null, true);
        echo "</h2>

    ";
        // line 10
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.cart.summary.totals", ["cart" => ($context["cart"] ?? null)]);
        echo "

    <table class=\"ui very basic table\">
        <tbody>
        <tr>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.items_total"), "html", null, true);
        echo ":</td>
            <td class=\"right aligned\">";
        // line 16
        echo twig_call_macro($macros["money"], "macro_convertAndFormat", [($context["itemsSubtotal"] ?? null)], 16, $context, $this->getSourceContext());
        echo "</td>
        </tr>
        ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "orderPromotionTotal", [], "any", false, false, false, 18)) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.discount"), "html", null, true);
            echo ":</td>
                <td id=\"sylius-cart-promotion-total\" ";
            // line 21
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["cart-promotion-total"]);
            echo " class=\"right aligned\">";
            echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "orderPromotionTotal", [], "any", false, false, false, 21)], 21, $context, $this->getSourceContext());
            echo "</td>
            </tr>
        ";
        }
        // line 24
        echo "        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shipments", [], "any", false, false, false, 24))) {
            // line 25
            echo "            <tr>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_estimated_cost"), "html", null, true);
            echo ":</td>
                <td class=\"right aligned\">
                    ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getAdjustmentsTotal", [0 => "shipping"], "method", false, false, false, 28) > twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shippingTotal", [], "any", false, false, false, 28))) {
                // line 29
                echo "                        <span class=\"old-price\">";
                echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getAdjustmentsTotal", [0 => "shipping"], "method", false, false, false, 29)], 29, $context, $this->getSourceContext());
                echo "</span>
                    ";
            }
            // line 31
            echo "                    <span id=\"sylius-cart-shipping-total\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["cart-shipping-total"]);
            echo ">";
            echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shippingTotal", [], "any", false, false, false, 31)], 31, $context, $this->getSourceContext());
            echo "</span>
                </td>
            </tr>
        ";
        }
        // line 35
        echo "        <tr ";
        if ((($context["taxIncluded"] ?? null) &&  !($context["taxExcluded"] ?? null))) {
            echo "class=\"tax-disabled\"";
        }
        echo ">
            <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.taxes_total"), "html", null, true);
        echo ":</td>
            <td class=\"right aligned\">
                ";
        // line 38
        if (( !($context["taxIncluded"] ?? null) &&  !($context["taxExcluded"] ?? null))) {
            // line 39
            echo "                    <div id=\"sylius-cart-tax-none\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["cart-no-tax"]);
            echo ">";
            echo twig_call_macro($macros["money"], "macro_convertAndFormat", [0], 39, $context, $this->getSourceContext());
            echo "</div>
                ";
        }
        // line 41
        echo "                ";
        if (($context["taxExcluded"] ?? null)) {
            // line 42
            echo "                    <div id=\"sylius-cart-tax-excluded\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["cart-tax-exluded"]);
            echo ">";
            echo twig_call_macro($macros["money"], "macro_convertAndFormat", [($context["taxExcluded"] ?? null)], 42, $context, $this->getSourceContext());
            echo "</div>
                ";
        }
        // line 44
        echo "                ";
        if (($context["taxIncluded"] ?? null)) {
            // line 45
            echo "                    <div class=\"tax-disabled\">
                        <small>(";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.included_in_price"), "html", null, true);
            echo ")</small>
                        <span id=\"sylius-cart-tax-included\" ";
            // line 47
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["cart-tax-included"]);
            echo ">";
            echo twig_call_macro($macros["money"], "macro_convertAndFormat", [($context["taxIncluded"] ?? null)], 47, $context, $this->getSourceContext());
            echo "</span>
                    </div>
                ";
        }
        // line 50
        echo "            </td>
        </tr>
        <tr class=\"ui large header\">
            <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order_total"), "html", null, true);
        echo ":</td>
            <td id=\"sylius-cart-grand-total\" ";
        // line 54
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["cart-grand-total"]);
        echo " class=\"right aligned\">";
        echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 54)], 54, $context, $this->getSourceContext());
        echo "</td>
        </tr>
        ";
        // line 56
        if ( !(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "currencyCode", [], "any", false, false, false, 56) === twig_get_attribute($this->env, $this->source, ($context["sylius"] ?? null), "currencyCode", [], "any", false, false, false, 56))) {
            // line 57
            echo "            <tr>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.base_currency_order_total"), "html", null, true);
            echo ":</td>
                <td id=\"sylius-cart-base-grand-total\" ";
            // line 59
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["cart-base-grand-total"]);
            echo " class=\"right aligned\">";
            echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 59), twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "currencyCode", [], "any", false, false, false, 59)], 59, $context, $this->getSourceContext());
            echo "</td>
            </tr>
        ";
        }
        // line 62
        echo "        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_totals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 62,  196 => 59,  192 => 58,  189 => 57,  187 => 56,  180 => 54,  176 => 53,  171 => 50,  163 => 47,  159 => 46,  156 => 45,  153 => 44,  145 => 42,  142 => 41,  134 => 39,  132 => 38,  127 => 36,  120 => 35,  110 => 31,  104 => 29,  102 => 28,  97 => 26,  94 => 25,  91 => 24,  83 => 21,  79 => 20,  76 => 19,  74 => 18,  69 => 16,  65 => 15,  57 => 10,  52 => 8,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Cart/Summary:_totals.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_totals.html.twig");
    }
}
