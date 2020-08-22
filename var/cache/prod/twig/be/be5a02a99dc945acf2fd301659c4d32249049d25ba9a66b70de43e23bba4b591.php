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

/* @SyliusShop/Common/Form/_login.html.twig */
class __TwigTemplate_a7a1dc8a9ffdba4cd3c53f3322936a015aad55e870fcc8527c7e4f3ea3fb5ba1 extends \Twig\Template
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
        echo "<div class=\"one field\" id=\"sylius-api-login\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 2), 'errors', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["login-errors"]));
        echo "
    ";
        // line 3
        $context["ajax_user_check_action_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_ajax_user_check_action");
        // line 4
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 4), 'row', call_user_func_array($this->env->getFilter('sylius_merge_recursive')->getCallable(), [call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["login-email"]), ["attr" => ["data-url" => ($context["ajax_user_check_action_path"] ?? null)]]]));
        echo "

    <div class=\"ui action input\" id=\"sylius-api-login-form\">
        <input type=\"password\" placeholder=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.password"), "html", null, true);
        echo "\" ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["password-input"]);
        echo ">
        <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("shop_authenticate"), "html", null, true);
        echo "\">
        <a class=\"ui blue button\" href=\"#\" id=\"sylius-api-login-submit\" ";
        // line 9
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["login-button"]);
        echo " data-url=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_login_check");
        echo "\">
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.sign_in"), "html", null, true);
        echo "
        </a>
    </div>
    <div
        class=\"ui red fluid top pointing basic label hidden sylius-validation-error\"
        id=\"sylius-api-validation-error\"
        ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["login-validation-error"]);
        echo "
    >
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/Form/_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  69 => 10,  63 => 9,  59 => 8,  53 => 7,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Common/Form/_login.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Form/_login.html.twig");
    }
}
