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

/* @SyliusAdmin/Crud/form_validation_errors_checker.html.twig */
class __TwigTemplate_c687f637f9554896e436b199ff0b11fb6c44e666a405b1dba829e0b43273f835 extends \Twig\Template
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
        $macros["messages"] = $this->macros["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusAdmin/Crud/form_validation_errors_checker.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 3), "valid", [], "any", false, false, false, 3) == false)) {
            // line 4
            echo "    ";
            echo twig_call_macro($macros["messages"], "macro_error", ["sylius.ui.this_message_contains_errors"], 4, $context, $this->getSourceContext());
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/form_validation_errors_checker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Crud/form_validation_errors_checker.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/form_validation_errors_checker.html.twig");
    }
}
