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

/* SyliusShopBundle:Product/Show/Tabs:_content.html.twig */
class __TwigTemplate_c4c82727b5068648722812337f8cd4119169a5a9b4807fefc81b34225bfcf6cb extends \Twig\Template
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
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_details.html.twig", "SyliusShopBundle:Product/Show/Tabs:_content.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_attributes.html.twig", "SyliusShopBundle:Product/Show/Tabs:_content.html.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_reviews.html.twig", "SyliusShopBundle:Product/Show/Tabs:_content.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show/Tabs:_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Product/Show/Tabs:_content.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/Tabs/_content.html.twig");
    }
}
