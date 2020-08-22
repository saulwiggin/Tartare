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

/* @FOSOAuthServer/Authorize/authorize.html.twig */
class __TwigTemplate_6b16b0ccfe9c65fadfd30086397c0b638bed1fad5d14d372f2cdf49c94869c04 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'fos_oauth_server_content' => [$this, 'block_fos_oauth_server_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "FOSOAuthServerBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("FOSOAuthServerBundle::layout.html.twig", "@FOSOAuthServer/Authorize/authorize.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_oauth_server_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $this->loadTemplate("FOSOAuthServerBundle:Authorize:authorize_content.html.twig", "@FOSOAuthServer/Authorize/authorize.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "@FOSOAuthServer/Authorize/authorize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSOAuthServer/Authorize/authorize.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/friendsofsymfony/oauth-server-bundle/Resources/views/Authorize/authorize.html.twig");
    }
}
