<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.listener.user_cart_recalculation' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/EventListener/UserCartRecalculationListener.php';

return $this->services['sylius.listener.user_cart_recalculation'] = new \Sylius\Bundle\CoreBundle\EventListener\UserCartRecalculationListener(($this->services['sylius.context.cart'] ?? $this->getSylius_Context_CartService()), ($this->services['sylius.order_processing.order_processor'] ?? $this->load('getSylius_OrderProcessing_OrderProcessorService.php')));
