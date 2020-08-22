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

/* SyliusShopBundle:Checkout/SelectShipping:_choice.html.twig */
class __TwigTemplate_111c65520610e0f9686e91bfa417b8919118b16991e630e739b2be0aaac176d9 extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Checkout/SelectShipping:_choice.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"item\" ";
        // line 3
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["shipping-item"]);
        echo ">
    <div class=\"field\">
        <div class=\"ui radio checkbox\" ";
        // line 5
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["shipping-method-checkbox"]);
        echo ">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["shipping-method-select"]));
        echo "
        </div>
    </div>
    <div class=\"content\">
        <a class=\"header\" ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["shipping-method-label"]);
        echo ">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo "</a>
        ";
        // line 11
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "description", [], "any", false, false, false, 11))) {
            // line 12
            echo "            <div class=\"description\">
                <p>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "description", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 16
        echo "    </div>
    <div class=\"extra\">
        <div class=\"ui large right floated fee label\" ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["shipping-method-fee"]);
        echo ">
            ";
        // line 19
        echo twig_call_macro($macros["money"], "macro_convertAndFormat", [($context["fee"] ?? null)], 19, $context, $this->getSourceContext());
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectShipping:_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  79 => 18,  75 => 16,  69 => 13,  66 => 12,  64 => 11,  58 => 10,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Checkout/SelectShipping:_choice.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/SelectShipping/_choice.html.twig");
    }
}
