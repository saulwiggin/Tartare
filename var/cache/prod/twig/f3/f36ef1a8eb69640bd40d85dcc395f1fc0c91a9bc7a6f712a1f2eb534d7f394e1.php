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

/* SyliusAdminBundle:Layout:_channelLinks.html.twig */
class __TwigTemplate_89ea8c61888ae342de20124530226f3386eb27591222e0414cb7bb520a0ebf58 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["channels"] ?? null)) > 1)) {
            // line 2
            echo "    <div class=\"ui simple dropdown item\">
        <span>
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_your_store"), "html", null, true);
            echo "
        </span>
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["channels"] ?? null), function ($__channel__) use ($context, $macros) { $context["channel"] = $__channel__; return  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["channel"], "hostname", [], "any", false, false, false, 8)); }));
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
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 9
                echo "            <a href=\"http://";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "hostname", [], "any", false, false, false, 9), "html", null, true);
                echo "\" target=\"_blank\" class=\"item\">
                ";
                // line 10
                $this->loadTemplate("@SyliusAdmin/Common/_channel.html.twig", "SyliusAdminBundle:Layout:_channelLinks.html.twig", 10)->display($context);
                // line 11
                echo "            </a>
            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </div>
    </div>
";
        } elseif ((twig_length_filter($this->env,         // line 15
($context["channels"] ?? null)) == 1)) {
            // line 16
            echo "    ";
            $context["channel"] = twig_first($this->env, ($context["channels"] ?? null));
            // line 17
            echo "
    ";
            // line 18
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "hostname", [], "any", false, false, false, 18))) {
                // line 19
                echo "    <a href=\"http://";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "hostname", [], "any", false, false, false, 19), "html", null, true);
                echo "\" target=\"_blank\" class=\"item\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_your_store"), "html", null, true);
                echo "</a>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Layout:_channelLinks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 19,  101 => 18,  98 => 17,  95 => 16,  93 => 15,  89 => 13,  74 => 11,  72 => 10,  67 => 9,  50 => 8,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:Layout:_channelLinks.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Layout/_channelLinks.html.twig");
    }
}
