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

/* SyliusAdminBundle:Product/Show:_header.html.twig */
class __TwigTemplate_86f06062eee772beff8475d1cf612878e7cf1cdefa7b5cfb78964fb45b0cff3c extends \Twig\Template
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
        echo "<div id=\"header\" class=\"ui stackable two column grid\">
    <div class=\"column\">
        <h1 class=\"ui header\">
            <i class=\"circular cube icon\"></i>
            <div class=\"content\">
                <span>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</span>
                <div class=\"sub header\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show_product"), "html", null, true);
        echo "</div>
            </div>
        </h1>
        ";
        // line 10
        $this->loadTemplate("@SyliusAdmin/Product/Show/_breadcrumb.html.twig", "SyliusAdminBundle:Product/Show:_header.html.twig", 10)->display($context);
        // line 11
        echo "    </div>
    <div class=\"middle aligned column\">
        <div class=\"ui right floated buttons\">
            ";
        // line 14
        $this->loadTemplate("@SyliusAdmin/Product/_showInShopButton.html.twig", "SyliusAdminBundle:Product/Show:_header.html.twig", 14)->display($context);
        // line 15
        echo "            <a id=\"edit-product\" class=\"ui labeled icon button\" href= ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_update", ["id" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo ">
                <i class=\"edit icon\"></i>
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit"), "html", null, true);
        echo "
            </a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Show:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  63 => 15,  61 => 14,  56 => 11,  54 => 10,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Product/Show:_header.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_header.html.twig");
    }
}
