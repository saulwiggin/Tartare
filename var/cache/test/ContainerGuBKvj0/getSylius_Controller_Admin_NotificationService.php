<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.controller.admin.notification' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Controller/NotificationController.php';
include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/Client.php';
include_once \dirname(__DIR__, 4).'/vendor/php-http/message-factory/src/RequestFactory.php';
include_once \dirname(__DIR__, 4).'/vendor/php-http/message-factory/src/ResponseFactory.php';
include_once \dirname(__DIR__, 4).'/vendor/php-http/message-factory/src/MessageFactory.php';
include_once \dirname(__DIR__, 4).'/vendor/php-http/message/src/MessageFactory/GuzzleMessageFactory.php';

return $this->services['sylius.controller.admin.notification'] = new \Sylius\Bundle\AdminBundle\Controller\NotificationController(($this->privates['sylius.http_client'] ?? ($this->privates['sylius.http_client'] = new \GuzzleHttp\Client())), ($this->privates['sylius.http_message_factory'] ?? ($this->privates['sylius.http_message_factory'] = new \Http\Message\MessageFactory\GuzzleMessageFactory())), 'http://gus.sylius.com/version', 'test');
