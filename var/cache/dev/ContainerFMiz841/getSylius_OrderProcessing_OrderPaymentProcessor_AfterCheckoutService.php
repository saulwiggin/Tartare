<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.order_processing.order_payment_processor.after_checkout' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Order/Processor/OrderProcessorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/OrderProcessing/OrderPaymentProcessor.php';

return $this->services['sylius.order_processing.order_payment_processor.after_checkout'] = new \Sylius\Component\Core\OrderProcessing\OrderPaymentProcessor(($this->services['sylius.order_payment_provider'] ?? $this->load('getSylius_OrderPaymentProviderService.php')), 'new');
