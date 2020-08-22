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

/* SyliusShopBundle:Cart:summary.html.twig */
class __TwigTemplate_f888077dff7ae827ca3ef60c15624409b02bd8fa883da18ae97441db1a5b3d7b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@SyliusShop/Form/theme.html.twig"], true);
        // line 5
        $macros["messages"] = $this->macros["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusShopBundle:Cart:summary.html.twig", 5)->unwrap();
        // line 7
        $context["header"] = "sylius.ui.your_shopping_cart";
        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Cart:summary.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["header"] ?? null)), "html", null, true);
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "empty", [], "any", false, false, false, 12)) {
            // line 13
            echo "        ";
            echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.cart.header", ["header" => ($context["header"] ?? null), "cart" => ($context["cart"] ?? null)]);
            echo "
        <div class=\"ui stackable grid\">
            <div class=\"eleven wide column\">
                ";
            // line 16
            echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.cart.items", ["cart" => ($context["cart"] ?? null), "form" => ($context["form"] ?? null)]);
            echo "
            </div>
            <div class=\"five wide column\">
                ";
            // line 19
            echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.cart.summary", ["cart" => ($context["cart"] ?? null)]);
            echo "
            </div>
        </div>
        ";
            // line 22
            echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.cart.suggestions", ["cart" => ($context["cart"] ?? null)]);
            echo "
    ";
        } else {
            // line 24
            echo "        ";
            echo twig_call_macro($macros["messages"], "macro_info", ["sylius.ui.your_cart_is_empty"], 24, $context, $this->getSourceContext());
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart:summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 24,  89 => 22,  83 => 19,  77 => 16,  70 => 13,  67 => 12,  63 => 11,  54 => 9,  49 => 1,  47 => 7,  45 => 5,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Cart:summary.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/summary.html.twig");
    }
}
