<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.switchuser_listener.admin' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/AbstractListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/ListenerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/LegacyListenerTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/SwitchUserListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/User/UserCheckerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/User/UserChecker.php';

return $this->privates['security.authentication.switchuser_listener.admin'] = new \Symfony\Component\Security\Http\Firewall\SwitchUserListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['sylius.admin_user_provider.email_or_name_based'] ?? $this->load('getSylius_AdminUserProvider_EmailOrNameBasedService.php')), ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), 'admin', ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), '_switch_user', 'ROLE_ALLOWED_TO_SWITCH', ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), false);
