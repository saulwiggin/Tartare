<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.behat.context.ui.shop.address_book' shared service.

include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Context/Ui/Shop/AddressBookContext.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Service/SharedStorageInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Service/SharedStorage.php';

return $this->services['sylius.behat.context.ui.shop.address_book'] = new \Sylius\Behat\Context\Ui\Shop\AddressBookContext(($this->privates['sylius.behat.shared_storage'] ?? ($this->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())), ($this->services['sylius.repository.address'] ?? $this->load('getSylius_Repository_AddressService.php')), ($this->privates['sylius.behat.page.shop.account.address_book.index'] ?? $this->load('getSylius_Behat_Page_Shop_Account_AddressBook_IndexService.php')), ($this->privates['sylius.behat.page.shop.account.address_book.create'] ?? $this->load('getSylius_Behat_Page_Shop_Account_AddressBook_CreateService.php')), ($this->privates['sylius.behat.page.shop.account.address_book.update'] ?? $this->load('getSylius_Behat_Page_Shop_Account_AddressBook_UpdateService.php')), ($this->privates['sylius.behat.current_page_resolver'] ?? $this->load('getSylius_Behat_CurrentPageResolverService.php')), ($this->privates['sylius.behat.notification_checker'] ?? $this->load('getSylius_Behat_NotificationCheckerService.php')));
