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

/* @SyliusUi/Form/Buttons/_create.html.twig */
class __TwigTemplate_b16f7c3373b0ceac49e88eb51e29b7ca36a699c80dd9e3388dcc29a12070328f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Form/Buttons/_create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Form/Buttons/_create.html.twig"));

        // line 1
        echo "<div class=\"ui hidden divider\"></div>
<div class=\"ui buttons\">
    <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"plus icon\"></i>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.create"), "html", null, true);
        echo "</button>
    ";
        // line 4
        $this->loadTemplate("@SyliusUi/Form/Buttons/_cancel.html.twig", "@SyliusUi/Form/Buttons/_create.html.twig", 4)->display(twig_array_merge($context, ["path" => ((twig_get_attribute($this->env, $this->source, ($context["paths"] ?? null), "cancel", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["paths"] ?? null), "cancel", [], "any", false, false, false, 4), null)) : (null))]));
        // line 5
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Form/Buttons/_create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ui hidden divider\"></div>
<div class=\"ui buttons\">
    <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"plus icon\"></i>{{- 'sylius.ui.create'|trans -}}</button>
    {% include '@SyliusUi/Form/Buttons/_cancel.html.twig' with {'path': paths.cancel|default(null)} %}
</div>
", "@SyliusUi/Form/Buttons/_create.html.twig", "/Users/drsilaswiggin/dev/e-commerce/demo/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Form/Buttons/_create.html.twig");
    }
}
