<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.promotion_duration_eligibility_checker' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Eligibility/PromotionEligibilityCheckerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Eligibility/PromotionDurationEligibilityChecker.php';

return $this->privates['sylius.promotion_duration_eligibility_checker'] = new \Sylius\Component\Promotion\Checker\Eligibility\PromotionDurationEligibilityChecker();
