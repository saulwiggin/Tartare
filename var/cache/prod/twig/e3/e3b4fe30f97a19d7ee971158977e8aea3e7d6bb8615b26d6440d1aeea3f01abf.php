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

/* BitBagSyliusCmsPlugin:Shop/Page/Show:_link.html.twig */
class __TwigTemplate_520d9b89a0a400945264cdb5e02a3c9d43d3bd53a4f095766ea521bce0778cc2 extends \Twig\Template
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
        echo "<a class=\"bitbag-page-link item\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_page_show", ["slug" => twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slug", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "name", [], "any", false, false, false, 1), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:Shop/Page/Show:_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "BitBagSyliusCmsPlugin:Shop/Page/Show:_link.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Shop/Page/Show/_link.html.twig");
    }
}
