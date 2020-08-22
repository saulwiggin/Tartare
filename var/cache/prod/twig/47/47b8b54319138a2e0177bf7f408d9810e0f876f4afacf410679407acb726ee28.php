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

/* @SyliusShop/Common/Order/_payments.html.twig */
class __TwigTemplate_a9197addab412a92cd7f975bbbdef8f9eaf00d47e287f484574b69b159e79261 extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Common/Order/_payments.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["state"] = twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "paymentState", [], "any", false, false, false, 3);
        // line 4
        echo "
";
        // line 5
        if ((($context["state"] ?? null) != "cart")) {
            // line 6
            echo "    ";
            $this->loadTemplate("@SyliusShop/Common/Order/Label/PaymentState/orderPaymentState.html.twig", "@SyliusShop/Common/Order/_payments.html.twig", 6)->display($context);
        }
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payments", [], "any", false, false, false, 9));
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
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 10
            echo "    ";
            $context["state"] = twig_get_attribute($this->env, $this->source, $context["payment"], "state", [], "any", false, false, false, 10);
            // line 11
            echo "
    <div class=\"ui small icon message\">
        <i class=\"payment icon\"></i>
        <div class=\"content\">
            <div class=\"header\" id=\"sylius-payment-method\" ";
            // line 15
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["payment-method"]);
            echo ">
                ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "method", [], "any", false, false, false, 16), "html", null, true);
            echo "
            </div>
            <p ";
            // line 18
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["payment-price"]);
            echo ">";
            echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, $context["payment"], "currencyCode", [], "any", false, false, false, 18)], 18, $context, $this->getSourceContext());
            echo "</p>
            ";
            // line 19
            if ((($context["state"] ?? null) != "cart")) {
                // line 20
                echo "            <p id=\"payment-status\" ";
                echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["payment-state"]);
                echo ">
                ";
                // line 21
                $this->loadTemplate("@SyliusShop/Common/Order/Label/PaymentState/singlePaymentState.html.twig", "@SyliusShop/Common/Order/_payments.html.twig", 21)->display(twig_array_merge($context, ["state" => ($context["state"] ?? null)]));
                // line 22
                echo "            </p>
            ";
            }
            // line 24
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/Order/_payments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 24,  106 => 22,  104 => 21,  99 => 20,  97 => 19,  91 => 18,  86 => 16,  82 => 15,  76 => 11,  73 => 10,  56 => 9,  53 => 8,  49 => 6,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Common/Order/_payments.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/_payments.html.twig");
    }
}
