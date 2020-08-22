<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.shipping_method' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Form/Type/ShippingMethodType.php';

return $this->services['sylius.form.type.shipping_method'] = new \Sylius\Bundle\ShippingBundle\Form\Type\ShippingMethodType('App\\Entity\\Shipping\\ShippingMethod', $this->parameters['sylius.form.type.shipping_method.validation_groups'], 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodTranslationType', ($this->services['sylius.registry.shipping_calculator'] ?? $this->load('getSylius_Registry_ShippingCalculatorService.php')), ($this->services['sylius.form_registry.shipping_calculator'] ?? $this->load('getSylius_FormRegistry_ShippingCalculatorService.php')));
