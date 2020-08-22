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

/* SyliusAdminBundle:Order/Update:_content.html.twig */
class __TwigTemplate_72e13a203c1f5a0af445e4719d49e7db8e258d26effaca9f9a7891debd07e9ff extends \Twig\Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_update", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 3)]), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
        echo "
<div class=\"ui segment\">
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

    <div class=\"ui segment\">
        <h4 class=\"ui dividing header\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_address"), "html", null, true);
        echo "</h4>
        ";
        // line 9
        $this->loadTemplate("@SyliusAdmin/Common/Form/_address.html.twig", "SyliusAdminBundle:Order/Update:_content.html.twig", 9)->display(twig_array_merge($context, ["form" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shippingAddress", [], "any", false, false, false, 9)]));
        // line 10
        echo "    </div>

    <div class=\"ui segment\">
        <h4 class=\"ui dividing header\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.billing_address"), "html", null, true);
        echo "</h4>
        ";
        // line 14
        $this->loadTemplate("@SyliusAdmin/Common/Form/_address.html.twig", "SyliusAdminBundle:Order/Update:_content.html.twig", 14)->display(twig_array_merge($context, ["form" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "billingAddress", [], "any", false, false, false, 14)]));
        // line 15
        echo "    </div>

    ";
        // line 17
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.order.update.form", ["resource" => ($context["resource"] ?? null)]);
        echo "

    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 19), 'row');
        echo "
    ";
        // line 20
        $this->loadTemplate("@SyliusUi/Form/Buttons/_update.html.twig", "SyliusAdminBundle:Order/Update:_content.html.twig", 20)->display(twig_array_merge($context, ["paths" => ["cancel" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_index")]]));
        // line 21
        echo "</div>
";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Update:_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 22,  82 => 21,  80 => 20,  76 => 19,  71 => 17,  67 => 15,  65 => 14,  61 => 13,  56 => 10,  54 => 9,  50 => 8,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Order/Update:_content.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Update/_content.html.twig");
    }
}
