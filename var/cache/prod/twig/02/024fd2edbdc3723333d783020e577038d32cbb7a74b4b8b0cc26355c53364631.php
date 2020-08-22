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

/* SyliusAdminBundle:ProductReview:_author.html.twig */
class __TwigTemplate_f90221379ad66858fefbaa65e485a9ff9cc63d0ad1d059190878bd87dc2403ee extends \Twig\Template
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
        $this->loadTemplate("@SyliusAdmin/Customer/_info.html.twig", "SyliusAdminBundle:ProductReview:_author.html.twig", 1)->display(twig_array_merge($context, ["customer" => twig_get_attribute($this->env, $this->source, ($context["product_review"] ?? null), "author", [], "any", false, false, false, 1)]));
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductReview:_author.html.twig";
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
        return new Source("", "SyliusAdminBundle:ProductReview:_author.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductReview/_author.html.twig");
    }
}
