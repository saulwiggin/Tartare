<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.generator.hydrator.simple' shared service.

include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/HydratorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ValueResolverAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Hydrator/SimpleHydrator.php';

return $this->privates['nelmio_alice.generator.hydrator.simple'] = new \Nelmio\Alice\Generator\Hydrator\SimpleHydrator(($this->privates['nelmio_alice.generator.hydrator.property.symfony_property_access'] ?? $this->load('getNelmioAlice_Generator_Hydrator_Property_SymfonyPropertyAccessService.php')));
