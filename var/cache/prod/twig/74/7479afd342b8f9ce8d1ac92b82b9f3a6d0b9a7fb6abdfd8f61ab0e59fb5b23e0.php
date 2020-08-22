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

/* SyliusAdminBundle:Promotion/Grid/Field:usedWithUsageLimit.html.twig */
class __TwigTemplate_adbc1b0c927ed67eaeb7b66efd06cf1ed2268450c604613a617f7d0ccaa7e25c extends \Twig\Template
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
        echo "<div class=\"ui red label\">
    ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "used", [], "any", false, false, false, 2), "html", null, true);
        echo "
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "usageLimit", [], "any", false, false, false, 3)) {
            // line 4
            echo "            /";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "usageLimit", [], "any", false, false, false, 4), "html", null, true);
            echo "
    ";
        }
        // line 6
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Promotion/Grid/Field:usedWithUsageLimit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Promotion/Grid/Field:usedWithUsageLimit.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Promotion/Grid/Field/usedWithUsageLimit.html.twig");
    }
}
