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

/* SyliusAdminBundle:Order/Show/Summary:_totals.html.twig */
class __TwigTemplate_d41cd1cd08b116d83fc65fd5ffa58c3eeb74c9b8a90dd759bb9f3c02e7c68bbf extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "SyliusAdminBundle:Order/Show/Summary:_totals.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["orderShippingPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_SHIPPING_PROMOTION_ADJUSTMENT");
        // line 4
        $context["shippingAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::SHIPPING_ADJUSTMENT");
        // line 5
        $context["taxAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::TAX_ADJUSTMENT");
        // line 6
        echo "
";
        // line 7
        $context["orderShippingPromotions"] = call_user_func_array($this->env->getFunction('sylius_aggregate_adjustments')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getAdjustmentsRecursively", [0 => ($context["orderShippingPromotionAdjustment"] ?? null)], "method", false, false, false, 7)]);
        // line 8
        echo "
<tr>
    <th colspan=\"7\"></th>
    <th colspan=\"1\" id=\"tax-total\" class=\"right aligned\">
        <strong>";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tax_total"), "html", null, true);
        echo "</strong>:
        ";
        // line 13
        echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "taxTotal", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 13)], 13, $context, $this->getSourceContext());
        echo "
    </th>
    <th colspan=\"1\" id=\"items-total\" class=\"right aligned\">
        <strong>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.items_total"), "html", null, true);
        echo "</strong>:
        ";
        // line 17
        echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "itemsTotal", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 17)], 17, $context, $this->getSourceContext());
        echo "
    </th>
</tr>
<tr>
    <td colspan=\"";
        // line 21
        echo ((($context["orderShippingPromotions"] ?? null)) ? (2) : (5));
        echo "\" id=\"shipping-charges\">
        ";
        // line 22
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "adjustments", [0 => ($context["shippingAdjustment"] ?? null)], "method", false, false, false, 22), "isEmpty", [], "method", false, false, false, 22)) {
            // line 23
            echo "            <div class=\"ui relaxed divided list\">
                <div class=\"item\"><strong>";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping"), "html", null, true);
            echo ":</strong></div>
                ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "adjustments", [0 => ($context["shippingAdjustment"] ?? null)], "method", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
                // line 26
                echo "                    <div class=\"item\">
                        <div id=\"shipping-base-value\" class=\"right floated\">";
                // line 27
                echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, $context["adjustment"], "amount", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 27)], 27, $context, $this->getSourceContext());
                echo "</div>
                        <div class=\"content\">
                            <div id=\"shipping-adjustment-label\" class=\"description\">
                                <strong>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adjustment"], "label", [], "any", false, false, false, 30), "html", null, true);
                echo "</strong>:
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adjustment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </div>
        ";
        } else {
            // line 37
            echo "            <p><small>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_shipping_charges"), "html", null, true);
            echo "</small></p>
        ";
        }
        // line 39
        echo "    </td>
    ";
        // line 40
        if ( !twig_test_empty(($context["orderShippingPromotions"] ?? null))) {
            // line 41
            echo "    <td colspan=\"3\" id=\"promotion-shipping-discounts\">
        <div class=\"ui relaxed divided list\">
            <div class=\"item\"><strong>";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_discount"), "html", null, true);
            echo ":</strong></div>
            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orderShippingPromotions"] ?? null));
            foreach ($context['_seq'] as $context["label"] => $context["amount"]) {
                // line 45
                echo "                <div class=\"item\">
                    <div id=\"shipping-discount-value\" class=\"right floated\">
                        ";
                // line 47
                echo twig_call_macro($macros["money"], "macro_format", [$context["amount"], twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 47)], 47, $context, $this->getSourceContext());
                echo "
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['amount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        </div>
    </td>
    ";
        }
        // line 54
        echo "    <td colspan=\"4\" id=\"shipping-total\" class=\"right aligned\">
        <strong>";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_total"), "html", null, true);
        echo "</strong>:
        ";
        // line 56
        echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shippingTotal", [], "any", false, false, false, 56), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 56)], 56, $context, $this->getSourceContext());
        echo "
    </td>
</tr>

";
        // line 60
        $this->loadTemplate("@SyliusAdmin/Order/Show/Summary/_totalsPromotions.html.twig", "SyliusAdminBundle:Order/Show/Summary:_totals.html.twig", 60)->display($context);
        // line 61
        echo "
<tr>
    <td colspan=\"9\" id=\"total\" class=\"ui large header right aligned\">
        <strong>";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order_total"), "html", null, true);
        echo "</strong>:
        ";
        // line 65
        echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 65), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 65)], 65, $context, $this->getSourceContext());
        echo "
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show/Summary:_totals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 65,  184 => 64,  179 => 61,  177 => 60,  170 => 56,  166 => 55,  163 => 54,  158 => 51,  148 => 47,  144 => 45,  140 => 44,  136 => 43,  132 => 41,  130 => 40,  127 => 39,  121 => 37,  117 => 35,  106 => 30,  100 => 27,  97 => 26,  93 => 25,  89 => 24,  86 => 23,  84 => 22,  80 => 21,  73 => 17,  69 => 16,  63 => 13,  59 => 12,  53 => 8,  51 => 7,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Order/Show/Summary:_totals.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/Summary/_totals.html.twig");
    }
}
