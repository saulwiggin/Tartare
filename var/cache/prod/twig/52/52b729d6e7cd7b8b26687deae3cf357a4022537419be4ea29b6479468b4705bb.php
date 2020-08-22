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

/* SyliusAdminBundle:Order/Show:_resendEmail.html.twig */
class __TwigTemplate_c24ad178f4818a4c769fbbeeda82d8b24dd1f3fd9b064e5a325b01ae853552dc extends \Twig\Template
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
        echo "<div class=\"ui segment\">
    ";
        // line 2
        $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_resend_confirmation_email", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 2), "_csrf_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 2))]);
        // line 3
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "\" class=\"ui icon labeled tiny fluid button\" ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["resend-order-confirmation-email"]);
        echo ">
        <i class=\"send icon\"></i> ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.resend_the_order_confirmation_email"), "html", null, true);
        echo "
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_resendEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Order/Show:_resendEmail.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_resendEmail.html.twig");
    }
}
