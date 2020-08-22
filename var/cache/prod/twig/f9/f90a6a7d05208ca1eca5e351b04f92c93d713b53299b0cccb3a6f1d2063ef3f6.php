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

/* SyliusUiBundle:Security:_login.html.twig */
class __TwigTemplate_c2dfd27d1047e174c6b94a3b1603a01db4c7ed0c7be1e7cd26d75cb39d063537 extends \Twig\Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@SyliusUi/Form/theme.html.twig"], true);
        // line 2
        echo "
";
        // line 3
        $macros["messages"] = $this->macros["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusUiBundle:Security:_login.html.twig", 3)->unwrap();
        // line 4
        echo "
<div class=\"ui middle aligned center aligned grid\">
    <div class=\"column\">
        ";
        // line 7
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.login.before_form", ["form" => ($context["form"] ?? null)]);
        echo "

        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["paths"] ?? null), "logo", [], "any", true, true, false, 9)) {
            // line 10
            echo "            <div style=\"max-width: 270px; margin: 0 auto; margin-bottom: 40px;\">
                <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["paths"] ?? null), "logo", [], "any", false, false, false, 11)), "html", null, true);
            echo "\" class=\"ui fluid image\" id=\"logo\">
            </div>
        ";
        }
        // line 14
        echo "
        ";
        // line 15
        if (($context["last_error"] ?? null)) {
            // line 16
            echo "            <div class=\"ui left aligned basic segment\">
                ";
            // line 17
            echo twig_call_macro($macros["messages"], "macro_error", [twig_get_attribute($this->env, $this->source, ($context["last_error"] ?? null), "messageKey", [], "any", false, false, false, 17)], 17, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 20
        echo "
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => ((array_key_exists("action", $context)) ? (_twig_default_filter(($context["action"] ?? null), "/")) : ("/")), "attr" => ["class" => "ui large loadable form", "novalidate" => "novalidate"]]);
        echo "
            <div class=\"ui left aligned very padded segment\">
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_username", [], "any", false, false, false, 23), 'row', ["value" => ((array_key_exists("last_username", $context)) ? (_twig_default_filter(($context["last_username"] ?? null), "")) : (""))]);
        echo "
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_password", [], "any", false, false, false, 24), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_remember_me", [], "any", false, false, false, 25), 'row');
        echo "
                <input type=\"hidden\" name=\"_csrf_admin_security_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("admin_authenticate"), "html", null, true);
        echo "\">
                <button type=\"submit\" class=\"ui fluid large primary submit button\">Login</button>
            </div>

            ";
        // line 30
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.login.form", ["form" => ($context["form"] ?? null)]);
        echo "

        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Security:_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 32,  106 => 30,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  82 => 21,  79 => 20,  73 => 17,  70 => 16,  68 => 15,  65 => 14,  59 => 11,  56 => 10,  54 => 9,  49 => 7,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusUiBundle:Security:_login.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Security/_login.html.twig");
    }
}
