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

/* @SyliusAdmin/Promotion/_toolbar.html.twig */
class __TwigTemplate_7592a5a5f6e75f4f554215c654261df7a276cbd7ede018c5edbfdc33703b8886 extends \Twig\Template
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
        $context["menu"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->get("sylius.admin.promotion.update", [], ["promotion" => ($context["promotion"] ?? null)]);
        // line 2
        echo "
";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["promotion"] ?? null), "couponBased", [], "any", false, false, false, 3) == true)) {
            // line 4
            echo "    <div class=\"ui right floated buttons\">
        ";
            // line 5
            echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(($context["menu"] ?? null), ["template" => "@SyliusUi/Menu/top.html.twig"]);
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Promotion/_toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Promotion/_toolbar.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Promotion/_toolbar.html.twig");
    }
}
