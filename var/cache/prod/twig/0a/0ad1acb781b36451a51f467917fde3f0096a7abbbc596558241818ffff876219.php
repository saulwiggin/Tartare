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

/* @SyliusAdmin/Taxon/_form.html.twig */
class __TwigTemplate_cba7e517b7a0dd15d5cb397d9dae4bf946cfa68ceb78120ef2a6b907de78a2a0 extends \Twig\Template
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
        $macros["__internal_aa3985d647489c713ce44bc96f1f9d1443d4298f4aa3b52e34352daf42b542d3"] = $this->macros["__internal_aa3985d647489c713ce44bc96f1f9d1443d4298f4aa3b52e34352daf42b542d3"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "@SyliusAdmin/Taxon/_form.html.twig", 1)->unwrap();
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
        if ((twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "id", [], "any", false, false, false, 7) != null)) {
            // line 8
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 8), 'row');
            echo "
        ";
        } else {
            // line 10
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 10), 'widget', ["attr" => ["style" => "display: none;"]]);
            echo "
        ";
        }
        // line 12
        echo "    </div>
</div>
";
        // line 14
        echo twig_call_macro($macros["__internal_aa3985d647489c713ce44bc96f1f9d1443d4298f4aa3b52e34352daf42b542d3"], "macro_translationFormWithSlug", [twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "translations", [], "any", false, false, false, 14), "@SyliusAdmin/Taxon/_slugField.html.twig", ($context["taxon"] ?? null)], 14, $context, $this->getSourceContext());
        echo "

";
        // line 16
        $this->loadTemplate("@SyliusAdmin/Taxon/_media.html.twig", "@SyliusAdmin/Taxon/_form.html.twig", 16)->display($context);
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Taxon/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  70 => 14,  66 => 12,  60 => 10,  54 => 8,  52 => 7,  48 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Taxon/_form.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/_form.html.twig");
    }
}
