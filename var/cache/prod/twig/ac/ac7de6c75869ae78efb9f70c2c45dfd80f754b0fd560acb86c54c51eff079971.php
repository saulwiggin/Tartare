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

/* @SyliusAdmin/Email/shipmentConfirmation.html.twig */
class __TwigTemplate_c886f948c5a68ce4e29352467f9b2ea0eae57f3c887893df2a33b3eb63d50b5d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@SyliusAdmin/Email/layout.html.twig", "@SyliusAdmin/Email/shipmentConfirmation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_subject($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.shipment_confirmation.subject", [], null, ($context["localeCode"] ?? null)), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div style=\"text-align: center;\">
        <div>
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.shipment_confirmation.your_order_with_number", [], null, ($context["localeCode"] ?? null)), "html", null, true);
        echo "
            <span style=\"color: #1abb9c;\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 11), "html", null, true);
        echo "</span>
            ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.shipment_confirmation.has_been_sent_using", [], null, ($context["localeCode"] ?? null)), "html", null, true);
        echo "
            <span style=\"color: #1abb9c;\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "method", [], "any", false, false, false, 13), "html", null, true);
        echo "</span>.
        </div>
        ";
        // line 15
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "tracking", [], "any", false, false, false, 15))) {
            // line 16
            echo "            <div style=\"margin-bottom: 20px;\">
                ";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.shipment_confirmation.you_can_check_its_location", [], null, ($context["localeCode"] ?? null)), "html", null, true);
            echo "
                <span style=\"color: #1abb9c;\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shipment"] ?? null), "tracking", [], "any", false, false, false, 18), "html", null, true);
            echo "</span>
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.shipment_confirmation.tracking_code", [], null, ($context["localeCode"] ?? null)), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 22
        echo "        <div>
            ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.shipment_confirmation.thank_you_for_transaction", [], null, ($context["localeCode"] ?? null)), "html", null, true);
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Email/shipmentConfirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 23,  102 => 22,  96 => 19,  92 => 18,  88 => 17,  85 => 16,  83 => 15,  78 => 13,  74 => 12,  70 => 11,  66 => 10,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Email/shipmentConfirmation.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Email/shipmentConfirmation.html.twig");
    }
}
