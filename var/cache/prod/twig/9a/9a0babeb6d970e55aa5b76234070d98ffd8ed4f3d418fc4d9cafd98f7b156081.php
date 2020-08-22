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

/* @SyliusAdmin/PromotionCoupon/Generate/_formWidget.html.twig */
class __TwigTemplate_9892392bc70f5e3e67ea739583cc1e3848c32850e7766b8379139571a294544c extends \Twig\Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@SyliusAdmin/Form/theme.html.twig"], true);
        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_promotion_coupon_generate", ["promotionId" => twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 3)]), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
        echo "
<div class=\"ui segment\">
    ";
        // line 5
        $this->loadTemplate("@SyliusAdmin/PromotionCoupon/Generate/_form.html.twig", "@SyliusAdmin/PromotionCoupon/Generate/_formWidget.html.twig", 5)->display($context);
        // line 6
        echo "    <div class=\"ui basic segment\">
        <div class=\"ui buttons\">
            <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"random icon\"></i>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.generate"), "html", null, true);
        echo "</button>
            ";
        // line 9
        $this->loadTemplate("@SyliusUi/Form/Buttons/_cancel.html.twig", "@SyliusAdmin/PromotionCoupon/Generate/_formWidget.html.twig", 9)->display(twig_array_merge($context, ["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "getRouteName", [0 => "index"], "method", false, false, false, 9), ["promotionId" => twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 9)])]));
        // line 10
        echo "        </div>
    </div>

    ";
        // line 13
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.promotion_coupon.generate.form", ["resource" => ($context["promotion"] ?? null)]);
        echo "
</div>
";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 15), 'row');
        echo "
";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/PromotionCoupon/Generate/_formWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  69 => 15,  64 => 13,  59 => 10,  57 => 9,  53 => 8,  49 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/PromotionCoupon/Generate/_formWidget.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PromotionCoupon/Generate/_formWidget.html.twig");
    }
}
