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

/* bundles/TwigBundle/Exception/error404.html.twig */
class __TwigTemplate_9d9c5f8c2896efe723a659ee73b00d7ded6ef922263d21793afd7c12336c0932 extends \Twig\Template
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
        $this->loadTemplate("@SyliusShop/error404.html.twig", "bundles/TwigBundle/Exception/error404.html.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "bundles/TwigBundle/Exception/error404.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bundles/TwigBundle/Exception/error404.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/templates/bundles/TwigBundle/Exception/error404.html.twig");
    }
}
