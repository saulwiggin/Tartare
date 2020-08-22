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

/* @SyliusTheme/Collector/theme.html.twig */
class __TwigTemplate_501eda17e9e1ffb2f2892f48bba6cac8072dfa2f2062477bd20d25dea811b0de extends \Twig\Template
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
        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@SyliusTheme/Collector/theme.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "themes", [], "any", false, false, false, 6))) {
            // line 7
            echo "        ";
            ob_start(function () { return ''; });
            // line 8
            echo "            ";
            echo twig_include($this->env, $context, "@SyliusTheme/Collector/Icon/theme.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 9
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "usedTheme", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "usedTheme", [], "any", false, false, false, 9), twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "themes", [], "any", false, false, false, 9)))) : (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "themes", [], "any", false, false, false, 9)))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            ob_start(function () { return ''; });
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>All themes</b>
                <span class=\"sf-toolbar-status\">";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "themes", [], "any", false, false, false, 15)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Used themes</b>
                <span class=\"sf-toolbar-status\">";
            // line 20
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "usedThemes", [], "any", false, false, false, 20)), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            echo "
        ";
            // line 24
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig");
            echo "
    ";
        }
    }

    // line 28
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <span class=\"label ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "usedThemes", [], "any", false, false, false, 29))) {
            echo "disabled";
        }
        echo "\">
        <span class=\"icon\">";
        // line 30
        echo twig_include($this->env, $context, "@SyliusTheme/Collector/Icon/theme.svg");
        echo "</span>
        <strong>Themes</strong>
        <span class=\"count\">
            <span>";
        // line 33
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "usedThemes", [], "any", false, false, false, 33)), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 38
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    <h2>Theme Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 43
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "usedThemes", [], "any", false, false, false, 43)), "html", null, true);
        echo "</span>
            <span class=\"label\">Used themes</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 48
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "themes", [], "any", false, false, false, 48)), "html", null, true);
        echo "</span>
            <span class=\"label\">All themes</span>
        </div>
    </div>

    <h2>Themes List</h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Used <span class=\"badge\">";
        // line 57
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "usedThemes", [], "any", false, false, false, 57)), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These are themes used.
                </p>

                ";
        // line 64
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "usedThemes", [], "any", false, false, false, 64))) {
            // line 65
            echo "                    <div class=\"empty\">
                        <p>No themes were used.</p>
                    </div>
                ";
        } else {
            // line 69
            echo "                    ";
            echo twig_call_macro($macros["helper"], "macro_render_table", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "usedThemes", [], "any", false, false, false, 69)], 69, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 71
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">All <span class=\"badge\">";
        // line 75
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "themes", [], "any", false, false, false, 75)), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These are themes found.
                </p>

                ";
        // line 82
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "themes", [], "any", false, false, false, 82))) {
            // line 83
            echo "                    <div class=\"empty\">
                        <p>No themes were found.</p>
                    </div>
                ";
        } else {
            // line 87
            echo "                    ";
            echo twig_call_macro($macros["helper"], "macro_render_table", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "themes", [], "any", false, false, false, 87)], 87, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 89
        echo "            </div>
        </div>
    </div>
";
    }

    // line 94
    public function macro_render_table($__themes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "themes" => $__themes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 95
            echo "    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Path</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 105
                echo "            <tr>
                <td class=\"font-normal text-small text-bold\">";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, false, 106), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small\">";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "path", [], "any", false, false, false, 107), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small\">";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "description", [], "any", false, false, false, 108), "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "        </tbody>
    </table>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusTheme/Collector/theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 111,  259 => 108,  255 => 107,  251 => 106,  248 => 105,  244 => 104,  233 => 95,  220 => 94,  213 => 89,  207 => 87,  201 => 83,  199 => 82,  189 => 75,  183 => 71,  177 => 69,  171 => 65,  169 => 64,  159 => 57,  147 => 48,  139 => 43,  133 => 39,  129 => 38,  121 => 33,  115 => 30,  108 => 29,  104 => 28,  97 => 24,  94 => 23,  88 => 20,  80 => 15,  76 => 13,  74 => 12,  71 => 11,  66 => 9,  61 => 8,  58 => 7,  55 => 6,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusTheme/Collector/theme.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/theme-bundle/src/Resources/views/Collector/theme.html.twig");
    }
}
