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

/* SyliusAdminBundle:Product/Show:_configurableProduct.html.twig */
class __TwigTemplate_31dff885573bb9ae563f4b7bfe239e74e8d6a012e2ad93c36d17709bdd7b00f1 extends \Twig\Template
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
        $this->loadTemplate("@SyliusAdmin/Product/Show/_header.html.twig", "SyliusAdminBundle:Product/Show:_configurableProduct.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        ";
        // line 5
        $this->loadTemplate("@SyliusAdmin/Product/Show/_taxonomy.html.twig", "SyliusAdminBundle:Product/Show:_configurableProduct.html.twig", 5)->display($context);
        // line 6
        echo "    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        ";
        // line 8
        $this->loadTemplate("@SyliusAdmin/Product/Show/_options.html.twig", "SyliusAdminBundle:Product/Show:_configurableProduct.html.twig", 8)->display($context);
        // line 9
        echo "    </div>
</div>
<div class=\"ui hidden divider\"></div>
";
        // line 12
        $this->loadTemplate("@SyliusAdmin/Product/Show/_media.html.twig", "SyliusAdminBundle:Product/Show:_configurableProduct.html.twig", 12)->display($context);
        // line 13
        echo "<div class=\"ui hidden divider\"></div>
";
        // line 14
        $this->loadTemplate("@SyliusAdmin/Product/Show/_moreDetails.html.twig", "SyliusAdminBundle:Product/Show:_configurableProduct.html.twig", 14)->display($context);
        // line 15
        echo "<div class=\"ui hidden divider\"></div>
<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        ";
        // line 18
        $this->loadTemplate("@SyliusAdmin/Product/Show/_attributes.html.twig", "SyliusAdminBundle:Product/Show:_configurableProduct.html.twig", 18)->display($context);
        // line 19
        echo "    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        ";
        // line 21
        $this->loadTemplate("@SyliusAdmin/Product/Show/_associations.html.twig", "SyliusAdminBundle:Product/Show:_configurableProduct.html.twig", 21)->display($context);
        // line 22
        echo "    </div>
</div>
<div class=\"ui hidden divider\"></div>
";
        // line 25
        $this->loadTemplate("@SyliusAdmin/Product/Show/_variants.html.twig", "SyliusAdminBundle:Product/Show:_configurableProduct.html.twig", 25)->display($context);
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Show:_configurableProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 25,  77 => 22,  75 => 21,  71 => 19,  69 => 18,  64 => 15,  62 => 14,  59 => 13,  57 => 12,  52 => 9,  50 => 8,  46 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Product/Show:_configurableProduct.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_configurableProduct.html.twig");
    }
}
