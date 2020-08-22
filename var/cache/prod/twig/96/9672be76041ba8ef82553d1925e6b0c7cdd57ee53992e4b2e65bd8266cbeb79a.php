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

/* SyliusAdminBundle:Form:imagesTheme.html.twig */
class __TwigTemplate_cb4295629dccca1a6865a0948447fc31e1629ff1147a58b3a070fa6a327fe9e0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'sylius_product_image_widget' => [$this, 'block_sylius_product_image_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusUi/Form/imagesTheme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@SyliusUi/Form/imagesTheme.html.twig", "SyliusAdminBundle:Form:imagesTheme.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sylius_product_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayBlock("sylius_image_widget", $context, $blocks);
        echo "

    ";
        // line 6
        ob_start(function () { return ''; });
        // line 7
        echo "        ";
        if ((( !(null === twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 7)) && (0 != twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 7)))) &&  !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "simple", [], "any", false, false, false, 7))) {
            // line 8
            echo "            <br/>
            ";
            // line 9
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "productVariants", [], "any", false, false, false, 9), 'row', ["remote_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_product_variants_by_phrase", ["productCode" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "code", [], "any", false, false, false, 9)]), "remote_criteria_type" => "contains", "remote_criteria_name" => "phrase", "load_edit_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_product_variants_by_codes", ["productCode" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "code", [], "any", false, false, false, 9)])]);
            echo "
        ";
        }
        // line 11
        echo "    ";
        $___internal_89b76ff118bc035bb5eb6a929769b24eee4997058a2db431a562ca5a09c1ed6a_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 6
        echo twig_spaceless($___internal_89b76ff118bc035bb5eb6a929769b24eee4997058a2db431a562ca5a09c1ed6a_);
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Form:imagesTheme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  69 => 11,  64 => 9,  61 => 8,  58 => 7,  56 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Form:imagesTheme.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Form/imagesTheme.html.twig");
    }
}
