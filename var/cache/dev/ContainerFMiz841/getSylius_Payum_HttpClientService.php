<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.payum.http_client' shared service.

include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/HttpClientInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Bridge/Guzzle/HttpClientFactory.php';

return $this->services['sylius.payum.http_client'] = \Payum\Core\Bridge\Guzzle\HttpClientFactory::create();
