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

/* @SyliusUi/DataCollector/templateBlock.html.twig */
class __TwigTemplate_091d5e53b26960dc36970b9e5624b42dbf4cc4e7c6ccc08856eec1d3bdf4a8a7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@SyliusUi/DataCollector/templateBlock.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"sf-toolbar-block\">
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => ($context["token"] ?? null), "panel" => ($context["name"] ?? null)]), "html", null, true);
        echo "\">
            <div class=\"sf-toolbar-icon\">
                ";
        // line 7
        echo twig_include($this->env, $context, "@SyliusUi/DataCollector/icon.svg");
        echo "
                <span class=\"sf-toolbar-value\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "numberOfRenderedEvents", [], "any", false, false, false, 8), "html", null, true);
        echo "</span>
            </div>
        </a>

        <div class=\"sf-toolbar-info\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Rendered events</b>
                <span class=\"sf-toolbar-status\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "numberOfRenderedEvents", [], "any", false, false, false, 15), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Rendered blocks</b>
                <span class=\"sf-toolbar-status\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "numberOfRenderedBlocks", [], "any", false, false, false, 19), "html", null, true);
        echo "</span>
            </div>
        </div>
    </div>
";
    }

    // line 25
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <span class=\"label\">
        <span class=\"icon\">
            ";
        // line 28
        echo twig_include($this->env, $context, "@SyliusUi/DataCollector/icon.svg");
        echo "
        </span>
        <strong>Template events</strong>
        <span class=\"count\">
            <span>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "numberOfRenderedEvents", [], "any", false, false, false, 32), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 37
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    <h2>Template events metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 42
        echo twig_escape_filter($this->env, sprintf("%.0f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totalDuration", [], "any", false, false, false, 42) * 1000)), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 47
        echo twig_escape_filter($this->env, sprintf("%.0f", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "numberOfRenderedEvents", [], "any", false, false, false, 47)), "html", null, true);
        echo "</span>
            <span class=\"label\">Rendered events</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 52
        echo twig_escape_filter($this->env, sprintf("%.0f", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "numberOfRenderedBlocks", [], "any", false, false, false, 52)), "html", null, true);
        echo "</span>
            <span class=\"label\">Rendered blocks</span>
        </div>
    </div>

    <h2>Rendered template events</h2>

    ";
        // line 59
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "renderedEvents", [], "any", false, false, false, 59)) > 0)) {
            // line 60
            echo "        <table>
            <tr>
                <th>Event</th>
                <th>Duration</th>
                <th>Blocks</th>
            </tr>

            ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "renderedEvents", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 68
                echo "                <tr>
                    <td>
                        ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["event"], "names", [], "any", false, false, false, 70));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                    // line 71
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 71)) {
                        echo "<strong>";
                    }
                    // line 72
                    echo "                            ";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 72)) {
                        echo ", ";
                    }
                    // line 73
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 73)) {
                        echo "</strong>";
                    }
                    // line 74
                    echo "                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "                    </td>
                    <td>";
                // line 76
                echo twig_escape_filter($this->env, sprintf("%.0f", (twig_get_attribute($this->env, $this->source, $context["event"], "time", [], "any", false, false, false, 76) * 1000)), "html", null, true);
                echo "ms</td>
                    <td>
                        ";
                // line 78
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "blocks", [], "any", false, false, false, 78)) > 0)) {
                    // line 79
                    echo "                            <table>
                                <tr>
                                    ";
                    // line 81
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "names", [], "any", false, false, false, 81)) > 1)) {
                        echo "<th>Origin event</th>";
                    }
                    // line 82
                    echo "                                    <th>Name</th>
                                    <th>Template</th>
                                    <th>Duration</th>
                                    <th>Priority</th>
                                </tr>
                                ";
                    // line 87
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["event"], "blocks", [], "any", false, false, false, 87));
                    foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                        // line 88
                        echo "                                    <tr>
                                        ";
                        // line 89
                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "names", [], "any", false, false, false, 89)) > 1)) {
                            echo "<td>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "definition", [], "any", false, false, false, 89), "eventName", [], "any", false, false, false, 89), "html", null, true);
                            echo "</td>";
                        }
                        // line 90
                        echo "                                        <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "definition", [], "any", false, false, false, 90), "name", [], "any", false, false, false, 90), "html", null, true);
                        echo "</td>
                                        <td>";
                        // line 91
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "definition", [], "any", false, false, false, 91), "template", [], "any", false, false, false, 91), "html", null, true);
                        echo "</td>
                                        <td>";
                        // line 92
                        echo twig_escape_filter($this->env, sprintf("%.0f", (twig_get_attribute($this->env, $this->source, $context["block"], "time", [], "any", false, false, false, 92) * 1000)), "html", null, true);
                        echo "ms</td>
                                        <td>";
                        // line 93
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "definition", [], "any", false, false, false, 93), "priority", [], "any", false, false, false, 93), "html", null, true);
                        echo "</td>
                                    </tr>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    echo "                            </table>
                        ";
                } else {
                    // line 98
                    echo "                            <i>no blocks rendered</i>
                        ";
                }
                // line 100
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "        </table>
    ";
        } else {
            // line 105
            echo "        <div class=\"empty\">
            No template events have been rendered.
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/DataCollector/templateBlock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 105,  291 => 103,  283 => 100,  279 => 98,  275 => 96,  266 => 93,  262 => 92,  258 => 91,  253 => 90,  247 => 89,  244 => 88,  240 => 87,  233 => 82,  229 => 81,  225 => 79,  223 => 78,  218 => 76,  215 => 75,  201 => 74,  196 => 73,  190 => 72,  185 => 71,  168 => 70,  164 => 68,  160 => 67,  151 => 60,  149 => 59,  139 => 52,  131 => 47,  123 => 42,  117 => 38,  113 => 37,  105 => 32,  98 => 28,  94 => 26,  90 => 25,  81 => 19,  74 => 15,  64 => 8,  60 => 7,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusUi/DataCollector/templateBlock.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/DataCollector/templateBlock.html.twig");
    }
}
