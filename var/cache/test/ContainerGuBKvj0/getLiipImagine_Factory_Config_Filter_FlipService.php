<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'liip_imagine.factory.config.filter.flip' shared service.

include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/FilterFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/FlipFactory.php';

return $this->privates['liip_imagine.factory.config.filter.flip'] = new \Liip\ImagineBundle\Factory\Config\Filter\FlipFactory();
