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

/* BitBagSyliusCmsPlugin:Shop/FrequentlyAskedQuestion:index.html.twig */
class __TwigTemplate_d07fe3473bfc3e2ade3ee76c1ba86676a4ba09db44386f1849a2c4f6219d8ce5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["messages"] = $this->macros["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "BitBagSyliusCmsPlugin:Shop/FrequentlyAskedQuestion:index.html.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "BitBagSyliusCmsPlugin:Shop/FrequentlyAskedQuestion:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"ui stackable grid segment\">
        <div id=\"bitbag-faqs\" class=\"ui sixteen wide column\">
            ";
        // line 8
        if ((twig_length_filter($this->env, ($context["resources"] ?? null)) > 0)) {
            // line 9
            echo "                <div class=\"ui one column stackable grid\">
                    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["resources"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["frequentlyAskedQuestion"]) {
                // line 11
                echo "                        <div class=\"bitbag-frequently-asked-question\">
                            ";
                // line 12
                $this->loadTemplate("@BitBagSyliusCmsPlugin/Shop/FrequentlyAskedQuestion/Index/_show.html.twig", "BitBagSyliusCmsPlugin:Shop/FrequentlyAskedQuestion:index.html.twig", 12)->display($context);
                // line 13
                echo "                        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frequentlyAskedQuestion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                </div>
            ";
        } else {
            // line 17
            echo "                ";
            echo twig_call_macro($macros["messages"], "macro_info", ["sylius.ui.no_results_to_display"], 17, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 19
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:Shop/FrequentlyAskedQuestion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 19,  103 => 17,  99 => 15,  84 => 13,  82 => 12,  79 => 11,  62 => 10,  59 => 9,  57 => 8,  53 => 6,  49 => 5,  44 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "BitBagSyliusCmsPlugin:Shop/FrequentlyAskedQuestion:index.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Shop/FrequentlyAskedQuestion/index.html.twig");
    }
}
