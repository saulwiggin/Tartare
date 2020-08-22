<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_serializer.xml_deserialization_visitor' shared service.

include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/JMS/Serializer/VisitorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/JMS/Serializer/AbstractVisitor.php';
include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/JMS/Serializer/NullAwareVisitorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/JMS/Serializer/XmlDeserializationVisitor.php';

$this->services['jms_serializer.xml_deserialization_visitor'] = $instance = new \JMS\Serializer\XmlDeserializationVisitor(($this->privates['jms_serializer.cache_naming_strategy'] ?? $this->load('getJmsSerializer_CacheNamingStrategyService.php')));

$instance->setDoctypeWhitelist([]);

return $instance;
