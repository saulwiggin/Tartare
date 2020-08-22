<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.security.password_updater' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/User/Security/PasswordUpdaterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/User/Security/PasswordUpdater.php';

return $this->services['sylius.security.password_updater'] = new \Sylius\Component\User\Security\PasswordUpdater(($this->services['sylius.security.password_encoder'] ?? $this->load('getSylius_Security_PasswordEncoderService.php')));
