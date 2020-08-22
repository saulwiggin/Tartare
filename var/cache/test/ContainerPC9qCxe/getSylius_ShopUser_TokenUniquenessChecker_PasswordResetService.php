<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.shop_user.token_uniqueness_checker.password_reset' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/User/Security/Checker/UniquenessCheckerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/User/Security/Checker/TokenUniquenessChecker.php';

return $this->privates['sylius.shop_user.token_uniqueness_checker.password_reset'] = new \Sylius\Component\User\Security\Checker\TokenUniquenessChecker(($this->services['sylius.repository.shop_user'] ?? $this->load('getSylius_Repository_ShopUserService.php')), 'passwordResetToken');
