<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.behat.context.transform.channel' shared service.

include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Context/Transform/ChannelContext.php';

return $this->services['sylius.behat.context.transform.channel'] = new \Sylius\Behat\Context\Transform\ChannelContext(($this->services['sylius.repository.channel'] ?? $this->getSylius_Repository_ChannelService()));
