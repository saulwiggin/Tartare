<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.block.service.text' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/EditableBlockService.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/TextBlockService.php';

return $this->services['sonata.block.service.text'] = new \Sonata\BlockBundle\Block\Service\TextBlockService(($this->services['twig'] ?? $this->getTwigService()));
