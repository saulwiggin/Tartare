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

/* @SyliusAdmin/Product/Show/_details.html.twig */
class __TwigTemplate_206d71893ca4160830d2d93d75f2b571dc5f6417ddd8f87de907db3972f50c80 extends \Twig\Template
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
        echo "<div id=\"details\">
    <h4 class=\"ui top attached large header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.details"), "html", null, true);
        echo "</h4>
    <div class=\"ui attached segment\">
        <div>
            ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "enabled", [], "any", false, false, false, 5)) {
            // line 6
            echo "                <span class=\"ui teal label\"><i class=\"checkmark icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.enabled"), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 8
            echo "                <span class=\"ui red label\"><i class=\"remove icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.disabled"), "html", null, true);
            echo "</span>
            ";
        }
        // line 10
        echo "
            ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 11), "first", [], "any", false, false, false, 11), "tracked", [], "any", false, false, false, 11)) {
            // line 12
            echo "                <span class=\"ui teal label\"><i class=\"checkmark icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tracked"), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 14
            echo "                <span class=\"ui red label\"><i class=\"remove icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.not_tracked"), "html", null, true);
            echo "</span>
            ";
        }
        // line 16
        echo "
            ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 17), "first", [], "any", false, false, false, 17), "shippingRequired", [], "any", false, false, false, 17)) {
            // line 18
            echo "                <span class=\"ui teal label\"><i class=\"checkmark icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_required"), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 20
            echo "                <span class=\"ui orange label\"><i class=\"remove icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_not_required"), "html", null, true);
            echo "</span>
            ";
        }
        // line 22
        echo "
            <table class=\"ui very basic celled table\">
                <tbody>
                <tr>
                    <td class=\"five wide\"><strong class=\"gray text\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.code"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "code", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td class=\"five wide\"><strong class=\"gray text\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.channels"), "html", null, true);
        echo "</strong></td>
                    <td>
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "channels", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 33
            echo "                            <div>
                                <span class=\"ui large empty horizontal circular label\" style=\"background-color: ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "color", [], "any", false, false, false, 34), "html", null, true);
            echo "\"></span>
                                <span class=\"channel-name\">";
            // line 35
            echo twig_escape_filter($this->env, $context["channel"], "html", null, true);
            echo "</span>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    </td>
                </tr>
                <tr>
                    <td class=\"five wide\"><strong class=\"gray text\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.current_stock"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 42), "first", [], "any", false, false, false, 42), "onHand", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td class=\"five wide\"><strong class=\"gray text\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tax_category"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 46), "first", [], "any", false, false, false, 46), "taxCategory", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Show/_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 46,  150 => 45,  144 => 42,  140 => 41,  135 => 38,  126 => 35,  122 => 34,  119 => 33,  115 => 32,  110 => 30,  104 => 27,  100 => 26,  94 => 22,  88 => 20,  82 => 18,  80 => 17,  77 => 16,  71 => 14,  65 => 12,  63 => 11,  60 => 10,  54 => 8,  48 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Product/Show/_details.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_details.html.twig");
    }
}
