<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.fixture.example_factory.shop_user' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ExampleFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/AbstractExampleFactory.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ShopUserExampleFactory.php';

return $this->services['sylius.fixture.example_factory.shop_user'] = new \Sylius\Bundle\CoreBundle\Fixture\Factory\ShopUserExampleFactory(($this->services['sylius.factory.shop_user'] ?? $this->load('getSylius_Factory_ShopUserService.php')), ($this->services['sylius.factory.customer'] ?? ($this->services['sylius.factory.customer'] = new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Customer\\Customer'))), ($this->services['sylius.repository.customer_group'] ?? $this->load('getSylius_Repository_CustomerGroupService.php')));
