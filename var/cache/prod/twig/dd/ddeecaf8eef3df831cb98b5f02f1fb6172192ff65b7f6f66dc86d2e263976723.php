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

/* SyliusUiBundle:Macro:buttons.html.twig */
class __TwigTemplate_5948cf479c0f3215b6ce92002bd357074e6463c206ba5ac59ee68bc21b0b2606 extends \Twig\Template
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
        // line 11
        echo "
";
        // line 21
        echo "
";
        // line 31
        echo "
";
        // line 41
        echo "
";
        // line 47
        echo "
";
        // line 53
        echo "
";
        // line 63
        echo "
";
    }

    // line 1
    public function macro_default($__url__ = null, $__message__ = null, $__id__ = null, $__icon__ = null, $__class__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "icon" => $__icon__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    <a class=\"ui ";
            if ( !twig_test_empty(($context["message"] ?? null))) {
                echo "labeled ";
            }
            if ( !twig_test_empty(($context["icon"] ?? null))) {
                echo "icon ";
            }
            echo "button ";
            if ( !twig_test_empty(($context["class"] ?? null))) {
                echo " ";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo " ";
            }
            echo "\" ";
            if ( !(null === ($context["id"] ?? null))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["button", ((array_key_exists("id", $context)) ? (_twig_default_filter(($context["id"] ?? null), ($context["message"] ?? null))) : (($context["message"] ?? null)))]);
            echo ">
        ";
            // line 3
            if ( !twig_test_empty(($context["icon"] ?? null))) {
                // line 4
                echo "            <i class=\"icon ";
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
        ";
            }
            // line 6
            echo "        ";
            if ( !twig_test_empty(($context["message"] ?? null))) {
                // line 7
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["message"] ?? null)), "html", null, true);
                echo "
        ";
            }
            // line 9
            echo "    </a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 12
    public function macro_show($__url__ = null, $__message__ = null, $__id__ = null, $__class__ = null, $__labeled__ = true, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "class" => $__class__,
            "labeled" => $__labeled__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 13
            echo "    ";
            $macros["buttons"] = $this;
            // line 14
            echo "
    ";
            // line 15
            if ((twig_test_empty(($context["message"] ?? null)) && ($context["labeled"] ?? null))) {
                // line 16
                echo "        ";
                $context["message"] = "sylius.ui.show";
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    ";
            // line 19
            echo twig_call_macro($macros["buttons"], "macro_default", [($context["url"] ?? null), ($context["message"] ?? null), ($context["id"] ?? null), "search"], 19, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 22
    public function macro_create($__url__ = null, $__message__ = null, $__id__ = null, $__labeled__ = true, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "labeled" => $__labeled__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 23
            echo "    ";
            $macros["buttons"] = $this;
            // line 24
            echo "
    ";
            // line 25
            if ((twig_test_empty(($context["message"] ?? null)) && ($context["labeled"] ?? null))) {
                // line 26
                echo "        ";
                $context["message"] = "sylius.ui.create";
                // line 27
                echo "    ";
            }
            // line 28
            echo "
    ";
            // line 29
            echo twig_call_macro($macros["buttons"], "macro_default", [($context["url"] ?? null), ($context["message"] ?? null), ($context["id"] ?? null), "plus", "primary"], 29, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 32
    public function macro_edit($__url__ = null, $__message__ = null, $__id__ = null, $__labeled__ = true, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "labeled" => $__labeled__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 33
            echo "    ";
            $macros["buttons"] = $this;
            // line 34
            echo "
    ";
            // line 35
            if ((twig_test_empty(($context["message"] ?? null)) && ($context["labeled"] ?? null))) {
                // line 36
                echo "        ";
                $context["message"] = "sylius.ui.edit";
                // line 37
                echo "    ";
            }
            // line 38
            echo "
    ";
            // line 39
            echo twig_call_macro($macros["buttons"], "macro_default", [($context["url"] ?? null), ($context["message"] ?? null), ($context["id"] ?? null), "pencil"], 39, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 42
    public function macro_filter($__message__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "message" => $__message__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 43
            echo "    <button class=\"ui blue labeled icon button\" type=\"submit\">
        <i class=\"icon search\"></i> ";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_test_empty(($context["message"] ?? null))) ? ("sylius.ui.filter") : (($context["message"] ?? null)))), "html", null, true);
            echo "
    </button>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 48
    public function macro_resetFilters($__url__ = null, $__message__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 49
            echo "    <a class=\"ui labeled icon button\" href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\">
        <i class=\"icon remove\"></i> ";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_test_empty(($context["message"] ?? null))) ? ("sylius.ui.clear_filters") : (($context["message"] ?? null)))), "html", null, true);
            echo "
    </a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_delete($__url__ = null, $__message__ = null, $__labeled__ = true, $__resourceId__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "message" => $__message__,
            "labeled" => $__labeled__,
            "resourceId" => $__resourceId__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 55
            echo "    <form action=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <button class=\"ui red ";
            // line 57
            if (($context["labeled"] ?? null)) {
                echo "labeled ";
            }
            echo "icon button\" type=\"submit\" data-requires-confirmation ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["delete-button"]);
            echo ">
            <i class=\"icon trash\"></i> ";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((twig_test_empty(($context["message"] ?? null)) && ($context["labeled"] ?? null))) ? ("sylius.ui.delete") : (($context["message"] ?? null)))), "html", null, true);
            echo "
        </button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(($context["resourceId"] ?? null)), "html", null, true);
            echo "\" />
    </form>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 64
    public function macro_bulkDelete($__url__ = null, $__message__ = null, $__labeled__ = true, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "message" => $__message__,
            "labeled" => $__labeled__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 65
            echo "    <form action=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" method=\"post\" id=\"bulk-delete\">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <button class=\"ui red ";
            // line 67
            if (($context["labeled"] ?? null)) {
                echo "labeled ";
            }
            echo "icon button\" type=\"submit\" data-bulk-action-requires-confirmation disabled>
            <i class=\"icon trash\"></i> ";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((twig_test_empty(($context["message"] ?? null)) && ($context["labeled"] ?? null))) ? ("sylius.ui.delete") : (($context["message"] ?? null)))), "html", null, true);
            echo "
        </button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("bulk_delete"), "html", null, true);
            echo "\" />
    </form>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Macro:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 70,  396 => 68,  390 => 67,  384 => 65,  369 => 64,  357 => 60,  352 => 58,  344 => 57,  338 => 55,  322 => 54,  310 => 50,  305 => 49,  291 => 48,  279 => 44,  276 => 43,  263 => 42,  252 => 39,  249 => 38,  246 => 37,  243 => 36,  241 => 35,  238 => 34,  235 => 33,  219 => 32,  208 => 29,  205 => 28,  202 => 27,  199 => 26,  197 => 25,  194 => 24,  191 => 23,  175 => 22,  164 => 19,  161 => 18,  158 => 17,  155 => 16,  153 => 15,  150 => 14,  147 => 13,  130 => 12,  120 => 9,  114 => 7,  111 => 6,  105 => 4,  103 => 3,  77 => 2,  60 => 1,  55 => 63,  52 => 53,  49 => 47,  46 => 41,  43 => 31,  40 => 21,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusUiBundle:Macro:buttons.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/buttons.html.twig");
    }
}
