<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.promotion_coupon_generator.percentage_policy' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Generator/GenerationPolicyInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Generator/PercentageGenerationPolicy.php';

return $this->services['sylius.promotion_coupon_generator.percentage_policy'] = new \Sylius\Component\Promotion\Generator\PercentageGenerationPolicy(($this->services['sylius.repository.promotion_coupon'] ?? $this->load('getSylius_Repository_PromotionCouponService.php')));
