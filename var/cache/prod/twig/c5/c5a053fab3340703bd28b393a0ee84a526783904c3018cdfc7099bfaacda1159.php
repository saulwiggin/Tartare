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

/* SyliusAdminBundle:Email:orderConfirmation.html.twig */
class __TwigTemplate_99d0733c05c911f59c2a70be058ba0952cbc9c77e154e0c6932fdcc737393759 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'subject' => [$this, 'block_subject'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusAdmin/Email/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@SyliusAdmin/Email/layout.html.twig", "SyliusAdminBundle:Email:orderConfirmation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_subject($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.order_confirmation.subject", [], null, ($context["localeCode"] ?? null)), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $context["url"] = (( !(null === twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "hostname", [], "any", false, false, false, 8))) ? ((("http://" . twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "hostname", [], "any", false, false, false, 8)) . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_order_show", ["tokenValue" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tokenValue", [], "any", false, false, false, 8), "_locale" => ($context["localeCode"] ?? null)]))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_order_show", ["tokenValue" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tokenValue", [], "any", false, false, false, 8), "_locale" => ($context["localeCode"] ?? null)])));
        // line 9
        echo "
    <div style=\"text-align: center; margin-bottom: 30px;\">
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.order_confirmation.your_order_number", [], null, ($context["localeCode"] ?? null)), "html", null, true);
        echo "
        <div style=\"margin: 10px 0;\">
          <span style=\"border: 1px solid #eee; padding: 10px; color: #1abb9c; font-size: 28px;\">
            ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 14), "html", null, true);
        echo "
          </span>
        </div>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.order_confirmation.has_been_successfully_placed", [], null, ($context["localeCode"] ?? null)), "html", null, true);
        echo "
    </div>

    <div style=\"text-align: center; margin-bottom: 30px;\">
        <a href=\"";
        // line 21
        echo ($context["url"] ?? null);
        echo "\" style=\"display: inline-block; text-align: center; background: #1abb9c; padding: 18px 28px; color: #fff; text-decoration: none; border-radius: 3px;\">
            ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.order_confirmation.view_order_or_change_payment_method", [], null, ($context["localeCode"] ?? null)), "html", null, true);
        echo "
        </a>
    </div>

    <div style=\"text-align: center;\">
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.order_confirmation.thank_you", [], null, ($context["localeCode"] ?? null)), "html", null, true);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Email:orderConfirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  92 => 22,  88 => 21,  81 => 17,  75 => 14,  69 => 11,  65 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Email:orderConfirmation.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Email/orderConfirmation.html.twig");
    }
}
