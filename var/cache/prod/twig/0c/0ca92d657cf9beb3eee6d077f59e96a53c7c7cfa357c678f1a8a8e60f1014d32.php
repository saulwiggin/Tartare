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

/* @SyliusShop/Checkout/_summary.html.twig */
class __TwigTemplate_224bff52a04ad12b134e85f7b04a587156a04a187d1323586c8b931c63d96258 extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Checkout/_summary.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["itemsSubtotal"] = $this->extensions['Sylius\Bundle\ShopBundle\Twig\OrderItemsSubtotalExtension']->getSubtotal(($context["order"] ?? null));
        // line 4
        $context["taxIncluded"] = $this->extensions['Sylius\Bundle\ShopBundle\Twig\OrderTaxesTotalExtension']->getIncludedTax(($context["order"] ?? null));
        // line 5
        $context["taxExcluded"] = $this->extensions['Sylius\Bundle\ShopBundle\Twig\OrderTaxesTotalExtension']->getExcludedTax(($context["order"] ?? null));
        // line 6
        echo "
<div class=\"ui segment\">
    <table class=\"ui very basic table\" id=\"sylius-checkout-subtotal\" ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["checkout-subtotal"]);
        echo ">
        <thead>
        <tr>
            <th class=\"sylius-table-column-item\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.item"), "html", null, true);
        echo "</th>
            <th class=\"sylius-table-column-qty\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.qty"), "html", null, true);
        echo "</th>
            <th class=\"sylius-table-column-subtotal\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.subtotal"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getVariant", [], "any", false, false, false, 19), "product", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                <td class=\"center aligned\">
                    ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 21), "html", null, true);
            echo "
                </td>
                <td class=\"right aligned\" id=\"sylius-item-";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "variant", [], "any", false, false, false, 23), "product", [], "any", false, false, false, 23), "slug", [], "any", false, false, false, 23), "html", null, true);
            echo "-subtotal\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["item-subtotal", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "variant", [], "any", false, false, false, 23), "product", [], "any", false, false, false, 23), "slug", [], "any", false, false, false, 23)]);
            echo ">
                    ";
            // line 24
            echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, $context["item"], "subtotal", [], "any", false, false, false, 24)], 24, $context, $this->getSourceContext());
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"1\" style=\"border-top: 2px solid #ddd;\">
                    <strong>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.items_total"), "html", null, true);
        echo ":</strong>
                </td>
                <td colspan=\"2\" id=\"sylius-summary-items-subtotal\" class=\"right aligned\" style=\"border-top: 2px solid #ddd;\">
                    ";
        // line 35
        echo twig_call_macro($macros["money"], "macro_convertAndFormat", [($context["itemsSubtotal"] ?? null)], 35, $context, $this->getSourceContext());
        echo "
                </td>
            </tr>
            <tr ";
        // line 38
        if ((($context["taxIncluded"] ?? null) &&  !($context["taxExcluded"] ?? null))) {
            echo "class=\"tax-disabled\" ";
        }
        echo ">
                <td colspan=\"1\">
                    <strong>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.taxes_total"), "html", null, true);
        echo ":</strong>
                </td>
                <td colspan=\"2\" class=\"right aligned\">
                    ";
        // line 43
        if (( !($context["taxIncluded"] ?? null) &&  !($context["taxExcluded"] ?? null))) {
            // line 44
            echo "                        <div id=\"sylius-summary-tax-none\">";
            echo twig_call_macro($macros["money"], "macro_convertAndFormat", [0], 44, $context, $this->getSourceContext());
            echo "</div>
                    ";
        }
        // line 46
        echo "                    ";
        if (($context["taxExcluded"] ?? null)) {
            // line 47
            echo "                        <div id=\"sylius-summary-tax-excluded\">";
            echo twig_call_macro($macros["money"], "macro_convertAndFormat", [($context["taxExcluded"] ?? null)], 47, $context, $this->getSourceContext());
            echo "</div>
                    ";
        }
        // line 49
        echo "                    ";
        if (($context["taxIncluded"] ?? null)) {
            // line 50
            echo "                        <div class=\"tax-disabled\">
                            <span id=\"sylius-summary-tax-included\">";
            // line 51
            echo twig_call_macro($macros["money"], "macro_convertAndFormat", [($context["taxIncluded"] ?? null)], 51, $context, $this->getSourceContext());
            echo "</span>
                            <div><small>(";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.included_in_price"), "html", null, true);
            echo ")</small></div>
                        </div>
                    ";
        }
        // line 55
        echo "                </td>
            </tr>
            <tr>
                <td colspan=\"1\">
                    <strong>";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.discount"), "html", null, true);
        echo ":</strong>
                </td>
                <td colspan=\"2\" id=\"sylius-summary-promotion-total\" class=\"right aligned\">
                    ";
        // line 62
        echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderPromotionTotal", [], "any", false, false, false, 62)], 62, $context, $this->getSourceContext());
        echo "
                </td>
            </tr>
            ";
        // line 65
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shipments", [], "any", false, false, false, 65))) {
            // line 66
            echo "                <tr>
                    <td colspan=\"1\">
                        <strong>";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_estimated_cost"), "html", null, true);
            echo ":</strong>
                    </td>
                    <td colspan=\"2\" class=\"right aligned\">
                        ";
            // line 71
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getAdjustmentsTotal", [0 => "shipping"], "method", false, false, false, 71) > twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shippingTotal", [], "any", false, false, false, 71))) {
                // line 72
                echo "                            <div class=\"old-price\">";
                echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getAdjustmentsTotal", [0 => "shipping"], "method", false, false, false, 72)], 72, $context, $this->getSourceContext());
                echo "</div>
                        ";
            }
            // line 74
            echo "                        <span id=\"sylius-summary-shipping-total\">";
            echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shippingTotal", [], "any", false, false, false, 74)], 74, $context, $this->getSourceContext());
            echo "</span>
                    </td>
                </tr>
            ";
        }
        // line 78
        echo "            <tr class=\"ui large header\">
                <td colspan=\"1\">
                    <strong>";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order_total"), "html", null, true);
        echo ":</strong>
                </td>
                <td colspan=\"2\" id=\"sylius-summary-grand-total\" class=\"right aligned\">
                    ";
        // line 83
        echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 83)], 83, $context, $this->getSourceContext());
        echo "
                </td>
            </tr>
        </tfoot>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Checkout/_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 83,  220 => 80,  216 => 78,  208 => 74,  202 => 72,  200 => 71,  194 => 68,  190 => 66,  188 => 65,  182 => 62,  176 => 59,  170 => 55,  164 => 52,  160 => 51,  157 => 50,  154 => 49,  148 => 47,  145 => 46,  139 => 44,  137 => 43,  131 => 40,  124 => 38,  118 => 35,  112 => 32,  106 => 28,  96 => 24,  90 => 23,  85 => 21,  80 => 19,  77 => 18,  73 => 17,  66 => 13,  62 => 12,  58 => 11,  52 => 8,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Checkout/_summary.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/_summary.html.twig");
    }
}
