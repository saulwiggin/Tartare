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

/* SyliusAdminBundle:Order/Show:_shipment.html.twig */
class __TwigTemplate_b36111d3e24ee31528cc5fb3d99695a57e6f9f04f05a85953bc43d8d355cddf3 extends \Twig\Template
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
        $macros["label"] = $this->macros["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusAdminBundle:Order/Show:_shipment.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["shipped"] = twig_constant("Sylius\\Component\\Shipping\\Model\\Shipment::STATE_SHIPPED");
        // line 4
        echo "
<div class=\"item\">
    <div class=\"right floated content\">
        ";
        // line 7
        $this->loadTemplate("@SyliusAdmin/Common/Label/shipmentState.html.twig", "SyliusAdminBundle:Order/Show:_shipment.html.twig", 7)->display(twig_array_merge($context, ["data" => twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "state", [], "any", false, false, false, 7)]));
        // line 8
        echo "    </div>
    <i class=\"large truck icon\"></i>
    <div class=\"content\">
        <div class=\"header\">
            ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "method", [], "any", false, false, false, 12), "html", null, true);
        echo "
        </div>
        <div class=\"description\">
            <i class=\"globe icon\"></i>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "method", [], "any", false, false, false, 15), "zone", [], "any", false, false, false, 15), "html", null, true);
        echo "
        </div>
        ";
        // line 17
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "shippedAt", [], "any", false, false, false, 17))) {
            // line 18
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipped_at"), "html", null, true);
            echo ": <span class=\"shipped-at-date\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "shippedAt", [], "any", false, false, false, 18), "d-m-Y H:i:s"), "html", null, true);
            echo "</span>
        ";
        }
        // line 20
        echo "    </div>
    ";
        // line 21
        if ($this->extensions['SM\Extension\Twig\SMExtension']->can(($context["shipment"] ?? null), "ship", "sylius_shipment")) {
            // line 22
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_partial_shipment_ship", ["orderId" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 22), "id" => twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "id", [], "any", false, false, false, 22)]));
            echo "
    ";
        }
        // line 24
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "tracking", [], "any", false, false, false, 24))) {
            // line 25
            echo "        <div class=\"ui segment\">
            <span class=\"ui top attached icon label\"><i class=\"plane icon\"></i> ";
            // line 26
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tracking_code")), "html", null, true);
            echo "</span>
            <p>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "tracking", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        // line 30
        echo "
    ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "state", [], "any", false, false, false, 31) == ($context["shipped"] ?? null))) {
            // line 32
            echo "        ";
            $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_shipment_resend_confirmation_email", ["id" => twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "id", [], "any", false, false, false, 32), "_csrf_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "id", [], "any", false, false, false, 32))]);
            // line 33
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "\" class=\"ui icon labeled tiny fluid button\" style=\"margin: 7px 0 0;\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["resend-shipment-confirmation-email"]);
            echo ">
            <i class=\"send icon\"></i> ";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.resend_the_shipment_confirmation_email"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 37
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_shipment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 37,  120 => 34,  113 => 33,  110 => 32,  108 => 31,  105 => 30,  99 => 27,  95 => 26,  92 => 25,  89 => 24,  83 => 22,  81 => 21,  78 => 20,  70 => 18,  68 => 17,  63 => 15,  57 => 12,  51 => 8,  49 => 7,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Order/Show:_shipment.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_shipment.html.twig");
    }
}
