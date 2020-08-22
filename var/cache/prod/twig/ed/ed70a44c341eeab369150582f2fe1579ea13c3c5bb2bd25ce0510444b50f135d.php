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

/* SyliusShopBundle:Checkout:complete.html.twig */
class __TwigTemplate_73cc02d53aaa96bea1a44df4b9b043c5db2697514382af6294152f7b29c23263 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@SyliusShop/Checkout/layout.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([0 => "sylius.shop.checkout.complete.steps", 1 => "sylius.shop.checkout.steps"], twig_array_merge($context, ["active" => "complete", "orderTotal" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 6)]));
        echo "

    <div class=\"ui padded segment\">
        ";
        // line 9
        $this->loadTemplate("@SyliusShop/Checkout/Complete/_header.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 9)->display($context);
        // line 10
        echo "
        ";
        // line 11
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.checkout.complete.after_content_header", ["order" => ($context["order"] ?? null)]);
        echo "

        ";
        // line 13
        $this->loadTemplate("@SyliusShop/_flashes.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 13)->display($context);
        // line 14
        echo "
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_complete"), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

            ";
        // line 19
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.checkout.complete.summary", $context);
        echo "

            <div class=\"ui hidden divider\"></div>
            ";
        // line 22
        $this->loadTemplate("@SyliusShop/Checkout/Complete/_form.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 22)->display($context);
        // line 23
        echo "
            ";
        // line 24
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.checkout.complete.before_navigation", ["order" => ($context["order"] ?? null)]);
        echo "

            ";
        // line 26
        $this->loadTemplate("@SyliusShop/Checkout/Complete/_navigation.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 26)->display($context);
        // line 27
        echo "
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 28), 'row');
        echo "
        ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:complete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 29,  106 => 28,  103 => 27,  101 => 26,  96 => 24,  93 => 23,  91 => 22,  85 => 19,  79 => 16,  75 => 15,  72 => 14,  70 => 13,  65 => 11,  62 => 10,  60 => 9,  53 => 6,  49 => 5,  44 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Checkout:complete.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/complete.html.twig");
    }
}
