<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.metadata.lazy_loading_driver' shared service.

include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Metadata/Driver/LazyLoadingDriver.php';

return $this->privates['jms_serializer.metadata.lazy_loading_driver'] = new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver');
