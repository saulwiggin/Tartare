<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.province_naming_provider' shared service.

if ($lazyLoad) {
    return $this->services['sylius.province_naming_provider'] = $this->createProxy('ProvinceNamingProvider_9f6014a', function () {
        return \ProvinceNamingProvider_9f6014a::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getSylius_ProvinceNamingProviderService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Addressing/Provider/ProvinceNamingProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Addressing/Provider/ProvinceNamingProvider.php';

return new \Sylius\Component\Addressing\Provider\ProvinceNamingProvider(($this->services['sylius.repository.province'] ?? $this->load('getSylius_Repository_ProvinceService.php')));
