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

/* SyliusResourceBundle:Macros:buttons.html.twig */
class __TwigTemplate_55cc0f0ecc139e49a1b370185e3487eb61b65c7fecdcccd04486e0b090d0b121 extends \Twig\Template
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
        // line 6
        echo "
";
        // line 12
        echo "
";
        // line 18
        echo "
";
        // line 24
        echo "
";
        // line 39
        echo "
";
        // line 45
        echo "
";
        // line 54
        echo "
";
        // line 63
        echo "
";
        // line 72
        echo "
";
    }

    // line 1
    public function macro_show($__url__ = null, $__message__ = null, ...$__varargs__)
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
            // line 2
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-default\">
   <i class=\"glyphicon glyphicon-book\"></i><span>";
            // line 3
            echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.details")) : (($context["message"] ?? null))), "html", null, true);
            echo "</span>
</a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 7
    public function macro_generic($__url__ = null, $__message__ = null, $__icon__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "message" => $__message__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 8
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-default\">
    ";
            // line 9
            if ( !twig_test_empty(($context["icon"] ?? null))) {
                echo "<i class=\"glyphicon glyphicon-";
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>";
            }
            echo "<span>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</span>
</a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 13
    public function macro_create($__url__ = null, $__message__ = null, ...$__varargs__)
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
            // line 14
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-plus-sign\"></i><span>";
            // line 15
            echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.create")) : (($context["message"] ?? null))), "html", null, true);
            echo "</span>
</a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 19
    public function macro_edit($__url__ = null, $__message__ = null, ...$__varargs__)
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
            // line 20
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-pencil\"></i><span>";
            // line 21
            echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit")) : (($context["message"] ?? null))), "html", null, true);
            echo "</span>
</a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 25
    public function macro_delete($__url__ = null, $__message__ = null, $__disabled__ = false, $__modal__ = true, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "message" => $__message__,
            "disabled" => $__disabled__,
            "modal" => $__modal__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 26
            if (($context["disabled"] ?? null)) {
                // line 27
                echo "<span class=\"btn btn-danger disabled\">
    <i class=\"glyphicon glyphicon-trash\"></i><span>";
                // line 28
                echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete")) : (($context["message"] ?? null))), "html", null, true);
                echo "</span>
</span>
";
            } else {
                // line 31
                echo "<form action=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <button class=\"btn btn-danger";
                // line 33
                if (($context["modal"] ?? null)) {
                    echo " btn-confirm";
                }
                echo "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-trash\"></i> <span>";
                // line 34
                echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete")) : (($context["message"] ?? null))), "html", null, true);
                echo "</span>
    </button>
</form>
";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 40
    public function macro_manage($__url__ = null, $__message__ = null, ...$__varargs__)
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
            // line 41
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-success\">
    <i class=\"glyphicon glyphicon-folder-open\"></i><span>";
            // line 42
            echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.manage")) : (($context["message"] ?? null))), "html", null, true);
            echo "</span>
</a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 46
    public function macro_move($__url__ = null, $__direction__ = null, $__first__ = false, $__last__ = false, $__message__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "direction" => $__direction__,
            "first" => $__first__,
            "last" => $__last__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 47
            echo "<form action=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    <button title=\"";
            // line 49
            echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("sylius.ui.move_" . ($context["direction"] ?? null)))) : (($context["message"] ?? null))), "html", null, true);
            echo "\" class=\"btn btn-default ";
            if (((("up" == ($context["direction"] ?? null)) && ($context["first"] ?? null)) || (("down" == ($context["direction"] ?? null)) && ($context["last"] ?? null)))) {
                echo "disabled";
            }
            echo "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-arrow-";
            // line 50
            echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
            echo "\"></i>
    </button>
</form>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 55
    public function macro_patch($__url__ = null, $__message__ = null, $__icon__ = null, $__button__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "message" => $__message__,
            "icon" => $__icon__,
            "button" => $__button__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 56
            echo "<form action=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-";
            // line 58
            echo twig_escape_filter($this->env, ((array_key_exists("button", $context)) ? (_twig_default_filter(($context["button"] ?? null), "success")) : ("success")), "html", null, true);
            echo "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-";
            // line 59
            echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? null), "transfer")) : ("transfer")), "html", null, true);
            echo "\"></i> <span>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</span>
    </button>
</form>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 64
    public function macro_enable($__url__ = null, $__message__ = null, $__icon__ = null, $__button__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "message" => $__message__,
            "icon" => $__icon__,
            "button" => $__button__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 65
            echo "<form action=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-";
            // line 67
            echo twig_escape_filter($this->env, ((array_key_exists("button", $context)) ? (_twig_default_filter(($context["button"] ?? null), "success")) : ("success")), "html", null, true);
            echo "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-";
            // line 68
            echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? null), "ok")) : ("ok")), "html", null, true);
            echo "\"></i> <span>";
            echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.enable")) : (($context["message"] ?? null))), "html", null, true);
            echo "</span>
    </button>
</form>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 73
    public function macro_disable($__url__ = null, $__message__ = null, $__icon__ = null, $__button__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "message" => $__message__,
            "icon" => $__icon__,
            "button" => $__button__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 74
            echo "<form action=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-";
            // line 76
            echo twig_escape_filter($this->env, ((array_key_exists("button", $context)) ? (_twig_default_filter(($context["button"] ?? null), "danger")) : ("danger")), "html", null, true);
            echo "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-";
            // line 77
            echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? null), "remove")) : ("remove")), "html", null, true);
            echo "\"></i> <span>";
            echo twig_escape_filter($this->env, ((twig_test_empty(($context["message"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.disable")) : (($context["message"] ?? null))), "html", null, true);
            echo "</span>
    </button>
</form>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle:Macros:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 77,  429 => 76,  423 => 74,  407 => 73,  392 => 68,  388 => 67,  382 => 65,  366 => 64,  351 => 59,  347 => 58,  341 => 56,  325 => 55,  312 => 50,  304 => 49,  298 => 47,  281 => 46,  269 => 42,  264 => 41,  250 => 40,  236 => 34,  230 => 33,  224 => 31,  218 => 28,  215 => 27,  213 => 26,  197 => 25,  185 => 21,  180 => 20,  166 => 19,  154 => 15,  149 => 14,  135 => 13,  117 => 9,  112 => 8,  97 => 7,  85 => 3,  80 => 2,  66 => 1,  61 => 72,  58 => 63,  55 => 54,  52 => 45,  49 => 39,  46 => 24,  43 => 18,  40 => 12,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusResourceBundle:Macros:buttons.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/resource-bundle/src/Bundle/Resources/views/Macros/buttons.html.twig");
    }
}
