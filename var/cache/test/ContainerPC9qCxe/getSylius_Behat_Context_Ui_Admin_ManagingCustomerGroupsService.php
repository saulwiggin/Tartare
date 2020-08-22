<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.behat.context.ui.admin.managing_customer_groups' shared service.

include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Context/Ui/Admin/ManagingCustomerGroupsContext.php';

return $this->services['sylius.behat.context.ui.admin.managing_customer_groups'] = new \Sylius\Behat\Context\Ui\Admin\ManagingCustomerGroupsContext(($this->privates['sylius.behat.page.admin.customer_group.create'] ?? $this->load('getSylius_Behat_Page_Admin_CustomerGroup_CreateService.php')), ($this->privates['sylius.behat.page.admin.customer_group.index'] ?? $this->load('getSylius_Behat_Page_Admin_CustomerGroup_IndexService.php')), ($this->privates['sylius.behat.current_page_resolver'] ?? $this->load('getSylius_Behat_CurrentPageResolverService.php')), ($this->privates['sylius.behat.page.admin.customer_group.update'] ?? $this->load('getSylius_Behat_Page_Admin_CustomerGroup_UpdateService.php')));
