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

/* SyliusAdminBundle:Product/Tab:_details.html.twig */
class __TwigTemplate_090cef750fffbd04c1a3e6e4886496ace3317192a1412a9cbf1d7805e695be51 extends \Twig\Template
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
        $macros["__internal_9416b9634fdc577b825c7692949bd3341a3d12718e70326e4917575c4e89ab49"] = $this->macros["__internal_9416b9634fdc577b825c7692949bd3341a3d12718e70326e4917575c4e89ab49"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "SyliusAdminBundle:Product/Tab:_details.html.twig", 1)->unwrap();
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

        <div class=\"ui two column stackable grid\">
            <div class=\"column\">
                <div class=\"ui segment\">
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, false, false, 12), 'row');
        echo "
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "enabled", [], "any", false, false, false, 13), 'row');
        echo "
                    ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "simple", [], "any", false, false, false, 14)) {
            // line 15
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "variant", [], "any", false, false, false, 15), "shippingRequired", [], "any", false, false, false, 15), 'row');
            echo "
                    ";
        } else {
            // line 17
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "options", [], "any", false, false, false, 17), 'row');
            echo "
                        ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "variantSelectionMethod", [], "any", false, false, false, 18), 'row');
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
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "simple", [], "any", false, false, false, 23)) {
            // line 24
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "variant", [], "any", false, false, false, 24), "translations", [], "any", false, false, false, 24), 'row');
            echo "
                        ";
        }
        // line 26
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "variantSelectionMethod", [], "any", false, false, false, 26), 'row');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"column\">
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "channels", [], "any", false, false, false, 31), 'row');
        echo "

                ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "simple", [], "any", false, false, false, 33)) {
            // line 34
            echo "                    <h4 class=\"ui dividing header\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pricing"), "html", null, true);
            echo "</h4>
                    ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "variant", [], "any", false, false, false, 35), "channelPricings", [], "any", false, false, false, 35), 'row', ["label" => false]);
            echo "
                ";
        }
        // line 37
        echo "            </div>
        </div>
        <div class=\"ui hidden divider\"></div>
        ";
        // line 40
        echo twig_call_macro($macros["__internal_9416b9634fdc577b825c7692949bd3341a3d12718e70326e4917575c4e89ab49"], "macro_translationFormWithSlug", [twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "translations", [], "any", false, false, false, 40), "@SyliusAdmin/Product/_slugField.html.twig", ($context["product"] ?? null)], 40, $context, $this->getSourceContext());
        echo "
        ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "simple", [], "any", false, false, false, 41)) {
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "variant", [], "any", false, false, false, 47), "shippingCategory", [], "any", false, false, false, 47), 'row');
            echo "
                    ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "variant", [], "any", false, false, false, 48), "width", [], "any", false, false, false, 48), 'row');
            echo "
                    ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "variant", [], "any", false, false, false, 49), "height", [], "any", false, false, false, 49), 'row');
            echo "
                    ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "variant", [], "any", false, false, false, 50), "depth", [], "any", false, false, false, 50), 'row');
            echo "
                    ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "variant", [], "any", false, false, false, 51), "weight", [], "any", false, false, false, 51), 'row');
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "variant", [], "any", false, false, false, 57), "taxCategory", [], "any", false, false, false, 57), 'row');
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
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([0 => (("sylius.admin.product." . ($context["action"] ?? null)) . ".tab_details"), 1 => "sylius.admin.product.tab_details"], ["form" => ($context["form"] ?? null)]);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Tab:_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 63,  180 => 62,  172 => 57,  167 => 55,  160 => 51,  156 => 50,  152 => 49,  148 => 48,  144 => 47,  139 => 45,  134 => 42,  132 => 41,  128 => 40,  123 => 37,  118 => 35,  113 => 34,  111 => 33,  106 => 31,  97 => 26,  91 => 24,  89 => 23,  86 => 22,  83 => 20,  78 => 18,  73 => 17,  67 => 15,  65 => 14,  61 => 13,  57 => 12,  49 => 7,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Product/Tab:_details.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Tab/_details.html.twig");
    }
}
