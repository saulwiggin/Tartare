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

/* @BitBagSyliusCmsPlugin/Grid/Action/import.html.twig */
class __TwigTemplate_ae62e7a71a3b8297d38380158cceecde3cc8c1c3cabe745a96503d27690dc41b extends \Twig\Template
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_admin_import_data", ["resourceName" => twig_get_attribute($this->env, $this->source,         // line 3
($context["options"] ?? null), "resourceCode", [], "any", false, false, false, 3)]));
        // line 4
        echo "
";
    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Grid/Action/import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  38 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@BitBagSyliusCmsPlugin/Grid/Action/import.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Grid/Action/import.html.twig");
    }
}
