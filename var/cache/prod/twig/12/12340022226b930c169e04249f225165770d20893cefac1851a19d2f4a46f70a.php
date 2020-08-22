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

/* SyliusAdminBundle:Order/Show/Summary:_totalsPromotions.html.twig */
class __TwigTemplate_837021e634c1b147c26e36d55a8570eb3ad8f39393c26b3299234e1ba3499b67 extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "SyliusAdminBundle:Order/Show/Summary:_totalsPromotions.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["orderPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT");
        // line 4
        $context["unitPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_UNIT_PROMOTION_ADJUSTMENT");
        // line 5
        echo "
<tr>
    <td colspan=\"5\" id=\"promotion-discounts\" class=\"promotion-disabled\">
        ";
        // line 8
        $context["orderPromotionAdjustments"] = call_user_func_array($this->env->getFunction('sylius_aggregate_adjustments')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getAdjustmentsRecursively", [0 => ($context["orderPromotionAdjustment"] ?? null)], "method", false, false, false, 8)]);
        // line 9
        echo "        ";
        $context["unitPromotionAdjustments"] = call_user_func_array($this->env->getFunction('sylius_aggregate_adjustments')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getAdjustmentsRecursively", [0 => ($context["unitPromotionAdjustment"] ?? null)], "method", false, false, false, 9)]);
        // line 10
        echo "        ";
        $context["promotionAdjustments"] = twig_array_merge(($context["orderPromotionAdjustments"] ?? null), ($context["unitPromotionAdjustments"] ?? null));
        // line 11
        echo "        ";
        if ( !twig_test_empty(($context["promotionAdjustments"] ?? null))) {
            // line 12
            echo "            <div class=\"ui relaxed divided list\">
                <div class=\"item\"><strong>";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.promotions"), "html", null, true);
            echo ":</strong></div>
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["promotionAdjustments"] ?? null));
            foreach ($context['_seq'] as $context["label"] => $context["amount"]) {
                // line 15
                echo "                    <div class=\"item\">
                        <div class=\"right floated\">";
                // line 16
                echo twig_call_macro($macros["money"], "macro_format", [$context["amount"], twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 16)], 16, $context, $this->getSourceContext());
                echo "</div>
                        <div class=\"content\"><strong>";
                // line 17
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</strong>:</div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['amount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            </div>
        ";
        } else {
            // line 22
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_promotion"), "html", null, true);
            echo ".</p>
        ";
        }
        // line 24
        echo "    </td>
    <td colspan=\"4\" id=\"promotion-total\" class=\"right aligned promotion-disabled\">
        ";
        // line 26
        $context["orderPromotionTotal"] = twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getAdjustmentsTotalRecursively", [0 => ($context["orderPromotionAdjustment"] ?? null)], "method", false, false, false, 26);
        // line 27
        echo "        ";
        $context["unitPromotionTotal"] = twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getAdjustmentsTotalRecursively", [0 => ($context["unitPromotionAdjustment"] ?? null)], "method", false, false, false, 27);
        // line 28
        echo "        <strong>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.promotion_total"), "html", null, true);
        echo "</strong>:
        ";
        // line 29
        echo twig_call_macro($macros["money"], "macro_format", [(($context["orderPromotionTotal"] ?? null) + ($context["unitPromotionTotal"] ?? null)), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 29)], 29, $context, $this->getSourceContext());
        echo "
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show/Summary:_totalsPromotions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 29,  108 => 28,  105 => 27,  103 => 26,  99 => 24,  93 => 22,  89 => 20,  80 => 17,  76 => 16,  73 => 15,  69 => 14,  65 => 13,  62 => 12,  59 => 11,  56 => 10,  53 => 9,  51 => 8,  46 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Order/Show/Summary:_totalsPromotions.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/Summary/_totalsPromotions.html.twig");
    }
}
