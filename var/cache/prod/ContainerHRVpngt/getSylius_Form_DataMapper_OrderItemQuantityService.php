<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.data_mapper.order_item_quantity' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/form/DataMapperInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Form/DataMapper/OrderItemQuantityDataMapper.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/DataMapper/PropertyPathMapper.php';

return $this->services['sylius.form.data_mapper.order_item_quantity'] = new \Sylius\Bundle\OrderBundle\Form\DataMapper\OrderItemQuantityDataMapper(($this->services['sylius.order_item_quantity_modifier.limiting'] ?? $this->load('getSylius_OrderItemQuantityModifier_LimitingService.php')), new \Symfony\Component\Form\Extension\Core\DataMapper\PropertyPathMapper(($this->privates['property_accessor'] ?? $this->load('getPropertyAccessorService.php'))));
