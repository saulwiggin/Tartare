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

/* SyliusAdminBundle:Dashboard:_statistics.html.twig */
class __TwigTemplate_014ac2ae795066a5a0339fe7b06bed663b24a24d0de97a79249faf10bc4892be extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "SyliusAdminBundle:Dashboard:_statistics.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"ui grid\">
    <div class=\"center aligned doubling four column row\">
        <div class=\"column\">
            <div class=\"ui red segment\">
                <div class=\"ui small statistic\">
                    <div id=\"total-sales\" class=\"value\" style=\"padding-bottom: 10px;\">
                        ";
        // line 9
        echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "totalSales", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "baseCurrency", [], "any", false, false, false, 9), "code", [], "any", false, false, false, 9)], 9, $context, $this->getSourceContext());
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.sales"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui yellow segment\">
                <div class=\"ui small statistic\">
                    <div id=\"new-orders\" class=\"value\" style=\"padding-bottom: 10px;\">
                        ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "numberOfNewOrders", [], "any", false, false, false, 21), "html", null, true);
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.paid_orders"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui blue segment\">
                <div class=\"ui small statistic\">
                    <div id=\"new-customers\" class=\"value\" style=\"padding-bottom: 10px;\">
                        ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "numberOfNewCustomers", [], "any", false, false, false, 33), "html", null, true);
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.customers"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui green segment\">
                <div class=\"ui small statistic\">
                    <div id=\"average-order-value\" class=\"value\" style=\"padding-bottom: 10px;\">
                        ";
        // line 45
        echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "averageOrderValue", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "baseCurrency", [], "any", false, false, false, 45), "code", [], "any", false, false, false, 45)], 45, $context, $this->getSourceContext());
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 48
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
        return "SyliusAdminBundle:Dashboard:_statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 48,  102 => 45,  90 => 36,  84 => 33,  72 => 24,  66 => 21,  54 => 12,  48 => 9,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Dashboard:_statistics.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_statistics.html.twig");
    }
}
