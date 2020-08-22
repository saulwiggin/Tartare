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

/* @SyliusResource/Macros/notification.html.twig */
class __TwigTemplate_c853d322fd885dab00c6a618915203fb2716644396b182bbd6b38d870321e1ec extends \Twig\Template
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
        // line 13
        echo "

";
        // line 41
        echo "
";
        // line 46
        echo "
";
        // line 51
        echo "
";
        // line 56
        echo "
";
        // line 61
        echo "
";
    }

    // line 2
    public function macro_flashes(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 3), "flashBag", [], "any", false, false, false, 3), "all", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
                // line 4
                echo "        <div id=\"flashesMessage\" class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            <ul class=\"list-unstyled\">
                ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["flashes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 7
                    echo "                    <li>";
                    echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "            </ul>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 20
    public function macro_alert($__text__ = null, $__type__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 21
            echo "    ";
            $context["type"] = ("alert-" . ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "info")) : ("info")));
            // line 22
            echo "
    ";
            // line 23
            if (((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? null))) : (""))) {
                // line 24
                echo "    <div class=\"alert ";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\">
        ";
                // line 25
                if (twig_test_iterable(($context["text"] ?? null))) {
                    // line 26
                    echo "            <ul class=\"form-type-errors list-unstyled\">
                ";
                    // line 27
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["text"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                        // line 28
                        echo "                    <li>
                        <p class=\"text-";
                        // line 29
                        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                        echo "\">
                            ";
                        // line 30
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["line"], "message", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, $context["line"], "messageParameters", [], "any", false, false, false, 30)), "html", null, true);
                        echo "
                        </p>
                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "            </ul>
        ";
                } else {
                    // line 36
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["text"] ?? null)), "html", null, true);
                    echo "
        ";
                }
                // line 38
                echo "    </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 42
    public function macro_danger($__text__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 43
            echo "    ";
            $macros["__internal_e195b00bb567160c4ebc83098ba1a0a95255240572b1a1f1b1876a168f9b893f"] = $this;
            // line 44
            echo "    ";
            echo twig_call_macro($macros["__internal_e195b00bb567160c4ebc83098ba1a0a95255240572b1a1f1b1876a168f9b893f"], "macro_alert", [($context["text"] ?? null), "danger"], 44, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 47
    public function macro_error($__text__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 48
            echo "    ";
            $macros["__internal_a1ffbfa90bc1cbe656622161665cf75c06b04629f8e433f39f1291047f8609ce"] = $this;
            // line 49
            echo "    ";
            echo twig_call_macro($macros["__internal_a1ffbfa90bc1cbe656622161665cf75c06b04629f8e433f39f1291047f8609ce"], "macro_danger", [($context["text"] ?? null)], 49, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 52
    public function macro_warning($__text__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 53
            echo "    ";
            $macros["__internal_350b921248da633066e619066d5edb5c5a2c1bf200e3751f1aec1dfa71022c7a"] = $this;
            // line 54
            echo "    ";
            echo twig_call_macro($macros["__internal_350b921248da633066e619066d5edb5c5a2c1bf200e3751f1aec1dfa71022c7a"], "macro_alert", [($context["text"] ?? null), "warning"], 54, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 57
    public function macro_success($__text__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 58
            echo "    ";
            $macros["__internal_7a56a52e923ff1f8b87665b75827b8104c3b9b707c9a8d6f263aa6827ddbfa92"] = $this;
            // line 59
            echo "    ";
            echo twig_call_macro($macros["__internal_7a56a52e923ff1f8b87665b75827b8104c3b9b707c9a8d6f263aa6827ddbfa92"], "macro_alert", [($context["text"] ?? null), "success"], 59, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 62
    public function macro_info($__text__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 63
            echo "    ";
            $macros["__internal_cff487ce94a260d720d252c8cfb114b4fce76b6c378cf9802fe83271adfa81ef"] = $this;
            // line 64
            echo "    ";
            echo twig_call_macro($macros["__internal_cff487ce94a260d720d252c8cfb114b4fce76b6c378cf9802fe83271adfa81ef"], "macro_alert", [($context["text"] ?? null), "info"], 64, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusResource/Macros/notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 64,  308 => 63,  295 => 62,  283 => 59,  280 => 58,  267 => 57,  255 => 54,  252 => 53,  239 => 52,  227 => 49,  224 => 48,  211 => 47,  199 => 44,  196 => 43,  183 => 42,  172 => 38,  166 => 36,  162 => 34,  152 => 30,  148 => 29,  145 => 28,  141 => 27,  138 => 26,  136 => 25,  131 => 24,  129 => 23,  126 => 22,  123 => 21,  109 => 20,  94 => 9,  85 => 7,  81 => 6,  75 => 4,  70 => 3,  58 => 2,  53 => 61,  50 => 56,  47 => 51,  44 => 46,  41 => 41,  37 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusResource/Macros/notification.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/resource-bundle/src/Bundle/Resources/views/Macros/notification.html.twig");
    }
}
