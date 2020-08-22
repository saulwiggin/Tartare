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

/* SyliusAdminBundle:Order/Show:_payment.html.twig */
class __TwigTemplate_0f8fed36803e99b4a72049c5a514ef26c62bf512e89f1afd0d738d580905ccf5 extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "SyliusAdminBundle:Order/Show:_payment.html.twig", 1)->unwrap();
        // line 2
        $macros["label"] = $this->macros["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusAdminBundle:Order/Show:_payment.html.twig", 2)->unwrap();
        // line 3
        echo "
<div class=\"item\">
    <div class=\"right floated content\">
        ";
        // line 6
        $this->loadTemplate("@SyliusAdmin/Common/Label/paymentState.html.twig", "SyliusAdminBundle:Order/Show:_payment.html.twig", 6)->display(twig_array_merge($context, ["data" => twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "state", [], "any", false, false, false, 6)]));
        // line 7
        echo "    </div>
    <i class=\"large payment icon\"></i>
    <div class=\"content\">
        <div class=\"header\">
            ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "method", [], "any", false, false, false, 11), "html", null, true);
        echo "
        </div>
        <div class=\"description\">
            ";
        // line 14
        echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "amount", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "order", [], "any", false, false, false, 14), "currencyCode", [], "any", false, false, false, 14)], 14, $context, $this->getSourceContext());
        echo "
        </div>
    </div>
    ";
        // line 17
        if ($this->extensions['SM\Extension\Twig\SMExtension']->can(($context["payment"] ?? null), "complete", "sylius_payment")) {
            // line 18
            echo "    <div class=\"ui segment\">
        <form action=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_payment_complete", ["orderId" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 19), "id" => twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\" method=\"post\" novalidate>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "id", [], "any", false, false, false, 20)), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"_method\" value=\"PUT\">
            <button type=\"submit\" class=\"ui icon labeled tiny blue fluid loadable button\"><i class=\"check icon\"></i> ";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.complete"), "html", null, true);
            echo "</button>
        </form>
    </div>
    ";
        }
        // line 26
        echo "    ";
        if ($this->extensions['SM\Extension\Twig\SMExtension']->can(($context["payment"] ?? null), "refund", "sylius_payment")) {
            // line 27
            echo "        <div class=\"ui segment\">
            <form action=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_payment_refund", ["orderId" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 28), "id" => twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" method=\"post\" novalidate>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "id", [], "any", false, false, false, 29)), "html", null, true);
            echo "\" />
                <input type=\"hidden\" name=\"_method\" value=\"PUT\">
                <button type=\"submit\" class=\"ui icon labeled tiny yellow fluid loadable button\"><i class=\"reply all icon\"></i> ";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.refund"), "html", null, true);
            echo "</button>
            </form>
        </div>
    ";
        }
        // line 35
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 35,  102 => 31,  97 => 29,  93 => 28,  90 => 27,  87 => 26,  80 => 22,  75 => 20,  71 => 19,  68 => 18,  66 => 17,  60 => 14,  54 => 11,  48 => 7,  46 => 6,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Order/Show:_payment.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_payment.html.twig");
    }
}
