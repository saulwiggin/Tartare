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

/* SyliusAdminBundle:Promotion/Grid/Field:codeExclusiveAndCouponBased.html.twig */
class __TwigTemplate_35f8728d6db01a07be3004dc95cd1797773d3ee2e56316aa224d97b97646a613 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "exclusive", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <div class=\"ui ribbon orange label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.exclusive"), "html", null, true);
            echo "</div>
    <br />
";
        }
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "couponBased", [], "any", false, false, false, 5)) {
            // line 6
            echo "    <div class=\"ui ribbon blue label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.coupon_based"), "html", null, true);
            echo "</div>
    <br />
";
        }
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "code", [], "any", false, false, false, 9), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Promotion/Grid/Field:codeExclusiveAndCouponBased.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  48 => 6,  46 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Promotion/Grid/Field:codeExclusiveAndCouponBased.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Promotion/Grid/Field/codeExclusiveAndCouponBased.html.twig");
    }
}
