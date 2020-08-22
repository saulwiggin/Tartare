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

/* @SyliusPayum/Action/Stripe/obtainCheckoutToken.html.twig */
class __TwigTemplate_d4cd9b43e65663cdba7359a12be56a53d7e6fde744783c9b7bf8f3ae441b5e74 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((($context["layout"] ?? null)) ? (($context["layout"] ?? null)) : ("@SyliusPayum/layout.html.twig")), "@SyliusPayum/Action/Stripe/obtainCheckoutToken.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, ((array_key_exists("actionUrl", $context)) ? (_twig_default_filter(($context["actionUrl"] ?? null), "")) : ("")), "html", null, true);
        echo "\" method=\"POST\">
        <script
                src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                data-key=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["publishable_key"] ?? null), "html", null, true);
        echo "\"
                data-image=\"";
        // line 10
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "image", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "image", [], "any", false, false, false, 10), "")) : ("")), "html", null, true);
        echo "\"
                data-name=\"";
        // line 11
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "name", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "name", [], "any", false, false, false, 11), "")) : ("")), "html", null, true);
        echo "\"
                data-description=\"";
        // line 12
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "description", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "description", [], "any", false, false, false, 12), "")) : ("")), "html", null, true);
        echo "\"
                data-amount=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "amount", [], "any", false, false, false, 13), "html", null, true);
        echo "\"
                data-currency=\"";
        // line 14
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "currency", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "currency", [], "any", false, false, false, 14), "USD")) : ("USD")), "html", null, true);
        echo "\">
        </script>
    </form>
";
    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {\$('form .stripe-button-el').click();});
    </script>
";
    }

    public function getTemplateName()
    {
        return "@SyliusPayum/Action/Stripe/obtainCheckoutToken.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 20,  90 => 19,  82 => 14,  78 => 13,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  56 => 6,  50 => 4,  46 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusPayum/Action/Stripe/obtainCheckoutToken.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/views/Action/Stripe/obtainCheckoutToken.html.twig");
    }
}
