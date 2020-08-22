<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'behat.mink.parameters' shared service.

if ($lazyLoad) {
    return $this->services['behat.mink.parameters'] = $this->createProxy('MinkParameters_4b72c85', function () {
        return \MinkParameters_4b72c85::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getBehat_Mink_ParametersService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/symfony-extension/src/Mink/MinkParameters.php';

return ($this->services['behat.service_container'] ?? $this->get('behat.service_container', 1))->get('fob_symfony.mink.parameters');
