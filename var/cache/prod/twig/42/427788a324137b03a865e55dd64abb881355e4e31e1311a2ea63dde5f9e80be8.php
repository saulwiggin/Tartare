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

/* SyliusAdminBundle:Taxon:_media.html.twig */
class __TwigTemplate_1cd89785c921cc25b143e00d33d28470da3a16621f21ae56b3199f3f0f040389 extends \Twig\Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@SyliusUi/Form/imagesTheme.html.twig"], true);
        // line 2
        echo "
<div class=\"ui segment\">
    <h3 class=\"ui dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.media"), "html", null, true);
        echo "</h3>
    <br>
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "images", [], "any", false, false, false, 6), 'row', ["label" => false]);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Taxon:_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Taxon:_media.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/_media.html.twig");
    }
}
