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

/* @SyliusUi/Macro/messages.html.twig */
class __TwigTemplate_e7cf814944b24416cd5779058ec1cee883cb370643bda00e896f5447b69ed758 extends \Twig\Template
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
        // line 14
        echo "
";
        // line 19
        echo "
";
        // line 24
        echo "
";
    }

    // line 1
    public function macro_default($__message__ = null, $__icon__ = null, $__type__ = null, $__header__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "message" => $__message__,
            "icon" => $__icon__,
            "type" => $__type__,
            "header" => $__header__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    <div class=\"ui icon ";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "")) : ("")), "html", null, true);
            echo " message\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["flash-message", ($context["type"] ?? null)]);
            echo ">
        <i class=\"";
            // line 3
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo " icon\"></i>
        <div class=\"content\">
            ";
            // line 5
            if ( !twig_test_empty(($context["type"] ?? null))) {
                // line 6
                echo "            <div class=\"header\">
                ";
                // line 7
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("header", $context)) ? (_twig_default_filter(($context["header"] ?? null), ($context["type"] ?? null))) : (($context["type"] ?? null)))), "html", null, true);
                echo "
            </div>
            ";
            }
            // line 10
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["message"] ?? null)), "html", null, true);
            echo "</p>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 15
    public function macro_info($__message__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "message" => $__message__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 16
            echo "    ";
            $macros["messages"] = $this;
            // line 17
            echo "    ";
            echo twig_call_macro($macros["messages"], "macro_default", [($context["message"] ?? null), "info circle", "info", "sylius.ui.info"], 17, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 20
    public function macro_success($__message__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "message" => $__message__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 21
            echo "    ";
            $macros["messages"] = $this;
            // line 22
            echo "    ";
            echo twig_call_macro($macros["messages"], "macro_default", [($context["message"] ?? null), "checkmark", "success", "sylius.ui.success"], 22, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 25
    public function macro_error($__message__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "message" => $__message__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 26
            echo "    ";
            $macros["messages"] = $this;
            // line 27
            echo "    ";
            echo twig_call_macro($macros["messages"], "macro_default", [($context["message"] ?? null), "remove", "negative", "sylius.ui.error"], 27, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 27,  170 => 26,  157 => 25,  145 => 22,  142 => 21,  129 => 20,  117 => 17,  114 => 16,  101 => 15,  87 => 10,  81 => 7,  78 => 6,  76 => 5,  71 => 3,  64 => 2,  48 => 1,  43 => 24,  40 => 19,  37 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusUi/Macro/messages.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/messages.html.twig");
    }
}
