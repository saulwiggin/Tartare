<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.state_resolver.order_checkout' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Order/StateResolver/StateResolverInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/StateResolver/CheckoutStateResolver.php';

return $this->services['sylius.state_resolver.order_checkout'] = new \Sylius\Component\Core\StateResolver\CheckoutStateResolver(($this->services['sm.factory'] ?? $this->getSm_FactoryService()), ($this->services['sylius.checker.order_payment_method_selection_requirement'] ?? $this->getSylius_Checker_OrderPaymentMethodSelectionRequirementService()), ($this->services['sylius.checker.order_shipping_method_selection_requirement'] ?? $this->getSylius_Checker_OrderShippingMethodSelectionRequirementService()));
