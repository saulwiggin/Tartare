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

/* @SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig */
class __TwigTemplate_69f843f2cb8373ba46ebc27b9372c27002dca6782ef05e33aa56428ec3b98894 extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"title";
        // line 3
        if ((0 == twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index0", [], "any", false, false, false, 3))) {
            echo " active";
        }
        echo "\">
    <i class=\"dropdown icon\"></i>
    ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statistic"] ?? null), "channel", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "
</div>
<div class=\"content";
        // line 7
        if ((0 == twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index0", [], "any", false, false, false, 7))) {
            echo " active";
        }
        echo "\">
    <div class=\"ui center aligned stackable divided grid\">
        <div class=\"four column row\">
            <div class=\"column middle aligned\">
                <div class=\"ui tiny statistic\">
                    <div class=\"value sylius-channel-name\">
                        ";
        // line 13
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statistic"] ?? null), "channel", [], "any", false, false, false, 13), "color", [], "any", false, false, false, 13))) {
            // line 14
            echo "                            <span class=\"ui large empty horizontal circular label\" style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statistic"] ?? null), "channel", [], "any", false, false, false, 14), "color", [], "any", false, false, false, 14), "html", null, true);
            echo "\"></span>
                        ";
        }
        // line 16
        echo "                        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statistic"] ?? null), "channel", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.channel"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-orders-count\">
                        ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statistic"] ?? null), "ordersCount", [], "any", false, false, false, 26), "html", null, true);
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.orders"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-orders-total\">
                        ";
        // line 36
        echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, ($context["statistic"] ?? null), "ordersValue", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statistic"] ?? null), "channel", [], "any", false, false, false, 36), "baseCurrency", [], "any", false, false, false, 36), "code", [], "any", false, false, false, 36)], 36, $context, $this->getSourceContext());
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total_value_of_orders"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-average-order-value\">
                        ";
        // line 46
        echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, ($context["statistic"] ?? null), "averageOrderValue", [], "any", false, false, false, 46), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statistic"] ?? null), "channel", [], "any", false, false, false, 46), "baseCurrency", [], "any", false, false, false, 46), "code", [], "any", false, false, false, 46)], 46, $context, $this->getSourceContext());
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.average_order_value"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 49,  122 => 46,  112 => 39,  106 => 36,  96 => 29,  90 => 26,  80 => 19,  73 => 16,  67 => 14,  65 => 13,  54 => 7,  49 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/Statistics/_perChannel.html.twig");
    }
}
