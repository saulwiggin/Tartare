<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.temporary_list' shared service.

include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/FixtureDenormalizerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/ChainableFixtureDenormalizerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/Chainable/CollectionDenormalizer.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/FixtureDenormalizerAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParserAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/Chainable/CollectionDenormalizerWithTemporaryFixture.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/Chainable/NullListNameDenormalizer.php';

return $this->privates['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.temporary_list'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\CollectionDenormalizerWithTemporaryFixture(($this->privates['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.null_list'] ?? ($this->privates['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.null_list'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\NullListNameDenormalizer())));
