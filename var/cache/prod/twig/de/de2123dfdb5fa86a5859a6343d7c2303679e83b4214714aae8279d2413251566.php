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

/* @SyliusUi/Macro/flags.html.twig */
class __TwigTemplate_2e599caf21e2aab3f549e5b32001dc84a08255b3158541bfc7703a9015cca5f0 extends \Twig\Template
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
        // line 4
        echo "
";
    }

    // line 1
    public function macro_fromCountryCode($__country_code__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "country_code" => $__country_code__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    <i class=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["country_code"] ?? null)), "html", null, true);
            echo " flag\"></i>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 5
    public function macro_fromLocaleCode($__locale_code__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "locale_code" => $__locale_code__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 6
            echo "    ";
            $macros["flags"] = $this;
            // line 7
            echo "
    ";
            // line 8
            $context["country_code"] = $this->extensions['Sylius\Bundle\LocaleBundle\Twig\LocaleExtension']->getCountryCode(($context["locale_code"] ?? null));
            // line 9
            echo "
    ";
            // line 10
            if (($context["country_code"] ?? null)) {
                // line 11
                echo "        ";
                echo twig_call_macro($macros["flags"], "macro_fromCountryCode", [($context["country_code"] ?? null)], 11, $context, $this->getSourceContext());
                echo "
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/flags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  91 => 10,  88 => 9,  86 => 8,  83 => 7,  80 => 6,  67 => 5,  55 => 2,  42 => 1,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusUi/Macro/flags.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/flags.html.twig");
    }
}
