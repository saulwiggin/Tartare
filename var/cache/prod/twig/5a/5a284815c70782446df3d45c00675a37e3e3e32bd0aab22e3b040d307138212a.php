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

/* SyliusShopBundle:Product/Index:_main.html.twig */
class __TwigTemplate_a1f4e82870548c94e14a464b9eed723f004aa256ba068e613163d978759f9747 extends \Twig\Template
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
        $macros["messages"] = $this->macros["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusShopBundle:Product/Index:_main.html.twig", 1)->unwrap();
        // line 2
        $macros["pagination"] = $this->macros["pagination"] = $this->loadTemplate("@SyliusUi/Macro/pagination.html.twig", "SyliusShopBundle:Product/Index:_main.html.twig", 2)->unwrap();
        // line 3
        echo "
";
        // line 4
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.product.index.search", $context);
        echo "

<div class=\"ui clearing hidden divider\"></div>

";
        // line 8
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.product.index.before_list", ["products" => twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", [], "any", false, false, false, 8)]);
        echo "

";
        // line 10
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", [], "any", false, false, false, 10)) > 0)) {
            // line 11
            echo "    <div class=\"ui three cards\" id=\"products\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["products"]);
            echo ">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", [], "any", false, false, false, 12));
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
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 13
                echo "            ";
                $this->loadTemplate("@SyliusShop/Product/_box.html.twig", "SyliusShopBundle:Product/Index:_main.html.twig", 13)->display($context);
                // line 14
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    </div>
    <div class=\"ui hidden divider\"></div>

    ";
            // line 18
            echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.product.index.before_pagination", ["products" => twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", [], "any", false, false, false, 18)]);
            echo "

    ";
            // line 20
            echo twig_call_macro($macros["pagination"], "macro_simple", [twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", [], "any", false, false, false, 20)], 20, $context, $this->getSourceContext());
            echo "
";
        } else {
            // line 22
            echo "    ";
            echo twig_call_macro($macros["messages"], "macro_info", ["sylius.ui.no_results_to_display"], 22, $context, $this->getSourceContext());
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Index:_main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 22,  107 => 20,  102 => 18,  97 => 15,  83 => 14,  80 => 13,  63 => 12,  58 => 11,  56 => 10,  51 => 8,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Product/Index:_main.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Index/_main.html.twig");
    }
}
