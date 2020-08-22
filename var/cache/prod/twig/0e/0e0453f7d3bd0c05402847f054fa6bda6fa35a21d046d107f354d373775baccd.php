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

/* SyliusShopBundle:Common/Macro:money.html.twig */
class __TwigTemplate_cadb6bcc8d0e1fb5c2ce4a992c036fdea6d4928f826593fbadb618169bb64721 extends \Twig\Template
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
    }

    // line 1
    public function macro_format($__amount__ = null, $__currency_code__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "amount" => $__amount__,
            "currency_code" => $__currency_code__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_format_money')->getCallable(), [($context["amount"] ?? null), ($context["currency_code"] ?? null), twig_get_attribute($this->env, $this->source, ($context["sylius"] ?? null), "localeCode", [], "any", false, false, false, 2)]), "html", null, true);

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 5
    public function macro_convertAndFormat($__amount__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "amount" => $__amount__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 6
            $macros["__internal_bfa794a13f687ad2094ea8d14701ab21038e6bbbfe7527ec2c7bbcae048d6f10"] = $this;
            // line 8
            echo twig_call_macro($macros["__internal_bfa794a13f687ad2094ea8d14701ab21038e6bbbfe7527ec2c7bbcae048d6f10"], "macro_format", [call_user_func_array($this->env->getFilter('sylius_convert_money')->getCallable(), [($context["amount"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sylius"] ?? null), "channel", [], "any", false, false, false, 8), "baseCurrency", [], "any", false, false, false, 8), "code", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, ($context["sylius"] ?? null), "currencyCode", [], "any", false, false, false, 8)]), twig_get_attribute($this->env, $this->source, ($context["sylius"] ?? null), "currencyCode", [], "any", false, false, false, 8)], 8, $context, $this->getSourceContext());

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 11
    public function macro_calculatePrice($__variant__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "variant" => $__variant__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 12
            $macros["__internal_1040d758fcc3022b61016f47d1b51cfecb06cfbf5d05569e057706187e1fec0c"] = $this;
            // line 14
            echo twig_call_macro($macros["__internal_1040d758fcc3022b61016f47d1b51cfecb06cfbf5d05569e057706187e1fec0c"], "macro_convertAndFormat", [call_user_func_array($this->env->getFilter('sylius_calculate_price')->getCallable(), [($context["variant"] ?? null), ["channel" => twig_get_attribute($this->env, $this->source, ($context["sylius"] ?? null), "channel", [], "any", false, false, false, 14)]])], 14, $context, $this->getSourceContext());

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Macro:money.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 14,  99 => 12,  86 => 11,  77 => 8,  75 => 6,  62 => 5,  53 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusShopBundle:Common/Macro:money.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Macro/money.html.twig");
    }
}
