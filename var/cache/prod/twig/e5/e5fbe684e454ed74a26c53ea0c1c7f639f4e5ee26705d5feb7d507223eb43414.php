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

/* @SyliusAdmin/_channelLinks.html.twig */
class __TwigTemplate_890204f2f54d0538d89c1010f74548b8ad9addd10f8585affab0ea906d484057 extends \Twig\Template
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
        @trigger_error("This template has been moved to @SyliusAdmin/Layout/_channelLinks.html.twig"." (\"@SyliusAdmin/_channelLinks.html.twig\" at line 1).", E_USER_DEPRECATED);
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("@SyliusAdmin/Layout/_channelLinks.html.twig", "@SyliusAdmin/_channelLinks.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/_channelLinks.html.twig";
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
        return new Source("", "@SyliusAdmin/_channelLinks.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/_channelLinks.html.twig");
    }
}
