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

/* SyliusShopBundle:Checkout/SelectPayment:_unavailable.html.twig */
class __TwigTemplate_4519a952e2a1991b31a1abafcde96d36457ebf4b98372f3203649124ffe1d3a9 extends \Twig\Template
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
        echo "<div class=\"ui icon message\" id=\"sylius-order-cannot-be-paid\" ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["order-cannot-be-paid"]);
        echo ">
    <i class=\"warning sign icon\"></i>
    <div class=\"content\">
        <div class=\"header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.warning"), "html", null, true);
        echo "</div>
        <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_payment_methods_available"), "html", null, true);
        echo ".</p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectPayment:_unavailable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Checkout/SelectPayment:_unavailable.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/SelectPayment/_unavailable.html.twig");
    }
}
