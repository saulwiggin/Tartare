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

/* SyliusAdminBundle:Dashboard:_latest.html.twig */
class __TwigTemplate_5bbaa72e69bdedc01972f50b2e80da0c73d087e5b55c64f66576f0106e3a4fa1 extends \Twig\Template
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
        echo "<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_admin_partial_customer_latest", ["count" => 5, "template" => "@SyliusAdmin/Dashboard/_customers.html.twig"]));
        echo "
    </div>
    <div class=\"column\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_partial_order_latest_in_channel", ["channelCode" => twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "code", [], "any", false, false, false, 6), "count" => 5, "template" => "@SyliusAdmin/Dashboard/_orders.html.twig"]));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Dashboard:_latest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Dashboard:_latest.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_latest.html.twig");
    }
}
