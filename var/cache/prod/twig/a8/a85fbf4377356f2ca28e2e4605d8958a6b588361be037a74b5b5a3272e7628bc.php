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

/* @SyliusShop/ProductReview/index.html.twig */
class __TwigTemplate_76b3560804680007b78194dcc219f6e7e2d116561899388c98dce9d53dcf5b54 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/ProductReview/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui stackable grid\" id=\"reviews\">
        <div class=\"four wide column\">
            ";
        // line 7
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.product_review.index.product_box", $context);
        echo "
        </div>
        <div class=\"twelve wide column\">
            <div class=\"ui segment\" id=\"sylius-product-reviews\" ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-reviews"]);
        echo ">
                ";
        // line 11
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.product_review.index.list", $context);
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/ProductReview/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  61 => 10,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/ProductReview/index.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/ProductReview/index.html.twig");
    }
}
