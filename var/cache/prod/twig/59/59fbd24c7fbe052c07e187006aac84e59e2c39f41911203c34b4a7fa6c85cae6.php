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

/* @SyliusShop/Account/AddressBook/_defaultAddress.html.twig */
class __TwigTemplate_1b5acc5d9dc21cf276c741a1102ebeb8f43717d89562a8ab2aece911ed6c6916 extends \Twig\Template
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
        $macros["buttons"] = $this->macros["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusShop/Account/AddressBook/_defaultAddress.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"ui top attached styled header\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.your_default_address"), "html", null, true);
        echo "</div>
<div class=\"ui attached segment\" id=\"sylius-default-address\" ";
        // line 4
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["default-address"]);
        echo ">
    <div class=\"ui stackable two column grid\" ";
        // line 5
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["address", sprintf("%s %s", twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "firstName", [], "any", false, false, false, 5), twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "lastName", [], "any", false, false, false, 5))]);
        echo ">
        <div class=\"column\">
            ";
        // line 7
        $this->loadTemplate("@SyliusShop/Common/_address.html.twig", "@SyliusShop/Account/AddressBook/_defaultAddress.html.twig", 7)->display(twig_array_merge($context, ["address" => ($context["address"] ?? null)]));
        // line 8
        echo "        </div>
        <div class=\"right aligned column\">
            <div class=\"ui vertical icon labeled buttons\">
                <div ";
        // line 11
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["edit-button"]);
        echo ">";
        echo twig_call_macro($macros["buttons"], "macro_edit", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_update", ["id" => twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 11)])], 11, $context, $this->getSourceContext());
        echo "</div>
                ";
        // line 12
        echo twig_call_macro($macros["buttons"], "macro_delete", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 12)]), null, true, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 12)], 12, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
    </div>
</div>
<div class=\"ui divider\"></div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Account/AddressBook/_defaultAddress.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  62 => 11,  57 => 8,  55 => 7,  50 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Account/AddressBook/_defaultAddress.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/AddressBook/_defaultAddress.html.twig");
    }
}
