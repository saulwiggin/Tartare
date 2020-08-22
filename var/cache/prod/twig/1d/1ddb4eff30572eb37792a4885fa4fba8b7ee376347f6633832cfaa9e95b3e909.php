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

/* @SyliusAdmin/Shipment/Show/_header.html.twig */
class __TwigTemplate_70d16938792ff325601ec0bc551cc62fe71b2259d44e7981679d121a731ad8eb extends \Twig\Template
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
        echo "<h1 class=\"ui header\">
    <i class=\"circular truck icon\"></i>
    <div class=\"content\">
        ";
        // line 4
        echo twig_escape_filter($this->env, (((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipment") . " for ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order")) . " #") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "order", [], "any", false, false, false, 4), "number", [], "any", false, false, false, 4)), "html", null, true);
        echo "
    </div>
</h1>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Shipment/Show/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Shipment/Show/_header.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Shipment/Show/_header.html.twig");
    }
}
