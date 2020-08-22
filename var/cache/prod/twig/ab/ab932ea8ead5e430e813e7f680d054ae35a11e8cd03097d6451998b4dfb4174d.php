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

/* @SyliusShop/Account/AddressBook/update.html.twig */
class __TwigTemplate_49b51f1fe83477d0eb32f1106244871eb783434741046300eb920755795f664f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@SyliusShop/Account/AddressBook/layout.html.twig", "@SyliusShop/Account/AddressBook/update.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit_my_address"), "html", null, true);
        echo "</div>
        </h1>

        ";
        // line 12
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.account.address_book.update.after_content_header", ["address" => ($context["address"] ?? null)]);
        echo "

        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_update", ["id" => twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 14)]), "method" => "PUT", "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
        echo "

        ";
        // line 16
        $this->loadTemplate("@SyliusShop/Common/Form/_address.html.twig", "@SyliusShop/Account/AddressBook/update.html.twig", 16)->display(twig_array_merge($context, ["form" => ($context["form"] ?? null)]));
        // line 17
        echo "
        <div class=\"ui two column grid\">
            <div class=\"column\">
                <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_index");
        echo "\" class=\"ui large icon labeled button\">
                    <i class=\"left arrow icon\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cancel"), "html", null, true);
        echo "
                </a>
            </div>
            <div class=\"right aligned column\">
                <button type=\"submit\" class=\"ui large icon labeled blue button\" ";
        // line 25
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["save-changes"]);
        echo ">
                    <i class=\"icon save\"></i> ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.save_changes"), "html", null, true);
        echo "
                </button>
            </div>
        </div>

        ";
        // line 31
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.account.address_book.update.form", ["address" => ($context["address"] ?? null)]);
        echo "

        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 33), 'row');
        echo "
        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Account/AddressBook/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 34,  112 => 33,  107 => 31,  99 => 26,  95 => 25,  88 => 21,  84 => 20,  79 => 17,  77 => 16,  72 => 14,  67 => 12,  61 => 9,  57 => 8,  53 => 6,  49 => 5,  44 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Account/AddressBook/update.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/AddressBook/update.html.twig");
    }
}
