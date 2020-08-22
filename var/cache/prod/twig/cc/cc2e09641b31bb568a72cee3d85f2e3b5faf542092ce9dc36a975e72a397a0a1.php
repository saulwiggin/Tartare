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

/* SyliusAdminBundle:Shipment/Grid/Action:shipWithTrackingCode.html.twig */
class __TwigTemplate_3fc3259f764739d859e14f0e39c27864b30c4533da1bd1276340d955b0e43945 extends \Twig\Template
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
        if ($this->extensions['SM\Extension\Twig\SMExtension']->can(($context["data"] ?? null), "ship", "sylius_shipment")) {
            // line 2
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("sylius.controller.shipment:updateAction", ["_sylius" => ["event" => "ship", "repository" => ["method" => "findOneByOrderId", "arguments" => ["id" => twig_get_attribute($this->env, $this->source,             // line 8
($context["data"] ?? null), "id", [], "any", false, false, false, 8), "orderId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 9
($context["data"] ?? null), "order", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9)]], "state_machine" => ["graph" => "sylius_shipment", "transition" => "ship"], "section" => "admin", "permission" => true, "template" => "@SyliusAdmin/Shipment/Grid/_ship.html.twig", "form" => "Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType", "vars" => ["route" => ["parameters" => ["id" => twig_get_attribute($this->env, $this->source,             // line 23
($context["data"] ?? null), "id", [], "any", false, false, false, 23), "orderId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 24
($context["data"] ?? null), "order", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24)]]]]]));
            // line 29
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Shipment/Grid/Action:shipWithTrackingCode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 29,  44 => 24,  43 => 23,  42 => 9,  41 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Shipment/Grid/Action:shipWithTrackingCode.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Shipment/Grid/Action/shipWithTrackingCode.html.twig");
    }
}
