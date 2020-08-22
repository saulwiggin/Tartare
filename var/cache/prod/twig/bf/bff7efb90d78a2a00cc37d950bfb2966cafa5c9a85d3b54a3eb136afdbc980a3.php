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

/* @SyliusAdmin/Product/Update/_toolbar.html.twig */
class __TwigTemplate_c38a1ca91e4b6eab033029503311fcc76ea15b9b35fc0f412625a23d5156a827 extends \Twig\Template
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
        echo "<div class=\"ui right floated buttons\">
    ";
        // line 2
        $context["menu"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->get("sylius.admin.product.update", [], ["product" => ($context["product"] ?? null)]);
        // line 3
        echo "    ";
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(($context["menu"] ?? null), ["template" => "@SyliusUi/Menu/top.html.twig"]);
        echo "
    ";
        // line 4
        $this->loadTemplate("@SyliusAdmin/Product/_showInShopButton.html.twig", "@SyliusAdmin/Product/Update/_toolbar.html.twig", 4)->display($context);
        // line 5
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Update/_toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Product/Update/_toolbar.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Update/_toolbar.html.twig");
    }
}
