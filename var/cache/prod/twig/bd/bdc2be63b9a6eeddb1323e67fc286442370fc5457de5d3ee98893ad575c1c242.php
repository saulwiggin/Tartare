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

/* BitBagSyliusCmsPlugin:Grid/Field:sections.html.twig */
class __TwigTemplate_ac8ceaaf3422ae1391047d7191453b5a6c5609366eaf76615cb8a5a52ec47505 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "sections", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 2
            echo "    <span class=\"ui label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "code", [], "any", false, false, false, 2), "html", null, true);
            echo "</span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:Grid/Field:sections.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "BitBagSyliusCmsPlugin:Grid/Field:sections.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Grid/Field/sections.html.twig");
    }
}
