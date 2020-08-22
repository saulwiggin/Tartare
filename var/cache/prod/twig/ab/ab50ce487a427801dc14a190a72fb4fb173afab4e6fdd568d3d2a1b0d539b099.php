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

/* @SyliusShop/Product/Show/_price.html.twig */
class __TwigTemplate_358696d77e13c516ffff688b79984bae26a7702ac3090ba85be6d285781e726c extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Product/Show/_price.html.twig", 1)->unwrap();
        // line 2
        echo "
<span class=\"ui huge header\" id=\"product-price\" ";
        // line 3
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-price", twig_call_macro($macros["money"], "macro_calculatePrice", [call_user_func_array($this->env->getFilter('sylius_resolve_variant')->getCallable(), [($context["product"] ?? null)])], 3, $context, $this->getSourceContext())]);
        echo ">
    ";
        // line 4
        echo twig_call_macro($macros["money"], "macro_calculatePrice", [call_user_func_array($this->env->getFilter('sylius_resolve_variant')->getCallable(), [($context["product"] ?? null)])], 4, $context, $this->getSourceContext());
        echo "
</span>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Product/Show/_price.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_price.html.twig");
    }
}
