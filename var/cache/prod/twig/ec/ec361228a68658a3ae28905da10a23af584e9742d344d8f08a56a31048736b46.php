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

/* @BitBagSyliusCmsPlugin/Section/Crud/_form.html.twig */
class __TwigTemplate_3d07424f9646f9f04e221a2f52b745b224366f5cbb9f52e7810225266b12fa79 extends \Twig\Template
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
        $macros["__internal_509641115db435444ab6b469475149e876f0c3de7949ab6601f9e96b56c4f73f"] = $this->macros["__internal_509641115db435444ab6b469475149e876f0c3de7949ab6601f9e96b56c4f73f"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "@BitBagSyliusCmsPlugin/Section/Crud/_form.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <div class=\"ui segment\">
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, false, false, 8), 'row');
        echo "
        </div>
    </div>
</div>

<div class=\"ui one column stackable grid\">
    <div class=\"column\">
        ";
        // line 15
        echo twig_call_macro($macros["__internal_509641115db435444ab6b469475149e876f0c3de7949ab6601f9e96b56c4f73f"], "macro_translationForm", [twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "translations", [], "any", false, false, false, 15)], 15, $context, $this->getSourceContext());
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Section/Crud/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 15,  50 => 8,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@BitBagSyliusCmsPlugin/Section/Crud/_form.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Section/Crud/_form.html.twig");
    }
}
