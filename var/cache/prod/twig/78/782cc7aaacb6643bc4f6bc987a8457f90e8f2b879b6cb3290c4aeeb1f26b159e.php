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

/* SyliusShopBundle:Product:_info.html.twig */
class __TwigTemplate_574b7fd38050b1abc623c6f2bc25639a60fcf9a15552eb4e98994113f8e65403 extends \Twig\Template
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
        $context["product"] = twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "product", [], "any", false, false, false, 1);
        // line 2
        echo "
<div class=\"ui header\">
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "hasImages", [], "any", false, false, false, 4)) {
            // line 5
            echo "        ";
            $this->loadTemplate("@SyliusShop/Product/_mainImage.html.twig", "SyliusShopBundle:Product:_info.html.twig", 5)->display(twig_array_merge($context, ["product" => ($context["variant"] ?? null), "filter" => "sylius_shop_product_tiny_thumbnail"]));
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "        ";
            $this->loadTemplate("@SyliusShop/Product/_mainImage.html.twig", "SyliusShopBundle:Product:_info.html.twig", 7)->display(twig_array_merge($context, ["product" => ($context["product"] ?? null), "filter" => "sylius_shop_product_tiny_thumbnail"]));
            // line 8
            echo "    ";
        }
        // line 9
        echo "    <div class=\"content\">
        <div class=\"sylius-product-name\" ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-name", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "productName", [], "any", false, false, false, 10)]);
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "productName", [], "any", false, false, false, 10), "html", null, true);
        echo "</div>
        <span class=\"sub header sylius-product-variant-code\" ";
        // line 11
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-variant-code"]);
        echo ">
            ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "code", [], "any", false, false, false, 12), "html", null, true);
        echo "
        </span>
    </div>
</div>
";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "hasOptions", [], "method", false, false, false, 16)) {
            // line 17
            echo "    <div class=\"ui horizontal divided list sylius-product-options\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-options"]);
            echo ">
        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "optionValues", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                // line 19
                echo "            <div class=\"item\" data-sylius-option-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionValue"], "name", [], "any", false, false, false, 19), "html", null, true);
                echo "\" ";
                echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["option-name", twig_get_attribute($this->env, $this->source, $context["optionValue"], "name", [], "any", false, false, false, 19)]);
                echo ">
                ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionValue"], "value", [], "any", false, false, false, 20), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    </div>
";
        } elseif ( !(null === twig_get_attribute($this->env, $this->source,         // line 24
($context["item"] ?? null), "variantName", [], "any", false, false, false, 24))) {
            // line 25
            echo "    <div class=\"ui horizontal divided list\">
        <div class=\"item sylius-product-variant-name\" ";
            // line 26
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-variant-name"]);
            echo ">
            ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variantName", [], "any", false, false, false, 27), "html", null, true);
            echo "
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product:_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 27,  112 => 26,  109 => 25,  107 => 24,  104 => 23,  95 => 20,  88 => 19,  84 => 18,  79 => 17,  77 => 16,  70 => 12,  66 => 11,  60 => 10,  57 => 9,  54 => 8,  51 => 7,  48 => 6,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Product:_info.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/_info.html.twig");
    }
}
