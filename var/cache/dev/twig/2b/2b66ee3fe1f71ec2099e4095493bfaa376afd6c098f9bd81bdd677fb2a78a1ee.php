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

/* @SyliusAdmin/Product/Tab/_details.html.twig */
class __TwigTemplate_55aacfaee2af2326455453c2a9898cf29c4ef6a2b08323fe77748194aa1bd9ee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_details.html.twig"));

        // line 1
        $macros["__internal_9416b9634fdc577b825c7692949bd3341a3d12718e70326e4917575c4e89ab49"] = $this->macros["__internal_9416b9634fdc577b825c7692949bd3341a3d12718e70326e4917575c4e89ab49"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "@SyliusAdmin/Product/Tab/_details.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"ui active tab\" data-tab=\"details\">
    <h3 class=\"ui top attached header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.details"), "html", null, true);
        echo "</h3>

    <div class=\"ui attached segment\">
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'errors');
        echo "

        <div class=\"ui two column stackable grid\">
            <div class=\"column\">
                <div class=\"ui segment\">
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "code", [], "any", false, false, false, 12), 'row');
        echo "
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "enabled", [], "any", false, false, false, 13), 'row');
        echo "
                    ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "simple", [], "any", false, false, false, 14)) {
            // line 15
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "variant", [], "any", false, false, false, 15), "shippingRequired", [], "any", false, false, false, 15), 'row');
            echo "
                    ";
        } else {
            // line 17
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "options", [], "any", false, false, false, 17), 'row');
            echo "
                        ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "variantSelectionMethod", [], "any", false, false, false, 18), 'row');
            echo "
                    ";
        }
        // line 20
        echo "
                    ";
        // line 22
        echo "                    <div class=\"ui hidden element\">
                        ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "simple", [], "any", false, false, false, 23)) {
            // line 24
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "variant", [], "any", false, false, false, 24), "translations", [], "any", false, false, false, 24), 'row');
            echo "
                        ";
        }
        // line 26
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "variantSelectionMethod", [], "any", false, false, false, 26), 'row');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"column\">
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "channels", [], "any", false, false, false, 31), 'row');
        echo "

                ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "simple", [], "any", false, false, false, 33)) {
            // line 34
            echo "                    <h4 class=\"ui dividing header\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pricing"), "html", null, true);
            echo "</h4>
                    ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "variant", [], "any", false, false, false, 35), "channelPricings", [], "any", false, false, false, 35), 'row', ["label" => false]);
            echo "
                ";
        }
        // line 37
        echo "            </div>
        </div>
        <div class=\"ui hidden divider\"></div>
        ";
        // line 40
        echo twig_call_macro($macros["__internal_9416b9634fdc577b825c7692949bd3341a3d12718e70326e4917575c4e89ab49"], "macro_translationFormWithSlug", [twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "translations", [], "any", false, false, false, 40), "@SyliusAdmin/Product/_slugField.html.twig", (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })())], 40, $context, $this->getSourceContext());
        echo "
        ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 41, $this->source); })()), "simple", [], "any", false, false, false, 41)) {
            // line 42
            echo "        <div class=\"ui hidden divider\"></div>
        <div class=\"ui two column stackable grid\">
            <div class=\"column\">
                <h4 class=\"ui top attached header\">";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping"), "html", null, true);
            echo "</h4>
                <div class=\"ui attached segment\">
                    ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "variant", [], "any", false, false, false, 47), "shippingCategory", [], "any", false, false, false, 47), 'row');
            echo "
                    ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "variant", [], "any", false, false, false, 48), "width", [], "any", false, false, false, 48), 'row');
            echo "
                    ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "variant", [], "any", false, false, false, 49), "height", [], "any", false, false, false, 49), 'row');
            echo "
                    ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "variant", [], "any", false, false, false, 50), "depth", [], "any", false, false, false, 50), 'row');
            echo "
                    ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "variant", [], "any", false, false, false, 51), "weight", [], "any", false, false, false, 51), 'row');
            echo "
                </div>
            </div>
            <div class=\"column\">
                <h4 class=\"ui top attached header\">";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.taxes"), "html", null, true);
            echo "</h4>
                <div class=\"ui attached segment\">
                    ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "variant", [], "any", false, false, false, 57), "taxCategory", [], "any", false, false, false, 57), 'row');
            echo "
                </div>
            </div>
        </div>
        ";
        }
        // line 62
        echo "
        ";
        // line 63
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([0 => (("sylius.admin.product." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 63, $this->source); })())) . ".tab_details"), 1 => "sylius.admin.product.tab_details"], ["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })())]);
        echo "
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Tab/_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 63,  186 => 62,  178 => 57,  173 => 55,  166 => 51,  162 => 50,  158 => 49,  154 => 48,  150 => 47,  145 => 45,  140 => 42,  138 => 41,  134 => 40,  129 => 37,  124 => 35,  119 => 34,  117 => 33,  112 => 31,  103 => 26,  97 => 24,  95 => 23,  92 => 22,  89 => 20,  84 => 18,  79 => 17,  73 => 15,  71 => 14,  67 => 13,  63 => 12,  55 => 7,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% from '@SyliusAdmin/Macro/translationForm.html.twig' import translationFormWithSlug %}

<div class=\"ui active tab\" data-tab=\"details\">
    <h3 class=\"ui top attached header\">{{ 'sylius.ui.details'|trans }}</h3>

    <div class=\"ui attached segment\">
        {{ form_errors(form) }}

        <div class=\"ui two column stackable grid\">
            <div class=\"column\">
                <div class=\"ui segment\">
                    {{ form_row(form.code) }}
                    {{ form_row(form.enabled) }}
                    {% if product.simple %}
                        {{ form_row(form.variant.shippingRequired) }}
                    {% else %}
                        {{ form_row(form.options) }}
                        {{ form_row(form.variantSelectionMethod) }}
                    {% endif %}

                    {# Nothing to see here. #}
                    <div class=\"ui hidden element\">
                        {% if product.simple %}
                            {{ form_row(form.variant.translations) }}
                        {% endif %}
                        {{ form_row(form.variantSelectionMethod) }}
                    </div>
                </div>
            </div>
            <div class=\"column\">
                {{ form_row(form.channels) }}

                {% if product.simple %}
                    <h4 class=\"ui dividing header\">{{ 'sylius.ui.pricing'|trans }}</h4>
                    {{ form_row(form.variant.channelPricings, {'label': false}) }}
                {% endif %}
            </div>
        </div>
        <div class=\"ui hidden divider\"></div>
        {{ translationFormWithSlug(form.translations, '@SyliusAdmin/Product/_slugField.html.twig', product) }}
        {% if product.simple %}
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui two column stackable grid\">
            <div class=\"column\">
                <h4 class=\"ui top attached header\">{{ 'sylius.ui.shipping'|trans }}</h4>
                <div class=\"ui attached segment\">
                    {{ form_row(form.variant.shippingCategory) }}
                    {{ form_row(form.variant.width) }}
                    {{ form_row(form.variant.height) }}
                    {{ form_row(form.variant.depth) }}
                    {{ form_row(form.variant.weight) }}
                </div>
            </div>
            <div class=\"column\">
                <h4 class=\"ui top attached header\">{{ 'sylius.ui.taxes'|trans }}</h4>
                <div class=\"ui attached segment\">
                    {{ form_row(form.variant.taxCategory) }}
                </div>
            </div>
        </div>
        {% endif %}

        {{ sylius_template_event(['sylius.admin.product.' ~ action ~ '.tab_details', 'sylius.admin.product.tab_details'], {'form': form}) }}
    </div>
</div>
", "@SyliusAdmin/Product/Tab/_details.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Tab/_details.html.twig");
    }
}
