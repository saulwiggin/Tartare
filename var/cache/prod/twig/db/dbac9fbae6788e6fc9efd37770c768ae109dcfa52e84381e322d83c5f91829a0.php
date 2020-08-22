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

/* @SyliusAdmin/Crud/Update/_breadcrumb.html.twig */
class __TwigTemplate_b603389a8c87b29d12ecb2d5ae39cc8c75927f9cc126dcfc2170d62b4b55b645 extends \Twig\Template
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
        $macros["breadcrumb"] = $this->macros["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "@SyliusAdmin/Crud/Update/_breadcrumb.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["index_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
($context["configuration"] ?? null), "vars", [], "any", false, true, false, 4), "index", [], "any", false, true, false, 4), "route", [], "any", false, true, false, 4), "name", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 4), "index", [], "any", false, true, false, 4), "route", [], "any", false, true, false, 4), "name", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "getRouteName", [0 => "index"], "method", false, false, false, 4))) : (twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "getRouteName", [0 => "index"], "method", false, false, false, 4))), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
($context["configuration"] ?? null), "vars", [], "any", false, true, false, 5), "index", [], "any", false, true, false, 5), "route", [], "any", false, true, false, 5), "parameters", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 5), "index", [], "any", false, true, false, 5), "route", [], "any", false, true, false, 5), "parameters", [], "any", false, false, false, 5), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 5), "route", [], "any", false, true, false, 5), "parameters", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 5), "route", [], "any", false, true, false, 5), "parameters", [], "any", false, false, false, 5), [])) : ([])))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 5), "route", [], "any", false, true, false, 5), "parameters", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 5), "route", [], "any", false, true, false, 5), "parameters", [], "any", false, false, false, 5), [])) : ([])))));
        // line 8
        echo "
";
        // line 9
        $context["breadcrumbs"] = [0 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.administration"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard")], 1 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source,         // line 11
($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 11) . ".ui.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "pluralName", [], "any", false, false, false, 11))), "url" => ($context["index_url"] ?? null)], 2 => ["label" => ((twig_get_attribute($this->env, $this->source,         // line 12
($context["resource"] ?? null), "name", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "name", [], "any", false, false, false, 12), ((twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "code", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "code", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "id", [], "any", false, false, false, 12))) : (twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "id", [], "any", false, false, false, 12))))) : (((twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "code", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "code", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "id", [], "any", false, false, false, 12))) : (twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "id", [], "any", false, false, false, 12)))))], 3 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit")]];
        // line 16
        echo "
";
        // line 17
        echo twig_call_macro($macros["breadcrumb"], "macro_crumble", [($context["breadcrumbs"] ?? null)], 17, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/Update/_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  53 => 16,  51 => 12,  50 => 11,  49 => 9,  46 => 8,  44 => 5,  43 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Crud/Update/_breadcrumb.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/Update/_breadcrumb.html.twig");
    }
}
