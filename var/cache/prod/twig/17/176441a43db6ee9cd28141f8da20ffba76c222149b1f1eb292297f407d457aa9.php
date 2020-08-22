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

/* @SyliusUi/Macro/pagination.html.twig */
class __TwigTemplate_aec2b23b5704875932574bce0e517c484624b55112b354b025f1716e1a5dedd0 extends \Twig\Template
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
        // line 6
        echo "
";
    }

    // line 1
    public function macro_simple($__paginator__ = null, $__options__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "paginator" => $__paginator__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "haveToPaginate", [], "method", false, false, false, 2)) {
                // line 3
                echo "        ";
                echo $this->extensions['WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension']->renderPagerfanta(($context["paginator"] ?? null), "semantic_ui_translated", ((array_key_exists("options", $context)) ? (_twig_default_filter(($context["options"] ?? null), [])) : ([])));
                echo "
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 7
    public function macro_perPage($__paginator__ = null, $__paginationLimits__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "paginator" => $__paginator__,
            "paginationLimits" => $__paginationLimits__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 8
            echo "    <div class=\"ui simple fluid dropdown item\">
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "maxPerPage", [], "any", false, false, false, 9), "html", null, true);
            echo "
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["paginationLimits"] ?? null), function ($__limit__) use ($context, $macros) { $context["limit"] = $__limit__; return ($context["limit"] != twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "maxPerPage", [], "any", false, false, false, 12)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
                // line 13
                echo "            ";
                $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 13), "attributes", [], "any", false, false, false, 13), "get", [0 => "_route"], "method", false, false, false, 13), twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 13), "attributes", [], "any", false, false, false, 13), "get", [0 => "_route_params"], "method", false, false, false, 13), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 13), "query", [], "any", false, false, false, 13)), ["limit" => $context["limit"]]));
                // line 14
                echo "            <a class=\"item\" href=\"";
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 16,  104 => 14,  101 => 13,  97 => 12,  89 => 9,  86 => 8,  72 => 7,  59 => 3,  56 => 2,  42 => 1,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusUi/Macro/pagination.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/pagination.html.twig");
    }
}
