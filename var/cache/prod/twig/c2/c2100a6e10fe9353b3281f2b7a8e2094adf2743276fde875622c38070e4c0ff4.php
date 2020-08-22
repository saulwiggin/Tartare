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

/* SyliusShopBundle:Email:layout.html.twig */
class __TwigTemplate_01f4ed91ac289cd717d72da0edc9ca9943ad938fb0dfc5b8e2a30d1dc2f59f70 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        // line 3
        echo "        ";
        $context["homepageUrl"] = (( !(null === twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "hostname", [], "any", false, false, false, 3))) ? ((("http://" . twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "hostname", [], "any", false, false, false, 3)) . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage", ["_locale" => ($context["localeCode"] ?? null)]))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_homepage", ["_locale" => ($context["localeCode"] ?? null)])));
        // line 4
        echo "        ";
        $context["logo"] = (( !(null === twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "hostname", [], "any", false, false, false, 4))) ? ((("http://" . twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "hostname", [], "any", false, false, false, 4)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop/img/logo.png"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop/img/logo.png"))));
        // line 5
        echo "
        <div style=\"font-family: sans-serif; background: #eee; padding-top: 30px; padding-bottom: 30px; font-size: 16px; color: #333; line-height: 1.5\">
            <div style=\"max-width: 600px; margin: 20px auto;\">
                <div style=\"margin-bottom: 30px; text-align: center;\">
                    <a href=\"";
        // line 9
        echo ($context["homepageUrl"] ?? null);
        echo "\">
                        <img src=\"";
        // line 10
        echo ($context["logo"] ?? null);
        echo "\" alt=\"Sylius\" style=\"width: 170px\">
                    </a>
                </div>

                <div style=\"background: #fff; padding: 40px 30px;\">
                    ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "                </div>

                <div style=\"text-align: center; padding: 20px 0;\">
                    <a href=\"https://sylius.com\" target=\"_blank\" style=\"color: #1abb9c; text-decoration: none;\">sylius.com</a>
                </div>
            </div>
        </div>
    ";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Email:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 15,  74 => 16,  72 => 15,  64 => 10,  60 => 9,  54 => 5,  51 => 4,  48 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Email:layout.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Email/layout.html.twig");
    }
}
