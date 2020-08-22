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

/* SyliusAdminBundle:Product/Show:_attributes.html.twig */
class __TwigTemplate_46e19e8e549266221641ae26122883cc52537598f707c2608aa22a4132886029 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Show:_attributes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Show:_attributes.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "attributes", [], "any", false, false, false, 6));
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
            if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["attributeValue"], "localeCode", [], "any", false, false, false, 7), (isset($context["setLocales"]) || array_key_exists("setLocales", $context) ? $context["setLocales"] : (function () { throw new RuntimeError('Variable "setLocales" does not exist.', 7, $this->source); })()))) {
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
                $context["setLocales"] = twig_array_merge((isset($context["setLocales"]) || array_key_exists("setLocales", $context) ? $context["setLocales"] : (function () { throw new RuntimeError('Variable "setLocales" does not exist.', 9, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["attributeValue"], "localeCode", [], "any", false, false, false, 9)]);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["setLocales"]) || array_key_exists("setLocales", $context) ? $context["setLocales"] : (function () { throw new RuntimeError('Variable "setLocales" does not exist.', 13, $this->source); })()));
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
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "attributes", [], "any", false, false, false, 17), function ($__attributeValue__) use ($context, $macros) { $context["attributeValue"] = $__attributeValue__; return (twig_get_attribute($this->env, $this->source, $context["attributeValue"], "localeCode", [], "any", false, false, false, 17) == $context["locale"]); }));
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
$context["attributeValue"], "type", [], "any", false, false, false, 25)) . ".html.twig"), 2 => "@SyliusAdmin/Product/Show/Types/default.html.twig"], "SyliusAdminBundle:Product/Show:_attributes.html.twig", 23)->display(twig_array_merge($context, ["attribute" =>                 // line 28
$context["attributeValue"], "locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 29
(isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "locale", [], "any", false, false, false, 29), "fallbackLocale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 30
(isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "defaultLocale", [], "any", false, false, false, 30)]));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Show:_attributes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 39,  194 => 35,  178 => 32,  176 => 30,  175 => 29,  174 => 28,  173 => 25,  172 => 24,  171 => 23,  165 => 20,  161 => 18,  144 => 17,  131 => 14,  114 => 13,  111 => 12,  97 => 11,  94 => 10,  92 => 9,  75 => 8,  72 => 7,  54 => 6,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"attributes\">
    <h4 class=\"ui top attached large header\">{{ 'sylius.ui.attributes'|trans }}</h4>
    <div class=\"ui attached segment\">
        <div class=\"ui top attached tabular menu\">
            {% set setLocales = [] %}
            {% for attributeValue in product.attributes %}
                {% if attributeValue.localeCode not in setLocales %}
                    <a class=\"item{% if loop.first %} active {% endif %}\" {% if loop.first %}{{ sylius_test_html_attribute('active') }}{% endif %} data-tab=\"{{ attributeValue.localeCode|sylius_locale_name }}\" {{ sylius_test_html_attribute('tab', attributeValue.localeCode|sylius_locale_name) }}>{{ attributeValue.localeCode|sylius_locale_name }}</a>
                    {%  set setLocales = setLocales|merge([attributeValue.localeCode]) %}
                {% endif %}
            {% endfor %}
        </div>
        {% for locale in setLocales %}
            <div class=\"ui bottom attached tab segment{% if loop.first %} active{% endif %}\" data-tab=\"{{ locale|sylius_locale_name }}\" {{ sylius_test_html_attribute('tab', locale|sylius_locale_name) }}>
                <table class=\"ui very basic celled table\">
                    <tbody>
                    {% for attributeValue in product.attributes|filter(attributeValue => attributeValue.localeCode == locale) %}
                        <tr>
                            <td class=\"five wide\">
                                <strong class=\"gray text\">{{ attributeValue.name }}</strong>
                            </td>
                            <td>
                                {% include [
                                    '@SyliusAdmin/Product/Show/Types/'~attributeValue.type~'.html.twig',
                                    '@SyliusAttribute/Types/'~attributeValue.type~'.html.twig',
                                    '@SyliusAdmin/Product/Show/Types/default.html.twig'
                                ] with {
                                    'attribute': attributeValue,
                                    'locale': configuration.request.locale,
                                    'fallbackLocale': configuration.request.defaultLocale
                                } %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endfor %}
    </div>
</div>
", "SyliusAdminBundle:Product/Show:_attributes.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_attributes.html.twig");
    }
}
