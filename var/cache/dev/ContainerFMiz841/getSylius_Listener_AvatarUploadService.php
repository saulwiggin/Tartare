<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.listener.avatar_upload' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/EventListener/ImageUploadListener.php';

return $this->services['sylius.listener.avatar_upload'] = new \Sylius\Bundle\CoreBundle\EventListener\ImageUploadListener(($this->services['sylius.image_uploader'] ?? $this->load('getSylius_ImageUploaderService.php')));
