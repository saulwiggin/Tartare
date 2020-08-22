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

/* SyliusAdminBundle:ProductVariant/Grid/Field:inventory.html.twig */
class __TwigTemplate_62aaf569844f5d426b5bf97c6d38f3bc4dacf104853d524e6cc8b6e7a5de0984 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "isTracked", [], "any", false, false, false, 1)) {
            // line 2
            echo "<div class=\"ui ";
            echo (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "onHand", [], "any", false, false, false, 2) > 0)) ? ("green") : ("red"));
            echo " icon label\">
    <i class=\"cube icon\"></i>
    <span class=\"onHand\" data-product-variant-id=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "onHand", [], "any", false, false, false, 4), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.available_on_hand"), "html", null, true);
            echo "
    ";
            // line 5
            if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "onHold", [], "any", false, false, false, 5) > 0)) {
                // line 6
                echo "    <div class=\"detail\">
        <span class=\"onHold\" data-product-variant-id=\"";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "onHold", [], "any", false, false, false, 7), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.reserved"), "html", null, true);
                echo "
    </div>
    ";
            }
            // line 10
            echo "</div>
";
        } else {
            // line 12
            echo "    <span class=\"ui red label\">
        <i class=\"remove icon\"></i>
        ";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.not_tracked"), "html", null, true);
            echo "
    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Grid/Field:inventory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  72 => 12,  68 => 10,  58 => 7,  55 => 6,  53 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:ProductVariant/Grid/Field:inventory.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Grid/Field/inventory.html.twig");
    }
}
