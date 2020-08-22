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

/* BitBagSyliusCmsPlugin:CrudUi:create.html.twig */
class __TwigTemplate_315dcbef318fc1919f4761653e4e068c0fded6e3bc7c7233aa2232678460af87 extends \Twig\Template
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
        $macros["headers"] = $this->macros["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "BitBagSyliusCmsPlugin:CrudUi:create.html.twig", 3)->unwrap();
        // line 5
        $context["header"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 5), "header", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 5), "header", [], "any", false, false, false, 5), ((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 5) . ".ui.new_") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "name", [], "any", false, false, false, 5)))) : (((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 5) . ".ui.new_") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "name", [], "any", false, false, false, 5))));
        // line 6
        $context["event_prefix"] = (((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 6) . ".admin.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "name", [], "any", false, false, false, 6)) . ".create");
        // line 10
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@SyliusAdmin/Form/theme.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("BitBagSyliusCmsPlugin::layout.html.twig", "BitBagSyliusCmsPlugin:CrudUi:create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["header"] ?? null)), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), [(($context["event_prefix"] ?? null) . ".before_header"), ["resource" => ($context["resource"] ?? null)]]);
        echo "

    ";
        // line 15
        $this->loadTemplate("@SyliusAdmin/Crud/Create/_header.html.twig", "BitBagSyliusCmsPlugin:CrudUi:create.html.twig", 15)->display($context);
        // line 16
        echo "
    ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), [(($context["event_prefix"] ?? null) . ".after_header"), ["resource" => ($context["resource"] ?? null)]]);
        echo "

    ";
        // line 19
        $this->loadTemplate("@SyliusAdmin/Crud/Create/_content.html.twig", "BitBagSyliusCmsPlugin:CrudUi:create.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        // line 21
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), [(($context["event_prefix"] ?? null) . ".after_content"), ["resource" => ($context["resource"] ?? null)]]);
        echo "
";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/bitbagsyliuscmsplugin/css/style.css")), "html", null, true);
        echo "\">

    ";
        // line 29
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), [(($context["event_prefix"] ?? null) . ".stylesheets")]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:CrudUi:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 29,  107 => 27,  101 => 25,  97 => 24,  91 => 21,  88 => 20,  86 => 19,  81 => 17,  78 => 16,  76 => 15,  70 => 13,  66 => 12,  57 => 8,  52 => 1,  50 => 10,  48 => 6,  46 => 5,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "BitBagSyliusCmsPlugin:CrudUi:create.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/CrudUi/create.html.twig");
    }
}
