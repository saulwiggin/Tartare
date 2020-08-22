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

/* SyliusAdminBundle:Dashboard:_chart.html.twig */
class __TwigTemplate_fdc08fbcd35f1b00101a33be13ed1a9c5225a5d675727199f2caba4e278d2a19 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:_chart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:_chart.html.twig"));

        // line 1
        list($context["labels"], $context["values"]) =         [twig_get_attribute($this->env, $this->source, (isset($context["sales_summary"]) || array_key_exists("sales_summary", $context) ? $context["sales_summary"] : (function () { throw new RuntimeError('Variable "sales_summary" does not exist.', 1, $this->source); })()), "months", [], "any", false, false, false, 1), twig_get_attribute($this->env, $this->source, (isset($context["sales_summary"]) || array_key_exists("sales_summary", $context) ? $context["sales_summary"] : (function () { throw new RuntimeError('Variable "sales_summary" does not exist.', 1, $this->source); })()), "sales", [], "any", false, false, false, 1)];
        // line 2
        echo "
";
        // line 3
        if (((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 3, $this->source); })()) && (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "    <div class=\"ui grid\">
        <div class=\"column\">
            <h3 class=\"ui top attached header\">";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.sales_summary"), "html", null, true);
            echo "</h3>
            <div class=\"ui attached segment\" style=\"height: 400px;\">
                <canvas id=\"dashboard-chart\" data-labels=\"";
            // line 8
            echo twig_escape_filter($this->env, json_encode((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 8, $this->source); })())), "html", null, true);
            echo "\" data-values=\"";
            echo twig_escape_filter($this->env, json_encode((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 8, $this->source); })())), "html", null, true);
            echo "\" data-currency=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_currency_symbol')->getCallable(), [(isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 8, $this->source); })())]), "html", null, true);
            echo "\"></canvas>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Dashboard:_chart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  54 => 6,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set labels, values = sales_summary.months, sales_summary.sales %}

{% if labels and values %}
    <div class=\"ui grid\">
        <div class=\"column\">
            <h3 class=\"ui top attached header\">{{ 'sylius.ui.sales_summary'|trans }}</h3>
            <div class=\"ui attached segment\" style=\"height: 400px;\">
                <canvas id=\"dashboard-chart\" data-labels=\"{{ labels|json_encode() }}\" data-values=\"{{ values|json_encode() }}\" data-currency=\"{{ currency|sylius_currency_symbol }}\"></canvas>
            </div>
        </div>
    </div>
{% endif %}
", "SyliusAdminBundle:Dashboard:_chart.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_chart.html.twig");
    }
}
