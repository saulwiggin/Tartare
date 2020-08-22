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

/* SyliusUiBundle:Grid:_default.html.twig */
class __TwigTemplate_85e9579b77e555d1e477a91975af3031b8472835c09d46b033e249a1853047e9 extends \Twig\Template
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
        $macros["pagination"] = $this->macros["pagination"] = $this->loadTemplate("@SyliusUi/Macro/pagination.html.twig", "SyliusUiBundle:Grid:_default.html.twig", 1)->unwrap();
        // line 2
        $macros["buttons"] = $this->macros["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusUiBundle:Grid:_default.html.twig", 2)->unwrap();
        // line 3
        $macros["messages"] = $this->macros["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusUiBundle:Grid:_default.html.twig", 3)->unwrap();
        // line 4
        $macros["table"] = $this->macros["table"] = $this->loadTemplate("@SyliusUi/Macro/table.html.twig", "SyliusUiBundle:Grid:_default.html.twig", 4)->unwrap();
        // line 5
        echo "
";
        // line 6
        $context["definition"] = twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "definition", [], "any", false, false, false, 6);
        // line 7
        $context["data"] = twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "data", [], "any", false, false, false, 7);
        // line 8
        echo "
";
        // line 9
        $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 9), "attributes", [], "any", false, false, false, 9), "get", [0 => "_route"], "method", false, false, false, 9), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 9), "attributes", [], "any", false, false, false, 9), "get", [0 => "_route_params"], "method", false, false, false, 9));
        // line 10
        $context["criteria"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "query", [], "any", false, false, false, 10), "get", [0 => "criteria"], "method", false, false, false, 10);
        // line 11
        echo "
";
        // line 12
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "enabledFilters", [], "any", false, false, false, 12)) > 0)) {
            // line 13
            echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui styled fluid accordion\">
        <div class=\"title ";
            // line 15
            if ( !(null === ($context["criteria"] ?? null))) {
                echo "active";
            }
            echo "\">
            <i class=\"dropdown icon\"></i>
            ";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.filters"), "html", null, true);
            echo "
        </div>
        <div class=\"content ";
            // line 19
            if ( !(null === ($context["criteria"] ?? null))) {
                echo "active";
            }
            echo "\">
            <form method=\"get\" action=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "\" class=\"ui loadable form\" novalidate>
                <div class=\"sylius-filters\">
                    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "enabledFilters", [], "any", false, false, false, 22), function ($__filter__) use ($context, $macros) { $context["filter"] = $__filter__; return twig_get_attribute($this->env, $this->source, $context["filter"], "enabled", [], "any", false, false, false, 22); }), "position"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 23
                echo "                        <div class=\"sylius-filters__field\">
                            ";
                // line 24
                echo call_user_func_array($this->env->getFunction('sylius_grid_render_filter')->getCallable(), [($context["grid"] ?? null), $context["filter"]]);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </div>
                ";
            // line 28
            echo twig_call_macro($macros["buttons"], "macro_filter", [], 28, $context, $this->getSourceContext());
            echo "
                ";
            // line 29
            echo twig_call_macro($macros["buttons"], "macro_resetFilters", [($context["path"] ?? null)], 29, $context, $this->getSourceContext());
            echo "
            </form>
        </div>
    </div>
";
        }
        // line 34
        echo "
<div class=\"ui hidden divider\"></div>
<div class=\"sylius-grid-wrapper\">
    <div class=\"sylius-grid-nav\">
        ";
        // line 38
        if ((((twig_length_filter($this->env, ($context["data"] ?? null)) > 0) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 38), "bulk", [], "any", true, true, false, 38)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "getEnabledActions", [0 => "bulk"], "method", false, false, false, 38)) > 0))) {
            // line 39
            echo "            <div class=\"sylius-grid-nav__bulk\">
                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "getEnabledActions", [0 => "bulk"], "method", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 41
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sylius_grid_render_bulk_action')->getCallable(), [($context["grid"] ?? null), $context["action"], null]);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </div>
        ";
        }
        // line 45
        echo "        <div class=\"sylius-grid-nav__pagination\">
            ";
        // line 46
        echo twig_call_macro($macros["pagination"], "macro_simple", [($context["data"] ?? null)], 46, $context, $this->getSourceContext());
        echo "
        </div>
        ";
        // line 48
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "limits", [], "any", false, false, false, 48)) > 1) && (twig_length_filter($this->env, ($context["data"] ?? null)) > min(twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "limits", [], "any", false, false, false, 48))))) {
            // line 49
            echo "            <div class=\"sylius-grid-nav__perpage\">
                <div class=\"ui fluid one menu sylius-paginate\">
                    ";
            // line 51
            echo twig_call_macro($macros["pagination"], "macro_perPage", [($context["data"] ?? null), twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "limits", [], "any", false, false, false, 51)], 51, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
        ";
        }
        // line 55
        echo "    </div>

    ";
        // line 57
        if ((twig_length_filter($this->env, ($context["data"] ?? null)) > 0)) {
            // line 58
            echo "        <div class=\"ui segment spaceless sylius-grid-table-wrapper\">
            <table class=\"ui sortable stackable very basic celled table\" ";
            // line 59
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["grid-table"]);
            echo ">
                <thead>
                <tr>
                    ";
            // line 62
            echo twig_call_macro($macros["table"], "macro_headers", [($context["grid"] ?? null), ($context["definition"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 62), "attributes", [], "any", false, false, false, 62)], 62, $context, $this->getSourceContext());
            echo "
                </tr>
                </thead>
                <tbody ";
            // line 65
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["grid-table-body"]);
            echo ">
                ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 67
                echo "                    ";
                echo twig_call_macro($macros["table"], "macro_row", [($context["grid"] ?? null), ($context["definition"] ?? null), $context["row"]], 67, $context, $this->getSourceContext());
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                </tbody>
            </table>
        </div>
    ";
        } else {
            // line 73
            echo "        ";
            echo twig_call_macro($macros["messages"], "macro_info", ["sylius.ui.no_results_to_display"], 73, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 75
        echo "    ";
        echo twig_call_macro($macros["pagination"], "macro_simple", [($context["data"] ?? null)], 75, $context, $this->getSourceContext());
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid:_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 75,  215 => 73,  209 => 69,  200 => 67,  196 => 66,  192 => 65,  186 => 62,  180 => 59,  177 => 58,  175 => 57,  171 => 55,  164 => 51,  160 => 49,  158 => 48,  153 => 46,  150 => 45,  146 => 43,  137 => 41,  133 => 40,  130 => 39,  128 => 38,  122 => 34,  114 => 29,  110 => 28,  107 => 27,  98 => 24,  95 => 23,  91 => 22,  86 => 20,  80 => 19,  75 => 17,  68 => 15,  64 => 13,  62 => 12,  59 => 11,  57 => 10,  55 => 9,  52 => 8,  50 => 7,  48 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusUiBundle:Grid:_default.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/_default.html.twig");
    }
}
