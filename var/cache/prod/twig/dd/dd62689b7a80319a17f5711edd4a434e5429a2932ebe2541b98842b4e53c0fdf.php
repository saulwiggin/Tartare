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

/* @SyliusShop/Login/_form.html.twig */
class __TwigTemplate_d07f0844f800dafb60b086c2348ce76ae7b02438d02a063393a2daa213ada4a3 extends \Twig\Template
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
        $macros["messages"] = $this->macros["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusShop/Login/_form.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if (($context["last_error"] ?? null)) {
            // line 4
            echo "    ";
            echo twig_call_macro($macros["messages"], "macro_error", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["last_error"] ?? null), "messageKey", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, ($context["last_error"] ?? null), "messageData", [], "any", false, false, false, 4), "security")], 4, $context, $this->getSourceContext());
            echo "
";
        }
        // line 6
        echo "
";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_username", [], "any", false, false, false, 7), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["login-username"]));
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_password", [], "any", false, false, false, 8), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["login-password"]));
        echo "
";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_remember_me", [], "any", false, false, false, 9), 'row', call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["remember-me"]));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Login/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  57 => 8,  53 => 7,  50 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Login/_form.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Login/_form.html.twig");
    }
}
