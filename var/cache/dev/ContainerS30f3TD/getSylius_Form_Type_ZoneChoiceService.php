<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.zone_choice' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Form/Type/ZoneChoiceType.php';

return $this->services['sylius.form.type.zone_choice'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneChoiceType(($this->services['sylius.repository.zone'] ?? $this->getSylius_Repository_ZoneService()), $this->parameters['sylius.scope.zone']);
