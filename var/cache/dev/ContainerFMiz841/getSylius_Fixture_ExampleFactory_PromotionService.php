<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.fixture.example_factory.promotion' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ExampleFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/AbstractExampleFactory.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/PromotionExampleFactory.php';

return $this->services['sylius.fixture.example_factory.promotion'] = new \Sylius\Bundle\CoreBundle\Fixture\Factory\PromotionExampleFactory(($this->services['sylius.factory.promotion'] ?? ($this->services['sylius.factory.promotion'] = new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Promotion\\Promotion'))), ($this->services['sylius.fixture.example_factory.promotion_rule'] ?? $this->load('getSylius_Fixture_ExampleFactory_PromotionRuleService.php')), ($this->services['sylius.fixture.example_factory.promotion_action'] ?? $this->load('getSylius_Fixture_ExampleFactory_PromotionActionService.php')), ($this->services['sylius.repository.channel'] ?? $this->getSylius_Repository_ChannelService()));
