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

/* @SyliusAdmin/Dashboard/_statistics.html.twig */
class __TwigTemplate_d4d18b84df00d2a6974d0e163b9e3f4bdc9577092c0399232f552f7114c226d4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_statistics.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_statistics.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Dashboard/_statistics.html.twig", 1)->unwrap();
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
        echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 9, $this->source); })()), "totalSales", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 9, $this->source); })()), "baseCurrency", [], "any", false, false, false, 9), "code", [], "any", false, false, false, 9)], 9, $context, $this->getSourceContext());
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 21, $this->source); })()), "numberOfNewOrders", [], "any", false, false, false, 21), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 33, $this->source); })()), "numberOfNewCustomers", [], "any", false, false, false, 33), "html", null, true);
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
        echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new RuntimeError('Variable "statistics" does not exist.', 45, $this->source); })()), "averageOrderValue", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 45, $this->source); })()), "baseCurrency", [], "any", false, false, false, 45), "code", [], "any", false, false, false, 45)], 45, $context, $this->getSourceContext());
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Dashboard/_statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 48,  108 => 45,  96 => 36,  90 => 33,  78 => 24,  72 => 21,  60 => 12,  54 => 9,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

<div class=\"ui grid\">
    <div class=\"center aligned doubling four column row\">
        <div class=\"column\">
            <div class=\"ui red segment\">
                <div class=\"ui small statistic\">
                    <div id=\"total-sales\" class=\"value\" style=\"padding-bottom: 10px;\">
                        {{ money.format(statistics.totalSales, channel.baseCurrency.code) }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.sales'|trans }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui yellow segment\">
                <div class=\"ui small statistic\">
                    <div id=\"new-orders\" class=\"value\" style=\"padding-bottom: 10px;\">
                        {{ statistics.numberOfNewOrders }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.paid_orders'|trans }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui blue segment\">
                <div class=\"ui small statistic\">
                    <div id=\"new-customers\" class=\"value\" style=\"padding-bottom: 10px;\">
                        {{ statistics.numberOfNewCustomers }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.customers'|trans }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui green segment\">
                <div class=\"ui small statistic\">
                    <div id=\"average-order-value\" class=\"value\" style=\"padding-bottom: 10px;\">
                        {{ money.format(statistics.averageOrderValue, channel.baseCurrency.code) }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.average_order_value'|trans }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "@SyliusAdmin/Dashboard/_statistics.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_statistics.html.twig");
    }
}
