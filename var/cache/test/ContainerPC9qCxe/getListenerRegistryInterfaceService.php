<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sylius\Bundle\FixturesBundle\Listener\ListenerRegistryInterface' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Listener/ListenerRegistryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Listener/ListenerRegistry.php';

$this->services['Sylius\\Bundle\\FixturesBundle\\Listener\\ListenerRegistryInterface'] = $instance = new \Sylius\Bundle\FixturesBundle\Listener\ListenerRegistry();

$instance->addListener(($this->privates['sylius_fixtures.listener.orm_purger'] ?? $this->load('getSyliusFixtures_Listener_OrmPurgerService.php')));
$instance->addListener(($this->privates['sylius_fixtures.listener.logger'] ?? $this->load('getSyliusFixtures_Listener_LoggerService.php')));

return $instance;
