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

/* @SyliusAdmin/Product/Tab/_taxonomy.html.twig */
class __TwigTemplate_37030dc1a7ae153105c083f1935246413be4f93a63be0114911e94d8a583e59b extends \Twig\Template
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
        echo "<div class=\"ui tab\" data-tab=\"taxonomy\">
    <h3 class=\"ui top attached header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.taxonomy"), "html", null, true);
        echo "</h3>

    <div class=\"ui attached segment\">
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mainTaxon", [], "any", false, false, false, 5), 'row');
        echo "

        <h4>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.product_taxon"), "html", null, true);
        echo "</h4>
        <div id=\"sylius-product-taxonomy-tree\"
             data-tree-root-nodes-url=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_taxon_root_nodes");
        echo "\"
             data-tree-leafs-url=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_taxon_leafs");
        echo "\"
        >
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "productTaxons", [], "any", false, false, false, 12), 'widget');
        echo "
            <div class=\"ui inverted dimmer\">
                <div class=\"ui loader\"></div>
            </div>
        </div>

        ";
        // line 18
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([0 => (("sylius.admin.product." . ($context["action"] ?? null)) . ".tab_taxonomy"), 1 => "sylius.admin.product.tab_taxonomy"], ["form" => ($context["form"] ?? null)]);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Tab/_taxonomy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  65 => 12,  60 => 10,  56 => 9,  51 => 7,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Product/Tab/_taxonomy.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Tab/_taxonomy.html.twig");
    }
}
