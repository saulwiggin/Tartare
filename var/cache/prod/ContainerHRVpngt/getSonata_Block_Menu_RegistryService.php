<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.block.menu.registry' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Menu/MenuRegistryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Menu/MenuRegistry.php';

return $this->services['sonata.block.menu.registry'] = new \Sonata\BlockBundle\Menu\MenuRegistry('');
