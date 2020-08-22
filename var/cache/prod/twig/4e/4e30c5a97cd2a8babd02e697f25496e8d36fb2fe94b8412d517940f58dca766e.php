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

/* SyliusAdminBundle:ProductVariant/Grid/Field:name.html.twig */
class __TwigTemplate_e3551fbe20ee78adf54886689af7f058b6e481db9e9a6baa8fd5683d9b16a99d extends \Twig\Template
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
        echo "<span class=\"ui small header\">
    ";
        // line 2
        $context["product"] = twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name", [], "any", false, false, false, 3))) ? (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 3)) : (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name", [], "any", false, false, false, 3))), "html", null, true);
        echo "
</span>
";
        // line 5
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "optionValues", [], "any", false, false, false, 5)) > 0)) {
            // line 6
            echo "    <br>
    <div class=\"ui horizontal divided list\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "optionValues", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                // line 9
                echo "            <div class=\"item\">
                ";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionValue"], "value", [], "any", false, false, false, 10), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Grid/Field:name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 13,  61 => 10,  58 => 9,  54 => 8,  50 => 6,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:ProductVariant/Grid/Field:name.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Grid/Field/name.html.twig");
    }
}
