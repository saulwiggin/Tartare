<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.active_promotions_provider' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Provider/PreQualifiedPromotionsProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Provider/ActivePromotionsByChannelProvider.php';

return $this->services['sylius.active_promotions_provider'] = new \Sylius\Component\Core\Provider\ActivePromotionsByChannelProvider(($this->services['sylius.repository.promotion'] ?? $this->load('getSylius_Repository_PromotionService.php')));
