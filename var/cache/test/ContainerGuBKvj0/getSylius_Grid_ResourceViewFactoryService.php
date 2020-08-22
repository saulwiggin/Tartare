<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.grid.resource_view_factory' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Grid/View/ResourceGridViewFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Grid/View/ResourceGridViewFactory.php';

return $this->services['sylius.grid.resource_view_factory'] = new \Sylius\Bundle\ResourceBundle\Grid\View\ResourceGridViewFactory(($this->services['sylius.grid.data_provider'] ?? $this->load('getSylius_Grid_DataProviderService.php')), ($this->privates['sylius.resource_controller.parameters_parser'] ?? $this->load('getSylius_ResourceController_ParametersParserService.php')));
