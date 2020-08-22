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

/* SyliusAttributeBundle:Types:textarea.html.twig */
class __TwigTemplate_ed7952ba3105b15ebbace12f748675acd93a768baf59ac2d816cb4ef23badbd9 extends \Twig\Template
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
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["attribute"] ?? null), "value", [], "any", false, false, false, 1), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusAttributeBundle:Types:textarea.html.twig";
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
        return new Source("", "SyliusAttributeBundle:Types:textarea.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/views/Types/textarea.html.twig");
    }
}
