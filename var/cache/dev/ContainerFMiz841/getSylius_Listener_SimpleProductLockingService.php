<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.listener.simple_product_locking' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/EventListener/SimpleProductLockingListener.php';

return $this->services['sylius.listener.simple_product_locking'] = new \Sylius\Bundle\CoreBundle\EventListener\SimpleProductLockingListener(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['sylius.product_variant_resolver.default'] ?? ($this->services['sylius.product_variant_resolver.default'] = new \Sylius\Component\Product\Resolver\DefaultProductVariantResolver())));
