<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.sitemap_provider.product' shared service.

include_once \dirname(__DIR__, 4).'/vendor/stefandoorn/sitemap-plugin/src/Provider/UrlProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/stefandoorn/sitemap-plugin/src/Provider/ProductUrlProvider.php';
include_once \dirname(__DIR__, 4).'/vendor/stefandoorn/sitemap-plugin/src/Factory/SitemapUrlFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/stefandoorn/sitemap-plugin/src/Factory/SitemapUrlFactory.php';

return $this->privates['sylius.sitemap_provider.product'] = new \SitemapPlugin\Provider\ProductUrlProvider(($this->services['sylius.repository.product'] ?? $this->load('getSylius_Repository_ProductService.php')), ($this->services['router'] ?? $this->getRouterService()), ($this->privates['sylius.sitemap_url_factory'] ?? ($this->privates['sylius.sitemap_url_factory'] = new \SitemapPlugin\Factory\SitemapUrlFactory())), ($this->services['Sylius\\Component\\Locale\\Context\\LocaleContextInterface'] ?? $this->getLocaleContextInterfaceService()), ($this->services['sylius.context.channel'] ?? $this->getSylius_Context_ChannelService()));
