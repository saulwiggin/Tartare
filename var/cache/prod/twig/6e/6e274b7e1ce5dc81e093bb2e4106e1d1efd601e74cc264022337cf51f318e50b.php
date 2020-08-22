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

/* SyliusAdminBundle:ProductVariant/Generate:_content.html.twig */
class __TwigTemplate_b1a6ba5fd6fbf289456ced6b2748c398cab55843bd33f4c1a6fea934a4513275 extends \Twig\Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@SyliusAdmin/Form/theme.html.twig"], true);
        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_variant_generate", ["productId" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 3)]), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
        echo "
<div class=\"ui segment\">
    ";
        // line 5
        $this->loadTemplate("@SyliusAdmin/ProductVariant/Generate/_form.html.twig", "SyliusAdminBundle:ProductVariant/Generate:_content.html.twig", 5)->display($context);
        // line 6
        echo "    <div class=\"ui basic segment\">
        <div class=\"ui buttons\">
            <button class=\"ui labeled icon primary button\" type=\"submit\" ";
        // line 8
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "variants", [], "any", false, false, false, 8), "children", [], "any", false, false, false, 8))) {
            echo "disabled";
        }
        echo "><i class=\"random icon\"></i>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.generate"), "html", null, true);
        echo "</button>
            ";
        // line 9
        $this->loadTemplate("@SyliusUi/Form/Buttons/_cancel.html.twig", "SyliusAdminBundle:ProductVariant/Generate:_content.html.twig", 9)->display(twig_array_merge($context, ["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "getRouteName", [0 => "index"], "method", false, false, false, 9), ["productId" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 9)])]));
        // line 10
        echo "        </div>
    </div>
    ";
        // line 12
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.product_variant.generate.form", ["resource" => ($context["resource"] ?? null)]);
        echo "
</div>
";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 14), 'row');
        echo "
";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Generate:_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  72 => 14,  67 => 12,  63 => 10,  61 => 9,  53 => 8,  49 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:ProductVariant/Generate:_content.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Generate/_content.html.twig");
    }
}
