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

/* @SyliusAdmin/Product/Show/_taxonomy.html.twig */
class __TwigTemplate_2cd1681c4c0a5d56462462303f5391efe8f670545b5bc33e70f01d37b7daab06 extends \Twig\Template
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
        echo "<div id=\"taxonomy\">
    <h4 class=\"ui top attached large header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.taxonomy"), "html", null, true);
        echo "</h4>
    <div class=\"ui attached segment\">
        <table class=\"ui very basic celled table\">
            <tbody>
            ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "mainTaxon", [], "any", false, false, false, 6) != null)) {
            // line 7
            echo "                <tr>
                    <td class=\"five wide\"><strong class=\"gray text\">";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.main_taxon"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "mainTaxon", [], "any", false, false, false, 9), "getFullName", [], "any", false, false, false, 9), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        // line 12
        echo "            <tr>
                <td class=\"five wide\"><strong class=\"gray text\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.product_taxons"), "html", null, true);
        echo "</strong></td>
                <td>
                    <ul class=\"ui bulleted list\">
                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "productTaxons", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["productTaxon"]) {
            // line 17
            echo "                            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productTaxon"], "getTaxon", [], "any", false, false, false, 17), "getFullName", [], "any", false, false, false, 17), "html", null, true);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productTaxon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                    </ul>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Show/_taxonomy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  75 => 17,  71 => 16,  65 => 13,  62 => 12,  56 => 9,  52 => 8,  49 => 7,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Product/Show/_taxonomy.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_taxonomy.html.twig");
    }
}
