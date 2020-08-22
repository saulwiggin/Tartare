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

/* @BitBagSyliusCmsPlugin/Media/preview.html.twig */
class __TwigTemplate_52206b321939d7bc2a1d27e0fc16ae80832d30ab7d40149389fb55c8f662fc40 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'metatags' => [$this, 'block_metatags'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@BitBagSyliusCmsPlugin/Media/preview.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_metatags($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <base href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 4), "getSchemeAndHttpHost", [], "method", false, false, false, 4), "html", null, true);
        echo "\">
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"column\">
        <div class=\"ui segment\">
            ";
        // line 10
        if ((($context["mediaTemplate"] ?? null) != null)) {
            // line 11
            echo "                ";
            $this->loadTemplate(($context["mediaTemplate"] ?? null), "@BitBagSyliusCmsPlugin/Media/preview.html.twig", 11)->display($context);
            // line 12
            echo "            ";
        }
        // line 13
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Media/preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 13,  71 => 12,  68 => 11,  66 => 10,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@BitBagSyliusCmsPlugin/Media/preview.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Media/preview.html.twig");
    }
}
