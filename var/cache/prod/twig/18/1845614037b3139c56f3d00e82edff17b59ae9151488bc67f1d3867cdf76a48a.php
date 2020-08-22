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

/* SyliusAdminBundle:Order/Show:_header.html.twig */
class __TwigTemplate_b8725b6408a4834dcfb4362c083d113660fcc9cfa73fab65c66435213995b805 extends \Twig\Template
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
        $macros["flags"] = $this->macros["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusAdminBundle:Order/Show:_header.html.twig", 1)->unwrap();
        // line 2
        echo "
<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 6), "html", null, true);
        echo "
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\">
                    ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "checkoutCompletedAt", [], "any", false, false, false, 10)), "html", null, true);
        echo "
                </div>
                <div class=\"item\" id=\"sylius-order-state\">
                    ";
        // line 13
        $this->loadTemplate([0 => ((("@SyliusAdmin/Order/Label/State" . "/") . twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "state", [], "any", false, false, false, 13)) . ".html.twig"), 1 => "@SyliusUi/Label/_default.html.twig"], "SyliusAdminBundle:Order/Show:_header.html.twig", 13)->display(twig_array_merge($context, ["value" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("sylius.ui." . twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "state", [], "any", false, false, false, 13)))]));
        // line 14
        echo "                </div>
                <div class=\"item\" id=\"sylius-order-currency\">
                    ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencyCode", [], "any", false, false, false, 16), "html", null, true);
        echo "
                </div>
                <div class=\"item\">
                    ";
        // line 19
        echo twig_call_macro($macros["flags"], "macro_fromLocaleCode", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "localeCode", [], "any", false, false, false, 19)], 19, $context, $this->getSourceContext());
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->getLocaleName(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "localeCode", [], "any", false, false, false, 19)), "html", null, true);
        echo "
                </div>
                <div class=\"item\">
                    ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.purchased_from"), "html", null, true);
        echo "
                    ";
        // line 23
        $this->loadTemplate("@SyliusAdmin/Common/_channel.html.twig", "SyliusAdminBundle:Order/Show:_header.html.twig", 23)->display(twig_array_merge($context, ["channel" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "channel", [], "any", false, false, false, 23)]));
        // line 24
        echo "                </div>
            </div>
        </div>
    </div>
</h1>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  83 => 23,  79 => 22,  72 => 19,  66 => 16,  62 => 14,  60 => 13,  54 => 10,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Order/Show:_header.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_header.html.twig");
    }
}
