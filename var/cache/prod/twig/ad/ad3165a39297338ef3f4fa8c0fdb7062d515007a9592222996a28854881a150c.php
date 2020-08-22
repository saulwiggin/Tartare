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

/* SyliusAdminBundle:ProductVariant:_form.html.twig */
class __TwigTemplate_e6359a339bce91e30b090a8de52681d1805ce19c022083c6acca65d5b81817b5 extends \Twig\Template
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
        $context["menu"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->get("sylius.admin.product_variant_form", [], ["product_variant" => ($context["product_variant"] ?? null)]);
        // line 2
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(($context["menu"] ?? null), ["template" => "@SyliusAdmin/ProductVariant/_menu.html.twig", "form" => ($context["form"] ?? null), "product_variant" => ($context["product_variant"] ?? null)]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:ProductVariant:_form.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/_form.html.twig");
    }
}
