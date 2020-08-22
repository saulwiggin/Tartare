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

/* @SyliusShop/Common/Order/_addresses.html.twig */
class __TwigTemplate_0a190b5166bf0ec689a1fcb8997bf092f0f3e91acd198bbc691e47c293874713 extends \Twig\Template
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
        echo "<div class=\"ui segment\">
    <div class=\"ui two column divided stackable grid\">
        <div class=\"column\" id=\"sylius-billing-address\" ";
        // line 3
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["billing-address"]);
        echo ">
            <div class=\"ui small dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.billing_address"), "html", null, true);
        echo "</div>
            ";
        // line 5
        $this->loadTemplate("@SyliusShop/Common/_address.html.twig", "@SyliusShop/Common/Order/_addresses.html.twig", 5)->display(twig_array_merge($context, ["address" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "billingAddress", [], "any", false, false, false, 5)]));
        // line 6
        echo "        </div>
        <div class=\"column\" id=\"sylius-shipping-address\" ";
        // line 7
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["shipping-address"]);
        echo ">
            <div class=\"ui small dividing header\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_address"), "html", null, true);
        echo "</div>
            ";
        // line 9
        $this->loadTemplate("@SyliusShop/Common/_address.html.twig", "@SyliusShop/Common/Order/_addresses.html.twig", 9)->display(twig_array_merge($context, ["address" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shippingAddress", [], "any", false, false, false, 9)]));
        // line 10
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/Order/_addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  62 => 9,  58 => 8,  54 => 7,  51 => 6,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Common/Order/_addresses.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/_addresses.html.twig");
    }
}
