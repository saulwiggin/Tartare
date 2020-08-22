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

/* @SyliusAdmin/Order/History/_headerWidget.html.twig */
class __TwigTemplate_745534edb0287494b0076e1a0f19d7c9362183008ed9585c5cdc76af83f8da07 extends \Twig\Template
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
    <div class=\"twelve wide column\">
        ";
        // line 3
        $this->loadTemplate("@SyliusAdmin/Order/History/_header.html.twig", "@SyliusAdmin/Order/History/_headerWidget.html.twig", 3)->display($context);
        // line 4
        echo "    </div>
    <div class=\"four wide right aligned column\">
        ";
        // line 6
        $this->loadTemplate("@SyliusAdmin/Order/History/_actions.html.twig", "@SyliusAdmin/Order/History/_headerWidget.html.twig", 6)->display($context);
        // line 7
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Order/History/_headerWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  47 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Order/History/_headerWidget.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/History/_headerWidget.html.twig");
    }
}
