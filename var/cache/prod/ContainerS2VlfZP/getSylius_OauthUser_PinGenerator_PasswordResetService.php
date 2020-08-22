<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.oauth_user.pin_generator.password_reset' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/User/Security/Generator/GeneratorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/User/Security/Generator/UniquePinGenerator.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/User/Security/Checker/UniquenessCheckerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/User/Security/Checker/TokenUniquenessChecker.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Generator/RandomnessGeneratorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Generator/RandomnessGenerator.php';

return $this->services['sylius.oauth_user.pin_generator.password_reset'] = new \Sylius\Component\User\Security\Generator\UniquePinGenerator(($this->services['sylius.random_generator'] ?? ($this->services['sylius.random_generator'] = new \Sylius\Component\Resource\Generator\RandomnessGenerator())), new \Sylius\Component\User\Security\Checker\TokenUniquenessChecker(($this->services['sylius.repository.oauth_user'] ?? $this->load('getSylius_Repository_OauthUserService.php')), 'passwordResetToken'), 4);
