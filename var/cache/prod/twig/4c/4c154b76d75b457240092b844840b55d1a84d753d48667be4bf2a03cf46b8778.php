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

/* SyliusAdminBundle:Crud/Index:_header.html.twig */
class __TwigTemplate_5e0c2d64345b6d1e58224e9a4391e4e4f9b0b9c621f9d3dbb13608c46e2e7bc7 extends \Twig\Template
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
        echo "<div class=\"ui stackable two column grid\">
    <div class=\"column\">
        ";
        // line 3
        $this->loadTemplate(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 3), "templates", [], "any", false, true, false, 3), "header_title", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 3), "templates", [], "any", false, true, false, 3), "header_title", [], "any", false, false, false, 3), "@SyliusAdmin/Crud/Index/_headerTitle.html.twig")) : ("@SyliusAdmin/Crud/Index/_headerTitle.html.twig")), "SyliusAdminBundle:Crud/Index:_header.html.twig", 3)->display($context);
        // line 4
        echo "        ";
        $this->loadTemplate(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 4), "templates", [], "any", false, true, false, 4), "breadcrumb", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 4), "templates", [], "any", false, true, false, 4), "breadcrumb", [], "any", false, false, false, 4), "@SyliusAdmin/Crud/Index/_breadcrumb.html.twig")) : ("@SyliusAdmin/Crud/Index/_breadcrumb.html.twig")), "SyliusAdminBundle:Crud/Index:_header.html.twig", 4)->display($context);
        // line 5
        echo "
        ";
        // line 6
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([0 => (($context["event_prefix"] ?? null) . ".header"), 1 => "sylius.admin.index.header"], $context);
        echo "
    </div>

    ";
        // line 9
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_actions.html.twig", "SyliusAdminBundle:Crud/Index:_header.html.twig", 9)->display($context);
        // line 10
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Index:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  55 => 9,  49 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Crud/Index:_header.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/Index/_header.html.twig");
    }
}
