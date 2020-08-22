<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.registry_promotion_rule_checker' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Rule/RuleCheckerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Promotion/Checker/Rule/CustomerGroupRuleChecker.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Rule/CartQuantityRuleChecker.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Promotion/Checker/Rule/HasTaxonRuleChecker.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Promotion/Checker/Rule/ContainsProductRuleChecker.php';

$this->services['sylius.registry_promotion_rule_checker'] = $instance = new \Sylius\Component\Registry\ServiceRegistry('Sylius\\Component\\Promotion\\Checker\\Rule\\RuleCheckerInterface', 'rule checker');

$instance->register('cart_quantity', ($this->services['sylius.promotion_rule_checker.cart_quantity'] ?? ($this->services['sylius.promotion_rule_checker.cart_quantity'] = new \Sylius\Component\Promotion\Checker\Rule\CartQuantityRuleChecker())));
$instance->register('customer_group', new \Sylius\Component\Core\Promotion\Checker\Rule\CustomerGroupRuleChecker());
$instance->register('nth_order', ($this->services['sylius.promotion_rule_checker.nth_order'] ?? $this->load('getSylius_PromotionRuleChecker_NthOrderService.php')));
$instance->register('shipping_country', ($this->services['sylius.promotion_rule_checker.shipping_country'] ?? $this->load('getSylius_PromotionRuleChecker_ShippingCountryService.php')));
$instance->register('has_taxon', ($this->services['sylius.promotion_rule_checker.has_taxon'] ?? ($this->services['sylius.promotion_rule_checker.has_taxon'] = new \Sylius\Component\Core\Promotion\Checker\Rule\HasTaxonRuleChecker())));
$instance->register('total_of_items_from_taxon', ($this->services['sylius.promotion_rule_checker.total_of_items_from_taxon'] ?? $this->load('getSylius_PromotionRuleChecker_TotalOfItemsFromTaxonService.php')));
$instance->register('contains_product', ($this->services['sylius.promotion_rule_checker.contains_product'] ?? ($this->services['sylius.promotion_rule_checker.contains_product'] = new \Sylius\Component\Core\Promotion\Checker\Rule\ContainsProductRuleChecker())));
$instance->register('item_total', ($this->services['sylius.promotion_rule_checker.item_total'] ?? $this->load('getSylius_PromotionRuleChecker_ItemTotalService.php')));

return $instance;
