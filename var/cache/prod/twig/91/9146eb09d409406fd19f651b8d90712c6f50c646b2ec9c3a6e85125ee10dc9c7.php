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

/* @SyliusShop/Common/Order/Table/_promotion.html.twig */
class __TwigTemplate_3c6c58aff918b693b7410a62d2b23d76ed2962523dcc0c14316bba7781f4165f extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Common/Order/Table/_promotion.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["orderPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT");
        // line 4
        $context["orderPromotions"] = call_user_func_array($this->env->getFunction('sylius_aggregate_adjustments')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getAdjustmentsRecursively", [0 => ($context["orderPromotionAdjustment"] ?? null)], "method", false, false, false, 4)]);
        // line 5
        echo "
";
        // line 6
        if ( !twig_test_empty(($context["orderPromotions"] ?? null))) {
            // line 7
            echo "    <td colspan=\"2\" id=\"promotion-discounts\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["promotion-discounts"]);
            echo ">
        <div class=\"ui relaxed divided list\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orderPromotions"] ?? null));
            foreach ($context['_seq'] as $context["label"] => $context["amount"]) {
                // line 10
                echo "                <div class=\"item\">
                    <div class=\"content\">
                        <div class=\"header\">";
                // line 12
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</div>
                        <div class=\"description\">
                            ";
                // line 14
                echo twig_call_macro($macros["money"], "macro_convertAndFormat", [$context["amount"]], 14, $context, $this->getSourceContext());
                echo "
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['amount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </div>
    </td>
";
        }
        // line 22
        echo "<td colspan=\"";
        if ( !twig_test_empty(($context["orderPromotions"] ?? null))) {
            echo "2";
        } else {
            echo "4";
        }
        echo "\" id=\"promotion-total\" class=\"right aligned\" ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["promotion-total"]);
        echo ">
    ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.promotion_total"), "html", null, true);
        echo ":
    ";
        // line 24
        echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderPromotionTotal", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 24)], 24, $context, $this->getSourceContext());
        echo "
</td>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/Order/Table/_promotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 24,  97 => 23,  86 => 22,  81 => 19,  70 => 14,  65 => 12,  61 => 10,  57 => 9,  51 => 7,  49 => 6,  46 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Common/Order/Table/_promotion.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/Table/_promotion.html.twig");
    }
}
