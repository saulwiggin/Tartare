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

/* SyliusAdminBundle:Product/Attribute:attributeValues.html.twig */
class __TwigTemplate_4b3abf53c99bec8234876bbf4b5160e0b1f435ea14408c756ae0be36fd558171 extends \Twig\Template
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
        $macros["self"] = $this->macros["self"] = $this;
        // line 2
        echo "
";
        // line 3
        $context["subject"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "name", [], "any", false, false, false, 3), ["_attribute" => ""]);
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["forms"] ?? null));
        foreach ($context['_seq'] as $context["code"] => $context["localeCodes"]) {
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["localeCodes"]);
            foreach ($context['_seq'] as $context["localeCode"] => $context["form"]) {
                // line 6
                echo "        <div class=\"attribute\" data-id=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">
            ";
                // line 7
                $context["id"] = twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["form"], "vars", [], "any", false, false, false, 7), "label", [], "any", false, false, false, 7), [" " => "_"]));
                // line 8
                echo "            ";
                if (twig_in_filter("type_checkbox", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["form"], "vars", [], "any", false, false, false, 8), "cache_key", [], "any", false, false, false, 8))) {
                    // line 9
                    echo "                ";
                    echo twig_call_macro($macros["self"], "macro_checkboxField", [$context["form"], ($context["count"] ?? null), ($context["id"] ?? null), ($context["subject"] ?? null), twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 9)], 9, $context, $this->getSourceContext());
                    echo "
            ";
                } else {
                    // line 11
                    echo "                ";
                    echo twig_call_macro($macros["self"], "macro_textField", [$context["form"], ($context["count"] ?? null), ($context["id"] ?? null), ($context["subject"] ?? null), twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 11)], 11, $context, $this->getSourceContext());
                    echo "
            ";
                }
                // line 13
                echo "            <input type=\"hidden\"
                   name=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 14), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, ($context["subject"] ?? null), "html", null, true);
                echo "[attributes][";
                echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
                echo "][attribute]\"
                   id=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 15), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, ($context["subject"] ?? null), "html", null, true);
                echo "_attributes_";
                echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
                echo "_attribute\"
                   value=\"";
                // line 16
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\"/>
            <input type=\"hidden\"
                   name=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 18), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, ($context["subject"] ?? null), "html", null, true);
                echo "[attributes][";
                echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
                echo "][localeCode]\"
                   id=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 19), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, ($context["subject"] ?? null), "html", null, true);
                echo "_attributes_";
                echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
                echo "_localeCode\"
                   value=\"";
                // line 20
                echo twig_escape_filter($this->env, $context["localeCode"], "html", null, true);
                echo "\"/>
            ";
                // line 21
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 22
                echo "        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['localeCode'], $context['form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['localeCodes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
";
        // line 43
        echo "
";
        // line 54
        echo "
";
    }

    // line 26
    public function macro_formField($__item__ = null, $__count__ = null, $__id__ = null, $__prefix__ = null, $__subject__ = null, $__applicationName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "count" => $__count__,
            "id" => $__id__,
            "prefix" => $__prefix__,
            "subject" => $__subject__,
            "applicationName" => $__applicationName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 27
            echo "    ";
            $macros["__internal_b744d4a2d66dfc8f70f919d99ace033e4ad1a5a1fafa8d4b81c7336d57835e3c"] = $this;
            // line 28
            echo "    ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", false, false, false, 28)) > 0)) {
                // line 29
                echo "        ";
                $context["prefix"] = ((($context["prefix"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "vars", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29));
                // line 30
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", false, false, false, 30));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 31
                    echo "            ";
                    echo twig_call_macro($macros["__internal_b744d4a2d66dfc8f70f919d99ace033e4ad1a5a1fafa8d4b81c7336d57835e3c"], "macro_formField", [$context["child"], ($context["count"] ?? null), ($context["id"] ?? null), ($context["prefix"] ?? null), ($context["subject"] ?? null), ($context["applicationName"] ?? null)], 31, $context, $this->getSourceContext());
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "vars", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33) != "_token")) {
                // line 34
                echo "        ";
                $context["namePrefix"] = twig_replace_filter(($context["prefix"] ?? null), ["_" => "]["]);
                // line 35
                echo "        ";
                $context["dataName"] = ((((((((($context["applicationName"] ?? null) . "_") . ($context["subject"] ?? null)) . "[attributes][") . ($context["count"] ?? null)) . ($context["namePrefix"] ?? null)) . "][") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "vars", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35)) . "]");
                // line 36
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "vars", [], "any", false, true, false, 36), "multiple", [], "any", true, true, false, 36) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "vars", [], "any", false, false, false, 36), "multiple", [], "any", false, false, false, 36))) {
                    // line 37
                    echo "            ";
                    $context["dataName"] = (($context["dataName"] ?? null) . "[]");
                    // line 38
                    echo "        ";
                }
                // line 39
                echo "
        ";
                // line 40
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["item"] ?? null), 'widget', ["id" => ($context["id"] ?? null), "attr" => ["data-name" => ($context["dataName"] ?? null)]]);
                echo "
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 44
    public function macro_textField($__form__ = null, $__count__ = null, $__id__ = null, $__subject__ = null, $__applicationName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "count" => $__count__,
            "id" => $__id__,
            "subject" => $__subject__,
            "applicationName" => $__applicationName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 45
            echo "    ";
            $macros["__internal_e5db412f02cfec8385a71126bbaeec818f2ce0fcabcf9677c06e80b390c5bc45"] = $this;
            // line 46
            echo "    <div class=\"ui right fluid labeled input\" style=\"margin-top: 15px; margin-bottom: 15px;\">
        <div class=\"ui label\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 47), "label", [], "any", false, false, false, 47), "html", null, true);
            echo "</div>
        ";
            // line 48
            echo twig_call_macro($macros["__internal_e5db412f02cfec8385a71126bbaeec818f2ce0fcabcf9677c06e80b390c5bc45"], "macro_formField", [($context["form"] ?? null), ($context["count"] ?? null), ($context["id"] ?? null), "", ($context["subject"] ?? null), ($context["applicationName"] ?? null)], 48, $context, $this->getSourceContext());
            echo "
        <button class=\"ui red right labeled icon button\">
            <i class=\"remove icon\"></i> ";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "html", null, true);
            echo "
        </button>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 55
    public function macro_checkboxField($__form__ = null, $__count__ = null, $__id__ = null, $__subject__ = null, $__applicationName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "count" => $__count__,
            "id" => $__id__,
            "subject" => $__subject__,
            "applicationName" => $__applicationName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 56
            echo "    ";
            $macros["__internal_2ba5ecdcb12add018886ec2703da82593166ba7072a052d78ccf53ceca4b9966"] = $this;
            // line 57
            echo "    <div class=\"ui toggle checkbox\" style=\"margin-top: 15px; margin-bottom: 15px;\">
        ";
            // line 58
            echo twig_call_macro($macros["__internal_2ba5ecdcb12add018886ec2703da82593166ba7072a052d78ccf53ceca4b9966"], "macro_formField", [($context["form"] ?? null), ($context["count"] ?? null), ($context["id"] ?? null), "", ($context["subject"] ?? null), ($context["applicationName"] ?? null)], 58, $context, $this->getSourceContext());
            echo "
        <label>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 59), "label", [], "any", false, false, false, 59), "html", null, true);
            echo "</label>
    </div>
    <button class=\"ui red right labeled icon button\" style=\"float: right;\">
        <i class=\"remove icon\"></i> ";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "html", null, true);
            echo "
    </button>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Attribute:attributeValues.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 62,  289 => 59,  285 => 58,  282 => 57,  279 => 56,  262 => 55,  249 => 50,  244 => 48,  240 => 47,  237 => 46,  234 => 45,  217 => 44,  205 => 40,  202 => 39,  199 => 38,  196 => 37,  193 => 36,  190 => 35,  187 => 34,  184 => 33,  175 => 31,  170 => 30,  167 => 29,  164 => 28,  161 => 27,  143 => 26,  138 => 54,  135 => 43,  132 => 25,  121 => 22,  119 => 21,  115 => 20,  107 => 19,  99 => 18,  94 => 16,  86 => 15,  78 => 14,  75 => 13,  69 => 11,  63 => 9,  60 => 8,  58 => 7,  53 => 6,  48 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Product/Attribute:attributeValues.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Attribute/attributeValues.html.twig");
    }
}
