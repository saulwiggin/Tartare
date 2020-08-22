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

/* SyliusShopBundle:Common/Order/Table:_totals.html.twig */
class __TwigTemplate_4b9722283a67fb0c35fdfb235904b723cc6243e46b29f90ccfe65ad3e4314882 extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Common/Order/Table:_totals.html.twig", 1)->unwrap();
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
";
        // line 7
        $context["orderPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT");
        // line 8
        $context["orderPromotions"] = call_user_func_array($this->env->getFunction('sylius_aggregate_adjustments')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "adjustmentsRecursively", [0 => ($context["orderPromotionAdjustment"] ?? null)], "method", false, false, false, 8)]);
        // line 9
        echo "
<tr>
    <th colspan=\"4\" class=\"right aligned\" id=\"subtotal\" ";
        // line 11
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["subtotal"]);
        echo ">
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.items_total"), "html", null, true);
        echo ": ";
        echo twig_call_macro($macros["money"], "macro_convertAndFormat", [($context["itemsSubtotal"] ?? null)], 12, $context, $this->getSourceContext());
        echo "
    </th>
</tr>
<tr";
        // line 15
        if ((($context["taxIncluded"] ?? null) &&  !($context["taxExcluded"] ?? null))) {
            echo "class=\"tax-disabled\"";
        }
        echo ">
    <td colspan=\"4\" class=\"right aligned\" id=\"tax-total\">
        <div style=\"display: flex; justify-content: flex-end; align-items: center\">
            <div>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.taxes_total"), "html", null, true);
        echo ":&nbsp;</div>
            <div data-test=\"tax-total\" ";
        // line 19
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["tax-total"]);
        echo ">
            ";
        // line 20
        if (( !($context["taxIncluded"] ?? null) &&  !($context["taxExcluded"] ?? null))) {
            // line 21
            echo "                <div id=\"sylius-cart-tax-none\">";
            echo twig_call_macro($macros["money"], "macro_convertAndFormat", [0], 21, $context, $this->getSourceContext());
            echo "</div>
            ";
        }
        // line 23
        echo "            ";
        if (($context["taxExcluded"] ?? null)) {
            // line 24
            echo "                <div id=\"sylius-cart-tax-excluded\">";
            echo twig_call_macro($macros["money"], "macro_convertAndFormat", [($context["taxExcluded"] ?? null)], 24, $context, $this->getSourceContext());
            echo "</div>
            ";
        }
        // line 26
        echo "            ";
        if (($context["taxIncluded"] ?? null)) {
            // line 27
            echo "                <div class=\"tax-disabled\">
                    <small>(";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.included_in_price"), "html", null, true);
            echo ")</small>
                    <span id=\"sylius-cart-tax-included\">";
            // line 29
            echo twig_call_macro($macros["money"], "macro_convertAndFormat", [($context["taxIncluded"] ?? null)], 29, $context, $this->getSourceContext());
            echo "</span>
                </div>
            ";
        }
        // line 32
        echo "            </div>
        </div>
    </td>
</tr>
<tr>
    <td colspan=\"4\" id=\"promotion-total\" class=\"right aligned\" ";
        // line 37
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["promotion-total"]);
        echo ">
        ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.discount"), "html", null, true);
        echo ": ";
        echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderPromotionTotal", [], "any", false, false, false, 38)], 38, $context, $this->getSourceContext());
        echo "
        ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderPromotionTotal", [], "any", false, false, false, 39) != 0)) {
            // line 40
            echo "            <i
                id=\"order-promotions-details\" class=\"question circle icon popup-js\"
                ";
            // line 42
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["order-promotions-details"]);
            echo "
                data-html=\"";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orderPromotions"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                echo "<div>";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo ": ";
                echo twig_call_macro($macros["money"], "macro_convertAndFormat", [$context["value"]], 43, $context, $this->getSourceContext());
                echo "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\"
            >
            </i>
        ";
        }
        // line 47
        echo "    </td>
</tr>
<tr>
    ";
        // line 50
        $this->loadTemplate("@SyliusShop/Common/Order/Table/_shipping.html.twig", "SyliusShopBundle:Common/Order/Table:_totals.html.twig", 50)->display(twig_array_merge($context, ["order" => ($context["order"] ?? null)]));
        // line 51
        echo "</tr>
<tr>
    <td colspan=\"4\" class=\"right aligned\" style=\"font-size: 1.5em;\" id=\"total\" ";
        // line 53
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["order-total"]);
        echo ">
        ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total"), "html", null, true);
        echo ": ";
        echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 54)], 54, $context, $this->getSourceContext());
        echo "
    </td>
</tr>
";
        // line 57
        if ( !(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 57) === twig_get_attribute($this->env, $this->source, ($context["sylius"] ?? null), "currencyCode", [], "any", false, false, false, 57))) {
            // line 58
            echo "    <tr>
        <td colspan=\"4\" class=\"right aligned\" id=\"base-total\" ";
            // line 59
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["summary-order-total"]);
            echo ">
            ";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total_in_base_currency"), "html", null, true);
            echo ": ";
            echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 60), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 60)], 60, $context, $this->getSourceContext());
            echo "
        </td>
    </tr>
";
        }
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order/Table:_totals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 60,  193 => 59,  190 => 58,  188 => 57,  180 => 54,  176 => 53,  172 => 51,  170 => 50,  165 => 47,  147 => 43,  143 => 42,  139 => 40,  137 => 39,  131 => 38,  127 => 37,  120 => 32,  114 => 29,  110 => 28,  107 => 27,  104 => 26,  98 => 24,  95 => 23,  89 => 21,  87 => 20,  83 => 19,  79 => 18,  71 => 15,  63 => 12,  59 => 11,  55 => 9,  53 => 8,  51 => 7,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Common/Order/Table:_totals.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/Table/_totals.html.twig");
    }
}
