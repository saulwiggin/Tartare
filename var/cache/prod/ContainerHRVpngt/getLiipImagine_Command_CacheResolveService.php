<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'liip_imagine.command.cache_resolve' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Command/CacheCommandTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Command/ResolveCacheCommand.php';

$this->privates['liip_imagine.command.cache_resolve'] = $instance = new \Liip\ImagineBundle\Command\ResolveCacheCommand(($this->services['liip_imagine.data.manager'] ?? $this->load('getLiipImagine_Data_ManagerService.php')), ($this->services['liip_imagine.cache.manager'] ?? $this->load('getLiipImagine_Cache_ManagerService.php')), ($this->services['liip_imagine.filter.manager'] ?? $this->load('getLiipImagine_Filter_ManagerService.php')));

$instance->setName('liip:imagine:cache:resolve');

return $instance;
