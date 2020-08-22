<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.security.voter.security.access.expression_voter' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Authorization/Voter/VoterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Authorization/Voter/TraceableVoter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Authorization/Voter/ExpressionVoter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Authorization/ExpressionLanguage.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Authentication/AuthenticationTrustResolverInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Authentication/AuthenticationTrustResolver.php';

return $this->privates['debug.security.voter.security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([])))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
