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

/* @SonataBlock/Block/block_base.html.twig */
class __TwigTemplate_15f652820ae8274459f238e328d3ddfdac5b7eb07f8e46d11a7ff2e51d431bfa extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block' => [$this, 'block_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
    }

    // line 12
    public function block_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "EMPTY CONTENT";
    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  45 => 13,  43 => 12,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataBlock/Block/block_base.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_base.html.twig");
    }
}
