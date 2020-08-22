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

/* @SyliusAdmin/Common/_channel.html.twig */
class __TwigTemplate_e4d2f62944cc8b045e1cdc631545ca4d689d11c9eb5e756d3f91792baead3afb extends \Twig\Template
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
        if (array_key_exists("channel", $context)) {
            // line 2
            echo "    <div class=\"channel\">
        <span class=\"ui medium empty circular label channel__item\" style=\"background-color: ";
            // line 3
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "color", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "color", [], "any", false, false, false, 3), "#000")) : ("#000")), "html", null, true);
            echo "\"></span>

        <span class=\"channel__item\">
            ";
            // line 6
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "name", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "name", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "code", [], "any", false, false, false, 6))) : (twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "code", [], "any", false, false, false, 6))), "html", null, true);
            echo "
        </span>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Common/_channel.html.twig";
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
        return new Source("", "@SyliusAdmin/Common/_channel.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Common/_channel.html.twig");
    }
}
