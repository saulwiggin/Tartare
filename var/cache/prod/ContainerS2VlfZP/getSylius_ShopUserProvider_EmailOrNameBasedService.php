<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.shop_user_provider.email_or_name_based' shared service.

if ($lazyLoad) {
    return $this->privates['sylius.shop_user_provider.email_or_name_based'] = $this->createProxy('UsernameOrEmailProvider_3eaa26a', function () {
        return \UsernameOrEmailProvider_3eaa26a::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getSylius_ShopUserProvider_EmailOrNameBasedService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/User/UserProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Provider/UserProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Provider/AbstractUserProvider.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Provider/UsernameOrEmailProvider.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/User/Canonicalizer/CanonicalizerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/User/Canonicalizer/Canonicalizer.php';

return new \Sylius\Bundle\UserBundle\Provider\UsernameOrEmailProvider('App\\Entity\\User\\ShopUser', ($this->services['sylius.repository.shop_user'] ?? $this->load('getSylius_Repository_ShopUserService.php')), ($this->services['sylius.canonicalizer'] ?? ($this->services['sylius.canonicalizer'] = new \Sylius\Component\User\Canonicalizer\Canonicalizer())));
