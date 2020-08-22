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

/* @SyliusAdmin/Customer/Show/Details/_primary.html.twig */
class __TwigTemplate_517b243276b39b277feee9961af4088364c1fdb8760bd851760b8617896c4949 extends \Twig\Template
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
        echo "<div class=\"content\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_customer_update", ["id" => twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "id", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\" class=\"header\">
        ";
        // line 3
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", [], "any", false, false, false, 3), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest_customer"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest_customer"))), "html", null, true);
        echo "
    </a>
    <div class=\"meta\">
        <span class=\"date\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.customer_since"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "createdAt", [], "any", false, false, false, 6)), "html", null, true);
        echo "</span>
        <br />
        ";
        // line 8
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "group", [], "any", false, false, false, 8))) {
            // line 9
            echo "            <span class=\"group\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.group_membership"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "group", [], "any", false, false, false, 9), "html", null, true);
            echo "</span>
        ";
        }
        // line 11
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Customer/Show/Details/_primary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  59 => 9,  57 => 8,  50 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Customer/Show/Details/_primary.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/Details/_primary.html.twig");
    }
}
