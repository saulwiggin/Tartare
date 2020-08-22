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

/* @BitBagSyliusCmsPlugin/Shop/FrequentlyAskedQuestion/Index/_show.html.twig */
class __TwigTemplate_284037eac225486e49a3dafedb84cb29806aa2195c250bab5f77159b73a8b4bb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BitBagSyliusCmsPlugin/Shop/FrequentlyAskedQuestion/Index/_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BitBagSyliusCmsPlugin/Shop/FrequentlyAskedQuestion/Index/_show.html.twig"));

        // line 1
        echo "<h3 class=\"ui header bitbag-question\">
    ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["frequentlyAskedQuestion"]) || array_key_exists("frequentlyAskedQuestion", $context) ? $context["frequentlyAskedQuestion"] : (function () { throw new RuntimeError('Variable "frequentlyAskedQuestion" does not exist.', 2, $this->source); })()), "question", [], "any", false, false, false, 2), "html", null, true);
        echo "
</h3>
<p>
    ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["frequentlyAskedQuestion"]) || array_key_exists("frequentlyAskedQuestion", $context) ? $context["frequentlyAskedQuestion"] : (function () { throw new RuntimeError('Variable "frequentlyAskedQuestion" does not exist.', 5, $this->source); })()), "answer", [], "any", false, false, false, 5), "html", null, true);
        echo "
</p>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Shop/FrequentlyAskedQuestion/Index/_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3 class=\"ui header bitbag-question\">
    {{ frequentlyAskedQuestion.question }}
</h3>
<p>
    {{ frequentlyAskedQuestion.answer }}
</p>
", "@BitBagSyliusCmsPlugin/Shop/FrequentlyAskedQuestion/Index/_show.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Shop/FrequentlyAskedQuestion/Index/_show.html.twig");
    }
}
