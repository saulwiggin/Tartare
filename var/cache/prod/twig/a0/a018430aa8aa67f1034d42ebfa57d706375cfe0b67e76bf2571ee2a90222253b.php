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

/* SyliusAdminBundle:Product/Show:_moreDetails.html.twig */
class __TwigTemplate_269f7cf67d740daa908fc97dcb33a32d5345f79d4be49fe2c17696638cb2b7d2 extends \Twig\Template
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
        echo "<div id=\"more-details\" class=\"ui styled fluid accordion\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translations", [], "any", false, false, false, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 3
            echo "        <div class=\"title\">
            <i class=\"dropdown icon\"></i>
            <i class=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["translation"], "locale", [], "any", false, false, false, 5),  -2)), "html", null, true);
            echo " flag\"></i>
            ";
            // line 6
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["translation"], "locale", [], "any", false, false, false, 6)]), "html", null, true);
            echo "
        </div>
        <div class=\"ui content\">
            <table class=\"ui very basic celled table\">
                <tbody>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.name"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["translation"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.slug"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["translation"], "slug", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.description"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["translation"], "description", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.meta_keywords"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["translation"], "metaKeywords", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.meta_description"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["translation"], "metaDescription", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.short_description"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["translation"], "shortDescription", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                </tr>
                </tbody>
            </table>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Show:_moreDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 39,  115 => 33,  111 => 32,  105 => 29,  101 => 28,  95 => 25,  91 => 24,  85 => 21,  81 => 20,  75 => 17,  71 => 16,  65 => 13,  61 => 12,  52 => 6,  48 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Product/Show:_moreDetails.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_moreDetails.html.twig");
    }
}
