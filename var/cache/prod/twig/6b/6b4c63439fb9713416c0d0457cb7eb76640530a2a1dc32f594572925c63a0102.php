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

/* @BitBagSyliusCmsPlugin/Macro/imageWidget.html.twig */
class __TwigTemplate_a78452c3365024784422d2e8186352caddc5f5c531977c45cc164703d23f5ea8 extends \Twig\Template
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
    public function macro_imageWidget($__form__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    <div class=\"ui upload box segment\">
        ";
            // line 3
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 3), 'row');
            echo "
        <label for=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 4), "vars", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4), "html", null, true);
            echo "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.choose_file"), "html", null, true);
            echo "</label>
        ";
            // line 5
            if ( !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "value", [], "any", false, true, false, 5), "path", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "value", [], "any", false, true, false, 5), "path", [], "any", false, false, false, 5), null)) : (null)))) {
                // line 6
                echo "            <img class=\"ui small bordered image\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6), "path", [], "any", false, false, false, 6), "sylius_small"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6), "type", [], "any", false, false, false, 6), "html", null, true);
                echo "\" />
        ";
            }
            // line 8
            echo "        <div class=\"ui hidden element\">
            ";
            // line 9
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 9), 'widget');
            echo "
        </div>
        <div class=\"ui element\">";
            // line 12
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 12), 'errors');
            // line 13
            echo "</div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Macro/imageWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  83 => 12,  78 => 9,  75 => 8,  67 => 6,  65 => 5,  59 => 4,  55 => 3,  52 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@BitBagSyliusCmsPlugin/Macro/imageWidget.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Macro/imageWidget.html.twig");
    }
}
