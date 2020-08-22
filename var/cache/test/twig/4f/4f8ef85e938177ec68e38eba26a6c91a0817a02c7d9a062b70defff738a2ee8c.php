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

/* @SyliusShop/Product/Show/Tabs/Attributes/_list.html.twig */
class __TwigTemplate_47b3f407edf344c4b0c0a6786d718632c9244d69419fa7e30cd10e49d84056ca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/Attributes/_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/Attributes/_list.html.twig"));

        // line 1
        echo "<table id=\"sylius-product-attributes\" class=\"ui definition table\" ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-attributes"]);
        echo ">
    <tbody>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "getAttributesByLocale", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "locale", [], "any", false, false, false, 3), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "defaultLocale", [], "any", false, false, false, 3), 2 => (isset($context["sylius_base_locale"]) || array_key_exists("sylius_base_locale", $context) ? $context["sylius_base_locale"] : (function () { throw new RuntimeError('Variable "sylius_base_locale" does not exist.', 3, $this->source); })())], "method", false, false, false, 3), "attribute.position"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 4
            echo "        <tr>
            <td class=\"sylius-product-attribute-name\" ";
            // line 5
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-attribute-name", twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 5)]);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 5), "html", null, true);
            echo "</td>
            <td class=\"sylius-product-attribute-value\" ";
            // line 6
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-attribute-value", twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 6)]);
            echo ">
                ";
            // line 7
            $this->loadTemplate([0 => (("@SyliusShop/Product/Show/Types/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["attribute"], "attribute", [], "any", false, false, false, 7), "type", [], "any", false, false, false, 7)) . ".html.twig"), 1 => "@SyliusShop/Product/Show/Types/default.html.twig"], "@SyliusShop/Product/Show/Tabs/Attributes/_list.html.twig", 7)->display(twig_array_merge($context, ["attribute" => $context["attribute"], "locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "locale", [], "any", false, false, false, 7), "fallbackLocale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "defaultLocale", [], "any", false, false, false, 7)]));
            // line 8
            echo "            </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </tbody>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/Tabs/Attributes/_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 11,  81 => 8,  79 => 7,  75 => 6,  69 => 5,  66 => 4,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table id=\"sylius-product-attributes\" class=\"ui definition table\" {{ sylius_test_html_attribute('product-attributes') }}>
    <tbody>
    {% for attribute in product.getAttributesByLocale(configuration.request.locale, configuration.request.defaultLocale, sylius_base_locale)|sort_by('attribute.position') %}
        <tr>
            <td class=\"sylius-product-attribute-name\" {{ sylius_test_html_attribute('product-attribute-name', attribute.name) }}>{{ attribute.name }}</td>
            <td class=\"sylius-product-attribute-value\" {{ sylius_test_html_attribute('product-attribute-value', attribute.name) }}>
                {% include [('@SyliusShop/Product/Show/Types/'~attribute.attribute.type~'.html.twig'), '@SyliusShop/Product/Show/Types/default.html.twig'] with {'attribute': attribute, 'locale': configuration.request.locale, 'fallbackLocale': configuration.request.defaultLocale} %}
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "@SyliusShop/Product/Show/Tabs/Attributes/_list.html.twig", "/Users/drsilaswiggin/dev/e-commerce/demo/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/Tabs/Attributes/_list.html.twig");
    }
}
