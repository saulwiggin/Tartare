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

/* @SyliusAdmin/Customer/Show/Details/_email.html.twig */
class __TwigTemplate_1d467aaec37c9c66fde88ccdac63f1955cd1938983d85ed5eca7b06e82b9028e extends \Twig\Template
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
        $macros["buttons"] = $this->macros["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusAdmin/Customer/Show/Details/_email.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"content\">
    <div id=\"subscribed-to-newsletter\">
        <i class=\"";
        // line 5
        echo ((twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "subscribedToNewsletter", [], "any", false, false, false, 5)) ? ("green checkmark") : ("red remove"));
        echo " icon\"></i>
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.subscribed_to_newsletter"), "html", null, true);
        echo "
    </div>
    ";
        // line 8
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "user", [], "any", false, false, false, 8))) {
            // line 9
            echo "        ";
            $context["user"] = twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "user", [], "any", false, false, false, 9);
            // line 10
            echo "        <div id=\"verified-email\">
            <i class=\"";
            // line 11
            echo ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "verified", [], "any", false, false, false, 11)) ? ("green checkmark") : ("red remove"));
            echo " icon\"></i>
            ";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.email_verified"), "html", null, true);
            echo "
        </div>
        <br />
        ";
            // line 15
            if (call_user_func_array($this->env->getFunction('is_shop_enabled')->getCallable(), [])) {
                // line 16
                echo "            ";
                echo twig_call_macro($macros["buttons"], "macro_default", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_impersonate_user", ["username" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "emailCanonical", [], "any", false, false, false, 16)]), "sylius.ui.impersonate", "impersonate", "unhide", "blue"], 16, $context, $this->getSourceContext());
                echo "
        ";
            }
            // line 18
            echo "    ";
        }
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Customer/Show/Details/_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  79 => 18,  73 => 16,  71 => 15,  65 => 12,  61 => 11,  58 => 10,  55 => 9,  53 => 8,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Customer/Show/Details/_email.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/Details/_email.html.twig");
    }
}
