<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sylius\Component\Core\Generator\ImagePathGeneratorInterface' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Generator/ImagePathGeneratorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Generator/UploadedImagePathGenerator.php';

return $this->services['Sylius\\Component\\Core\\Generator\\ImagePathGeneratorInterface'] = new \Sylius\Component\Core\Generator\UploadedImagePathGenerator();
