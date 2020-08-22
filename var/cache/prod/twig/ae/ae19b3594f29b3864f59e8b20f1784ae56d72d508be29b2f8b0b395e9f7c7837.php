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

/* @BitBagSyliusCmsPlugin/Shop/Page/index.html.twig */
class __TwigTemplate_b06f0516612302c39a356805e4aed6cc490c27aa47e214f840c025a83fa71d21 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["pagination"] = $this->macros["pagination"] = $this->loadTemplate("@SyliusUi/Macro/pagination.html.twig", "@BitBagSyliusCmsPlugin/Shop/Page/index.html.twig", 1)->unwrap();
        // line 2
        $macros["messages"] = $this->macros["messages"] = $this->loadTemplate("SyliusUiBundle:Macro:messages.html.twig", "@BitBagSyliusCmsPlugin/Shop/Page/index.html.twig", 2)->unwrap();
        // line 4
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@BitBagSyliusCmsPlugin/Shop/Page/index.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", [], "any", false, false, false, 7)) > 0)) {
            // line 8
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_section_show", ["code" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 8), "get", [0 => "sectionCode"], "method", false, false, false, 8), "template" => "@BitBagSyliusCmsPlugin/Shop/Page/Index/_section.html.twig"]));
            echo "
    ";
        }
        // line 10
        echo "    <div class=\"ui stackable grid segment\">
        <div class=\"ui sixteen wide column\">

            ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", [], "any", false, false, false, 13)) > 0)) {
            // line 14
            echo "                <div class=\"ui one column stackable grid\" id=\"bitbag-pages\">
                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 16
                echo "                        <div class=\"item bitbag-page\">
                            <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_page_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\">

                                <div class=\"content\">

                                     ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["page"], "image", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "                                        <img class=\"ui left floated image\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["page"], "image", [], "any", false, false, false, 22), "path", [], "any", false, false, false, 22), ((array_key_exists("filter", $context)) ? (_twig_default_filter(($context["filter"] ?? null), "sylius_small")) : ("sylius_small"))), "html", null, true);
                    echo "\" alt=\"\">
                                    ";
                }
                // line 24
                echo "
                                    <h3>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, false, 25), "html", null, true);
                echo "</h3>
                                    <p>
                                        ";
                // line 27
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["page"], "content", [], "any", false, false, false, 27))) > 200)) ? ((twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["page"], "content", [], "any", false, false, false, 27)), 0, 200) . "...")) : (strip_tags(twig_get_attribute($this->env, $this->source, $context["page"], "content", [], "any", false, false, false, 27)))), "html", null, true);
                echo "
                                    </p>
                                </div>
                            </a>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                </div>
                <div class=\"ui hidden divider\"></div>

                ";
            // line 36
            echo twig_call_macro($macros["pagination"], "macro_simple", [twig_get_attribute($this->env, $this->source, ($context["resources"] ?? null), "data", [], "any", false, false, false, 36)], 36, $context, $this->getSourceContext());
            echo "
            ";
        } else {
            // line 38
            echo "                ";
            echo twig_call_macro($macros["messages"], "macro_info", ["sylius.ui.no_results_to_display"], 38, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 40
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Shop/Page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 40,  126 => 38,  121 => 36,  116 => 33,  104 => 27,  99 => 25,  96 => 24,  90 => 22,  88 => 21,  81 => 17,  78 => 16,  74 => 15,  71 => 14,  69 => 13,  64 => 10,  58 => 8,  55 => 7,  51 => 6,  46 => 4,  44 => 2,  42 => 1,  35 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@BitBagSyliusCmsPlugin/Shop/Page/index.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Shop/Page/index.html.twig");
    }
}
