<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius_fixtures.logger' shared service.

return $this->services['sylius_fixtures.logger'] = new \Monolog\Logger('sylius_fixtures', [0 => ($this->services['sylius_fixtures.logger.handler.console'] ?? $this->load('getSyliusFixtures_Logger_Handler_ConsoleService.php'))]);
