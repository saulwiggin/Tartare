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

/* SyliusAdminBundle:Crud/Update:_content.html.twig */
class __TwigTemplate_7535c29394dbfbc8f5224a3e50fe8894e644a83c7fd12a630f3d619dbf4ff641 extends \Twig\Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "getRouteName", [0 => "update"], "method", false, false, false, 8), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 8), "route", [], "any", false, true, false, 8), "parameters", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 8), "route", [], "any", false, true, false, 8), "parameters", [], "any", false, false, false, 8), ["id" => twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "id", [], "any", false, false, false, 8)])) : (["id" => twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "id", [], "any", false, false, false, 8)]))), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
        echo "
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
    ";
        // line 10
        $this->loadTemplate("@SyliusAdmin/Crud/form_validation_errors_checker.html.twig", "SyliusAdminBundle:Crud/Update:_content.html.twig", 10)->display($context);
        // line 11
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 11), "templates", [], "any", false, true, false, 11), "form", [], "any", true, true, false, 11)) {
            // line 12
            echo "        ";
            $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, false, false, 12), "templates", [], "any", false, false, false, 12), "form", [], "any", false, false, false, 12), "SyliusAdminBundle:Crud/Update:_content.html.twig", 12)->display($context);
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([0 => (($context["event_prefix"] ?? null) . ".form"), 1 => "sylius.admin.update.form"], ["metadata" => ($context["metadata"] ?? null), "resource" => ($context["resource"] ?? null), "form" => ($context["form"] ?? null)]);
        echo "

    ";
        // line 19
        $this->loadTemplate("@SyliusUi/Form/Buttons/_update.html.twig", "SyliusAdminBundle:Crud/Update:_content.html.twig", 19)->display(twig_array_merge($context, ["paths" => ["cancel" => ($context["index_url"] ?? null)]]));
        // line 20
        echo "
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 21), 'row');
        echo "
    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Update:_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  80 => 21,  77 => 20,  75 => 19,  70 => 17,  67 => 16,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  50 => 10,  45 => 8,  41 => 6,  39 => 3,  38 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Crud/Update:_content.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/Update/_content.html.twig");
    }
}
