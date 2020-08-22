<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.form.shop' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/AbstractListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/ListenerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/LegacyListenerTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/AbstractAuthenticationListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/UsernamePasswordFormAuthenticationListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Session/SessionAuthenticationStrategyInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Session/SessionAuthenticationStrategy.php';

$this->privates['security.authentication.listener.form.shop'] = $instance = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))), ($this->privates['security.http_utils'] ?? $this->load('getSecurity_HttpUtilsService.php')), 'shop', ($this->privates['security.authentication.success_handler.shop.form_login'] ?? $this->load('getSecurity_Authentication_SuccessHandler_Shop_FormLoginService.php')), ($this->privates['security.authentication.failure_handler.shop.form_login'] ?? $this->load('getSecurity_Authentication_FailureHandler_Shop_FormLoginService.php')), ['check_path' => 'sylius_shop_login_check', 'use_forward' => false, 'csrf_parameter' => '_csrf_shop_security_token', 'csrf_token_id' => 'shop_authenticate', 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'post_only' => true], ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['security.csrf.token_manager'] ?? $this->load('getSecurity_Csrf_TokenManagerService.php')));

$instance->setRememberMeServices(($this->privates['security.authentication.rememberme.services.simplehash.shop'] ?? $this->load('getSecurity_Authentication_Rememberme_Services_Simplehash_ShopService.php')));

return $instance;
