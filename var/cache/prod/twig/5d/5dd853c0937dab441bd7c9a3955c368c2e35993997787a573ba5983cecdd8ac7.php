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

/* @SyliusAdmin/Dashboard/_customers.html.twig */
class __TwigTemplate_c7d551c64519434417362dfa83ed95cc78835c8176a476e8e669d5efe5da55d9 extends \Twig\Template
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
        $macros["messages"] = $this->macros["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusAdmin/Dashboard/_customers.html.twig", 1)->unwrap();
        // line 2
        $macros["buttons"] = $this->macros["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusAdmin/Dashboard/_customers.html.twig", 2)->unwrap();
        // line 3
        $macros["labels"] = $this->macros["labels"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "@SyliusAdmin/Dashboard/_customers.html.twig", 3)->unwrap();
        // line 4
        echo "
<h3 class=\"ui top attached header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.new_customers"), "html", null, true);
        echo "</h3>
<div class=\"ui attached segment\">
    ";
        // line 7
        if ((twig_length_filter($this->env, ($context["customers"] ?? null)) > 0)) {
            // line 8
            echo "        <table class=\"ui stackable very basic table\" id=\"customers\">
            <thead>
                <th style=\"color: #ababab;\">";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.name"), "html", null, true);
            echo "</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 16
                echo "                <tr>
                    <td>
                        <strong>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "fullName", [], "any", false, false, false, 18), "html", null, true);
                echo "</strong><br>
                        <div style=\"color: #ababab;\">";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 19), "html", null, true);
                echo "</div>
                    </td>
                    <td>
                        ";
                // line 22
                if ((null === twig_get_attribute($this->env, $this->source, $context["customer"], "user", [], "any", false, false, false, 22))) {
                    // line 23
                    echo "                            <span class=\"ui icon label\">
                                <i class=\"spy icon\"></i> ";
                    // line 24
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest"), "html", null, true);
                    echo "
                            </span>
                        ";
                }
                // line 27
                echo "                    </td>
                    <td>
                        <div class=\"ui right floated buttons\">
                            ";
                // line 30
                echo twig_call_macro($macros["buttons"], "macro_show", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_customer_show", ["id" => twig_get_attribute($this->env, $this->source, $context["customer"], "id", [], "any", false, false, false, 30)])], 30, $context, $this->getSourceContext());
                echo "
                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
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
        return "@SyliusAdmin/Dashboard/_customers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 40,  115 => 38,  110 => 35,  99 => 30,  94 => 27,  88 => 24,  85 => 23,  83 => 22,  77 => 19,  73 => 18,  69 => 16,  65 => 15,  57 => 10,  53 => 8,  51 => 7,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Dashboard/_customers.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_customers.html.twig");
    }
}
