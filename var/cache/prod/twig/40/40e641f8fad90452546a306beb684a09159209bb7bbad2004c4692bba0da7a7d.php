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

/* @SyliusShop/Account/AddressBook/create.html.twig */
class __TwigTemplate_46a0a161e57a60e40f1304dfdb4dd8ccd45f4491c990bb561cfc90cfb6e5b850 extends \Twig\Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@SyliusShop/Form/theme.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/AddressBook/layout.html.twig", "@SyliusShop/Account/AddressBook/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_subcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"ui segment\">
        <h1 class=\"ui dividing header\">
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.address_book"), "html", null, true);
        echo "
            <div class=\"sub header\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.add_address"), "html", null, true);
        echo "</div>
        </h1>

        ";
        // line 12
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.account.address_book.create.after_content_header", ["address" => ($context["address"] ?? null)]);
        echo "

        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_create"), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
        echo "
            ";
        // line 15
        $this->loadTemplate("@SyliusShop/Common/Form/_address.html.twig", "@SyliusShop/Account/AddressBook/create.html.twig", 15)->display(twig_array_merge($context, ["form" => ($context["form"] ?? null)]));
        // line 16
        echo "            <div class=\"ui two column grid\">
                <div class=\"column\">
                    <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_index");
        echo "\" class=\"ui large icon labeled button\">
                        <i class=\"left arrow icon\"></i> ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cancel"), "html", null, true);
        echo "
                    </a>
                </div>
                <div class=\"right aligned column\">
                    <button type=\"submit\" class=\"ui large icon labeled blue button\" ";
        // line 23
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["add-address"]);
        echo ">
                        <i class=\"icon plus\"></i> ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.add"), "html", null, true);
        echo "
                    </button>
                </div>
            </div>

        ";
        // line 29
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.account.address_book.create.form", ["address" => ($context["address"] ?? null)]);
        echo "

        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 31), 'row');
        echo "
        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Account/AddressBook/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 32,  110 => 31,  105 => 29,  97 => 24,  93 => 23,  86 => 19,  82 => 18,  78 => 16,  76 => 15,  72 => 14,  67 => 12,  61 => 9,  57 => 8,  53 => 6,  49 => 5,  44 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Account/AddressBook/create.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/AddressBook/create.html.twig");
    }
}
