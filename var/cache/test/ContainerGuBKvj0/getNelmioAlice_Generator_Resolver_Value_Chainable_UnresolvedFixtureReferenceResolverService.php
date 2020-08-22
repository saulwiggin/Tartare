<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.generator.resolver.value.chainable.unresolved_fixture_reference_resolver' shared service.

include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ValueResolverInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/ChainableValueResolverInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ObjectGeneratorAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ValueResolverAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/UnresolvedFixtureReferenceIdResolver.php';

return $this->privates['nelmio_alice.generator.resolver.value.chainable.unresolved_fixture_reference_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\UnresolvedFixtureReferenceIdResolver(($this->privates['nelmio_alice.generator.resolver.value.chainable.self_fixture_reference_resolver'] ?? $this->load('getNelmioAlice_Generator_Resolver_Value_Chainable_SelfFixtureReferenceResolverService.php')));
