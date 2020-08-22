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

/* SyliusAdminBundle:Order/Show:_payments.html.twig */
class __TwigTemplate_ceab9816361ebd5693351c670e8397309faa21d89782e1a9d4fa72f16edd825c extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "hasPayments", [], "any", false, false, false, 1)) {
            // line 2
            echo "<div class=\"ui segment\" id=\"payment-state\">
    ";
            // line 3
            $this->loadTemplate((("@SyliusAdmin/Order/Label/PaymentState/" . twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "paymentState", [], "any", false, false, false, 3)) . ".html.twig"), "SyliusAdminBundle:Order/Show:_payments.html.twig", 3)->display(twig_array_merge($context, ["value" => ("sylius.ui." . twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "paymentState", [], "any", false, false, false, 3)), "attached" => true]));
            // line 4
            echo "    <h3 class=\"ui dividing header\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.payments"), "html", null, true);
            echo "</h3>
    <div class=\"ui relaxed divided list\" id=\"sylius-payments\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payments", [], "any", false, false, false, 6));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                // line 7
                echo "            ";
                $this->loadTemplate("@SyliusAdmin/Order/Show/_payment.html.twig", "SyliusAdminBundle:Order/Show:_payments.html.twig", 7)->display($context);
                // line 8
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "    </div>
</div>
";
        } else {
            // line 12
            echo "<div class=\"ui segment center aligned\" id=\"no-payments\">
    <span class=\"ui grey large label\">
        <i class=\"ban icon\"></i> ";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_payments"), "html", null, true);
            echo "
    </span>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_payments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 14,  89 => 12,  84 => 9,  70 => 8,  67 => 7,  50 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Order/Show:_payments.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_payments.html.twig");
    }
}
