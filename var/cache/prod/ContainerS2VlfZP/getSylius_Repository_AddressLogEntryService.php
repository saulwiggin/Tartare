<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.repository.address_log_entry' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Doctrine/ORM/ResourceLogEntryRepositoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Doctrine/ORM/ResourceLogEntryRepository.php';

$a = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());

return $this->services['sylius.repository.address_log_entry'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\ResourceLogEntryRepository($a, $a->getClassMetadata('Sylius\\Component\\Addressing\\Model\\AddressLogEntry'));
