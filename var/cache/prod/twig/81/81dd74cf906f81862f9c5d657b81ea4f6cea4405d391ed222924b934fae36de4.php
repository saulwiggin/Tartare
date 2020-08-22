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

/* @SyliusShop/Checkout/selectShipping.html.twig */
class __TwigTemplate_d2de7bd13876c766fffba2897a5d7cda3916ce4236687da36b4003cf6230f665 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusShop/Checkout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@SyliusShop/Form/theme.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Checkout/layout.html.twig", "@SyliusShop/Checkout/selectShipping.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([0 => "sylius.shop.checkout.select_shipping.steps", 1 => "sylius.shop.checkout.steps"], twig_array_merge($context, ["active" => "select_shipping", "orderTotal" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 6)]));
        echo "

    <div class=\"ui stackable grid\">
        <div class=\"eleven wide column\">
            <div class=\"ui padded segment\" id=\"sylius-shipping-methods\">
                ";
        // line 11
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.checkout.select_shipping.before_form", ["order" => ($context["order"] ?? null)]);
        echo "

                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_select_shipping"), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
        echo "
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

                    ";
        // line 17
        $this->loadTemplate("@SyliusShop/Checkout/SelectShipping/_form.html.twig", "@SyliusShop/Checkout/selectShipping.html.twig", 17)->display($context);
        // line 18
        echo "                    <div class=\"ui hidden divider\"></div>

                    ";
        // line 20
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.checkout.select_shipping.before_navigation", ["order" => ($context["order"] ?? null)]);
        echo "

                    ";
        // line 22
        $this->loadTemplate("@SyliusShop/Checkout/SelectShipping/_navigation.html.twig", "@SyliusShop/Checkout/selectShipping.html.twig", 22)->display($context);
        // line 23
        echo "
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 24), 'row');
        echo "
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
            </div>
        </div>
        <div class=\"five wide column\">
            ";
        // line 29
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([0 => "sylius.shop.checkout.select_shipping.sidebar", 1 => "sylius.shop.checkout.sidebar"], $context);
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Checkout/selectShipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  97 => 25,  93 => 24,  90 => 23,  88 => 22,  83 => 20,  79 => 18,  77 => 17,  71 => 14,  67 => 13,  62 => 11,  53 => 6,  49 => 5,  44 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Checkout/selectShipping.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/selectShipping.html.twig");
    }
}
