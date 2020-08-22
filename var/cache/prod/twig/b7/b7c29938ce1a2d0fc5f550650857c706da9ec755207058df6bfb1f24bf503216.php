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

/* @SyliusPayum/layout.html.twig */
class __TwigTemplate_ab1c076ebdf722f4ae8dfa41c8c40f3d610f9d068ee8c5e9b75266bf9bb90b7f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'payum_body' => [$this, 'block_payum_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'payum_stylesheets' => [$this, 'block_payum_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'payum_javascripts' => [$this, 'block_payum_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('content', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $this->displayBlock('payum_body', $context, $blocks);
    }

    public function block_payum_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayBlock('payum_stylesheets', $context, $blocks);
    }

    public function block_payum_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 9
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->displayBlock('payum_javascripts', $context, $blocks);
    }

    public function block_payum_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    public function getTemplateName()
    {
        return "@SyliusPayum/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 10,  87 => 9,  76 => 6,  72 => 5,  61 => 2,  57 => 1,  53 => 9,  50 => 8,  48 => 5,  45 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusPayum/layout.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/views/layout.html.twig");
    }
}
