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

/* BitBagSyliusCmsPlugin:CrudUi:index.html.twig */
class __TwigTemplate_412916a016b42dead011c61b11d2d3c8fdb93684b6c0a0480133afd2bc38f809 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "BitBagSyliusCmsPlugin::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["headers"] = $this->macros["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "BitBagSyliusCmsPlugin:CrudUi:index.html.twig", 3)->unwrap();
        // line 5
        $context["definition"] = twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "definition", [], "any", false, false, false, 5);
        // line 6
        $context["data"] = twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", [], "any", false, false, false, 6);
        // line 7
        $context["event_prefix"] = (((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 7) . ".admin.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "name", [], "any", false, false, false, 7)) . ".index");
        // line 9
        $context["header"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 9), "header", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 9), "header", [], "any", false, false, false, 9), ((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 9) . ".ui.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "pluralName", [], "any", false, false, false, 9)))) : (((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 9) . ".ui.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "pluralName", [], "any", false, false, false, 9))));
        // line 1
        $this->parent = $this->loadTemplate("BitBagSyliusCmsPlugin::layout.html.twig", "BitBagSyliusCmsPlugin:CrudUi:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["header"] ?? null)), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), [(($context["event_prefix"] ?? null) . ".before_header"), ["resources" => ($context["resources"] ?? null)]]);
        echo "

    ";
        // line 16
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_header.html.twig", "BitBagSyliusCmsPlugin:CrudUi:index.html.twig", 16)->display($context);
        // line 17
        echo "
    ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), [(($context["event_prefix"] ?? null) . ".after_header"), ["resources" => ($context["resources"] ?? null)]]);
        echo "

    ";
        // line 20
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_content.html.twig", "BitBagSyliusCmsPlugin:CrudUi:index.html.twig", 20)->display($context);
        // line 21
        echo "
    ";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), [(($context["event_prefix"] ?? null) . ".after_content"), ["resources" => ($context["resources"] ?? null)]]);
        echo "
";
    }

    // line 25
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), [(($context["event_prefix"] ?? null) . ".stylesheets")]);
        echo "
";
    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 34
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), [(($context["event_prefix"] ?? null) . ".javascripts")]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:CrudUi:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 34,  120 => 32,  116 => 31,  110 => 28,  104 => 26,  100 => 25,  94 => 22,  91 => 21,  89 => 20,  84 => 18,  81 => 17,  79 => 16,  73 => 14,  69 => 13,  60 => 11,  55 => 1,  53 => 9,  51 => 7,  49 => 6,  47 => 5,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "BitBagSyliusCmsPlugin:CrudUi:index.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/CrudUi/index.html.twig");
    }
}
