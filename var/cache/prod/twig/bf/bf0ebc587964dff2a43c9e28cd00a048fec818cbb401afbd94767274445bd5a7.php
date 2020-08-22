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

/* SyliusShopBundle:Layout/Footer:_content.html.twig */
class __TwigTemplate_f5801164bb4cde36ba497ef5bec3c44ddf8d2528933eb508a79084f4ac5a16f2 extends \Twig\Template
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
        echo "<div class=\"ui center aligned inverted basic segment\">
    <p>&copy; ";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.your_store"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.powered_by"), "html", null, true);
        echo " <a href=\"http://sylius.com\" target=\"_blank\" style=\"color: #1abb9c;\">Sylius</a>.</p>
    <a target=\"_blank\" href=\"//facebook.com/SyliusEcommerce/\"><i class=\"big grey facebook icon\"></i></a>
    <a target=\"_blank\" href=\"//instagram.com/sylius.team/\"><i class=\"big grey instagram icon\"></i></a>
    <a target=\"_blank\" href=\"//twitter.com/sylius\"><i class=\"big grey twitter card icon\"></i></a>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Layout/Footer:_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Layout/Footer:_content.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Layout/Footer/_content.html.twig");
    }
}
