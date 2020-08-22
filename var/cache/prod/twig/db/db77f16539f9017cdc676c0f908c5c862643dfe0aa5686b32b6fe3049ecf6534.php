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

/* SyliusShopBundle:Product/Show:_variants.html.twig */
class __TwigTemplate_e9438919f22e6a3d31c4433c412628204bf9e78794b44d8317d074dde5b89cc4 extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Product/Show:_variants.html.twig", 1)->unwrap();
        // line 2
        echo "
<table class=\"ui single line small table\" id=\"sylius-product-variants\" ";
        // line 3
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-variants"]);
        echo ">
    <thead>
    <tr>
        <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.variant"), "html", null, true);
        echo "</th>
        <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.price"), "html", null, true);
        echo "</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["key"] => $context["variant"]) {
            // line 13
            echo "        <tr>
            <td>
                ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variant"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "
                ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "hasOptions", [], "method", false, false, false, 16)) {
                // line 17
                echo "                    <div class=\"ui horizontal divided list\">
                        ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["variant"], "optionValues", [], "any", false, false, false, 18));
                foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                    // line 19
                    echo "                            <div class=\"item\">
                                ";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionValue"], "value", [], "any", false, false, false, 20), "html", null, true);
                    echo "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                    </div>
                ";
            }
            // line 25
            echo "            </td>
            <td class=\"sylius-product-variant-price\">";
            // line 26
            echo twig_call_macro($macros["money"], "macro_calculatePrice", [$context["variant"]], 26, $context, $this->getSourceContext());
            echo "</td>
            <td class=\"right aligned\">
                ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cartItem", [], "any", false, false, false, 28), "variant", [], "any", false, false, false, 28)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null), 'widget', ["label" => false]);
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['variant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_variants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 32,  105 => 28,  100 => 26,  97 => 25,  93 => 23,  84 => 20,  81 => 19,  77 => 18,  74 => 17,  72 => 16,  68 => 15,  64 => 13,  60 => 12,  52 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Product/Show:_variants.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_variants.html.twig");
    }
}
