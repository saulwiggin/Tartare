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

/* @SyliusShop/Product/_starRating.html.twig */
class __TwigTemplate_7a56378ec9365035bed894c3f74a648958e4dae5c1147ee906f0f8168f94469a extends \Twig\Template
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
        echo "<div id=\"average-rating\" class=\"ui star large rating\" data-rating=\"";
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "averageRating", [], "any", false, false, false, 1)), "html", null, true);
        echo "\" data-max-rating=\"5\" data-average-rating=\"";
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "averageRating", [], "any", false, false, false, 1), 2), "html", null, true);
        echo "\" style=\"pointer-events: none;\" ";
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["average-rating", twig_round(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "averageRating", [], "any", false, false, false, 1), 2)]);
        echo "></div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/_starRating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Product/_starRating.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/_starRating.html.twig");
    }
}
