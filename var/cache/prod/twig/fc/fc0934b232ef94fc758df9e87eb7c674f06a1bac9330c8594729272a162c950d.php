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

/* BitBagSyliusCmsPlugin:Macro:translationForm.html.twig */
class __TwigTemplate_f1c9a800b72c2f56cb6cdea1a04581cde450cbdf4c0dca9ed78d3c3a696af34e extends \Twig\Template
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
        // line 27
        echo "
";
    }

    // line 1
    public function macro_translationForm($__translations__ = null, $__resource__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "translations" => $__translations__,
            "resource" => $__resource__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    ";
            $macros["image"] = $this->loadTemplate("@BitBagSyliusCmsPlugin/Macro/imageWidget.html.twig", "BitBagSyliusCmsPlugin:Macro:translationForm.html.twig", 2)->unwrap();
            // line 3
            echo "    ";
            $macros["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "BitBagSyliusCmsPlugin:Macro:translationForm.html.twig", 3)->unwrap();
            // line 4
            echo "
    <div class=\"ui styled fluid accordion\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["translations"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["locale"] => $context["translationForm"]) {
                // line 7
                echo "            <div data-locale=\"";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "\">
                <div class=\"title";
                // line 8
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 8))) {
                    echo " active";
                }
                echo "\">
                    <i class=\"dropdown icon\"></i>
                    ";
                // line 10
                echo twig_call_macro($macros["flags"], "macro_fromLocaleCode", [$context["locale"]], 10, $context, $this->getSourceContext());
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), [$context["locale"]]), "html", null, true);
                echo "
                </div>
                <div class=\"ui content";
                // line 12
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 12))) {
                    echo " active";
                }
                echo "\">
                    ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationForm"]);
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 14
                    echo "
                        ";
                    // line 15
                    if (("image" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15))) {
                        // line 16
                        echo "                            ";
                        echo twig_call_macro($macros["image"], "macro_imageWidget", [$context["field"]], 16, $context, $this->getSourceContext());
                        echo "
                        ";
                    } else {
                        // line 18
                        echo "                            ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                        echo "
                        ";
                    }
                    // line 20
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "                </div>
            </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 28
    public function macro_translationFormWithSlug($__translations__ = null, $__slugFieldTemplate__ = null, $__resource__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "translations" => $__translations__,
            "slugFieldTemplate" => $__slugFieldTemplate__,
            "resource" => $__resource__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 29
            echo "    ";
            $macros["image"] = $this->loadTemplate("@BitBagSyliusCmsPlugin/Macro/imageWidget.html.twig", "BitBagSyliusCmsPlugin:Macro:translationForm.html.twig", 29)->unwrap();
            // line 30
            echo "    ";
            $macros["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "BitBagSyliusCmsPlugin:Macro:translationForm.html.twig", 30)->unwrap();
            // line 31
            echo "
    <div class=\"ui styled fluid accordion\">
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["translations"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["locale"] => $context["translationForm"]) {
                // line 34
                echo "            <div data-locale=\"";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "\">
                <div class=\"title";
                // line 35
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 35))) {
                    echo " active";
                }
                echo "\">
                    <i class=\"dropdown icon\"></i>
                    ";
                // line 37
                echo twig_call_macro($macros["flags"], "macro_fromLocaleCode", [$context["locale"]], 37, $context, $this->getSourceContext());
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), [$context["locale"]]), "html", null, true);
                echo "
                </div>
                <div class=\"ui content";
                // line 39
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 39))) {
                    echo " active";
                }
                echo "\">
                    ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationForm"]);
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 41
                    echo "
                        ";
                    // line 42
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42) == "slug")) {
                        // line 43
                        echo "                            ";
                        $this->loadTemplate(($context["slugFieldTemplate"] ?? null), "BitBagSyliusCmsPlugin:Macro:translationForm.html.twig", 43)->display(twig_array_merge($context, ["slugField" => twig_get_attribute($this->env, $this->source, $context["translationForm"], "slug", [], "any", false, false, false, 43), "resource" => ($context["resource"] ?? null)]));
                        // line 44
                        echo "                        ";
                    } elseif (("image" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44))) {
                        // line 45
                        echo "                            ";
                        echo twig_call_macro($macros["image"], "macro_imageWidget", [$context["field"]], 45, $context, $this->getSourceContext());
                        echo "
                        ";
                    } else {
                        // line 47
                        echo "                            ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                        echo "
                        ";
                    }
                    // line 49
                    echo "
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                </div>
            </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:Macro:translationForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 54,  284 => 51,  269 => 49,  263 => 47,  257 => 45,  254 => 44,  251 => 43,  249 => 42,  246 => 41,  229 => 40,  223 => 39,  216 => 37,  209 => 35,  204 => 34,  187 => 33,  183 => 31,  180 => 30,  177 => 29,  162 => 28,  152 => 25,  136 => 22,  129 => 20,  123 => 18,  117 => 16,  115 => 15,  112 => 14,  108 => 13,  102 => 12,  95 => 10,  88 => 8,  83 => 7,  66 => 6,  62 => 4,  59 => 3,  56 => 2,  42 => 1,  37 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "BitBagSyliusCmsPlugin:Macro:translationForm.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Macro/translationForm.html.twig");
    }
}
