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

/* SyliusAdminBundle:Email:layout.html.twig */
class __TwigTemplate_8f55493315c1ca442efb9f0a651a71ed3d58a9f475aa5b87645f6f535edf80d5 extends \Twig\Template
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
        $context["logo"] = (( !(null === twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "hostname", [], "any", false, false, false, 3))) ? ((("http://" . twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "hostname", [], "any", false, false, false, 3)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/img/logo.png"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/img/logo.png"))));
        // line 4
        echo "
        <div style=\"font-family: sans-serif; background: #eee; padding-top: 30px; padding-bottom: 30px; font-size: 16px; color: #333; line-height: 1.5\">
            <div style=\"max-width: 600px; margin: 20px auto;\">
                <div style=\"margin-bottom: 30px; text-align: center;\">
                    ";
        // line 8
        if ($this->extensions['Sylius\Bundle\CoreBundle\Twig\BundleLoadedCheckerExtension']->isBundleLoaded("SyliusShopBundle")) {
            // line 9
            echo "                        ";
            $context["url"] = (( !(null === twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "hostname", [], "any", false, false, false, 9))) ? ((("http://" . twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "hostname", [], "any", false, false, false, 9)) . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage", ["_locale" => ($context["localeCode"] ?? null)]))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_homepage", ["_locale" => ($context["localeCode"] ?? null)])));
            // line 10
            echo "                        <a href=\"";
            echo ($context["url"] ?? null);
            echo "\">
                            <img src=\"";
            // line 11
            echo ($context["logo"] ?? null);
            echo "\" alt=\"Sylius\" style=\"width: 170px\">
                        </a>
                    ";
        } else {
            // line 14
            echo "                        <img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" alt=\"Sylius\" style=\"width: 170px\">
                    ";
        }
        // line 16
        echo "                </div>

                <div style=\"background: #fff; padding: 40px 30px;\">
                    ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "                </div>

                <div style=\"text-align: center; padding: 20px 0;\">
                    <a href=\"https://sylius.com\" target=\"_blank\" style=\"color: #1abb9c; text-decoration: none;\">sylius.com</a>
                </div>
            </div>
        </div>
    ";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Email:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  97 => 19,  86 => 20,  84 => 19,  79 => 16,  73 => 14,  67 => 11,  62 => 10,  59 => 9,  57 => 8,  51 => 4,  48 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Email:layout.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Email/layout.html.twig");
    }
}
