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

/* @SyliusShop/Common/Order/Table/_item.html.twig */
class __TwigTemplate_22a2120787fbf7d6cc4406d4210fb0db7bfafdd5cfc7c502bfda8331996b69f4 extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Common/Order/Table/_item.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["unitPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_UNIT_PROMOTION_ADJUSTMENT");
        // line 4
        $context["unitPromotions"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "units", [], "any", false, false, false, 4), "first", [], "any", false, false, false, 4), "adjustments", [0 => ($context["unitPromotionAdjustment"] ?? null)], "method", false, false, false, 4);
        // line 5
        echo "<tr ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-row", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "productName", [], "any", false, false, false, 5)]);
        echo ">
    <td>
        ";
        // line 7
        $this->loadTemplate("@SyliusShop/Product/_info.html.twig", "@SyliusShop/Common/Order/Table/_item.html.twig", 7)->display(twig_array_merge($context, ["variant" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 7)]));
        // line 8
        echo "    </td>
    <td>
        ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "unitPrice", [], "any", false, false, false, 10) != twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discountedUnitPrice", [], "any", false, false, false, 10))) {
            // line 11
            echo "            <span class=\"old-price\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-old-price", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "productName", [], "any", false, false, false, 11)]);
            echo ">";
            echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "unitPrice", [], "any", false, false, false, 11)], 11, $context, $this->getSourceContext());
            echo "</span>
        ";
        }
        // line 13
        echo "        <span class=\"sylius-unit-price\" ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-unit-price", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "productName", [], "any", false, false, false, 13)]);
        echo ">";
        echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discountedUnitPrice", [], "any", false, false, false, 13)], 13, $context, $this->getSourceContext());
        echo "
            ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "unitPrice", [], "any", false, false, false, 14) != twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discountedUnitPrice", [], "any", false, false, false, 14))) {
            // line 15
            echo "            <i id=\"item-promotion-details\" class=\"question circle icon unit-promotions popup-js\"
               data-html=\"";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["unitPromotions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                echo "<div>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "label", [], "any", false, false, false, 16), "html", null, true);
                echo ": ";
                echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, $context["promotion"], "amount", [], "any", false, false, false, 16)], 16, $context, $this->getSourceContext());
                echo "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\">
            </i>
            ";
        }
        // line 19
        echo "        </span>
    </td>
    <td class=\"center aligned\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "quantity", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
    <td class=\"right aligned\">";
        // line 22
        echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "subtotal", [], "any", false, false, false, 22)], 22, $context, $this->getSourceContext());
        echo "</td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/Order/Table/_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 22,  101 => 21,  97 => 19,  80 => 16,  77 => 15,  75 => 14,  68 => 13,  60 => 11,  58 => 10,  54 => 8,  52 => 7,  46 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Common/Order/Table/_item.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/Table/_item.html.twig");
    }
}
