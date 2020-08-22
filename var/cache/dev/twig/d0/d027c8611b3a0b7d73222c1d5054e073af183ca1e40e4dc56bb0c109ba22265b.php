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

/* BitBagSyliusCmsPlugin:Shop/Page:index.html.twig */
class __TwigTemplate_9f1110473344a7da5ffc1175e69336e853ac9ac1ba259e79c6fa6fa8436d22dd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Shop/Page:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Shop/Page:index.html.twig"));

        // line 1
        $macros["pagination"] = $this->macros["pagination"] = $this->loadTemplate("@SyliusUi/Macro/pagination.html.twig", "BitBagSyliusCmsPlugin:Shop/Page:index.html.twig", 1)->unwrap();
        // line 2
        $macros["messages"] = $this->macros["messages"] = $this->loadTemplate("SyliusUiBundle:Macro:messages.html.twig", "BitBagSyliusCmsPlugin:Shop/Page:index.html.twig", 2)->unwrap();
        // line 4
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "BitBagSyliusCmsPlugin:Shop/Page:index.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 7, $this->source); })()), "data", [], "any", false, false, false, 7)) > 0)) {
            // line 8
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_section_show", ["code" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "get", [0 => "sectionCode"], "method", false, false, false, 8), "template" => "@BitBagSyliusCmsPlugin/Shop/Page/Index/_section.html.twig"]));
            echo "
    ";
        }
        // line 10
        echo "    <div class=\"ui stackable grid segment\">
        <div class=\"ui sixteen wide column\">

            ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 13, $this->source); })()), "data", [], "any", false, false, false, 13)) > 0)) {
            // line 14
            echo "                <div class=\"ui one column stackable grid\" id=\"bitbag-pages\">
                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 15, $this->source); })()), "data", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 16
                echo "                        <div class=\"item bitbag-page\">
                            <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_page_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\">

                                <div class=\"content\">

                                     ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["page"], "image", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "                                        <img class=\"ui left floated image\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["page"], "image", [], "any", false, false, false, 22), "path", [], "any", false, false, false, 22), ((array_key_exists("filter", $context)) ? (_twig_default_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 22, $this->source); })()), "sylius_small")) : ("sylius_small"))), "html", null, true);
                    echo "\" alt=\"\">
                                    ";
                }
                // line 24
                echo "
                                    <h3>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, false, 25), "html", null, true);
                echo "</h3>
                                    <p>
                                        ";
                // line 27
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["page"], "content", [], "any", false, false, false, 27))) > 200)) ? ((twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["page"], "content", [], "any", false, false, false, 27)), 0, 200) . "...")) : (strip_tags(twig_get_attribute($this->env, $this->source, $context["page"], "content", [], "any", false, false, false, 27)))), "html", null, true);
                echo "
                                    </p>
                                </div>
                            </a>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                </div>
                <div class=\"ui hidden divider\"></div>

                ";
            // line 36
            echo twig_call_macro($macros["pagination"], "macro_simple", [twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 36, $this->source); })()), "data", [], "any", false, false, false, 36)], 36, $context, $this->getSourceContext());
            echo "
            ";
        } else {
            // line 38
            echo "                ";
            echo twig_call_macro($macros["messages"], "macro_info", ["sylius.ui.no_results_to_display"], 38, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 40
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:Shop/Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 40,  144 => 38,  139 => 36,  134 => 33,  122 => 27,  117 => 25,  114 => 24,  108 => 22,  106 => 21,  99 => 17,  96 => 16,  92 => 15,  89 => 14,  87 => 13,  82 => 10,  76 => 8,  73 => 7,  63 => 6,  52 => 4,  50 => 2,  48 => 1,  35 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@SyliusUi/Macro/pagination.html.twig' as pagination %}
{% import 'SyliusUiBundle:Macro:messages.html.twig' as messages %}

{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
    {% if resources.data|length > 0 %}
        {{ render(path('bitbag_sylius_cms_plugin_shop_section_show', {'code' : app.request.get('sectionCode'), 'template' : '@BitBagSyliusCmsPlugin/Shop/Page/Index/_section.html.twig'})) }}
    {% endif %}
    <div class=\"ui stackable grid segment\">
        <div class=\"ui sixteen wide column\">

            {% if resources.data|length > 0 %}
                <div class=\"ui one column stackable grid\" id=\"bitbag-pages\">
                    {% for page in resources.data %}
                        <div class=\"item bitbag-page\">
                            <a href=\"{{ path('bitbag_sylius_cms_plugin_shop_page_show', {'slug' : page.slug}) }}\">

                                <div class=\"content\">

                                     {% if page.image %}
                                        <img class=\"ui left floated image\" src=\"{{ page.image.path|imagine_filter(filter|default('sylius_small')) }}\" alt=\"\">
                                    {% endif %}

                                    <h3>{{ page.name }}</h3>
                                    <p>
                                        {{ page.content|striptags|length > 200 ? page.content|striptags|slice(0, 200) ~ '...' : page.content|striptags }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    {% endfor %}
                </div>
                <div class=\"ui hidden divider\"></div>

                {{ pagination.simple(resources.data) }}
            {% else %}
                {{ messages.info('sylius.ui.no_results_to_display') }}
            {% endif %}
        </div>
    </div>
{% endblock %}
", "BitBagSyliusCmsPlugin:Shop/Page:index.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Shop/Page/index.html.twig");
    }
}
