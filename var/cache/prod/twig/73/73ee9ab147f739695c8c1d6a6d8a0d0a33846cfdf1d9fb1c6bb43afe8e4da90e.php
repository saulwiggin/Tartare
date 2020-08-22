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

/* @SyliusAdmin/Product/_info.html.twig */
class __TwigTemplate_3aede1ea2abe8170f09007e157228cf17acac01f4d264dabb20a7ff71b075d93 extends \Twig\Template
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
        echo "<div class=\"ui header\">
    ";
        // line 2
        $this->loadTemplate("@SyliusAdmin/Product/_mainImage.html.twig", "@SyliusAdmin/Product/_info.html.twig", 2)->display(twig_array_merge($context, ["product" => ($context["product"] ?? null), "filter" => "sylius_admin_product_tiny_thumbnail"]));
        // line 3
        echo "    <div class=\"content\">
        <div class=\"sylius-product-name\" title=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "productName", [], "any", false, false, false, 4), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "productName", [], "any", false, false, false, 4), "html", null, true);
        echo "</div>
        <span class=\"sub header sylius-product-variant-code\" title=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "code", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "code", [], "any", false, false, false, 6), "html", null, true);
        echo "
        </span>
    </div>
</div>
";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "hasOptions", [], "method", false, false, false, 10)) {
            // line 11
            echo "    <div class=\"ui horizontal divided list sylius-product-options\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["variant"] ?? null), "optionValues", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                // line 13
                echo "            <div class=\"item\" data-sylius-option-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionValue"], "name", [], "any", false, false, false, 13), "html", null, true);
                echo "\">
                ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionValue"], "value", [], "any", false, false, false, 14), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </div>
";
        } elseif ( !(null === twig_get_attribute($this->env, $this->source,         // line 18
($context["item"] ?? null), "variantName", [], "any", false, false, false, 18))) {
            // line 19
            echo "    <div class=\"ui horizontal divided list\">
        <div class=\"item sylius-product-variant-name\">
            ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variantName", [], "any", false, false, false, 21), "html", null, true);
            echo "
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 21,  90 => 19,  88 => 18,  85 => 17,  76 => 14,  71 => 13,  67 => 12,  64 => 11,  62 => 10,  55 => 6,  51 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Product/_info.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/_info.html.twig");
    }
}
