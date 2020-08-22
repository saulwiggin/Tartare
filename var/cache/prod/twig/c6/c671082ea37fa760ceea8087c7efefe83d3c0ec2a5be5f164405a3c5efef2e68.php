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

/* @SyliusAdmin/Order/Show/Summary/_item.html.twig */
class __TwigTemplate_c123a75ea38428125e823d768fde1f9f9dfd8ce2a83f9807a52f0f94e0ca1607 extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Order/Show/Summary/_item.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["orderPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT");
        // line 4
        $context["unitPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_UNIT_PROMOTION_ADJUSTMENT");
        // line 5
        $context["shippingAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::SHIPPING_ADJUSTMENT");
        // line 6
        $context["taxAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::TAX_ADJUSTMENT");
        // line 7
        echo "
";
        // line 8
        $context["variant"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 8);
        // line 9
        $context["product"] = twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "product", [], "any", false, false, false, 9);
        // line 10
        echo "
";
        // line 11
        $context["aggregatedUnitPromotionAdjustments"] = (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getAdjustmentsTotalRecursively", [0 => ($context["unitPromotionAdjustment"] ?? null)], "method", false, false, false, 11) + twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getAdjustmentsTotalRecursively", [0 => ($context["orderPromotionAdjustment"] ?? null)], "method", false, false, false, 11));
        // line 12
        $context["subtotal"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "unitPrice", [], "any", false, false, false, 12) * twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "quantity", [], "any", false, false, false, 12)) + ($context["aggregatedUnitPromotionAdjustments"] ?? null));
        // line 13
        echo "
";
        // line 14
        $context["taxIncluded"] = $this->extensions['Sylius\Bundle\AdminBundle\Twig\OrderUnitTaxesExtension']->getIncludedTax(($context["item"] ?? null));
        // line 15
        $context["taxExcluded"] = $this->extensions['Sylius\Bundle\AdminBundle\Twig\OrderUnitTaxesExtension']->getExcludedTax(($context["item"] ?? null));
        // line 16
        echo "
<tr>
    <td class=\"single line\">
        ";
        // line 19
        $this->loadTemplate("@SyliusAdmin/Product/_info.html.twig", "@SyliusAdmin/Order/Show/Summary/_item.html.twig", 19)->display($context);
        // line 20
        echo "    </td>
    <td class=\"right aligned unit-price\">
        ";
        // line 22
        echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "unitPrice", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 22)], 22, $context, $this->getSourceContext());
        echo "
    </td>
    <td class=\"right aligned unit-discount\">
        ";
        // line 25
        echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "units", [], "any", false, false, false, 25), "first", [], "any", false, false, false, 25), "adjustmentsTotal", [0 => ($context["unitPromotionAdjustment"] ?? null)], "method", false, false, false, 25), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 25)], 25, $context, $this->getSourceContext());
        echo "
    </td>
    <td class=\"right aligned unit-order-discount\">
        <span style=\"font-style: italic;\">~ ";
        // line 28
        echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "units", [], "any", false, false, false, 28), "first", [], "any", false, false, false, 28), "adjustmentsTotal", [0 => ($context["orderPromotionAdjustment"] ?? null)], "method", false, false, false, 28), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 28)], 28, $context, $this->getSourceContext());
        echo "</span>
    </td>
    <td class=\"right aligned discounted-unit-price\">
        ";
        // line 31
        echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fullDiscountedUnitPrice", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 31)], 31, $context, $this->getSourceContext());
        echo "
    </td>
    <td class=\"right aligned quantity\">
        ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "quantity", [], "any", false, false, false, 34), "html", null, true);
        echo "
    </td>
    <td class=\"right aligned subtotal\">
      ";
        // line 37
        echo twig_call_macro($macros["money"], "macro_format", [($context["subtotal"] ?? null), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 37)], 37, $context, $this->getSourceContext());
        echo "
    </td>
    <td class=\"right aligned tax\">
        <div class=\"tax-excluded\">";
        // line 40
        echo twig_call_macro($macros["money"], "macro_format", [($context["taxExcluded"] ?? null), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 40)], 40, $context, $this->getSourceContext());
        echo "</div>
        <div class=\"tax-disabled\">
            <div class=\"tax-included\"> ";
        // line 42
        echo twig_call_macro($macros["money"], "macro_format", [($context["taxIncluded"] ?? null), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 42)], 42, $context, $this->getSourceContext());
        echo "
            </div>
            <small>(";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.included_in_price"), "html", null, true);
        echo ")</small>
        </div>
    </td>
    <td class=\"right aligned total\">
        ";
        // line 48
        echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "total", [], "any", false, false, false, 48), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 48)], 48, $context, $this->getSourceContext());
        echo "
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Order/Show/Summary/_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 48,  128 => 44,  123 => 42,  118 => 40,  112 => 37,  106 => 34,  100 => 31,  94 => 28,  88 => 25,  82 => 22,  78 => 20,  76 => 19,  71 => 16,  69 => 15,  67 => 14,  64 => 13,  62 => 12,  60 => 11,  57 => 10,  55 => 9,  53 => 8,  50 => 7,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Order/Show/Summary/_item.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/Summary/_item.html.twig");
    }
}
