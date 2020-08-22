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

/* @SyliusShop/Homepage/_latestProducts.html.twig */
class __TwigTemplate_f88bd417b17d9da74fd4d02212c41079e80c1616a7982eacc35428c336d46f16 extends \Twig\Template
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
        echo "<h2 class=\"ui center aligned huge header\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.latest_products"), "html", null, true);
        echo "</h2>
<div class=\"ui hidden divider\"></div>

<div ";
        // line 4
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["latest-products"]);
        echo ">
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_partial_product_index_latest", ["count" => 3, "template" => "@SyliusShop/Homepage/_list.html.twig"]));
        echo "
</div>
<div class=\"ui hidden divider\"></div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Homepage/_latestProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Homepage/_latestProducts.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Homepage/_latestProducts.html.twig");
    }
}
