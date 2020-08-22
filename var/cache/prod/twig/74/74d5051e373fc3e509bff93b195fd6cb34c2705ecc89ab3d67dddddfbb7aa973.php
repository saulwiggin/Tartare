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

/* @SyliusAdmin/ShippingMethod/_form.html.twig */
class __TwigTemplate_2c32189ee4c971114ceff84b6f117897b1235152753d2eb34c89d88988ddda1d extends \Twig\Template
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
        $macros["__internal_45a4210e96fd13772fc9d41bfb6d1a7410fe1a9d59e7481cb5ab359cfffb73db"] = $this->macros["__internal_45a4210e96fd13772fc9d41bfb6d1a7410fe1a9d59e7481cb5ab359cfffb73db"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "@SyliusAdmin/ShippingMethod/_form.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <div class=\"ui segment\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            <div class=\"three fields\">
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, false, false, 8), 'row');
        echo "
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "zone", [], "any", false, false, false, 9), 'row');
        echo "
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "position", [], "any", false, false, false, 10), 'row');
        echo "
            </div>
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "enabled", [], "any", false, false, false, 12), 'row');
        echo "
            <h4 class=\"ui dividing header\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.availability"), "html", null, true);
        echo "</h4>
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "channels", [], "any", false, false, false, 14), 'row');
        echo "
            <h4 class=\"ui dividing header\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.category_requirements"), "html", null, true);
        echo "</h4>
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", [], "any", false, false, false, 16), 'row');
        echo "
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "categoryRequirement", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["categoryRequirementChoiceForm"]) {
            // line 18
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["categoryRequirementChoiceForm"], 'row');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryRequirementChoiceForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            <h4 class=\"ui dividing header\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.taxes"), "html", null, true);
        echo "</h4>
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taxCategory", [], "any", false, false, false, 21), 'row');
        echo "
            <h4 class=\"ui dividing header\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_charges"), "html", null, true);
        echo "</h4>
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "calculator", [], "any", false, false, false, 23), 'row');
        echo "
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 24), "prototypes", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["name"] => $context["calculatorConfigurationPrototype"]) {
            // line 25
            echo "                <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "calculator", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" data-container=\".configuration\"
                     data-prototype=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["calculatorConfigurationPrototype"], 'widget'));
            echo "\">
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['calculatorConfigurationPrototype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            <div class=\"ui segment configuration\">
                ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "configuration", [], "any", true, true, false, 30)) {
            // line 31
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "configuration", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 32
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                ";
        }
        // line 35
        echo "            </div>
        </div>
    </div>
    <div class=\"column\">
        ";
        // line 39
        echo twig_call_macro($macros["__internal_45a4210e96fd13772fc9d41bfb6d1a7410fe1a9d59e7481cb5ab359cfffb73db"], "macro_translationForm", [twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "translations", [], "any", false, false, false, 39)], 39, $context, $this->getSourceContext());
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/ShippingMethod/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 39,  155 => 35,  152 => 34,  143 => 32,  138 => 31,  136 => 30,  133 => 29,  124 => 26,  117 => 25,  113 => 24,  109 => 23,  105 => 22,  101 => 21,  96 => 20,  87 => 18,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  67 => 13,  63 => 12,  58 => 10,  54 => 9,  50 => 8,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/ShippingMethod/_form.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ShippingMethod/_form.html.twig");
    }
}
