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

/* SyliusAdminBundle:Product/Grid/Action:updatePositions.html.twig */
class __TwigTemplate_62c33cb0c77762255a15a71c79a2818fc02a8dcfff24ca90d5ccaf1a712eb9c5 extends \Twig\Template
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
        echo "<form id=\"sylius-update-product-taxons\" class=\"sylius-update-product-taxons\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_taxons_update_position");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("update-product-taxon-position"), "html", null, true);
        echo "\" />
    <button class=\"ui labeled loadable icon button sylius-save-position\" type=\"submit\">
        <i class=\"icon checkmark\"></i>
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.save_positions"), "html", null, true);
        echo "
    </button>
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Grid/Action:updatePositions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Product/Grid/Action:updatePositions.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Grid/Action/updatePositions.html.twig");
    }
}
