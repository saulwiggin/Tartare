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

/* @SyliusShop/Checkout/_support.html.twig */
class __TwigTemplate_e7e110edc552358a01ada3a631484d3885bc5713c68baa55b2f9351729ca1575 extends \Twig\Template
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
        echo "<h2 class=\"ui center aligned icon header\">
    <i class=\"circular phone icon\"></i>
    +48 123 456 789
    <span class=\"sub header\">
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.need_assistance"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.call_us"), "html", null, true);
        echo "
    </span>
</h2>

<div class=\"ui divider\"></div>

<div class=\"ui center aligned basic segment\">
    <i class=\"huge cc mastercard icon\"></i>
    <i class=\"huge cc visa icon\"></i>
    <i class=\"huge cc paypal card icon\"></i>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Checkout/_support.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Checkout/_support.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/_support.html.twig");
    }
}
