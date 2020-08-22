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

/* @SyliusAdmin/Order/Show/_addresses.html.twig */
class __TwigTemplate_6c6915c876d5fca1557697ac87f13ddf06b4a94adb6c1b2937a8eff863f440a7 extends \Twig\Template
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
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "billingAddress", [], "any", false, false, false, 1))) {
            // line 2
            echo "    <h4 class=\"ui attached styled header";
            if ((null === twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shippingAddress", [], "any", false, false, false, 2))) {
                echo " top";
            }
            echo "\">
        ";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.billing_address"), "html", null, true);
            echo "
    </h4>
    <div class=\"ui attached segment\" id=\"billing-address\">
        ";
            // line 6
            $this->loadTemplate("@SyliusAdmin/Common/_address.html.twig", "@SyliusAdmin/Order/Show/_addresses.html.twig", 6)->display(twig_array_merge($context, ["address" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "billingAddress", [], "any", false, false, false, 6)]));
            // line 7
            echo "    </div>
";
        }
        // line 9
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shippingAddress", [], "any", false, false, false, 9))) {
            // line 10
            echo "    <h4 class=\"ui top attached styled header\">
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_address"), "html", null, true);
            echo "
    </h4>
    <div class=\"ui attached segment\" id=\"shipping-address\">
        ";
            // line 14
            $this->loadTemplate("@SyliusAdmin/Common/_address.html.twig", "@SyliusAdmin/Order/Show/_addresses.html.twig", 14)->display(twig_array_merge($context, ["address" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shippingAddress", [], "any", false, false, false, 14)]));
            // line 15
            echo "    </div>
";
        }
        // line 17
        echo "<div class=\"ui attached segment\" id=\"edit-addresses\">
    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_update", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\" class=\"ui icon labeled tiny fluid button\">
        <i class=\"pencil icon\"></i> ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit_addresses"), "html", null, true);
        echo "
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Order/Show/_addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  78 => 18,  75 => 17,  71 => 15,  69 => 14,  63 => 11,  60 => 10,  58 => 9,  54 => 7,  52 => 6,  46 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Order/Show/_addresses.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_addresses.html.twig");
    }
}
