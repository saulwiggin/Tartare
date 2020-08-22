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

/* SyliusAdminBundle:Product:_position.html.twig */
class __TwigTemplate_27c840ae291a5b43c312b155e3fc57b69b9838f952ec86b0377a8f0de86ec121 extends \Twig\Template
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
        if (($context["taxonId"] ?? null)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "productTaxons", [], "any", false, false, false, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["productTaxon"]) {
                // line 3
                echo "        ";
                if ((($context["taxonId"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productTaxon"], "taxon", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3))) {
                    // line 4
                    echo "            <div style=\"width: 100%; text-align: center;\">
                <div class=\"ui input position\" style=\"width: 50px;\">
                    <input type=\"text\" value=\"";
                    // line 6
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productTaxon"], "position", [], "any", false, false, false, 6), "html", null, true);
                    echo "\" name=\"productTaxons[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productTaxon"], "id", [], "any", false, false, false, 6), "html", null, true);
                    echo "]\" form=\"sylius-update-product-taxons\" class=\"sylius-product-taxon-position\" style=\"text-align: center;\" />
                </div>
            </div>
        ";
                }
                // line 10
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productTaxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:_position.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  51 => 6,  47 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Product:_position.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/_position.html.twig");
    }
}
