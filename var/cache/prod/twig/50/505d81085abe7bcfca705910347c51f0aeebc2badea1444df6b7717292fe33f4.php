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

/* SyliusShopBundle:Login:_login.html.twig */
class __TwigTemplate_aeb7967bc9a07488adaf3a3cf7b776e30a0b99dbc34e9ea8dc67e1432313a4a7 extends \Twig\Template
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
        echo "<h4 class=\"ui dividing header\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.registered_customers"), "html", null, true);
        echo "</h4>
<p>";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.if_you_have_an_account_sign_in_with_your_email_address"), "html", null, true);
        echo ".</p>
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_login_check"), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
        echo "
    ";
        // line 4
        $this->loadTemplate("@SyliusShop/Login/_form.html.twig", "SyliusShopBundle:Login:_login.html.twig", 4)->display($context);
        // line 5
        echo "
    ";
        // line 6
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.login.form", ["form" => ($context["form"] ?? null)]);
        echo "

    <button type=\"submit\" class=\"ui blue submit button\" ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["login-button"]);
        echo ">
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.login"), "html", null, true);
        echo "
    </button>

    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_request_password_reset_token");
        echo "\" class=\"ui right floated button\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.forgot_password"), "html", null, true);
        echo "</a>

    <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("shop_authenticate"), "html", null, true);
        echo "\">
";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Login:_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  77 => 14,  70 => 12,  64 => 9,  60 => 8,  55 => 6,  52 => 5,  50 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Login:_login.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Login/_login.html.twig");
    }
}
