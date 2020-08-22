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

/* BitBagSyliusCmsPlugin:Modal:_resourcePreview.html.twig */
class __TwigTemplate_84a24eb49de2db182939e28da0fc228f837c2f71580550509b227b334669935b extends \Twig\Template
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
        echo "<div class=\"ui longer fullscreen modal scrolling\" id=\"bitbag-cms-resource-preview-modal\">
    <div class=\"ui header form\">
        <div class=\"two fields\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_admin_partial_channel_index", ["template" => "@BitBagSyliusCmsPlugin/Modal/_channelSwitch.html.twig"]));
        echo "
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("bitbag_sylius_cms_plugin_admin_partial_locale_index", ["template" => "@BitBagSyliusCmsPlugin/Modal/_localeSwitch.html.twig"]));
        echo "
        </div>
    </div>
    <div class=\"content ui loadable form loading\">
        <iframe frameBorder=\"0\"></iframe>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:Modal:_resourcePreview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "BitBagSyliusCmsPlugin:Modal:_resourcePreview.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Modal/_resourcePreview.html.twig");
    }
}
