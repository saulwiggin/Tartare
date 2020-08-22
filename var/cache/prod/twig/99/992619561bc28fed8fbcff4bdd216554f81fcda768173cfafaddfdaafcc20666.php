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

/* SyliusUiBundle:Grid:_history.html.twig */
class __TwigTemplate_cf7e96e4ed90af9b5d4790c7c5abdd0678ba342ab9daa97b7498f73a48b28fd2 extends \Twig\Template
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
        $macros["table"] = $this->macros["table"] = $this->loadTemplate("@SyliusUi/Macro/table.html.twig", "SyliusUiBundle:Grid:_history.html.twig", 1)->unwrap();
        // line 2
        $macros["messages"] = $this->macros["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusUiBundle:Grid:_history.html.twig", 2)->unwrap();
        // line 3
        echo "
";
        // line 4
        $context["definition"] = twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "definition", [], "any", false, false, false, 4);
        // line 5
        $context["data"] = twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", [], "any", false, false, false, 5);
        // line 6
        echo "
";
        // line 7
        if ((twig_length_filter($this->env, ($context["data"] ?? null)) > 0)) {
            // line 8
            echo "    <table class=\"ui stackable celled table\">
        <thead>
            <tr>
                ";
            // line 11
            echo twig_call_macro($macros["table"], "macro_headers", [($context["resources"] ?? null), ($context["definition"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 11), "attributes", [], "any", false, false, false, 11)], 11, $context, $this->getSourceContext());
            echo "
            </tr>
        </thead>
        <tbody>
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 16
                echo "                ";
                echo twig_call_macro($macros["table"], "macro_row", [($context["resources"] ?? null), ($context["definition"] ?? null), $context["row"]], 16, $context, $this->getSourceContext());
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        </tbody>
    </table>
";
        } else {
            // line 21
            echo "    ";
            echo twig_call_macro($macros["messages"], "macro_info", ["sylius.ui.no_results_to_display"], 21, $context, $this->getSourceContext());
            echo "
";
        }
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid:_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 23,  83 => 21,  78 => 18,  69 => 16,  65 => 15,  58 => 11,  53 => 8,  51 => 7,  48 => 6,  46 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusUiBundle:Grid:_history.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/_history.html.twig");
    }
}
