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

/* SyliusAdminBundle:Order/History:_addresses.html.twig */
class __TwigTemplate_cb8d5b929395b39158f253ca83ed281df51db9dbcaac8b31aaabfd30fb68f8a7 extends \Twig\Template
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
        echo "<div class=\"ui segment\">
    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            ";
        // line 4
        $this->loadTemplate("@SyliusAdmin/Order/History/_address.html.twig", "SyliusAdminBundle:Order/History:_addresses.html.twig", 4)->display(twig_array_merge($context, ["type" => "shipping", "address" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shippingAddress", [], "any", false, false, false, 4)]));
        // line 5
        echo "        </div>
        <div class=\"column\">
            ";
        // line 7
        $this->loadTemplate("@SyliusAdmin/Order/History/_address.html.twig", "SyliusAdminBundle:Order/History:_addresses.html.twig", 7)->display(twig_array_merge($context, ["type" => "billing", "address" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "billingAddress", [], "any", false, false, false, 7)]));
        // line 8
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/History:_addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  48 => 7,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Order/History:_addresses.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/History/_addresses.html.twig");
    }
}
