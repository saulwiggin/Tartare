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

/* SyliusAdminBundle:Channel:_form.html.twig */
class __TwigTemplate_59885164fc3592c6f40344f48533074832c96bc63cca5923309b9a4576bb51e2 extends \Twig\Template
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
        // line 1
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            <div class=\"fields\">
                <div class=\"six wide field\">
                    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, false, false, 9), 'row');
        echo "
                </div>
                <div class=\"seven wide field\">
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 12), 'row');
        echo "
                </div>
                <div class=\"three wide field\">
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "color", [], "any", false, false, false, 15), 'row');
        echo "
                </div>
            </div>
            <div class=\"ui hidden divider\"></div>
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "enabled", [], "any", false, false, false, 19), 'row');
        echo "
        </div>
        <div class=\"ui attached segment\">
            <div class=\"field\">
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hostname", [], "any", false, false, false, 23), 'label');
        echo "
                <div class=\"ui labeled input\">
                    <div class=\"ui label\">http://</div>
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hostname", [], "any", false, false, false, 26), 'widget');
        echo "
                </div>
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hostname", [], "any", false, false, false, 28), 'errors');
        echo "
            </div>
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contactEmail", [], "any", false, false, false, 30), 'row');
        echo "
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 31), 'row', ["attr" => ["rows" => "3"]]);
        echo "
        </div>
        <div class=\"ui attached segment\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "countries", [], "any", false, false, false, 34), 'row');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "baseCurrency", [], "any", false, false, false, 40), 'row');
        echo "
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "currencies", [], "any", false, false, false, 41), 'row');
        echo "
            </div>
        </div>
        <div class=\"ui attached segment\">
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "defaultTaxZone", [], "any", false, false, false, 45), 'row');
        echo "
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taxCalculationStrategy", [], "any", false, false, false, 46), 'row');
        echo "
        </div>
    </div>
    <div class=\"column\">
        <h4 class=\"ui top attached large header\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shopBillingData", [], "any", false, false, false, 50), 'label');
        echo "</h4>
        <div class=\"ui attached segment\">
            <div class=\"two fields\">
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shopBillingData", [], "any", false, false, false, 53), "company", [], "any", false, false, false, 53), 'row');
        echo "
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shopBillingData", [], "any", false, false, false, 54), "taxId", [], "any", false, false, false, 54), 'row');
        echo "
            </div>
            <div class=\"two fields\">
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shopBillingData", [], "any", false, false, false, 57), "countryCode", [], "any", false, false, false, 57), 'row');
        echo "
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shopBillingData", [], "any", false, false, false, 58), "street", [], "any", false, false, false, 58), 'row');
        echo "
            </div>
            <div class=\"two fields\">
                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shopBillingData", [], "any", false, false, false, 61), "city", [], "any", false, false, false, 61), 'row');
        echo "
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shopBillingData", [], "any", false, false, false, 62), "postcode", [], "any", false, false, false, 62), 'row');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "themeName", [], "any", false, false, false, 68), 'row');
        echo "
        </div>
        <div class=\"ui attached segment\">
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "locales", [], "any", false, false, false, 71), 'row');
        echo "
            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "defaultLocale", [], "any", false, false, false, 72), 'row');
        echo "
        </div>
        <div class=\"ui attached segment\">
            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "menuTaxon", [], "any", false, false, false, 75), 'row');
        echo "
        </div>
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui attached segment\">
            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "skippingShippingStepAllowed", [], "any", false, false, false, 79), 'row');
        echo "
            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "skippingPaymentStepAllowed", [], "any", false, false, false, 80), 'row');
        echo "
            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "accountVerificationRequired", [], "any", false, false, false, 81), 'row');
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Channel:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 81,  209 => 80,  205 => 79,  198 => 75,  192 => 72,  188 => 71,  182 => 68,  177 => 66,  170 => 62,  166 => 61,  160 => 58,  156 => 57,  150 => 54,  146 => 53,  140 => 50,  133 => 46,  129 => 45,  122 => 41,  118 => 40,  112 => 37,  106 => 34,  100 => 31,  96 => 30,  91 => 28,  86 => 26,  80 => 23,  73 => 19,  66 => 15,  60 => 12,  54 => 9,  48 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Channel:_form.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Channel/_form.html.twig");
    }
}
