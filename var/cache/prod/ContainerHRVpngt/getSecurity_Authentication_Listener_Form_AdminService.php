<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.form.admin' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/AbstractListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/ListenerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/LegacyListenerTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/AbstractAuthenticationListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/UsernamePasswordFormAuthenticationListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Authentication/AuthenticationSuccessHandlerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Util/TargetPathTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Authentication/DefaultAuthenticationSuccessHandler.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Authentication/AuthenticationFailureHandlerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Authentication/DefaultAuthenticationFailureHandler.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Session/SessionAuthenticationStrategyInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Session/SessionAuthenticationStrategy.php';

$a = ($this->privates['security.http_utils'] ?? $this->load('getSecurity_HttpUtilsService.php'));
$b = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, []);
$b->setOptions(['login_path' => 'sylius_admin_login', 'default_target_path' => 'sylius_admin_dashboard', 'use_referer' => true, 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path']);
$b->setProviderKey('admin');
$c = ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php'));

$d = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $a, [], $c);
$d->setOptions(['login_path' => 'sylius_admin_login', 'failure_path' => 'sylius_admin_login', 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

$this->privates['security.authentication.listener.form.admin'] = $instance = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))), $a, 'admin', $b, $d, ['check_path' => 'sylius_admin_login_check', 'use_forward' => false, 'csrf_parameter' => '_csrf_admin_security_token', 'csrf_token_id' => 'admin_authenticate', 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'post_only' => true], $c, ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['security.csrf.token_manager'] ?? $this->load('getSecurity_Csrf_TokenManagerService.php')));

$instance->setRememberMeServices(($this->privates['security.authentication.rememberme.services.simplehash.admin'] ?? $this->load('getSecurity_Authentication_Rememberme_Services_Simplehash_AdminService.php')));

return $instance;
