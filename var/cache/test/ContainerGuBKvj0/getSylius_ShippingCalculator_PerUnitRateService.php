<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.shipping_calculator.per_unit_rate' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Shipping/Calculator/CalculatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Shipping/Calculator/PerUnitRateCalculator.php';

return $this->services['sylius.shipping_calculator.per_unit_rate'] = new \Sylius\Component\Core\Shipping\Calculator\PerUnitRateCalculator();
