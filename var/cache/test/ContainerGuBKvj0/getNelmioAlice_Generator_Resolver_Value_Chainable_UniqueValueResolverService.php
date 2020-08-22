<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.generator.resolver.value.chainable.unique_value_resolver' shared service.

include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ValueResolverInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/ChainableValueResolverInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ValueResolverAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/UniqueValueResolver.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/UniqueValuesPool.php';

return $this->privates['nelmio_alice.generator.resolver.value.chainable.unique_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\UniqueValueResolver(($this->privates['nelmio_alice.generator.resolver.value.unique_values_pool'] ?? ($this->privates['nelmio_alice.generator.resolver.value.unique_values_pool'] = new \Nelmio\Alice\Generator\Resolver\UniqueValuesPool())), NULL, 150);
