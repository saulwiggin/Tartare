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

/* @SyliusAdmin/Customer/_form.html.twig */
class __TwigTemplate_a70ccc7ebb628df67b4e7db04a056e2fe42a7254b6ed9d9cb5014e408e176012 extends \Twig\Template
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
        echo "<div class=\"ui two column stackable grid\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.customer_details"), "html", null, true);
        echo "</h4>
            <div class=\"two fields\">
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstName", [], "any", false, false, false, 7), 'row');
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastName", [], "any", false, false, false, 8), 'row');
        echo "
            </div>
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 10), 'row');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "group", [], "any", false, false, false, 11), 'row');
        echo "
        </div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.extra_information"), "html", null, true);
        echo "</h4>
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "gender", [], "any", false, false, false, 15), 'row');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birthday", [], "any", false, false, false, 16), 'row');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phoneNumber", [], "any", false, false, false, 17), 'row');
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "subscribedToNewsletter", [], "any", false, false, false, 18), 'row');
        echo "
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.account_credentials"), "html", null, true);
        echo "</h4>
            ";
        // line 24
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "user", [], "any", false, false, false, 24)) || (null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "user", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24)))) {
            // line 25
            echo "                <div class=\"field\">
                    <div class=\"ui toggle checkbox\">
                       ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "createUser", [], "any", false, false, false, 27), 'row');
            echo "
                    </div>
                </div>
            ";
        }
        // line 31
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", true, true, false, 31)) {
            // line 32
            echo "                <div id=\"user-form\" ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", false, true, false, 32), "vars", [], "any", false, true, false, 32), "data", [], "any", false, true, false, 32), "id", [], "any", true, true, false, 32)) {
                echo " style=\"display: none\" ";
            }
            echo ">
                    ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", false, false, false, 33), "plainPassword", [], "any", false, false, false, 33), 'row');
            echo "
                    ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", false, false, false, 34), "enabled", [], "any", false, false, false, 34), 'row');
            echo "
                </div>
            ";
        }
        // line 37
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Customer/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 37,  125 => 34,  121 => 33,  114 => 32,  111 => 31,  104 => 27,  100 => 25,  98 => 24,  94 => 23,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  64 => 11,  60 => 10,  55 => 8,  51 => 7,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SyliusAdmin/Customer/_form.html.twig", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/_form.html.twig");
    }
}
