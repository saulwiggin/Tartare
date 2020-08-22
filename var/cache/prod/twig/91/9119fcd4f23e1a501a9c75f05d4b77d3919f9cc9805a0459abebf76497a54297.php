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

/* @SyliusUi/Form/Buttons/_update.html.twig */
class __TwigTemplate_b975061cc1071607f9abe8622eb47eb5a409293467bfbf39b27c8518db2b3d36 extends \Twig\Template
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
        echo "<div class=\"ui hidden divider\"></div>
<div class=\"ui buttons\">
    <button class=\"ui labeled icon primary button\" type=\"submit\" id=\"sylius_save_changes_button\"><i class=\"save icon\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.save_changes"), "html", null, true);
        echo "</button>
    ";
        // line 4
        $this->loadTemplate("@SyliusUi/Form/Buttons/_cancel.html.twig", "@SyliusUi/Form/Buttons/_update.html.twig", 4)->display(twig_array_merge($context, ["path" => ((twig_get_attribute($this->env, $this->source, ($context["paths"] ?? null), "cancel", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["paths"] ?? null), "cancel", [], "any", false, false, false, 4), null)) : (null))]));
        // line 5
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Form/Buttons/_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusUi/Form/Buttons/_update.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Form/Buttons/_update.html.twig");
    }
}
