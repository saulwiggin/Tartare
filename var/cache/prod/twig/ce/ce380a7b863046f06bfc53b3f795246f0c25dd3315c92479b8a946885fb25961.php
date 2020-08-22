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

/* @SyliusAdmin/Form/theme.html.twig */
class __TwigTemplate_63dfee72c66cf7a00b85b29a0dbee392120c915a7261c0cf8634de871d4930ff extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            '_sylius_product_attribute_configuration_choices_entry_widget' => [$this, 'block__sylius_product_attribute_configuration_choices_entry_widget'],
            'sylius_taxon_autocomplete_choice_row' => [$this, 'block_sylius_taxon_autocomplete_choice_row'],
            'sylius_product_autocomplete_choice_row' => [$this, 'block_sylius_product_autocomplete_choice_row'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusUi/Form/theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@SyliusUi/Form/theme.html.twig", "@SyliusAdmin/Form/theme.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block__sylius_product_attribute_configuration_choices_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $macros["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "@SyliusAdmin/Form/theme.html.twig", 4)->unwrap();
        // line 5
        echo "
    <div class=\"ui styled fluid accordion\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 8
            echo "            <div data-locale=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translation"], "vars", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
            echo "\">
                <div class=\"title";
            // line 9
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 9))) {
                echo " active";
            }
            echo "\">
                    <i class=\"dropdown icon\"></i>
                    ";
            // line 11
            echo twig_call_macro($macros["flags"], "macro_fromLocaleCode", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translation"], "vars", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11)], 11, $context, $this->getSourceContext());
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translation"], "vars", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11)]), "html", null, true);
            echo "
                </div>
                <div class=\"ui content";
            // line 13
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 13))) {
                echo " active";
            }
            echo "\">
                    ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translation"], 'widget');
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 16
            echo "</div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
    }

    // line 22
    public function block_sylius_taxon_autocomplete_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'row', ["remote_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_taxon_by_name_phrase"), "load_edit_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_taxon_by_code")]);
        echo "
";
    }

    // line 26
    public function block_sylius_product_autocomplete_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'row', ["remote_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_product_by_name_phrase"), "load_edit_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_product_by_code")]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Form/theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 27,  137 => 26,  130 => 23,  126 => 22,  121 => 19,  105 => 16,  103 => 15,  101 => 14,  95 => 13,  88 => 11,  81 => 9,  76 => 8,  59 => 7,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Form/theme.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Form/theme.html.twig");
    }
}
