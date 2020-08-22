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

/* SyliusAdminBundle:Promotion/Grid/Field:usage.html.twig */
class __TwigTemplate_2027476c59a1b379d28dbff587e2eeacd78f37e37a9b70a651f480ccee77fd6d extends \Twig\Template
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "usageLimit", [], "any", false, false, false, 1))) {
            // line 2
            echo "    <span class=\"ui label\">
        ";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "used", [], "any", false, false, false, 3), "html", null, true);
            echo "
    </span>
    /
    <span class=\"ui label\">∞</span>
";
        } else {
            // line 8
            echo "    ";
            $context["color"] = "teal";
            // line 9
            echo "
    ";
            // line 10
            if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "used", [], "any", false, false, false, 10) == twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "usageLimit", [], "any", false, false, false, 10))) {
                // line 11
                echo "        ";
                $context["color"] = "red";
                // line 12
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "used", [], "any", false, false, false, 12) > (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "usageLimit", [], "any", false, false, false, 12) / 2))) {
                // line 13
                echo "        ";
                $context["color"] = "yellow";
                // line 14
                echo "    ";
            }
            // line 15
            echo "    <span class=\"ui ";
            echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo " label\">
        ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "used", [], "any", false, false, false, 16), "html", null, true);
            echo "
    </span>
    /
    <span class=\"ui ";
            // line 19
            echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo " label\">
        ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "usageLimit", [], "any", false, false, false, 20), "html", null, true);
            echo "
    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Promotion/Grid/Field:usage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 20,  81 => 19,  75 => 16,  70 => 15,  67 => 14,  64 => 13,  61 => 12,  58 => 11,  56 => 10,  53 => 9,  50 => 8,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Promotion/Grid/Field:usage.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Promotion/Grid/Field/usage.html.twig");
    }
}
