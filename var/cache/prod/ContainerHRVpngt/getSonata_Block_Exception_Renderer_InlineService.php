<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.block.exception.renderer.inline' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Renderer/RendererInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Renderer/InlineRenderer.php';

return $this->services['sonata.block.exception.renderer.inline'] = new \Sonata\BlockBundle\Exception\Renderer\InlineRenderer(($this->services['twig'] ?? $this->load('getTwigService.php')), '@SonataBlock/Block/block_exception.html.twig');
