<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.extension.type.locale' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Extension/LocaleTypeExtension.php';

return $this->services['sylius.form.extension.type.locale'] = new \Sylius\Bundle\CoreBundle\Form\Extension\LocaleTypeExtension(($this->services['sylius.repository.locale'] ?? $this->getSylius_Repository_LocaleService()));
