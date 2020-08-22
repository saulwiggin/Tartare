<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.templating.helper.format_money' shared service.

if ($lazyLoad) {
    return $this->services['sylius.templating.helper.format_money'] = $this->createProxy('FormatMoneyHelper_87e5733', function () {
        return \FormatMoneyHelper_87e5733::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getSylius_Templating_Helper_FormatMoneyService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

include_once \dirname(__DIR__, 4).'/vendor/symfony/templating/Helper/HelperInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/templating/Helper/Helper.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/MoneyBundle/Templating/Helper/FormatMoneyHelperInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/MoneyBundle/Templating/Helper/FormatMoneyHelper.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/MoneyBundle/Formatter/MoneyFormatterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/MoneyBundle/Formatter/MoneyFormatter.php';

return new \Sylius\Bundle\MoneyBundle\Templating\Helper\FormatMoneyHelper(($this->services['sylius.money_formatter'] ?? ($this->services['sylius.money_formatter'] = new \Sylius\Bundle\MoneyBundle\Formatter\MoneyFormatter())));
