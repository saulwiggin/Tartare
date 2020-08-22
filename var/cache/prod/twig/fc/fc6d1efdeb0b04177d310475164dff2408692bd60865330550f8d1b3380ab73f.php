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

/* SyliusShopBundle:Product:show.html.twig */
class __TwigTemplate_a4b253ced34e017f9e9501348558be9874612dcb1fe8c0f8991e4a10cf4b7a60 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Product:show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $this->loadTemplate("@SyliusShop/Product/Show/_breadcrumb.html.twig", "SyliusShopBundle:Product:show.html.twig", 4)->display($context);
        // line 5
        echo "<div class=\"ui hidden divider\"></div>

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        ";
        // line 9
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.product.show.left_sidebar", $context);
        echo "
    </div>
    <div class=\"column\">
        ";
        // line 12
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.product.show.right_sidebar", $context);
        echo "
    </div>
</div>

";
        // line 16
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.product.show.content", $context);
        echo "
";
    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script type=\"text/javascript\">
    lightbox.option({
        'albumLabel': '";
        // line 24
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.lightbox.image_album_label"), "js"), "html", null, true);
        echo "'
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  82 => 20,  78 => 19,  72 => 16,  65 => 12,  59 => 9,  53 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Product:show.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/show.html.twig");
    }
}
