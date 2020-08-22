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

/* @SyliusShop/Account/resetPassword.html.twig */
class __TwigTemplate_89da4dd49bf64eb2d4b416c5512edefb40e6316a6d981b8eb244469e0fb141d8 extends \Twig\Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@SyliusShop/Form/theme.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Account/resetPassword.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui three column centered stackable grid\">
        <div class=\"column\">
            <h1 class=\"ui header\">
                <i class=\"circular lock icon\"></i>
                <div class=\"content\">
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.reset_password"), "html", null, true);
        echo "
                    <div class=\"sub header\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.set_a_new_password_for_your_account"), "html", null, true);
        echo "</div>
                </div>
            </h1>
            <div class=\"ui segment\">
                ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_password_reset", ["token" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "passwordResetToken", [], "any", false, false, false, 17)]), "attr" => ["class" => "ui large loadable form", "novalidate" => "novalidate"]]);
        echo "
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 18), "first", [], "any", false, false, false, 18), 'row', twig_array_merge(call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["password-reset-new"]), ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.form.user_reset_password.new")]));
        echo "
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 19), "second", [], "any", false, false, false, 19), 'row', twig_array_merge(call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["password-reset-confirmation"]), ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.form.user_reset_password.confirmation")]));
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 20), 'row');
        echo "
                <button type=\"submit\" class=\"ui fluid large primary submit button\" ";
        // line 21
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["login-password-reset-button"]);
        echo ">
                    ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.reset"), "html", null, true);
        echo "
                </button>
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Account/resetPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 24,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  65 => 13,  61 => 12,  53 => 6,  49 => 5,  44 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Account/resetPassword.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/resetPassword.html.twig");
    }
}
