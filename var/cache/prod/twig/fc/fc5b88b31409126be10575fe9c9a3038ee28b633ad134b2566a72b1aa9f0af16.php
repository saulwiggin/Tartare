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

/* SyliusShopBundle:Account:profileUpdate.html.twig */
class __TwigTemplate_55bdcfcd71e738fab6c20ec8d40cb18aa94d84d6880b21ffa3e68e174e351b25 extends \Twig\Template
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
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@SyliusShop/Form/theme.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/layout.html.twig", "SyliusShopBundle:Account:profileUpdate.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"ui breadcrumb\">
        <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
        <div class=\"divider\"> / </div>
        <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_dashboard");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.my_account"), "html", null, true);
        echo "</a>
        <div class=\"divider\"> / </div>
        <div class=\"active section\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.personal_information"), "html", null, true);
        echo "</div>
    </div>
";
    }

    // line 15
    public function block_subcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <div class=\"ui segment\">
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_profile_update"), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
        echo "
        <h1 class=\"ui dividing header\">
            ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.your_profile"), "html", null, true);
        echo "
            <div class=\"sub header\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit_your_personal_information"), "html", null, true);
        echo "</div>
        </h1>

        ";
        // line 23
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.account.profile.update.after_content_header", ["customer" => ($context["customer"] ?? null), "form" => ($context["form"] ?? null)]);
        echo "

        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

        <div class=\"two fields\">
            <div class=\"field\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstName", [], "any", false, false, false, 28), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["first-name"]));
        echo "</div>
            <div class=\"field\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastName", [], "any", false, false, false, 29), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["last-name"]));
        echo "</div>
        </div>
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 31), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["email"]));
        echo "
        <div class=\"two fields\">
            <div class=\"field\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birthday", [], "any", false, false, false, 33), 'row');
        echo "</div>
            <div class=\"field\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "gender", [], "any", false, false, false, 34), 'row');
        echo "</div>
        </div>
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phoneNumber", [], "any", false, false, false, 36), 'row');
        echo "
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "subscribedToNewsletter", [], "any", false, false, false, 37), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["subscribe-newsletter"]));
        echo "

        ";
        // line 39
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.account.profile.update.form", ["customer" => ($context["customer"] ?? null), "form" => ($context["form"] ?? null)]);
        echo "

        <button type=\"submit\" class=\"ui large primary button\" ";
        // line 41
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["save-changes"]);
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.save_changes"), "html", null, true);
        echo "</button>
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 42), 'row');
        echo "
        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account:profileUpdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 43,  151 => 42,  145 => 41,  140 => 39,  135 => 37,  131 => 36,  126 => 34,  122 => 33,  117 => 31,  112 => 29,  108 => 28,  100 => 23,  94 => 20,  90 => 19,  85 => 17,  82 => 16,  78 => 15,  71 => 11,  64 => 9,  57 => 7,  54 => 6,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Account:profileUpdate.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/profileUpdate.html.twig");
    }
}
