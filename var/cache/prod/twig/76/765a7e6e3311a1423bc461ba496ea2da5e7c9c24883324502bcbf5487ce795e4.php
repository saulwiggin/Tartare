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

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_05f5038c87300fd0f38c489dee9eb9e7b48e3e4dd78e76a8cf2f359449c3fdc3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'block' => [$this, 'block_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_block"] ?? null), "templates", [], "any", false, false, false, 12), "block_base", [], "any", false, false, false, 12), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "content", [], "any", false, false, false, 15);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  45 => 14,  35 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "SonataBlockBundle:Block:block_core_text.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_core_text.html.twig");
    }
}
