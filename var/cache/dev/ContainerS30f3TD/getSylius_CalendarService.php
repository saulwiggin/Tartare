<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.calendar' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Provider/DateTimeProvider.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Provider/Calendar.php';

return $this->services['sylius.calendar'] = new \Sylius\Bundle\ShippingBundle\Provider\Calendar();
