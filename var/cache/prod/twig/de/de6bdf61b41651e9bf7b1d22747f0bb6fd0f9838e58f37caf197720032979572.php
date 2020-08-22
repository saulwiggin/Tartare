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

/* @SyliusAdmin/Layout/_support.html.twig */
class __TwigTemplate_8c27d073636e9124948d906cae852949c10a312d8cc24aa7e12e8929e5fe59a6 extends \Twig\Template
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
        echo "<div class=\"ui floated simple dropdown item\">
    <i class=\"life ring icon\"></i>
    <span>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.get_support"), "html", null, true);
        echo "</span>
    <div class=\"menu\">
        <a href=\"https://docs.sylius.com\" class=\"item\" target=\"_blank\">
            <i class=\"book icon\"></i>
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.documentation"), "html", null, true);
        echo "
        </a>
        <a href=\"https://sylius.com/slack\" class=\"item\" target=\"_blank\">
            <i class=\"slack icon\"></i>
            ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.join_slack"), "html", null, true);
        echo "
        </a>
        <a href=\"https://forum.sylius.com\" class=\"item\" target=\"_blank\">
            <i class=\"discourse icon\"></i>
            ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.join_forum"), "html", null, true);
        echo "
        </a>
        <a href=\"https://github.com/Sylius/Sylius/issues\" class=\"item\" target=\"_blank\">
            <i class=\"github icon\"></i>
            ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.issue_tracker"), "html", null, true);
        echo "
        </a>
        <a href=\"https://www.youtube.com/channel/UCtZI2yUM2bZwbVlGpQJ9VCQ\" class=\"item\" target=\"_blank\">
            <i class=\"youtube icon\"></i>
            ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.youtube"), "html", null, true);
        echo "
        </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Layout/_support.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  69 => 19,  62 => 15,  55 => 11,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Layout/_support.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Layout/_support.html.twig");
    }
}
