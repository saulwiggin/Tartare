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

/* SyliusAdminBundle:Product/Show:_associations.html.twig */
class __TwigTemplate_f7c80f6e4acf945e654900f001a8cdac0d0216b74d47737cad73f2fb1c91559a extends \Twig\Template
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
        echo "<div id=\"associations\">
    <h4 class=\"ui top attached large header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.associations"), "html", null, true);
        echo "</h4>
    <div class=\"ui attached segment\">
        ";
        // line 4
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "associations", [], "any", false, false, false, 4))) {
            // line 5
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "associations", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
                // line 6
                echo "                <strong class=\"gray text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["association"], "type", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "html", null, true);
                echo ":</strong>
                <ul class=\"ui bulleted list\">
                    ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["association"], "associatedProducts", [], "any", false, false, false, 8));
                foreach ($context['_seq'] as $context["_key"] => $context["associatedProduct"]) {
                    // line 9
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["associatedProduct"], "name", [], "any", false, false, false, 9), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['associatedProduct'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "                </ul>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        ";
        } else {
            // line 14
            echo "            <span class=\"ui teal label\"><i class=\"remove icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_associations_to_display"), "html", null, true);
            echo "</span>
        ";
        }
        // line 16
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Show:_associations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  81 => 14,  78 => 13,  71 => 11,  62 => 9,  58 => 8,  52 => 6,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Product/Show:_associations.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_associations.html.twig");
    }
}
