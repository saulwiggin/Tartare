<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.fixture.mug_product' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Fixture/FixtureInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Fixture/AbstractFixture.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/MugProductFixture.php';

return $this->services['sylius.fixture.mug_product'] = new \Sylius\Bundle\CoreBundle\Fixture\MugProductFixture(($this->services['sylius.fixture.taxon'] ?? $this->load('getSylius_Fixture_TaxonService.php')), ($this->services['sylius.fixture.product_attribute'] ?? $this->load('getSylius_Fixture_ProductAttributeService.php')), ($this->services['sylius.fixture.product_option'] ?? $this->load('getSylius_Fixture_ProductOptionService.php')), ($this->services['sylius.fixture.product'] ?? $this->load('getSylius_Fixture_ProductService.php')), 'en_US');
