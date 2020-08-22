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

/* @SyliusUi/Grid/Action/_link.html.twig */
class __TwigTemplate_82a3203f57d51a280ca251ef08fe310941f674d473d3168d0d05e71016c37804 extends \Twig\Template
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
        $context["path"] = ((twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "url", [], "any", true, true, false, 1)) ? (twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "url", [], "any", false, false, false, 1)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "route", [], "any", false, false, false, 1), ((twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "parameters", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "parameters", [], "any", false, false, false, 1), [])) : ([])))));
        // line 2
        echo "
<a class=\"item\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "\">";
        if (twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "icon", [], "any", true, true, false, 3)) {
            echo "<i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "icon", [], "any", false, false, false, 3), "html", null, true);
            echo " icon\"></i> ";
        }
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "label", [], "any", false, false, false, 3)), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/Action/_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusUi/Grid/Action/_link.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Action/_link.html.twig");
    }
}
