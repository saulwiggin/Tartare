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

/* BitBagSyliusCmsPlugin:Page:preview.html.twig */
class __TwigTemplate_cf31d8687fa7fe2ee67721d3315dc3a79a50880b3fb2f8f6c175598d59d66cb2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'metatags' => [$this, 'block_metatags'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@BitBagSyliusCmsPlugin/Shop/Page/show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@BitBagSyliusCmsPlugin/Shop/Page/show.html.twig", "BitBagSyliusCmsPlugin:Page:preview.html.twig", 1);
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

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:Page:preview.html.twig";
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
        return new Source("", "BitBagSyliusCmsPlugin:Page:preview.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Page/preview.html.twig");
    }
}
