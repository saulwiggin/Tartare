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

/* SyliusAttributeBundle:Types:percent.html.twig */
class __TwigTemplate_b1a9ea822ef4c2006e2cd22a7ca5f0d95eb2d1914bc6d0c2e9c0332840d6d683 extends \Twig\Template
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
        echo twig_escape_filter($this->env, $this->extensions['Sylius\Bundle\UiBundle\Twig\PercentageExtension']->getPercentage(twig_get_attribute($this->env, $this->source, ($context["attribute"] ?? null), "value", [], "any", false, false, false, 1)), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusAttributeBundle:Types:percent.html.twig";
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
        return new Source("", "SyliusAttributeBundle:Types:percent.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/views/Types/percent.html.twig");
    }
}
