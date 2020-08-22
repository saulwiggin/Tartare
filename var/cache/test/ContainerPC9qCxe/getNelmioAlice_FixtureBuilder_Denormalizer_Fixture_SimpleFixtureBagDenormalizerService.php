<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.denormalizer.fixture.simple_fixture_bag_denormalizer' shared service.

include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FixtureBagDenormalizerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SimpleFixtureBagDenormalizer.php';

return $this->privates['nelmio_alice.fixture_builder.denormalizer.fixture.simple_fixture_bag_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SimpleFixtureBagDenormalizer(($this->privates['nelmio_alice.fixture_builder.denormalizer.fixture.tolerant_denormalizer'] ?? $this->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_TolerantDenormalizerService.php')), ($this->privates['nelmio_alice.fixture_builder.denormalizer.flag_parser.element'] ?? $this->load('getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_ElementService.php')));
