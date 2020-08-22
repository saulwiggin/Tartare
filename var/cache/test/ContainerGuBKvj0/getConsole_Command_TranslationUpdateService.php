<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.translation_update' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationUpdateCommand.php';

$this->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand(($this->privates['translation.writer'] ?? $this->load('getTranslation_WriterService.php')), ($this->privates['translation.reader'] ?? $this->load('getTranslation_ReaderService.php')), ($this->privates['translation.extractor'] ?? $this->load('getTranslation_ExtractorService.php')), 'en_US', (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'), 1 => (\dirname(__DIR__, 4).'/templates'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 3 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 4 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Context/Ui/Admin/LocaleContext.php'), 5 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Behat/Context/Ui/EmailContext.php'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 8 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 11 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php'), 12 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 13 => (\dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php'), 14 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 15 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Installer/Requirement/SettingsRequirements.php'), 16 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Installer/Requirement/ExtensionsRequirements.php'), 17 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Installer/Requirement/FilesystemRequirements.php'), 18 => (\dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/TranslatorListener.php'), 19 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/FlashHelper.php'), 20 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/DefaultTranslatedView.php'), 21 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrap4TranslatedView.php'), 22 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrap3TranslatedView.php'), 23 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrapTranslatedView.php'), 24 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/View/SemanticUiTranslatedView.php'), 25 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Provider/PaymentDescriptionProvider.php'), 26 => (\dirname(__DIR__, 4).'/vendor/jms/serializer/src/JMS/Serializer/Handler/FormErrorHandler.php')]);

$instance->setName('translation:update');

return $instance;
