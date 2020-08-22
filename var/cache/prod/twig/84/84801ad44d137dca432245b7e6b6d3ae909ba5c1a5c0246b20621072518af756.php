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
class __TwigTemplate_621acfb7a581249586c3ca8a3a4565d9977ae600f3de1124ee022abbe0eb4dab extends \Twig\Template
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
        echo "<h3 class=\"ui header bitbag-question\">
    ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frequentlyAskedQuestion"] ?? null), "question", [], "any", false, false, false, 2), "html", null, true);
        echo "
</h3>
<p>
    ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["frequentlyAskedQuestion"] ?? null), "answer", [], "any", false, false, false, 5), "html", null, true);
        echo "
</p>
";
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
        return array (  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@BitBagSyliusCmsPlugin/Shop/FrequentlyAskedQuestion/Index/_show.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Shop/FrequentlyAskedQuestion/Index/_show.html.twig");
    }
}
