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

/* bundles/TwigBundle/Exception/error500.html.twig */
class __TwigTemplate_2cb56ca2506c94afb4297c6e52faf871076e76e5bf352b2bb633d99ab1f271cb extends \Twig\Template
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
        $this->loadTemplate("@SyliusShop/error500.html.twig", "bundles/TwigBundle/Exception/error500.html.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "bundles/TwigBundle/Exception/error500.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bundles/TwigBundle/Exception/error500.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/templates/bundles/TwigBundle/Exception/error500.html.twig");
    }
}
