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

/* SyliusResourceBundle::forms.html.twig */
class __TwigTemplate_6cec889f0449ea8807bed6a44ad2662387f44be8969d413c8c55a69219abecad extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'collection_widget' => [$this, 'block_collection_widget'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 39
        echo "
";
    }

    // line 1
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["__internal_7b86f99ceddaf85b32273654da877e88f6b345124ce7e718029d21b11c6c52e4"] = $this->loadTemplate("@SyliusResource/Macros/notification.html.twig", "SyliusResourceBundle::forms.html.twig", 2)->unwrap();
        // line 3
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 3))) : ("")) . " controls collection-widget")]);
        // line 4
        echo "
    ";
        // line 5
        ob_start(function () { return ''; });
        // line 6
        echo "        <div data-form-type=\"collection\"
             ";
        // line 7
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo "
             ";
        // line 8
        if ((array_key_exists("prototype", $context) && ($context["allow_add"] ?? null))) {
            // line 9
            echo "             data-prototype='";
            echo twig_escape_filter($this->env, twig_call_macro($macros["_self"], "macro_collectionItem", [($context["prototype"] ?? null), ($context["allow_delete"] ?? null), ($context["button_delete_label"] ?? null), "__name__"], 9, $context, $this->getSourceContext()));
            echo "'";
        }
        // line 10
        echo ">

            ";
        // line 12
        echo twig_call_macro($macros["__internal_7b86f99ceddaf85b32273654da877e88f6b345124ce7e718029d21b11c6c52e4"], "macro_error", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 12), "errors", [], "any", false, false, false, 12)], 12, $context, $this->getSourceContext());
        echo "

            ";
        // line 14
        if (twig_test_iterable(((array_key_exists("prototypes", $context)) ? (_twig_default_filter(($context["prototypes"] ?? null))) : ("")))) {
            // line 15
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["prototypes"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["subPrototype"]) {
                // line 16
                echo "                    <input type=\"hidden\"
                           data-form-prototype=\"";
                // line 17
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                           value=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_call_macro($macros["_self"], "macro_collectionItem", [$context["subPrototype"], ($context["allow_delete"] ?? null), ($context["button_delete_label"] ?? null), "__name__"], 18, $context, $this->getSourceContext()));
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['subPrototype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            ";
        }
        // line 21
        echo "
            <div data-form-collection=\"list\"
                 class=\"row collection-list\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 25
            echo "                    ";
            echo twig_call_macro($macros["_self"], "macro_collectionItem", [$context["child"], ($context["allow_delete"] ?? null), ($context["button_delete_label"] ?? null), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 25)], 25, $context, $this->getSourceContext());
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </div>

            ";
        // line 29
        if ((array_key_exists("prototype", $context) && ($context["allow_add"] ?? null))) {
            // line 30
            echo "                <a href=\"#\" class=\"btn btn-success btn-block\"
                   data-form-collection=\"add\">
                    <i class=\"glyphicon glyphicon-plus\"></i>
                    ";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["button_add_label"] ?? null)), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 36
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 40
    public function macro_collectionItem($__form__ = null, $__allow_delete__ = null, $__button_delete_label__ = null, $__index__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "allow_delete" => $__allow_delete__,
            "button_delete_label" => $__button_delete_label__,
            "index" => $__index__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 41
            echo "    ";
            ob_start(function () { return ''; });
            // line 42
            echo "        <div data-form-collection=\"item\"
             data-form-collection-index=\"";
            // line 43
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "\"
             class=\"collection-item\">
            <div class=\"collection-box";
            // line 45
            if ((twig_length_filter($this->env, ($context["form"] ?? null)) == 1)) {
                echo " unique-field";
            }
            echo "\">
                ";
            // line 46
            if (($context["allow_delete"] ?? null)) {
                // line 47
                echo "                    <p class=\"text-right\">
                        <a href=\"#\" data-form-collection=\"delete\" class=\"btn btn-danger\">
                            <i class=\"glyphicon glyphicon-remove collection-button-remove\"></i>
                            ";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["button_delete_label"] ?? null)), "html", null, true);
                echo "
                        </a>
                    </p>
                ";
            }
            // line 54
            echo "                ";
            if ( !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 54))) {
                // line 55
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
                echo "
                ";
            } else {
                // line 57
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
                echo "
                ";
            }
            // line 59
            echo "            </div>
        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle::forms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 59,  226 => 57,  220 => 55,  217 => 54,  210 => 50,  205 => 47,  203 => 46,  197 => 45,  192 => 43,  189 => 42,  186 => 41,  170 => 40,  164 => 36,  158 => 33,  153 => 30,  151 => 29,  147 => 27,  130 => 25,  113 => 24,  108 => 21,  105 => 20,  97 => 18,  93 => 17,  90 => 16,  85 => 15,  83 => 14,  78 => 12,  74 => 10,  69 => 9,  67 => 8,  63 => 7,  60 => 6,  58 => 5,  55 => 4,  52 => 3,  50 => 2,  46 => 1,  41 => 39,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusResourceBundle::forms.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/resource-bundle/src/Bundle/Resources/views/forms.html.twig");
    }
}
