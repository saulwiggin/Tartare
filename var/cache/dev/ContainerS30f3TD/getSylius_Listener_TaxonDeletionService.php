<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.listener.taxon_deletion' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/EventListener/TaxonDeletionListener.php';

return $this->services['sylius.listener.taxon_deletion'] = new \Sylius\Bundle\CoreBundle\EventListener\TaxonDeletionListener(($this->services['session'] ?? $this->getSessionService()), ($this->services['sylius.repository.channel'] ?? $this->getSylius_Repository_ChannelService()), ($this->services['sylius.promotion_rule_updater.total_of_items_from_taxon'] ?? $this->load('getSylius_PromotionRuleUpdater_TotalOfItemsFromTaxonService.php')), ($this->services['sylius.promotion_rule_updater.has_taxon'] ?? $this->load('getSylius_PromotionRuleUpdater_HasTaxonService.php')));
