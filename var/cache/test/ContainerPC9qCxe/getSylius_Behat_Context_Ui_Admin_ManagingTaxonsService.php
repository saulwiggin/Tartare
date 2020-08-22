<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.behat.context.ui.admin.managing_taxons' shared service.

include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Context/Ui/Admin/ManagingTaxonsContext.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Service/SharedStorageInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Service/SharedStorage.php';

return $this->services['sylius.behat.context.ui.admin.managing_taxons'] = new \Sylius\Behat\Context\Ui\Admin\ManagingTaxonsContext(($this->privates['sylius.behat.shared_storage'] ?? ($this->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())), ($this->privates['sylius.behat.page.admin.taxon.create'] ?? $this->load('getSylius_Behat_Page_Admin_Taxon_CreateService.php')), ($this->privates['sylius.behat.page.admin.taxon.create_for_parent'] ?? $this->load('getSylius_Behat_Page_Admin_Taxon_CreateForParentService.php')), ($this->privates['sylius.behat.page.admin.taxon.update'] ?? $this->load('getSylius_Behat_Page_Admin_Taxon_UpdateService.php')), ($this->privates['sylius.behat.current_page_resolver'] ?? $this->load('getSylius_Behat_CurrentPageResolverService.php')), ($this->privates['sylius.behat.notification_checker'] ?? $this->load('getSylius_Behat_NotificationCheckerService.php')));
