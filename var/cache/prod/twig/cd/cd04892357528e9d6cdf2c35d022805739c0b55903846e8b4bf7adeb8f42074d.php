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

/* @SyliusUi/Menu/sidebar.html.twig */
class __TwigTemplate_4714baf317f167c53a48a3a5ddb2943cfd2d456244668334bd9cca7a7fd453b0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'list' => [$this, 'block_list'],
            'item' => [$this, 'block_item'],
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
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SyliusUi/Menu/sidebar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 4));
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
            // line 5
            echo "    ";
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
    }

    // line 9
    public function block_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "class"], "method", false, false, false, 11))) ? ([0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "class"], "method", false, false, false, 11)]) : ([]));
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["matcher"] ?? null), "isCurrent", [0 => ($context["item"] ?? null)], "method", false, false, false, 12)) {
            // line 13
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "currentClass", [], "any", false, false, false, 13)]);
        } elseif (twig_get_attribute($this->env, $this->source,         // line 14
($context["matcher"] ?? null), "isAncestor", [0 => ($context["item"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "matchingDepth", [], "any", false, false, false, 14)], "method", false, false, false, 14)) {
            // line 15
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "ancestorClass", [], "any", false, false, false, 15)]);
        }
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeFirst", [], "any", false, false, false, 17)) {
            // line 18
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "firstClass", [], "any", false, false, false, 18)]);
        }
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeLast", [], "any", false, false, false, 20)) {
            // line 21
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "lastClass", [], "any", false, false, false, 21)]);
        }
        // line 23
        echo "
";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "any", false, false, false, 25) &&  !(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", [], "any", false, false, false, 25) === 0))) {
            // line 26
            echo "    ";
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "branch_class", [], "any", false, false, false, 26)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayChildren", [], "any", false, false, false, 26))) {
                // line 27
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "branch_class", [], "any", false, false, false, 27)]);
                // line 28
                echo "    ";
            }
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 29
($context["options"] ?? null), "leaf_class", [], "any", false, false, false, 29))) {
            // line 30
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "leaf_class", [], "any", false, false, false, 30)]);
        }
        // line 33
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, false, false, 33);
        // line 34
        if ( !twig_test_empty(($context["classes"] ?? null))) {
            // line 35
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["class" => twig_join_filter(($context["classes"] ?? null), " ")]);
        }
        // line 37
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 37) === 1)) {
            // line 38
            echo "<div class=\"item ";
            if (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 38)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", false, false, false, 38), "html", null, true);
            }
            echo "\">
    <div class=\"header\">";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 39)), "html", null, true);
            echo "</div>
    <div class=\"menu\">
        ";
            // line 41
            $this->displayBlock("list", $context, $blocks);
            echo "
    </div>
</div>
";
        } else {
            // line 45
            echo "<a class=\"item ";
            if (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 45)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", false, false, false, 45), "html", null, true);
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", [], "any", false, false, false, 45), "html", null, true);
            echo "\">
    ";
            // line 46
            $this->displayBlock("icon", $context, $blocks);
            echo "
    ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 47)), "html", null, true);
            echo "
</a>
";
        }
    }

    // line 52
    public function block_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        $context["icon"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttribute", [0 => "icon"], "method", false, false, false, 53);
        // line 54
        if (($context["icon"] ?? null)) {
            echo "<i class=\"icon ";
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo "\"></i> ";
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Menu/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 54,  184 => 53,  180 => 52,  172 => 47,  168 => 46,  159 => 45,  152 => 41,  147 => 39,  140 => 38,  138 => 37,  135 => 35,  133 => 34,  131 => 33,  128 => 30,  126 => 29,  123 => 28,  121 => 27,  118 => 26,  116 => 25,  113 => 23,  110 => 21,  108 => 20,  105 => 18,  103 => 17,  100 => 15,  98 => 14,  96 => 13,  94 => 12,  92 => 11,  88 => 9,  69 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusUi/Menu/sidebar.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Menu/sidebar.html.twig");
    }
}
