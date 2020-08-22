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

/* @SyliusUi/Grid/Action/update.html.twig */
class __TwigTemplate_ca5a80ecf3e0bfeab7fa014efbea96375f479716e7e8ff63101c9fbad16d3db2 extends \Twig\Template
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
        $macros["buttons"] = $this->macros["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusUi/Grid/Action/update.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["path"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 3), "url", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 3), "url", [], "any", false, false, false, 3), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 3), "route", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 3), "route", [], "any", false, false, false, 3), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "requestConfiguration", [], "any", false, false, false, 3), "getRouteName", [0 => "update"], "method", false, false, false, 3))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "requestConfiguration", [], "any", false, false, false, 3), "getRouteName", [0 => "update"], "method", false, false, false, 3))), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 3), "parameters", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 3), "parameters", [], "any", false, false, false, 3), ["id" => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 3)])) : (["id" => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 3)]))))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 3), "route", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 3), "route", [], "any", false, false, false, 3), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "requestConfiguration", [], "any", false, false, false, 3), "getRouteName", [0 => "update"], "method", false, false, false, 3))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "requestConfiguration", [], "any", false, false, false, 3), "getRouteName", [0 => "update"], "method", false, false, false, 3))), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 3), "parameters", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "link", [], "any", false, true, false, 3), "parameters", [], "any", false, false, false, 3), ["id" => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 3)])) : (["id" => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 3)])))));
        // line 4
        echo "
";
        // line 5
        echo twig_call_macro($macros["buttons"], "macro_edit", [($context["path"] ?? null), twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/Action/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusUi/Grid/Action/update.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Action/update.html.twig");
    }
}
