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

/* SyliusAdminBundle:Order/History:_address.html.twig */
class __TwigTemplate_17106597bbbf59671b635dd5bd10d329160ac5dd989f1fe786d6447fbcb79706 extends \Twig\Template
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
        echo "<div class=\"column\">
    <h4 class=\"ui top attached styled header\">
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("sylius.ui." . ($context["type"] ?? null)) . "_address")), "html", null, true);
        echo "
    </h4>
    <div class=\"ui attached segment\" id=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "-address-changes\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_admin_partial_address_log_entry_index", ["id" => twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 6)]));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/History:_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Order/History:_address.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/History/_address.html.twig");
    }
}
