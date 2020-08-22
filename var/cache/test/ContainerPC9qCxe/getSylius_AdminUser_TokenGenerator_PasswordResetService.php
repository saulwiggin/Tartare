<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.admin_user.token_generator.password_reset' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/User/Security/Generator/GeneratorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/User/Security/Generator/UniqueTokenGenerator.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Generator/RandomnessGeneratorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Generator/RandomnessGenerator.php';

return $this->services['sylius.admin_user.token_generator.password_reset'] = new \Sylius\Component\User\Security\Generator\UniqueTokenGenerator(($this->services['sylius.random_generator'] ?? ($this->services['sylius.random_generator'] = new \Sylius\Component\Resource\Generator\RandomnessGenerator())), ($this->privates['sylius.admin_user.token_uniqueness_checker.password_reset'] ?? $this->load('getSylius_AdminUser_TokenUniquenessChecker_PasswordResetService.php')), 16);
