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

/* @SyliusShop/Product/_info.html.twig */
class __TwigTemplate_33a522550cb425e6df46b4bd5763f12db2abd715745773cd9fbcbf98e93bf296 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_info.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_info.html.twig"));

        // line 1
        $context["product"] = twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 1, $this->source); })()), "product", [], "any", false, false, false, 1);
        // line 2
        echo "
<div class=\"ui header\">
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 4, $this->source); })()), "hasImages", [], "any", false, false, false, 4)) {
            // line 5
            echo "        ";
            $this->loadTemplate("@SyliusShop/Product/_mainImage.html.twig", "@SyliusShop/Product/_info.html.twig", 5)->display(twig_array_merge($context, ["product" => (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 5, $this->source); })()), "filter" => "sylius_shop_product_tiny_thumbnail"]));
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "        ";
            $this->loadTemplate("@SyliusShop/Product/_mainImage.html.twig", "@SyliusShop/Product/_info.html.twig", 7)->display(twig_array_merge($context, ["product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 7, $this->source); })()), "filter" => "sylius_shop_product_tiny_thumbnail"]));
            // line 8
            echo "    ";
        }
        // line 9
        echo "    <div class=\"content\">
        <div class=\"sylius-product-name\" ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-name", twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })()), "productName", [], "any", false, false, false, 10)]);
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })()), "productName", [], "any", false, false, false, 10), "html", null, true);
        echo "</div>
        <span class=\"sub header sylius-product-variant-code\" ";
        // line 11
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-variant-code"]);
        echo ">
            ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 12, $this->source); })()), "code", [], "any", false, false, false, 12), "html", null, true);
        echo "
        </span>
    </div>
</div>
";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "hasOptions", [], "method", false, false, false, 16)) {
            // line 17
            echo "    <div class=\"ui horizontal divided list sylius-product-options\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-options"]);
            echo ">
        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 18, $this->source); })()), "optionValues", [], "any", false, false, false, 18));
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
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 24, $this->source); })()), "variantName", [], "any", false, false, false, 24))) {
            // line 25
            echo "    <div class=\"ui horizontal divided list\">
        <div class=\"item sylius-product-variant-name\" ";
            // line 26
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-variant-name"]);
            echo ">
            ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "variantName", [], "any", false, false, false, 27), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 27,  118 => 26,  115 => 25,  113 => 24,  110 => 23,  101 => 20,  94 => 19,  90 => 18,  85 => 17,  83 => 16,  76 => 12,  72 => 11,  66 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set product = variant.product %}

<div class=\"ui header\">
    {% if variant.hasImages %}
        {% include '@SyliusShop/Product/_mainImage.html.twig' with {'product': variant, 'filter': 'sylius_shop_product_tiny_thumbnail'} %}
    {% else %}
        {% include '@SyliusShop/Product/_mainImage.html.twig' with {'product': product, 'filter': 'sylius_shop_product_tiny_thumbnail'} %}
    {% endif %}
    <div class=\"content\">
        <div class=\"sylius-product-name\" {{ sylius_test_html_attribute('product-name', item.productName) }}>{{ item.productName }}</div>
        <span class=\"sub header sylius-product-variant-code\" {{ sylius_test_html_attribute('product-variant-code') }}>
            {{ variant.code }}
        </span>
    </div>
</div>
{% if product.hasOptions() %}
    <div class=\"ui horizontal divided list sylius-product-options\" {{ sylius_test_html_attribute('product-options') }}>
        {% for optionValue in variant.optionValues %}
            <div class=\"item\" data-sylius-option-name=\"{{ optionValue.name }}\" {{ sylius_test_html_attribute('option-name', optionValue.name) }}>
                {{ optionValue.value }}
            </div>
        {% endfor %}
    </div>
{% elseif item.variantName is not null %}
    <div class=\"ui horizontal divided list\">
        <div class=\"item sylius-product-variant-name\" {{ sylius_test_html_attribute('product-variant-name') }}>
            {{ item.variantName }}
        </div>
    </div>
{% endif %}
", "@SyliusShop/Product/_info.html.twig", "/Users/drsilaswiggin/dev/e-commerce/demo/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/_info.html.twig");
    }
}
