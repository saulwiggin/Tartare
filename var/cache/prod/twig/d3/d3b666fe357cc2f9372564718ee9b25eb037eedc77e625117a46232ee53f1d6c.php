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

/* SyliusAdminBundle:ProductVariant/Index/ProductHeader:_breadcrumb.html.twig */
class __TwigTemplate_879ea272295bef469fd5495222f6125686f94a743f7e67e719152a71268c7b7f extends \Twig\Template
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
        $this->loadTemplate(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 1), "templates", [], "any", false, true, false, 1), "breadcrumb", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 1), "templates", [], "any", false, true, false, 1), "breadcrumb", [], "any", false, false, false, 1), "@SyliusAdmin/ProductVariant/Index/_breadcrumb.html.twig")) : ("@SyliusAdmin/ProductVariant/Index/_breadcrumb.html.twig")), "SyliusAdminBundle:ProductVariant/Index/ProductHeader:_breadcrumb.html.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Index/ProductHeader:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:ProductVariant/Index/ProductHeader:_breadcrumb.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Index/ProductHeader/_breadcrumb.html.twig");
    }
}
