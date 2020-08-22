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

/* @SyliusAdmin/Product/Tab/_inventory.html.twig */
class __TwigTemplate_d2fbe3306b0f6e15be1063e8e0e33170c8a6e25db5f2597ea19a96b9332db56c extends \Twig\Template
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
        echo "<div class=\"ui tab\" data-tab=\"inventory\">
    <h3 class=\"ui dividing header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.inventory"), "html", null, true);
        echo "</h3>
    <div class=\"ui segment\">
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "simple", [], "any", false, false, false, 4)) {
            // line 5
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "variant", [], "any", false, false, false, 5), "onHand", [], "any", false, false, false, 5), 'row');
            echo "
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "variant", [], "any", false, false, false, 6), "tracked", [], "any", false, false, false, 6), 'row');
            echo "
            ";
            // line 7
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "variant", [], "any", false, false, false, 7), "version", [], "any", false, false, false, 7), 'row');
            echo "
        ";
        }
        // line 9
        echo "    </div>
    
    ";
        // line 11
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render([0 => (("sylius.admin.product." . ($context["action"] ?? null)) . ".tab_inventory"), 1 => "sylius.admin.product.tab_inventory"], ["form" => ($context["form"] ?? null)]);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Tab/_inventory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  61 => 9,  56 => 7,  52 => 6,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Product/Tab/_inventory.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Tab/_inventory.html.twig");
    }
}
