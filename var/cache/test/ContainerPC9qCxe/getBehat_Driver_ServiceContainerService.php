<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'behat.driver.service_container' shared service.

if ($lazyLoad) {
    return $this->services['behat.driver.service_container'] = $this->createProxy('ContainerInterface_7a5418d', function () {
        return \ContainerInterface_7a5418d::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getBehat_Driver_ServiceContainerService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerInterface.php';

return [[($this->services['behat.service_container'] ?? $this->get('behat.service_container', 1))->get('fob_symfony.driver_kernel'), 'getContainer'](), 'get']('test.service_container');
