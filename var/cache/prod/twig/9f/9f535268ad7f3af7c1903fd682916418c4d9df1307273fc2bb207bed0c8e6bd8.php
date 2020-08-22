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

/* SitemapPlugin:Macro:language.html.twig */
class __TwigTemplate_086631627f36a7cfbcec3a75729be27e6b4489b9a199f5a2d89910d6b869c11c extends \Twig\Template
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
    public function macro_localeToCode($__locale__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "locale" => $__locale__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo twig_escape_filter($this->env, twig_first($this->env, twig_split_filter($this->env, ($context["locale"] ?? null), "_")), "html", null, true);

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SitemapPlugin:Macro:language.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SitemapPlugin:Macro:language.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/stefandoorn/sitemap-plugin/src/Resources/views/Macro/language.html.twig");
    }
}
