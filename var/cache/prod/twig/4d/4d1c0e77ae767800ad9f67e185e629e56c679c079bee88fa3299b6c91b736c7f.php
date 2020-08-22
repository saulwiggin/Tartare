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

/* @BitBagSyliusCmsPlugin/Page/Crud/_form.html.twig */
class __TwigTemplate_1b8d05b90c95457db332aa392c73d5a001ca67a5c3888160cb92b9bf509b89fe extends \Twig\Template
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
        $macros["__internal_50c64c245ea371d5c79ee8b70a443e080b42c364024fe8c6274540de4c5d1722"] = $this->macros["__internal_50c64c245ea371d5c79ee8b70a443e080b42c364024fe8c6274540de4c5d1722"] = $this->loadTemplate("@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig", "@BitBagSyliusCmsPlugin/Page/Crud/_form.html.twig", 1)->unwrap();
        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@BitBagSyliusCmsPlugin/Form/theme.html.twig"], true);
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("@BitBagSyliusCmsPlugin/Modal/_resourcePreview.html.twig", "@BitBagSyliusCmsPlugin/Page/Crud/_form.html.twig", 4)->display($context);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "enabled", [], "any", false, false, false, 12), 'row');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "products", [], "any", false, false, false, 13), 'row');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sections", [], "any", false, false, false, 14), 'row');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "channels", [], "any", false, false, false, 15), 'row');
        echo "

            <a href=\"#\" class=\"ui labeled button icon primary bitbag-cms-resource-preview\" data-url=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_admin_page_preview", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 17), "data", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "\">
                <i class=\"eye icon\"></i>
                ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bitbag_sylius_cms_plugin.ui.preview"), "html", null, true);
        echo "
            </a>
        </div>
    </div>
</div>

<div class=\"ui one column stackable grid\">
    <div class=\"column\" id=\"bitbag-block-image\">
        ";
        // line 27
        echo twig_call_macro($macros["__internal_50c64c245ea371d5c79ee8b70a443e080b42c364024fe8c6274540de4c5d1722"], "macro_translationFormWithSlug", [twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "translations", [], "any", false, false, false, 27), "@BitBagSyliusCmsPlugin/Page/Crud/_slugField.html.twig", ($context["page"] ?? null)], 27, $context, $this->getSourceContext());
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Page/Crud/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  83 => 19,  78 => 17,  73 => 15,  69 => 14,  65 => 13,  61 => 12,  57 => 11,  49 => 6,  46 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@BitBagSyliusCmsPlugin/Page/Crud/_form.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Page/Crud/_form.html.twig");
    }
}
