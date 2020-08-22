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

/* SyliusShopBundle:Common:_address.html.twig */
class __TwigTemplate_20cbf09c3a069ed407b0158677f21d52c79a3302c52e17be8fefbaa2b834f690 extends \Twig\Template
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
        $macros["flags"] = $this->macros["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusShopBundle:Common:_address.html.twig", 1)->unwrap();
        // line 2
        echo "
<address ";
        // line 3
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["address-context", sprintf("%s %s", twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "firstName", [], "any", false, false, false, 3), twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "lastName", [], "any", false, false, false, 3))]);
        echo ">
    ";
        // line 4
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 4))) {
            // line 5
            echo "        <strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 5), "html", null, true);
            echo "</strong><br>
    ";
        }
        // line 7
        echo "    <strong ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["full-name ", sprintf("%s %s", twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "firstName", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "lastName", [], "any", false, false, false, 7))]);
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "firstName", [], "any", false, false, false, 7), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "lastName", [], "any", false, false, false, 7), "html", null, true);
        echo "</strong><br>
    ";
        // line 8
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "phoneNumber", [], "any", false, false, false, 8))) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "phoneNumber", [], "any", false, false, false, 9), "html", null, true);
            echo "<br/>
    ";
        }
        // line 11
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "street", [], "any", false, false, false, 11), "html", null, true);
        echo "<br/>
    ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "city", [], "any", false, false, false, 12), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "postcode", [], "any", false, false, false, 12), "html", null, true);
        echo "<br/>
    ";
        // line 13
        if ( !twig_test_empty(call_user_func_array($this->env->getFilter('sylius_province_name')->getCallable(), [($context["address"] ?? null)]))) {
            // line 14
            echo "        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_province_name')->getCallable(), [($context["address"] ?? null)]), "html", null, true);
            echo "<br/>
    ";
        }
        // line 16
        echo "    ";
        echo twig_call_macro($macros["flags"], "macro_fromCountryCode", [twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "countryCode", [], "any", false, false, false, 16)], 16, $context, $this->getSourceContext());
        echo "
    ";
        // line 17
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Sylius\Bundle\AddressingBundle\Twig\CountryNameExtension']->translateCountryIsoCode(twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "countryCode", [], "any", false, false, false, 17))), "html", null, true);
        echo "
</address>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common:_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 17,  90 => 16,  84 => 14,  82 => 13,  76 => 12,  71 => 11,  65 => 9,  63 => 8,  54 => 7,  48 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Common:_address.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/_address.html.twig");
    }
}
