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

/* SyliusAdminBundle:Product/Show:_variantItem.html.twig */
class __TwigTemplate_179326b16fa7ce9430f4eac3d6f3b2706cc555f38b33d28737a6b9390120e0de extends \Twig\Template
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
        echo "<tr class=\"variants-accordion__title item-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
    <td class=\"center aligned\">
        <button class=\"ui basic icon button\" style=\"box-shadow: none\">
            <i class=\"counterclockwise rotated dropdown icon\"></i>
        </button>
    </td>
    <td>
        <div class=\"ui items\">
            <div class=\"item\">
                <div class=\"ui tiny image\">
                    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "hasImages", [], "any", false, false, false, 11)) {
            // line 12
            echo "                        ";
            $this->loadTemplate("@SyliusAdmin/Product/_mainImage.html.twig", "SyliusAdminBundle:Product/Show:_variantItem.html.twig", 12)->display(twig_array_merge($context, ["product" => ($context["variant"] ?? null), "filter" => "sylius_admin_product_large_thumbnail"]));
            // line 13
            echo "                    ";
        } else {
            // line 14
            echo "                        ";
            $this->loadTemplate("@SyliusAdmin/Product/_mainImage.html.twig", "SyliusAdminBundle:Product/Show:_variantItem.html.twig", 14)->display(twig_array_merge($context, ["product" => ($context["product"] ?? null), "filter" => "sylius_admin_product_large_thumbnail"]));
            // line 15
            echo "                    ";
        }
        // line 16
        echo "                </div>
                <div class=\"middle aligned content\">
                    <div><strong class=\"variant-name\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "product", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</strong></div>
                    <small class=\"gray text variant-code\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "code", [], "any", false, false, false, 19), "html", null, true);
        echo "</small>
                </div>
            </div>
        </div>
    </td>
    <td>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "optionValues", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
            // line 26
            echo "            <div><span class=\"gray text\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["optionValue"], "option", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            echo ":</span> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionValue"], "value", [], "any", false, false, false, 26), "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </td>
    <td>
        ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "tracked", [], "any", false, false, false, 30)) {
            // line 31
            echo "            <span class=\"ui teal label\"><i class=\"checkmark icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tracked"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 33
            echo "            <span class=\"ui red label\"><i class=\"remove icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.not_tracked"), "html", null, true);
            echo "</span>
        ";
        }
        // line 35
        echo "    </td>
    <td>
        ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "shippingRequired", [], "any", false, false, false, 37)) {
            // line 38
            echo "            <span class=\"ui teal label\"><i class=\"checkmark icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_required"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 40
            echo "            <span class=\"ui orange label\"><i class=\"remove icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_not_required"), "html", null, true);
            echo "</span>
        ";
        }
        // line 42
        echo "    </td>
    <td>
        ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "taxCategory", [], "any", false, false, false, 44)) {
            // line 45
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "taxCategory", [], "any", false, false, false, 45), "html", null, true);
            echo "
        ";
        } else {
            // line 47
            echo "            <div class=\"gray text\">-</div>
        ";
        }
        // line 49
        echo "    </td>
    <td class=\"current-stock\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "onHand", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
    <td>
        <a class=\"ui labeled icon button edit-variant\" style=\"padding-right: 15px;\" href= ";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_variant_update", ["productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "product", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "id" => twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "id", [], "any", false, false, false, 52)]), "html", null, true);
        echo ">
            <i class=\"edit icon\"></i>
            ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit"), "html", null, true);
        echo "
        </a>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Show:_variantItem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 54,  157 => 52,  152 => 50,  149 => 49,  145 => 47,  139 => 45,  137 => 44,  133 => 42,  127 => 40,  121 => 38,  119 => 37,  115 => 35,  109 => 33,  103 => 31,  101 => 30,  97 => 28,  86 => 26,  82 => 25,  73 => 19,  69 => 18,  65 => 16,  62 => 15,  59 => 14,  56 => 13,  53 => 12,  51 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Product/Show:_variantItem.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_variantItem.html.twig");
    }
}
