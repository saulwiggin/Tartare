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

/* @SyliusUi/Form/theme.html.twig */
class __TwigTemplate_af0f16da8a2fc536344fc5e21cd1f9ef090f27f492e3c1181007b280fd6628bf extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_row' => [$this, 'block_form_row'],
            'form_errors' => [$this, 'block_form_errors'],
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'radio_row' => [$this, 'block_radio_row'],
            'money_widget' => [$this, 'block_money_widget'],
            'choice_row' => [$this, 'block_choice_row'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'collection_widget' => [$this, 'block_collection_widget'],
            'sylius_province_widget' => [$this, 'block_sylius_province_widget'],
            'sylius_zone_member_widget' => [$this, 'block_sylius_zone_member_widget'],
            'sylius_promotion_rule_widget' => [$this, 'block_sylius_promotion_rule_widget'],
            'sylius_promotion_action_widget' => [$this, 'block_sylius_promotion_action_widget'],
            'sylius_promotion_configuration_widget' => [$this, 'block_sylius_promotion_configuration_widget'],
            'sylius_product_option_value_widget' => [$this, 'block_sylius_product_option_value_widget'],
            'sylius_translations_row' => [$this, 'block_sylius_translations_row'],
            'sylius_resource_autocomplete_choice_row' => [$this, 'block_sylius_resource_autocomplete_choice_row'],
            'sylius_product_variant_generation_widget' => [$this, 'block_sylius_product_variant_generation_widget'],
            'sylius_image_widget' => [$this, 'block_sylius_image_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "@SyliusUi/Form/theme.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"";
        if (($context["required"] ?? null)) {
            echo "required ";
        }
        echo "field";
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " error";
        }
        echo "\">";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 8
        echo "</div>";
    }

    // line 11
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 14
                echo "<div class=\"ui red ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 14))) {
                    echo "pointing ";
                }
                echo "label sylius-validation-error\" ";
                echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["validation-error"]);
                echo " ";
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 14))) {
                    echo " style=\"margin-bottom: 10px;\"";
                }
                echo ">
                ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 15), "html", null, true);
                echo "
            </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    // line 21
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "<div class=\"";
        if (($context["required"] ?? null)) {
            echo "required ";
        }
        echo "field";
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " error";
        }
        echo "\">
        <div class=\"ui toggle checkbox\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 27
        echo "</div>
    </div>";
    }

    // line 31
    public function block_radio_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "<div class=\"field";
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " error";
        }
        echo "\">
        <div class=\"ui radio checkbox\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 37
        echo "</div>
    </div>";
    }

    // line 41
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "<div class=\"ui labeled input\">
        <div class=\"ui label\">";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_currency_symbol')->getCallable(), [($context["currency"] ?? null)]), "html", null, true);
        echo "</div>";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 45
        echo "</div>";
    }

    // line 48
    public function block_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "<div class=\"";
        if (($context["required"] ?? null)) {
            echo "required ";
        }
        echo "field";
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " error";
        }
        echo "\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 51
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 51)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 51))) : ("")) . " ui dropdown")]);
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 54
        echo "</div>";
    }

    // line 57
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <div class=\"";
        // line 59
        if (($context["required"] ?? null)) {
            echo "required ";
        }
        echo "grouped fields\">";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 61
            echo "                <div class=\"field\">
                    <div class=\"ui toggle checkbox\">";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["option"]));
            // line 65
            echo "</div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</div>
    </div>";
    }

    // line 72
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "<div class=\"ui right labeled input\">";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 75
        echo "<div class=\"ui basic label\">%</div>
    </div>";
    }

    // line 79
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        $macros["__internal_85a07d95ed6de62eb7a2b37f881f3e321d71d31da7ca7308df99f866915f6352"] = $this->loadTemplate("@SyliusResource/Macros/notification.html.twig", "@SyliusUi/Form/theme.html.twig", 80)->unwrap();
        // line 81
        echo "    ";
        $macros["self"] = $this;
        // line 82
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 82)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 82))) : ("")) . " controls collection-widget")]);
        // line 83
        echo "
    ";
        // line 84
        ob_start(function () { return ''; });
        // line 85
        echo "        <div data-form-type=\"collection\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo "
            ";
        // line 86
        if ((array_key_exists("prototype", $context) && ($context["allow_add"] ?? null))) {
            // line 87
            echo "                data-prototype='";
            echo twig_escape_filter($this->env, twig_call_macro($macros["self"], "macro_collection_item", [($context["prototype"] ?? null), ($context["allow_delete"] ?? null), ($context["button_delete_label"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 87), "name", [], "any", false, false, false, 87)], 87, $context, $this->getSourceContext()));
            echo "'
                data-prototype-name='";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88), "html", null, true);
            echo "'";
        }
        // line 90
        echo ">
            ";
        // line 91
        echo twig_call_macro($macros["__internal_85a07d95ed6de62eb7a2b37f881f3e321d71d31da7ca7308df99f866915f6352"], "macro_error", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 91), "errors", [], "any", false, false, false, 91)], 91, $context, $this->getSourceContext());
        echo "

            ";
        // line 93
        if (twig_test_iterable(((array_key_exists("prototypes", $context)) ? (_twig_default_filter(($context["prototypes"] ?? null))) : ("")))) {
            // line 94
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["prototypes"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["subPrototype"]) {
                // line 95
                echo "                    <input type=\"hidden\" data-form-prototype=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                           value=\"";
                // line 96
                echo twig_escape_filter($this->env, twig_call_macro($macros["self"], "macro_collection_item", [$context["subPrototype"], ($context["allow_delete"] ?? null), ($context["button_delete_label"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subPrototype"], "vars", [], "any", false, false, false, 96), "name", [], "any", false, false, false, 96)], 96, $context, $this->getSourceContext()));
                echo "\"
                           data-subprototype-name=\"";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subPrototype"], "vars", [], "any", false, false, false, 97), "name", [], "any", false, false, false, 97), "html", null, true);
                echo "\"
                    />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['subPrototype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "            ";
        }
        // line 101
        echo "
            <div data-form-collection=\"list\">
                ";
        // line 103
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
            // line 104
            echo "                    ";
            echo twig_call_macro($macros["self"], "macro_collection_item", [$context["child"], ($context["allow_delete"] ?? null), ($context["button_delete_label"] ?? null), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 104)], 104, $context, $this->getSourceContext());
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
        // line 106
        echo "            </div>

            ";
        // line 108
        if ((array_key_exists("prototype", $context) && ($context["allow_add"] ?? null))) {
            // line 109
            echo "                <a href=\"#\" class=\"ui labeled icon button\" data-form-collection=\"add\">
                    <i class=\"plus square outline icon\"></i>
                    ";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["button_add_label"] ?? null)), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 114
        echo "        </div>
    ";
        $___internal_fe55063709c848e618ed61fd47dc3f05d41ee932be3c69470efeaa7841a49e8b_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        echo twig_spaceless($___internal_fe55063709c848e618ed61fd47dc3f05d41ee932be3c69470efeaa7841a49e8b_);
    }

    // line 132
    public function block_sylius_province_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "    <div class=\"ui compact segment\">
        <div class=\"inline fields\">
            ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, false, false, 135), 'row');
        echo "
            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 136), 'row');
        echo "
            ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "abbreviation", [], "any", false, false, false, 137), 'row');
        echo "
        </div>
    </div>
";
    }

    // line 142
    public function block_sylius_zone_member_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "    <div class=\"ui compact segment\">
        <div class=\"inline fields\">
            ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, false, false, 145), 'row');
        echo "
        </div>
    </div>
";
    }

    // line 150
    public function block_sylius_promotion_rule_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        echo "    <div class=\"ui segment\">
        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 156
    public function block_sylius_promotion_action_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 157
        echo "    <div class=\"ui segment\">
        ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 162
    public function block_sylius_promotion_configuration_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 163
        echo "    <div class=\"configuration\">
        ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 165
            echo "            <hr/>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            echo "<hr/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "    </div>
";
    }

    // line 170
    public function block_sylius_product_option_value_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 171
        echo "    <div class=\"ui segment\">
        ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, false, false, 172), 'row');
        echo "
        <div class=\"five fields\">
            ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "translations", [], "any", false, false, false, 174));
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
        foreach ($context['_seq'] as $context["locale"] => $context["translationForm"]) {
            // line 175
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["translationForm"], "value", [], "any", false, false, false, 175), 'row', ["label" => call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), [$context["locale"]])]);
            echo "
            ";
            // line 176
            if ((0 == (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 176) % 5))) {
                // line 177
                echo "        </div>
        <div class=\"five fields\">
            ";
            }
            // line 180
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "        </div>
    </div>
";
    }

    // line 185
    public function block_sylius_translations_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 186
        echo "<h4 class=\"ui dividing header\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo "</h4>
    <div class=\"ui grid\">
        ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 189
            echo "            <div class=\"four wide column\">
                ";
            // line 190
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translation"], 'label', (twig_test_empty($_label_ = call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translation"], "vars", [], "any", false, false, false, 190), "name", [], "any", false, false, false, 190)])) ? [] : ["label" => $_label_]));
            echo "
            </div>
            <div class=\"twelve wide column\">
                ";
            // line 193
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translation"], 'widget');
            echo "
            </div>";
            // line 195
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "    </div>";
    }

    // line 200
    public function block_sylius_resource_autocomplete_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 201
        echo "    <div class=\"";
        if (($context["required"] ?? null)) {
            echo "required ";
        }
        echo "field";
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " error";
        }
        echo "\">";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 203
        echo "<div
            class=\"sylius-autocomplete ui fluid search selection dropdown ";
        // line 204
        if (($context["multiple"] ?? null)) {
            echo "multiple";
        }
        echo "\"
            data-url=\"";
        // line 205
        echo twig_escape_filter($this->env, ($context["remote_url"] ?? null), "html", null, true);
        echo "\"
            data-choice-name=\"";
        // line 206
        echo twig_escape_filter($this->env, ($context["choice_name"] ?? null), "html", null, true);
        echo "\"
            data-choice-value=\"";
        // line 207
        echo twig_escape_filter($this->env, ($context["choice_value"] ?? null), "html", null, true);
        echo "\"
            data-criteria-type=\"";
        // line 208
        echo twig_escape_filter($this->env, ($context["remote_criteria_type"] ?? null), "html", null, true);
        echo "\"
            data-criteria-name=\"";
        // line 209
        echo twig_escape_filter($this->env, ($context["remote_criteria_name"] ?? null), "html", null, true);
        echo "\"
            data-load-edit-url=\"";
        // line 210
        echo twig_escape_filter($this->env, ($context["load_edit_url"] ?? null), "html", null, true);
        echo "\"
        >";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ["class" => "autocomplete"]]);
        // line 213
        echo "<i class=\"dropdown icon\"></i>
            <div class=\"default text\">";
        // line 214
        if (array_key_exists("placeholder", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null)), "html", null, true);
            echo " ";
        }
        echo "</div>
            <div class=\"menu\"></div>
        </div>";
        // line 217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 218
        echo "</div>
";
    }

    // line 221
    public function block_sylius_product_variant_generation_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 222
        echo "    <div class=\"ui segment\">
        <div class=\"ui two column stackable grid\">
            <div class=\"column\">
                ";
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "optionValues", [], "any", false, false, false, 225), 'row', ["label" => false]);
        echo "
            </div>
            <div class=\"column\">
                ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, false, false, 228), 'row');
        echo "
                ";
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 229), 'row');
        echo "
            </div>
        </div>
        <h4 class=\"ui dividing header\">";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pricing"), "html", null, true);
        echo "</h4>
        ";
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "channelPricings", [], "any", false, false, false, 233), 'row', ["label" => false]);
        echo "
    </div>
";
    }

    // line 237
    public function block_sylius_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 238
        echo "    ";
        ob_start(function () { return ''; });
        // line 239
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 239), 'row');
        echo "
        <label for=\"";
        // line 240
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 240), "vars", [], "any", false, false, false, 240), "id", [], "any", false, false, false, 240), "html", null, true);
        echo "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.choose_file"), "html", null, true);
        echo "</label>
        ";
        // line 241
        if ( !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 241), "value", [], "any", false, true, false, 241), "path", [], "any", true, true, false, 241)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 241), "value", [], "any", false, true, false, 241), "path", [], "any", false, false, false, 241), null)) : (null)))) {
            // line 242
            echo "            <img class=\"ui small bordered image\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 242), "value", [], "any", false, false, false, 242), "path", [], "any", false, false, false, 242), "sylius_small"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 242), "value", [], "any", false, false, false, 242), "type", [], "any", false, false, false, 242), "html", null, true);
            echo "\" />
        ";
        }
        // line 244
        echo "        <div class=\"ui hidden element\">
            ";
        // line 245
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 245), 'widget');
        echo "
        </div>
        <div class=\"ui element\">";
        // line 248
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 248), 'errors');
        // line 249
        echo "</div>
    ";
        $___internal_8be3cd2e6298c575f18eaf34e62779df1e1b8b4a4d4a6f8ee4bbe35e5cea38d4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 238
        echo twig_spaceless($___internal_8be3cd2e6298c575f18eaf34e62779df1e1b8b4a4d4a6f8ee4bbe35e5cea38d4_);
    }

    // line 118
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
            // line 119
            echo "    ";
            ob_start(function () { return ''; });
            // line 120
            echo "        <div data-form-collection=\"item\" data-form-collection-index=\"";
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 121
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
            ";
            // line 122
            if (($context["allow_delete"] ?? null)) {
                // line 123
                echo "                <a href=\"#\" data-form-collection=\"delete\" class=\"ui red labeled icon button\" style=\"margin-bottom: 1em;\">
                    <i class=\"trash icon\"></i>
                    ";
                // line 125
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["button_delete_label"] ?? null)), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 128
            echo "        </div>
    ";
            $___internal_60f14224bf67a60e14cd3d35485bf27c3cf8c08b610a6e6dece23a0a08cdc081_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 119
            echo twig_spaceless($___internal_60f14224bf67a60e14cd3d35485bf27c3cf8c08b610a6e6dece23a0a08cdc081_);

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Form/theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  781 => 119,  777 => 128,  771 => 125,  767 => 123,  765 => 122,  761 => 121,  756 => 120,  753 => 119,  737 => 118,  733 => 238,  729 => 249,  727 => 248,  722 => 245,  719 => 244,  711 => 242,  709 => 241,  703 => 240,  698 => 239,  695 => 238,  691 => 237,  684 => 233,  680 => 232,  674 => 229,  670 => 228,  664 => 225,  659 => 222,  655 => 221,  650 => 218,  648 => 217,  639 => 214,  636 => 213,  634 => 212,  630 => 210,  626 => 209,  622 => 208,  618 => 207,  614 => 206,  610 => 205,  604 => 204,  601 => 203,  599 => 202,  589 => 201,  585 => 200,  581 => 197,  575 => 195,  571 => 193,  565 => 190,  562 => 189,  558 => 188,  552 => 186,  548 => 185,  542 => 181,  528 => 180,  523 => 177,  521 => 176,  516 => 175,  499 => 174,  494 => 172,  491 => 171,  487 => 170,  482 => 167,  473 => 165,  469 => 164,  466 => 163,  462 => 162,  455 => 158,  452 => 157,  448 => 156,  441 => 152,  438 => 151,  434 => 150,  426 => 145,  422 => 143,  418 => 142,  410 => 137,  406 => 136,  402 => 135,  398 => 133,  394 => 132,  390 => 84,  386 => 114,  380 => 111,  376 => 109,  374 => 108,  370 => 106,  353 => 104,  336 => 103,  332 => 101,  329 => 100,  320 => 97,  316 => 96,  311 => 95,  306 => 94,  304 => 93,  299 => 91,  296 => 90,  292 => 88,  287 => 87,  285 => 86,  280 => 85,  278 => 84,  275 => 83,  272 => 82,  269 => 81,  267 => 80,  263 => 79,  258 => 75,  256 => 74,  254 => 73,  250 => 72,  245 => 68,  237 => 65,  235 => 64,  233 => 63,  230 => 61,  226 => 60,  221 => 59,  216 => 58,  212 => 57,  208 => 54,  206 => 53,  204 => 52,  202 => 51,  200 => 50,  190 => 49,  186 => 48,  182 => 45,  180 => 44,  177 => 43,  174 => 42,  170 => 41,  165 => 37,  163 => 36,  161 => 35,  159 => 34,  152 => 32,  148 => 31,  143 => 27,  141 => 26,  139 => 25,  137 => 24,  126 => 22,  122 => 21,  111 => 15,  98 => 14,  94 => 13,  92 => 12,  88 => 11,  84 => 8,  82 => 7,  80 => 6,  78 => 5,  68 => 4,  64 => 3,  53 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusUi/Form/theme.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Form/theme.html.twig");
    }
}
