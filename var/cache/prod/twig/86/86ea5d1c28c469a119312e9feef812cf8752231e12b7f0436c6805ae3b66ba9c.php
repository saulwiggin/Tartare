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

/* SyliusShopBundle:Email:verification.html.twig */
class __TwigTemplate_c1baa6204f360bf9f62fce12a8a32b19f363f3df00e3c16e787aad7da94c60f3 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@SyliusShop/Email/layout.html.twig", "SyliusShopBundle:Email:verification.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_subject($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.verification_token.subject", [], null, ($context["localeCode"] ?? null)), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $context["url"] = (( !(null === twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "hostname", [], "any", false, false, false, 8))) ? ((("http://" . twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "hostname", [], "any", false, false, false, 8)) . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_user_verification", ["token" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "emailVerificationToken", [], "any", false, false, false, 8)]))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_user_verification", ["token" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "emailVerificationToken", [], "any", false, false, false, 8)])));
        // line 9
        echo "
    <div style=\"text-align: center; margin-bottom: 30px;\">
        <div style=\"font-size: 24px;\">
            ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.verification_token.hello", [], null, ($context["localeCode"] ?? null)), "html", null, true);
        echo " <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 12), "html", null, true);
        echo "</strong><br>
        </div>
        ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.verification_token.to_verify_your_email_address", [], null, ($context["localeCode"] ?? null)), "html", null, true);
        echo ":
    </div>

    <div style=\"text-align: center;\">
        <a href=\"";
        // line 18
        echo ($context["url"] ?? null);
        echo "\" style=\"display: inline-block; text-align: center; background: #1abb9c; padding: 18px 28px; color: #fff; text-decoration: none; border-radius: 3px;\">
            ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.verification_token.verify_your_email_address", [], null, ($context["localeCode"] ?? null)), "html", null, true);
        echo "
        </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Email:verification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  84 => 18,  77 => 14,  70 => 12,  65 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Email:verification.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Email/verification.html.twig");
    }
}
