<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.province_code_choice' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Form/Type/ProvinceCodeChoiceType.php';

return $this->services['sylius.form.type.province_code_choice'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ProvinceCodeChoiceType(($this->services['sylius.repository.province'] ?? $this->getSylius_Repository_ProvinceService()));
