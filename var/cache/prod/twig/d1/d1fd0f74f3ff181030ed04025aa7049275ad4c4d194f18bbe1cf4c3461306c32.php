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

/* @SyliusShop/Common/Form/_address.html.twig */
class __TwigTemplate_d3835b10d542d65a48adccf4fc14527d0d470d8076439d02035971ea7241b96e extends \Twig\Template
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
        if (array_key_exists("type", $context)) {
            // line 2
            echo "    ";
            $context["type"] = (($context["type"] ?? null) . "-");
        } else {
            // line 4
            echo "    ";
            $context["type"] = null;
        }
        // line 6
        echo "
<div class=\"two fields\">
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstName", [], "any", false, false, false, 8), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), [(($context["type"] ?? null) . "first-name")]));
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastName", [], "any", false, false, false, 9), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), [(($context["type"] ?? null) . "last-name")]));
        echo "
</div>
";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company", [], "any", false, false, false, 11), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), [(($context["type"] ?? null) . "company")]));
        echo "
";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "street", [], "any", false, false, false, 12), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), [(($context["type"] ?? null) . "street")]));
        echo "

";
        // line 14
        $this->loadTemplate("@SyliusShop/Common/Form/_countryCode.html.twig", "@SyliusShop/Common/Form/_address.html.twig", 14)->display(twig_array_merge($context, ["form" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "countryCode", [], "any", false, false, false, 14)]));
        // line 15
        echo "
<div class=\"province-container field\" data-url=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_ajax_render_province_form");
        echo "\">
    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "provinceCode", [], "any", true, true, false, 17)) {
            // line 18
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "provinceCode", [], "any", false, false, false, 18), 'row', call_user_func_array($this->env->getFilter('sylius_merge_recursive')->getCallable(), [call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["province-code"]), ["attr" => ["class" => "ui dropdown"]]]));
            echo "
    ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 19
($context["form"] ?? null), "provinceName", [], "any", true, true, false, 19)) {
            // line 20
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "provinceName", [], "any", false, false, false, 20), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["province-name"]));
            echo "
    ";
        }
        // line 22
        echo "</div>

";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "provinceCode", [], "any", true, true, false, 24)) {
            // line 25
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
";
        }
        // line 27
        echo "
<div class=\"two fields\">
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", false, false, false, 29), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), [(($context["type"] ?? null) . "city")]));
        echo "
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postcode", [], "any", false, false, false, 30), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), [(($context["type"] ?? null) . "postcode")]));
        echo "
</div>
";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phoneNumber", [], "any", false, false, false, 32), 'row');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/Form/_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 32,  113 => 30,  109 => 29,  105 => 27,  99 => 25,  97 => 24,  93 => 22,  87 => 20,  85 => 19,  80 => 18,  78 => 17,  74 => 16,  71 => 15,  69 => 14,  64 => 12,  60 => 11,  55 => 9,  51 => 8,  47 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Common/Form/_address.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Form/_address.html.twig");
    }
}
