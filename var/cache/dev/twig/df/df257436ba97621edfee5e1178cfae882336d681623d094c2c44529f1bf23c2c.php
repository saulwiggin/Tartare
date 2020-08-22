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

/* SyliusAdminBundle:Layout:_support.html.twig */
class __TwigTemplate_be2bfa55c70ed4a613033f194f9681eb82d18d6eae0ebe5905a1b565bead148f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Layout:_support.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Layout:_support.html.twig"));

        // line 1
        echo "<div class=\"ui floated simple dropdown item\">
    <i class=\"life ring icon\"></i>
    <span>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.get_support"), "html", null, true);
        echo "</span>
    <div class=\"menu\">
        <a href=\"https://docs.sylius.com\" class=\"item\" target=\"_blank\">
            <i class=\"book icon\"></i>
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.documentation"), "html", null, true);
        echo "
        </a>
        <a href=\"https://sylius.com/slack\" class=\"item\" target=\"_blank\">
            <i class=\"slack icon\"></i>
            ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.join_slack"), "html", null, true);
        echo "
        </a>
        <a href=\"https://forum.sylius.com\" class=\"item\" target=\"_blank\">
            <i class=\"discourse icon\"></i>
            ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.join_forum"), "html", null, true);
        echo "
        </a>
        <a href=\"https://github.com/Sylius/Sylius/issues\" class=\"item\" target=\"_blank\">
            <i class=\"github icon\"></i>
            ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.issue_tracker"), "html", null, true);
        echo "
        </a>
        <a href=\"https://www.youtube.com/channel/UCtZI2yUM2bZwbVlGpQJ9VCQ\" class=\"item\" target=\"_blank\">
            <i class=\"youtube icon\"></i>
            ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.youtube"), "html", null, true);
        echo "
        </a>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Layout:_support.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  75 => 19,  68 => 15,  61 => 11,  54 => 7,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ui floated simple dropdown item\">
    <i class=\"life ring icon\"></i>
    <span>{{ 'sylius.ui.get_support'|trans }}</span>
    <div class=\"menu\">
        <a href=\"https://docs.sylius.com\" class=\"item\" target=\"_blank\">
            <i class=\"book icon\"></i>
            {{ 'sylius.ui.documentation'|trans }}
        </a>
        <a href=\"https://sylius.com/slack\" class=\"item\" target=\"_blank\">
            <i class=\"slack icon\"></i>
            {{ 'sylius.ui.join_slack'|trans }}
        </a>
        <a href=\"https://forum.sylius.com\" class=\"item\" target=\"_blank\">
            <i class=\"discourse icon\"></i>
            {{ 'sylius.ui.join_forum'|trans }}
        </a>
        <a href=\"https://github.com/Sylius/Sylius/issues\" class=\"item\" target=\"_blank\">
            <i class=\"github icon\"></i>
            {{ 'sylius.ui.issue_tracker'|trans }}
        </a>
        <a href=\"https://www.youtube.com/channel/UCtZI2yUM2bZwbVlGpQJ9VCQ\" class=\"item\" target=\"_blank\">
            <i class=\"youtube icon\"></i>
            {{ 'sylius.ui.youtube'|trans }}
        </a>
    </div>
</div>
", "SyliusAdminBundle:Layout:_support.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Layout/_support.html.twig");
    }
}
