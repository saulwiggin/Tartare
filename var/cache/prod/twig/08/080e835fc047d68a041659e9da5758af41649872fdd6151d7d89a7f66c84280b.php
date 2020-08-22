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

/* @SyliusAdmin/Customer/Show/Details/_contact.html.twig */
class __TwigTemplate_8650817fd9ab5ab9502515c35c3a8e21ce92a2f0402048d313f9f9016ae70f29 extends \Twig\Template
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
        echo "<div class=\"extra content\">
    <a href=\"mailto:";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "email", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
        <i class=\"envelope icon\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "email", [], "any", false, false, false, 3), "html", null, true);
        echo "
    </a>
    ";
        // line 5
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "phoneNumber", [], "any", false, false, false, 5))) {
            // line 6
            echo "        <div id=\"phone-number\">
            <i class=\"phone icon\"></i> ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "phoneNumber", [], "any", false, false, false, 7), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 10
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Customer/Show/Details/_contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  54 => 7,  51 => 6,  49 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Customer/Show/Details/_contact.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/Details/_contact.html.twig");
    }
}
