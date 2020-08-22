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

/* SyliusAdminBundle:Product:index.html.twig */
class __TwigTemplate_e811b6d4b07c866565debe0ea34e954e9966b7b3094c6d10f062761106c3b258 extends \Twig\Template
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
        $context["definition"] = twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "definition", [], "any", false, false, false, 3);
        // line 4
        $context["data"] = twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", [], "any", false, false, false, 4);
        // line 6
        $context["header"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 6), "header", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 6), "header", [], "any", false, false, false, 6), ((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 6) . ".ui.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "pluralName", [], "any", false, false, false, 6)))) : (((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 6) . ".ui.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "pluralName", [], "any", false, false, false, 6))));
        // line 1
        $this->parent = $this->loadTemplate("@SyliusAdmin/layout.html.twig", "SyliusAdminBundle:Product:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["header"] ?? null)), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.product.index.content", $context);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  63 => 10,  54 => 8,  49 => 1,  47 => 6,  45 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Product:index.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/index.html.twig");
    }
}
