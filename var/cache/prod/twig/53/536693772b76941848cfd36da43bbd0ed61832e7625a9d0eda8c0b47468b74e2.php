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

/* SyliusAdminBundle:Taxon:_treeWithoutButtons.html.twig */
class __TwigTemplate_7147a7811153111892eb168f7d62ccc3cd627c5090e623e207137c0f9c7e49ab extends \Twig\Template
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
        $macros["tree"] = $this->macros["tree"] = $this;
        // line 2
        echo "
";
        // line 24
        echo "
<div class=\"ui vertical fluid labeled icon buttons\">
    <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_index");
        echo "\" class=\"ui primary button\">
        <i class=\"search icon\"></i>
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.browse_all_products"), "html", null, true);
        echo "
    </a>

    <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_create");
        echo "\" class=\"ui button\">
        <i class=\"sitemap icon\"></i>
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.manage_taxons"), "html", null, true);
        echo "
    </a>
</div>

<div class=\"ui segment sylius-tree hidden\" data-sylius-js-tree>
    <a href=\"#\" class=\"sylius-tree__toggle-all\" data-sylius-js-tree-trigger>
        <i class=\"icon\">&bull;</i>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.toggle_all"), "html", null, true);
        echo "
    </a>
    ";
        // line 41
        echo twig_call_macro($macros["tree"], "macro_render", [($context["taxons"] ?? null)], 41, $context, $this->getSourceContext());
        echo "
</div>
";
    }

    // line 3
    public function macro_render($__taxons__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "taxons" => $__taxons__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 4
            echo "    ";
            $macros["tree"] = $this;
            // line 5
            echo "
    <ul>
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["taxons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                // line 8
                echo "            <li data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 8), "html", null, true);
                echo "\" ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["taxon"], "children", [], "any", false, false, false, 8))) {
                    echo "data-sylius-js-tree-parent=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 8), "html", null, true);
                    echo "\"";
                }
                echo ">
                <div class=\"sylius-tree__item\">
                    <div class=\"sylius-tree__icon\" ";
                // line 10
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["taxon"], "children", [], "any", false, false, false, 10))) {
                    echo "data-sylius-js-tree-trigger=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 10), "html", null, true);
                    echo "\"";
                }
                echo ">
                        <i class=\"";
                // line 11
                echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["taxon"], "children", [], "any", false, false, false, 11))) ? ("caret down") : ("angle left"));
                echo " icon\"></i>
                    </div>
                    <div class=\"sylius-tree__title\">
                        <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_per_taxon_index", ["taxonId" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 14)]), "html", null, true);
                echo "\">
                            ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "name", [], "any", false, false, false, 15), "html", null, true);
                echo "
                        </a>
                    </div>
                </div>
                ";
                // line 19
                echo twig_call_macro($macros["tree"], "macro_render", [twig_get_attribute($this->env, $this->source, $context["taxon"], "children", [], "any", false, false, false, 19)], 19, $context, $this->getSourceContext());
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    </ul>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Taxon:_treeWithoutButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 22,  144 => 19,  137 => 15,  133 => 14,  127 => 11,  119 => 10,  107 => 8,  103 => 7,  99 => 5,  96 => 4,  83 => 3,  76 => 41,  71 => 39,  62 => 33,  57 => 31,  51 => 28,  46 => 26,  42 => 24,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Taxon:_treeWithoutButtons.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/_treeWithoutButtons.html.twig");
    }
}
