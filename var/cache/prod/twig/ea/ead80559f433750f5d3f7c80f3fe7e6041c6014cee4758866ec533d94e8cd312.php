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

/* SyliusUiBundle:Grid/Action:_link.html.twig */
class __TwigTemplate_83f6e62a7c8809b3cd2aeed4594708ba4cb22c9c7a1b204a851cc70c13aa6ac9 extends \Twig\Template
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
        return "SyliusUiBundle:Grid/Action:_link.html.twig";
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
        return new Source("", "SyliusUiBundle:Grid/Action:_link.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Action/_link.html.twig");
    }
}
