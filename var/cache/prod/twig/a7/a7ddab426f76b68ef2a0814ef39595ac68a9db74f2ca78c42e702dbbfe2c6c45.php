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

/* @SyliusShop/Common/Order/_table.html.twig */
class __TwigTemplate_012b872b17f174043066b4787004656761914a1999c978e32e677a3f9059c9a8 extends \Twig\Template
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
        echo "<table class=\"ui celled table\" id=\"sylius-order\" ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["order-table"]);
        echo ">
    <thead>
        ";
        // line 3
        $this->loadTemplate("@SyliusShop/Common/Order/Table/_headers.html.twig", "@SyliusShop/Common/Order/_table.html.twig", 3)->display($context);
        // line 4
        echo "    </thead>
    <tbody>
        ";
        // line 6
        $this->loadTemplate("@SyliusShop/Common/Order/Table/_items.html.twig", "@SyliusShop/Common/Order/_table.html.twig", 6)->display($context);
        // line 7
        echo "    </tbody>
    <tfoot>
        ";
        // line 9
        $this->loadTemplate("@SyliusShop/Common/Order/Table/_totals.html.twig", "@SyliusShop/Common/Order/_table.html.twig", 9)->display($context);
        // line 10
        echo "    </tfoot>
</table>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/Order/_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  55 => 9,  51 => 7,  49 => 6,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Common/Order/_table.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/_table.html.twig");
    }
}
