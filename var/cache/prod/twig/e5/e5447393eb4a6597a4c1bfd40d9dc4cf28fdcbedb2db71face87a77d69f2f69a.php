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

/* SyliusAdminBundle:AdminUser:_avatarImage.html.twig */
class __TwigTemplate_3514994f1766eab95a0e4c16a4e797dce9e9a640ee5d725f66ff316034cae800 extends \Twig\Template
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
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1), "avatar", [], "any", false, false, false, 1)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1), "avatar", [], "any", false, false, false, 1), "path", [], "any", false, false, false, 1)))) {
            // line 2
            echo "    ";
            $context["path"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 2), "avatar", [], "any", false, false, false, 2), "path", [], "any", false, false, false, 2), "sylius_admin_admin_user_avatar_thumbnail");
        } else {
            // line 4
            echo "    ";
            $context["path"] = "//placehold.it/50x50";
        }
        // line 6
        echo "
<img style=\"margin-right: 10px;\" class=\"ui avatar image\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:AdminUser:_avatarImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  47 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SyliusAdminBundle:AdminUser:_avatarImage.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/AdminUser/_avatarImage.html.twig");
    }
}
