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

/* SyliusShopBundle:Product/Show:_variantSelection.html.twig */
class __TwigTemplate_da6c0d31dcb818fa59bf12de0208fce68fcf5dd386a2e32528e8bcf28a4c1070 extends \Twig\Template
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
        if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isConfigurable", [], "method", false, false, false, 1) && (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getVariantSelectionMethod", [], "method", false, false, false, 1) == "match")) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 1), "empty", [], "method", false, false, false, 1))) {
            // line 2
            echo "    ";
            $this->loadTemplate("@SyliusShop/Product/Show/_variantsPricing.html.twig", "SyliusShopBundle:Product/Show:_variantSelection.html.twig", 2)->display(twig_array_merge($context, ["pricing" => call_user_func_array($this->env->getFunction('sylius_product_variant_prices')->getCallable(), [($context["product"] ?? null), twig_get_attribute($this->env, $this->source, ($context["sylius"] ?? null), "channel", [], "any", false, false, false, 2)])]));
        }
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("@SyliusShop/Product/Show/_inventory.html.twig", "SyliusShopBundle:Product/Show:_variantSelection.html.twig", 5)->display($context);
        // line 6
        echo "
<div class=\"ui hidden divider\"></div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_variantSelection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  46 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Product/Show:_variantSelection.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_variantSelection.html.twig");
    }
}
