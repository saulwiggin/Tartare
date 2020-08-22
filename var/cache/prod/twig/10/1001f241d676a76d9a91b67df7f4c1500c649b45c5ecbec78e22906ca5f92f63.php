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

/* SyliusShopBundle:Homepage:_newsletter.html.twig */
class __TwigTemplate_2b8a98c51c0e32e1d1d0285ec95d00070751bb0dced8acce10de1468b007a3d5 extends \Twig\Template
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
        echo "<div class=\"ui very padded secondary segment newsletter\">
    <div class=\"ui bottom aligned grid\">
        <div class=\"doubling two column row\">
            <div class=\"column\">
                <h2 class=\"ui huge header\">
                    ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.homepage.newsletter"), "html", null, true);
        echo "
                </h2>
                <p>
                    ";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.homepage.newsletter_description");
        echo "
                </p>
            </div>
            <div class=\"column\">
                <form class=\"ui form\">
                    <div class=\"newsletter-input\">
                        <input type=\"text\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.email"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"newsletter-button\">
                        <button class=\"ui button\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.homepage.subscribe"), "html", null, true);
        echo "
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class=\"ui hidden divider\"></div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Homepage:_newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  59 => 15,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Homepage:_newsletter.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Homepage/_newsletter.html.twig");
    }
}
