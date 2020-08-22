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

/* SyliusShopBundle:Cart/Summary:_header.html.twig */
class __TwigTemplate_eafada52db222e84d87a0b9473e08a45b75ccf5b4c70c143636607c8f8dda81d extends \Twig\Template
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
        $macros["headers"] = $this->macros["headers"] = $this->loadTemplate("@SyliusUi/Macro/headers.html.twig", "SyliusShopBundle:Cart/Summary:_header.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"ui hidden divider\"></div>
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        ";
        // line 6
        echo twig_call_macro($macros["headers"], "macro_default", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["header"] ?? null)), "cart", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit_your_items_apply_coupon_or_proceed_to_the_checkout")], 6, $context, $this->getSourceContext());
        echo "
    </div>
    <div class=\"middle aligned column\">
        <form method=\"post\" action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_cart_clear");
        echo "\" >
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "id", [], "any", false, false, false, 11)), "html", null, true);
        echo "\" />
            <button type=\"submit\" id=\"sylius-cart-clear\" ";
        // line 12
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["cart-clear-button"]);
        echo " class=\"ui right floated basic red button\">
                <i class=\"icon remove\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.clear_cart"), "html", null, true);
        echo "
            </button>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  60 => 12,  56 => 11,  51 => 9,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Cart/Summary:_header.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_header.html.twig");
    }
}
