<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.mailer.default_settings_provider' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Component/Provider/DefaultSettingsProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Component/Provider/DefaultSettingsProvider.php';

return $this->services['sylius.mailer.default_settings_provider'] = new \Sylius\Component\Mailer\Provider\DefaultSettingsProvider('Example.com', 'no-reply@example.com');
