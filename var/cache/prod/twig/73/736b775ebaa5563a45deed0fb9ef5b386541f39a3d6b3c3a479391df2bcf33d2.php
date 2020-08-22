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

/* PayumBundle:Profiler:payum.html.twig */
class __TwigTemplate_ba224b8401e69133a24c6c7b1daca022718ede9a495510b35153acb8143972ca extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
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
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "PayumBundle:Profiler:payum.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "dump", [], "any", false, false, false, 4))) {
            // line 5
            echo "        ";
            ob_start(function () { return ''; });
            // line 6
            echo "             ";
            echo twig_include($this->env, $context, "@Payum/Icon/payum.svg");
            echo "
            <span class=\"sf-toolbar-value\">Payum</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 9
            echo "
        ";
            // line 15
            echo "
        ";
            // line 16
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
            echo "
    ";
        }
    }

    // line 20
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        // line 22
        echo "    <span class=\"label";
        echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "dump", [], "any", false, false, false, 22)) == 0)) ? (" disabled") : (""));
        echo "\">
        <span class=\"icon\">
            ";
        // line 24
        echo twig_include($this->env, $context, "@Payum/Icon/payum.svg");
        echo "
        </span>
        <strong>Payum</strong>
    </span>
";
    }

    // line 30
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    <h2>Gateway execution graph</h2>
    ";
        // line 32
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "dump", [], "any", false, false, false, 32))) {
            // line 33
            echo "        <pre>";
            echo twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "dump", [], "any", false, false, false, 33);
            echo "</pre>
    ";
        } else {
            // line 35
            echo "        <div class=\"empty\">
            <p>No data was collected by Payum.</p>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "PayumBundle:Profiler:payum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 35,  108 => 33,  106 => 32,  103 => 31,  99 => 30,  90 => 24,  84 => 22,  82 => 21,  78 => 20,  71 => 16,  68 => 15,  65 => 9,  58 => 6,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "PayumBundle:Profiler:payum.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/payum/payum-bundle/Resources/views/Profiler/payum.html.twig");
    }
}
