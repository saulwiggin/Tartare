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

/* @SyliusUi/Macro/table.html.twig */
class __TwigTemplate_414f61e4ac2a440b3542df6bf63cede04618e94077b459fa9e783a7ca8668fed extends \Twig\Template
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
        // line 23
        echo "
";
    }

    // line 1
    public function macro_headers($__grid__ = null, $__definition__ = null, $__requestAttributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "grid" => $__grid__,
            "definition" => $__definition__,
            "requestAttributes" => $__requestAttributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    ";
            $macros["sorting"] = $this->loadTemplate("@SyliusUi/Macro/sorting.html.twig", "@SyliusUi/Macro/table.html.twig", 2)->unwrap();
            // line 3
            echo "
    ";
            // line 4
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 4), "bulk", [], "any", true, true, false, 4) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "getEnabledActions", [0 => "bulk"], "method", false, false, false, 4)) > 0))) {
                // line 5
                echo "        <th class=\"center aligned\">
            <input data-js-bulk-checkboxes=\".bulk-select-checkbox\" data-js-bulk-buttons=\".sylius-grid-nav__bulk\" type=\"checkbox\">
        </th>
    ";
            }
            // line 9
            echo "
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "fields", [], "any", false, false, false, 10), "position"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 11
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["field"], "enabled", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 12)) {
                        // line 13
                        echo "                ";
                        echo twig_call_macro($macros["sorting"], "macro_tableHeader", [($context["grid"] ?? null), $context["field"], ($context["requestAttributes"] ?? null)], 13, $context, $this->getSourceContext());
                        echo "
            ";
                    } else {
                        // line 15
                        echo "                <th class=\"sylius-table-column-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 15), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 15)), "html", null, true);
                        echo "</th>
            ";
                    }
                    // line 17
                    echo "        ";
                }
                // line 18
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 19), "item", [], "any", true, true, false, 19) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "getEnabledActions", [0 => "item"], "method", false, false, false, 19)) > 0))) {
                // line 20
                echo "        <th class=\"sylius-table-column-actions\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.actions"), "html", null, true);
                echo "</th>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 24
    public function macro_row($__grid__ = null, $__definition__ = null, $__row__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "grid" => $__grid__,
            "definition" => $__definition__,
            "row" => $__row__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 25
            echo "    <tr class=\"item\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["row"]);
            echo ">
    ";
            // line 26
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 26), "bulk", [], "any", true, true, false, 26) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "getEnabledActions", [0 => "bulk"], "method", false, false, false, 26)) > 0))) {
                // line 27
                echo "        <td class=\"center aligned\"><input class=\"bulk-select-checkbox\" form=\"bulk-delete\" type=\"checkbox\" name=\"ids[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "id", [], "any", false, false, false, 27), "html", null, true);
                echo "\" /></td>
    ";
            }
            // line 29
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "enabledFields", [], "any", false, false, false, 29), "position"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 30
                echo "        <td>";
                echo call_user_func_array($this->env->getFunction('sylius_grid_render_field')->getCallable(), [($context["grid"] ?? null), $context["field"], ($context["row"] ?? null)]);
                echo "</td>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 32), "item", [], "any", true, true, false, 32) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "getEnabledActions", [0 => "item"], "method", false, false, false, 32)) > 0))) {
                // line 33
                echo "        <td ";
                echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["actions"]);
                echo ">
            <div class=\"ui buttons\">
                ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "getEnabledActions", [0 => "item"], "method", false, false, false, 35), "position"));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 36
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sylius_grid_render_action')->getCallable(), [($context["grid"] ?? null), $context["action"], ($context["row"] ?? null)]);
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "            </div>
            ";
                // line 39
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", [], "any", false, true, false, 39), "subitem", [], "any", true, true, false, 39) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "getEnabledActions", [0 => "subitem"], "method", false, false, false, 39)) > 0))) {
                    // line 40
                    echo "            <div class=\"ui divider\"></div>
            <div class=\"ui buttons\">
                ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "getEnabledActions", [0 => "subitem"], "method", false, false, false, 42), "position"));
                    foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                        // line 43
                        echo "                    ";
                        echo call_user_func_array($this->env->getFunction('sylius_grid_render_action')->getCallable(), [($context["grid"] ?? null), $context["action"], ($context["row"] ?? null)]);
                        echo "
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "            </div>
            ";
                }
                // line 47
                echo "        </td>
    ";
            }
            // line 49
            echo "    </tr>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 49,  213 => 47,  209 => 45,  200 => 43,  196 => 42,  192 => 40,  190 => 39,  187 => 38,  178 => 36,  174 => 35,  168 => 33,  165 => 32,  156 => 30,  151 => 29,  145 => 27,  143 => 26,  138 => 25,  123 => 24,  110 => 20,  107 => 19,  101 => 18,  98 => 17,  90 => 15,  84 => 13,  81 => 12,  78 => 11,  74 => 10,  71 => 9,  65 => 5,  63 => 4,  60 => 3,  57 => 2,  42 => 1,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusUi/Macro/table.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/table.html.twig");
    }
}
