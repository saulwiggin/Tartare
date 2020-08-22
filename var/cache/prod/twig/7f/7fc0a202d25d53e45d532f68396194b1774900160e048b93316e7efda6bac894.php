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

/* SyliusShopBundle:Account/Order/Show:_header.html.twig */
class __TwigTemplate_834f9c3410f215df4d2900c6bdf190f2d8086e52b86fc9e259047cebce216fb4 extends \Twig\Template
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
        $macros["buttons"] = $this->macros["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusShopBundle:Account/Order/Show:_header.html.twig", 1)->unwrap();
        // line 2
        $macros["flags"] = $this->macros["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusShopBundle:Account/Order/Show:_header.html.twig", 2)->unwrap();
        // line 3
        echo "
<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 7), "html", null, true);
        echo "
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "checkoutCompletedAt", [], "any", false, false, false, 11)), "html", null, true);
        echo "
                </div>
                <div class=\"item\">
                    ";
        // line 14
        $this->loadTemplate([0 => ((("@SyliusShop/Account/Order/Label/State" . "/") . twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "state", [], "any", false, false, false, 14)) . ".html.twig"), 1 => "@SyliusUi/Label/_default.html.twig"], "SyliusShopBundle:Account/Order/Show:_header.html.twig", 14)->display(twig_array_merge($context, ["value" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("sylius.ui." . twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "state", [], "any", false, false, false, 14)))]));
        // line 15
        echo "                </div>
                <div class=\"item\">
                    ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 17), "html", null, true);
        echo "
                </div>
                <div class=\"item\">
                    ";
        // line 20
        echo twig_call_macro($macros["flags"], "macro_fromLocaleCode", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "localeCode", [], "any", false, false, false, 20)], 20, $context, $this->getSourceContext());
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->getLocaleName(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "localeCode", [], "any", false, false, false, 20)), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
</h1>

";
        // line 27
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "paymentState", [], "any", false, false, false, 27), [0 => "awaiting_payment"])) {
            // line 28
            echo "    ";
            echo twig_call_macro($macros["buttons"], "macro_default", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_order_show", ["tokenValue" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tokenValue", [], "any", false, false, false, 28)]), "sylius.ui.pay", null, "credit card alternative", "fluid blue"], 28, $context, $this->getSourceContext());
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Show:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  85 => 27,  74 => 20,  68 => 17,  64 => 15,  62 => 14,  56 => 11,  47 => 7,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Account/Order/Show:_header.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/Order/Show/_header.html.twig");
    }
}
