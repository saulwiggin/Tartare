<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.sitemap_provider.taxon' shared service.

include_once \dirname(__DIR__, 4).'/vendor/stefandoorn/sitemap-plugin/src/Provider/UrlProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/stefandoorn/sitemap-plugin/src/Provider/TaxonUrlProvider.php';
include_once \dirname(__DIR__, 4).'/vendor/stefandoorn/sitemap-plugin/src/Factory/SitemapUrlFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/stefandoorn/sitemap-plugin/src/Factory/SitemapUrlFactory.php';

return $this->privates['sylius.sitemap_provider.taxon'] = new \SitemapPlugin\Provider\TaxonUrlProvider(($this->services['sylius.repository.taxon'] ?? $this->load('getSylius_Repository_TaxonService.php')), ($this->services['router'] ?? $this->getRouterService()), ($this->privates['sylius.sitemap_url_factory'] ?? ($this->privates['sylius.sitemap_url_factory'] = new \SitemapPlugin\Factory\SitemapUrlFactory())), ($this->services['Sylius\\Component\\Locale\\Context\\LocaleContextInterface'] ?? $this->getLocaleContextInterfaceService()), true);
