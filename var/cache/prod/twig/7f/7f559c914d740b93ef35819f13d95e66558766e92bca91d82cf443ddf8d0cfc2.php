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

/* @SyliusAdmin/PaymentMethod/_form.html.twig */
class __TwigTemplate_d73b579b092644530764851d2125bfc8bd0d403c2d7c077bb0cdbfca4a34ff53 extends \Twig\Template
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
        $macros["flags"] = $this->macros["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "@SyliusAdmin/PaymentMethod/_form.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.details"), "html", null, true);
        echo "</h4>
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

    <div class=\"two fields\">
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, false, false, 10), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "position", [], "any", false, false, false, 11), 'row');
        echo "
    </div>
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "enabled", [], "any", false, false, false, 13), 'row');
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "channels", [], "any", false, false, false, 14), 'row');
        echo "
</div>

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.gateway_configuration"), "html", null, true);
        echo "</h4>

    ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "gatewayConfig", [], "any", false, false, false, 20), "factoryName", [], "any", false, false, false, 20) == "stripe_checkout")) {
            // line 21
            echo "        <div class=\"ui icon negative orange message sylius-flash-message\">
            <i class=\"close icon\"></i>
            <i class=\"warning icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    ";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.gateway.no_sca_support_notice"), "html", null, true);
            echo "
                </div>
            </div>
        </div>
    ";
        }
        // line 31
        echo "
    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "gatewayConfig", [], "any", false, false, false, 32), "factoryName", [], "any", false, false, false, 32), 'row');
        echo "
    ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "gatewayConfig", [], "any", false, true, false, 33), "config", [], "any", true, true, false, 33)) {
            // line 34
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "gatewayConfig", [], "any", false, false, false, 34), "config", [], "any", false, false, false, 34));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 35
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 35) % 2 == 1) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 35))) {
                    echo "<div class=\"two fields\">";
                }
                // line 36
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                echo "
            ";
                // line 37
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 37) % 2 == 0)) {
                    echo "</div>";
                }
                // line 38
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    ";
        }
        // line 40
        echo "</div>

<div class=\"ui styled fluid accordion\">
    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "translations", [], "any", false, false, false, 43));
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
        foreach ($context['_seq'] as $context["locale"] => $context["translationForm"]) {
            // line 44
            echo "        <div class=\"title";
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 44))) {
                echo " active";
            }
            echo "\">
            <i class=\"dropdown icon\"></i>
            ";
            // line 46
            echo twig_call_macro($macros["flags"], "macro_fromLocaleCode", [$context["locale"]], 46, $context, $this->getSourceContext());
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), [$context["locale"]]), "html", null, true);
            echo "
        </div>
        <div class=\"content";
            // line 48
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 48))) {
                echo " active";
            }
            echo "\">
            ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["translationForm"], "name", [], "any", false, false, false, 49), 'row');
            echo "
            ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["translationForm"], "description", [], "any", false, false, false, 50), 'row');
            echo "
            <div class=\"ui compact message\">
                <p>
                    <i class=\"icon info circle\"></i> ";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.the_instructions_below_will_be_displayed_to_the_customer"), "html", null, true);
            echo ".
                </p>
            </div>
            ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["translationForm"], "instructions", [], "any", false, false, false, 56), 'row');
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/PaymentMethod/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 59,  217 => 56,  211 => 53,  205 => 50,  201 => 49,  195 => 48,  188 => 46,  180 => 44,  163 => 43,  158 => 40,  155 => 39,  141 => 38,  137 => 37,  132 => 36,  127 => 35,  109 => 34,  107 => 33,  103 => 32,  100 => 31,  92 => 26,  85 => 21,  83 => 20,  78 => 18,  71 => 14,  67 => 13,  62 => 11,  58 => 10,  52 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/PaymentMethod/_form.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PaymentMethod/_form.html.twig");
    }
}
