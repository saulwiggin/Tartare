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

/* @SyliusShop/Product/Show/_variantSelection.html.twig */
class __TwigTemplate_2f0fd80c5ecba34df3d7d44cc268f73d4a87c99276c1b5f2c625fdc6c1fa86f9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_variantSelection.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_variantSelection.html.twig"));

        // line 1
        if (((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1, $this->source); })()), "isConfigurable", [], "method", false, false, false, 1) && (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1, $this->source); })()), "getVariantSelectionMethod", [], "method", false, false, false, 1) == "match")) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1, $this->source); })()), "variants", [], "any", false, false, false, 1), "empty", [], "method", false, false, false, 1))) {
            // line 2
            echo "    ";
            $this->loadTemplate("@SyliusShop/Product/Show/_variantsPricing.html.twig", "@SyliusShop/Product/Show/_variantSelection.html.twig", 2)->display(twig_array_merge($context, ["pricing" => call_user_func_array($this->env->getFunction('sylius_product_variant_prices')->getCallable(), [(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 2, $this->source); })()), "channel", [], "any", false, false, false, 2)])]));
        }
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("@SyliusShop/Product/Show/_inventory.html.twig", "@SyliusShop/Product/Show/_variantSelection.html.twig", 5)->display($context);
        // line 6
        echo "
<div class=\"ui hidden divider\"></div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_variantSelection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  52 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if product.isConfigurable() and product.getVariantSelectionMethod() == 'match' and not product.variants.empty() %}
    {% include '@SyliusShop/Product/Show/_variantsPricing.html.twig' with {'pricing': sylius_product_variant_prices(product, sylius.channel)} %}
{% endif %}

{% include '@SyliusShop/Product/Show/_inventory.html.twig' %}

<div class=\"ui hidden divider\"></div>
", "@SyliusShop/Product/Show/_variantSelection.html.twig", "/Users/drsilaswiggin/dev/e-commerce/demo/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_variantSelection.html.twig");
    }
}
