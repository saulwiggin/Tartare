<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.promotion_eligibility_checker' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Eligibility/PromotionEligibilityCheckerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Eligibility/CompositePromotionEligibilityChecker.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Eligibility/PromotionDurationEligibilityChecker.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Eligibility/PromotionUsageLimitEligibilityChecker.php';

return $this->services['sylius.promotion_eligibility_checker'] = new \Sylius\Component\Promotion\Checker\Eligibility\CompositePromotionEligibilityChecker([0 => ($this->privates['sylius.promotion_duration_eligibility_checker'] ?? ($this->privates['sylius.promotion_duration_eligibility_checker'] = new \Sylius\Component\Promotion\Checker\Eligibility\PromotionDurationEligibilityChecker())), 1 => ($this->privates['sylius.promotion_usage_limit_eligibility_checker'] ?? ($this->privates['sylius.promotion_usage_limit_eligibility_checker'] = new \Sylius\Component\Promotion\Checker\Eligibility\PromotionUsageLimitEligibilityChecker())), 2 => ($this->privates['sylius.promotion_subject_coupon_eligibility_checker'] ?? $this->load('getSylius_PromotionSubjectCouponEligibilityCheckerService.php')), 3 => ($this->privates['sylius.promotion_rules_eligibility_checker'] ?? $this->load('getSylius_PromotionRulesEligibilityCheckerService.php'))]);
