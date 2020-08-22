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

/* SyliusShopBundle:Account:changePassword.html.twig */
class __TwigTemplate_51f3b12aa7aaeeb3593dcecc88f8778a3dd1f02638c081b6417e6a3b02425e3a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@SyliusShop/Account/layout.html.twig", "SyliusShopBundle:Account:changePassword.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_password"), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_change_password"), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
        echo "
        <h1 class=\"ui dividing header\">
            ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_password"), "html", null, true);
        echo "
            <div class=\"sub header\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.set_a_new_password_for_your_account"), "html", null, true);
        echo "</div>
        </h1>

        ";
        // line 23
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.account.change_password.after_content_header", ["form" => ($context["form"] ?? null)]);
        echo "

        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "currentPassword", [], "any", false, false, false, 25), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["current-password"]));
        echo "
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "newPassword", [], "any", false, false, false, 26), "first", [], "any", false, false, false, 26), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["new-password"]));
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "newPassword", [], "any", false, false, false, 27), "second", [], "any", false, false, false, 27), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["confirmation-new-password"]));
        echo "

        ";
        // line 29
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.account.change_password.form", ["form" => ($context["form"] ?? null)]);
        echo "

        <button type=\"submit\" ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["save-changes"]);
        echo " class=\"ui large primary button\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.save_changes"), "html", null, true);
        echo "</button>
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 32), 'row');
        echo "
        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 33,  129 => 32,  123 => 31,  118 => 29,  113 => 27,  109 => 26,  105 => 25,  100 => 23,  94 => 20,  90 => 19,  85 => 17,  82 => 16,  78 => 15,  71 => 11,  64 => 9,  57 => 7,  54 => 6,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Account:changePassword.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/changePassword.html.twig");
    }
}
