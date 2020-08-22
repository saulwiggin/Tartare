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

/* @SitemapPlugin/show.xml.twig */
class __TwigTemplate_469ce56b84e1e737e18915145e695e7e6fd9e89b31e4f39b43dc3b4e455a1306 extends \Twig\Template
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
        $macros["url_helper"] = $this->macros["url_helper"] = $this->loadTemplate("SitemapPlugin::Macro/url.html.twig", "@SitemapPlugin/show.xml.twig", 1)->unwrap();
        // line 2
        $macros["language_helper"] = $this->macros["language_helper"] = $this->loadTemplate("SitemapPlugin::Macro/language.html.twig", "@SitemapPlugin/show.xml.twig", 2)->unwrap();
        // line 3
        $macros["xml_helper"] = $this->macros["xml_helper"] = $this->loadTemplate("SitemapPlugin::Macro/xml.html.twig", "@SitemapPlugin/show.xml.twig", 3)->unwrap();
        // line 4
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["url_set"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 7
            echo "        <url>
            <loc>";
            // line 8
            echo twig_call_macro($macros["url_helper"], "macro_absolute_or_relative", [twig_get_attribute($this->env, $this->source, $context["url"], "localization", [], "any", false, false, false, 8), ($context["absolute_url"] ?? null)], 8, $context, $this->getSourceContext());
            echo "</loc>
            ";
            // line 9
            if (( !(($context["hreflang"] ?? null) === false) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["url"], "alternatives", [], "any", false, false, false, 9)))) {
                // line 10
                echo "                <xhtml:link rel=\"alternate\" hreflang=\"";
                echo twig_call_macro($macros["language_helper"], "macro_localeToCode", [twig_get_attribute($this->env, $this->source, ($context["sylius"] ?? null), "localeCode", [], "any", false, false, false, 10)], 10, $context, $this->getSourceContext());
                echo "\" href=\"";
                echo twig_call_macro($macros["url_helper"], "macro_absolute_or_relative", [twig_get_attribute($this->env, $this->source, $context["url"], "localization", [], "any", false, false, false, 10), ($context["absolute_url"] ?? null)], 10, $context, $this->getSourceContext());
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
                    echo twig_call_macro($macros["url_helper"], "macro_absolute_or_relative", [$context["location"], ($context["absolute_url"] ?? null)], 12, $context, $this->getSourceContext());
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
            if (( !(($context["hreflang"] ?? null) === false) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["url"], "alternatives", [], "any", false, false, false, 19)))) {
                // line 20
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["url"], "alternatives", [], "any", false, false, false, 20));
                foreach ($context['_seq'] as $context["locale"] => $context["location"]) {
                    // line 21
                    echo "                <url>
                    <loc>";
                    // line 22
                    echo twig_call_macro($macros["url_helper"], "macro_absolute_or_relative", [$context["location"], ($context["absolute_url"] ?? null)], 22, $context, $this->getSourceContext());
                    echo "</loc>
                    <xhtml:link rel=\"alternate\" hreflang=\"";
                    // line 23
                    echo twig_call_macro($macros["language_helper"], "macro_localeToCode", [twig_get_attribute($this->env, $this->source, ($context["sylius"] ?? null), "localeCode", [], "any", false, false, false, 23)], 23, $context, $this->getSourceContext());
                    echo "\" href=\"";
                    echo twig_call_macro($macros["url_helper"], "macro_absolute_or_relative", [twig_get_attribute($this->env, $this->source, $context["url"], "localization", [], "any", false, false, false, 23), ($context["absolute_url"] ?? null)], 23, $context, $this->getSourceContext());
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
                        echo twig_call_macro($macros["url_helper"], "macro_absolute_or_relative", [$context["locationSub"], ($context["absolute_url"] ?? null)], 25, $context, $this->getSourceContext());
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
    }

    public function getTemplateName()
    {
        return "@SitemapPlugin/show.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 34,  155 => 33,  152 => 32,  143 => 29,  139 => 28,  134 => 27,  123 => 25,  119 => 24,  113 => 23,  109 => 22,  106 => 21,  101 => 20,  99 => 19,  94 => 17,  90 => 16,  85 => 15,  82 => 14,  71 => 12,  67 => 11,  60 => 10,  58 => 9,  54 => 8,  51 => 7,  47 => 6,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SitemapPlugin/show.xml.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/stefandoorn/sitemap-plugin/src/Resources/views/show.xml.twig");
    }
}
