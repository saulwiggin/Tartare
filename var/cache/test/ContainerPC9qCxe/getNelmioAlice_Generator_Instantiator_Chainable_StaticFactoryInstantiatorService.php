<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.generator.instantiator.chainable.static_factory_instantiator' shared service.

include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/InstantiatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/ChainableInstantiatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/AbstractChainableInstantiator.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/StaticFactoryInstantiator.php';

return $this->privates['nelmio_alice.generator.instantiator.chainable.static_factory_instantiator'] = new \Nelmio\Alice\Generator\Instantiator\Chainable\StaticFactoryInstantiator();
