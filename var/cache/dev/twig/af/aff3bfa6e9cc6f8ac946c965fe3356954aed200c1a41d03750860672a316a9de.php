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

/* @BitBagSyliusCmsPlugin/Macro/translationForm.html.twig */
class __TwigTemplate_c03c480401d1d2d789bf537e30e78fe4cca29a704055c971e124ffc2c7ddd65a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig"));

        // line 27
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_translationForm($__translations__ = null, $__resource__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "translations" => $__translations__,
            "resource" => $__resource__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "translationForm"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "translationForm"));

            // line 2
            echo "    ";
            $macros["image"] = $this->loadTemplate("@BitBagSyliusCmsPlugin/Macro/imageWidget.html.twig", "@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig", 2)->unwrap();
            // line 3
            echo "    ";
            $macros["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig", 3)->unwrap();
            // line 4
            echo "
    <div class=\"ui styled fluid accordion\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 6, $this->source); })()));
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
                // line 7
                echo "            <div data-locale=\"";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "\">
                <div class=\"title";
                // line 8
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 8))) {
                    echo " active";
                }
                echo "\">
                    <i class=\"dropdown icon\"></i>
                    ";
                // line 10
                echo twig_call_macro($macros["flags"], "macro_fromLocaleCode", [$context["locale"]], 10, $context, $this->getSourceContext());
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), [$context["locale"]]), "html", null, true);
                echo "
                </div>
                <div class=\"ui content";
                // line 12
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 12))) {
                    echo " active";
                }
                echo "\">
                    ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationForm"]);
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 14
                    echo "
                        ";
                    // line 15
                    if (("image" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15))) {
                        // line 16
                        echo "                            ";
                        echo twig_call_macro($macros["image"], "macro_imageWidget", [$context["field"]], 16, $context, $this->getSourceContext());
                        echo "
                        ";
                    } else {
                        // line 18
                        echo "                            ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                        echo "
                        ";
                    }
                    // line 20
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "                </div>
            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 28
    public function macro_translationFormWithSlug($__translations__ = null, $__slugFieldTemplate__ = null, $__resource__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "translations" => $__translations__,
            "slugFieldTemplate" => $__slugFieldTemplate__,
            "resource" => $__resource__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "translationFormWithSlug"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "translationFormWithSlug"));

            // line 29
            echo "    ";
            $macros["image"] = $this->loadTemplate("@BitBagSyliusCmsPlugin/Macro/imageWidget.html.twig", "@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig", 29)->unwrap();
            // line 30
            echo "    ";
            $macros["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig", 30)->unwrap();
            // line 31
            echo "
    <div class=\"ui styled fluid accordion\">
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 33, $this->source); })()));
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
                // line 34
                echo "            <div data-locale=\"";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "\">
                <div class=\"title";
                // line 35
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 35))) {
                    echo " active";
                }
                echo "\">
                    <i class=\"dropdown icon\"></i>
                    ";
                // line 37
                echo twig_call_macro($macros["flags"], "macro_fromLocaleCode", [$context["locale"]], 37, $context, $this->getSourceContext());
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), [$context["locale"]]), "html", null, true);
                echo "
                </div>
                <div class=\"ui content";
                // line 39
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 39))) {
                    echo " active";
                }
                echo "\">
                    ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationForm"]);
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
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 41
                    echo "
                        ";
                    // line 42
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42) == "slug")) {
                        // line 43
                        echo "                            ";
                        $this->loadTemplate((isset($context["slugFieldTemplate"]) || array_key_exists("slugFieldTemplate", $context) ? $context["slugFieldTemplate"] : (function () { throw new RuntimeError('Variable "slugFieldTemplate" does not exist.', 43, $this->source); })()), "@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig", 43)->display(twig_array_merge($context, ["slugField" => twig_get_attribute($this->env, $this->source, $context["translationForm"], "slug", [], "any", false, false, false, 43), "resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 43, $this->source); })())]));
                        // line 44
                        echo "                        ";
                    } elseif (("image" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44))) {
                        // line 45
                        echo "                            ";
                        echo twig_call_macro($macros["image"], "macro_imageWidget", [$context["field"]], 45, $context, $this->getSourceContext());
                        echo "
                        ";
                    } else {
                        // line 47
                        echo "                            ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                        echo "
                        ";
                    }
                    // line 49
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                </div>
            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 54,  314 => 51,  299 => 49,  293 => 47,  287 => 45,  284 => 44,  281 => 43,  279 => 42,  276 => 41,  259 => 40,  253 => 39,  246 => 37,  239 => 35,  234 => 34,  217 => 33,  213 => 31,  210 => 30,  207 => 29,  186 => 28,  170 => 25,  154 => 22,  147 => 20,  141 => 18,  135 => 16,  133 => 15,  130 => 14,  126 => 13,  120 => 12,  113 => 10,  106 => 8,  101 => 7,  84 => 6,  80 => 4,  77 => 3,  74 => 2,  54 => 1,  43 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro translationForm(translations, resource) %}
    {% import '@BitBagSyliusCmsPlugin/Macro/imageWidget.html.twig' as image %}
    {% import '@SyliusUi/Macro/flags.html.twig' as flags %}

    <div class=\"ui styled fluid accordion\">
        {% for locale, translationForm in translations %}
            <div data-locale=\"{{ locale }}\">
                <div class=\"title{% if 0 == loop.index0 %} active{% endif %}\">
                    <i class=\"dropdown icon\"></i>
                    {{ flags.fromLocaleCode(locale) }} {{ locale|sylius_locale_name }}
                </div>
                <div class=\"ui content{% if 0 == loop.index0 %} active{% endif %}\">
                    {% for field in translationForm %}

                        {% if 'image' == field.vars.name %}
                            {{ image.imageWidget(field) }}
                        {% else %}
                            {{ form_row(field) }}
                        {% endif %}

                    {% endfor %}
                </div>
            </div>
        {% endfor %}
    </div>
{% endmacro %}

{% macro translationFormWithSlug(translations, slugFieldTemplate, resource) %}
    {% import '@BitBagSyliusCmsPlugin/Macro/imageWidget.html.twig' as image %}
    {% import '@SyliusUi/Macro/flags.html.twig' as flags %}

    <div class=\"ui styled fluid accordion\">
        {% for locale, translationForm in translations %}
            <div data-locale=\"{{ locale }}\">
                <div class=\"title{% if 0 == loop.index0 %} active{% endif %}\">
                    <i class=\"dropdown icon\"></i>
                    {{ flags.fromLocaleCode(locale) }} {{ locale|sylius_locale_name }}
                </div>
                <div class=\"ui content{% if 0 == loop.index0 %} active{% endif %}\">
                    {% for field in translationForm %}

                        {% if field.vars.name == 'slug' %}
                            {% include slugFieldTemplate with { 'slugField': translationForm.slug, 'resource': resource } %}
                        {% elseif 'image' == field.vars.name %}
                            {{ image.imageWidget(field) }}
                        {% else %}
                            {{ form_row(field) }}
                        {% endif %}

                    {% endfor %}
                </div>
            </div>
        {% endfor %}
    </div>
{% endmacro %}", "@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Macro/translationForm.html.twig");
    }
}
