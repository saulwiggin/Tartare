<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.converter.country_name' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Addressing/Converter/CountryNameConverterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Addressing/Converter/CountryNameConverter.php';

return $this->services['sylius.converter.country_name'] = new \Sylius\Component\Addressing\Converter\CountryNameConverter();
