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

/* @SyliusUi/Layout/sidebar.html.twig */
class __TwigTemplate_be7121b4329c672c95d0755124f2624479b016ed3d5e8248db1eef889ec7da41 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'metatags' => [$this, 'block_metatags'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'sidebar' => [$this, 'block_sidebar'],
            'topbar' => [$this, 'block_topbar'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'pre_content' => [$this, 'block_pre_content'],
            'content' => [$this, 'block_content'],
            'post_content' => [$this, 'block_post_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>

<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    ";
        // line 12
        $this->displayBlock('metatags', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "</head>

<body class=\"pushable\">
<div class=\"ui sidebar vertical inverted menu visible left\" id=\"sidebar\">
    ";
        // line 25
        $this->displayBlock('sidebar', $context, $blocks);
        // line 27
        echo "</div>
<div class=\"ui borderless fixed menu\">
    ";
        // line 29
        $this->displayBlock('topbar', $context, $blocks);
        // line 31
        echo "</div>
<div class=\"pusher\">
    <div class=\"full height\" id=\"wrapper\">
        <div id=\"content\">
            ";
        // line 35
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 38
        echo "
            ";
        // line 39
        $this->displayBlock('pre_content', $context, $blocks);
        // line 41
        echo "
            ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "
            ";
        // line 45
        $this->displayBlock('post_content', $context, $blocks);
        // line 47
        echo "        </div>

        <div class=\"sylius-footer\">
            ";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "        </div>
    </div>
</div>

";
        // line 56
        $this->loadTemplate("@SyliusUi/Modal/_confirmation.html.twig", "@SyliusUi/Layout/sidebar.html.twig", 56)->display($context);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "</body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Sylius";
    }

    // line 12
    public function block_metatags($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    ";
    }

    // line 25
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
    }

    // line 29
    public function block_topbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    ";
    }

    // line 35
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "                ";
        $this->loadTemplate("@SyliusUi/_flashes.html.twig", "@SyliusUi/Layout/sidebar.html.twig", 36)->display($context);
        // line 37
        echo "            ";
    }

    // line 39
    public function block_pre_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "            ";
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "            ";
    }

    // line 45
    public function block_post_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "            ";
    }

    // line 50
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "            ";
    }

    // line 58
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Layout/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 58,  216 => 51,  212 => 50,  208 => 46,  204 => 45,  200 => 43,  196 => 42,  192 => 40,  188 => 39,  184 => 37,  181 => 36,  177 => 35,  173 => 30,  169 => 29,  165 => 26,  161 => 25,  153 => 16,  149 => 15,  145 => 13,  141 => 12,  134 => 8,  128 => 60,  126 => 58,  123 => 57,  121 => 56,  115 => 52,  113 => 50,  108 => 47,  106 => 45,  103 => 44,  101 => 42,  98 => 41,  96 => 39,  93 => 38,  91 => 35,  85 => 31,  83 => 29,  79 => 27,  77 => 25,  71 => 21,  69 => 15,  66 => 14,  64 => 12,  57 => 8,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusUi/Layout/sidebar.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Layout/sidebar.html.twig");
    }
}
