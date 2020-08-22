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

/* @SyliusAdmin/Taxon/create.html.twig */
class __TwigTemplate_39351bffb430d9da6d6a0ae65e7aa2237e85d7a2735320b59879e8867529020f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusAdmin/Crud/create.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@SyliusAdmin/Crud/create.html.twig", "@SyliusAdmin/Taxon/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.taxon.create.before_content", ["resource" => ($context["resource"] ?? null)]);
        echo "

    <div class=\"ui grid\">
        <div class=\"sixteen wide mobile sixteen wide tablet four wide computer column\">
            ";
        // line 8
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.taxon.create.taxon_tree", ["resource" => ($context["resource"] ?? null)]);
        echo "
        </div>
        <div class=\"sixteen wide mobile sixteen wide tablet twelve wide computer column\">
            ";
        // line 11
        $this->displayParentBlock("content", $context, $blocks);
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Taxon/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  58 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Taxon/create.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/create.html.twig");
    }
}
