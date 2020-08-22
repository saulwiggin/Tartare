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

/* FrameworkBundle:Form:form_row.html.php */
class __TwigTemplate_8a7766d74ca9562e2800028b1c6ec106ed3b69a58063c6bf2d263ad4cf3132bd extends \Twig\Template
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
        echo "<div>
    <?php \$widgetAttr = empty(\$help) ? [] : ['attr' => ['aria-describedby' => \$id.'_help']]; ?>
    <?php echo \$view['form']->label(\$form); ?>
    <?php echo \$view['form']->errors(\$form); ?>
    <?php echo \$view['form']->widget(\$form, \$widgetAttr); ?>
    <?php echo \$view['form']->help(\$form); ?>
</div>
";
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Form:form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "FrameworkBundle:Form:form_row.html.php", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
