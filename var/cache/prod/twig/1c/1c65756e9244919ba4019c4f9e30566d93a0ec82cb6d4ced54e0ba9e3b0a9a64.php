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
class __TwigTemplate_d3ce0d22dcb0e2e4cb8b6fcb71147fb383199b5880bc965bb63dc71f018c55c9 extends \Twig\Template
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
        // line 3
        $macros["messages"] = $this->macros["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusShop/Order/show.html.twig", 3)->unwrap();
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@SyliusShop/Form/theme.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Order/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"ui segment\">
        ";
        // line 9
        $this->loadTemplate("@SyliusShop/Order/_summary.html.twig", "@SyliusShop/Order/show.html.twig", 9)->display($context);
        // line 10
        echo "
        ";
        // line 11
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "paymentState", [], "any", false, false, false, 11), [0 => "awaiting_payment"])) {
            // line 12
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_order_show", ["tokenValue" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tokenValue", [], "any", false, false, false, 12)]), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 21), 'row');
            echo "
            ";
            // line 22
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
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
        return array (  102 => 26,  96 => 24,  91 => 22,  87 => 21,  81 => 18,  77 => 17,  74 => 16,  72 => 15,  65 => 12,  63 => 11,  60 => 10,  58 => 9,  55 => 8,  51 => 7,  46 => 1,  44 => 5,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Order/show.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Order/show.html.twig");
    }
}
