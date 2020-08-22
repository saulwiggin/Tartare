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

/* @SyliusAdmin/ProductVariant/Index/_headerWidget.html.twig */
class __TwigTemplate_97e2d07d7cc0352b1818890f316f32cae026fe72e3800fc246abd3a64e911dfc extends \Twig\Template
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
        $this->loadTemplate("@SyliusAdmin/ProductVariant/Index/_header.html.twig", "@SyliusAdmin/ProductVariant/Index/_headerWidget.html.twig", 2)->display($context);
        // line 3
        echo "    ";
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_actions.html.twig", "@SyliusAdmin/ProductVariant/Index/_headerWidget.html.twig", 3)->display($context);
        // line 4
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/ProductVariant/Index/_headerWidget.html.twig";
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
        return new Source("", "@SyliusAdmin/ProductVariant/Index/_headerWidget.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Index/_headerWidget.html.twig");
    }
}
