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

/* @SyliusShop/layout.html.twig */
class __TwigTemplate_3372d0277785e2c9855c3491040cb09ae76356184b44e52d4a5661e1bb61f1b6 extends \Twig\Template
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
            'top' => [$this, 'block_top'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "locale", [], "any", false, false, false, 3), 0, 2), "html", null, true);
        echo "\">
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
        // line 18
        echo "
    ";
        // line 19
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.layout.head");
        echo "
</head>

<body class=\"pushable\">
";
        // line 23
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.layout.before_body");
        echo "
<div class=\"pusher\">
    ";
        // line 25
        $this->displayBlock('top', $context, $blocks);
        // line 30
        echo "
    <div class=\"ui container\">
        ";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 37
        echo "
        ";
        // line 38
        $this->loadTemplate("@SyliusShop/_flashes.html.twig", "@SyliusShop/layout.html.twig", 38)->display($context);
        // line 39
        echo "
        ";
        // line 40
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.layout.before_content");
        echo "

        ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "
        ";
        // line 45
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.layout.after_content");
        echo "
    </div>

    ";
        // line 48
        $this->displayBlock('footer', $context, $blocks);
        // line 51
        echo "</div>

";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->loadTemplate("@SyliusUi/Modal/_confirmation.html.twig", "@SyliusShop/layout.html.twig", 57)->display($context);
        // line 58
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.layout.after_body");
        echo "
</body>
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
        echo "        ";
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.layout.stylesheets");
        echo "
    ";
    }

    // line 25
    public function block_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "        <div id=\"menu\" class=\"ui large sticky inverted stackable menu\">
            ";
        // line 27
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.layout.topbar");
        echo "
        </div>
    ";
    }

    // line 32
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "            <header>
                ";
        // line 34
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.layout.header");
        echo "
            </header>
        ";
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "        ";
    }

    // line 48
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "        ";
        $this->loadTemplate("@SyliusShop/_footer.html.twig", "@SyliusShop/layout.html.twig", 49)->display($context);
        // line 50
        echo "    ";
    }

    // line 53
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "    ";
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.layout.javascripts");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 54,  212 => 53,  208 => 50,  205 => 49,  201 => 48,  197 => 43,  193 => 42,  186 => 34,  183 => 33,  179 => 32,  172 => 27,  169 => 26,  165 => 25,  158 => 16,  154 => 15,  150 => 13,  146 => 12,  139 => 8,  131 => 58,  129 => 57,  126 => 56,  124 => 53,  120 => 51,  118 => 48,  112 => 45,  109 => 44,  107 => 42,  102 => 40,  99 => 39,  97 => 38,  94 => 37,  92 => 32,  88 => 30,  86 => 25,  81 => 23,  74 => 19,  71 => 18,  69 => 15,  66 => 14,  64 => 12,  57 => 8,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/layout.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/layout.html.twig");
    }
}
