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

/* @SyliusAdmin/Crud/Block/_legacySonataEvent.html.twig */
class __TwigTemplate_3930b212dd3e15b4aec03e62102f6d5560dae983d3d1dea43ec61bb45c60a5e1 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), [((((twig_get_attribute($this->env, $this->source,         // line 2
($context["metadata"] ?? null), "applicationName", [], "any", false, false, false, 2) . ".admin.") . twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "name", [], "any", false, false, false, 2)) . ".") . ($context["postfix"] ?? null)), twig_array_filter($this->env,         // line 3
$context, function ($__value__, $__key__) use ($context, $macros) { $context["value"] = $__value__; $context["key"] = $__key__; return twig_in_filter(($context["key"] ?? null), $this->extensions['Sylius\Bundle\UiBundle\Twig\LegacySonataBlockExtension']->getWhitelistedVariables()); })]);
        // line 4
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/Block/_legacySonataEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 4,  39 => 3,  38 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Crud/Block/_legacySonataEvent.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/Block/_legacySonataEvent.html.twig");
    }
}
