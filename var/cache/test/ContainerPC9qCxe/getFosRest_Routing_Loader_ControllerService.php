<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_rest.routing.loader.controller' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/Loader/RestRouteLoader.php';

return $this->privates['fos_rest.routing.loader.controller'] = new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, ($this->privates['file_locator'] ?? $this->load('getFileLocatorService.php')), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), ($this->privates['fos_rest.routing.loader.reader.controller'] ?? $this->load('getFosRest_Routing_Loader_Reader_ControllerService.php')), NULL);
