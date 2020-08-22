<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_rest.routing.loader.xml_collection' shared service.

@trigger_error('The fos_rest.routing.loader.xml_collection service is deprecated since FOSRestBundle 2.8. You can disable it by setting the config `fos_rest.routing_loader.enabled` to `false`.', E_USER_DEPRECATED);

return $this->privates['fos_rest.routing.loader.xml_collection'] = new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader(($this->privates['file_locator'] ?? $this->load('getFileLocatorService.php')), ($this->privates['fos_rest.routing.loader.processor'] ?? $this->load('getFosRest_Routing_Loader_ProcessorService.php')), true, ['json' => false, 'xml' => false, 'html' => true], NULL);
