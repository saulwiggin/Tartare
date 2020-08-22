<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.behat.context.ui.admin.removing_taxons' shared service.

include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Context/Ui/Admin/RemovingTaxonContext.php';

return $this->services['sylius.behat.context.ui.admin.removing_taxons'] = new \Sylius\Behat\Context\Ui\Admin\RemovingTaxonContext(($this->privates['sylius.behat.page.admin.taxon.create'] ?? $this->load('getSylius_Behat_Page_Admin_Taxon_CreateService.php')), ($this->privates['sylius.behat.notification_checker'] ?? $this->load('getSylius_Behat_NotificationCheckerService.php')));
