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

/* @Payum/Icon/payum.svg */
class __TwigTemplate_c68ee0e8a930d35c3153caaaae2b89bf4a503a5b002a5e910e0a297b5e47fdd1 extends \Twig\Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 260.45 324.81\">
<path fill=\"#AAAAAA\" d=\"M104.12 214.63c-3.25-8.72 23.56-1.69 27.53-1.78a83.57 83.57 0 0 0 80.82-67.59c10-51.87-31.85-101.14-84.62-99.82-66.92 1.67-86 64.62-80.65 120.3 3.2 33.53 12 66.49 27.57 96.46a220.85 220.85 0 0 0 27.36 41c4.52 5.33 18.3 14.54 19.22 21.57C38.36 309.28.9 209.67 0 135.45-1 50.3 74.78-14.38 159.38 2.77c74.53 15.11 120.62 96.53 93 168.52-13 33.88-42.68 62.32-76.73 74.48-12.74 4.55-41.5 14.06-54 6.13-9.91-6.28-13.33-26.57-17.53-37.27zm-6.43-85.75c-.17 18 14 32.82 31.71 33.13a33.17 33.17 0 0 0 33.46-32.14 32.4 32.4 0 0 0-32.22-33c-18.7-.24-32.79 13.46-32.96 32.01z\"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@Payum/Icon/payum.svg";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Payum/Icon/payum.svg", "/Users/drsilaswiggin/dev/e-commerce/Tartare/vendor/payum/payum-bundle/Resources/views/Icon/payum.svg");
    }
}
