<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.attribute_type.select' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Attribute/AttributeType/AttributeTypeInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Attribute/AttributeType/SelectAttributeType.php';

return $this->services['sylius.attribute_type.select'] = new \Sylius\Component\Attribute\AttributeType\SelectAttributeType();
