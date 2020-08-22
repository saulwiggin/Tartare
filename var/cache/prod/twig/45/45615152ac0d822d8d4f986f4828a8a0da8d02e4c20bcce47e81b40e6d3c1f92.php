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

/* @SyliusAdmin/ProductVariant/Tab/_details.html.twig */
class __TwigTemplate_c997c007afbc9f5168c1f166a55cc55377a3231cf6e697fc7d47ba5f340cd4e7 extends \Twig\Template
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
        $macros["__internal_826c5e983ece3b0c860596dec52d1b0f0a7415a02fd6e36ed02b1a0943846bf4"] = $this->macros["__internal_826c5e983ece3b0c860596dec52d1b0f0a7415a02fd6e36ed02b1a0943846bf4"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "@SyliusAdmin/ProductVariant/Tab/_details.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"ui active tab\" data-tab=\"details\">
    <h3 class=\"ui dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.details"), "html", null, true);
        echo "</h3>

    <div class=\"ui segments\">
        ";
        // line 7
        echo twig_call_macro($macros["__internal_826c5e983ece3b0c860596dec52d1b0f0a7415a02fd6e36ed02b1a0943846bf4"], "macro_translationForm", [twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "translations", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
        echo "
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, false, false, 10), 'row');
        echo "
            <div class=\"two fields\">
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shippingCategory", [], "any", false, false, false, 12), 'row');
        echo "
            </div>
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "channelPricings", [], "any", false, false, false, 14), 'row');
        echo "
        </div>
        <div class=\"ui segment\">
            <div class=\"one field\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shippingRequired", [], "any", false, false, false, 18), 'row');
        echo "
            </div>
        </div>
        ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "optionValues", [], "any", true, true, false, 21) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "optionValues", [], "any", false, false, false, 21)) > 0))) {
            // line 22
            echo "        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.options"), "html", null, true);
            echo "</h4>
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "optionValues", [], "any", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["option_form"]) {
                // line 26
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["option_form"], 'row');
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </div>
        ";
        }
        // line 30
        echo "        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.properties"), "html", null, true);
        echo "</h4>
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "height", [], "any", false, false, false, 33), 'row');
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "width", [], "any", false, false, false, 34), 'row');
        echo "
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "depth", [], "any", false, false, false, 35), 'row');
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weight", [], "any", false, false, false, 36), 'row');
        echo "
        </div>
    </div>

    ";
        // line 40
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([0 => (("sylius.admin.product_variant." . ($context["action"] ?? null)) . ".tab_details"), 1 => "sylius.admin.product_variant.tab_details"], ["form" => ($context["form"] ?? null)]);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/ProductVariant/Tab/_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 40,  125 => 36,  121 => 35,  117 => 34,  113 => 33,  109 => 32,  105 => 30,  101 => 28,  92 => 26,  88 => 25,  84 => 24,  80 => 22,  78 => 21,  72 => 18,  65 => 14,  60 => 12,  55 => 10,  49 => 7,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/ProductVariant/Tab/_details.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Tab/_details.html.twig");
    }
}
