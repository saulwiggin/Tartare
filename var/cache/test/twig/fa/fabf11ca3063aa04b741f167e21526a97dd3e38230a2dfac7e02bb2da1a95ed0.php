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

/* @SyliusShop/Product/Show/_variants.html.twig */
class __TwigTemplate_a66c907be9ccd88891d44b1e29cc3a70f085e066e60376a551a9a0030113049b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_variants.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_variants.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Product/Show/_variants.html.twig", 1)->unwrap();
        // line 2
        echo "
<table class=\"ui single line small table\" id=\"sylius-product-variants\" ";
        // line 3
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-variants"]);
        echo ">
    <thead>
    <tr>
        <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.variant"), "html", null, true);
        echo "</th>
        <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.price"), "html", null, true);
        echo "</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "variants", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["key"] => $context["variant"]) {
            // line 13
            echo "        <tr>
            <td>
                ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variant"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "
                ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "hasOptions", [], "method", false, false, false, 16)) {
                // line 17
                echo "                    <div class=\"ui horizontal divided list\">
                        ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["variant"], "optionValues", [], "any", false, false, false, 18));
                foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                    // line 19
                    echo "                            <div class=\"item\">
                                ";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionValue"], "value", [], "any", false, false, false, 20), "html", null, true);
                    echo "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                    </div>
                ";
            }
            // line 25
            echo "            </td>
            <td class=\"sylius-product-variant-price\">";
            // line 26
            echo twig_call_macro($macros["money"], "macro_calculatePrice", [$context["variant"]], 26, $context, $this->getSourceContext());
            echo "</td>
            <td class=\"right aligned\">
                ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "cartItem", [], "any", false, false, false, 28), "variant", [], "any", false, false, false, 28), $context["key"], [], "array", false, false, false, 28), 'widget', ["label" => false]);
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['variant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </tbody>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_variants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 32,  111 => 28,  106 => 26,  103 => 25,  99 => 23,  90 => 20,  87 => 19,  83 => 18,  80 => 17,  78 => 16,  74 => 15,  70 => 13,  66 => 12,  58 => 7,  54 => 6,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<table class=\"ui single line small table\" id=\"sylius-product-variants\" {{ sylius_test_html_attribute('product-variants') }}>
    <thead>
    <tr>
        <th>{{ 'sylius.ui.variant'|trans }}</th>
        <th>{{ 'sylius.ui.price'|trans }}</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    {% for key, variant in product.variants %}
        <tr>
            <td>
                {{ variant.name }}
                {% if product.hasOptions() %}
                    <div class=\"ui horizontal divided list\">
                        {% for optionValue in variant.optionValues %}
                            <div class=\"item\">
                                {{ optionValue.value }}
                            </div>
                        {% endfor %}
                    </div>
                {% endif %}
            </td>
            <td class=\"sylius-product-variant-price\">{{ money.calculatePrice(variant) }}</td>
            <td class=\"right aligned\">
                {{ form_widget(form.cartItem.variant[key], {'label': false}) }}
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "@SyliusShop/Product/Show/_variants.html.twig", "/Users/drsilaswiggin/dev/e-commerce/demo/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_variants.html.twig");
    }
}
