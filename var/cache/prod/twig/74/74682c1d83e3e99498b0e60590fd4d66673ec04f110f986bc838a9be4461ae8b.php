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

/* SyliusShopBundle:ProductReview:create.html.twig */
class __TwigTemplate_327a163e2eff1418c06d53600a0e189ec1073ff5c105de8faafc5c552b9d24a1 extends \Twig\Template
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
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@SyliusShop/Form/theme.html.twig"], true);
        // line 5
        $context["product"] = twig_get_attribute($this->env, $this->source, ($context["product_review"] ?? null), "reviewSubject", [], "any", false, false, false, 5);
        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:ProductReview:create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui stackable grid\" id=\"reviews\">
        <div class=\"four wide column\">
            ";
        // line 11
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.product_review.create.product_box", $context);
        echo "
        </div>
        <div class=\"twelve wide column\">
            <div class=\"ui segment\">
                <div class=\"ui dividing header\">
                    ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.write_your_own_review"), "html", null, true);
        echo "
                    <div class=\"sub header\">
                        ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.you_are_reviewing"), "html", null, true);
        echo " <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</strong>.
                    </div>
                </div>

                ";
        // line 22
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.product_review.create.before_form", ["product_review" => ($context["product_review"] ?? null)]);
        echo "

                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_review_create", ["slug" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", [], "any", false, false, false, 24), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translation", [], "any", false, false, false, 24), "locale", [], "any", false, false, false, 24)]), "attr" => ["class" => "ui loadable reply form", "novalidate" => "novalidate"]]);
        echo "
                    ";
        // line 25
        $this->loadTemplate("@SyliusShop/ProductReview/_form.html.twig", "SyliusShopBundle:ProductReview:create.html.twig", 25)->display($context);
        // line 26
        echo "
                    ";
        // line 27
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.product_review.create.form", ["product_review" => ($context["product_review"] ?? null), "form" => ($context["form"] ?? null)]);
        echo "

                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 29), 'row');
        echo "
                    <button type=\"submit\" class=\"ui blue labeled large icon submit button\" ";
        // line 30
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["add"]);
        echo ">
                        <i class=\"icon check\"></i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.add"), "html", null, true);
        echo "
                    </button>
                ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:ProductReview:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 33,  109 => 31,  105 => 30,  101 => 29,  96 => 27,  93 => 26,  91 => 25,  87 => 24,  82 => 22,  73 => 18,  68 => 16,  60 => 11,  55 => 8,  51 => 7,  46 => 1,  44 => 5,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:ProductReview:create.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/ProductReview/create.html.twig");
    }
}
