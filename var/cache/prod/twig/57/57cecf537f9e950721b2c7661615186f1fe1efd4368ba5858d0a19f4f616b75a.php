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

/* @SyliusShop/Checkout/Address/_form.html.twig */
class __TwigTemplate_ae761ac5b7bf04fcd1de6f3e672c4649df89dbd83af280b009ac0bd8065f6935 extends \Twig\Template
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
        echo "<div id=\"sylius-billing-address\" ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["billing-address"]);
        echo ">
    ";
        // line 2
        $this->loadTemplate("@SyliusShop/Checkout/Address/_addressBookSelect.html.twig", "@SyliusShop/Checkout/Address/_form.html.twig", 2)->display($context);
        // line 3
        echo "    <h3 class=\"ui dividing header\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.billing_address"), "html", null, true);
        echo "</h3>
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "customer", [], "any", true, true, false, 4)) {
            // line 5
            echo "        ";
            $this->loadTemplate("@SyliusShop/Common/Form/_login.html.twig", "@SyliusShop/Checkout/Address/_form.html.twig", 5)->display(twig_array_merge($context, ["form" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "customer", [], "any", false, false, false, 5)]));
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        $this->loadTemplate("@SyliusShop/Common/Form/_address.html.twig", "@SyliusShop/Checkout/Address/_form.html.twig", 7)->display(twig_array_merge($context, ["form" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "billingAddress", [], "any", false, false, false, 7), "order" => ($context["order"] ?? null), "type" => "billing"]));
        // line 8
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "differentShippingAddress", [], "any", false, false, false, 8), 'row', call_user_func_array($this->env->getFilter('sylius_merge_recursive')->getCallable(), [call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["different-shipping-address"]), ["attr" => ["data-toggles" => "sylius-shipping-address"], "label_attr" => ["data-test-different-shipping-address-label" => ""]]]));
        echo "

    ";
        // line 10
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.checkout.address.billing_address_form", ["order" => ($context["order"] ?? null)]);
        echo "
</div>

<div id=\"sylius-shipping-address\" ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["shipping-address"]);
        echo ">
    <div class=\"ui hidden divider\"></div>
    ";
        // line 15
        $this->loadTemplate("@SyliusShop/Checkout/Address/_addressBookSelect.html.twig", "@SyliusShop/Checkout/Address/_form.html.twig", 15)->display($context);
        // line 16
        echo "    <h3 class=\"ui dividing header\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_address"), "html", null, true);
        echo "</h3>
    ";
        // line 17
        $this->loadTemplate("@SyliusShop/Common/Form/_address.html.twig", "@SyliusShop/Checkout/Address/_form.html.twig", 17)->display(twig_array_merge($context, ["form" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shippingAddress", [], "any", false, false, false, 17), "order" => ($context["order"] ?? null), "type" => "shipping"]));
        // line 18
        echo "
    ";
        // line 19
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.checkout.address.shipping_address_form", ["order" => ($context["order"] ?? null)]);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Checkout/Address/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  86 => 18,  84 => 17,  79 => 16,  77 => 15,  72 => 13,  66 => 10,  60 => 8,  57 => 7,  54 => 6,  51 => 5,  49 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Checkout/Address/_form.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/Address/_form.html.twig");
    }
}
