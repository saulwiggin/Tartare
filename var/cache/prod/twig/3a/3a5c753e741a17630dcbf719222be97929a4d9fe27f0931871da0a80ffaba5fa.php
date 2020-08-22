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

/* @SyliusAdmin/ProductVariant/Generate/_breadcrumb.html.twig */
class __TwigTemplate_891c65bdb865ec65dca4984d2a53ca76edd7cc6043ad5db187cf7cc604fb96e9 extends \Twig\Template
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
        $macros["breadcrumb"] = $this->macros["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "@SyliusAdmin/ProductVariant/Generate/_breadcrumb.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = [0 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.administration"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard")], 1 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.products"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_index")], 2 => ["label" => ((twig_get_attribute($this->env, $this->source,         // line 6
($context["product"] ?? null), "name", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "code", [], "any", false, false, false, 6))) : (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "code", [], "any", false, false, false, 6))), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_update", ["id" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 6)])], 3 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.variants"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_variant_index", ["productId" => twig_get_attribute($this->env, $this->source,         // line 7
($context["product"] ?? null), "id", [], "any", false, false, false, 7)])], 4 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.generate")]];
        // line 11
        echo "
";
        // line 12
        echo twig_call_macro($macros["breadcrumb"], "macro_crumble", [($context["breadcrumbs"] ?? null)], 12, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/ProductVariant/Generate/_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  46 => 11,  44 => 7,  43 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/ProductVariant/Generate/_breadcrumb.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Generate/_breadcrumb.html.twig");
    }
}
