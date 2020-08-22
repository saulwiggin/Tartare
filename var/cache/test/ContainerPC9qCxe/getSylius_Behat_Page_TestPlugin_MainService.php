<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.behat.page.test_plugin.main' shared service.

include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/PageInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/Page.php';
include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/SymfonyPageInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/SymfonyPage.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Page/TestPlugin/MainPageInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Page/TestPlugin/MainPage.php';

return $this->privates['sylius.behat.page.test_plugin.main'] = new \Sylius\Behat\Page\TestPlugin\MainPage(($this->services['behat.mink.default_session'] ?? $this->load('getBehat_Mink_DefaultSessionService.php')), ($this->services['behat.mink.parameters'] ?? $this->load('getBehat_Mink_ParametersService.php')), ($this->services['router'] ?? $this->getRouterService()));
