<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.twig.extension.form_test_attribute_array' shared service.

include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/AbstractExtension.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Twig/TestFormAttributeExtension.php';

return $this->services['sylius.twig.extension.form_test_attribute_array'] = new \Sylius\Bundle\UiBundle\Twig\TestFormAttributeExtension('prod');
