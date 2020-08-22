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

/* @SyliusUi/Grid/Action/applyTransition.html.twig */
class __TwigTemplate_e8b265df1b8c0f09b853588c5d48f89a17293e2d76814e44459507d3094b7fe1 extends \Twig\Template
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
        if ($this->extensions['SM\Extension\Twig\SMExtension']->can(($context["data"] ?? null), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "transition", [], "any", false, false, false, 1), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "graph", [], "any", false, false, false, 1))) {
            // line 2
            echo "    <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, false, false, 2), "route", [], "any", false, false, false, 2), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, false, false, 2), "parameters", [], "any", false, false, false, 2)), "html", null, true);
            echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 3)), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <button class=\"ui loadable ";
            // line 5
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", false, false, false, 5))) : ("")), "html", null, true);
            echo " labeled icon button\" type=\"submit\" data-js-disable=\".sylius-grid-table-wrapper button, .sylius-grid-table-wrapper a\">
            <i class=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 6), "html", null, true);
            echo " icon\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 6)), "html", null, true);
            echo "
        </button>
    </form>
";
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/Action/applyTransition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 5,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusUi/Grid/Action/applyTransition.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Action/applyTransition.html.twig");
    }
}
