<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'SensioLabs\Security\SecurityChecker' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sensiolabs/security-checker/SensioLabs/Security/SecurityChecker.php';

return $this->privates['SensioLabs\\Security\\SecurityChecker'] = new \SensioLabs\Security\SecurityChecker();
