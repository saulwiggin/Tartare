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

/* SyliusShopBundle:Product:index.html.twig */
class __TwigTemplate_e25eaa7cba563911da4acd2909cb7f14f6041d38369cda5e6a63377407ebaeef extends \Twig\Template
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
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Product:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $this->loadTemplate("@SyliusShop/Product/Index/_header.html.twig", "SyliusShopBundle:Product:index.html.twig", 4)->display($context);
        // line 5
        echo "<div class=\"ui stackable grid\">
    <div class=\"four wide column\">
        ";
        // line 7
        $this->loadTemplate("@SyliusShop/Product/Index/_sidebar.html.twig", "SyliusShopBundle:Product:index.html.twig", 7)->display($context);
        // line 8
        echo "    </div>
    <div class=\"twelve wide column\">
        ";
        // line 10
        $this->loadTemplate("@SyliusShop/Product/Index/_main.html.twig", "SyliusShopBundle:Product:index.html.twig", 10)->display($context);
        // line 11
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  62 => 10,  58 => 8,  56 => 7,  52 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Product:index.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/index.html.twig");
    }
}
