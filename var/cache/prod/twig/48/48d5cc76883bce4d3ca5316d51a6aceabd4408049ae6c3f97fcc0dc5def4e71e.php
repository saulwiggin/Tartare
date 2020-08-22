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

/* SyliusShopBundle:Account/AddressBook:_item.html.twig */
class __TwigTemplate_e9cd60882fca723ecb732779268fa5e8b6829ad03bcdf5776eaffaa0803fce10 extends \Twig\Template
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
        $macros["buttons"] = $this->macros["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusShopBundle:Account/AddressBook:_item.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"eight wide column\">
    <div class=\"ui segment address\">
        <div class=\"ui stackable two column grid\" ";
        // line 5
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["address", sprintf("%s %s", twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "firstName", [], "any", false, false, false, 5), twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "lastName", [], "any", false, false, false, 5))]);
        echo ">
            <div class=\"column\">
                ";
        // line 7
        $this->loadTemplate("@SyliusShop/Common/_address.html.twig", "SyliusShopBundle:Account/AddressBook:_item.html.twig", 7)->display(twig_array_merge($context, ["address" => ($context["address"] ?? null)]));
        // line 8
        echo "            </div>
            <div class=\"right aligned column\">
                <div class=\"ui vertical small icon labeled buttons\">
                    <div ";
        // line 11
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["edit-button"]);
        echo ">";
        echo twig_call_macro($macros["buttons"], "macro_edit", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_update", ["id" => twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 11)])], 11, $context, $this->getSourceContext());
        echo "</div>
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_set_as_default", ["id" => twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 12)]));
        echo "
                    ";
        // line 13
        echo twig_call_macro($macros["buttons"], "macro_delete", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 13)]), null, true, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 13)], 13, $context, $this->getSourceContext());
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/AddressBook:_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  62 => 12,  56 => 11,  51 => 8,  49 => 7,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Account/AddressBook:_item.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/AddressBook/_item.html.twig");
    }
}
