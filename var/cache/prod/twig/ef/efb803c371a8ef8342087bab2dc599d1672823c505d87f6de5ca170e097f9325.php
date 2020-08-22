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

/* @SyliusAdmin/Product/Tab/_associations.html.twig */
class __TwigTemplate_ef49392d2a594c8c4ccc63a1e6580378dad9703c1728bcb9504524a7803c965a extends \Twig\Template
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
        echo "<div class=\"ui tab\" data-tab=\"associations\">
    <h3 class=\"ui top attached header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.associations"), "html", null, true);
        echo "</h3>

    <div class=\"ui attached segment\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "associations", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["associationForm"]) {
            // line 6
            echo "            <div class=\"field\">";
            // line 7
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["associationForm"], 'label');
            // line 8
            echo "<div class=\"product-select ui fluid multiple search selection dropdown\" data-url=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_product_index", ["limit" => 20]);
            echo "\">
                    ";
            // line 9
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["associationForm"], 'widget', ["attr" => ["class" => "autocomplete"]]);
            echo "
                    <i class=\"dropdown icon\"></i>
                    <div class=\"default text\">";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.select_products"), "html", null, true);
            echo "</div>
                    <div class=\"menu\">
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "associations", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
                // line 14
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["association"], "type", [], "any", false, false, false, 14), "code", [], "any", false, false, false, 14) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["associationForm"], "vars", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14))) {
                    // line 15
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["association"], "associatedProducts", [], "any", false, false, false, 15));
                    foreach ($context['_seq'] as $context["_key"] => $context["associatedProduct"]) {
                        // line 16
                        echo "                                    <div class=\"item\" data-value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["associatedProduct"], "code", [], "any", false, false, false, 16), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["associatedProduct"], "name", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["associatedProduct"], "name", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, $context["associatedProduct"], "code", [], "any", false, false, false, 16))) : (twig_get_attribute($this->env, $this->source, $context["associatedProduct"], "code", [], "any", false, false, false, 16))), "html", null, true);
                        echo "</div>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['associatedProduct'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 18
                    echo "                            ";
                }
                // line 19
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                    </div>
                </div>
                ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["associationForm"], 'errors');
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['associationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
        ";
        // line 26
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([0 => (("sylius.admin.product." . ($context["action"] ?? null)) . ".tab_associations"), 1 => "sylius.admin.product.tab_associations"], ["form" => ($context["form"] ?? null)]);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Tab/_associations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 26,  114 => 25,  105 => 22,  101 => 20,  95 => 19,  92 => 18,  81 => 16,  76 => 15,  73 => 14,  69 => 13,  64 => 11,  59 => 9,  54 => 8,  52 => 7,  50 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Product/Tab/_associations.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Tab/_associations.html.twig");
    }
}
