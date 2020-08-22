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

/* SyliusResourceBundle:Twig:sorting.html.twig */
class __TwigTemplate_b9a69688199d65dbe6b3ea60c6099252176a7ac16c5ee0a1d1b729fa5ecaf47a extends \Twig\Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 2
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "
    ";
        // line 3
        if (($context["icon"] ?? null)) {
            // line 4
            if ((($context["currentOrder"] ?? null) == "desc")) {
                // line 5
                echo "<i class=\"glyphicon glyphicon-chevron-down\"></i>";
            } else {
                // line 7
                echo "<i class=\"glyphicon glyphicon-chevron-up\"></i>";
            }
        }
        // line 10
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle:Twig:sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  53 => 7,  50 => 5,  48 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusResourceBundle:Twig:sorting.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/resource-bundle/src/Bundle/Resources/views/Twig/sorting.html.twig");
    }
}
