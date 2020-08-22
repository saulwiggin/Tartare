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

/* SyliusAdminBundle:Customer/Show:_headerMenu.html.twig */
class __TwigTemplate_89e663bdcb2f363c81e5242c4462a4ca678a0744ac0d6ff18725be9815f5ceb8 extends \Twig\Template
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
        $context["menu"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->get("sylius.admin.customer.show", [], ["customer" => ($context["customer"] ?? null)]);
        // line 2
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(($context["menu"] ?? null), ["template" => "@SyliusUi/Menu/top.html.twig"]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Show:_headerMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Customer/Show:_headerMenu.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/_headerMenu.html.twig");
    }
}
