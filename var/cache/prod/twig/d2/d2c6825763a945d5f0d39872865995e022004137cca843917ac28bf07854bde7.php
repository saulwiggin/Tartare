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

/* SyliusShopBundle:Product/Index:_sorting.html.twig */
class __TwigTemplate_e1825a93118884b7d42ee64ff84555ba20b8bc656ca1102c54e762836da2d6c0 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", [], "any", false, false, false, 1), "nbResults", [], "any", false, false, false, 1) > 0)) {
            // line 2
            echo "
";
            // line 3
            $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "attributes", [], "any", false, false, false, 3), "get", [0 => "_route"], "method", false, false, false, 3);
            // line 4
            $context["route_parameters"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 4), "attributes", [], "any", false, false, false, 4), "get", [0 => "_route_params"], "method", false, false, false, 4), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 4), "query", [], "any", false, false, false, 4), "all", [], "any", false, false, false, 4));
            // line 5
            echo "
";
            // line 6
            $context["criteria"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 6), "query", [], "any", false, false, false, 6), "get", [0 => "criteria", 1 => []], "method", false, false, false, 6);
            // line 7
            echo "
";
            // line 8
            $context["default_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["route_parameters"] ?? null), ["sorting" => null, "criteria" => ($context["criteria"] ?? null)]));
            // line 9
            $context["from_a_to_z_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["route_parameters"] ?? null), ["sorting" => ["name" => "asc"], "criteria" => ($context["criteria"] ?? null)]));
            // line 10
            $context["from_z_to_a_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["route_parameters"] ?? null), ["sorting" => ["name" => "desc"], "criteria" => ($context["criteria"] ?? null)]));
            // line 11
            $context["oldest_first_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["route_parameters"] ?? null), ["sorting" => ["createdAt" => "asc"], "criteria" => ($context["criteria"] ?? null)]));
            // line 12
            $context["newest_first_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["route_parameters"] ?? null), ["sorting" => ["createdAt" => "desc"], "criteria" => ($context["criteria"] ?? null)]));
            // line 13
            $context["cheapest_first_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["route_parameters"] ?? null), ["sorting" => ["price" => "asc"], "criteria" => ($context["criteria"] ?? null)]));
            // line 14
            $context["most_expensive_first_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["route_parameters"] ?? null), ["sorting" => ["price" => "desc"], "criteria" => ($context["criteria"] ?? null)]));
            // line 15
            echo "
";
            // line 16
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 16), "query", [], "any", false, false, false, 16), "get", [0 => "sorting"], "method", false, false, false, 16))) {
                // line 17
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.by_position"));
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 18
($context["app"] ?? null), "request", [], "any", false, true, false, 18), "query", [], "any", false, true, false, 18), "get", [0 => "sorting"], "method", false, true, false, 18), "name", [], "any", true, true, false, 18) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 18), "query", [], "any", false, false, false, 18), "get", [0 => "sorting"], "method", false, false, false, 18), "name", [], "any", false, false, false, 18) == "asc"))) {
                // line 19
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_a_to_z"));
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 20
($context["app"] ?? null), "request", [], "any", false, true, false, 20), "query", [], "any", false, true, false, 20), "get", [0 => "sorting"], "method", false, true, false, 20), "name", [], "any", true, true, false, 20) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 20), "query", [], "any", false, false, false, 20), "get", [0 => "sorting"], "method", false, false, false, 20), "name", [], "any", false, false, false, 20) == "desc"))) {
                // line 21
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_z_to_a"));
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 22
($context["app"] ?? null), "request", [], "any", false, true, false, 22), "query", [], "any", false, true, false, 22), "get", [0 => "sorting"], "method", false, true, false, 22), "createdAt", [], "any", true, true, false, 22) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 22), "query", [], "any", false, false, false, 22), "get", [0 => "sorting"], "method", false, false, false, 22), "createdAt", [], "any", false, false, false, 22) == "desc"))) {
                // line 23
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.newest_first"));
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 24
($context["app"] ?? null), "request", [], "any", false, true, false, 24), "query", [], "any", false, true, false, 24), "get", [0 => "sorting"], "method", false, true, false, 24), "createdAt", [], "any", true, true, false, 24) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 24), "query", [], "any", false, false, false, 24), "get", [0 => "sorting"], "method", false, false, false, 24), "createdAt", [], "any", false, false, false, 24) == "asc"))) {
                // line 25
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.oldest_first"));
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 26
($context["app"] ?? null), "request", [], "any", false, true, false, 26), "query", [], "any", false, true, false, 26), "get", [0 => "sorting"], "method", false, true, false, 26), "price", [], "any", true, true, false, 26) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 26), "query", [], "any", false, false, false, 26), "get", [0 => "sorting"], "method", false, false, false, 26), "price", [], "any", false, false, false, 26) == "asc"))) {
                // line 27
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cheapest_first"));
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 28
($context["app"] ?? null), "request", [], "any", false, true, false, 28), "query", [], "any", false, true, false, 28), "get", [0 => "sorting"], "method", false, true, false, 28), "price", [], "any", true, true, false, 28) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 28), "query", [], "any", false, false, false, 28), "get", [0 => "sorting"], "method", false, false, false, 28), "price", [], "any", false, false, false, 28) == "desc"))) {
                // line 29
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.most_expensive_first"));
            }
            // line 31
            echo "
<div class=\"ui right floated small header\">
    <div class=\"content\">
        ";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.sort"), "html", null, true);
            echo "
        <div class=\"ui inline dropdown\">
            <div class=\"text\">";
            // line 36
            echo twig_escape_filter($this->env, ($context["current_sorting_label"] ?? null), "html", null, true);
            echo "</div>
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
                <a class=\"item\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["default_path"] ?? null), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.by_position")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.by_position"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["from_a_to_z_path"] ?? null), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_a_to_z")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_a_to_z"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, ($context["from_z_to_a_path"] ?? null), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_z_to_a")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.from_z_to_a"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["newest_first_path"] ?? null), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.newest_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.newest_first"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, ($context["oldest_first_path"] ?? null), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.oldest_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.oldest_first"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["cheapest_first_path"] ?? null), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cheapest_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cheapest_first"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, ($context["most_expensive_first_path"] ?? null), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.most_expensive_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.most_expensive_first"), "html", null, true);
            echo "</a>
            </div>
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Index:_sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 45,  163 => 44,  155 => 43,  147 => 42,  139 => 41,  131 => 40,  123 => 39,  117 => 36,  112 => 34,  107 => 31,  103 => 29,  101 => 28,  98 => 27,  96 => 26,  93 => 25,  91 => 24,  88 => 23,  86 => 22,  83 => 21,  81 => 20,  78 => 19,  76 => 18,  73 => 17,  71 => 16,  68 => 15,  66 => 14,  64 => 13,  62 => 12,  60 => 11,  58 => 10,  56 => 9,  54 => 8,  51 => 7,  49 => 6,  46 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Product/Index:_sorting.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Index/_sorting.html.twig");
    }
}
