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

/* SyliusAdminBundle:Channel/Grid/Field:name.html.twig */
class __TwigTemplate_3613f89b44959e3ce74d5d3acccd0470abb97baee92bbd1beb108ea6d7be115d extends \Twig\Template
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
        $this->loadTemplate("@SyliusAdmin/Common/_channel.html.twig", "SyliusAdminBundle:Channel/Grid/Field:name.html.twig", 1)->display(twig_array_merge($context, ["channel" => ($context["data"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Channel/Grid/Field:name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Channel/Grid/Field:name.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Channel/Grid/Field/name.html.twig");
    }
}
