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

/* SyliusShopBundle:Product/Show/Tabs/Attributes:_list.html.twig */
class __TwigTemplate_1f1747c7dc0feae3751b2590d39e0900e5592305c499e692ce0fe7cd68909651 extends \Twig\Template
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
        echo "<table id=\"sylius-product-attributes\" class=\"ui definition table\" ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["product-attributes"]);
        echo ">
    <tbody>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getAttributesByLocale", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "request", [], "any", false, false, false, 3), "locale", [], "any", false, false, false, 3), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "request", [], "any", false, false, false, 3), "defaultLocale", [], "any", false, false, false, 3), 2 => ($context["sylius_base_locale"] ?? null)], "method", false, false, false, 3), "attribute.position"));
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
            $this->loadTemplate([0 => (("@SyliusShop/Product/Show/Types/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 8
$context["attribute"], "attribute", [], "any", false, false, false, 8), "type", [], "any", false, false, false, 8)) . ".html.twig"), 1 => (("@SyliusAttribute/Types/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 9
$context["attribute"], "attribute", [], "any", false, false, false, 9), "type", [], "any", false, false, false, 9)) . ".html.twig"), 2 => "@SyliusShop/Product/Show/Types/default.html.twig"], "SyliusShopBundle:Product/Show/Tabs/Attributes:_list.html.twig", 7)->display(twig_array_merge($context, ["attribute" =>             // line 12
$context["attribute"], "locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 13
($context["configuration"] ?? null), "request", [], "any", false, false, false, 13), "locale", [], "any", false, false, false, 13), "fallbackLocale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 14
($context["configuration"] ?? null), "request", [], "any", false, false, false, 14), "defaultLocale", [], "any", false, false, false, 14)]));
            // line 16
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
        // line 19
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show/Tabs/Attributes:_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 19,  80 => 16,  78 => 14,  77 => 13,  76 => 12,  75 => 9,  74 => 8,  73 => 7,  69 => 6,  63 => 5,  60 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Product/Show/Tabs/Attributes:_list.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/Tabs/Attributes/_list.html.twig");
    }
}
