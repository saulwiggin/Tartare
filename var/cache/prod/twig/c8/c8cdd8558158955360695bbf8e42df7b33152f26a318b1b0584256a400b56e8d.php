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

/* @BitBagSyliusCmsPlugin/Modal/_channelSwitch.html.twig */
class __TwigTemplate_c55db678c95d33d6b5c3aecc5e118c0c5cf2667da710bc1784522aaf16455b2f extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["channels"] ?? null)) > 0)) {
            // line 2
            echo "    ";
            $context["selected"] = twig_first($this->env, ($context["channels"] ?? null));
            // line 3
            echo "    ";
            $context["code"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "query", [], "any", false, false, false, 3), "get", [0 => "channel", 1 => twig_get_attribute($this->env, $this->source, ($context["selected"] ?? null), "code", [], "any", false, false, false, 3)], "method", false, false, false, 3);
            // line 4
            echo "
    <div class=\"field\">
        <label for=\"bitbag_sylius_cms_plugin_channel_switch\" class=\"required\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.channel"), "html", null, true);
            echo "
        </label>
        <select id=\"bitbag_sylius_cms_plugin_channel_switch\" class=\" ui dropdown\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["channels"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 11
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "code", [], "any", false, false, false, 11), "html", null, true);
                echo "\" ";
                echo (((twig_get_attribute($this->env, $this->source, $context["channel"], "code", [], "any", false, false, false, 11) === ($context["code"] ?? null))) ? ("selected") : (""));
                echo ">
                    ";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "name", [], "any", false, false, false, 12), "html", null, true);
                echo "
                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </select>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Modal/_channelSwitch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  67 => 12,  60 => 11,  56 => 10,  50 => 7,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@BitBagSyliusCmsPlugin/Modal/_channelSwitch.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Modal/_channelSwitch.html.twig");
    }
}
