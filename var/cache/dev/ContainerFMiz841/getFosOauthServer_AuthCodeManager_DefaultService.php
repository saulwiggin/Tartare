<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_oauth_server.auth_code_manager.default' shared service.

include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle/Model/AuthCodeManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle/Model/AuthCodeManager.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle/Entity/AuthCodeManager.php';

return $this->privates['fos_oauth_server.auth_code_manager.default'] = new \FOS\OAuthServerBundle\Entity\AuthCodeManager(($this->privates['fos_oauth_server.entity_manager'] ?? $this->load('getFosOauthServer_EntityManagerService.php')), 'App\\Entity\\AdminApi\\AuthCode');
