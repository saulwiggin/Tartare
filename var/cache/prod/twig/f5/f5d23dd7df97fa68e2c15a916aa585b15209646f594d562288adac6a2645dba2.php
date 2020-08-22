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

/* SyliusUiBundle:Grid/Field:label.html.twig */
class __TwigTemplate_c2a65ba7f3e223b9cee93fde71c787fcf521217fb2d44c561548b15cbe171293 extends \Twig\Template
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
        $context["value"] = ("sylius.ui." . ($context["data"] ?? null));
        // line 2
        echo "
";
        // line 3
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "vars", [], "any", false, true, false, 3), "labels", [], "any", true, true, false, 3)) {
            // line 4
            echo "    ";
            $this->loadTemplate([0 => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "vars", [], "any", false, false, false, 4), "labels", [], "any", false, false, false, 4) . "/") . ($context["data"] ?? null)) . ".html.twig"), 1 => "@SyliusUi/Label/_default.html.twig"], "SyliusUiBundle:Grid/Field:label.html.twig", 4)->display(twig_array_merge($context, ["value" => ($context["value"] ?? null)]));
        } else {
            // line 6
            echo "    ";
            $this->loadTemplate("@SyliusUi/Label/_default.html.twig", "SyliusUiBundle:Grid/Field:label.html.twig", 6)->display(twig_array_merge($context, ["value" => ($context["value"] ?? null)]));
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusUiBundle:Grid/Field:label.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Field/label.html.twig");
    }
}
