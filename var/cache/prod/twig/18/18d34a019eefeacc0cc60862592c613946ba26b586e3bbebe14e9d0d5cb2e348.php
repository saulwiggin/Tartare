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

/* @SyliusShop/Product/Show/_addToCart.html.twig */
class __TwigTemplate_f4a1cc122aa8d153c3d4596fed3f7f66249c6b1cc9a61913ecf516f386c94fc3 extends \Twig\Template
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
        $context["product"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order_item"] ?? null), "variant", [], "any", false, false, false, 1), "product", [], "any", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@SyliusShop/Form/theme.html.twig"], true);
        // line 4
        echo "
<div class=\"ui segment\" id=\"sylius-product-selecting-variant\" ";
        // line 5
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-selecting-variant"]);
        echo ">
    ";
        // line 6
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.product.show.before_add_to_cart", ["product" => ($context["product"] ?? null), "order_item" => ($context["order_item"] ?? null)]);
        echo "

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_ajax_cart_add_item", ["productId" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 8)]), "attr" => ["id" => "sylius-product-adding-to-cart", "class" => "ui loadable form", "novalidate" => "novalidate", "data-redirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "getRedirectRoute", [0 => "summary"], "method", false, false, false, 8))]]);
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"ui red label bottom pointing hidden sylius-validation-error\" id=\"sylius-cart-validation-error\" ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["cart-validation-error"]);
        echo "></div>
    ";
        // line 11
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "simple", [], "any", false, false, false, 11)) {
            // line 12
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variantSelectionMethodChoice", [], "any", false, false, false, 12)) {
                // line 13
                echo "            ";
                $this->loadTemplate("@SyliusShop/Product/Show/_variants.html.twig", "@SyliusShop/Product/Show/_addToCart.html.twig", 13)->display($context);
                // line 14
                echo "        ";
            } else {
                // line 15
                echo "            ";
                $this->loadTemplate("@SyliusShop/Product/Show/_options.html.twig", "@SyliusShop/Product/Show/_addToCart.html.twig", 15)->display($context);
                // line 16
                echo "        ";
            }
            // line 17
            echo "    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cartItem", [], "any", false, false, false, 18), "quantity", [], "any", false, false, false, 18), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["quantity"]));
        echo "

    ";
        // line 20
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.product.show.add_to_cart_form", ["product" => ($context["product"] ?? null), "order_item" => ($context["order_item"] ?? null)]);
        echo "

    <button type=\"submit\" class=\"ui huge primary icon labeled button\" ";
        // line 22
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["add-to-cart-button"]);
        echo "><i class=\"cart icon\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.add_to_cart"), "html", null, true);
        echo "</button>
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 23), 'row');
        echo "
    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_addToCart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 24,  105 => 23,  99 => 22,  94 => 20,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  76 => 14,  73 => 13,  70 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  51 => 6,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Product/Show/_addToCart.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_addToCart.html.twig");
    }
}
