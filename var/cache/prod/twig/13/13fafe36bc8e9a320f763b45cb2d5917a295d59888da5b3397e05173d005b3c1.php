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

/* @SyliusUi/Macro/sorting.html.twig */
class __TwigTemplate_ee6eb660af02bb75f962d19ef4ae4864f7f8356cc3946856deb1a0bd765e5d1a extends \Twig\Template
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
        // line 15
        echo "
";
    }

    // line 1
    public function macro_tableHeader($__grid__ = null, $__field__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "grid" => $__grid__,
            "field" => $__field__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    ";
            $macros["__internal_10bb7289e41b032d7e51aea8d28faf079c90d1a73667b4b1811d1205799499af"] = $this;
            // line 3
            echo "    ";
            $context["order"] = twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "getSortingOrder", [0 => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 3)], "method", false, false, false, 3);
            // line 4
            echo "
    ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "isSortedBy", [0 => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 5)], "method", false, false, false, 5)) {
                // line 6
                echo "        <th class=\"sortable sorted ";
                echo (((($context["order"] ?? null) == "desc")) ? ("descending") : ("ascending"));
                echo " sylius-table-column-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
                echo "\">
            <a href=\"";
                // line 7
                echo twig_call_macro($macros["__internal_10bb7289e41b032d7e51aea8d28faf079c90d1a73667b4b1811d1205799499af"], "macro_link", [twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 7), ($context["attributes"] ?? null), (((($context["order"] ?? null) == "desc")) ? ("asc") : ("desc")), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "parameters", [], "any", false, false, false, 7), "all", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 7)), "html", null, true);
                echo "</a>
        </th>
    ";
            } else {
                // line 10
                echo "        <th class=\"sortable sylius-table-column-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true);
                echo "\">
            <a href=\"";
                // line 11
                echo twig_call_macro($macros["__internal_10bb7289e41b032d7e51aea8d28faf079c90d1a73667b4b1811d1205799499af"], "macro_link", [twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 11), ($context["attributes"] ?? null), ($context["order"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "parameters", [], "any", false, false, false, 11), "all", [], "any", false, false, false, 11)], 11, $context, $this->getSourceContext());
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 11)), "html", null, true);
                echo "<i class=\"sort icon\"></i></a>
        </th>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 16
    public function macro_link($__fieldName__ = null, $__attributes__ = null, $__order__ = null, $__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fieldName" => $__fieldName__,
            "attributes" => $__attributes__,
            "order" => $__order__,
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 17
            echo "    ";
            $context["params"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "get", [0 => "_route_params"], "method", false, false, false, 17), ($context["parameters"] ?? null));
            // line 18
            echo "    ";
            $context["sorting"] = ["sorting" => [($context["fieldName"] ?? null) => ($context["order"] ?? null)]];
            // line 19
            echo "
    ";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "get", [0 => "_route"], "method", false, false, false, 20), twig_array_merge(twig_array_merge(($context["params"] ?? null), ($context["sorting"] ?? null)), ["page" => 1])), "html", null, true);
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 20,  125 => 19,  122 => 18,  119 => 17,  103 => 16,  88 => 11,  83 => 10,  75 => 7,  68 => 6,  66 => 5,  63 => 4,  60 => 3,  57 => 2,  42 => 1,  37 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusUi/Macro/sorting.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/sorting.html.twig");
    }
}
