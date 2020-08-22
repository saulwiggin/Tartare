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

/* @SyliusAdmin/Product/Show/_variantContent.html.twig */
class __TwigTemplate_ae360b2f4db8c72b20da4bcf9a27ea22c74304c60ea4a21dccd8cea0b44ac6eb extends \Twig\Template
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
        echo "<tr class=\"variants-accordion__content item-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 1), "html", null, true);
        echo "\" style=\"display: none; background: rgba(0,0,0,.04);\">
    <td colspan=\"8\" style=\"padding: 20px\">
        <div class=\"ui grid\">
            <div class=\"doubling two column row\">
                <div class=\"column\">
                    ";
        // line 6
        $this->loadTemplate("@SyliusAdmin/Product/Show/_variantContentShipping.html.twig", "@SyliusAdmin/Product/Show/_variantContent.html.twig", 6)->display($context);
        // line 7
        echo "                </div>
                <div class=\"column\">
                    ";
        // line 9
        $this->loadTemplate("@SyliusAdmin/Product/Show/_variantContentPricing.html.twig", "@SyliusAdmin/Product/Show/_variantContent.html.twig", 9)->display($context);
        // line 10
        echo "                </div>
            </div>
        </div>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Show/_variantContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  52 => 9,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Product/Show/_variantContent.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_variantContent.html.twig");
    }
}
