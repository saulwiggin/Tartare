<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.user_checker' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/User/UserCheckerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/User/UserChecker.php';

return $this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
