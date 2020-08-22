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

/* SyliusAdminBundle:Dashboard:_header.html.twig */
class __TwigTemplate_1f2776151a3455520792b4fd4ace51a10a6b475633008c1ab1db66f78bbb9914 extends \Twig\Template
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
        $macros["headers"] = $this->macros["headers"] = $this->loadTemplate("@SyliusUi/Macro/headers.html.twig", "SyliusAdminBundle:Dashboard:_header.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"ui stackable grid\">
    <div class=\"twelve wide column\">
        ";
        // line 5
        echo twig_call_macro($macros["headers"], "macro_default", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.dashboard"), "home", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.overview_of_your_store")], 5, $context, $this->getSourceContext());
        echo "

        ";
        // line 7
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.dashboard.header.content", ["channel" => ($context["channel"] ?? null), "statistics" => ($context["statistics"] ?? null)]);
        echo "
    </div>
    <div class=\"four wide middle aligned column\">
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_admin_partial_channel_index", ["template" => "@SyliusAdmin/Dashboard/_channelSwitch.html.twig", "channel" => twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "code", [], "any", false, false, false, 10)]));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Dashboard:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  49 => 7,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Dashboard:_header.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_header.html.twig");
    }
}
