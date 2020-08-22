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

/* SyliusShopBundle:Common/Order/Table:_shipping.html.twig */
class __TwigTemplate_b06400cd4d2e6f783d891a70fc1797b5b815f287a5f672d0f234f2403fd0f030 extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Common/Order/Table:_shipping.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["orderShippingPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_SHIPPING_PROMOTION_ADJUSTMENT");
        // line 4
        $context["shippingAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::SHIPPING_ADJUSTMENT");
        // line 5
        $context["orderShippingPromotions"] = call_user_func_array($this->env->getFunction('sylius_aggregate_adjustments')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getAdjustmentsRecursively", [0 => ($context["orderShippingPromotionAdjustment"] ?? null)], "method", false, false, false, 5)]);
        // line 6
        echo "
";
        // line 7
        if ( !twig_test_empty(($context["orderShippingPromotions"] ?? null))) {
            // line 8
            echo "    <td colspan=\"4\" class=\"right aligned\" id=\"promotion-shipping-discounts\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["promotion-shipping-discounts"]);
            echo ">
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_total"), "html", null, true);
            echo ":
        <span class=\"old-price\">";
            // line 10
            echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getAdjustmentsTotal", [0 => ($context["shippingAdjustment"] ?? null)], "method", false, false, false, 10)], 10, $context, $this->getSourceContext());
            echo "</span>
        <span>
           <span id=\"shipping-total\" ";
            // line 12
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["shipping-total"]);
            echo ">";
            echo twig_call_macro($macros["money"], "macro_convertAndFormat", [(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getAdjustmentsTotal", [0 => ($context["shippingAdjustment"] ?? null)], "method", false, false, false, 12) + twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getAdjustmentsTotal", [0 => ($context["orderShippingPromotionAdjustment"] ?? null)], "method", false, false, false, 12))], 12, $context, $this->getSourceContext());
            echo "</span>
            <i id=\"shipping-promotion-details\" class=\"question circle icon popup-js\"
               ";
            // line 14
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["shipping-promotion-details"]);
            echo "
               data-html=\"";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orderShippingPromotions"] ?? null));
            foreach ($context['_seq'] as $context["label"] => $context["amount"]) {
                echo "<div>";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo ": ";
                echo twig_call_macro($macros["money"], "macro_convertAndFormat", [$context["amount"]], 15, $context, $this->getSourceContext());
                echo "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['amount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\"
            ></i>
        </span>
    </td>
";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 19
($context["order"] ?? null), "shipments", [], "any", false, false, false, 19))) {
            // line 20
            echo "    <td colspan=\"4\" class=\"right aligned\" id=\"shipping-total\">
        ";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_total"), "html", null, true);
            echo ":
        <span ";
            // line 22
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["shipping-total"]);
            echo ">";
            echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shippingTotal", [], "any", false, false, false, 22)], 22, $context, $this->getSourceContext());
            echo "</span>
    </td>
";
        }
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order/Table:_shipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 22,  101 => 21,  98 => 20,  96 => 19,  78 => 15,  74 => 14,  67 => 12,  62 => 10,  58 => 9,  53 => 8,  51 => 7,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Common/Order/Table:_shipping.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/Table/_shipping.html.twig");
    }
}
