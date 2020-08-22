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

/* @SyliusAdmin/Product/_mainImage.html.twig */
class __TwigTemplate_b459a672db8740c45700e86ca212534c6ce5017dd662844dc0b39c3cd593ce54 extends \Twig\Template
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "imagesByType", [0 => "thumbnail"], "method", false, false, false, 1))) {
            // line 2
            echo "    ";
            $context["path"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "imagesByType", [0 => "thumbnail"], "method", false, false, false, 2), "first", [], "any", false, false, false, 2), "path", [], "any", false, false, false, 2), ((array_key_exists("filter", $context)) ? (_twig_default_filter(($context["filter"] ?? null), "sylius_admin_product_thumbnail")) : ("sylius_admin_product_thumbnail")));
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3
($context["product"] ?? null), "images", [], "any", false, false, false, 3), "first", [], "any", false, false, false, 3)) {
            // line 4
            echo "    ";
            $context["path"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", [], "any", false, false, false, 4), "first", [], "any", false, false, false, 4), "path", [], "any", false, false, false, 4), ((array_key_exists("filter", $context)) ? (_twig_default_filter(($context["filter"] ?? null), "sylius_admin_product_thumbnail")) : ("sylius_admin_product_thumbnail")));
        } else {
            // line 6
            echo "    ";
            $context["path"] = "//placehold.it/50x50";
        }
        // line 8
        echo "
<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "\" alt=\"\" class=\"ui bordered image\" />
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/_mainImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  52 => 8,  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Product/_mainImage.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/_mainImage.html.twig");
    }
}
