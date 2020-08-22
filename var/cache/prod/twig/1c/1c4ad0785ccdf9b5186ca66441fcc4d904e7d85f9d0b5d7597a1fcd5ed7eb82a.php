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

/* SyliusShopBundle:Taxon:_horizontalMenu.html.twig */
class __TwigTemplate_0b58869678e728f512b7efbb59fe1eb5b1721c2a9cfca3c0a31ff8c674f3c502 extends \Twig\Template
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
        // line 18
        echo "
";
        // line 19
        $macros["macros"] = $this->macros["macros"] = $this;
        // line 20
        echo "
";
        // line 21
        if ((twig_length_filter($this->env, ($context["taxons"] ?? null)) > 0)) {
            // line 22
            echo "<div class=\"ui large stackable menu\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["menu"]);
            echo ">
    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["taxons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                // line 24
                echo "        ";
                echo twig_call_macro($macros["macros"], "macro_item", [$context["taxon"]], 24, $context, $this->getSourceContext());
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "</div>
";
        }
    }

    // line 1
    public function macro_item($__taxon__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "taxon" => $__taxon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    ";
            $macros["macros"] = $this;
            // line 3
            echo "
    ";
            // line 4
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "children", [], "any", false, false, false, 4)) > 0)) {
                // line 5
                echo "        <div class=\"ui dropdown item\" ";
                echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["menu-item"]);
                echo ">
            <span class=\"text\">";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
                echo "</span>
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
                ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "children", [], "any", false, false, false, 9));
                foreach ($context['_seq'] as $context["_key"] => $context["childTaxon"]) {
                    // line 10
                    echo "                    ";
                    echo twig_call_macro($macros["macros"], "macro_item", [$context["childTaxon"]], 10, $context, $this->getSourceContext());
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childTaxon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "            </div>
        </div>
    ";
            } else {
                // line 15
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", ["slug" => twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "slug", [], "any", false, false, false, 15), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "translation", [], "any", false, false, false, 15), "locale", [], "any", false, false, false, 15)]), "html", null, true);
                echo "\" class=\"item\" ";
                echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["menu-item"]);
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["taxon"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
                echo "</a>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Taxon:_horizontalMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 15,  116 => 12,  107 => 10,  103 => 9,  97 => 6,  92 => 5,  90 => 4,  87 => 3,  84 => 2,  71 => 1,  65 => 26,  56 => 24,  52 => 23,  47 => 22,  45 => 21,  42 => 20,  40 => 19,  37 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Taxon:_horizontalMenu.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Taxon/_horizontalMenu.html.twig");
    }
}
