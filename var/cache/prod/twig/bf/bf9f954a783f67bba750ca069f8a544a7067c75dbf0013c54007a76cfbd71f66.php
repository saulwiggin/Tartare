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

/* SyliusUiBundle:Macro:breadcrumb.html.twig */
class __TwigTemplate_a2ee2227b60724a00e6fd7f2523a763e6b6e569f3d330fc4f4228f0c5c800690 extends \Twig\Template
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
    public function macro_crumble($__crumbs__ = [], $__root_path__ = null, $__root_label__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "crumbs" => $__crumbs__,
            "root_path" => $__root_path__,
            "root_label" => $__root_label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    <div class=\"ui breadcrumb\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["crumbs"] ?? null));
            $context['_iterated'] = false;
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 4
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 4)) {
                    // line 5
                    echo "                <div class=\"active section\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["crumb"], "label", [], "any", false, false, false, 5), "html", null, true);
                    echo "</div>
            ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 6
$context["crumb"], "url", [], "any", true, true, false, 6)) {
                    // line 7
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["crumb"], "url", [], "any", false, false, false, 7), "html", null, true);
                    echo "\" class=\"section\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["crumb"], "label", [], "any", false, false, false, 7), "html", null, true);
                    echo "</a>
                <i class=\"right chevron icon divider\"></i>
            ";
                } else {
                    // line 10
                    echo "                <div class=\"section\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["crumb"], "label", [], "any", false, false, false, 10), "html", null, true);
                    echo "</div>
                <i class=\"right chevron icon divider\"></i>
            ";
                }
                // line 13
                echo "        ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 14
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("root_url", $context)) ? (_twig_default_filter(($context["root_url"] ?? null), "/")) : ("/")), "html", null, true);
                echo "\" class=\"section\">";
                echo twig_escape_filter($this->env, ((array_key_exists("root_label", $context)) ? (_twig_default_filter(($context["root_label"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.root"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.root"))), "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Macro:breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 16,  114 => 14,  101 => 13,  94 => 10,  85 => 7,  83 => 6,  78 => 5,  75 => 4,  57 => 3,  54 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusUiBundle:Macro:breadcrumb.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/breadcrumb.html.twig");
    }
}
