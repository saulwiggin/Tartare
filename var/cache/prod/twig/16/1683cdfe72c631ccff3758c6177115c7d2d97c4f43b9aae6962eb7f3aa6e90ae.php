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

/* @SyliusAdmin/ProductVariant/index.html.twig */
class __TwigTemplate_b8727fd55cab534e23fd1b0b3d634a11bbfc5e6135fb76c663eb428a32b863a7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["headers"] = $this->macros["headers"] = $this->loadTemplate("@SyliusUi/Macro/headers.html.twig", "@SyliusAdmin/ProductVariant/index.html.twig", 3)->unwrap();
        // line 5
        $context["definition"] = twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "definition", [], "any", false, false, false, 5);
        // line 6
        $context["data"] = twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", [], "any", false, false, false, 6);
        // line 8
        $context["header"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 8), "header", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 8), "header", [], "any", false, false, false, 8), ((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 8) . ".ui.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "pluralName", [], "any", false, false, false, 8)))) : (((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 8) . ".ui.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "pluralName", [], "any", false, false, false, 8))));
        // line 1
        $this->parent = $this->loadTemplate("@SyliusAdmin/layout.html.twig", "@SyliusAdmin/ProductVariant/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["header"] ?? null)), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.product_variant.index.content", $context);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/ProductVariant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  65 => 12,  56 => 10,  51 => 1,  49 => 8,  47 => 6,  45 => 5,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/ProductVariant/index.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/index.html.twig");
    }
}
