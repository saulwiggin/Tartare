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

/* @SyliusShop/Order/show.html.twig */
class __TwigTemplate_e46fed67d6ba534eff38df9dcb1d1de28a43f92ec23dac89dd4071f79f62145c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Order/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Order/show.html.twig"));

        // line 3
        $macros["messages"] = $this->macros["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusShop/Order/show.html.twig", 3)->unwrap();
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), [0 => "@SyliusShop/Form/theme.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Order/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"ui segment\">
        ";
        // line 9
        $this->loadTemplate("@SyliusShop/Order/_summary.html.twig", "@SyliusShop/Order/show.html.twig", 9)->display($context);
        // line 10
        echo "
        ";
        // line 11
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 11, $this->source); })()), "paymentState", [], "any", false, false, false, 11), [0 => "awaiting_payment"])) {
            // line 12
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_order_show", ["tokenValue" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "tokenValue", [], "any", false, false, false, 12)]), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
            echo "
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

            ";
            // line 15
            $this->loadTemplate("@SyliusShop/Checkout/SelectPayment/_form.html.twig", "@SyliusShop/Order/show.html.twig", 15)->display($context);
            // line 16
            echo "            <div class=\"ui hidden divider\"></div>
            <button type=\"submit\" class=\"ui large blue icon labeled button\" id=\"sylius-pay-link\" ";
            // line 17
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["pay-link"]);
            echo ">
                <i class=\"check icon\"></i> ";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pay"), "html", null, true);
            echo "
            </button>

            ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "_token", [], "any", false, false, false, 21), 'row');
            echo "
            ";
            // line 22
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_end', ["render_rest" => false]);
            echo "
        ";
        } else {
            // line 24
            echo "            ";
            echo twig_call_macro($macros["messages"], "macro_info", ["sylius.ui.you_can_no_longer_change_payment_method_of_this_order"], 24, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 26
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Order/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 26,  114 => 24,  109 => 22,  105 => 21,  99 => 18,  95 => 17,  92 => 16,  90 => 15,  83 => 12,  81 => 11,  78 => 10,  76 => 9,  73 => 8,  63 => 7,  52 => 1,  50 => 5,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@SyliusShop/layout.html.twig' %}

{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

{% form_theme form '@SyliusShop/Form/theme.html.twig' %}

{% block content %}
    <div class=\"ui segment\">
        {% include '@SyliusShop/Order/_summary.html.twig' %}

        {% if order.paymentState in ['awaiting_payment'] %}
            {{ form_start(form, {'action': path('sylius_shop_order_show', {'tokenValue': order.tokenValue}), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

            {% include '@SyliusShop/Checkout/SelectPayment/_form.html.twig' %}
            <div class=\"ui hidden divider\"></div>
            <button type=\"submit\" class=\"ui large blue icon labeled button\" id=\"sylius-pay-link\" {{ sylius_test_html_attribute('pay-link') }}>
                <i class=\"check icon\"></i> {{ 'sylius.ui.pay'|trans }}
            </button>

            {{ form_row(form._token) }}
            {{ form_end(form, {'render_rest': false}) }}
        {% else %}
            {{ messages.info('sylius.ui.you_can_no_longer_change_payment_method_of_this_order') }}
        {% endif %}
    </div>
{% endblock %}
", "@SyliusShop/Order/show.html.twig", "/Users/drsilaswiggin/dev/e-commerce/demo/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Order/show.html.twig");
    }
}
