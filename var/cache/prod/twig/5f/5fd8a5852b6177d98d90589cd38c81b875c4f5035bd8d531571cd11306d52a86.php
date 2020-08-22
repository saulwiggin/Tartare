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

/* BitBagSyliusCmsPlugin:Page/Crud:_slugField.html.twig */
class __TwigTemplate_2345de15fe450982abc5f9b65418d97853274cfad60c0ffc995a1c5ae12400fc extends \Twig\Template
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
        echo "<div class=\"";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slugField"] ?? null), "vars", [], "any", false, false, false, 1), "required", [], "any", false, false, false, 1)) {
            echo "required ";
        }
        echo "field";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slugField"] ?? null), "vars", [], "any", false, false, false, 1), "errors", [], "any", false, false, false, 1)) > 0)) {
            echo " error";
        }
        echo " ui loadable form\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["slugField"] ?? null), 'label');
        echo "
    ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slugField"] ?? null), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3) == null)) {
            // line 4
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["slugField"] ?? null), 'widget', ["attr" => ["data-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_admin_ajax_generate_page_slug")]]);
            echo "
    ";
        } else {
            // line 6
            echo "        <div class=\"ui action input\">
            ";
            // line 7
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["slugField"] ?? null), 'widget', ["attr" => ["readonly" => "readonly", "data-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_admin_ajax_generate_page_slug")]]);
            echo "
            <span class=\"ui icon button toggle-page-slug-modification\">
            <i class=\"lock icon\"></i>
        </span>
        </div>
    ";
        }
        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["slugField"] ?? null), 'errors');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:Page/Crud:_slugField.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  63 => 7,  60 => 6,  54 => 4,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "BitBagSyliusCmsPlugin:Page/Crud:_slugField.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Page/Crud/_slugField.html.twig");
    }
}
