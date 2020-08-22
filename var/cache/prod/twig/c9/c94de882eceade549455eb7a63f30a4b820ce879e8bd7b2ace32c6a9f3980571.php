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

/* SyliusShopBundle:Product/Show:_priceWidget.html.twig */
class __TwigTemplate_2afc95fe160d7f9bb453ec81bccb9be7db4043702d718b14d638618ad9f18f71 extends \Twig\Template
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
        echo "<div class=\"ui stackable grid\">
    <div class=\"four wide column\">
        ";
        // line 3
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 3), "empty", [], "method", false, false, false, 3)) {
            // line 4
            echo "            ";
            $this->loadTemplate("@SyliusShop/Product/Show/_price.html.twig", "SyliusShopBundle:Product/Show:_priceWidget.html.twig", 4)->display($context);
            // line 5
            echo "        ";
        }
        // line 6
        echo "    </div>
    <div class=\"twelve wide right aligned column\">
        <span class=\"ui sub header\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "code", [], "any", false, false, false, 8), "html", null, true);
        echo "</span>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_priceWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  49 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Product/Show:_priceWidget.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_priceWidget.html.twig");
    }
}
