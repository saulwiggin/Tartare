<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'liip_imagine.factory.config.filter.crop' shared service.

include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/FilterFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/CropFactory.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/Argument/SizeFactory.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Factory/Config/Filter/Argument/PointFactory.php';

return $this->privates['liip_imagine.factory.config.filter.crop'] = new \Liip\ImagineBundle\Factory\Config\Filter\CropFactory(($this->privates['liip_imagine.factory.config.filter.argument.size'] ?? ($this->privates['liip_imagine.factory.config.filter.argument.size'] = new \Liip\ImagineBundle\Factory\Config\Filter\Argument\SizeFactory())), ($this->privates['liip_imagine.factory.config.filter.argument.point'] ?? ($this->privates['liip_imagine.factory.config.filter.argument.point'] = new \Liip\ImagineBundle\Factory\Config\Filter\Argument\PointFactory())));
