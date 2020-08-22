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

/* @SyliusShop/Common/Order/_summary.html.twig */
class __TwigTemplate_c9657e1c95b0958d718a1adb6746c081dd748ed7bcfb2a2130fe177f2099ff8b extends \Twig\Template
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
        $this->loadTemplate("@SyliusShop/Common/Order/_addresses.html.twig", "@SyliusShop/Common/Order/_summary.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("@SyliusShop/Common/Order/_table.html.twig", "@SyliusShop/Common/Order/_summary.html.twig", 2)->display($context);
        // line 3
        echo "
<div class=\"ui two column stackable grid\">
    <div class=\"column\" id=\"sylius-payments\">
        ";
        // line 6
        $this->loadTemplate("@SyliusShop/Common/Order/_payments.html.twig", "@SyliusShop/Common/Order/_summary.html.twig", 6)->display($context);
        // line 7
        echo "    </div>
    <div class=\"column\" id=\"sylius-shipments\">
        ";
        // line 9
        $this->loadTemplate("@SyliusShop/Common/Order/_shipments.html.twig", "@SyliusShop/Common/Order/_summary.html.twig", 9)->display($context);
        // line 10
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/Order/_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  52 => 9,  48 => 7,  46 => 6,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Common/Order/_summary.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/_summary.html.twig");
    }
}
