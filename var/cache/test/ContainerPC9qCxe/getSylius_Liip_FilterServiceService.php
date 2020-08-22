<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.liip.filter_service' shared service.

include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Service/FilterService.php';

return $this->services['sylius.liip.filter_service'] = new \Liip\ImagineBundle\Service\FilterService(($this->services['liip_imagine.data.manager'] ?? $this->load('getLiipImagine_Data_ManagerService.php')), ($this->services['liip_imagine.filter.manager'] ?? $this->load('getLiipImagine_Filter_ManagerService.php')), ($this->services['liip_imagine.cache.manager'] ?? $this->getLiipImagine_Cache_ManagerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
