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

/* @BitBagSyliusCmsPlugin/Grid/Field/page_image.html.twig */
class __TwigTemplate_ff8ec4006d631a7153b52eb84e6d27dd035b12254bffab103a08ecaab8695ffb extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "translation", [], "any", false, false, false, 1), "image", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "translation", [], "any", false, false, false, 2), "image", [], "any", false, false, false, 2), "path", [], "any", false, false, false, 2), ((array_key_exists("filter", $context)) ? (_twig_default_filter(($context["filter"] ?? null), "sylius_admin_product_thumbnail")) : ("sylius_admin_product_thumbnail"))), "html", null, true);
            echo "\" class=\"ui bordered image\"/>
";
        } else {
            // line 4
            echo "    <img src=\"data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==\" class=\"ui bordered image\"/>
";
        }
    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Grid/Field/page_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@BitBagSyliusCmsPlugin/Grid/Field/page_image.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Grid/Field/page_image.html.twig");
    }
}
