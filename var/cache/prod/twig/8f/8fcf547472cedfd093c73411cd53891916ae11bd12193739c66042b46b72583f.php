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

/* SyliusShopBundle:Account:layout.html.twig */
class __TwigTemplate_91e0ddb40a7707a78adc56bba24bade364dc68a0b8c00c716f43bf11c39e1d06 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'subcontent' => [$this, 'block_subcontent'],
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
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Account:layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 6
        echo "
    <div class=\"ui stackable grid\">
        <div class=\"four wide column\">
            ";
        // line 9
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.account.layout.menu");
        echo "
        </div>
        <div class=\"twelve wide column\">
            ";
        // line 12
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.account.layout.before_subcontent");
        echo "

            ";
        // line 14
        $this->displayBlock('subcontent', $context, $blocks);
        // line 16
        echo "
            ";
        // line 17
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.account.layout.after_subcontent");
        echo "
        </div>
    </div>
";
    }

    // line 4
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
    }

    // line 14
    public function block_subcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "            ";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 15,  92 => 14,  88 => 5,  84 => 4,  76 => 17,  73 => 16,  71 => 14,  66 => 12,  60 => 9,  55 => 6,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Account:layout.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/layout.html.twig");
    }
}
