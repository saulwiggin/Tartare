<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.validator.locales_aware_valid_attribute_value' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Validator/Constraints/LocalesAwareValidAttributeValueValidator.php';

return $this->services['sylius.validator.locales_aware_valid_attribute_value'] = new \Sylius\Bundle\CoreBundle\Validator\Constraints\LocalesAwareValidAttributeValueValidator(($this->services['sylius.registry.attribute_type'] ?? $this->load('getSylius_Registry_AttributeTypeService.php')), ($this->services['sylius.translation_locale_provider.admin'] ?? $this->getSylius_TranslationLocaleProvider_AdminService()));
