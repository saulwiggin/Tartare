<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.resource_controller.form_factory' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/ResourceFormFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/ResourceFormFactory.php';

return $this->privates['sylius.resource_controller.form_factory'] = new \Sylius\Bundle\ResourceBundle\Controller\ResourceFormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()));
