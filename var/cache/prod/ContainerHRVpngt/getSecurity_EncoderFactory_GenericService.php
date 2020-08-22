<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.encoder_factory.generic' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Encoder/EncoderFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Encoder/EncoderFactory.php';

return $this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['argon2i' => ['class' => 'Symfony\\Component\\Security\\Core\\Encoder\\NativePasswordEncoder', 'arguments' => [0 => NULL, 1 => NULL, 2 => NULL, 3 => 'argon2i']], 'Sylius\\Component\\User\\Model\\UserInterface' => ['class' => 'Symfony\\Component\\Security\\Core\\Encoder\\NativePasswordEncoder', 'arguments' => [0 => NULL, 1 => NULL, 2 => NULL, 3 => 'argon2i']]]);
