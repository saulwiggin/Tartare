<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.denormalizer.flag_parser.element' shared service.

include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParserInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParser/ElementFlagParser.php';

return $this->privates['nelmio_alice.fixture_builder.denormalizer.flag_parser.element'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\ElementFlagParser(($this->privates['nelmio_alice.fixture_builder.denormalizer.flag_parser.registry'] ?? $this->load('getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_RegistryService.php')));
