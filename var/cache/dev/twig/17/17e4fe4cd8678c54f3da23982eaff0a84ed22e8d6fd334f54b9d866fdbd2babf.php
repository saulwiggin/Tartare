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
class __TwigTemplate_8cfc7053b4f85de5a27fb7138e7df50fd6eb3df40d04580b723abaf29eabb51e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SitemapPlugin::index.xml.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SitemapPlugin::index.xml.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["url_set"]) || array_key_exists("url_set", $context) ? $context["url_set"] : (function () { throw new RuntimeError('Variable "url_set" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 6
            echo "        <sitemap>
            <loc>";
            // line 7
            echo twig_call_macro($macros["url_helper"], "macro_absolute_or_relative", [twig_get_attribute($this->env, $this->source, $context["url"], "localization", [], "any", false, false, false, 7), (isset($context["absolute_url"]) || array_key_exists("absolute_url", $context) ? $context["absolute_url"] : (function () { throw new RuntimeError('Variable "absolute_url" does not exist.', 7, $this->source); })())], 7, $context, $this->getSourceContext());
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  71 => 11,  62 => 8,  58 => 7,  55 => 6,  51 => 5,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'SitemapPlugin::Macro/url.html.twig' as url_helper %}
{% import 'SitemapPlugin::Macro/xml.html.twig' as xml_helper %}
<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    {% for url in url_set %}
        <sitemap>
            <loc>{{ url_helper.absolute_or_relative(url.localization, absolute_url) }}</loc>
            {{ xml_helper.last_modification(url) }}
        </sitemap>
    {% endfor %}
</sitemapindex>
", "SitemapPlugin::index.xml.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/stefandoorn/sitemap-plugin/src/Resources/views/index.xml.twig");
    }
}
