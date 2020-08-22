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

/* SyliusAdminBundle:Order/Show:_notes.html.twig */
class __TwigTemplate_5a3c354fb4cae3718d7fa03af88c5dd79425fed9dbe7d7ee8c63be692455e674 extends \Twig\Template
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
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "notes", [], "any", false, false, false, 1))) {
            // line 2
            echo "    <h4 class=\"ui top attached styled header\">
        ";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.notes"), "html", null, true);
            echo "
    </h4>
    <div class=\"ui attached segment\" id=\"sylius-order-notes\">
        ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "notes", [], "any", false, false, false, 6), "html", null, true);
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_notes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Order/Show:_notes.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_notes.html.twig");
    }
}
