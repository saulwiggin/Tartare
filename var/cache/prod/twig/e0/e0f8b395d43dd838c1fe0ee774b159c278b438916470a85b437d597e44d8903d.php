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

/* SyliusAdminBundle::_security.html.twig */
class __TwigTemplate_cdd2860dca00cbe1b771d2fc8a7a7a259a534b2c87225a122d07713b9b1272a1 extends \Twig\Template
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
        @trigger_error("This template has been moved to @SyliusAdmin/Layout/_security.html.twig"." (\"SyliusAdminBundle::_security.html.twig\" at line 1).", E_USER_DEPRECATED);
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("@SyliusAdmin/Layout/_security.html.twig", "SyliusAdminBundle::_security.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle::_security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle::_security.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/_security.html.twig");
    }
}
