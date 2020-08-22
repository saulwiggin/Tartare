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

/* BitBagSyliusCmsPlugin:Media/Crud:_form.html.twig */
class __TwigTemplate_925c8abb8d2d4cb71fba47856fd6478a090a68cf847fe43541635acc3da4a7db extends \Twig\Template
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
        $macros["__internal_61508a105758839eb3735513fd7b4d25696404fcc6eeade3287605b24296c405"] = $this->macros["__internal_61508a105758839eb3735513fd7b4d25696404fcc6eeade3287605b24296c405"] = $this->loadTemplate("@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig", "BitBagSyliusCmsPlugin:Media/Crud:_form.html.twig", 1)->unwrap();
        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@BitBagSyliusCmsPlugin/Form/theme.html.twig"], true);
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("@BitBagSyliusCmsPlugin/Modal/_resourcePreview.html.twig", "BitBagSyliusCmsPlugin:Media/Crud:_form.html.twig", 4)->display($context);
        // line 5
        echo "
";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <div class=\"ui segment\">
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, false, false, 11), 'row');
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 12), 'row');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 13), 'row');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "enabled", [], "any", false, false, false, 14), 'row');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "products", [], "any", false, false, false, 15), 'row');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sections", [], "any", false, false, false, 16), 'row');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "channels", [], "any", false, false, false, 17), 'row');
        echo "

            <a href=\"#\" class=\"ui labeled button icon primary bitbag-cms-resource-preview\" data-url=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_admin_media_preview", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 19), "data", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\">
                <i class=\"eye icon\"></i>
                ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bitbag_sylius_cms_plugin.ui.preview"), "html", null, true);
        echo "
            </a>
        </div>
    </div>
</div>

<div class=\"ui one column stackable grid\">
    <div class=\"column\">
        ";
        // line 29
        echo twig_call_macro($macros["__internal_61508a105758839eb3735513fd7b4d25696404fcc6eeade3287605b24296c405"], "macro_translationForm", [twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "translations", [], "any", false, false, false, 29)], 29, $context, $this->getSourceContext());
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:Media/Crud:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 29,  91 => 21,  86 => 19,  81 => 17,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  61 => 12,  57 => 11,  49 => 6,  46 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "BitBagSyliusCmsPlugin:Media/Crud:_form.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Media/Crud/_form.html.twig");
    }
}
