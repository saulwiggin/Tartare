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

/* SyliusShopBundle:Account:dashboard.html.twig */
class __TwigTemplate_1a2bcf3e9d9508ee9d9236757825597f5b47a40d14f49d42527a730a63dc018c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'subcontent' => [$this, 'block_subcontent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusShop/Account/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@SyliusShop/Account/layout.html.twig", "SyliusShopBundle:Account:dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"ui breadcrumb\">
        <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
        <div class=\"divider\"> / </div>
        <div class=\"active section\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.my_account"), "html", null, true);
        echo "</div>
    </div>
";
    }

    // line 11
    public function block_subcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    <h1 class=\"ui dividing header\">
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.my_account"), "html", null, true);
        echo "
        <div class=\"sub header\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.manage_your_personal_information_and_preferences"), "html", null, true);
        echo "</div>
    </h1>

    ";
        // line 17
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.account.dashboard.after_content_header", ["customer" => ($context["customer"] ?? null)]);
        echo "

    <div class=\"ui large list\" id=\"customer-information\" ";
        // line 19
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["customer-information"]);
        echo ">
        <div class=\"item\">
            ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", [], "any", false, false, false, 21), "html", null, true);
        echo "
        </div>
        <div class=\"item\">
            <strong>
                ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "email", [], "any", false, false, false, 25), "html", null, true);
        echo "
            </strong>
        </div>
        <div class=\"item\">
            ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "user", [], "any", false, false, false, 29), "verified", [], "any", false, false, false, 29)) {
            // line 30
            echo "                <span class=\"ui icon green basic label\"><i class=\"checkmark icon\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.verified"), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 32
            echo "                <span class=\"ui icon red basic label\"><i class=\"remove icon\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.not_verified"), "html", null, true);
            echo "</span>
            ";
        }
        // line 34
        echo "        </div>
    </div>

    ";
        // line 37
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.account.dashboard.after_information", ["customer" => ($context["customer"] ?? null)]);
        echo "

    <div class=\"ui text menu\">
        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_profile_update");
        echo "\" class=\"item\"><i class=\"pencil icon\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit"), "html", null, true);
        echo "</a>
        <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_change_password");
        echo "\" class=\"item\"><i class=\"lock icon\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_password"), "html", null, true);
        echo "</a>
        ";
        // line 42
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "user", [], "any", false, false, false, 42), "verified", [], "any", false, false, false, 42)) {
            // line 43
            echo "            <form class=\"item\" id=\"verification-form\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["verification-form"]);
            echo " action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_user_request_verification_token");
            echo "\" method=\"post\">
                <button type=\"submit\" class=\"ui basic icon mini button\" ";
            // line 44
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["verification-button"]);
            echo ">
                    <i class=\"checkmark icon\"></i> ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.verify"), "html", null, true);
            echo "
                </button>
            </form>
        ";
        }
        // line 49
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 49,  159 => 45,  155 => 44,  148 => 43,  146 => 42,  140 => 41,  134 => 40,  128 => 37,  123 => 34,  117 => 32,  111 => 30,  109 => 29,  102 => 25,  95 => 21,  90 => 19,  85 => 17,  79 => 14,  75 => 13,  72 => 12,  68 => 11,  61 => 7,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Account:dashboard.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/dashboard.html.twig");
    }
}
