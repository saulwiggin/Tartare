<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.behat.context.setup.taxation' shared service.

include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Context/Setup/TaxationContext.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Service/SharedStorageInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Service/SharedStorage.php';

return $this->services['sylius.behat.context.setup.taxation'] = new \Sylius\Behat\Context\Setup\TaxationContext(($this->privates['sylius.behat.shared_storage'] ?? ($this->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())), ($this->services['sylius.factory.tax_rate'] ?? ($this->services['sylius.factory.tax_rate'] = new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Taxation\\TaxRate'))), ($this->services['sylius.factory.tax_category'] ?? ($this->services['sylius.factory.tax_category'] = new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Taxation\\TaxCategory'))), ($this->services['sylius.repository.tax_rate'] ?? $this->load('getSylius_Repository_TaxRateService.php')), ($this->services['sylius.repository.tax_category'] ?? $this->load('getSylius_Repository_TaxCategoryService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
