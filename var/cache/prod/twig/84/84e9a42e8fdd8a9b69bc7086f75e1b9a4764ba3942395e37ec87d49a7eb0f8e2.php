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

/* @SyliusAdmin/ProductReview/_author.html.twig */
class __TwigTemplate_a2e161331bd8640f8dd79399d7d0288ff01ca294f7e962f633d47af2250b19c3 extends \Twig\Template
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
        $this->loadTemplate("@SyliusAdmin/Customer/_info.html.twig", "@SyliusAdmin/ProductReview/_author.html.twig", 1)->display(twig_array_merge($context, ["customer" => twig_get_attribute($this->env, $this->source, ($context["product_review"] ?? null), "author", [], "any", false, false, false, 1)]));
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/ProductReview/_author.html.twig";
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
        return new Source("", "@SyliusAdmin/ProductReview/_author.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductReview/_author.html.twig");
    }
}
