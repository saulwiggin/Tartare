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

/* @SyliusAdmin/Product/Show/_variantContentShipping.html.twig */
class __TwigTemplate_e17d0318e9ef25df92bbcb80f614fd27c1b7a9a2d346d8d5af75edf9faa883d7 extends \Twig\Template
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
        echo "<div class=\"ui segment\">
    <div class=\"ui small header\">
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping"), "html", null, true);
        echo "
    </div>
    ";
        // line 5
        if ((((((twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "shippingCategory", [], "any", false, false, false, 5) === null) && (twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "width", [], "any", false, false, false, 5) === null)) && (twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "height", [], "any", false, false, false, 5) === null)) && (twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "depth", [], "any", false, false, false, 5) === null)) && (twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "weight", [], "any", false, false, false, 5) === null))) {
            // line 6
            echo "        <div class=\"ui teal message\">
            <p>";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_shipping_data"), "html", null, true);
            echo "</p>
        </div>
    ";
        } else {
            // line 10
            echo "        <table class=\"ui very basic celled table\">
            <tbody>
            <tr>
                <td class=\"five wide gray text\"><strong>";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_category"), "html", null, true);
            echo "</strong></td>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "shippingCategory", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td class=\"five wide gray text\"><strong>";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.width"), "html", null, true);
            echo "</strong></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "width", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td class=\"five wide gray text\"><strong>";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.height"), "html", null, true);
            echo "</strong></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "height", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td class=\"five wide gray text\"><strong>";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.depth"), "html", null, true);
            echo "</strong></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "depth", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td class=\"five wide gray text\"><strong>";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.weight"), "html", null, true);
            echo "</strong></td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "weight", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
            </tr>
            </tbody>
        </table>
    ";
        }
        // line 35
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Show/_variantContentShipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 35,  106 => 30,  102 => 29,  96 => 26,  92 => 25,  86 => 22,  82 => 21,  76 => 18,  72 => 17,  66 => 14,  62 => 13,  57 => 10,  51 => 7,  48 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Product/Show/_variantContentShipping.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_variantContentShipping.html.twig");
    }
}
