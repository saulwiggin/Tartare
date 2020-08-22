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

/* SyliusAdminBundle:Country/Grid/Field:name.html.twig */
class __TwigTemplate_2187fa05c66ef378ede8d728d583a0a8e40d19da6ea31ec4a56c809f1438aa70 extends \Twig\Template
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
        $macros["flags"] = $this->macros["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusAdminBundle:Country/Grid/Field:name.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        echo twig_call_macro($macros["flags"], "macro_fromCountryCode", [twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "code", [], "any", false, false, false, 3)], 3, $context, $this->getSourceContext());
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Sylius\Bundle\AddressingBundle\Twig\CountryNameExtension']->translateCountryIsoCode(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "code", [], "any", false, false, false, 3)), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Country/Grid/Field:name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Country/Grid/Field:name.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Country/Grid/Field/name.html.twig");
    }
}
