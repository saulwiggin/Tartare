<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.checkout_shipment' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Type/Checkout/ShipmentType.php';

return $this->services['sylius.form.type.checkout_shipment'] = new \Sylius\Bundle\CoreBundle\Form\Type\Checkout\ShipmentType('App\\Entity\\Shipping\\Shipment', $this->parameters['sylius.form.type.checkout_shipment.validation_groups']);
