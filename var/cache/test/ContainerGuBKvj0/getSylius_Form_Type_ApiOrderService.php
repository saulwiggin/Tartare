<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.api_order' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminApiBundle/Form/Type/OrderType.php';

return $this->services['sylius.form.type.api_order'] = new \Sylius\Bundle\AdminApiBundle\Form\Type\OrderType('App\\Entity\\Order\\Order', $this->parameters['sylius.form.type.api_order.validation_groups'], ($this->services['sylius.repository.locale'] ?? $this->getSylius_Repository_LocaleService()), ($this->services['sylius.form.choice_list.loader.lazy_customer_loader'] ?? $this->load('getSylius_Form_ChoiceList_Loader_LazyCustomerLoaderService.php')));
