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

/* @SyliusUi/Macro/headers.html.twig */
class __TwigTemplate_14207d20cbfcb4e441635a27c5bbf86fec287cf120748ecd1bb77da32c74c6cb extends \Twig\Template
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
    public function macro_default($__header__ = null, $__icon__ = null, $__subheader__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "header" => $__header__,
            "icon" => $__icon__,
            "subheader" => $__subheader__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "<h1 class=\"ui header\">
    ";
            // line 3
            if ( !twig_test_empty(($context["icon"] ?? null))) {
                // line 4
                echo "    <i class=\"circular ";
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " icon\"></i>
    ";
            }
            // line 6
            echo "    <div class=\"content\">
        ";
            // line 7
            echo twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true);
            echo "
        ";
            // line 8
            if ( !twig_test_empty(($context["subheader"] ?? null))) {
                // line 9
                echo "        <div class=\"sub header\">";
                echo twig_escape_filter($this->env, ($context["subheader"] ?? null), "html", null, true);
                echo "</div>
        ";
            }
            // line 11
            echo "    </div>
</h1>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/headers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 11,  74 => 9,  72 => 8,  68 => 7,  65 => 6,  59 => 4,  57 => 3,  54 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusUi/Macro/headers.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/headers.html.twig");
    }
}
