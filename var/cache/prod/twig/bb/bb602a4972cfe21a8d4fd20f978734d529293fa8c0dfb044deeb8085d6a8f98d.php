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

/* SyliusAdminBundle:Customer:_info.html.twig */
class __TwigTemplate_fd7ca4e5befbf2613de0215766b5c4b79b6cfc1cda5a47389fa61cfc31a44a73 extends \Twig\Template
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
        echo "<div class=\"ui fluid card\" id=\"customer\">
    <div class=\"content\">
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_customer_show", ["id" => twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "id", [], "any", false, false, false, 3)]), "html", null, true);
        echo "\" class=\"header sylius-customer-name\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", [], "any", false, false, false, 3), "html", null, true);
        echo "</a>
        <div class=\"meta\">
            <span class=\"date\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.customer_since"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "createdAt", [], "any", false, false, false, 5)), "html", null, true);
        echo ".</span>
        </div>
    </div>
    <div class=\"extra content\">
        <a href=\"mailto:";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "email", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
            <i class=\"envelope icon\"></i>
            ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "email", [], "any", false, false, false, 11), "html", null, true);
        echo "
        </a>
    </div>
    ";
        // line 14
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "phoneNumber", [], "any", false, false, false, 14))) {
            // line 15
            echo "        <div class=\"extra content\">
        <span>
            <i class=\"phone icon\"></i>
            ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "phoneNumber", [], "any", false, false, false, 18), "html", null, true);
            echo "
        </span>
        </div>
    ";
        }
        // line 22
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customerIp", [], "any", true, true, false, 22) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customerIp", [], "any", false, false, false, 22)))) {
            // line 23
            echo "        <div class=\"extra content\" id=\"ipAddress\">
        <span>
            <i class=\"desktop icon\"></i>
            ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customerIp", [], "any", false, false, false, 26), "html", null, true);
            echo "
        </span>
        </div>
    ";
        }
        // line 30
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer:_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  90 => 26,  85 => 23,  82 => 22,  75 => 18,  70 => 15,  68 => 14,  62 => 11,  57 => 9,  48 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Customer:_info.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/_info.html.twig");
    }
}
