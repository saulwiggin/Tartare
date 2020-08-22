<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.grid.filters_applicator' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filtering/FiltersApplicatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filtering/FiltersApplicator.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filtering/FiltersCriteriaResolverInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filtering/FiltersCriteriaResolver.php';

return $this->services['sylius.grid.filters_applicator'] = new \Sylius\Component\Grid\Filtering\FiltersApplicator(($this->services['sylius.registry.grid_filter'] ?? $this->load('getSylius_Registry_GridFilterService.php')), ($this->services['sylius.grid.filters_criteria_resolver'] ?? ($this->services['sylius.grid.filters_criteria_resolver'] = new \Sylius\Component\Grid\Filtering\FiltersCriteriaResolver())));
