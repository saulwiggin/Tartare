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

/* SyliusShopBundle:Product/Show:_association.html.twig */
class __TwigTemplate_4a624c3f51afd7bb130597c4d3712f340fd7253c974210af403dbf71bb95b8f4 extends \Twig\Template
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
        echo "<h4 class=\"ui horizontal section divider header\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product_association"] ?? null), "type", [], "any", false, false, false, 1), "name", [], "any", false, false, false, 1), "html", null, true);
        echo "</h4>
<div id=\"sylius-product-association-";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product_association"] ?? null), "type", [], "any", false, false, false, 2), "name", [], "any", false, false, false, 2), "html", null, true);
        echo "\" ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-association", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product_association"] ?? null), "type", [], "any", false, false, false, 2), "name", [], "any", false, false, false, 2)]);
        echo ">
";
        // line 3
        $this->loadTemplate("@SyliusShop/Product/_horizontalList.html.twig", "SyliusShopBundle:Product/Show:_association.html.twig", 3)->display(twig_array_merge($context, ["products" => twig_get_attribute($this->env, $this->source, ($context["product_association"] ?? null), "associatedProducts", [], "any", false, false, false, 3)]));
        // line 4
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  48 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Product/Show:_association.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_association.html.twig");
    }
}
