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

/* @SyliusAdmin/Product/Show/_shipping.html.twig */
class __TwigTemplate_a37590f6cbe482cf731ce4d87b9237e27ae028d19c7f5670dc03f395d0ce8c72 extends \Twig\Template
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
        echo "<div id=\"shipping\">
    <h4 class=\"ui top attached large header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping"), "html", null, true);
        echo "</h4>
    <div class=\"ui attached segment\">
        <table class=\"ui very basic celled table\">
            <tbody>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_category"), "html", null, true);
        echo "</strong></td>
                <td>";
        // line 8
        (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 8), "first", [], "any", false, false, false, 8), "shippingCategory", [], "any", false, false, false, 8))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 8), "first", [], "any", false, false, false, 8), "shippingCategory", [], "any", false, false, false, 8), "html", null, true))) : (print ("-")));
        echo "</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.width"), "html", null, true);
        echo "</strong></td>
                <td>";
        // line 12
        (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 12), "first", [], "any", false, false, false, 12), "width", [], "any", false, false, false, 12))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 12), "first", [], "any", false, false, false, 12), "width", [], "any", false, false, false, 12), "html", null, true))) : (print ("-")));
        echo "</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.height"), "html", null, true);
        echo "</strong></td>
                <td>";
        // line 16
        (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 16), "first", [], "any", false, false, false, 16), "height", [], "any", false, false, false, 16))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 16), "first", [], "any", false, false, false, 16), "height", [], "any", false, false, false, 16), "html", null, true))) : (print ("-")));
        echo "</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.depth"), "html", null, true);
        echo "</strong></td>
                <td>";
        // line 20
        (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 20), "first", [], "any", false, false, false, 20), "depth", [], "any", false, false, false, 20))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 20), "first", [], "any", false, false, false, 20), "depth", [], "any", false, false, false, 20), "html", null, true))) : (print ("-")));
        echo "</td>
            </tr>
            <tr>
                <td class=\"seven wide\"><strong class=\"gray text\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.weight"), "html", null, true);
        echo "</strong></td>
                <td>";
        // line 24
        (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 24), "first", [], "any", false, false, false, 24), "weight", [], "any", false, false, false, 24))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 24), "first", [], "any", false, false, false, 24), "weight", [], "any", false, false, false, 24), "html", null, true))) : (print ("-")));
        echo "</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Show/_shipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  88 => 23,  82 => 20,  78 => 19,  72 => 16,  68 => 15,  62 => 12,  58 => 11,  52 => 8,  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Product/Show/_shipping.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_shipping.html.twig");
    }
}
