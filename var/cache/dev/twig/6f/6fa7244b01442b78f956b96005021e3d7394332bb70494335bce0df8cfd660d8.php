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

/* SyliusShopBundle:Taxon:_verticalMenu.html.twig */
class __TwigTemplate_61607202a26c5cbc5f4afdb4f1e742065cf0b6045b99663187145749c36b3908 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_verticalMenu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_verticalMenu.html.twig"));

        // line 1
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.product.index.before_vertical_menu", ["taxon" => (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 1, $this->source); })())]);
        echo "

<div class=\"ui fluid vertical menu\">
    <div class=\"header item\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "</div>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 5, $this->source); })()), "children", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 6
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", ["slug" => twig_get_attribute($this->env, $this->source, $context["child"], "slug", [], "any", false, false, false, 6), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "translation", [], "any", false, false, false, 6), "locale", [], "any", false, false, false, 6)]), "html", null, true);
            echo "\" class=\"item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 6), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 8, $this->source); })()), "parent", [], "any", false, false, false, 8)) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 8, $this->source); })()), "parent", [], "any", false, false, false, 8), "isRoot", [], "method", false, false, false, 8))) {
            // line 9
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 9, $this->source); })()), "parent", [], "any", false, false, false, 9), "slug", [], "any", false, false, false, 9), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 9, $this->source); })()), "parent", [], "any", false, false, false, 9), "translation", [], "any", false, false, false, 9), "locale", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\" class=\"item\">
            <i class=\"up arrow icon\"></i> ";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.go_level_up"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 13
        echo "</div>

";
        // line 15
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.product.index.after_vertical_menu", ["taxon" => (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new RuntimeError('Variable "taxon" does not exist.', 15, $this->source); })())]);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Taxon:_verticalMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 15,  82 => 13,  76 => 10,  71 => 9,  68 => 8,  57 => 6,  53 => 5,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ sylius_template_event('sylius.shop.product.index.before_vertical_menu', {'taxon': taxon}) }}

<div class=\"ui fluid vertical menu\">
    <div class=\"header item\">{{ taxon.name }}</div>
    {% for child in taxon.children %}
    <a href=\"{{ path('sylius_shop_product_index', {'slug': child.slug, '_locale': child.translation.locale}) }}\" class=\"item\">{{ child.name }}</a>
    {% endfor %}
    {% if taxon.parent is not empty and not taxon.parent.isRoot() %}
        <a href=\"{{ path('sylius_shop_product_index', {'slug': taxon.parent.slug, '_locale': taxon.parent.translation.locale}) }}\" class=\"item\">
            <i class=\"up arrow icon\"></i> {{ 'sylius.ui.go_level_up'|trans }}
        </a>
    {% endif %}
</div>

{{ sylius_template_event('sylius.shop.product.index.after_vertical_menu', {'taxon': taxon}) }}
", "SyliusShopBundle:Taxon:_verticalMenu.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Taxon/_verticalMenu.html.twig");
    }
}
