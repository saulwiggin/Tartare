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

/* @SyliusChannel/Collector/channel.html.twig */
class __TwigTemplate_58253d8e88702bf975bbf9964838240feca29e9332fa1312e3d5ff0e7abe8a84 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@SyliusChannel/Collector/channel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $context["status_color"] = (((null === twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "channel", [], "any", false, false, false, 4))) ? ("red") : (""));
        // line 5
        echo "
    ";
        // line 6
        ob_start(function () { return ''; });
        // line 7
        echo "        ";
        echo twig_include($this->env, $context, "@SyliusChannel/Collector/Icon/channel.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 8
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "channel", [], "any", false, true, false, 8), "name", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "channel", [], "any", false, true, false, 8), "name", [], "any", false, false, false, 8), "Undefined")) : ("Undefined")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start(function () { return ''; });
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Channels</b>
            <span class=\"sf-toolbar-status ";
        // line 14
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "channels", [], "any", false, false, false, 14))) {
            echo "sf-toolbar-status-red";
        }
        echo "\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "channels", [], "any", false, false, false, 14)), "html", null, true);
        echo "</span>
        </div>

        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "channels", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 18
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</b>
                <span>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "hostname", [], "any", false, false, false, 20), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isChannelChangeSupported", [], "any", false, false, false, 20)) {
                echo " (<a href=\"?_channel_code=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "code", [], "any", false, false, false, 20), "html", null, true);
                echo "\">change</a>)";
            }
            echo "</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        echo "
    ";
        // line 25
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => false, "status" => ($context["status_color"] ?? null)]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusChannel/Collector/channel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  115 => 24,  112 => 23,  98 => 20,  94 => 19,  91 => 18,  87 => 17,  77 => 14,  73 => 12,  71 => 11,  68 => 10,  63 => 8,  58 => 7,  56 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusChannel/Collector/channel.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/views/Collector/channel.html.twig");
    }
}
