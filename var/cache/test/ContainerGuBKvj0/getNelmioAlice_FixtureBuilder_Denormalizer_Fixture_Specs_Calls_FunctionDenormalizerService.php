<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.function_denormalizer' shared service.

include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/CallsDenormalizerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Calls/FunctionDenormalizer.php';

return $this->privates['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.function_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\FunctionDenormalizer(($this->privates['nelmio_alice.fixture_builder.denormalizer.fixture.specs.arguments.simple_arguments_denormalizer'] ?? $this->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Arguments_SimpleArgumentsDenormalizerService.php')));
