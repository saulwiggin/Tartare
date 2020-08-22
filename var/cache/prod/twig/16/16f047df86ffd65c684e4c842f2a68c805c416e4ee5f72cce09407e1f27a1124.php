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

/* @SyliusShop/Layout/Footer/Grid/_plus.html.twig */
class __TwigTemplate_c917ec4fd5d62a3feaa66006865d50b504cb475758bd9aa628e32cd76f0f2623 extends \Twig\Template
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
        echo "<div class=\"four wide column\">
    <a href=\"https://sylius.com/plus\" target=\"_blank\" style=\"display: inline-block; text-align: center;\">
        <h4 class=\"ui inverted header\" style=\"color: #808080;\">
            Need even more features?
            <div class=\"sub header\" style=\"padding: 5px 0;\">Check Sylius Plus out!</div>
        </h4>
        <img class=\"ui fluid image\" style=\"max-width: 170px;\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop/img/sylius-plus-banner.png"), "html", null, true);
        echo "\" alt=\"Sylius Plus\">
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Layout/Footer/Grid/_plus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Layout/Footer/Grid/_plus.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Layout/Footer/Grid/_plus.html.twig");
    }
}
