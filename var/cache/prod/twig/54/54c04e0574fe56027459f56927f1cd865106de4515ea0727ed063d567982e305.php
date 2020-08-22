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

/* SyliusShopBundle:Account/AddressBook:index.html.twig */
class __TwigTemplate_cc059d4782cb47efd0f7cb8e4953712776b503d5b81b719de407b7c5db85a45a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'subcontent' => [$this, 'block_subcontent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusShop/Account/AddressBook/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["messages"] = $this->macros["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusShopBundle:Account/AddressBook:index.html.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/AddressBook/layout.html.twig", "SyliusShopBundle:Account/AddressBook:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_subcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"ui stackable two column grid\">
        <div class=\"column\">
            <h1 class=\"ui header\">
                ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.address_book"), "html", null, true);
        echo "
                <div class=\"sub header\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.manage_your_saved_addresses"), "html", null, true);
        echo "</div>
            </h1>

            ";
        // line 13
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.account.address_book.index.after_content_header", ["addresses" => ($context["addresses"] ?? null)]);
        echo "
        </div>
        <div class=\"middle aligned column\">
            <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_create");
        echo "\" class=\"ui right floated blue button\"><i class=\"circle plus icon\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.add_address"), "html", null, true);
        echo "</a>

            ";
        // line 18
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.account.address_book.index.after_add_address_button", ["addresses" => ($context["addresses"] ?? null)]);
        echo "
        </div>
    </div>

    ";
        // line 22
        if ((twig_length_filter($this->env, ($context["addresses"] ?? null)) > 0)) {
            // line 23
            echo "        ";
            $context["default_address"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sylius"] ?? null), "customer", [], "any", false, false, false, 23), "defaultAddress", [], "any", false, false, false, 23);
            // line 24
            echo "        ";
            if ( !(null === ($context["default_address"] ?? null))) {
                // line 25
                echo "            ";
                $this->loadTemplate("@SyliusShop/Account/AddressBook/_defaultAddress.html.twig", "SyliusShopBundle:Account/AddressBook:index.html.twig", 25)->display(twig_array_merge($context, ["address" => ($context["default_address"] ?? null)]));
                // line 26
                echo "        ";
            }
            // line 27
            echo "    <div class=\"ui stackable grid\" id=\"sylius-addresses\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["addresses"]);
            echo ">
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["addresses"] ?? null), function ($__address__) use ($context, $macros) { $context["address"] = $__address__; return ((null === ($context["default_address"] ?? null)) || (twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 28) != twig_get_attribute($this->env, $this->source, ($context["default_address"] ?? null), "id", [], "any", false, false, false, 28))); }));
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
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 29
                echo "            ";
                $this->loadTemplate("@SyliusShop/Account/AddressBook/_item.html.twig", "SyliusShopBundle:Account/AddressBook:index.html.twig", 29)->display($context);
                // line 30
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    </div>
    ";
        } else {
            // line 33
            echo "        ";
            echo twig_call_macro($macros["messages"], "macro_info", ["sylius.ui.you_have_no_addresses_defined"], 33, $context, $this->getSourceContext());
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/AddressBook:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 33,  141 => 31,  127 => 30,  124 => 29,  107 => 28,  102 => 27,  99 => 26,  96 => 25,  93 => 24,  90 => 23,  88 => 22,  81 => 18,  74 => 16,  68 => 13,  62 => 10,  58 => 9,  53 => 6,  49 => 5,  44 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Account/AddressBook:index.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/AddressBook/index.html.twig");
    }
}
