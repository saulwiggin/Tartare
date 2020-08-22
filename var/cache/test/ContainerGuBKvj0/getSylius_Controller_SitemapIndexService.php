<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.controller.sitemap_index' shared service.

include_once \dirname(__DIR__, 4).'/vendor/stefandoorn/sitemap-plugin/src/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/vendor/stefandoorn/sitemap-plugin/src/Controller/SitemapIndexController.php';

return $this->services['sylius.controller.sitemap_index'] = new \SitemapPlugin\Controller\SitemapIndexController(($this->privates['sylius.sitemap_index_renderer'] ?? $this->load('getSylius_SitemapIndexRendererService.php')), ($this->privates['sylius.sitemap_index_builder'] ?? $this->load('getSylius_SitemapIndexBuilderService.php')));
