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

/* @SyliusAdmin/Order/Show/_breadcrumb.html.twig */
class __TwigTemplate_b19525ae9db96c4bd2ba5a53803ff2d5adafdafa42dafe0ce07b3fa0335884cc extends \Twig\Template
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
        $macros["breadcrumb"] = $this->macros["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "@SyliusAdmin/Order/Show/_breadcrumb.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = [0 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.administration"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard")], 1 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.orders"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_index")], 2 => ["label" => ("#" . twig_get_attribute($this->env, $this->source,         // line 6
($context["order"] ?? null), "number", [], "any", false, false, false, 6))]];
        // line 9
        echo "
";
        // line 10
        echo twig_call_macro($macros["breadcrumb"], "macro_crumble", [($context["breadcrumbs"] ?? null)], 10, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Order/Show/_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  45 => 9,  43 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Order/Show/_breadcrumb.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_breadcrumb.html.twig");
    }
}
