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

/* BitBagSyliusCmsPlugin::layout.html.twig */
class __TwigTemplate_ecf77311d05e2e567c80704eda754607581083f0089b99ee9a730e932deb22f5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@SyliusAdmin/layout.html.twig", "BitBagSyliusCmsPlugin::layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 6
        $this->loadTemplate("SyliusUiBundle::_stylesheets.html.twig", "BitBagSyliusCmsPlugin::layout.html.twig", 6)->display(twig_array_merge($context, ["path" => "bundles/bitbagsyliuscmsplugin/css/style.css"]));
    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 13
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "BitBagSyliusCmsPlugin::layout.html.twig", 13)->display(twig_array_merge($context, ["path" => "bundles/bitbagsyliuscmsplugin/js/bitbag-upload-csv.js"]));
        // line 14
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "BitBagSyliusCmsPlugin::layout.html.twig", 14)->display(twig_array_merge($context, ["path" => "bundles/bitbagsyliuscmsplugin/js/bitbag-page-slug.js"]));
        // line 15
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "BitBagSyliusCmsPlugin::layout.html.twig", 15)->display(twig_array_merge($context, ["path" => "bundles/bitbagsyliuscmsplugin/js/bitbag-block-image-preview.js"]));
        // line 16
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "BitBagSyliusCmsPlugin::layout.html.twig", 16)->display(twig_array_merge($context, ["path" => "bundles/bitbagsyliuscmsplugin/js/bitbag-cms-resource-preview.js"]));
        // line 17
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "BitBagSyliusCmsPlugin::layout.html.twig", 17)->display(twig_array_merge($context, ["path" => "bundles/bitbagsyliuscmsplugin/js/bitbag-block-image-preview.js"]));
        // line 18
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "BitBagSyliusCmsPlugin::layout.html.twig", 18)->display(twig_array_merge($context, ["path" => "bundles/bitbagsyliuscmsplugin/js/bitbag-cms-resource-preview.js"]));
        // line 19
        echo "
    ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), [(($context["event_prefix"] ?? null) . ".javascripts")]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  73 => 14,  71 => 13,  65 => 11,  61 => 10,  57 => 6,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "BitBagSyliusCmsPlugin::layout.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/layout.html.twig");
    }
}
