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

/* @SyliusShop/Email/contactRequest.html.twig */
class __TwigTemplate_6255315b509158ab055af7167380273f85bfff9c23ae7f36079dad183cf892ea extends \Twig\Template
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
        return "@SyliusShop/Email/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@SyliusShop/Email/layout.html.twig", "@SyliusShop/Email/contactRequest.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_subject($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.contact_request.subject", [], null, ($context["localeCode"] ?? null)), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div style=\"text-align: left;\">
        <div style=\"color: #1abb9c;\">
            <strong>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.contact_request.message_from", [], null, ($context["localeCode"] ?? null)), "html", null, true);
        echo ":</strong>
        </div>
        <div style=\"margin-bottom: 20px;\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email", [], "any", false, false, false, 12), "html", null, true);
        echo "</div>
        <div style=\"color: #1abb9c;\">
            <strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.contact_request.content", [], null, ($context["localeCode"] ?? null)), "html", null, true);
        echo ":</strong>
        </div>
        <div>";
        // line 16
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "message", [], "any", false, false, false, 16), "html", null, true));
        echo "</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Email/contactRequest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  76 => 14,  71 => 12,  66 => 10,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Email/contactRequest.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Email/contactRequest.html.twig");
    }
}
