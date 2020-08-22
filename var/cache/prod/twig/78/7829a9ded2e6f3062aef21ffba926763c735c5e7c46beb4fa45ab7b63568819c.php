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

/* @SyliusShop/Register/_form.html.twig */
class __TwigTemplate_3d8e032114630d37661d371c2b3f8417c2406c0af30c7d505826e65b7eb77c91 extends \Twig\Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.personal_information"), "html", null, true);
        echo "</h4>
<div class=\"two fields\">
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstName", [], "any", false, false, false, 3), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["first-name"]));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastName", [], "any", false, false, false, 4), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["last-name"]));
        echo "
</div>
";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 6), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["email"]));
        echo "
";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phoneNumber", [], "any", false, false, false, 7), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["phone-number"]));
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "subscribedToNewsletter", [], "any", false, false, false, 8), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["subscribed-to-newsletter"]));
        echo "
<h4 class=\"ui dividing header\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.account_credentials"), "html", null, true);
        echo "</h4>
";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", false, false, false, 10), "plainPassword", [], "any", false, false, false, 10), "first", [], "any", false, false, false, 10), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["password-first"]));
        echo "
";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", false, false, false, 11), "plainPassword", [], "any", false, false, false, 11), "second", [], "any", false, false, false, 11), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["password-second"]));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Register/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Register/_form.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Register/_form.html.twig");
    }
}
