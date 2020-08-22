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

/* SyliusUiBundle:Menu:top.html.twig */
class __TwigTemplate_fa2cd0796603c66436db073bb7ea9faaff6fe1b4cd1b9f32af8c9bdd57520539 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'root' => [$this, 'block_root'],
            'items' => [$this, 'block_items'],
            'item' => [$this, 'block_item'],
            'link' => [$this, 'block_link'],
            'links' => [$this, 'block_links'],
            'transition' => [$this, 'block_transition'],
            'icon' => [$this, 'block_icon'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["buttons"] = $this->macros["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusUiBundle:Menu:top.html.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SyliusUiBundle:Menu:top.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_root($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $context["id"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "column_id"], "method", false, false, false, 6);
        // line 7
        echo "
    <div class=\"six wide right aligned column\"";
        // line 8
        if (($context["id"] ?? null)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
        ";
        // line 9
        $this->displayBlock("items", $context, $blocks);
        echo "
    </div>
";
    }

    // line 13
    public function block_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"ui buttons\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 15));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "            ";
            $this->displayBlock("item", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
";
    }

    // line 21
    public function block_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    ";
        if (("edit" == twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "type"], "method", false, false, false, 22))) {
            // line 23
            echo "        ";
            echo twig_call_macro($macros["buttons"], "macro_edit", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 23)], 23, $context, $this->getSourceContext());
            echo "
    ";
        } elseif (("show" == twig_get_attribute($this->env, $this->source,         // line 24
($context["item"] ?? null), "attribute", [0 => "type"], "method", false, false, false, 24))) {
            // line 25
            echo "        ";
            echo twig_call_macro($macros["buttons"], "macro_show", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 25)], 25, $context, $this->getSourceContext());
            echo "
    ";
        } elseif (("delete" == twig_get_attribute($this->env, $this->source,         // line 26
($context["item"] ?? null), "attribute", [0 => "type"], "method", false, false, false, 26))) {
            // line 27
            echo "        ";
            echo twig_call_macro($macros["buttons"], "macro_delete", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", [], "any", false, false, false, 27), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 27)), true, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "resource_id"], "method", false, false, false, 27)], 27, $context, $this->getSourceContext());
            echo "
    ";
        } elseif (("transition" == twig_get_attribute($this->env, $this->source,         // line 28
($context["item"] ?? null), "attribute", [0 => "type"], "method", false, false, false, 28))) {
            // line 29
            echo "        ";
            $this->displayBlock("transition", $context, $blocks);
            echo "
    ";
        } elseif (("links" == twig_get_attribute($this->env, $this->source,         // line 30
($context["item"] ?? null), "attribute", [0 => "type"], "method", false, false, false, 30))) {
            // line 31
            echo "        ";
            $this->displayBlock("links", $context, $blocks);
            echo "
    ";
        } else {
            // line 33
            echo "        ";
            $this->displayBlock("link", $context, $blocks);
            echo "
    ";
        }
    }

    // line 37
    public function block_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    ";
        $context["color"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", [0 => "color"], "method", false, false, false, 38);
        // line 39
        echo "
    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", [], "any", false, false, false, 40), "html", null, true);
        echo "\" class=\"ui ";
        if (($context["color"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo " ";
        }
        echo "labeled icon button\">
        ";
        // line 41
        $this->displayBlock("icon", $context, $blocks);
        echo "
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 42)), "html", null, true);
        echo "
    </a>
";
    }

    // line 46
    public function block_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    ";
        $context["color"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", [0 => "color"], "method", false, false, false, 47);
        // line 48
        echo "    ";
        $context["icon"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", [0 => "icon"], "method", false, false, false, 48);
        // line 49
        echo "
    <div class=\"ui";
        // line 50
        if (($context["icon"] ?? null)) {
            echo " labeled icon";
        }
        echo " floating dropdown ";
        if (($context["color"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo " ";
        }
        echo "link button\">
        ";
        // line 51
        if (($context["icon"] ?? null)) {
            echo "<i class=\"";
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo " icon\"></i>";
        }
        // line 52
        echo "        <span class=\"text\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 52)), "html", null, true);
        echo "</span>
        <div class=\"menu\">
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 55
            echo "                ";
            $context["icon"] = twig_get_attribute($this->env, $this->source, $context["child"], "labelAttribute", [0 => "icon"], "method", false, false, false, 55);
            // line 56
            echo "
                <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "uri", [], "any", false, false, false, 57), "html", null, true);
            echo "\" class=\"item\">
                    ";
            // line 58
            if (($context["icon"] ?? null)) {
                echo "<i class=\"icon ";
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i> ";
            }
            // line 59
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["child"], "label", [], "any", false, false, false, 59)), "html", null, true);
            echo "
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </div>
    </div>
";
    }

    // line 66
    public function block_transition($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "    ";
        $context["color"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", [0 => "color"], "method", false, false, false, 67);
        // line 68
        echo "
    <form action=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", [], "any", false, false, false, 69), "html", null, true);
        echo "\" method=\"post\" style=\"float: right;\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <button class=\"ui ";
        // line 71
        if (($context["color"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo " ";
        }
        echo "labeled icon ";
        if ( !((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "confirmation"], "method", true, true, false, 71)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "confirmation"], "method", false, false, false, 71), false)) : (false))) {
            echo "loadable";
        }
        echo " button\" type=\"submit\" ";
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "confirmation"], "method", true, true, false, 71)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "confirmation"], "method", false, false, false, 71), false)) : (false))) {
            echo "data-requires-confirmation";
        }
        echo ">
            ";
        // line 72
        $this->displayBlock("icon", $context, $blocks);
        echo "
            ";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 73)), "html", null, true);
        echo "
        </button>
    </form>
";
    }

    // line 78
    public function block_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "    ";
        $context["icon"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", [0 => "icon"], "method", false, false, false, 79);
        // line 80
        echo "    ";
        if (($context["icon"] ?? null)) {
            echo "<i class=\"icon ";
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo "\"></i> ";
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Menu:top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 80,  323 => 79,  319 => 78,  311 => 73,  307 => 72,  292 => 71,  287 => 69,  284 => 68,  281 => 67,  277 => 66,  271 => 62,  261 => 59,  255 => 58,  251 => 57,  248 => 56,  245 => 55,  241 => 54,  235 => 52,  229 => 51,  218 => 50,  215 => 49,  212 => 48,  209 => 47,  205 => 46,  198 => 42,  194 => 41,  185 => 40,  182 => 39,  179 => 38,  175 => 37,  167 => 33,  161 => 31,  159 => 30,  154 => 29,  152 => 28,  147 => 27,  145 => 26,  140 => 25,  138 => 24,  133 => 23,  130 => 22,  126 => 21,  121 => 18,  104 => 16,  87 => 15,  84 => 14,  80 => 13,  73 => 9,  65 => 8,  62 => 7,  59 => 6,  55 => 5,  50 => 1,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusUiBundle:Menu:top.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Menu/top.html.twig");
    }
}
