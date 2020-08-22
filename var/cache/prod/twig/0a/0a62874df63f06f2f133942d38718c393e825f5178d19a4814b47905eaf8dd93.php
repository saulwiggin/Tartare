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

/* SyliusShopBundle:Order:thankYou.html.twig */
class __TwigTemplate_b53ed0ba9afa02dae0288fbeef729dbe14863983371da52e25b6b66cf6366ee6 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Order:thankYou.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui grid\">
        <div class=\"center aligned sixteen wide column\">
            <h1 class=\"ui icon header\">
                ";
        // line 8
        $context["lastPayment"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payments", [], "any", false, false, false, 8), "last", [], "method", false, false, false, 8);
        // line 9
        echo "                <i class=\"circular rocket icon\"></i>
                <div class=\"content\" id=\"sylius-thank-you\" ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["thank-you"]);
        echo ">
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.thank_you"), "html", null, true);
        echo "
                    <div class=\"sub header\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.placed_an_order"), "html", null, true);
        echo "</div>
                </div>
            </h1>

            ";
        // line 16
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.order.thank_you.after_message", ["order" => ($context["order"] ?? null)]);
        echo "

            ";
        // line 18
        if ((($context["lastPayment"] ?? null) != false)) {
            // line 19
            echo "                ";
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lastPayment"] ?? null), "method", [], "any", false, false, false, 19), "instructions", [], "any", false, false, false, 19))) {
                // line 20
                echo "                    <div id=\"sylius-payment-method-instructions\" class=\"ui segment\" ";
                echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["payment-method-instructions"]);
                echo ">
                        ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lastPayment"] ?? null), "method", [], "any", false, false, false, 21), "instructions", [], "any", false, false, false, 21), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 24
            echo "                <div class=\"ui hidden divider\"></div>
            ";
        }
        // line 26
        echo "
            ";
        // line 27
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customer", [], "any", false, false, false, 27), "user", [], "any", false, false, false, 27))) {
            // line 28
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_order_show", ["number" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" id=\"sylius-show-order-in-account\" class=\"ui large blue button\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["show-order-in-account"]);
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_order"), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 30
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_order_show", ["tokenValue" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tokenValue", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" id=\"payment-method-page\" class=\"ui large blue button\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["payment-method-page"]);
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_payment_method"), "html", null, true);
            echo "</a>
                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_register_after_checkout", ["tokenValue" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tokenValue", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"ui large green button\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["create-an-account"]);
            echo ">
                    <i class=\"signup icon\"></i>
                    ";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.create_an_account"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 36
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Order:thankYou.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 36,  132 => 33,  125 => 31,  116 => 30,  106 => 28,  104 => 27,  101 => 26,  97 => 24,  91 => 21,  86 => 20,  83 => 19,  81 => 18,  76 => 16,  69 => 12,  65 => 11,  61 => 10,  58 => 9,  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Order:thankYou.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Order/thankYou.html.twig");
    }
}
