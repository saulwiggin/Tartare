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

/* @SyliusShop/Checkout/SelectShipping/_navigation.html.twig */
class __TwigTemplate_356719c18217681f2830c42ae62ae6c4734050bf450b1341df4deab6fa20837e extends \Twig\Template
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
        $context["enabled"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shipments", [], "any", false, false, false, 1));
        // line 2
        echo "
<div class=\"ui two column grid\">
    <div class=\"column\">
        <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_address");
        echo "\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_address"), "html", null, true);
        echo "</a>
    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled";
        // line 8
        if ( !($context["enabled"] ?? null)) {
            echo " disabled";
        }
        echo " button\" ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["next-step"]);
        echo ">
            <i class=\"arrow right icon\"></i>
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.next"), "html", null, true);
        echo "
        </button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Checkout/SelectShipping/_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  52 => 8,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Checkout/SelectShipping/_navigation.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/SelectShipping/_navigation.html.twig");
    }
}
