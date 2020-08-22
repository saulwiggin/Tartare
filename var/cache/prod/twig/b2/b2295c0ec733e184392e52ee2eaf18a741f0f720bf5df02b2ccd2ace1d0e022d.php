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

/* SyliusAdminBundle:Customer/Show:_contentWidget.html.twig */
class __TwigTemplate_9e967b97d46081d42fa8e0053b3f8c3856415f71a516b06a9e19918929db0549 extends \Twig\Template
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
        echo "<div class=\"ui stackable grid\">
    ";
        // line 2
        $this->loadTemplate("@SyliusAdmin/Customer/Show/_content.html.twig", "SyliusAdminBundle:Customer/Show:_contentWidget.html.twig", 2)->display($context);
        // line 3
        echo "    ";
        $this->loadTemplate("@SyliusAdmin/Customer/Show/_address.html.twig", "SyliusAdminBundle:Customer/Show:_contentWidget.html.twig", 3)->display($context);
        // line 4
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Show:_contentWidget.html.twig";
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
        return new Source("", "SyliusAdminBundle:Customer/Show:_contentWidget.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/_contentWidget.html.twig");
    }
}
