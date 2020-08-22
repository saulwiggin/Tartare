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

/* @SyliusAdmin/Crud/update.html.twig */
class __TwigTemplate_e792741b9ca77f7409b34f10c042dd0e512432859d10255179ab5cbb65faf296 extends \Twig\Template
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
        return "@SyliusAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["header"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 3), "header", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 3), "header", [], "any", false, false, false, 3), ((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 3) . ".ui.edit_") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "name", [], "any", false, false, false, 3)))) : (((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 3) . ".ui.edit_") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "name", [], "any", false, false, false, 3))));
        // line 4
        $context["event_prefix"] = (((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 4) . ".admin.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "name", [], "any", false, false, false, 4)) . ".update");
        // line 8
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@SyliusAdmin/Form/theme.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@SyliusAdmin/layout.html.twig", "@SyliusAdmin/Crud/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["header"] ?? null)), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([0 => ($context["event_prefix"] ?? null), 1 => "sylius.admin.update"], $context);
        echo "
";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 17
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([0 => (($context["event_prefix"] ?? null) . ".stylesheets"), 1 => "sylius.admin.update.stylesheets"], ["metadata" => ($context["metadata"] ?? null)]);
        echo "
";
    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 23
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([0 => (($context["event_prefix"] ?? null) . ".javascripts"), 1 => "sylius.admin.update.javascripts"], ["metadata" => ($context["metadata"] ?? null)]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 23,  96 => 21,  92 => 20,  86 => 17,  80 => 15,  76 => 14,  69 => 11,  65 => 10,  56 => 6,  51 => 1,  49 => 8,  47 => 4,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Crud/update.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/update.html.twig");
    }
}
