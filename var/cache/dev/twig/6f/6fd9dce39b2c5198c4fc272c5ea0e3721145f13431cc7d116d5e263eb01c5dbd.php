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

/* SitemapPlugin::show.xml.twig */
class __TwigTemplate_9f17b70994d570acd150cac4329106a639facc789712d0fdd5db6e89dd20a5ef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SitemapPlugin::show.xml.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SitemapPlugin::show.xml.twig"));

        // line 1
        $macros["url_helper"] = $this->macros["url_helper"] = $this->loadTemplate("SitemapPlugin::Macro/url.html.twig", "SitemapPlugin::show.xml.twig", 1)->unwrap();
        // line 2
        $macros["language_helper"] = $this->macros["language_helper"] = $this->loadTemplate("SitemapPlugin::Macro/language.html.twig", "SitemapPlugin::show.xml.twig", 2)->unwrap();
        // line 3
        $macros["xml_helper"] = $this->macros["xml_helper"] = $this->loadTemplate("SitemapPlugin::Macro/xml.html.twig", "SitemapPlugin::show.xml.twig", 3)->unwrap();
        // line 4
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["url_set"]) || array_key_exists("url_set", $context) ? $context["url_set"] : (function () { throw new RuntimeError('Variable "url_set" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 7
            echo "        <url>
            <loc>";
            // line 8
            echo twig_call_macro($macros["url_helper"], "macro_absolute_or_relative", [twig_get_attribute($this->env, $this->source, $context["url"], "localization", [], "any", false, false, false, 8), (isset($context["absolute_url"]) || array_key_exists("absolute_url", $context) ? $context["absolute_url"] : (function () { throw new RuntimeError('Variable "absolute_url" does not exist.', 8, $this->source); })())], 8, $context, $this->getSourceContext());
            echo "</loc>
            ";
            // line 9
            if (( !((isset($context["hreflang"]) || array_key_exists("hreflang", $context) ? $context["hreflang"] : (function () { throw new RuntimeError('Variable "hreflang" does not exist.', 9, $this->source); })()) === false) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["url"], "alternatives", [], "any", false, false, false, 9)))) {
                // line 10
                echo "                <xhtml:link rel=\"alternate\" hreflang=\"";
                echo twig_call_macro($macros["language_helper"], "macro_localeToCode", [twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 10, $this->source); })()), "localeCode", [], "any", false, false, false, 10)], 10, $context, $this->getSourceContext());
                echo "\" href=\"";
                echo twig_call_macro($macros["url_helper"], "macro_absolute_or_relative", [twig_get_attribute($this->env, $this->source, $context["url"], "localization", [], "any", false, false, false, 10), (isset($context["absolute_url"]) || array_key_exists("absolute_url", $context) ? $context["absolute_url"] : (function () { throw new RuntimeError('Variable "absolute_url" does not exist.', 10, $this->source); })())], 10, $context, $this->getSourceContext());
                echo "\"/>
                ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["url"], "alternatives", [], "any", false, false, false, 11));
                foreach ($context['_seq'] as $context["locale"] => $context["location"]) {
                    // line 12
                    echo "                    <xhtml:link rel=\"alternate\" hreflang=\"";
                    echo twig_call_macro($macros["language_helper"], "macro_localeToCode", [$context["locale"]], 12, $context, $this->getSourceContext());
                    echo "\" href=\"";
                    echo twig_call_macro($macros["url_helper"], "macro_absolute_or_relative", [$context["location"], (isset($context["absolute_url"]) || array_key_exists("absolute_url", $context) ? $context["absolute_url"] : (function () { throw new RuntimeError('Variable "absolute_url" does not exist.', 12, $this->source); })())], 12, $context, $this->getSourceContext());
                    echo "\"/>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['locale'], $context['location'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "            ";
            }
            // line 15
            echo "            ";
            echo twig_call_macro($macros["xml_helper"], "macro_last_modification", [$context["url"]], 15, $context, $this->getSourceContext());
            echo "
            ";
            // line 16
            echo twig_call_macro($macros["xml_helper"], "macro_change_frequency", [$context["url"]], 16, $context, $this->getSourceContext());
            echo "
            ";
            // line 17
            echo twig_call_macro($macros["xml_helper"], "macro_priority", [$context["url"]], 17, $context, $this->getSourceContext());
            echo "
        </url>
        ";
            // line 19
            if (( !((isset($context["hreflang"]) || array_key_exists("hreflang", $context) ? $context["hreflang"] : (function () { throw new RuntimeError('Variable "hreflang" does not exist.', 19, $this->source); })()) === false) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["url"], "alternatives", [], "any", false, false, false, 19)))) {
                // line 20
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["url"], "alternatives", [], "any", false, false, false, 20));
                foreach ($context['_seq'] as $context["locale"] => $context["location"]) {
                    // line 21
                    echo "                <url>
                    <loc>";
                    // line 22
                    echo twig_call_macro($macros["url_helper"], "macro_absolute_or_relative", [$context["location"], (isset($context["absolute_url"]) || array_key_exists("absolute_url", $context) ? $context["absolute_url"] : (function () { throw new RuntimeError('Variable "absolute_url" does not exist.', 22, $this->source); })())], 22, $context, $this->getSourceContext());
                    echo "</loc>
                    <xhtml:link rel=\"alternate\" hreflang=\"";
                    // line 23
                    echo twig_call_macro($macros["language_helper"], "macro_localeToCode", [twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 23, $this->source); })()), "localeCode", [], "any", false, false, false, 23)], 23, $context, $this->getSourceContext());
                    echo "\" href=\"";
                    echo twig_call_macro($macros["url_helper"], "macro_absolute_or_relative", [twig_get_attribute($this->env, $this->source, $context["url"], "localization", [], "any", false, false, false, 23), (isset($context["absolute_url"]) || array_key_exists("absolute_url", $context) ? $context["absolute_url"] : (function () { throw new RuntimeError('Variable "absolute_url" does not exist.', 23, $this->source); })())], 23, $context, $this->getSourceContext());
                    echo "\"/>
                    ";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["url"], "alternatives", [], "any", false, false, false, 24));
                    foreach ($context['_seq'] as $context["localeSub"] => $context["locationSub"]) {
                        // line 25
                        echo "                        <xhtml:link rel=\"alternate\" hreflang=\"";
                        echo twig_call_macro($macros["language_helper"], "macro_localeToCode", [$context["localeSub"]], 25, $context, $this->getSourceContext());
                        echo "\" href=\"";
                        echo twig_call_macro($macros["url_helper"], "macro_absolute_or_relative", [$context["locationSub"], (isset($context["absolute_url"]) || array_key_exists("absolute_url", $context) ? $context["absolute_url"] : (function () { throw new RuntimeError('Variable "absolute_url" does not exist.', 25, $this->source); })())], 25, $context, $this->getSourceContext());
                        echo "\"/>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['localeSub'], $context['locationSub'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "                    ";
                    echo twig_call_macro($macros["xml_helper"], "macro_last_modification", [$context["url"]], 27, $context, $this->getSourceContext());
                    echo "
                    ";
                    // line 28
                    echo twig_call_macro($macros["xml_helper"], "macro_change_frequency", [$context["url"]], 28, $context, $this->getSourceContext());
                    echo "
                    ";
                    // line 29
                    echo twig_call_macro($macros["xml_helper"], "macro_priority", [$context["url"]], 29, $context, $this->getSourceContext());
                    echo "
                </url>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['locale'], $context['location'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "        ";
            }
            // line 33
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</urlset>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SitemapPlugin::show.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 34,  161 => 33,  158 => 32,  149 => 29,  145 => 28,  140 => 27,  129 => 25,  125 => 24,  119 => 23,  115 => 22,  112 => 21,  107 => 20,  105 => 19,  100 => 17,  96 => 16,  91 => 15,  88 => 14,  77 => 12,  73 => 11,  66 => 10,  64 => 9,  60 => 8,  57 => 7,  53 => 6,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'SitemapPlugin::Macro/url.html.twig' as url_helper %}
{% import 'SitemapPlugin::Macro/language.html.twig' as language_helper %}
{% import 'SitemapPlugin::Macro/xml.html.twig' as xml_helper %}
<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\">
    {% for url in url_set %}
        <url>
            <loc>{{ url_helper.absolute_or_relative(url.localization, absolute_url) }}</loc>
            {% if hreflang is not same as(false) and url.alternatives is not empty %}
                <xhtml:link rel=\"alternate\" hreflang=\"{{ language_helper.localeToCode(sylius.localeCode) }}\" href=\"{{ url_helper.absolute_or_relative(url.localization, absolute_url) }}\"/>
                {% for locale, location in url.alternatives %}
                    <xhtml:link rel=\"alternate\" hreflang=\"{{ language_helper.localeToCode(locale) }}\" href=\"{{ url_helper.absolute_or_relative(location, absolute_url) }}\"/>
                {% endfor %}
            {% endif %}
            {{ xml_helper.last_modification(url) }}
            {{ xml_helper.change_frequency(url) }}
            {{ xml_helper.priority(url) }}
        </url>
        {% if hreflang is not same as(false) and url.alternatives is not empty %}
            {% for locale, location in url.alternatives %}
                <url>
                    <loc>{{ url_helper.absolute_or_relative(location, absolute_url) }}</loc>
                    <xhtml:link rel=\"alternate\" hreflang=\"{{ language_helper.localeToCode(sylius.localeCode) }}\" href=\"{{ url_helper.absolute_or_relative(url.localization, absolute_url) }}\"/>
                    {% for localeSub, locationSub in url.alternatives %}
                        <xhtml:link rel=\"alternate\" hreflang=\"{{ language_helper.localeToCode(localeSub) }}\" href=\"{{ url_helper.absolute_or_relative(locationSub, absolute_url) }}\"/>
                    {% endfor %}
                    {{ xml_helper.last_modification(url) }}
                    {{ xml_helper.change_frequency(url) }}
                    {{ xml_helper.priority(url) }}
                </url>
            {% endfor %}
        {% endif %}
    {% endfor %}
</urlset>
", "SitemapPlugin::show.xml.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/stefandoorn/sitemap-plugin/src/Resources/views/show.xml.twig");
    }
}
