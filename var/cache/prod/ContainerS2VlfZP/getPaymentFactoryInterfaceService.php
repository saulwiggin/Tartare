<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sylius\Component\Payment\Factory\PaymentFactoryInterface' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Payment/Factory/PaymentFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Payment/Factory/PaymentFactory.php';

return $this->services['Sylius\\Component\\Payment\\Factory\\PaymentFactoryInterface'] = new \Sylius\Component\Payment\Factory\PaymentFactory(new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Payment\\Payment'));
