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

/* @SyliusAdmin/PromotionCoupon/Index/_headerWidget.html.twig */
class __TwigTemplate_310da5b5352ee8214380077db1f23e7365e00dc6de77ab4705ab762ba8938bdc extends \Twig\Template
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
        echo "<div class=\"ui stackable two column grid\">
    ";
        // line 2
        $this->loadTemplate("@SyliusAdmin/PromotionCoupon/Index/_header.html.twig", "@SyliusAdmin/PromotionCoupon/Index/_headerWidget.html.twig", 2)->display($context);
        // line 3
        echo "    ";
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_actions.html.twig", "@SyliusAdmin/PromotionCoupon/Index/_headerWidget.html.twig", 3)->display($context);
        // line 4
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/PromotionCoupon/Index/_headerWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/PromotionCoupon/Index/_headerWidget.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PromotionCoupon/Index/_headerWidget.html.twig");
    }
}
