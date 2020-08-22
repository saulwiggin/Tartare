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

/* SyliusShopBundle:Cart/Summary:_coupon.html.twig */
class __TwigTemplate_a11b7033533d0b3028ac596b126f6f1d220f00888a90caa68b97f7946ea7689c extends \Twig\Template
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
        echo "<div id=\"sylius-coupon\" ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["cart-promotion-coupon"]);
        echo ">
    <div class=\"ui coupon action input\">
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "promotionCoupon", [], "any", false, false, false, 3), 'widget', call_user_func_array($this->env->getFilter('sylius_merge_recursive')->getCallable(), [call_user_func_array($this->env->getFunction('sylius_test_form_attribute')->getCallable(), ["cart-promotion-coupon-input"]), ["attr" => ["form" => ($context["main_form"] ?? null), "placeholder" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.enter_your_code") . "...")]]]));
        echo "
        <button type=\"submit\" id=\"sylius-save\" ";
        // line 4
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["apply-coupon-button"]);
        echo " class=\"ui teal icon labeled button\" form=\"";
        echo twig_escape_filter($this->env, ($context["main_form"] ?? null), "html", null, true);
        echo "\"><i class=\"ticket icon\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.apply_coupon"), "html", null, true);
        echo "</button>
    </div>
    <br>
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "promotionCoupon", [], "any", false, false, false, 7), 'errors');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_coupon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Cart/Summary:_coupon.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_coupon.html.twig");
    }
}
