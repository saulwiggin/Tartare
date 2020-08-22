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

/* @SyliusShop/Product/Index/_pagination.html.twig */
class __TwigTemplate_241d5cfa1cd26ff9c4e69d4213d38d24cc65986ca86919e6b521ba1255c36548 extends \Twig\Template
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
        $context["paginationLimits"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "definition", [], "any", false, false, false, 1), "limits", [], "any", false, false, false, 1);
        // line 2
        echo "
<div class=\"ui right floated small header\">
    <div class=\"content\">
        <div class=\"ui inline dropdown sylius-paginate\">
            ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", [], "any", false, false, false, 6), "maxPerPage", [], "any", false, false, false, 6), "html", null, true);
        echo "
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["paginationLimits"] ?? null), function ($__limit__) use ($context, $macros) { $context["limit"] = $__limit__; return ($context["limit"] != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", [], "any", false, false, false, 9), "maxPerPage", [], "any", false, false, false, 9)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
            // line 10
            echo "                ";
            $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "attributes", [], "any", false, false, false, 10), "get", [0 => "_route"], "method", false, false, false, 10), twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "attributes", [], "any", false, false, false, 10), "get", [0 => "_route_params"], "method", false, false, false, 10), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "query", [], "any", false, false, false, 10), "all", [], "any", false, false, false, 10)), ["limit" => $context["limit"]]));
            // line 11
            echo "                <a class=\"item\" href=\"";
            echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Index/_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  60 => 11,  57 => 10,  53 => 9,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Product/Index/_pagination.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Index/_pagination.html.twig");
    }
}
