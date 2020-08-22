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

/* @SyliusAdmin/Product/Show/_pricing.html.twig */
class __TwigTemplate_89689c36adf7b4abb6f0364cbeedb648e1d5141d90d26b2d8e78ca75fe62af4e extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Product/Show/_pricing.html.twig", 1)->unwrap();
        // line 2
        echo "<div id=\"pricing\">
    <h4 class=\"ui top attached large header\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pricing"), "html", null, true);
        echo "</h4>
    <div class=\"ui attached segment\">
        <table id=\"pricing\" class=\"ui very basic celled table\">
            <thead>
                <tr>
                    <th><strong class=\"gray text\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.channels"), "html", null, true);
        echo "</strong></th>
                    <th><strong class=\"gray text\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.price"), "html", null, true);
        echo "</strong></th>
                    <th><strong class=\"gray text\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.original_price"), "html", null, true);
        echo "</strong></th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 14), "first", [], "any", false, false, false, 14), "channelPricings", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["channelPricing"]) {
            // line 15
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "channels", [], "any", false, false, false, 15), "first", [], "any", false, false, false, 15) != false)) {
                // line 16
                echo "                    <tr>
                        <td class=\"five wide gray text\">
                            <strong>";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Sylius\Bundle\AdminBundle\Twig\ChannelNameExtension']->getChannelNameByCode(twig_get_attribute($this->env, $this->source, $context["channelPricing"], "channelCode", [], "any", false, false, false, 18)), "html", null, true);
                echo " </strong>
                        </td>
                        <td>";
                // line 20
                echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, $context["channelPricing"], "price", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "channels", [], "any", false, false, false, 20), "first", [], "any", false, false, false, 20), "baseCurrency", [], "any", false, false, false, 20)], 20, $context, $this->getSourceContext());
                echo "</td>
                        ";
                // line 21
                if ((twig_get_attribute($this->env, $this->source, $context["channelPricing"], "originalPrice", [], "any", false, false, false, 21) != null)) {
                    // line 22
                    echo "                            <td>";
                    echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, $context["channelPricing"], "originalPrice", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "channels", [], "any", false, false, false, 22), "first", [], "any", false, false, false, 22), "baseCurrency", [], "any", false, false, false, 22)], 22, $context, $this->getSourceContext());
                    echo "</td>
                        ";
                } else {
                    // line 24
                    echo "                            <td>-</td>
                        ";
                }
                // line 26
                echo "                    </tr>
                ";
            }
            // line 28
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channelPricing'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </tbody>
        </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Show/_pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 29,  101 => 28,  97 => 26,  93 => 24,  87 => 22,  85 => 21,  81 => 20,  76 => 18,  72 => 16,  69 => 15,  65 => 14,  58 => 10,  54 => 9,  50 => 8,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Product/Show/_pricing.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_pricing.html.twig");
    }
}
