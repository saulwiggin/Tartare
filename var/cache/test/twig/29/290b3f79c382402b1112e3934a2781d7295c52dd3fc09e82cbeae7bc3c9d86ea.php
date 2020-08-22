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

/* @SyliusAdmin/Channel/_form.html.twig */
class __TwigTemplate_cdd03162c60b7733a09029f1daf76a18c653a8e8ae36eaa44cd4968cdc837457 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Channel/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Channel/_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'errors');
        echo "
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <h4 class=\"ui top attached large header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.general"), "html", null, true);
        echo "</h4>
        <div class=\"ui attached segment\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'errors');
        echo "
            <div class=\"fields\">
                <div class=\"six wide field\">
                    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "code", [], "any", false, false, false, 9), 'row');
        echo "
                </div>
                <div class=\"seven wide field\">
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), 'row');
        echo "
                </div>
                <div class=\"three wide field\">
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "color", [], "any", false, false, false, 15), 'row');
        echo "
                </div>
            </div>
            <div class=\"ui hidden divider\"></div>
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "enabled", [], "any", false, false, false, 19), 'row');
        echo "
        </div>
        <div class=\"ui attached segment\">
            <div class=\"field\">
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "hostname", [], "any", false, false, false, 23), 'label');
        echo "
                <div class=\"ui labeled input\">
                    <div class=\"ui label\">http://</div>
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "hostname", [], "any", false, false, false, 26), 'widget');
        echo "
                </div>
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "hostname", [], "any", false, false, false, 28), 'errors');
        echo "
            </div>
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "contactEmail", [], "any", false, false, false, 30), 'row');
        echo "
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), 'row', ["attr" => ["rows" => "3"]]);
        echo "
        </div>
        <div class=\"ui attached segment\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "countries", [], "any", false, false, false, 34), 'row');
        echo "
        </div>
        <div class=\"ui hidden divider\"></div>
        <h4 class=\"ui top attached large header\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.money"), "html", null, true);
        echo "</h4>
        <div class=\"ui attached segment\">
            <div class=\"two fields\">
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "baseCurrency", [], "any", false, false, false, 40), 'row');
        echo "
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "currencies", [], "any", false, false, false, 41), 'row');
        echo "
            </div>
        </div>
        <div class=\"ui attached segment\">
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "defaultTaxZone", [], "any", false, false, false, 45), 'row');
        echo "
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "taxCalculationStrategy", [], "any", false, false, false, 46), 'row');
        echo "
        </div>
    </div>
    <div class=\"column\">
        <h4 class=\"ui top attached large header\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "shopBillingData", [], "any", false, false, false, 50), 'label');
        echo "</h4>
        <div class=\"ui attached segment\">
            <div class=\"two fields\">
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "shopBillingData", [], "any", false, false, false, 53), "company", [], "any", false, false, false, 53), 'row');
        echo "
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "shopBillingData", [], "any", false, false, false, 54), "taxId", [], "any", false, false, false, 54), 'row');
        echo "
            </div>
            <div class=\"two fields\">
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "shopBillingData", [], "any", false, false, false, 57), "countryCode", [], "any", false, false, false, 57), 'row');
        echo "
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "shopBillingData", [], "any", false, false, false, 58), "street", [], "any", false, false, false, 58), 'row');
        echo "
            </div>
            <div class=\"two fields\">
                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "shopBillingData", [], "any", false, false, false, 61), "city", [], "any", false, false, false, 61), 'row');
        echo "
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "shopBillingData", [], "any", false, false, false, 62), "postcode", [], "any", false, false, false, 62), 'row');
        echo "
            </div>
        </div>
        <div class=\"ui hidden divider\"></div>
        <h4 class=\"ui top attached large header\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.look_and_feel"), "html", null, true);
        echo "</h4>
        <div class=\"ui attached segment\">
            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "themeName", [], "any", false, false, false, 68), 'row');
        echo "
        </div>
        <div class=\"ui attached segment\">
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "locales", [], "any", false, false, false, 71), 'row');
        echo "
            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "defaultLocale", [], "any", false, false, false, 72), 'row');
        echo "
        </div>
        <div class=\"ui attached segment\">
            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "menuTaxon", [], "any", false, false, false, 75), 'row');
        echo "
        </div>
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui attached segment\">
            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "skippingShippingStepAllowed", [], "any", false, false, false, 79), 'row');
        echo "
            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "skippingPaymentStepAllowed", [], "any", false, false, false, 80), 'row');
        echo "
            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "accountVerificationRequired", [], "any", false, false, false, 81), 'row');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Channel/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 81,  215 => 80,  211 => 79,  204 => 75,  198 => 72,  194 => 71,  188 => 68,  183 => 66,  176 => 62,  172 => 61,  166 => 58,  162 => 57,  156 => 54,  152 => 53,  146 => 50,  139 => 46,  135 => 45,  128 => 41,  124 => 40,  118 => 37,  112 => 34,  106 => 31,  102 => 30,  97 => 28,  92 => 26,  86 => 23,  79 => 19,  72 => 15,  66 => 12,  60 => 9,  54 => 6,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_errors(form) }}
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <h4 class=\"ui top attached large header\">{{ 'sylius.ui.general'|trans }}</h4>
        <div class=\"ui attached segment\">
            {{ form_errors(form) }}
            <div class=\"fields\">
                <div class=\"six wide field\">
                    {{ form_row(form.code) }}
                </div>
                <div class=\"seven wide field\">
                    {{ form_row(form.name) }}
                </div>
                <div class=\"three wide field\">
                    {{ form_row(form.color) }}
                </div>
            </div>
            <div class=\"ui hidden divider\"></div>
            {{ form_row(form.enabled) }}
        </div>
        <div class=\"ui attached segment\">
            <div class=\"field\">
                {{ form_label(form.hostname) }}
                <div class=\"ui labeled input\">
                    <div class=\"ui label\">http://</div>
                    {{ form_widget(form.hostname) }}
                </div>
                {{ form_errors(form.hostname) }}
            </div>
            {{ form_row(form.contactEmail) }}
            {{ form_row(form.description, {'attr': {'rows' : '3'}}) }}
        </div>
        <div class=\"ui attached segment\">
            {{ form_row(form.countries) }}
        </div>
        <div class=\"ui hidden divider\"></div>
        <h4 class=\"ui top attached large header\">{{ 'sylius.ui.money'|trans }}</h4>
        <div class=\"ui attached segment\">
            <div class=\"two fields\">
                {{ form_row(form.baseCurrency) }}
                {{ form_row(form.currencies) }}
            </div>
        </div>
        <div class=\"ui attached segment\">
            {{ form_row(form.defaultTaxZone) }}
            {{ form_row(form.taxCalculationStrategy) }}
        </div>
    </div>
    <div class=\"column\">
        <h4 class=\"ui top attached large header\">{{ form_label(form.shopBillingData) }}</h4>
        <div class=\"ui attached segment\">
            <div class=\"two fields\">
                {{ form_row(form.shopBillingData.company) }}
                {{ form_row(form.shopBillingData.taxId) }}
            </div>
            <div class=\"two fields\">
                {{ form_row(form.shopBillingData.countryCode) }}
                {{ form_row(form.shopBillingData.street) }}
            </div>
            <div class=\"two fields\">
                {{ form_row(form.shopBillingData.city) }}
                {{ form_row(form.shopBillingData.postcode) }}
            </div>
        </div>
        <div class=\"ui hidden divider\"></div>
        <h4 class=\"ui top attached large header\">{{ 'sylius.ui.look_and_feel'|trans }}</h4>
        <div class=\"ui attached segment\">
            {{ form_row(form.themeName) }}
        </div>
        <div class=\"ui attached segment\">
            {{ form_row(form.locales) }}
            {{ form_row(form.defaultLocale) }}
        </div>
        <div class=\"ui attached segment\">
            {{ form_row(form.menuTaxon) }}
        </div>
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui attached segment\">
            {{ form_row(form.skippingShippingStepAllowed) }}
            {{ form_row(form.skippingPaymentStepAllowed) }}
            {{ form_row(form.accountVerificationRequired) }}
        </div>
    </div>
</div>
", "@SyliusAdmin/Channel/_form.html.twig", "/Users/drsilaswiggin/dev/e-commerce/demo/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Channel/_form.html.twig");
    }
}
