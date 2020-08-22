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

/* @SyliusAdmin/Customer/Grid/Field/enabled.html.twig */
class __TwigTemplate_9fb90c5be218f6a8028d25599b3dc3885603e6eabd048c59b53668cf3f725115 extends \Twig\Template
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
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", [], "any", false, false, false, 1))) {
            // line 2
            echo "    ";
            $macros["label"] = $this->macros["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "@SyliusAdmin/Customer/Grid/Field/enabled.html.twig", 2)->unwrap();
            // line 3
            echo "    ";
            echo twig_call_macro($macros["label"], "macro_status", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "user", [], "any", false, false, false, 3), "enabled", [], "any", false, false, false, 3)], 3, $context, $this->getSourceContext());
            echo "
";
        } else {
            // line 5
            echo "    <span class=\"ui icon label\">
        <i class=\"spy icon\"></i> ";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest"), "html", null, true);
            echo "
    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Customer/Grid/Field/enabled.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 6,  48 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Customer/Grid/Field/enabled.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Grid/Field/enabled.html.twig");
    }
}
