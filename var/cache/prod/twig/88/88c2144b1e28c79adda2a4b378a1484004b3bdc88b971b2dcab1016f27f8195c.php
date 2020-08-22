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

/* SyliusShopBundle:Product/Box:_content.html.twig */
class __TwigTemplate_71b0a9394754c4e662cc899058a0dc40e391e5d3a930ace3d3ff8ee0bd685792 extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Product/Box:_content.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"ui fluid card\" ";
        // line 3
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product"]);
        echo ">
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", ["slug" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", [], "any", false, false, false, 4), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translation", [], "any", false, false, false, 4), "locale", [], "any", false, false, false, 4)]), "html", null, true);
        echo "\" class=\"blurring dimmable image\">
        <div class=\"ui dimmer\">
            <div class=\"content\">
                <div class=\"center\">
                    <div class=\"ui inverted button\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_more"), "html", null, true);
        echo "</div>
                </div>
            </div>
        </div>
        ";
        // line 12
        $this->loadTemplate("@SyliusShop/Product/_mainImage.html.twig", "SyliusShopBundle:Product/Box:_content.html.twig", 12)->display(twig_array_merge($context, ["product" => ($context["product"] ?? null)]));
        // line 13
        echo "    </a>
    <div class=\"content\" ";
        // line 14
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-content"]);
        echo ">
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", ["slug" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", [], "any", false, false, false, 15), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translation", [], "any", false, false, false, 15), "locale", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\" class=\"header sylius-product-name\" ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-name", twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 15)]);
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "</a>
        ";
        // line 16
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 16), "empty", [], "method", false, false, false, 16)) {
            // line 17
            echo "            <div class=\"sylius-product-price\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-price"]);
            echo ">";
            echo twig_call_macro($macros["money"], "macro_calculatePrice", [call_user_func_array($this->env->getFilter('sylius_resolve_variant')->getCallable(), [($context["product"] ?? null)])], 17, $context, $this->getSourceContext());
            echo "</div>
        ";
        }
        // line 19
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Box:_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 19,  79 => 17,  77 => 16,  69 => 15,  65 => 14,  62 => 13,  60 => 12,  53 => 8,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Product/Box:_content.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Box/_content.html.twig");
    }
}
