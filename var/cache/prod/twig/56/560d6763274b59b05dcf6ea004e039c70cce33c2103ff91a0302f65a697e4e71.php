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

/* SyliusAdminBundle:Product/Show:_simpleProduct.html.twig */
class __TwigTemplate_6a565f4d99c98236c76caacae5c2d6d95104b2ec9cc383dcc027248fca352917 extends \Twig\Template
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
        $this->loadTemplate("@SyliusAdmin/Product/Show/_header.html.twig", "SyliusAdminBundle:Product/Show:_simpleProduct.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        ";
        // line 5
        $this->loadTemplate("@SyliusAdmin/Product/Show/_details.html.twig", "SyliusAdminBundle:Product/Show:_simpleProduct.html.twig", 5)->display($context);
        // line 6
        echo "        <div class=\"ui hidden divider\"></div>
        ";
        // line 7
        $this->loadTemplate("@SyliusAdmin/Product/Show/_taxonomy.html.twig", "SyliusAdminBundle:Product/Show:_simpleProduct.html.twig", 7)->display($context);
        // line 8
        echo "    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        ";
        // line 10
        $this->loadTemplate("@SyliusAdmin/Product/Show/_pricing.html.twig", "SyliusAdminBundle:Product/Show:_simpleProduct.html.twig", 10)->display($context);
        // line 11
        echo "        <div class=\"ui hidden divider\"></div>
        ";
        // line 12
        $this->loadTemplate("@SyliusAdmin/Product/Show/_shipping.html.twig", "SyliusAdminBundle:Product/Show:_simpleProduct.html.twig", 12)->display($context);
        // line 13
        echo "    </div>
</div>
<div class=\"ui hidden divider\"></div>
";
        // line 16
        $this->loadTemplate("@SyliusAdmin/Product/Show/_media.html.twig", "SyliusAdminBundle:Product/Show:_simpleProduct.html.twig", 16)->display($context);
        // line 17
        echo "<div class=\"ui hidden divider\"></div>
";
        // line 18
        $this->loadTemplate("@SyliusAdmin/Product/Show/_moreDetails.html.twig", "SyliusAdminBundle:Product/Show:_simpleProduct.html.twig", 18)->display($context);
        // line 19
        echo "<div class=\"ui hidden divider\"></div>
<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        ";
        // line 22
        $this->loadTemplate("@SyliusAdmin/Product/Show/_attributes.html.twig", "SyliusAdminBundle:Product/Show:_simpleProduct.html.twig", 22)->display($context);
        // line 23
        echo "    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        ";
        // line 25
        $this->loadTemplate("@SyliusAdmin/Product/Show/_associations.html.twig", "SyliusAdminBundle:Product/Show:_simpleProduct.html.twig", 25)->display($context);
        // line 26
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Show:_simpleProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 26,  85 => 25,  81 => 23,  79 => 22,  74 => 19,  72 => 18,  69 => 17,  67 => 16,  62 => 13,  60 => 12,  57 => 11,  55 => 10,  51 => 8,  49 => 7,  46 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Product/Show:_simpleProduct.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_simpleProduct.html.twig");
    }
}
