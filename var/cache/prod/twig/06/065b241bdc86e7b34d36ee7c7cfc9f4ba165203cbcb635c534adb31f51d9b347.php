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

/* @SyliusAdmin/layout.html.twig */
class __TwigTemplate_a860d73f6a0d0f316a4282dbb4892d3152fd8bbf0f188d5c59551b52bad43b8c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'topbar' => [$this, 'block_topbar'],
            'sidebar' => [$this, 'block_sidebar'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusUi/Layout/sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@SyliusUi/Layout/sidebar.html.twig", "@SyliusAdmin/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " | Sylius";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.layout.stylesheets");
        echo "
";
    }

    // line 9
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->loadTemplate("@SyliusAdmin/_flashes.html.twig", "@SyliusAdmin/layout.html.twig", 10)->display($context);
    }

    // line 13
    public function block_topbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.layout.topbar_left");
        echo "

    <div class=\"ui left floated dividing empty item\"></div>

    ";
        // line 18
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.layout.topbar_middle");
        echo "

    <div class=\"ui right floated dividing empty item\"></div>

    ";
        // line 22
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.layout.topbar_right");
        echo "
";
    }

    // line 25
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.layout.sidebar");
        echo "
";
    }

    // line 29
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.powered_by"), "html", null, true);
        echo " <a href=\"http://sylius.com\" target=\"_blank\">Sylius v";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sylius_meta"] ?? null), "version", [], "any", false, false, false, 30), "html", null, true);
        echo "</a>. ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.see_issue"), "html", null, true);
        echo "? <a href=\"https://github.com/Sylius/Sylius/issues\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.report_it"), "html", null, true);
        echo "!</a>
";
    }

    // line 33
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "    ";
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.layout.javascripts");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 34,  131 => 33,  119 => 30,  115 => 29,  108 => 26,  104 => 25,  98 => 22,  91 => 18,  83 => 14,  79 => 13,  74 => 10,  70 => 9,  63 => 6,  59 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/layout.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/layout.html.twig");
    }
}
