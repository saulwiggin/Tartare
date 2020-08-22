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

/* SyliusAdminBundle:Product:_slugField.html.twig */
class __TwigTemplate_3b96234deabb4f750e384d2fc43233984e4ff794f12ae20967fd7fa7e49061ae extends \Twig\Template
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["slugField"] ?? null), 'widget', ["attr" => ["data-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_generate_product_slug")]]);
            echo "
    ";
        } else {
            // line 6
            echo "    <div class=\"ui action input\">
        ";
            // line 7
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["slugField"] ?? null), 'widget', ["attr" => ["readonly" => "readonly", "data-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_generate_product_slug")]]);
            echo "
        <span class=\"ui icon button toggle-product-slug-modification\">
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
        return "SyliusAdminBundle:Product:_slugField.html.twig";
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
        return new Source("", "SyliusAdminBundle:Product:_slugField.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/_slugField.html.twig");
    }
}
