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

/* @SyliusAdmin/Customer/Show/Address/_content.html.twig */
class __TwigTemplate_4289348a2905af68b76a6b7aee0c0dbf34e1af1b8f90476437d28eb81727a2bf extends \Twig\Template
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
        echo "<div class=\"ui attached segment\" id=\"default-address\">
    ";
        // line 2
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "defaultAddress", [], "any", false, false, false, 2))) {
            // line 3
            echo "        ";
            $this->loadTemplate("@SyliusAdmin/Common/_address.html.twig", "@SyliusAdmin/Customer/Show/Address/_content.html.twig", 3)->display(twig_array_merge($context, ["address" => twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "defaultAddress", [], "any", false, false, false, 3)]));
            // line 4
            echo "    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.this_customer_does_not_have_a_default_address"), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Customer/Show/Address/_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  48 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Customer/Show/Address/_content.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/Address/_content.html.twig");
    }
}
