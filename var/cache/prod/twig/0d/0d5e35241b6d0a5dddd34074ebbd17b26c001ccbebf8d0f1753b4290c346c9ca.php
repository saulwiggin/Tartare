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

/* SyliusShopBundle:Cart/Summary:_item.html.twig */
class __TwigTemplate_4a4b8877dee73d04d49a6bc4607e3e35b005be5380e6fbe253db9bdf7d0610c1 extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Cart/Summary:_item.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["product_variant"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant", [], "any", false, false, false, 3);
        // line 4
        echo "
<tr ";
        // line 5
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["cart-product-row", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "productName", [], "any", false, false, false, 5)]);
        echo ">
    <td class=\"single line\" ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["cart-item", ((array_key_exists("loop_index", $context)) ? (_twig_default_filter(($context["loop_index"] ?? null), null)) : (null))]);
        echo ">
        ";
        // line 7
        $this->loadTemplate("@SyliusShop/Product/_info.html.twig", "SyliusShopBundle:Cart/Summary:_item.html.twig", 7)->display(twig_array_merge($context, ["variant" => ($context["product_variant"] ?? null)]));
        // line 8
        echo "    </td>
    <td class=\"right aligned\">
        ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "unitPrice", [], "any", false, false, false, 10) != twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discountedUnitPrice", [], "any", false, false, false, 10))) {
            // line 11
            echo "            <span class=\"sylius-regular-unit-price\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["cart-product-regular-unit-price"]);
            echo ">
                <span class=\"old-price\">";
            // line 12
            echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "unitPrice", [], "any", false, false, false, 12)], 12, $context, $this->getSourceContext());
            echo "</span>
            </span>
        ";
        }
        // line 15
        echo "        <span class=\"sylius-unit-price\" ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["cart-product-unit-price", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "productName", [], "any", false, false, false, 15)]);
        echo ">";
        echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "discountedUnitPrice", [], "any", false, false, false, 15)], 15, $context, $this->getSourceContext());
        echo "</span>
    </td>
    <td class=\"center aligned\">
        <span class=\"sylius-quantity ui form\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 18), 'widget', call_user_func_array($this->env->getFilter('sylius_merge_recursive')->getCallable(), [call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["cart-item-quantity-input", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "productName", [], "any", false, false, false, 18)]), ["attr" => ["form" => ($context["main_form"] ?? null)]]]));
        echo "</span>
    </td>
    <td class=\"center aligned\">
        <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_cart_item_remove", ["id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 21)]), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 23)), "html", null, true);
        echo "\" />
            <button type=\"submit\" class=\"ui circular icon button sylius-cart-remove-button\" ";
        // line 24
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["cart-remove-button", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "productName", [], "any", false, false, false, 24)]);
        echo " ><i class=\"remove icon\"></i></button>
        </form>
    </td>
    <td class=\"right aligned\">
        <span class=\"sylius-total\" ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["cart-product-subtotal"]);
        echo ">";
        echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "subtotal", [], "any", false, false, false, 28)], 28, $context, $this->getSourceContext());
        echo "</span>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 28,  98 => 24,  94 => 23,  89 => 21,  83 => 18,  74 => 15,  68 => 12,  63 => 11,  61 => 10,  57 => 8,  55 => 7,  51 => 6,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Cart/Summary:_item.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_item.html.twig");
    }
}
