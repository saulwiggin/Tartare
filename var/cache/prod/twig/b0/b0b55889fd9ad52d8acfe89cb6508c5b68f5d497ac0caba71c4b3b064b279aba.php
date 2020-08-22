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

/* SyliusAdminBundle:PromotionCoupon/Index:_breadcrumb.html.twig */
class __TwigTemplate_9a01e06dc3e5f835e70e38e2a08b292b20ce0bbfed26b4bd09a9b06606a63520 extends \Twig\Template
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
        $macros["breadcrumb"] = $this->macros["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:PromotionCoupon/Index:_breadcrumb.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = [0 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.administration"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard")], 1 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.promotions"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_promotion_index")], 2 => ["label" => ((twig_get_attribute($this->env, $this->source,         // line 6
($context["promotion"] ?? null), "name", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "code", [], "any", false, false, false, 6))) : (twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "code", [], "any", false, false, false, 6))), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_promotion_update", ["id" => twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 6)])], 3 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.coupons")]];
        // line 10
        echo "
";
        // line 11
        echo twig_call_macro($macros["breadcrumb"], "macro_crumble", [($context["breadcrumbs"] ?? null)], 11, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon/Index:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  45 => 10,  43 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:PromotionCoupon/Index:_breadcrumb.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PromotionCoupon/Index/_breadcrumb.html.twig");
    }
}
