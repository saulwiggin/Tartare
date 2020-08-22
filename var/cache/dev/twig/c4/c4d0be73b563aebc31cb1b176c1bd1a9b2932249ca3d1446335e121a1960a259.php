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

/* BitBagSyliusCmsPlugin::layout.html.twig */
class __TwigTemplate_7849e88949e9a5b461def76efbe61c81c5dbf38d85fe77111bf7d641bfe887a1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin::layout.html.twig"));

        $this->parent = $this->loadTemplate("@SyliusAdmin/layout.html.twig", "BitBagSyliusCmsPlugin::layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 6
        $this->loadTemplate("SyliusUiBundle::_stylesheets.html.twig", "BitBagSyliusCmsPlugin::layout.html.twig", 6)->display(twig_array_merge($context, ["path" => "bundles/bitbagsyliuscmsplugin/css/style.css"]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 13
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "BitBagSyliusCmsPlugin::layout.html.twig", 13)->display(twig_array_merge($context, ["path" => "bundles/bitbagsyliuscmsplugin/js/bitbag-upload-csv.js"]));
        // line 14
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "BitBagSyliusCmsPlugin::layout.html.twig", 14)->display(twig_array_merge($context, ["path" => "bundles/bitbagsyliuscmsplugin/js/bitbag-page-slug.js"]));
        // line 15
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "BitBagSyliusCmsPlugin::layout.html.twig", 15)->display(twig_array_merge($context, ["path" => "bundles/bitbagsyliuscmsplugin/js/bitbag-block-image-preview.js"]));
        // line 16
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "BitBagSyliusCmsPlugin::layout.html.twig", 16)->display(twig_array_merge($context, ["path" => "bundles/bitbagsyliuscmsplugin/js/bitbag-cms-resource-preview.js"]));
        // line 17
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "BitBagSyliusCmsPlugin::layout.html.twig", 17)->display(twig_array_merge($context, ["path" => "bundles/bitbagsyliuscmsplugin/js/bitbag-block-image-preview.js"]));
        // line 18
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "BitBagSyliusCmsPlugin::layout.html.twig", 18)->display(twig_array_merge($context, ["path" => "bundles/bitbagsyliuscmsplugin/js/bitbag-cms-resource-preview.js"]));
        // line 19
        echo "
    ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), [((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new RuntimeError('Variable "event_prefix" does not exist.', 20, $this->source); })()) . ".javascripts")]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 20,  118 => 19,  115 => 18,  112 => 17,  109 => 16,  106 => 15,  103 => 14,  101 => 13,  95 => 11,  85 => 10,  75 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@SyliusAdmin/layout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}

    {% include 'SyliusUiBundle::_stylesheets.html.twig' with {'path': 'bundles/bitbagsyliuscmsplugin/css/style.css'} %}
{% endblock %}


{% block javascripts %}
    {{ parent() }}

    {% include 'SyliusUiBundle::_javascripts.html.twig' with {'path': 'bundles/bitbagsyliuscmsplugin/js/bitbag-upload-csv.js'} %}
    {% include 'SyliusUiBundle::_javascripts.html.twig' with {'path': 'bundles/bitbagsyliuscmsplugin/js/bitbag-page-slug.js'} %}
    {% include 'SyliusUiBundle::_javascripts.html.twig' with {'path': 'bundles/bitbagsyliuscmsplugin/js/bitbag-block-image-preview.js'} %}
    {% include 'SyliusUiBundle::_javascripts.html.twig' with {'path': 'bundles/bitbagsyliuscmsplugin/js/bitbag-cms-resource-preview.js'} %}
    {% include 'SyliusUiBundle::_javascripts.html.twig' with {'path': 'bundles/bitbagsyliuscmsplugin/js/bitbag-block-image-preview.js'} %}
    {% include 'SyliusUiBundle::_javascripts.html.twig' with {'path': 'bundles/bitbagsyliuscmsplugin/js/bitbag-cms-resource-preview.js'} %}

    {{ sonata_block_render_event(event_prefix ~ '.javascripts') }}
{% endblock %}
", "BitBagSyliusCmsPlugin::layout.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/layout.html.twig");
    }
}
