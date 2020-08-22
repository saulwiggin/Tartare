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

/* @SyliusUi/Form/imagesTheme.html.twig */
class __TwigTemplate_c74d7f3a29c114cd39a5461a6068e35c0fe49a8b371a3cb49c3e47bc4d256074 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'collection_widget' => [$this, 'block_collection_widget'],
            'sylius_product_image_widget' => [$this, 'block_sylius_product_image_widget'],
            'sylius_taxon_image_widget' => [$this, 'block_sylius_taxon_image_widget'],
            'sylius_avatar_image_widget' => [$this, 'block_sylius_avatar_image_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusUi/Form/theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@SyliusUi/Form/theme.html.twig", "@SyliusUi/Form/imagesTheme.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $macros["__internal_9fff7431e6b3db83b6a54ad7d28989ca0befb5ab769d0a203b4b07346ed49859"] = $this->loadTemplate("@SyliusResource/Macros/notification.html.twig", "@SyliusUi/Form/imagesTheme.html.twig", 4)->unwrap();
        // line 5
        echo "    ";
        $macros["self"] = $this;
        // line 6
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 6))) : ("")) . " controls collection-widget")]);
        // line 7
        echo "
    ";
        // line 8
        ob_start(function () { return ''; });
        // line 9
        echo "        <div data-form-type=\"collection\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo "
            ";
        // line 10
        if ((array_key_exists("prototype", $context) && ($context["allow_add"] ?? null))) {
            // line 11
            echo "                data-prototype='";
            echo twig_escape_filter($this->env, twig_call_macro($macros["self"], "macro_collection_item", [($context["prototype"] ?? null), ($context["allow_delete"] ?? null), ($context["button_delete_label"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11)], 11, $context, $this->getSourceContext()));
            echo "'
                data-prototype-name='";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
            echo "'";
        }
        // line 14
        echo ">
            ";
        // line 15
        echo twig_call_macro($macros["__internal_9fff7431e6b3db83b6a54ad7d28989ca0befb5ab769d0a203b4b07346ed49859"], "macro_error", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 15), "errors", [], "any", false, false, false, 15)], 15, $context, $this->getSourceContext());
        echo "

            ";
        // line 17
        if (twig_test_iterable(((array_key_exists("prototypes", $context)) ? (_twig_default_filter(($context["prototypes"] ?? null))) : ("")))) {
            // line 18
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["prototypes"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["subPrototype"]) {
                // line 19
                echo "                    <input type=\"hidden\" data-form-prototype=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                           value=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_call_macro($macros["self"], "macro_collection_item", [$context["subPrototype"], ($context["allow_delete"] ?? null), ($context["button_delete_label"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subPrototype"], "vars", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20)], 20, $context, $this->getSourceContext()));
                echo "\"
                           data-subprototype-name=\"";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subPrototype"], "vars", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
                echo "\"
                    />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['subPrototype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            ";
        }
        // line 25
        echo "
            <div data-form-collection=\"list\" class=\"ui three column stackable grid\">
                ";
        // line 27
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
            // line 28
            echo "                    ";
            echo twig_call_macro($macros["self"], "macro_collection_item", [$context["child"], ($context["allow_delete"] ?? null), ($context["button_delete_label"] ?? null), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 28)], 28, $context, $this->getSourceContext());
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
        // line 30
        echo "            </div>

            ";
        // line 32
        if ((array_key_exists("prototype", $context) && ($context["allow_add"] ?? null))) {
            // line 33
            echo "                <a href=\"#\" class=\"ui labeled icon button\" data-form-collection=\"add\">
                    <i class=\"plus square outline icon\"></i>
                    ";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["button_add_label"] ?? null)), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 38
        echo "        </div>
    ";
        $___internal_7289a8ba363d77cb9f960d92dbf197726f3d5cebea3149ce2d68b7febabb724d_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        echo twig_spaceless($___internal_7289a8ba363d77cb9f960d92dbf197726f3d5cebea3149ce2d68b7febabb724d_);
    }

    // line 58
    public function block_sylius_product_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "    ";
        ob_start(function () { return ''; });
        // line 60
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 60), 'row');
        echo "
        <label for=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.choose_file"), "html", null, true);
        echo "</label>
        ";
        // line 62
        if ( !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 62), "value", [], "any", false, true, false, 62), "path", [], "any", true, true, false, 62)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 62), "value", [], "any", false, true, false, 62), "path", [], "any", false, false, false, 62), null)) : (null)))) {
            // line 63
            echo "            <img class=\"ui small bordered image\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 63), "value", [], "any", false, false, false, 63), "path", [], "any", false, false, false, 63), "sylius_small"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 63), "value", [], "any", false, false, false, 63), "type", [], "any", false, false, false, 63), "html", null, true);
            echo "\" />
        ";
        }
        // line 65
        echo "        <div class=\"ui hidden element\">
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 66), 'widget');
        echo "
        </div>
        <div class=\"ui element\">";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 69), 'errors');
        // line 70
        echo "</div>
        ";
        // line 71
        if ((( !(null === twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 71)) && (0 != twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 71)))) &&  !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "simple", [], "any", false, false, false, 71))) {
            // line 72
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "productVariants", [], "any", false, false, false, 72), 'row');
            echo "
        ";
        }
        // line 74
        echo "    ";
        $___internal_7f9f1fe9e6a893b0f867632c8620c6d7a1351eb3df09dde4d242f9ad4cd5f449_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo twig_spaceless($___internal_7f9f1fe9e6a893b0f867632c8620c6d7a1351eb3df09dde4d242f9ad4cd5f449_);
    }

    // line 77
    public function block_sylius_taxon_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "    ";
        ob_start(function () { return ''; });
        // line 79
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 79), 'row');
        echo "
        ";
        // line 80
        if ((null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 80), "value", [], "any", false, true, false, 80), "path", [], "any", true, true, false, 80)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 80), "value", [], "any", false, true, false, 80), "path", [], "any", false, false, false, 80), null)) : (null)))) {
            // line 81
            echo "            <label for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 81), "vars", [], "any", false, false, false, 81), "id", [], "any", false, false, false, 81), "html", null, true);
            echo "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.choose_file"), "html", null, true);
            echo "</label>
        ";
        } else {
            // line 83
            echo "            <img class=\"ui small bordered image\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 83), "value", [], "any", false, false, false, 83), "path", [], "any", false, false, false, 83), "sylius_small"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 83), "value", [], "any", false, false, false, 83), "type", [], "any", false, false, false, 83), "html", null, true);
            echo "\" />
            <label for=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84), "html", null, true);
            echo "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_file"), "html", null, true);
            echo "</label>
        ";
        }
        // line 86
        echo "        <div class=\"ui hidden element\">
            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 87), 'widget');
        echo "
        </div>
        <div class=\"ui element\">";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 90), 'errors');
        // line 91
        echo "</div>
    ";
        $___internal_470345663c648dc4bc454cb2bc11fcef865505cda6df305ed3a4979a0eaa3c55_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        echo twig_spaceless($___internal_470345663c648dc4bc454cb2bc11fcef865505cda6df305ed3a4979a0eaa3c55_);
    }

    // line 95
    public function block_sylius_avatar_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "    ";
        ob_start(function () { return ''; });
        // line 97
        echo "        ";
        if ( !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 97), "value", [], "any", false, true, false, 97), "path", [], "any", true, true, false, 97)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 97), "value", [], "any", false, true, false, 97), "path", [], "any", false, false, false, 97), null)) : (null)))) {
            // line 98
            echo "            <img class=\"ui small bordered image\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 98), "value", [], "any", false, false, false, 98), "path", [], "any", false, false, false, 98), "sylius_small"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 98), "value", [], "any", false, false, false, 98), "type", [], "any", false, false, false, 98), "html", null, true);
            echo "\" />
        ";
        }
        // line 100
        echo "        <div class=\"ui hidden element\">
            ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 101), 'widget');
        echo "
        </div>
        <div style=\"margin-top: 10px\" >
            <label for=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104), "html", null, true);
        echo "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.choose_file"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"ui element\">";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 107), 'errors');
        // line 108
        echo "</div>
    ";
        $___internal_39dd985d0604b7119574552a252fc1dadde83ff8c0218b40a9ee2b648b902402_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        echo twig_spaceless($___internal_39dd985d0604b7119574552a252fc1dadde83ff8c0218b40a9ee2b648b902402_);
    }

    // line 42
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
            // line 43
            echo "    ";
            ob_start(function () { return ''; });
            // line 44
            echo "        <div data-form-collection=\"item\" data-form-collection-index=\"";
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "\" class=\"column\">
            <div class=\"ui box segment\">
                ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
            </div>
            ";
            // line 48
            if (($context["allow_delete"] ?? null)) {
                // line 49
                echo "                <a href=\"#\" data-form-collection=\"delete\" class=\"ui red labeled icon button\" style=\"margin-bottom: 1em;\">
                    <i class=\"trash icon\"></i>
                    ";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["button_delete_label"] ?? null)), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 54
            echo "        </div>
    ";
            $___internal_99a4b98f494d30bf372e4acab6daa84e2171ab1d0fa42abbdd462ff7072740ba_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 43
            echo twig_spaceless($___internal_99a4b98f494d30bf372e4acab6daa84e2171ab1d0fa42abbdd462ff7072740ba_);

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Form/imagesTheme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 43,  376 => 54,  370 => 51,  366 => 49,  364 => 48,  359 => 46,  353 => 44,  350 => 43,  334 => 42,  330 => 96,  326 => 108,  324 => 107,  317 => 104,  311 => 101,  308 => 100,  300 => 98,  297 => 97,  294 => 96,  290 => 95,  286 => 78,  282 => 91,  280 => 90,  275 => 87,  272 => 86,  265 => 84,  258 => 83,  250 => 81,  248 => 80,  243 => 79,  240 => 78,  236 => 77,  232 => 59,  229 => 74,  223 => 72,  221 => 71,  218 => 70,  216 => 69,  211 => 66,  208 => 65,  200 => 63,  198 => 62,  192 => 61,  187 => 60,  184 => 59,  180 => 58,  176 => 8,  172 => 38,  166 => 35,  162 => 33,  160 => 32,  156 => 30,  139 => 28,  122 => 27,  118 => 25,  115 => 24,  106 => 21,  102 => 20,  97 => 19,  92 => 18,  90 => 17,  85 => 15,  82 => 14,  78 => 12,  73 => 11,  71 => 10,  66 => 9,  64 => 8,  61 => 7,  58 => 6,  55 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusUi/Form/imagesTheme.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Form/imagesTheme.html.twig");
    }
}
