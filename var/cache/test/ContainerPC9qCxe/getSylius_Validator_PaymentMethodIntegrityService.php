<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.validator.payment_method_integrity' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Validator/Constraints/OrderPaymentMethodEligibilityValidator.php';

return $this->services['sylius.validator.payment_method_integrity'] = new \Sylius\Bundle\CoreBundle\Validator\Constraints\OrderPaymentMethodEligibilityValidator();
