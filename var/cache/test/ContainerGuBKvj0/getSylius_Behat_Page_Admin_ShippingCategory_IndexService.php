<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.behat.page.admin.shipping_category.index' shared service.

include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/PageInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/Page.php';
include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/SymfonyPageInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/SymfonyPage.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Page/Admin/Crud/IndexPageInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Page/Admin/Crud/IndexPage.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Service/Accessor/TableAccessorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Service/Accessor/TableAccessor.php';

return $this->privates['sylius.behat.page.admin.shipping_category.index'] = new \Sylius\Behat\Page\Admin\Crud\IndexPage(($this->services['behat.mink.default_session'] ?? $this->load('getBehat_Mink_DefaultSessionService.php')), ($this->services['behat.mink.parameters'] ?? $this->load('getBehat_Mink_ParametersService.php')), ($this->services['router'] ?? $this->getRouterService()), ($this->privates['sylius.behat.table_accessor'] ?? ($this->privates['sylius.behat.table_accessor'] = new \Sylius\Behat\Service\Accessor\TableAccessor())), 'sylius_admin_shipping_category_index');
