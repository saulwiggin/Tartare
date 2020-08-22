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

/* SyliusResourceBundle:Twig:paginate.html.twig */
class __TwigTemplate_031fd021fbccc7c8d35612fe31c0accfa6f47c0050ad13835b014cce66fad945 extends \Twig\Template
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
        echo "<a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
    ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "maxPerPage", [], "any", false, false, false, 2), "html", null, true);
        echo "&nbsp;
    <i class=\"icon-angle-down\"></i>
</a>

<ul class=\"dropdown-menu pull-left\" role=\"menu\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["limits"] ?? null));
        foreach ($context['_seq'] as $context["limit"] => $context["url"]) {
            // line 8
            echo "    <li>
        <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $context["url"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
            echo "</a>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['limit'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>
/ ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nbResults", [], "any", false, false, false, 13), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle:Twig:paginate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  66 => 12,  55 => 9,  52 => 8,  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusResourceBundle:Twig:paginate.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/resource-bundle/src/Bundle/Resources/views/Twig/paginate.html.twig");
    }
}
