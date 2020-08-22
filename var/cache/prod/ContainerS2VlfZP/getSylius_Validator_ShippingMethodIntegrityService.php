<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.validator.shipping_method_integrity' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Validator/Constraints/OrderShippingMethodEligibilityValidator.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Shipping/Checker/ShippingMethodEligibilityCheckerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Shipping/Checker/ShippingMethodEligibilityChecker.php';

return $this->services['sylius.validator.shipping_method_integrity'] = new \Sylius\Bundle\CoreBundle\Validator\Constraints\OrderShippingMethodEligibilityValidator(($this->services['sylius.shipping_eligibility_checker'] ?? ($this->services['sylius.shipping_eligibility_checker'] = new \Sylius\Component\Shipping\Checker\ShippingMethodEligibilityChecker())));
