<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.extension.type.promotion' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Extension/PromotionTypeExtension.php';

return $this->services['sylius.form.extension.type.promotion'] = new \Sylius\Bundle\CoreBundle\Form\Extension\PromotionTypeExtension();
