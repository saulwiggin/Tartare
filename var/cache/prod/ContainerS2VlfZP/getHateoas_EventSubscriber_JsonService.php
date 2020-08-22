<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'hateoas.event_subscriber.json' shared service.

include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/JMS/Serializer/EventDispatcher/EventSubscriberInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Hateoas/Serializer/EventSubscriber/JsonEventSubscriber.php';
include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Hateoas/Serializer/JsonSerializerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Hateoas/Serializer/JsonHalSerializer.php';
include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Hateoas/Serializer/JMSSerializerMetadataAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Hateoas/Serializer/Metadata/InlineDeferrer.php';

$a = ($this->privates['jms_serializer.metadata_factory'] ?? $this->load('getJmsSerializer_MetadataFactoryService.php'));

return $this->services['hateoas.event_subscriber.json'] = new \Hateoas\Serializer\EventSubscriber\JsonEventSubscriber(new \Hateoas\Serializer\JsonHalSerializer(), ($this->privates['hateoas.links_factory'] ?? $this->load('getHateoas_LinksFactoryService.php')), ($this->privates['hateoas.embeds_factory'] ?? $this->load('getHateoas_EmbedsFactoryService.php')), new \Hateoas\Serializer\Metadata\InlineDeferrer($a), new \Hateoas\Serializer\Metadata\InlineDeferrer($a));
