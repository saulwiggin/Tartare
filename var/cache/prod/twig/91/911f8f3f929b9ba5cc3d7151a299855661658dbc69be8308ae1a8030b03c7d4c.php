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

/* @SitemapPlugin/Macro/xml.html.twig */
class __TwigTemplate_f78d4672fa44aec9717e9a3137645ef1cfae58f049852222ad8f08e4cf568560 extends \Twig\Template
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
    }

    // line 1
    public function macro_last_modification($__url__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 3
            echo "    ";
            if ( !(twig_get_attribute($this->env, $this->source, ($context["url"] ?? null), "lastModification", [], "any", false, false, false, 3) === null)) {
                // line 4
                echo "        <lastmod>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["url"] ?? null), "lastModification", [], "any", false, false, false, 4), "c"), "html", null, true);
                echo "</lastmod>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 8
    public function macro_change_frequency($__url__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 10
            echo "    ";
            if ( !(twig_get_attribute($this->env, $this->source, ($context["url"] ?? null), "changeFrequency", [], "any", false, false, false, 10) === null)) {
                // line 11
                echo "        <changefreq>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["url"] ?? null), "changeFrequency", [], "any", false, false, false, 11), "html", null, true);
                echo "</changefreq>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 15
    public function macro_priority($__url__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 16
            if ( !(twig_get_attribute($this->env, $this->source, ($context["url"] ?? null), "priority", [], "any", false, false, false, 16) === null)) {
                // line 17
                echo "        <priority>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["url"] ?? null), "priority", [], "any", false, false, false, 17), "html", null, true);
                echo "</priority>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SitemapPlugin/Macro/xml.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 17,  110 => 16,  97 => 15,  84 => 11,  81 => 10,  68 => 8,  55 => 4,  52 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SitemapPlugin/Macro/xml.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/stefandoorn/sitemap-plugin/src/Resources/views/Macro/xml.html.twig");
    }
}
