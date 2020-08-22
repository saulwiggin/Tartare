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

/* SyliusAdminBundle:Product:_showInShopButton.html.twig */
class __TwigTemplate_3134907b6c24c7f9da14bcacac946784c909d0ece9ff955cb7b820bd31feb017 extends \Twig\Template
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
        $context["enabledChannels"] = twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "channels", [], "any", false, false, false, 1), function ($__channel__) use ($context, $macros) { $context["channel"] = $__channel__; return (twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "enabled", [], "any", false, false, false, 1) == true); });
        // line 2
        echo "
";
        // line 3
        if ($this->extensions['Sylius\Bundle\CoreBundle\Twig\BundleLoadedCheckerExtension']->isBundleLoaded("SyliusShopBundle")) {
            // line 4
            echo "    ";
            if (( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "enabled", [], "any", false, false, false, 4) || (twig_length_filter($this->env, ($context["enabledChannels"] ?? null)) < 1))) {
                // line 5
                echo "        <a class=\"ui labeled icon button disabled\" href=\"#\">
            <i class=\"angle right icon\"></i>
            ";
                // line 7
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show_product_in_shop_page"), "html", null, true);
                echo "
        </a>
    ";
            } elseif ((twig_length_filter($this->env,             // line 9
($context["enabledChannels"] ?? null)) > 1)) {
                // line 10
                echo "        <div class=\"ui floating dropdown labeled icon button\">
            <i class=\"share alternate icon\"></i>
            <span class=\"text\">
                ";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show_product_in_shop_page"), "html", null, true);
                echo "
            </span>
            <div class=\"menu\">
                <div class=\"scrolling menu\">
                    ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["enabledChannels"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                    // line 18
                    echo "                        ";
                    $context["url"] = (( !(null === twig_get_attribute($this->env, $this->source, $context["channel"], "hostname", [], "any", false, false, false, 18))) ? ((("http://" . twig_get_attribute($this->env, $this->source, $context["channel"], "hostname", [], "any", false, false, false, 18)) . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", ["slug" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", [], "any", false, false, false, 18), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channel"], "defaultLocale", [], "any", false, false, false, 18), "code", [], "any", false, false, false, 18)]))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_product_show", ["slug" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", [], "any", false, false, false, 18), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channel"], "defaultLocale", [], "any", false, false, false, 18), "code", [], "any", false, false, false, 18)])));
                    // line 19
                    echo "                        <a href=\"";
                    echo ($context["url"] ?? null);
                    echo "\" class=\"item\">
                            <i class=\"angle right icon\"></i>
                            ";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show_in"), "html", null, true);
                    echo "
                            ";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "name", [], "any", false, false, false, 22), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "code", [], "any", false, false, false, 22), "html", null, true);
                    echo ")
                        </a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                </div>
            </div>
        </div>
    ";
            } else {
                // line 29
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["enabledChannels"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                    // line 30
                    echo "            ";
                    $context["url"] = (( !(null === twig_get_attribute($this->env, $this->source, $context["channel"], "hostname", [], "any", false, false, false, 30))) ? ((("http://" . twig_get_attribute($this->env, $this->source, $context["channel"], "hostname", [], "any", false, false, false, 30)) . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", ["slug" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", [], "any", false, false, false, 30), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channel"], "defaultLocale", [], "any", false, false, false, 30), "code", [], "any", false, false, false, 30)]))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_product_show", ["slug" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", [], "any", false, false, false, 30), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channel"], "defaultLocale", [], "any", false, false, false, 30), "code", [], "any", false, false, false, 30)])));
                    // line 31
                    echo "            <a class=\"ui labeled icon button\" href=\"";
                    echo ($context["url"] ?? null);
                    echo "\">
                <i class=\"angle right icon\"></i>
                ";
                    // line 33
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show_product_in_shop_page"), "html", null, true);
                    echo "
            </a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:_showInShopButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 36,  118 => 33,  112 => 31,  109 => 30,  104 => 29,  98 => 25,  87 => 22,  83 => 21,  77 => 19,  74 => 18,  70 => 17,  63 => 13,  58 => 10,  56 => 9,  51 => 7,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Product:_showInShopButton.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/_showInShopButton.html.twig");
    }
}
