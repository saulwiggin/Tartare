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

/* @SyliusAdmin/Product/Show/_attributes.html.twig */
class __TwigTemplate_d548985371da62b821a2aa9f780180190ac83cc294b453c26f3c1214f53dc5f6 extends \Twig\Template
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
        echo "<div id=\"attributes\">
    <h4 class=\"ui top attached large header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.attributes"), "html", null, true);
        echo "</h4>
    <div class=\"ui attached segment\">
        <div class=\"ui top attached tabular menu\">
            ";
        // line 5
        $context["setLocales"] = [];
        // line 6
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "attributes", [], "any", false, false, false, 6));
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
        foreach ($context['_seq'] as $context["_key"] => $context["attributeValue"]) {
            // line 7
            echo "                ";
            if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["attributeValue"], "localeCode", [], "any", false, false, false, 7), ($context["setLocales"] ?? null))) {
                // line 8
                echo "                    <a class=\"item";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 8)) {
                    echo " active ";
                }
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 8)) {
                    echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["active"]);
                }
                echo " data-tab=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["attributeValue"], "localeCode", [], "any", false, false, false, 8)]), "html", null, true);
                echo "\" ";
                echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["tab", call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["attributeValue"], "localeCode", [], "any", false, false, false, 8)])]);
                echo ">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["attributeValue"], "localeCode", [], "any", false, false, false, 8)]), "html", null, true);
                echo "</a>
                    ";
                // line 9
                $context["setLocales"] = twig_array_merge(($context["setLocales"] ?? null), [0 => twig_get_attribute($this->env, $this->source, $context["attributeValue"], "localeCode", [], "any", false, false, false, 9)]);
                // line 10
                echo "                ";
            }
            // line 11
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributeValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </div>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["setLocales"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 14
            echo "            <div class=\"ui bottom attached tab segment";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 14)) {
                echo " active";
            }
            echo "\" data-tab=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), [$context["locale"]]), "html", null, true);
            echo "\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["tab", call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), [$context["locale"]])]);
            echo ">
                <table class=\"ui very basic celled table\">
                    <tbody>
                    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "attributes", [], "any", false, false, false, 17), function ($__attributeValue__) use ($context, $macros) { $context["attributeValue"] = $__attributeValue__; return (twig_get_attribute($this->env, $this->source, $context["attributeValue"], "localeCode", [], "any", false, false, false, 17) == $context["locale"]); }));
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
            foreach ($context['_seq'] as $context["_key"] => $context["attributeValue"]) {
                // line 18
                echo "                        <tr>
                            <td class=\"five wide\">
                                <strong class=\"gray text\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attributeValue"], "name", [], "any", false, false, false, 20), "html", null, true);
                echo "</strong>
                            </td>
                            <td>
                                ";
                // line 23
                $this->loadTemplate([0 => (("@SyliusAdmin/Product/Show/Types/" . twig_get_attribute($this->env, $this->source,                 // line 24
$context["attributeValue"], "type", [], "any", false, false, false, 24)) . ".html.twig"), 1 => (("@SyliusAttribute/Types/" . twig_get_attribute($this->env, $this->source,                 // line 25
$context["attributeValue"], "type", [], "any", false, false, false, 25)) . ".html.twig"), 2 => "@SyliusAdmin/Product/Show/Types/default.html.twig"], "@SyliusAdmin/Product/Show/_attributes.html.twig", 23)->display(twig_array_merge($context, ["attribute" =>                 // line 28
$context["attributeValue"], "locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 29
($context["configuration"] ?? null), "request", [], "any", false, false, false, 29), "locale", [], "any", false, false, false, 29), "fallbackLocale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 30
($context["configuration"] ?? null), "request", [], "any", false, false, false, 30), "defaultLocale", [], "any", false, false, false, 30)]));
                // line 32
                echo "                            </td>
                        </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributeValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                    </tbody>
                </table>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Show/_attributes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 39,  188 => 35,  172 => 32,  170 => 30,  169 => 29,  168 => 28,  167 => 25,  166 => 24,  165 => 23,  159 => 20,  155 => 18,  138 => 17,  125 => 14,  108 => 13,  105 => 12,  91 => 11,  88 => 10,  86 => 9,  69 => 8,  66 => 7,  48 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Product/Show/_attributes.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_attributes.html.twig");
    }
}
