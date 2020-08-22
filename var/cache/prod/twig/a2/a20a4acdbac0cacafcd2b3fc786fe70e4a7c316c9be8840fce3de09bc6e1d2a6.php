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

/* @SyliusAdmin/Customer/Show/Statistics/index.html.twig */
class __TwigTemplate_d477705bc2599f979dca7c324045cf216b8c52c48528e1f0334d917ba403f46f extends \Twig\Template
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
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Customer/Show/Statistics/index.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"ui segment\" id=\"statistics\">
    ";
        // line 4
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "perChannelsStatistics", [], "any", false, false, false, 4))) {
            // line 5
            echo "        <div class=\"ui accordion\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "perChannelsStatistics", [], "any", false, false, false, 6));
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
            foreach ($context['_seq'] as $context["_key"] => $context["statistic"]) {
                // line 7
                echo "                ";
                $this->loadTemplate("@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig", "@SyliusAdmin/Customer/Show/Statistics/index.html.twig", 7)->display($context);
                // line 8
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statistic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </div>
    ";
        } else {
            // line 11
            echo "        <h4>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.this_customer_has_not_completed_any_orders_yet"), "html", null, true);
            echo "</h4>
    ";
        }
        // line 13
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Customer/Show/Statistics/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 13,  86 => 11,  82 => 9,  68 => 8,  65 => 7,  48 => 6,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Customer/Show/Statistics/index.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/Statistics/index.html.twig");
    }
}
