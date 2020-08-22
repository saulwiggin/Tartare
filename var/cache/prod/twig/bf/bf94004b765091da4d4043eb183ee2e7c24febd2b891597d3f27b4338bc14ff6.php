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

/* @SyliusAdmin/Taxon/_treeWithButtons.html.twig */
class __TwigTemplate_938f1da4fdad1582e9cfdc339d73eb3730bd58f098ecf7589c85ce321f29bac0 extends \Twig\Template
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
        $macros["buttons"] = $this->macros["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusAdmin/Taxon/_treeWithButtons.html.twig", 1)->unwrap();
        // line 2
        $macros["tree"] = $this->macros["tree"] = $this;
        // line 3
        echo "
";
        // line 56
        echo "
<div class=\"ui segment sylius-tree hidden\" data-sylius-js-tree>
    <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_create");
        echo "\" class=\"ui fluid labeled icon primary button\">
        <i class=\"plus icon\"></i>
        ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.create"), "html", null, true);
        echo "
    </a>

    <div class=\"ui hidden divider small\"></div>

    <a href=\"#\" class=\"sylius-tree__toggle-all\" data-sylius-js-tree-trigger>
        <i class=\"icon\">&bull;</i>";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.toggle_all"), "html", null, true);
        echo "
    </a>
    ";
        // line 68
        echo twig_call_macro($macros["tree"], "macro_render", [($context["taxons"] ?? null)], 68, $context, $this->getSourceContext());
        echo "
</div>
";
    }

    // line 4
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
            // line 5
            echo "    ";
            $macros["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusAdmin/Taxon/_treeWithButtons.html.twig", 5)->unwrap();
            // line 6
            echo "    ";
            $macros["tree"] = $this;
            // line 7
            echo "
    <ul>
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["taxons"] ?? null), function ($__taxon__) use ($context, $macros) { $context["taxon"] = $__taxon__; return  !(null === twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 9)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                // line 10
                echo "            <li data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 10), "html", null, true);
                echo "\" ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["taxon"], "children", [], "any", false, false, false, 10))) {
                    echo "data-sylius-js-tree-parent=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 10), "html", null, true);
                    echo "\"";
                }
                echo ">
                <div class=\"sylius-tree__item\">
                    <div class=\"sylius-tree__icon\" ";
                // line 12
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["taxon"], "children", [], "any", false, false, false, 12))) {
                    echo "data-sylius-js-tree-trigger=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 12), "html", null, true);
                    echo "\"";
                }
                echo ">
                        <i class=\"";
                // line 13
                echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["taxon"], "children", [], "any", false, false, false, 13))) ? ("caret down") : ("angle left"));
                echo " icon\"></i>
                    </div>
                    <div class=\"sylius-tree__title\">
                        <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_per_taxon_index", ["taxonId" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 16)]), "html", null, true);
                echo "\">
                            ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "name", [], "any", false, false, false, 17), "html", null, true);
                echo "
                        </a>
                    </div>
                    <div class=\"sylius-tree__action\">
                        <form action=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                echo "\" method=\"post\">
                            <div class=\"ui tiny basic icon top right pointing dropdown button sylius-tree__action__trigger\">
                            <i class=\"ellipsis horizontal icon\"></i>
                                <div class=\"menu\">
                                    <a class=\"item\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_create_for_parent", ["id" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\">
                                        <i class=\"plus icon blue\"></i>";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.create"), "html", null, true);
                echo "
                                    </a>
                                    <a class=\"item\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_update", ["id" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\">
                                        <i class=\"pencil icon grey\"></i>";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit"), "html", null, true);
                echo "
                                    </a>
                                    <button class=\"item\" type=\"submit\" style=\"width: 100%;\" data-requires-confirmation>
                                        <i class=\"icon trash red\"></i>";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "html", null, true);
                echo "
                                    </button>

                                    <div class=\"divider\"></div>

                                    <div class=\"item sylius-taxon-move-up\" data-url=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_taxon_move", ["id" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 37), "html", null, true);
                echo "\" data-position=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "position", [], "any", false, false, false, 37), "html", null, true);
                echo "\">
                                        <i class=\"arrow up icon grey\"></i>";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.move_up"), "html", null, true);
                echo "
                                    </div>
                                    <div class=\"item sylius-taxon-move-down\" data-url=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_taxon_move", ["id" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 40), "html", null, true);
                echo "\" data-position=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "position", [], "any", false, false, false, 40), "html", null, true);
                echo "\">
                                        <i class=\"arrow down icon grey\"></i>";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.move_down"), "html", null, true);
                echo "
                                    </div>

                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, $context["taxon"], "id", [], "any", false, false, false, 45)), "html", null, true);
                echo "\" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                ";
                // line 51
                echo twig_call_macro($macros["tree"], "macro_render", [twig_get_attribute($this->env, $this->source, $context["taxon"], "children", [], "any", false, false, false, 51)], 51, $context, $this->getSourceContext());
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "    </ul>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Taxon/_treeWithButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 54,  209 => 51,  200 => 45,  193 => 41,  185 => 40,  180 => 38,  172 => 37,  164 => 32,  158 => 29,  154 => 28,  149 => 26,  145 => 25,  138 => 21,  131 => 17,  127 => 16,  121 => 13,  113 => 12,  101 => 10,  97 => 9,  93 => 7,  90 => 6,  87 => 5,  74 => 4,  67 => 68,  62 => 66,  53 => 60,  48 => 58,  44 => 56,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Taxon/_treeWithButtons.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/_treeWithButtons.html.twig");
    }
}
