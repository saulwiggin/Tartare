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

/* @SyliusUi/Grid/Filter/string.html.twig */
class __TwigTemplate_938a0e67b079191ac64086b9860dfe523fdab9ab9e661f89ba0f69a460b31a8d extends \Twig\Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@SyliusUi/Form/theme.html.twig"], true);
        // line 2
        echo "
<div class=\"sylius-filters__group\">
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", true, true, false, 4)) {
            // line 5
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 5), 'row', ["label" => twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "label", [], "any", false, false, false, 5)]);
            echo "
    ";
        }
        // line 7
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 7), 'row', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "label", [], "any", false, false, false, 7)], "label" => ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", true, true, false, 7)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "label", [], "any", false, false, false, 7)) : (twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "label", [], "any", false, false, false, 7)))]);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/Filter/string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusUi/Grid/Filter/string.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Filter/string.html.twig");
    }
}
