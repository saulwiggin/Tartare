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

/* @SyliusShop/Common/Order/_shipments.html.twig */
class __TwigTemplate_49a1610174ce0f6e2778f4dc084cd4f96451d3035319288ccbf0021380e4e13f extends \Twig\Template
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
        $context["state"] = twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shippingState", [], "any", false, false, false, 1);
        // line 2
        if ((($context["state"] ?? null) != "cart")) {
            // line 3
            echo "    ";
            $this->loadTemplate("@SyliusShop/Common/Order/Label/ShipmentState/orderShipmentState.html.twig", "@SyliusShop/Common/Order/_shipments.html.twig", 3)->display($context);
        }
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shipments", [], "any", false, false, false, 5));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["shipment"]) {
            // line 6
            echo "    ";
            $context["state"] = twig_get_attribute($this->env, $this->source, $context["shipment"], "state", [], "any", false, false, false, 6);
            // line 7
            echo "    <div class=\"ui small icon message\">
        <i class=\"truck icon\"></i>
        <div class=\"content\">
            <div class=\"header\" id=\"sylius-shipping-method\" ";
            // line 10
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["shipping-method"]);
            echo ">
                ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipment"], "method", [], "any", false, false, false, 11), "html", null, true);
            echo "
            </div>
            ";
            // line 13
            if ((($context["state"] ?? null) != "cart")) {
                // line 14
                echo "            <p id=\"shipment-status\" ";
                echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["shipment-state"]);
                echo ">
                ";
                // line 15
                $this->loadTemplate("@SyliusShop/Common/Order/Label/ShipmentState/singleShipmentState.html.twig", "@SyliusShop/Common/Order/_shipments.html.twig", 15)->display(twig_array_merge($context, ["state" => ($context["state"] ?? null)]));
                // line 16
                echo "            </p>
            ";
            }
            // line 18
            echo "        </div>
    </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/Order/_shipments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 18,  88 => 16,  86 => 15,  81 => 14,  79 => 13,  74 => 11,  70 => 10,  65 => 7,  62 => 6,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Common/Order/_shipments.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/_shipments.html.twig");
    }
}
