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

/* @SyliusShop/ProductReview/_single.html.twig */
class __TwigTemplate_516a13fd94ebe33c2126c714d90494bfb029e9e32a44a56832d7b85b4e708dbc extends \Twig\Template
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
        echo "<div class=\"comment\" ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["comment", twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "comment", [], "any", false, false, false, 1)]);
        echo ">
    <div class=\"content\">
        <a class=\"author\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "author", [], "any", false, false, false, 3), "firstName", [], "any", false, false, false, 3), "html", null, true);
        echo "</a>
        <div class=\"metadata\">
            <div class=\"title\"><strong>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</strong></div>
            <div class=\"date\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "createdAt", [], "any", false, false, false, 6)), "html", null, true);
        echo "</div>
            <div class=\"rating\">
                <div class=\"ui star rating\" data-rating=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "rating", [], "any", false, false, false, 8), "html", null, true);
        echo "\" data-max-rating=\"5\" style=\"pointer-events: none;\"></div>
            </div>
        </div>
        <div class=\"text\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "comment", [], "any", false, false, false, 11), "html", null, true);
        echo "</div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/ProductReview/_single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  57 => 8,  52 => 6,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/ProductReview/_single.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/ProductReview/_single.html.twig");
    }
}
