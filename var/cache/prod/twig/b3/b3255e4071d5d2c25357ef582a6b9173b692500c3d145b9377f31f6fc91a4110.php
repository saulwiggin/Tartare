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

/* @SyliusAdmin/Order/History/_addresses.html.twig */
class __TwigTemplate_95bc9202dc064b743d3d4f66eac248536ef0cf12c39221637ddae413549a100d extends \Twig\Template
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
        $this->loadTemplate("@SyliusAdmin/Order/History/_address.html.twig", "@SyliusAdmin/Order/History/_addresses.html.twig", 4)->display(twig_array_merge($context, ["type" => "shipping", "address" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shippingAddress", [], "any", false, false, false, 4)]));
        // line 5
        echo "        </div>
        <div class=\"column\">
            ";
        // line 7
        $this->loadTemplate("@SyliusAdmin/Order/History/_address.html.twig", "@SyliusAdmin/Order/History/_addresses.html.twig", 7)->display(twig_array_merge($context, ["type" => "billing", "address" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "billingAddress", [], "any", false, false, false, 7)]));
        // line 8
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Order/History/_addresses.html.twig";
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
        return new Source("", "@SyliusAdmin/Order/History/_addresses.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/History/_addresses.html.twig");
    }
}
