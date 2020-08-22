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

/* @SyliusUi/Grid/_default.html.twig */
class __TwigTemplate_c8a54d55d8f88675b8d3ed68a3c8b0d41f79308fb7936bb4e6f610a094ff0120 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/_default.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/_default.html.twig"));

        // line 1
        $macros["pagination"] = $this->macros["pagination"] = $this->loadTemplate("@SyliusUi/Macro/pagination.html.twig", "@SyliusUi/Grid/_default.html.twig", 1)->unwrap();
        // line 2
        $macros["buttons"] = $this->macros["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusUi/Grid/_default.html.twig", 2)->unwrap();
        // line 3
        $macros["messages"] = $this->macros["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusUi/Grid/_default.html.twig", 3)->unwrap();
        // line 4
        $macros["table"] = $this->macros["table"] = $this->loadTemplate("@SyliusUi/Macro/table.html.twig", "@SyliusUi/Grid/_default.html.twig", 4)->unwrap();
        // line 5
        echo "
";
        // line 6
        $context["definition"] = twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 6, $this->source); })()), "definition", [], "any", false, false, false, 6);
        // line 7
        $context["data"] = twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 7, $this->source); })()), "data", [], "any", false, false, false, 7);
        // line 8
        echo "
";
        // line 9
        $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "attributes", [], "any", false, false, false, 9), "get", [0 => "_route"], "method", false, false, false, 9), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "attributes", [], "any", false, false, false, 9), "get", [0 => "_route_params"], "method", false, false, false, 9));
        // line 10
        $context["criteria"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "query", [], "any", false, false, false, 10), "get", [0 => "criteria"], "method", false, false, false, 10);
        // line 11
        echo "
";
        // line 12
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 12, $this->source); })()), "enabledFilters", [], "any", false, false, false, 12)) > 0)) {
            // line 13
            echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui styled fluid accordion\">
        <div class=\"title ";
            // line 15
            if ( !(null === (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 15, $this->source); })()))) {
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
            if ( !(null === (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 19, $this->source); })()))) {
                echo "active";
            }
            echo "\">
            <form method=\"get\" action=\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\" class=\"ui loadable form\" novalidate>
                <div class=\"sylius-filters\">
                    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_array_filter(twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 22, $this->source); })()), "enabledFilters", [], "any", false, false, false, 22), function ($__filter__) use ($context, $macros) { $context["filter"] = $__filter__; return twig_get_attribute($this->env, $this->source, $context["filter"], "enabled", [], "any", false, false, false, 22); }), "position"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 23
                echo "                        <div class=\"sylius-filters__field\">
                            ";
                // line 24
                echo call_user_func_array($this->env->getFunction('sylius_grid_render_filter')->getCallable(), [(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 24, $this->source); })()), $context["filter"]]);
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
            echo twig_call_macro($macros["buttons"], "macro_resetFilters", [(isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 29, $this->source); })())], 29, $context, $this->getSourceContext());
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
        if ((((twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })())) > 0) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 38), "bulk", [], "any", true, true, false, 38)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 38, $this->source); })()), "getEnabledActions", [0 => "bulk"], "method", false, false, false, 38)) > 0))) {
            // line 39
            echo "            <div class=\"sylius-grid-nav__bulk\">
                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 40, $this->source); })()), "getEnabledActions", [0 => "bulk"], "method", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 41
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sylius_grid_render_bulk_action')->getCallable(), [(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 41, $this->source); })()), $context["action"], null]);
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
        echo twig_call_macro($macros["pagination"], "macro_simple", [(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 46, $this->source); })())], 46, $context, $this->getSourceContext());
        echo "
        </div>
        ";
        // line 48
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 48, $this->source); })()), "limits", [], "any", false, false, false, 48)) > 1) && (twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })())) > min(twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 48, $this->source); })()), "limits", [], "any", false, false, false, 48))))) {
            // line 49
            echo "            <div class=\"sylius-grid-nav__perpage\">
                <div class=\"ui fluid one menu sylius-paginate\">
                    ";
            // line 51
            echo twig_call_macro($macros["pagination"], "macro_perPage", [(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 51, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 51, $this->source); })()), "limits", [], "any", false, false, false, 51)], 51, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
        ";
        }
        // line 55
        echo "    </div>

    ";
        // line 57
        if ((twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 57, $this->source); })())) > 0)) {
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
            echo twig_call_macro($macros["table"], "macro_headers", [(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 62, $this->source); })()), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 62, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "request", [], "any", false, false, false, 62), "attributes", [], "any", false, false, false, 62)], 62, $context, $this->getSourceContext());
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
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 66, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 67
                echo "                    ";
                echo twig_call_macro($macros["table"], "macro_row", [(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 67, $this->source); })()), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new RuntimeError('Variable "definition" does not exist.', 67, $this->source); })()), $context["row"]], 67, $context, $this->getSourceContext());
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
        echo twig_call_macro($macros["pagination"], "macro_simple", [(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 75, $this->source); })())], 75, $context, $this->getSourceContext());
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 75,  221 => 73,  215 => 69,  206 => 67,  202 => 66,  198 => 65,  192 => 62,  186 => 59,  183 => 58,  181 => 57,  177 => 55,  170 => 51,  166 => 49,  164 => 48,  159 => 46,  156 => 45,  152 => 43,  143 => 41,  139 => 40,  136 => 39,  134 => 38,  128 => 34,  120 => 29,  116 => 28,  113 => 27,  104 => 24,  101 => 23,  97 => 22,  92 => 20,  86 => 19,  81 => 17,  74 => 15,  70 => 13,  68 => 12,  65 => 11,  63 => 10,  61 => 9,  58 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@SyliusUi/Macro/pagination.html.twig' as pagination %}
{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}
{% import '@SyliusUi/Macro/messages.html.twig' as messages %}
{% import '@SyliusUi/Macro/table.html.twig' as table %}

{% set definition = grid.definition %}
{% set data = grid.data %}

{% set path = path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')) %}
{% set criteria = app.request.query.get('criteria') %}

{% if definition.enabledFilters|length > 0 %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui styled fluid accordion\">
        <div class=\"title {% if criteria is not null %}active{% endif %}\">
            <i class=\"dropdown icon\"></i>
            {{ 'sylius.ui.filters'|trans }}
        </div>
        <div class=\"content {% if criteria is not null %}active{% endif %}\">
            <form method=\"get\" action=\"{{ path }}\" class=\"ui loadable form\" novalidate>
                <div class=\"sylius-filters\">
                    {% for filter in definition.enabledFilters|filter(filter => filter.enabled)|sort_by('position') %}
                        <div class=\"sylius-filters__field\">
                            {{ sylius_grid_render_filter(grid, filter) }}
                        </div>
                    {% endfor %}
                </div>
                {{ buttons.filter() }}
                {{ buttons.resetFilters(path) }}
            </form>
        </div>
    </div>
{% endif %}

<div class=\"ui hidden divider\"></div>
<div class=\"sylius-grid-wrapper\">
    <div class=\"sylius-grid-nav\">
        {% if data|length > 0 and definition.actionGroups.bulk is defined and definition.getEnabledActions('bulk')|length > 0 %}
            <div class=\"sylius-grid-nav__bulk\">
                {% for action in definition.getEnabledActions('bulk') %}
                    {{ sylius_grid_render_bulk_action(grid, action, null) }}
                {% endfor %}
            </div>
        {% endif %}
        <div class=\"sylius-grid-nav__pagination\">
            {{ pagination.simple(data) }}
        </div>
        {% if definition.limits|length > 1 and data|length > min(definition.limits) %}
            <div class=\"sylius-grid-nav__perpage\">
                <div class=\"ui fluid one menu sylius-paginate\">
                    {{ pagination.perPage(data, definition.limits) }}
                </div>
            </div>
        {% endif %}
    </div>

    {% if data|length > 0 %}
        <div class=\"ui segment spaceless sylius-grid-table-wrapper\">
            <table class=\"ui sortable stackable very basic celled table\" {{ sylius_test_html_attribute('grid-table') }}>
                <thead>
                <tr>
                    {{ table.headers(grid, definition, app.request.attributes) }}
                </tr>
                </thead>
                <tbody {{ sylius_test_html_attribute('grid-table-body') }}>
                {% for row in data %}
                    {{ table.row(grid, definition, row) }}
                {% endfor %}
                </tbody>
            </table>
        </div>
    {% else %}
        {{ messages.info('sylius.ui.no_results_to_display') }}
    {% endif %}
    {{ pagination.simple(data) }}
</div>
", "@SyliusUi/Grid/_default.html.twig", "/Users/drsilaswiggin/dev/e-commerce/demo/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/_default.html.twig");
    }
}
