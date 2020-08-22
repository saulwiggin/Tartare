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

/* SyliusUiBundle:Grid/Field:yesNo.html.twig */
class __TwigTemplate_778d93e6a47f832bd98b2f8307d1e7d6bb7fb931047d9f3b110e57b8d53c8128 extends \Twig\Template
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
        $macros["label"] = $this->macros["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusUiBundle:Grid/Field:yesNo.html.twig", 1)->unwrap();
        // line 2
        echo twig_call_macro($macros["label"], "macro_yesNo", [($context["data"] ?? null)], 2, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:yesNo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusUiBundle:Grid/Field:yesNo.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Field/yesNo.html.twig");
    }
}
