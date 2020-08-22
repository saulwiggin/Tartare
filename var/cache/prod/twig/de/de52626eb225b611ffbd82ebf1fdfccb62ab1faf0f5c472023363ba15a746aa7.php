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

/* SyliusShopBundle:Checkout:layout.html.twig */
class __TwigTemplate_ad0d0baf8dbdd0c8113151e2a23796283595d3614ffa16c6bf57f8c9960a65b1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'top' => [$this, 'block_top'],
            'header' => [$this, 'block_header'],
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
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Checkout:layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
    }

    // line 7
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.checkout.header", $context);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  59 => 8,  55 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Checkout:layout.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/layout.html.twig");
    }
}
