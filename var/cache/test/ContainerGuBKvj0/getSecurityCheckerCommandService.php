<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'SensioLabs\Security\Command\SecurityCheckerCommand' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/sensiolabs/security-checker/SensioLabs/Security/Command/SecurityCheckerCommand.php';
include_once \dirname(__DIR__, 4).'/vendor/sensiolabs/security-checker/SensioLabs/Security/SecurityChecker.php';

$this->privates['SensioLabs\\Security\\Command\\SecurityCheckerCommand'] = $instance = new \SensioLabs\Security\Command\SecurityCheckerCommand(($this->privates['SensioLabs\\Security\\SecurityChecker'] ?? ($this->privates['SensioLabs\\Security\\SecurityChecker'] = new \SensioLabs\Security\SecurityChecker())));

$instance->setName('security:check');

return $instance;
