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

/* SyliusAdminBundle:ProductVariant/Update:_toolbar.html.twig */
class __TwigTemplate_a78373d10d8d814b2815a36d8fb6083eaa95375c8f9e56acd33b19e0db426a65 extends \Twig\Template
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
        echo "<div class=\"middle aligned column\">
    <div class=\"ui right floated buttons\">
        ";
        // line 3
        $this->loadTemplate("@SyliusAdmin/Product/_showInShopButton.html.twig", "SyliusAdminBundle:ProductVariant/Update:_toolbar.html.twig", 3)->display(twig_array_merge($context, ["product" => twig_get_attribute($this->env, $this->source, ($context["product_variant"] ?? null), "product", [], "any", false, false, false, 3)]));
        // line 4
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Update:_toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:ProductVariant/Update:_toolbar.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Update/_toolbar.html.twig");
    }
}
