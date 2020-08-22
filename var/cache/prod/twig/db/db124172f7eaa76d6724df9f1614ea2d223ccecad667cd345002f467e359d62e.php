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

/* bundles/TwigBundle/Exception/error.html.twig */
class __TwigTemplate_cb108d3d74f853b4de42985b5631274391ed5d03aa84d61c98c0f1fb7090ef42 extends \Twig\Template
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
        $this->loadTemplate("@SyliusShop/error.html.twig", "bundles/TwigBundle/Exception/error.html.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "bundles/TwigBundle/Exception/error.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bundles/TwigBundle/Exception/error.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/templates/bundles/TwigBundle/Exception/error.html.twig");
    }
}
