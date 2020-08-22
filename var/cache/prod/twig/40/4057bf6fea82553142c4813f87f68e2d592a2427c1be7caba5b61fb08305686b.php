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

/* SyliusAdminBundle:Crud/Create:_content.html.twig */
class __TwigTemplate_b5b2ee95e1fc6d5475f5f5651ad37cfa53bbb1acaae0a5a4f7532a4ac4fd3d9d extends \Twig\Template
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
        $context["index_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2
($context["configuration"] ?? null), "vars", [], "any", false, true, false, 2), "index", [], "any", false, true, false, 2), "route", [], "any", false, true, false, 2), "name", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 2), "index", [], "any", false, true, false, 2), "route", [], "any", false, true, false, 2), "name", [], "any", false, false, false, 2), twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "getRouteName", [0 => "index"], "method", false, false, false, 2))) : (twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "getRouteName", [0 => "index"], "method", false, false, false, 2))), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3
($context["configuration"] ?? null), "vars", [], "any", false, true, false, 3), "index", [], "any", false, true, false, 3), "route", [], "any", false, true, false, 3), "parameters", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 3), "index", [], "any", false, true, false, 3), "route", [], "any", false, true, false, 3), "parameters", [], "any", false, false, false, 3), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 3), "route", [], "any", false, true, false, 3), "parameters", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 3), "route", [], "any", false, true, false, 3), "parameters", [], "any", false, false, false, 3), [])) : ([])))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 3), "route", [], "any", false, true, false, 3), "parameters", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 3), "route", [], "any", false, true, false, 3), "parameters", [], "any", false, false, false, 3), [])) : ([])))));
        // line 6
        echo "
<div class=\"ui segment\">
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 8), "route", [], "any", false, true, false, 8), "name", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 8), "route", [], "any", false, true, false, 8), "name", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "getRouteName", [0 => "create"], "method", false, false, false, 8))) : (twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "getRouteName", [0 => "create"], "method", false, false, false, 8))), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 8), "route", [], "any", false, true, false, 8), "parameters", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 8), "route", [], "any", false, true, false, 8), "parameters", [], "any", false, false, false, 8), [])) : ([]))), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
        echo "
    ";
        // line 9
        $this->loadTemplate("@SyliusAdmin/Crud/form_validation_errors_checker.html.twig", "SyliusAdminBundle:Crud/Create:_content.html.twig", 9)->display($context);
        // line 10
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 10), "templates", [], "any", false, true, false, 10), "form", [], "any", true, true, false, 10)) {
            // line 11
            echo "        ";
            $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, false, false, 11), "templates", [], "any", false, false, false, 11), "form", [], "any", false, false, false, 11), "SyliusAdminBundle:Crud/Create:_content.html.twig", 11)->display($context);
            // line 12
            echo "    ";
        } else {
            // line 13
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
    ";
        }
        // line 15
        echo "
    ";
        // line 16
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([0 => (($context["event_prefix"] ?? null) . ".form"), 1 => "sylius.admin.create.form"], ["metadata" => ($context["metadata"] ?? null), "resource" => ($context["resource"] ?? null), "form" => ($context["form"] ?? null)]);
        echo "

    ";
        // line 18
        $this->loadTemplate("@SyliusUi/Form/Buttons/_create.html.twig", "SyliusAdminBundle:Crud/Create:_content.html.twig", 18)->display(twig_array_merge($context, ["paths" => ["cancel" => ($context["index_url"] ?? null)]]));
        // line 19
        echo "
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 20), 'row');
        echo "
    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Create:_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 21,  79 => 20,  76 => 19,  74 => 18,  69 => 16,  66 => 15,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  49 => 9,  45 => 8,  41 => 6,  39 => 3,  38 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Crud/Create:_content.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/Create/_content.html.twig");
    }
}
