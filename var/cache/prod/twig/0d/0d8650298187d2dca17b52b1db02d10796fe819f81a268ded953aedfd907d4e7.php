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

/* SonataBlockBundle:Block:block_no_page_available.html.twig */
class __TwigTemplate_b177074c9a2f6b3918756801b8b4ead75bcf4a4e39badf5c11220f8ad88a4c68 extends \Twig\Template
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
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_no_page_available.html.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("", "SonataBlockBundle:Block:block_no_page_available.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_no_page_available.html.twig");
    }
}
