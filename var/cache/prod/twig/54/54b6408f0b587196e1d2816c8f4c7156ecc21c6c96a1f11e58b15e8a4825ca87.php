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

/* SyliusAdminBundle:Product/Show:_media.html.twig */
class __TwigTemplate_8ee21802eb1ab58451e2bc7b96d19d9aa409e892218c1caa781da9c4122a6803 extends \Twig\Template
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
        echo "<div id=\"media\" class=\"ui styled fluid accordion\">
    <div class=\"title\">
        <i class=\"dropdown icon\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.media"), "html", null, true);
        echo "
    </div>
    <div class=\"content\">
        ";
        // line 7
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", [], "any", false, false, false, 7)) >= 1)) {
            // line 8
            echo "            <div class=\"ui small images\">
                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", [], "any", false, false, false, 9));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 10
                echo "                    ";
                $context["path"] = (( !(null === twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 10))) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 10), "sylius_admin_product_small_thumbnail")) : ("//placehold.it/200x200"));
                // line 11
                echo "                    <div class=\"ui image\">
                        ";
                // line 12
                if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isConfigurable", [], "method", false, false, false, 12) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, false, 12)) > 0))) {
                    // line 13
                    echo "                            ";
                    $this->loadTemplate("@SyliusAdmin/Product/Show/_imageVariants.html.twig", "SyliusAdminBundle:Product/Show:_media.html.twig", 13)->display($context);
                    // line 14
                    echo "                        ";
                }
                // line 15
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 15), "sylius_admin_product_original"), "html", null, true);
                echo "\" data-lightbox=\"sylius-product-image\">
                            <img src=\"";
                // line 16
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "\" data-large-thumbnail=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 16), "sylius_admin_product_large_thumbnail"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 16), "html", null, true);
                echo "\" />
                        </a>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            </div>
        ";
        }
        // line 22
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Show:_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 22,  111 => 20,  89 => 16,  84 => 15,  81 => 14,  78 => 13,  76 => 12,  73 => 11,  70 => 10,  53 => 9,  50 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Product/Show:_media.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_media.html.twig");
    }
}
