<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.behat.context.ui.channel' shared service.

include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Context/Ui/ChannelContext.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Service/SharedStorageInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Service/SharedStorage.php';

return $this->services['sylius.behat.context.ui.channel'] = new \Sylius\Behat\Context\Ui\ChannelContext(($this->privates['sylius.behat.shared_storage'] ?? ($this->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())), ($this->privates['sylius.behat.channel_context_setter'] ?? $this->load('getSylius_Behat_ChannelContextSetterService.php')), ($this->services['sylius.repository.channel'] ?? $this->getSylius_Repository_ChannelService()), ($this->privates['sylius.behat.page.admin.channel.create'] ?? $this->load('getSylius_Behat_Page_Admin_Channel_CreateService.php')), ($this->privates['sylius.behat.page.shop.home'] ?? $this->load('getSylius_Behat_Page_Shop_HomeService.php')), ($this->privates['sylius.behat.page.test_plugin.main'] ?? $this->load('getSylius_Behat_Page_TestPlugin_MainService.php')));
