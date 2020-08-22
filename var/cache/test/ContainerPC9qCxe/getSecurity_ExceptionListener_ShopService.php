<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.exception_listener.shop' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Util/TargetPathTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/ExceptionListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Authentication/AuthenticationTrustResolverInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Authentication/AuthenticationTrustResolver.php';

return $this->privates['security.exception_listener.shop'] = new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.http_utils'] ?? $this->load('getSecurity_HttpUtilsService.php')), 'shop', ($this->privates['security.authentication.form_entry_point.shop'] ?? $this->load('getSecurity_Authentication_FormEntryPoint_ShopService.php')), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), false);
