<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'templating' shared service.

@trigger_error('The "templating" service is deprecated since Symfony 4.4 and will be removed in 5.0.', E_USER_DEPRECATED);

return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine(($this->services['twig'] ?? $this->load('getTwigService.php')), ($this->privates['templating.name_parser'] ?? $this->load('getTemplating_NameParserService.php')), ($this->privates['sylius.theme.templating.file_locator'] ?? $this->load('getSylius_Theme_Templating_FileLocatorService.php')));
