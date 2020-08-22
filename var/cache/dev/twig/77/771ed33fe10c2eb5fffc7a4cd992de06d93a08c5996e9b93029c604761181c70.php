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
class __TwigTemplate_2f5547e8309a2a5317d6a0eb0f173fa0d69b89283ca89e3e7021f54a0c8e9fa6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Modal:_resourcePreview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Modal:_resourcePreview.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ui longer fullscreen modal scrolling\" id=\"bitbag-cms-resource-preview-modal\">
    <div class=\"ui header form\">
        <div class=\"two fields\">
            {{ render(url('sylius_admin_partial_channel_index', {'template': '@BitBagSyliusCmsPlugin/Modal/_channelSwitch.html.twig'})) }}
            {{ render(url('bitbag_sylius_cms_plugin_admin_partial_locale_index', {'template': '@BitBagSyliusCmsPlugin/Modal/_localeSwitch.html.twig'})) }}
        </div>
    </div>
    <div class=\"content ui loadable form loading\">
        <iframe frameBorder=\"0\"></iframe>
    </div>
</div>
", "BitBagSyliusCmsPlugin:Modal:_resourcePreview.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/bitbag/cms-plugin/src/Resources/views/Modal/_resourcePreview.html.twig");
    }
}
