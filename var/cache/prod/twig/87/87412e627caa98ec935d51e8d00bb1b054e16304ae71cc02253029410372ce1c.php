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

/* SyliusAdminBundle:ProductOption:_form.html.twig */
class __TwigTemplate_741aced334e8f2af224cfdb6a300caaa429bb299b811945f91cb6365016a4ed7 extends \Twig\Template
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
        $macros["__internal_eb69e2779c3cebeabf014cd5875bbd70fabcfa83e532f187f2570ac1af60ebaf"] = $this->macros["__internal_eb69e2779c3cebeabf014cd5875bbd70fabcfa83e532f187f2570ac1af60ebaf"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "SyliusAdminBundle:ProductOption:_form.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"ui segment\">
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"two fields\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, false, false, 6), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "position", [], "any", false, false, false, 7), 'row');
        echo "
    </div>
    ";
        // line 9
        echo twig_call_macro($macros["__internal_eb69e2779c3cebeabf014cd5875bbd70fabcfa83e532f187f2570ac1af60ebaf"], "macro_translationForm", [twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "translations", [], "any", false, false, false, 9)], 9, $context, $this->getSourceContext());
        echo "
</div>
<h4 class=\"ui dividing header\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.values"), "html", null, true);
        echo "</h4>
";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "values", [], "any", false, false, false, 12), 'row');
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductOption:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  62 => 11,  57 => 9,  52 => 7,  48 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:ProductOption:_form.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductOption/_form.html.twig");
    }
}
