<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.factory.admin_user' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Factory/UserWithEncoderFactory.php';

return $this->services['sylius.factory.admin_user'] = new \Sylius\Bundle\UserBundle\Factory\UserWithEncoderFactory(new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\User\\AdminUser'), 'argon2i');
