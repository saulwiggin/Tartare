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

/* @SyliusAdmin/Dashboard/_orders.html.twig */
class __TwigTemplate_dd08752b612444d72326e6468acb41a9a2ab6235da22f4b480919dd3c501eca3 extends \Twig\Template
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
        $macros["messages"] = $this->macros["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusAdmin/Dashboard/_orders.html.twig", 1)->unwrap();
        // line 2
        $macros["buttons"] = $this->macros["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusAdmin/Dashboard/_orders.html.twig", 2)->unwrap();
        // line 3
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Dashboard/_orders.html.twig", 3)->unwrap();
        // line 4
        echo "
<h3 class=\"ui top attached header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.new_orders"), "html", null, true);
        echo "</h3>
<div class=\"ui attached segment\">
    ";
        // line 7
        if ((twig_length_filter($this->env, ($context["orders"] ?? null)) > 0)) {
            // line 8
            echo "        <table class=\"ui stackable very basic table\" id=\"orders\">
            <thead>
                <th style=\"color: #ababab;\">";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order"), "html", null, true);
            echo "</th>
                <th style=\"color: #ababab;\">";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.items"), "html", null, true);
            echo "</th>
                <th style=\"color: #ababab;\">";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total"), "html", null, true);
            echo "</th>
                <th></th>
            </thead>
            <tbody>
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 17
                echo "                <tr>
                    <td>
                        <strong>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 19), "fullName", [], "any", false, false, false, 19), "html", null, true);
                echo "</strong><br>
                        <div style=\"color: #ababab;\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 20), "email", [], "any", false, false, false, 20), "html", null, true);
                echo "</div>
                    </td>
                    <td>
                        ";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "totalQuantity", [], "any", false, false, false, 23), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 26
                echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, $context["order"], "currencyCode", [], "any", false, false, false, 26)], 26, $context, $this->getSourceContext());
                echo "
                    </td>
                    <td>
                        <div class=\"ui right floated buttons\">
                            ";
                // line 30
                echo twig_call_macro($macros["buttons"], "macro_show", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_show", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 30)])], 30, $context, $this->getSourceContext());
                echo "
                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 38
            echo "        ";
            echo twig_call_macro($macros["messages"], "macro_info", ["sylius.ui.no_results_to_display"], 38, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 40
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Dashboard/_orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 40,  119 => 38,  114 => 35,  103 => 30,  96 => 26,  90 => 23,  84 => 20,  80 => 19,  76 => 17,  72 => 16,  65 => 12,  61 => 11,  57 => 10,  53 => 8,  51 => 7,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Dashboard/_orders.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_orders.html.twig");
    }
}
