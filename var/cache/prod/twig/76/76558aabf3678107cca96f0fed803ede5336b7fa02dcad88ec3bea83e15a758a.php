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

/* BitBagSyliusCmsPlugin:FrequentlyAskedQuestion/Crud:_form.html.twig */
class __TwigTemplate_0ffe607276ad4367360b0d4dba19eee2b68e8e4e341ad407164d73b288c37b81 extends \Twig\Template
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
        $macros["__internal_55c3b053196e263a66f1bbb6dc0ca092394340ab87eeb1468e87338ddcdb7a18"] = $this->macros["__internal_55c3b053196e263a66f1bbb6dc0ca092394340ab87eeb1468e87338ddcdb7a18"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "BitBagSyliusCmsPlugin:FrequentlyAskedQuestion/Crud:_form.html.twig", 1)->unwrap();
        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@BitBagSyliusCmsPlugin/Form/theme.html.twig"], true);
        // line 3
        echo "
";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

<div class=\"ui segment\">
    <div class=\"two fields\">
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, false, false, 8), 'row');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "position", [], "any", false, false, false, 9), 'row');
        echo "
    </div>
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "enabled", [], "any", false, false, false, 11), 'row');
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "channels", [], "any", false, false, false, 12), 'row');
        echo "
</div>

";
        // line 15
        echo twig_call_macro($macros["__internal_55c3b053196e263a66f1bbb6dc0ca092394340ab87eeb1468e87338ddcdb7a18"], "macro_translationForm", [twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "translations", [], "any", false, false, false, 15)], 15, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:FrequentlyAskedQuestion/Crud:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  64 => 12,  60 => 11,  55 => 9,  51 => 8,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "BitBagSyliusCmsPlugin:FrequentlyAskedQuestion/Crud:_form.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/FrequentlyAskedQuestion/Crud/_form.html.twig");
    }
}
