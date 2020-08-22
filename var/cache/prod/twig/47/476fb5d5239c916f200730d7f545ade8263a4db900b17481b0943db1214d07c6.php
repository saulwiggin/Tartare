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

/* @SyliusShop/Homepage/_aboutUs.html.twig */
class __TwigTemplate_366889a65d1d068bd0a369b289388fc5badb40b8fe816d359b7f84c374ca19bf extends \Twig\Template
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
        echo "<div class=\"ui very padded center aligned secondary segment\">
    <div class=\"ui centered grid\">
        <div class=\"sixteen wide tablet twelve wide computer center aligned column\">
            <h2 class=\"ui huge header\">
                ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.homepage.about_us"), "html", null, true);
        echo "
            </h2>
            <p>
                ";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.homepage.about_us_content");
        echo "
            </p>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Homepage/_aboutUs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Homepage/_aboutUs.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Homepage/_aboutUs.html.twig");
    }
}
