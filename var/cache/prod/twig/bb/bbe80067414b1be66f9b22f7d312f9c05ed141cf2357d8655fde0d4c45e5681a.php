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

/* SyliusAdminBundle:Order/Show:_headerWidget.html.twig */
class __TwigTemplate_0cb701bb67d787ddd80bd7b930516f00d663312373ab88a6c4b39203b507ffe2 extends \Twig\Template
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
        echo "<div class=\"ui stackable two column grid\">
    <div class=\"ten wide column\">
        ";
        // line 3
        $this->loadTemplate("@SyliusAdmin/Order/Show/_header.html.twig", "SyliusAdminBundle:Order/Show:_headerWidget.html.twig", 3)->display($context);
        // line 4
        echo "    </div>

    ";
        // line 6
        $context["menu"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->get("sylius.admin.order.show", [], ["order" => ($context["order"] ?? null)]);
        // line 7
        echo "    ";
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(($context["menu"] ?? null), ["template" => "@SyliusUi/Menu/top.html.twig"]);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_headerWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  47 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Order/Show:_headerWidget.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_headerWidget.html.twig");
    }
}
