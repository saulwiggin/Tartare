<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.sitemap_renderer' shared service.

include_once \dirname(__DIR__, 4).'/vendor/stefandoorn/sitemap-plugin/src/Renderer/SitemapRendererInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/stefandoorn/sitemap-plugin/src/Renderer/SitemapRenderer.php';

return $this->privates['sylius.sitemap_renderer'] = new \SitemapPlugin\Renderer\SitemapRenderer(($this->privates['sylius.sitemap_renderer.twig_adapter'] ?? $this->load('getSylius_SitemapRenderer_TwigAdapterService.php')));
