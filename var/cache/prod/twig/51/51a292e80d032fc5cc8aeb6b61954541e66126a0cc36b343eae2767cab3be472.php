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

/* @SyliusShop/Checkout/SelectPayment/_choice.html.twig */
class __TwigTemplate_60fd75416c2135a94965c00ce43be6dd13d9a4f5c22aab1fd1174ac5fa3d5298 extends \Twig\Template
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
        echo "<div class=\"item\" ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["payment-item"]);
        echo ">
    <div class=\"field\">
        <div class=\"ui radio checkbox\" ";
        // line 3
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["payment-method-checkbox"]);
        echo ">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["payment-method-select"]));
        echo "
        </div>
    </div>
    <div class=\"content\">
        <a class=\"header\">";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["label_attr" => ["data-test-payment-method-label" => ""]]);
        echo "</a>
        ";
        // line 9
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "description", [], "any", false, false, false, 9))) {
            // line 10
            echo "            <div class=\"description\">
                <p>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "description", [], "any", false, false, false, 11), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 14
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Checkout/SelectPayment/_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  63 => 11,  60 => 10,  58 => 9,  54 => 8,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Checkout/SelectPayment/_choice.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/SelectPayment/_choice.html.twig");
    }
}
