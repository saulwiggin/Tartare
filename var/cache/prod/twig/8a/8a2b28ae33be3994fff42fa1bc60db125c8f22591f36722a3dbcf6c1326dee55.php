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

/* BitBagSyliusCmsPlugin:CrudUi:update.html.twig */
class __TwigTemplate_61ab6504212412db166988e0715861150e1121be6103e63288cf9e6b32d70069 extends \Twig\Template
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
        $macros["headers"] = $this->macros["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "BitBagSyliusCmsPlugin:CrudUi:update.html.twig", 3)->unwrap();
        // line 4
        $macros["buttons"] = $this->macros["buttons"] = $this->loadTemplate("SyliusUiBundle:Macro:buttons.html.twig", "BitBagSyliusCmsPlugin:CrudUi:update.html.twig", 4)->unwrap();
        // line 6
        $context["header"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 6), "header", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 6), "header", [], "any", false, false, false, 6), ((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 6) . ".ui.edit_") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "name", [], "any", false, false, false, 6)))) : (((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 6) . ".ui.edit_") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "name", [], "any", false, false, false, 6))));
        // line 7
        $context["event_prefix"] = (((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 7) . ".admin.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "name", [], "any", false, false, false, 7)) . ".update");
        // line 11
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@SyliusAdmin/Form/theme.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("BitBagSyliusCmsPlugin::layout.html.twig", "BitBagSyliusCmsPlugin:CrudUi:update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
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
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), [(($context["event_prefix"] ?? null) . ".before_header"), ["resource" => ($context["resource"] ?? null)]]);
        echo "

";
        // line 16
        $this->loadTemplate("@SyliusAdmin/Crud/Update/_header.html.twig", "BitBagSyliusCmsPlugin:CrudUi:update.html.twig", 16)->display($context);
        // line 17
        echo "
";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), [(($context["event_prefix"] ?? null) . ".after_header"), ["resource" => ($context["resource"] ?? null)]]);
        echo "

";
        // line 20
        $this->loadTemplate("@SyliusAdmin/Crud/Update/_content.html.twig", "BitBagSyliusCmsPlugin:CrudUi:update.html.twig", 20)->display($context);
        // line 21
        echo "
";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), [(($context["event_prefix"] ?? null) . ".after_content"), ["resource" => ($context["resource"] ?? null)]]);
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

    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/bitbagsyliuscmsplugin/css/style.css"), "html", null, true);
        echo "\">

    ";
        // line 30
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), [(($context["event_prefix"] ?? null) . ".stylesheets")]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:CrudUi:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 30,  108 => 28,  102 => 26,  98 => 25,  92 => 22,  89 => 21,  87 => 20,  82 => 18,  79 => 17,  77 => 16,  72 => 14,  68 => 13,  59 => 9,  54 => 1,  52 => 11,  50 => 7,  48 => 6,  46 => 4,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "BitBagSyliusCmsPlugin:CrudUi:update.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/CrudUi/update.html.twig");
    }
}
