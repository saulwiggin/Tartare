<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.Sylius\Bundle\FixturesBundle\Command\FixturesLoadCommand' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Command/FixturesLoadCommand.php';

return $this->services['console.command.public_alias.Sylius\\Bundle\\FixturesBundle\\Command\\FixturesLoadCommand'] = new \Sylius\Bundle\FixturesBundle\Command\FixturesLoadCommand(($this->services['sylius_fixtures.suite_registry'] ?? $this->load('getSyliusFixtures_SuiteRegistryService.php')), ($this->services['sylius_fixtures.suite_loader'] ?? $this->load('getSyliusFixtures_SuiteLoaderService.php')), 'test');
