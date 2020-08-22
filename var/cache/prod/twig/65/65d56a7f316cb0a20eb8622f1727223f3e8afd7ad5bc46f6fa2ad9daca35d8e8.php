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

/* SyliusShopBundle:Cart/Widget:_popup.html.twig */
class __TwigTemplate_e83159c12855ec59c287f14ad626bb447e98fbb36d0020d51b5f37988bda5294 extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Cart/Widget:_popup.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "empty", [], "any", false, false, false, 3)) {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.your_cart_is_empty"), "html", null, true);
            echo ".
";
        } else {
            // line 6
            echo "    <div class=\"ui list\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "            <div class=\"item\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 8), "html", null, true);
                echo " x <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 8), "html", null, true);
                echo "</strong> ";
                echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 8)], 8, $context, $this->getSourceContext());
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        <div class=\"item\"><strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.subtotal"), "html", null, true);
            echo "</strong>: ";
            echo twig_call_macro($macros["money"], "macro_convertAndFormat", [twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "itemsTotal", [], "any", false, false, false, 10)], 10, $context, $this->getSourceContext());
            echo "</div>
    </div>
    <a href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_cart_summary");
            echo "\" class=\"ui fluid basic text button\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_and_edit_cart"), "html", null, true);
            echo "</a>
    <div class=\"ui divider\"></div>
    <a href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_start");
            echo "\" class=\"ui fluid primary button\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.checkout"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Widget:_popup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 14,  78 => 12,  70 => 10,  57 => 8,  53 => 7,  50 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Cart/Widget:_popup.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Widget/_popup.html.twig");
    }
}
