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

/* @SyliusShop/Layout/Footer/Grid/_payment_methods.html.twig */
class __TwigTemplate_9b6699998ff53cbc86b4e264c53282aaacf0814a599c0e5fe6650186279c649b extends \Twig\Template
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
        echo "<div class=\"four wide column\">
    <h4 class=\"ui inverted header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.payment_methods"), "html", null, true);
        echo "</h4>
    <div>
        <i class=\"huge inverted cc mastercard icon\"></i>
        <i class=\"huge inverted cc visa icon\"></i>
        <i class=\"huge inverted cc paypal card icon\"></i>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Layout/Footer/Grid/_payment_methods.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusShop/Layout/Footer/Grid/_payment_methods.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Layout/Footer/Grid/_payment_methods.html.twig");
    }
}
