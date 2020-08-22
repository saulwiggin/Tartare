<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.registry.grid_field' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/registry/src/ServiceRegistryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/registry/src/ServiceRegistry.php';

$this->services['sylius.registry.grid_field'] = $instance = new \Sylius\Component\Registry\ServiceRegistry('Sylius\\Component\\Grid\\FieldTypes\\FieldTypeInterface', 'grid field');

$instance->register('datetime', ($this->services['sylius.grid_field.datetime'] ?? $this->load('getSylius_GridField_DatetimeService.php')));
$instance->register('string', ($this->services['sylius.grid_field.string'] ?? $this->load('getSylius_GridField_StringService.php')));
$instance->register('twig', ($this->services['sylius.grid_field.twig'] ?? $this->load('getSylius_GridField_TwigService.php')));

return $instance;
