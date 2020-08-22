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

/* SitemapPlugin::index.xml.twig */
class __TwigTemplate_4f35ef4fd9696b86c44b5a20f47c13430ca9cacd137b792980df013890e785cb extends \Twig\Template
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
        $macros["url_helper"] = $this->macros["url_helper"] = $this->loadTemplate("SitemapPlugin::Macro/url.html.twig", "SitemapPlugin::index.xml.twig", 1)->unwrap();
        // line 2
        $macros["xml_helper"] = $this->macros["xml_helper"] = $this->loadTemplate("SitemapPlugin::Macro/xml.html.twig", "SitemapPlugin::index.xml.twig", 2)->unwrap();
        // line 3
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["url_set"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 6
            echo "        <sitemap>
            <loc>";
            // line 7
            echo twig_call_macro($macros["url_helper"], "macro_absolute_or_relative", [twig_get_attribute($this->env, $this->source, $context["url"], "localization", [], "any", false, false, false, 7), ($context["absolute_url"] ?? null)], 7, $context, $this->getSourceContext());
            echo "</loc>
            ";
            // line 8
            echo twig_call_macro($macros["xml_helper"], "macro_last_modification", [$context["url"]], 8, $context, $this->getSourceContext());
            echo "
        </sitemap>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</sitemapindex>
";
    }

    public function getTemplateName()
    {
        return "SitemapPlugin::index.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  56 => 8,  52 => 7,  49 => 6,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SitemapPlugin::index.xml.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/stefandoorn/sitemap-plugin/src/Resources/views/index.xml.twig");
    }
}
