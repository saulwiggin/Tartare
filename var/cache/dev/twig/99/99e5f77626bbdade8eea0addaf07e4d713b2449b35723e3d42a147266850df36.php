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
class __TwigTemplate_84476c3596e08acaa73c775e1553d16a4d5b9ea261a56817c72bfcf92a28c5c0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_shipment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_shipment.html.twig"));

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
        $this->loadTemplate("@SyliusAdmin/Common/Label/shipmentState.html.twig", "SyliusAdminBundle:Order/Show:_shipment.html.twig", 7)->display(twig_array_merge($context, ["data" => twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 7, $this->source); })()), "state", [], "any", false, false, false, 7)]));
        // line 8
        echo "    </div>
    <i class=\"large truck icon\"></i>
    <div class=\"content\">
        <div class=\"header\">
            ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 12, $this->source); })()), "method", [], "any", false, false, false, 12), "html", null, true);
        echo "
        </div>
        <div class=\"description\">
            <i class=\"globe icon\"></i>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 15, $this->source); })()), "method", [], "any", false, false, false, 15), "zone", [], "any", false, false, false, 15), "html", null, true);
        echo "
        </div>
        ";
        // line 17
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 17, $this->source); })()), "shippedAt", [], "any", false, false, false, 17))) {
            // line 18
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipped_at"), "html", null, true);
            echo ": <span class=\"shipped-at-date\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 18, $this->source); })()), "shippedAt", [], "any", false, false, false, 18), "d-m-Y H:i:s"), "html", null, true);
            echo "</span>
        ";
        }
        // line 20
        echo "    </div>
    ";
        // line 21
        if ($this->extensions['SM\Extension\Twig\SMExtension']->can((isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 21, $this->source); })()), "ship", "sylius_shipment")) {
            // line 22
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_partial_shipment_ship", ["orderId" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "id" => twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]));
            echo "
    ";
        }
        // line 24
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 24, $this->source); })()), "tracking", [], "any", false, false, false, 24))) {
            // line 25
            echo "        <div class=\"ui segment\">
            <span class=\"ui top attached icon label\"><i class=\"plane icon\"></i> ";
            // line 26
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tracking_code")), "html", null, true);
            echo "</span>
            <p>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 27, $this->source); })()), "tracking", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        // line 30
        echo "
    ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 31, $this->source); })()), "state", [], "any", false, false, false, 31) == (isset($context["shipped"]) || array_key_exists("shipped", $context) ? $context["shipped"] : (function () { throw new RuntimeError('Variable "shipped" does not exist.', 31, $this->source); })()))) {
            // line 32
            echo "        ";
            $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_shipment_resend_confirmation_email", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "_csrf_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32))]);
            // line 33
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 33, $this->source); })()), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  132 => 37,  126 => 34,  119 => 33,  116 => 32,  114 => 31,  111 => 30,  105 => 27,  101 => 26,  98 => 25,  95 => 24,  89 => 22,  87 => 21,  84 => 20,  76 => 18,  74 => 17,  69 => 15,  63 => 12,  57 => 8,  55 => 7,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@SyliusUi/Macro/labels.html.twig' as label %}

{% set shipped = constant('Sylius\\\\Component\\\\Shipping\\\\Model\\\\Shipment::STATE_SHIPPED') %}

<div class=\"item\">
    <div class=\"right floated content\">
        {% include '@SyliusAdmin/Common/Label/shipmentState.html.twig' with {'data': shipment.state} %}
    </div>
    <i class=\"large truck icon\"></i>
    <div class=\"content\">
        <div class=\"header\">
            {{ shipment.method }}
        </div>
        <div class=\"description\">
            <i class=\"globe icon\"></i>{{ shipment.method.zone }}
        </div>
        {% if shipment.shippedAt is not empty %}
            {{ 'sylius.ui.shipped_at'|trans }}: <span class=\"shipped-at-date\">{{ shipment.shippedAt|date('d-m-Y H:i:s') }}</span>
        {% endif %}
    </div>
    {% if sm_can(shipment, 'ship', 'sylius_shipment') %}
        {{ render(path('sylius_admin_partial_shipment_ship', {'orderId': order.id, 'id': shipment.id})) }}
    {% endif %}
    {% if shipment.tracking is not empty %}
        <div class=\"ui segment\">
            <span class=\"ui top attached icon label\"><i class=\"plane icon\"></i> {{ 'sylius.ui.tracking_code'|trans|upper }}</span>
            <p>{{ shipment.tracking }}</p>
        </div>
    {% endif %}

    {% if shipment.state == shipped %}
        {% set path = path('sylius_admin_shipment_resend_confirmation_email', {'id': shipment.id, '_csrf_token': csrf_token(shipment.id)}) %}
        <a href=\"{{ path }}\" class=\"ui icon labeled tiny fluid button\" style=\"margin: 7px 0 0;\" {{ sylius_test_html_attribute('resend-shipment-confirmation-email') }}>
            <i class=\"send icon\"></i> {{ 'sylius.ui.resend_the_shipment_confirmation_email'|trans }}
        </a>
    {% endif %}
</div>
", "SyliusAdminBundle:Order/Show:_shipment.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_shipment.html.twig");
    }
}
