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

/* @BitBagSyliusCmsPlugin/Grid/Field/content.html.twig */
class __TwigTemplate_1ff1a25eaa74c98a48c4b5f2ab91b0612dd92344316abf2817a59c6298be2ba7 extends \Twig\Template
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
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "content", [], "any", false, false, false, 1)) > 25)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "content", [], "any", false, false, false, 1), 0, 25) . "...")) : (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "content", [], "any", false, false, false, 1))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Grid/Field/content.html.twig";
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
        return new Source("", "@BitBagSyliusCmsPlugin/Grid/Field/content.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Grid/Field/content.html.twig");
    }
}
