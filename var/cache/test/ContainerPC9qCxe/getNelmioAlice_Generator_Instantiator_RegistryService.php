<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.generator.instantiator.registry' shared service.

include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/InstantiatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ValueResolverAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/InstantiatorRegistry.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/ChainableInstantiatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/AbstractChainableInstantiator.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/NoCallerMethodCallInstantiator.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/NullConstructorInstantiator.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/NoMethodCallInstantiator.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/StaticFactoryInstantiator.php';

return $this->privates['nelmio_alice.generator.instantiator.registry'] = new \Nelmio\Alice\Generator\Instantiator\InstantiatorRegistry([0 => ($this->privates['nelmio_alice.generator.instantiator.chainable.no_caller_method_instantiator'] ?? ($this->privates['nelmio_alice.generator.instantiator.chainable.no_caller_method_instantiator'] = new \Nelmio\Alice\Generator\Instantiator\Chainable\NoCallerMethodCallInstantiator())), 1 => ($this->privates['nelmio_alice.generator.instantiator.chainable.null_constructor_instantiator'] ?? ($this->privates['nelmio_alice.generator.instantiator.chainable.null_constructor_instantiator'] = new \Nelmio\Alice\Generator\Instantiator\Chainable\NullConstructorInstantiator())), 2 => ($this->privates['nelmio_alice.generator.instantiator.chainable.no_method_call_instantiator'] ?? ($this->privates['nelmio_alice.generator.instantiator.chainable.no_method_call_instantiator'] = new \Nelmio\Alice\Generator\Instantiator\Chainable\NoMethodCallInstantiator())), 3 => ($this->privates['nelmio_alice.generator.instantiator.chainable.static_factory_instantiator'] ?? ($this->privates['nelmio_alice.generator.instantiator.chainable.static_factory_instantiator'] = new \Nelmio\Alice\Generator\Instantiator\Chainable\StaticFactoryInstantiator()))]);
