<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.behat.context.ui.shop.browsing_product' shared service.

include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Context/Ui/Shop/BrowsingProductContext.php';

return $this->services['sylius.behat.context.ui.shop.browsing_product'] = new \Sylius\Behat\Context\Ui\Shop\BrowsingProductContext(($this->privates['sylius.behat.page.shop.product.show'] ?? $this->load('getSylius_Behat_Page_Shop_Product_ShowService.php')));
