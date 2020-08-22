<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.order_processing.order_taxes_processor' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Order/Processor/OrderProcessorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/OrderProcessing/OrderTaxesProcessor.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Provider/ZoneProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Provider/ChannelBasedDefaultTaxZoneProvider.php';

return $this->services['sylius.order_processing.order_taxes_processor'] = new \Sylius\Component\Core\OrderProcessing\OrderTaxesProcessor(($this->services['sylius.provider.channel_based_default_zone_provider'] ?? ($this->services['sylius.provider.channel_based_default_zone_provider'] = new \Sylius\Bundle\CoreBundle\Provider\ChannelBasedDefaultTaxZoneProvider())), ($this->services['sylius.zone_matcher'] ?? $this->load('getSylius_ZoneMatcherService.php')), ($this->services['sylius.registry.tax_calculation_strategy'] ?? $this->load('getSylius_Registry_TaxCalculationStrategyService.php')));
