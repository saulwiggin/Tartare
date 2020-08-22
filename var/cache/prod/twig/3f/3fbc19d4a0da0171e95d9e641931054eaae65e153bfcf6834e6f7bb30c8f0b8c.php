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
class __TwigTemplate_01bf96512e2d37462ce8f9452c92b87f895559f8eb17d56436e62858ea39f677 extends \Twig\Template
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
        list($context["labels"], $context["values"]) =         [twig_get_attribute($this->env, $this->source, ($context["sales_summary"] ?? null), "months", [], "any", false, false, false, 1), twig_get_attribute($this->env, $this->source, ($context["sales_summary"] ?? null), "sales", [], "any", false, false, false, 1)];
        // line 2
        echo "
";
        // line 3
        if ((($context["labels"] ?? null) && ($context["values"] ?? null))) {
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
            echo twig_escape_filter($this->env, json_encode(($context["labels"] ?? null)), "html", null, true);
            echo "\" data-values=\"";
            echo twig_escape_filter($this->env, json_encode(($context["values"] ?? null)), "html", null, true);
            echo "\" data-currency=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_currency_symbol')->getCallable(), [($context["currency"] ?? null)]), "html", null, true);
            echo "\"></canvas>
            </div>
        </div>
    </div>
";
        }
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
        return array (  53 => 8,  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Dashboard:_chart.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_chart.html.twig");
    }
}
