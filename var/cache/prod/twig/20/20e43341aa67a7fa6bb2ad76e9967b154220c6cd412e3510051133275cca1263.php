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

/* @SyliusAdmin/Product/Attribute/attributesCollection.html.twig */
class __TwigTemplate_c80b5ff3d1ad8ee14a2940535868869d8ede29fd9086fc63baeca805dbc364f8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'collection_widget' => [$this, 'block_collection_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusAdmin/Form/theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@SyliusAdmin/Form/theme.html.twig", "@SyliusAdmin/Product/Attribute/attributesCollection.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $macros["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "@SyliusAdmin/Product/Attribute/attributesCollection.html.twig", 4)->unwrap();
        // line 5
        echo "    ";
        $macros["self"] = $this;
        // line 6
        echo "
    <div class=\"ui top attached tabular menu\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "translations", [], "any", false, false, false, 8));
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
        foreach ($context['_seq'] as $context["localeCode"] => $context["translationForm"]) {
            // line 9
            echo "            <a class=\"item";
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 9))) {
                echo " active";
            }
            echo "\" data-tab=\"";
            echo twig_escape_filter($this->env, $context["localeCode"], "html", null, true);
            echo "\">
                ";
            // line 10
            echo twig_call_macro($macros["flags"], "macro_fromLocaleCode", [$context["localeCode"]], 10, $context, $this->getSourceContext());
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), [$context["localeCode"]]), "html", null, true);
            echo "
            </a>
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
        unset($context['_seq'], $context['_iterated'], $context['localeCode'], $context['translationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>

    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "translations", [], "any", false, false, false, 15));
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
        foreach ($context['_seq'] as $context["localeCode"] => $context["translationForm"]) {
            // line 16
            echo "        <div class=\"ui bottom attached tab segment";
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 16))) {
                echo " active";
            }
            echo "\" data-tab=\"";
            echo twig_escape_filter($this->env, $context["localeCode"], "html", null, true);
            echo "\">
            ";
            // line 17
            ob_start(function () { return ''; });
            // line 18
            echo "                ";
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
                // line 19
                echo "                    ";
                if (($context["localeCode"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "localeCode", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19))) {
                    // line 20
                    echo "                        ";
                    echo twig_call_macro($macros["self"], "macro_collection_item", [$context["child"], ($context["allow_delete"] ?? null), ($context["button_delete_label"] ?? null), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 20)], 20, $context, $this->getSourceContext());
                    echo "
                    ";
                }
                // line 22
                echo "                ";
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
            // line 23
            echo "            ";
            $___internal_77ea8bc34f1b79d5d6c07deb01c56471c124da75381b907b2fbeb394c98167ca_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 17
            echo twig_spaceless($___internal_77ea8bc34f1b79d5d6c07deb01c56471c124da75381b907b2fbeb394c98167ca_);
            // line 24
            echo "        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['localeCode'], $context['translationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 28
    public function macro_collection_item($__form__ = null, $__allow_delete__ = null, $__button_delete_label__ = null, $__index__ = null, ...$__varargs__)
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
            // line 29
            echo "    <div class=\"attribute\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 29), "data", [], "any", false, false, false, 29), "attribute", [], "any", false, false, false, 29), "code", [], "any", false, false, false, 29), "html", null, true);
            echo "\">
        ";
            // line 30
            if (twig_in_filter("checkbox", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "block_prefixes", [], "any", false, false, false, 30))) {
                // line 31
                echo "            <div class=\"ui toggle checkbox\" style=\"margin-top: 15px; margin-bottom: 15px;\">
                ";
                // line 32
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 32), 'widget');
                echo "
                <label>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 33), "value", [], "any", false, false, false, 33), "attribute", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
                echo "</label>
            </div>
            <button class=\"ui red right labeled icon button\" style=\"float: right;\">
                <i class=\"remove icon\"></i> ";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "html", null, true);
                echo "
            </button>
        ";
            } else {
                // line 39
                echo "            <div class=\"ui right fluid labeled input\" style=\"margin-top: 15px; margin-bottom: 15px;\">
                <div class=\"ui label\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 40), "value", [], "any", false, false, false, 40), "attribute", [], "any", false, false, false, 40), "translation", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 40), "value", [], "any", false, false, false, 40), "localeCode", [], "any", false, false, false, 40)], "method", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
                echo "</div>
                ";
                // line 41
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 41), 'widget');
                echo "
                <button class=\"ui red right labeled icon button\">
                    <i class=\"remove icon\"></i> ";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "html", null, true);
                echo "
                </button>
            </div>
            ";
                // line 46
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 46), 'errors');
                echo "
        ";
            }
            // line 48
            echo "        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "attribute", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "full_name", [], "any", false, false, false, 48), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "attribute", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 48), "data", [], "any", false, false, false, 48), "attribute", [], "any", false, false, false, 48), "code", [], "any", false, false, false, 48), "html", null, true);
            echo "\"/>
        <input type=\"hidden\" name=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "localeCode", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "full_name", [], "any", false, false, false, 49), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "localeCode", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "localeCode", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "value", [], "any", false, false, false, 49), "html", null, true);
            echo "\"/>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Attribute/attributesCollection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 49,  264 => 48,  259 => 46,  253 => 43,  248 => 41,  244 => 40,  241 => 39,  235 => 36,  229 => 33,  225 => 32,  222 => 31,  220 => 30,  215 => 29,  199 => 28,  182 => 24,  180 => 17,  177 => 23,  163 => 22,  157 => 20,  154 => 19,  136 => 18,  134 => 17,  125 => 16,  108 => 15,  104 => 13,  85 => 10,  76 => 9,  59 => 8,  55 => 6,  52 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Product/Attribute/attributesCollection.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Attribute/attributesCollection.html.twig");
    }
}
