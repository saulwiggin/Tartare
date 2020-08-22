<?php

namespace ContainerS2VlfZP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class srcApp_KernelProdContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'Sylius\\Bundle\\ThemeBundle\\Configuration\\ConfigurationProcessorInterface' => 'getConfigurationProcessorInterfaceService',
            'Sylius\\Bundle\\ThemeBundle\\Factory\\FinderFactoryInterface' => 'getFinderFactoryInterfaceService',
            'Sylius\\Bundle\\ThemeBundle\\Factory\\ThemeAuthorFactoryInterface' => 'getThemeAuthorFactoryInterfaceService',
            'Sylius\\Bundle\\ThemeBundle\\Factory\\ThemeFactoryInterface' => 'getThemeFactoryInterfaceService',
            'Sylius\\Bundle\\ThemeBundle\\Factory\\ThemeScreenshotFactoryInterface' => 'getThemeScreenshotFactoryInterfaceService',
            'Sylius\\Bundle\\ThemeBundle\\Filesystem\\FilesystemInterface' => 'getFilesystemInterfaceService',
            'Sylius\\Bundle\\ThemeBundle\\HierarchyProvider\\ThemeHierarchyProviderInterface' => 'getThemeHierarchyProviderInterfaceService',
            'Sylius\\Bundle\\ThemeBundle\\Loader\\CircularDependencyCheckerInterface' => 'getCircularDependencyCheckerInterfaceService',
            'Sylius\\Bundle\\ThemeBundle\\Loader\\ThemeLoaderInterface' => 'getThemeLoaderInterfaceService',
            'Sylius\\Bundle\\ThemeBundle\\Translation\\Finder\\TranslationFilesFinderInterface' => 'getTranslationFilesFinderInterfaceService',
            'Sylius\\Bundle\\ThemeBundle\\Translation\\Provider\\Loader\\TranslatorLoaderProviderInterface' => 'getTranslatorLoaderProviderInterfaceService',
            'Sylius\\Bundle\\ThemeBundle\\Translation\\Provider\\Resource\\TranslatorResourceProviderInterface' => 'getTranslatorResourceProviderInterfaceService',
            'Sylius\\Component\\Channel\\Context\\ChannelContextInterface' => 'getChannelContextInterfaceService',
            'Sylius\\Component\\Channel\\Context\\RequestBased\\RequestResolverInterface' => 'getRequestResolverInterfaceService',
            'Sylius\\Component\\Locale\\Context\\LocaleContextInterface' => 'getLocaleContextInterfaceService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'http_kernel' => 'getHttpKernelService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'session' => 'getSessionService',
            'sm.callback_factory' => 'getSm_CallbackFactoryService',
            'sm.factory' => 'getSm_FactoryService',
            'sylius.context.cart' => 'getSylius_Context_CartService',
            'sylius.context.cart.customer_and_channel_based' => 'getSylius_Context_Cart_CustomerAndChannelBasedService',
            'sylius.context.cart.new' => 'getSylius_Context_Cart_NewService',
            'sylius.context.cart.session_and_channel_based' => 'getSylius_Context_Cart_SessionAndChannelBasedService',
            'sylius.context.channel' => 'getSylius_Context_ChannelService',
            'sylius.context.currency.channel_aware' => 'getSylius_Context_Currency_ChannelAwareService',
            'sylius.context.currency.storage_based' => 'getSylius_Context_Currency_StorageBasedService',
            'sylius.context.customer' => 'getSylius_Context_CustomerService',
            'sylius.context.locale.admin_based' => 'getSylius_Context_Locale_AdminBasedService',
            'sylius.context.locale.provider_based' => 'getSylius_Context_Locale_ProviderBasedService',
            'sylius.context.locale.request_based' => 'getSylius_Context_Locale_RequestBasedService',
            'sylius.context.shopper' => 'getSylius_Context_ShopperService',
            'sylius.doctrine.orm.event_subscriber.load_metadata.attribute' => 'getSylius_Doctrine_Orm_EventSubscriber_LoadMetadata_AttributeService',
            'sylius.doctrine.orm.event_subscriber.load_metadata.review' => 'getSylius_Doctrine_Orm_EventSubscriber_LoadMetadata_ReviewService',
            'sylius.event_subscriber.orm_mapped_super_class' => 'getSylius_EventSubscriber_OrmMappedSuperClassService',
            'sylius.event_subscriber.orm_repository_class' => 'getSylius_EventSubscriber_OrmRepositoryClassService',
            'sylius.factory.order' => 'getSylius_Factory_OrderService',
            'sylius.listener.non_channel_request_locale' => 'getSylius_Listener_NonChannelRequestLocaleService',
            'sylius.listener.request_locale_setter' => 'getSylius_Listener_RequestLocaleSetterService',
            'sylius.listener.session_cart' => 'getSylius_Listener_SessionCartService',
            'sylius.locale_provider.channel_based' => 'getSylius_LocaleProvider_ChannelBasedService',
            'sylius.repository.channel' => 'getSylius_Repository_ChannelService',
            'sylius.repository.locale' => 'getSylius_Repository_LocaleService',
            'sylius.repository.order' => 'getSylius_Repository_OrderService',
            'sylius.repository.theme' => 'getSylius_Repository_ThemeService',
            'sylius.storage.cart_session' => 'getSylius_Storage_CartSessionService',
            'sylius.storage.cookie' => 'getSylius_Storage_CookieService',
            'sylius.storage.currency' => 'getSylius_Storage_CurrencyService',
            'sylius.theme.configuration.provider' => 'getSylius_Theme_Configuration_ProviderService',
            'sylius.translatable_entity_locale_assigner' => 'getSylius_TranslatableEntityLocaleAssignerService',
            'sylius.translation.translatable_listener.doctrine.orm' => 'getSylius_Translation_TranslatableListener_Doctrine_OrmService',
            'sylius.translation_locale_provider.admin' => 'getSylius_TranslationLocaleProvider_AdminService',
            'sylius.translator.listener' => 'getSylius_Translator_ListenerService',
            'sylius_resource.doctrine.mapping_driver_chain' => 'getSyliusResource_Doctrine_MappingDriverChainService',
            'translator' => 'getTranslatorService',
        ];
        $this->fileMap = [
            'Liip\\ImagineBundle\\Controller\\ImagineController' => 'getImagineControllerService.php',
            'Sylius\\Bundle\\AdminApiBundle\\Command\\CreateClientCommand' => 'getCreateClientCommandService.php',
            'Sylius\\Bundle\\AdminBundle\\Action\\RemoveAvatarAction' => 'getRemoveAvatarActionService.php',
            'Sylius\\Bundle\\AdminBundle\\Action\\ResendOrderConfirmationEmailAction' => 'getResendOrderConfirmationEmailActionService.php',
            'Sylius\\Bundle\\AdminBundle\\Action\\ResendShipmentConfirmationEmailAction' => 'getResendShipmentConfirmationEmailActionService.php',
            'Sylius\\Bundle\\AdminBundle\\EmailManager\\OrderEmailManagerInterface' => 'getOrderEmailManagerInterfaceService.php',
            'Sylius\\Bundle\\AdminBundle\\Twig\\ChannelNameExtension' => 'getChannelNameExtensionService.php',
            'Sylius\\Bundle\\AdminBundle\\Twig\\OrderUnitTaxesExtension' => 'getOrderUnitTaxesExtensionService.php',
            'Sylius\\Bundle\\CoreBundle\\Command\\CancelUnpaidOrdersCommand' => 'getCancelUnpaidOrdersCommandService.php',
            'Sylius\\Bundle\\CoreBundle\\Command\\CheckRequirementsCommand' => 'getCheckRequirementsCommandService.php',
            'Sylius\\Bundle\\CoreBundle\\Command\\InformAboutGUSCommand' => 'getInformAboutGUSCommandService.php',
            'Sylius\\Bundle\\CoreBundle\\Command\\InstallAssetsCommand' => 'getInstallAssetsCommandService.php',
            'Sylius\\Bundle\\CoreBundle\\Command\\InstallCommand' => 'getInstallCommandService.php',
            'Sylius\\Bundle\\CoreBundle\\Command\\InstallDatabaseCommand' => 'getInstallDatabaseCommandService.php',
            'Sylius\\Bundle\\CoreBundle\\Command\\InstallSampleDataCommand' => 'getInstallSampleDataCommandService.php',
            'Sylius\\Bundle\\CoreBundle\\Command\\SetupCommand' => 'getSetupCommandService.php',
            'Sylius\\Bundle\\CoreBundle\\Command\\ShowAvailablePluginsCommand' => 'getShowAvailablePluginsCommandService.php',
            'Sylius\\Bundle\\CoreBundle\\Security\\UserImpersonatorInterface' => 'getUserImpersonatorInterfaceService.php',
            'Sylius\\Bundle\\FixturesBundle\\Listener\\ListenerRegistryInterface' => 'getListenerRegistryInterfaceService.php',
            'Sylius\\Bundle\\FixturesBundle\\Suite\\SuiteFactoryInterface' => 'getSuiteFactoryInterfaceService.php',
            'Sylius\\Bundle\\OrderBundle\\Command\\RemoveExpiredCartsCommand' => 'getRemoveExpiredCartsCommandService.php',
            'Sylius\\Bundle\\PromotionBundle\\Command\\GenerateCouponsCommand' => 'getGenerateCouponsCommandService.php',
            'Sylius\\Bundle\\ThemeBundle\\Asset\\PathResolverInterface' => 'getPathResolverInterfaceService.php',
            'Sylius\\Bundle\\ThemeBundle\\Command\\AssetsInstallCommand' => 'getAssetsInstallCommandService.php',
            'Sylius\\Bundle\\ThemeBundle\\Command\\ListCommand' => 'getListCommandService.php',
            'Sylius\\Bundle\\ThemeBundle\\Locator\\ResourceLocatorInterface' => 'getResourceLocatorInterfaceService.php',
            'Sylius\\Bundle\\ThemeBundle\\Templating\\Locator\\TemplateLocatorInterface' => 'getTemplateLocatorInterfaceService.php',
            'Sylius\\Bundle\\UiBundle\\Twig\\LegacySonataBlockExtension' => 'getLegacySonataBlockExtensionService.php',
            'Sylius\\Bundle\\UserBundle\\Command\\DemoteUserCommand' => 'getDemoteUserCommandService.php',
            'Sylius\\Bundle\\UserBundle\\Command\\PromoteUserCommand' => 'getPromoteUserCommandService.php',
            'Sylius\\Component\\Addressing\\Factory\\ZoneFactoryInterface' => 'getZoneFactoryInterfaceService.php',
            'Sylius\\Component\\Channel\\Factory\\ChannelFactoryInterface' => 'getChannelFactoryInterfaceService.php',
            'Sylius\\Component\\Core\\Dashboard\\SalesDataProviderInterface' => 'getSalesDataProviderInterfaceService.php',
            'Sylius\\Component\\Core\\Factory\\PaymentMethodFactoryInterface' => 'getPaymentMethodFactoryInterfaceService.php',
            'Sylius\\Component\\Core\\Factory\\PromotionActionFactoryInterface' => 'getPromotionActionFactoryInterfaceService.php',
            'Sylius\\Component\\Core\\Factory\\PromotionRuleFactoryInterface' => 'getPromotionRuleFactoryInterfaceService.php',
            'Sylius\\Component\\Core\\Generator\\ImagePathGeneratorInterface' => 'getImagePathGeneratorInterfaceService.php',
            'Sylius\\Component\\Core\\Inventory\\Operator\\OrderInventoryOperatorInterface' => 'getOrderInventoryOperatorInterfaceService.php',
            'Sylius\\Component\\Order\\Factory\\AdjustmentFactoryInterface' => 'getAdjustmentFactoryInterfaceService.php',
            'Sylius\\Component\\Payment\\Factory\\PaymentFactoryInterface' => 'getPaymentFactoryInterfaceService.php',
            'Sylius\\Component\\Product\\Factory\\ProductFactoryInterface' => 'getProductFactoryInterfaceService.php',
            'Sylius\\Component\\Product\\Factory\\ProductVariantFactoryInterface' => 'getProductVariantFactoryInterfaceService.php',
            'Sylius\\Component\\Promotion\\Factory\\PromotionCouponFactoryInterface' => 'getPromotionCouponFactoryInterfaceService.php',
            'Sylius\\Component\\Taxonomy\\Factory\\TaxonFactoryInterface' => 'getTaxonFactoryInterfaceService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'cache.app' => 'getCache_AppService.php',
            'cache.app_clearer' => 'getCache_AppClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system' => 'getCache_SystemService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command.public_alias.Sylius\\Bundle\\FixturesBundle\\Command\\FixturesListCommand' => 'getFixturesListCommandService.php',
            'console.command.public_alias.Sylius\\Bundle\\FixturesBundle\\Command\\FixturesLoadCommand' => 'getFixturesLoadCommandService.php',
            'console.command.public_alias.doctrine_cache.contains_command' => 'getConsole_Command_PublicAlias_DoctrineCache_ContainsCommandService.php',
            'console.command.public_alias.doctrine_cache.delete_command' => 'getConsole_Command_PublicAlias_DoctrineCache_DeleteCommandService.php',
            'console.command.public_alias.doctrine_cache.flush_command' => 'getConsole_Command_PublicAlias_DoctrineCache_FlushCommandService.php',
            'console.command.public_alias.doctrine_cache.stats_command' => 'getConsole_Command_PublicAlias_DoctrineCache_StatsCommandService.php',
            'console.command.public_alias.fos_oauth_server.clean_command' => 'getConsole_Command_PublicAlias_FosOauthServer_CleanCommandService.php',
            'console.command.public_alias.fos_oauth_server.create_client_command' => 'getConsole_Command_PublicAlias_FosOauthServer_CreateClientCommandService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService.php',
            'doctrine' => 'getDoctrineService.php',
            'error_controller' => 'getErrorControllerService.php',
            'filesystem' => 'getFilesystemService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'form.type.file' => 'getForm_Type_FileService.php',
            'fos_oauth_server.controller.authorize' => 'getFosOauthServer_Controller_AuthorizeService.php',
            'fos_oauth_server.controller.token' => 'getFosOauthServer_Controller_TokenService.php',
            'fos_rest.exception.controller' => 'getFosRest_Exception_ControllerService.php',
            'fos_rest.exception.twig_controller' => 'getFosRest_Exception_TwigControllerService.php',
            'fos_rest.serializer.jms_handler_registry' => 'getFosRest_Serializer_JmsHandlerRegistryService.php',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService.php',
            'gaufrette.sylius_image_filesystem' => 'getGaufrette_SyliusImageFilesystemService.php',
            'hateoas.event_subscriber.json' => 'getHateoas_EventSubscriber_JsonService.php',
            'hateoas.event_subscriber.xml' => 'getHateoas_EventSubscriber_XmlService.php',
            'hateoas.expression.link' => 'getHateoas_Expression_LinkService.php',
            'hateoas.generator.registry' => 'getHateoas_Generator_RegistryService.php',
            'hateoas.helper.link' => 'getHateoas_Helper_LinkService.php',
            'jms_serializer' => 'getJmsSerializerService.php',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService.php',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService.php',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService.php',
            'jms_serializer.deserialization_context_factory' => 'getJmsSerializer_DeserializationContextFactoryService.php',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService.php',
            'jms_serializer.form_error_handler' => 'getJmsSerializer_FormErrorHandlerService.php',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService.php',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService.php',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService.php',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService.php',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService.php',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService.php',
            'jms_serializer.serialization_context_factory' => 'getJmsSerializer_SerializationContextFactoryService.php',
            'jms_serializer.twig_extension.serializer_runtime_helper' => 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService.php',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService.php',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService.php',
            'knp_gaufrette.filesystem_map' => 'getKnpGaufrette_FilesystemMapService.php',
            'knp_menu.factory' => 'getKnpMenu_FactoryService.php',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService.php',
            'liip_imagine.binary.loader.default' => 'getLiipImagine_Binary_Loader_DefaultService.php',
            'liip_imagine.cache.manager' => 'getLiipImagine_Cache_ManagerService.php',
            'liip_imagine.cache.resolver.default' => 'getLiipImagine_Cache_Resolver_DefaultService.php',
            'liip_imagine.cache.resolver.no_cache_web_path' => 'getLiipImagine_Cache_Resolver_NoCacheWebPathService.php',
            'liip_imagine.cache.signer' => 'getLiipImagine_Cache_SignerService.php',
            'liip_imagine.config.stack_collection' => 'getLiipImagine_Config_StackCollectionService.php',
            'liip_imagine.data.manager' => 'getLiipImagine_Data_ManagerService.php',
            'liip_imagine.filter.loader.downscale' => 'getLiipImagine_Filter_Loader_DownscaleService.php',
            'liip_imagine.filter.loader.fixed' => 'getLiipImagine_Filter_Loader_FixedService.php',
            'liip_imagine.filter.loader.flip' => 'getLiipImagine_Filter_Loader_FlipService.php',
            'liip_imagine.filter.loader.grayscale' => 'getLiipImagine_Filter_Loader_GrayscaleService.php',
            'liip_imagine.filter.loader.interlace' => 'getLiipImagine_Filter_Loader_InterlaceService.php',
            'liip_imagine.filter.loader.resample' => 'getLiipImagine_Filter_Loader_ResampleService.php',
            'liip_imagine.filter.loader.rotate' => 'getLiipImagine_Filter_Loader_RotateService.php',
            'liip_imagine.filter.manager' => 'getLiipImagine_Filter_ManagerService.php',
            'payum' => 'getPayumService.php',
            'payum.action.get_http_request' => 'getPayum_Action_GetHttpRequestService.php',
            'payum.action.obtain_credit_card_builder' => 'getPayum_Action_ObtainCreditCardBuilderService.php',
            'payum.builder' => 'getPayum_BuilderService.php',
            'payum.converter.reply_to_http_response' => 'getPayum_Converter_ReplyToHttpResponseService.php',
            'payum.dynamic_gateways.config_storage' => 'getPayum_DynamicGateways_ConfigStorageService.php',
            'payum.dynamic_registry' => 'getPayum_DynamicRegistryService.php',
            'payum.extension.logger' => 'getPayum_Extension_LoggerService.php',
            'payum.extension.storage.app_entity_order_order' => 'getPayum_Extension_Storage_AppEntityOrderOrderService.php',
            'payum.extension.storage.app_entity_payment_payment' => 'getPayum_Extension_Storage_AppEntityPaymentPaymentService.php',
            'payum.form.extension.gateway_factories_choice' => 'getPayum_Form_Extension_GatewayFactoriesChoiceService.php',
            'payum.form.type.credit_card' => 'getPayum_Form_Type_CreditCardService.php',
            'payum.form.type.credit_card_expiration_date' => 'getPayum_Form_Type_CreditCardExpirationDateService.php',
            'payum.form.type.gateway_config' => 'getPayum_Form_Type_GatewayConfigService.php',
            'payum.form.type.gateway_factories_choice' => 'getPayum_Form_Type_GatewayFactoriesChoiceService.php',
            'payum.listener.reply_to_http_response' => 'getPayum_Listener_ReplyToHttpResponseService.php',
            'payum.security.token_storage' => 'getPayum_Security_TokenStorageService.php',
            'payum.static_registry' => 'getPayum_StaticRegistryService.php',
            'payum.storage.app_entity_order_order' => 'getPayum_Storage_AppEntityOrderOrderService.php',
            'payum.storage.app_entity_payment_payment' => 'getPayum_Storage_AppEntityPaymentPaymentService.php',
            'payum.storage.sylius_bundle_payumbundle_model_gatewayconfig' => 'getPayum_Storage_SyliusBundlePayumbundleModelGatewayconfigService.php',
            'payum.storage.sylius_bundle_payumbundle_model_paymentsecuritytoken' => 'getPayum_Storage_SyliusBundlePayumbundleModelPaymentsecuritytokenService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'sm.callback.cascade_transition' => 'getSm_Callback_CascadeTransitionService.php',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService.php',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService.php',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService.php',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService.php',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService.php',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService.php',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService.php',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService.php',
            'sonata.block.manager' => 'getSonata_Block_ManagerService.php',
            'sonata.block.menu.registry' => 'getSonata_Block_Menu_RegistryService.php',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService.php',
            'sonata.block.service.container' => 'getSonata_Block_Service_ContainerService.php',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService.php',
            'sonata.block.service.menu' => 'getSonata_Block_Service_MenuService.php',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService.php',
            'sonata.block.service.template' => 'getSonata_Block_Service_TemplateService.php',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.transport' => 'getSwiftmailer_TransportService.php',
            'sylius.active_promotions_provider' => 'getSylius_ActivePromotionsProviderService.php',
            'sylius.address_comparator' => 'getSylius_AddressComparatorService.php',
            'sylius.adjustments_aggregator' => 'getSylius_AdjustmentsAggregatorService.php',
            'sylius.admin.menu_builder.customer.show' => 'getSylius_Admin_MenuBuilder_Customer_ShowService.php',
            'sylius.admin.menu_builder.main' => 'getSylius_Admin_MenuBuilder_MainService.php',
            'sylius.admin.menu_builder.order.show' => 'getSylius_Admin_MenuBuilder_Order_ShowService.php',
            'sylius.admin.menu_builder.product.update' => 'getSylius_Admin_MenuBuilder_Product_UpdateService.php',
            'sylius.admin.menu_builder.product_form' => 'getSylius_Admin_MenuBuilder_ProductFormService.php',
            'sylius.admin.menu_builder.product_variant_form' => 'getSylius_Admin_MenuBuilder_ProductVariantFormService.php',
            'sylius.admin.menu_builder.promotion.update' => 'getSylius_Admin_MenuBuilder_Promotion_UpdateService.php',
            'sylius.admin_user.pin_generator.password_reset' => 'getSylius_AdminUser_PinGenerator_PasswordResetService.php',
            'sylius.admin_user.token_generator.email_verification' => 'getSylius_AdminUser_TokenGenerator_EmailVerificationService.php',
            'sylius.admin_user.token_generator.password_reset' => 'getSylius_AdminUser_TokenGenerator_PasswordResetService.php',
            'sylius.attribute_type.checkbox' => 'getSylius_AttributeType_CheckboxService.php',
            'sylius.attribute_type.date' => 'getSylius_AttributeType_DateService.php',
            'sylius.attribute_type.datetime' => 'getSylius_AttributeType_DatetimeService.php',
            'sylius.attribute_type.integer' => 'getSylius_AttributeType_IntegerService.php',
            'sylius.attribute_type.percent' => 'getSylius_AttributeType_PercentService.php',
            'sylius.attribute_type.select' => 'getSylius_AttributeType_SelectService.php',
            'sylius.attribute_type.select.value.translations' => 'getSylius_AttributeType_Select_Value_TranslationsService.php',
            'sylius.attribute_type.text' => 'getSylius_AttributeType_TextService.php',
            'sylius.attribute_type.textarea' => 'getSylius_AttributeType_TextareaService.php',
            'sylius.availability_checker.default' => 'getSylius_AvailabilityChecker_DefaultService.php',
            'sylius.average_rating_calculator' => 'getSylius_AverageRatingCalculatorService.php',
            'sylius.calculator.order_items_subtotal' => 'getSylius_Calculator_OrderItemsSubtotalService.php',
            'sylius.calculator.product_variant_price' => 'getSylius_Calculator_ProductVariantPriceService.php',
            'sylius.calendar' => 'getSylius_CalendarService.php',
            'sylius.canonicalizer' => 'getSylius_CanonicalizerService.php',
            'sylius.checker.order_payment_method_selection_requirement' => 'getSylius_Checker_OrderPaymentMethodSelectionRequirementService.php',
            'sylius.checker.order_shipping_method_selection_requirement' => 'getSylius_Checker_OrderShippingMethodSelectionRequirementService.php',
            'sylius.checker.product_variants_parity' => 'getSylius_Checker_ProductVariantsParityService.php',
            'sylius.commands_provider.database_setup' => 'getSylius_CommandsProvider_DatabaseSetupService.php',
            'sylius.console.command.resource_debug' => 'getSylius_Console_Command_ResourceDebugService.php',
            'sylius.controller.address' => 'getSylius_Controller_AddressService.php',
            'sylius.controller.address_log_entry' => 'getSylius_Controller_AddressLogEntryService.php',
            'sylius.controller.adjustment' => 'getSylius_Controller_AdjustmentService.php',
            'sylius.controller.admin.dashboard' => 'getSylius_Controller_Admin_DashboardService.php',
            'sylius.controller.admin.notification' => 'getSylius_Controller_Admin_NotificationService.php',
            'sylius.controller.admin_user' => 'getSylius_Controller_AdminUserService.php',
            'sylius.controller.api_access_token' => 'getSylius_Controller_ApiAccessTokenService.php',
            'sylius.controller.api_auth_code' => 'getSylius_Controller_ApiAuthCodeService.php',
            'sylius.controller.api_client' => 'getSylius_Controller_ApiClientService.php',
            'sylius.controller.api_refresh_token' => 'getSylius_Controller_ApiRefreshTokenService.php',
            'sylius.controller.channel' => 'getSylius_Controller_ChannelService.php',
            'sylius.controller.channel_pricing' => 'getSylius_Controller_ChannelPricingService.php',
            'sylius.controller.country' => 'getSylius_Controller_CountryService.php',
            'sylius.controller.currency' => 'getSylius_Controller_CurrencyService.php',
            'sylius.controller.customer' => 'getSylius_Controller_CustomerService.php',
            'sylius.controller.customer_group' => 'getSylius_Controller_CustomerGroupService.php',
            'sylius.controller.customer_statistics' => 'getSylius_Controller_CustomerStatisticsService.php',
            'sylius.controller.exchange_rate' => 'getSylius_Controller_ExchangeRateService.php',
            'sylius.controller.gateway_config' => 'getSylius_Controller_GatewayConfigService.php',
            'sylius.controller.impersonate_user' => 'getSylius_Controller_ImpersonateUserService.php',
            'sylius.controller.inventory_unit' => 'getSylius_Controller_InventoryUnitService.php',
            'sylius.controller.locale' => 'getSylius_Controller_LocaleService.php',
            'sylius.controller.oauth_user' => 'getSylius_Controller_OauthUserService.php',
            'sylius.controller.order' => 'getSylius_Controller_OrderService.php',
            'sylius.controller.order_item' => 'getSylius_Controller_OrderItemService.php',
            'sylius.controller.order_item_unit' => 'getSylius_Controller_OrderItemUnitService.php',
            'sylius.controller.payment' => 'getSylius_Controller_PaymentService.php',
            'sylius.controller.payment_method' => 'getSylius_Controller_PaymentMethodService.php',
            'sylius.controller.payment_method_translation' => 'getSylius_Controller_PaymentMethodTranslationService.php',
            'sylius.controller.payment_security_token' => 'getSylius_Controller_PaymentSecurityTokenService.php',
            'sylius.controller.payum' => 'getSylius_Controller_PayumService.php',
            'sylius.controller.product' => 'getSylius_Controller_ProductService.php',
            'sylius.controller.product_association' => 'getSylius_Controller_ProductAssociationService.php',
            'sylius.controller.product_association_type' => 'getSylius_Controller_ProductAssociationTypeService.php',
            'sylius.controller.product_association_type_translation' => 'getSylius_Controller_ProductAssociationTypeTranslationService.php',
            'sylius.controller.product_attribute' => 'getSylius_Controller_ProductAttributeService.php',
            'sylius.controller.product_attribute_translation' => 'getSylius_Controller_ProductAttributeTranslationService.php',
            'sylius.controller.product_attribute_value' => 'getSylius_Controller_ProductAttributeValueService.php',
            'sylius.controller.product_image' => 'getSylius_Controller_ProductImageService.php',
            'sylius.controller.product_option' => 'getSylius_Controller_ProductOptionService.php',
            'sylius.controller.product_option_translation' => 'getSylius_Controller_ProductOptionTranslationService.php',
            'sylius.controller.product_option_value' => 'getSylius_Controller_ProductOptionValueService.php',
            'sylius.controller.product_option_value_translation' => 'getSylius_Controller_ProductOptionValueTranslationService.php',
            'sylius.controller.product_review' => 'getSylius_Controller_ProductReviewService.php',
            'sylius.controller.product_slug' => 'getSylius_Controller_ProductSlugService.php',
            'sylius.controller.product_taxon' => 'getSylius_Controller_ProductTaxonService.php',
            'sylius.controller.product_translation' => 'getSylius_Controller_ProductTranslationService.php',
            'sylius.controller.product_variant' => 'getSylius_Controller_ProductVariantService.php',
            'sylius.controller.product_variant_translation' => 'getSylius_Controller_ProductVariantTranslationService.php',
            'sylius.controller.promotion' => 'getSylius_Controller_PromotionService.php',
            'sylius.controller.promotion_action' => 'getSylius_Controller_PromotionActionService.php',
            'sylius.controller.promotion_coupon' => 'getSylius_Controller_PromotionCouponService.php',
            'sylius.controller.promotion_rule' => 'getSylius_Controller_PromotionRuleService.php',
            'sylius.controller.province' => 'getSylius_Controller_ProvinceService.php',
            'sylius.controller.security' => 'getSylius_Controller_SecurityService.php',
            'sylius.controller.shipment' => 'getSylius_Controller_ShipmentService.php',
            'sylius.controller.shipment_unit' => 'getSylius_Controller_ShipmentUnitService.php',
            'sylius.controller.shipping_category' => 'getSylius_Controller_ShippingCategoryService.php',
            'sylius.controller.shipping_method' => 'getSylius_Controller_ShippingMethodService.php',
            'sylius.controller.shipping_method_translation' => 'getSylius_Controller_ShippingMethodTranslationService.php',
            'sylius.controller.shop.contact' => 'getSylius_Controller_Shop_ContactService.php',
            'sylius.controller.shop.currency_switch' => 'getSylius_Controller_Shop_CurrencySwitchService.php',
            'sylius.controller.shop.homepage' => 'getSylius_Controller_Shop_HomepageService.php',
            'sylius.controller.shop.locale_switch' => 'getSylius_Controller_Shop_LocaleSwitchService.php',
            'sylius.controller.shop.security_widget' => 'getSylius_Controller_Shop_SecurityWidgetService.php',
            'sylius.controller.shop_billing_data' => 'getSylius_Controller_ShopBillingDataService.php',
            'sylius.controller.shop_user' => 'getSylius_Controller_ShopUserService.php',
            'sylius.controller.show_available_payment_methods' => 'getSylius_Controller_ShowAvailablePaymentMethodsService.php',
            'sylius.controller.show_available_shipping_methods' => 'getSylius_Controller_ShowAvailableShippingMethodsService.php',
            'sylius.controller.sitemap' => 'getSylius_Controller_SitemapService.php',
            'sylius.controller.sitemap_index' => 'getSylius_Controller_SitemapIndexService.php',
            'sylius.controller.tax_category' => 'getSylius_Controller_TaxCategoryService.php',
            'sylius.controller.tax_rate' => 'getSylius_Controller_TaxRateService.php',
            'sylius.controller.taxon' => 'getSylius_Controller_TaxonService.php',
            'sylius.controller.taxon_image' => 'getSylius_Controller_TaxonImageService.php',
            'sylius.controller.taxon_slug' => 'getSylius_Controller_TaxonSlugService.php',
            'sylius.controller.taxon_translation' => 'getSylius_Controller_TaxonTranslationService.php',
            'sylius.controller.update_product_taxon_position' => 'getSylius_Controller_UpdateProductTaxonPositionService.php',
            'sylius.controller.user_security' => 'getSylius_Controller_UserSecurityService.php',
            'sylius.controller.zone' => 'getSylius_Controller_ZoneService.php',
            'sylius.controller.zone_member' => 'getSylius_Controller_ZoneMemberService.php',
            'sylius.converter.country_name' => 'getSylius_Converter_CountryNameService.php',
            'sylius.currency_converter' => 'getSylius_CurrencyConverterService.php',
            'sylius.currency_name_converter' => 'getSylius_CurrencyNameConverterService.php',
            'sylius.custom_bulk_action_grid_renderer.twig' => 'getSylius_CustomBulkActionGridRenderer_TwigService.php',
            'sylius.custom_grid_renderer.twig' => 'getSylius_CustomGridRenderer_TwigService.php',
            'sylius.customer_ip_assigner' => 'getSylius_CustomerIpAssignerService.php',
            'sylius.customer_order_addresses_saver' => 'getSylius_CustomerOrderAddressesSaverService.php',
            'sylius.customer_statistics_provider' => 'getSylius_CustomerStatisticsProviderService.php',
            'sylius.customer_unique_address_adder' => 'getSylius_CustomerUniqueAddressAdderService.php',
            'sylius.dashboard.statistics_provider' => 'getSylius_Dashboard_StatisticsProviderService.php',
            'sylius.email_manager.contact' => 'getSylius_EmailManager_ContactService.php',
            'sylius.email_manager.order' => 'getSylius_EmailManager_OrderService.php',
            'sylius.email_manager.shipment' => 'getSylius_EmailManager_ShipmentService.php',
            'sylius.email_provider' => 'getSylius_EmailProviderService.php',
            'sylius.email_renderer.adapter.twig' => 'getSylius_EmailRenderer_Adapter_TwigService.php',
            'sylius.email_sender' => 'getSylius_EmailSenderService.php',
            'sylius.email_sender.adapter.swiftmailer' => 'getSylius_EmailSender_Adapter_SwiftmailerService.php',
            'sylius.event_subscriber.resource_delete' => 'getSylius_EventSubscriber_ResourceDeleteService.php',
            'sylius.expired_carts_remover' => 'getSylius_ExpiredCartsRemoverService.php',
            'sylius.factory.add_to_cart_command' => 'getSylius_Factory_AddToCartCommandService.php',
            'sylius.factory.address' => 'getSylius_Factory_AddressService.php',
            'sylius.factory.address_log_entry' => 'getSylius_Factory_AddressLogEntryService.php',
            'sylius.factory.admin_user' => 'getSylius_Factory_AdminUserService.php',
            'sylius.factory.api_access_token' => 'getSylius_Factory_ApiAccessTokenService.php',
            'sylius.factory.api_auth_code' => 'getSylius_Factory_ApiAuthCodeService.php',
            'sylius.factory.api_client' => 'getSylius_Factory_ApiClientService.php',
            'sylius.factory.api_refresh_token' => 'getSylius_Factory_ApiRefreshTokenService.php',
            'sylius.factory.cart_item' => 'getSylius_Factory_CartItemService.php',
            'sylius.factory.channel_pricing' => 'getSylius_Factory_ChannelPricingService.php',
            'sylius.factory.country' => 'getSylius_Factory_CountryService.php',
            'sylius.factory.currency' => 'getSylius_Factory_CurrencyService.php',
            'sylius.factory.customer' => 'getSylius_Factory_CustomerService.php',
            'sylius.factory.customer_after_checkout' => 'getSylius_Factory_CustomerAfterCheckoutService.php',
            'sylius.factory.customer_group' => 'getSylius_Factory_CustomerGroupService.php',
            'sylius.factory.email' => 'getSylius_Factory_EmailService.php',
            'sylius.factory.exchange_rate' => 'getSylius_Factory_ExchangeRateService.php',
            'sylius.factory.gateway_config' => 'getSylius_Factory_GatewayConfigService.php',
            'sylius.factory.inventory_unit' => 'getSylius_Factory_InventoryUnitService.php',
            'sylius.factory.locale' => 'getSylius_Factory_LocaleService.php',
            'sylius.factory.oauth_user' => 'getSylius_Factory_OauthUserService.php',
            'sylius.factory.order_item_unit' => 'getSylius_Factory_OrderItemUnitService.php',
            'sylius.factory.order_sequence' => 'getSylius_Factory_OrderSequenceService.php',
            'sylius.factory.payment_method_translation' => 'getSylius_Factory_PaymentMethodTranslationService.php',
            'sylius.factory.payment_security_token' => 'getSylius_Factory_PaymentSecurityTokenService.php',
            'sylius.factory.payum_get_status_action' => 'getSylius_Factory_PayumGetStatusActionService.php',
            'sylius.factory.payum_resolve_next_route' => 'getSylius_Factory_PayumResolveNextRouteService.php',
            'sylius.factory.product_association' => 'getSylius_Factory_ProductAssociationService.php',
            'sylius.factory.product_association_type' => 'getSylius_Factory_ProductAssociationTypeService.php',
            'sylius.factory.product_association_type_translation' => 'getSylius_Factory_ProductAssociationTypeTranslationService.php',
            'sylius.factory.product_attribute' => 'getSylius_Factory_ProductAttributeService.php',
            'sylius.factory.product_attribute_translation' => 'getSylius_Factory_ProductAttributeTranslationService.php',
            'sylius.factory.product_attribute_value' => 'getSylius_Factory_ProductAttributeValueService.php',
            'sylius.factory.product_image' => 'getSylius_Factory_ProductImageService.php',
            'sylius.factory.product_option' => 'getSylius_Factory_ProductOptionService.php',
            'sylius.factory.product_option_translation' => 'getSylius_Factory_ProductOptionTranslationService.php',
            'sylius.factory.product_option_value' => 'getSylius_Factory_ProductOptionValueService.php',
            'sylius.factory.product_option_value_translation' => 'getSylius_Factory_ProductOptionValueTranslationService.php',
            'sylius.factory.product_review' => 'getSylius_Factory_ProductReviewService.php',
            'sylius.factory.product_reviewer' => 'getSylius_Factory_ProductReviewerService.php',
            'sylius.factory.product_taxon' => 'getSylius_Factory_ProductTaxonService.php',
            'sylius.factory.product_translation' => 'getSylius_Factory_ProductTranslationService.php',
            'sylius.factory.product_variant_translation' => 'getSylius_Factory_ProductVariantTranslationService.php',
            'sylius.factory.promotion' => 'getSylius_Factory_PromotionService.php',
            'sylius.factory.province' => 'getSylius_Factory_ProvinceService.php',
            'sylius.factory.shipment' => 'getSylius_Factory_ShipmentService.php',
            'sylius.factory.shipment_unit' => 'getSylius_Factory_ShipmentUnitService.php',
            'sylius.factory.shipping_category' => 'getSylius_Factory_ShippingCategoryService.php',
            'sylius.factory.shipping_method' => 'getSylius_Factory_ShippingMethodService.php',
            'sylius.factory.shipping_method_translation' => 'getSylius_Factory_ShippingMethodTranslationService.php',
            'sylius.factory.shop_billing_data' => 'getSylius_Factory_ShopBillingDataService.php',
            'sylius.factory.shop_user' => 'getSylius_Factory_ShopUserService.php',
            'sylius.factory.tax_category' => 'getSylius_Factory_TaxCategoryService.php',
            'sylius.factory.tax_rate' => 'getSylius_Factory_TaxRateService.php',
            'sylius.factory.taxon_image' => 'getSylius_Factory_TaxonImageService.php',
            'sylius.factory.taxon_translation' => 'getSylius_Factory_TaxonTranslationService.php',
            'sylius.factory.zone_member' => 'getSylius_Factory_ZoneMemberService.php',
            'sylius.fixture.address' => 'getSylius_Fixture_AddressService.php',
            'sylius.fixture.admin_user' => 'getSylius_Fixture_AdminUserService.php',
            'sylius.fixture.api_access_token' => 'getSylius_Fixture_ApiAccessTokenService.php',
            'sylius.fixture.api_client' => 'getSylius_Fixture_ApiClientService.php',
            'sylius.fixture.book_product' => 'getSylius_Fixture_BookProductService.php',
            'sylius.fixture.channel' => 'getSylius_Fixture_ChannelService.php',
            'sylius.fixture.currency' => 'getSylius_Fixture_CurrencyService.php',
            'sylius.fixture.customer_group' => 'getSylius_Fixture_CustomerGroupService.php',
            'sylius.fixture.example_factory.address' => 'getSylius_Fixture_ExampleFactory_AddressService.php',
            'sylius.fixture.example_factory.admin_user' => 'getSylius_Fixture_ExampleFactory_AdminUserService.php',
            'sylius.fixture.example_factory.api_access_token' => 'getSylius_Fixture_ExampleFactory_ApiAccessTokenService.php',
            'sylius.fixture.example_factory.api_client' => 'getSylius_Fixture_ExampleFactory_ApiClientService.php',
            'sylius.fixture.example_factory.channel' => 'getSylius_Fixture_ExampleFactory_ChannelService.php',
            'sylius.fixture.example_factory.customer_group' => 'getSylius_Fixture_ExampleFactory_CustomerGroupService.php',
            'sylius.fixture.example_factory.order' => 'getSylius_Fixture_ExampleFactory_OrderService.php',
            'sylius.fixture.example_factory.payment_method' => 'getSylius_Fixture_ExampleFactory_PaymentMethodService.php',
            'sylius.fixture.example_factory.product' => 'getSylius_Fixture_ExampleFactory_ProductService.php',
            'sylius.fixture.example_factory.product_association' => 'getSylius_Fixture_ExampleFactory_ProductAssociationService.php',
            'sylius.fixture.example_factory.product_association_type' => 'getSylius_Fixture_ExampleFactory_ProductAssociationTypeService.php',
            'sylius.fixture.example_factory.product_attribute' => 'getSylius_Fixture_ExampleFactory_ProductAttributeService.php',
            'sylius.fixture.example_factory.product_option' => 'getSylius_Fixture_ExampleFactory_ProductOptionService.php',
            'sylius.fixture.example_factory.product_review' => 'getSylius_Fixture_ExampleFactory_ProductReviewService.php',
            'sylius.fixture.example_factory.promotion' => 'getSylius_Fixture_ExampleFactory_PromotionService.php',
            'sylius.fixture.example_factory.promotion_action' => 'getSylius_Fixture_ExampleFactory_PromotionActionService.php',
            'sylius.fixture.example_factory.promotion_rule' => 'getSylius_Fixture_ExampleFactory_PromotionRuleService.php',
            'sylius.fixture.example_factory.shipping_category' => 'getSylius_Fixture_ExampleFactory_ShippingCategoryService.php',
            'sylius.fixture.example_factory.shipping_method' => 'getSylius_Fixture_ExampleFactory_ShippingMethodService.php',
            'sylius.fixture.example_factory.shop_user' => 'getSylius_Fixture_ExampleFactory_ShopUserService.php',
            'sylius.fixture.example_factory.tax_category' => 'getSylius_Fixture_ExampleFactory_TaxCategoryService.php',
            'sylius.fixture.example_factory.tax_rate' => 'getSylius_Fixture_ExampleFactory_TaxRateService.php',
            'sylius.fixture.example_factory.taxon' => 'getSylius_Fixture_ExampleFactory_TaxonService.php',
            'sylius.fixture.geographical' => 'getSylius_Fixture_GeographicalService.php',
            'sylius.fixture.locale' => 'getSylius_Fixture_LocaleService.php',
            'sylius.fixture.mug_product' => 'getSylius_Fixture_MugProductService.php',
            'sylius.fixture.order' => 'getSylius_Fixture_OrderService.php',
            'sylius.fixture.payment_method' => 'getSylius_Fixture_PaymentMethodService.php',
            'sylius.fixture.product' => 'getSylius_Fixture_ProductService.php',
            'sylius.fixture.product_association' => 'getSylius_Fixture_ProductAssociationService.php',
            'sylius.fixture.product_association_type' => 'getSylius_Fixture_ProductAssociationTypeService.php',
            'sylius.fixture.product_attribute' => 'getSylius_Fixture_ProductAttributeService.php',
            'sylius.fixture.product_option' => 'getSylius_Fixture_ProductOptionService.php',
            'sylius.fixture.product_review' => 'getSylius_Fixture_ProductReviewService.php',
            'sylius.fixture.promotion' => 'getSylius_Fixture_PromotionService.php',
            'sylius.fixture.shipping_category' => 'getSylius_Fixture_ShippingCategoryService.php',
            'sylius.fixture.shipping_method' => 'getSylius_Fixture_ShippingMethodService.php',
            'sylius.fixture.shop_user' => 'getSylius_Fixture_ShopUserService.php',
            'sylius.fixture.similar_product_association' => 'getSylius_Fixture_SimilarProductAssociationService.php',
            'sylius.fixture.sticker_product' => 'getSylius_Fixture_StickerProductService.php',
            'sylius.fixture.tax_category' => 'getSylius_Fixture_TaxCategoryService.php',
            'sylius.fixture.tax_rate' => 'getSylius_Fixture_TaxRateService.php',
            'sylius.fixture.taxon' => 'getSylius_Fixture_TaxonService.php',
            'sylius.fixture.tshirt_product' => 'getSylius_Fixture_TshirtProductService.php',
            'sylius.form.choice_list.loader.lazy_customer_loader' => 'getSylius_Form_ChoiceList_Loader_LazyCustomerLoaderService.php',
            'sylius.form.data_mapper.order_item_quantity' => 'getSylius_Form_DataMapper_OrderItemQuantityService.php',
            'sylius.form.event_subscriber.product_variant_generator' => 'getSylius_Form_EventSubscriber_ProductVariantGeneratorService.php',
            'sylius.form.extension.type.address' => 'getSylius_Form_Extension_Type_AddressService.php',
            'sylius.form.extension.type.api_order_item' => 'getSylius_Form_Extension_Type_ApiOrderItemService.php',
            'sylius.form.extension.type.cart' => 'getSylius_Form_Extension_Type_CartService.php',
            'sylius.form.extension.type.cart_item' => 'getSylius_Form_Extension_Type_CartItemService.php',
            'sylius.form.extension.type.channel' => 'getSylius_Form_Extension_Type_ChannelService.php',
            'sylius.form.extension.type.collection' => 'getSylius_Form_Extension_Type_CollectionService.php',
            'sylius.form.extension.type.country' => 'getSylius_Form_Extension_Type_CountryService.php',
            'sylius.form.extension.type.customer' => 'getSylius_Form_Extension_Type_CustomerService.php',
            'sylius.form.extension.type.gateway_config.crypted' => 'getSylius_Form_Extension_Type_GatewayConfig_CryptedService.php',
            'sylius.form.extension.type.locale' => 'getSylius_Form_Extension_Type_LocaleService.php',
            'sylius.form.extension.type.order' => 'getSylius_Form_Extension_Type_OrderService.php',
            'sylius.form.extension.type.payment_method' => 'getSylius_Form_Extension_Type_PaymentMethodService.php',
            'sylius.form.extension.type.product' => 'getSylius_Form_Extension_Type_ProductService.php',
            'sylius.form.extension.type.product_translation' => 'getSylius_Form_Extension_Type_ProductTranslationService.php',
            'sylius.form.extension.type.product_variant' => 'getSylius_Form_Extension_Type_ProductVariantService.php',
            'sylius.form.extension.type.product_variant_generation' => 'getSylius_Form_Extension_Type_ProductVariantGenerationService.php',
            'sylius.form.extension.type.promotion' => 'getSylius_Form_Extension_Type_PromotionService.php',
            'sylius.form.extension.type.promotion_coupon' => 'getSylius_Form_Extension_Type_PromotionCouponService.php',
            'sylius.form.extension.type.promotion_filter_collection' => 'getSylius_Form_Extension_Type_PromotionFilterCollectionService.php',
            'sylius.form.extension.type.shipping_method' => 'getSylius_Form_Extension_Type_ShippingMethodService.php',
            'sylius.form.extension.type.tax_rate' => 'getSylius_Form_Extension_Type_TaxRateService.php',
            'sylius.form.extension.type.taxon' => 'getSylius_Form_Extension_Type_TaxonService.php',
            'sylius.form.type.add_to_cart' => 'getSylius_Form_Type_AddToCartService.php',
            'sylius.form.type.address' => 'getSylius_Form_Type_AddressService.php',
            'sylius.form.type.address_choice' => 'getSylius_Form_Type_AddressChoiceService.php',
            'sylius.form.type.admin_user' => 'getSylius_Form_Type_AdminUserService.php',
            'sylius.form.type.api_checkout_address' => 'getSylius_Form_Type_ApiCheckoutAddressService.php',
            'sylius.form.type.api_client' => 'getSylius_Form_Type_ApiClientService.php',
            'sylius.form.type.api_customer' => 'getSylius_Form_Type_ApiCustomerService.php',
            'sylius.form.type.api_order' => 'getSylius_Form_Type_ApiOrderService.php',
            'sylius.form.type.api_order_item' => 'getSylius_Form_Type_ApiOrderItemService.php',
            'sylius.form.type.api_order_promotion_coupon' => 'getSylius_Form_Type_ApiOrderPromotionCouponService.php',
            'sylius.form.type.api_product' => 'getSylius_Form_Type_ApiProductService.php',
            'sylius.form.type.api_product_variant' => 'getSylius_Form_Type_ApiProductVariantService.php',
            'sylius.form.type.attribute_type.select' => 'getSylius_Form_Type_AttributeType_SelectService.php',
            'sylius.form.type.attribute_type.select.choices_collection' => 'getSylius_Form_Type_AttributeType_Select_ChoicesCollectionService.php',
            'sylius.form.type.attribute_type_choice' => 'getSylius_Form_Type_AttributeTypeChoiceService.php',
            'sylius.form.type.autocomplete_product_taxon_choice' => 'getSylius_Form_Type_AutocompleteProductTaxonChoiceService.php',
            'sylius.form.type.avatar_image' => 'getSylius_Form_Type_AvatarImageService.php',
            'sylius.form.type.cart' => 'getSylius_Form_Type_CartService.php',
            'sylius.form.type.cart_item' => 'getSylius_Form_Type_CartItemService.php',
            'sylius.form.type.channel' => 'getSylius_Form_Type_ChannelService.php',
            'sylius.form.type.channel_based_shipping_calculator.flat_rate' => 'getSylius_Form_Type_ChannelBasedShippingCalculator_FlatRateService.php',
            'sylius.form.type.channel_based_shipping_calculator.per_unit_rate' => 'getSylius_Form_Type_ChannelBasedShippingCalculator_PerUnitRateService.php',
            'sylius.form.type.channel_choice' => 'getSylius_Form_Type_ChannelChoiceService.php',
            'sylius.form.type.channel_pricing' => 'getSylius_Form_Type_ChannelPricingService.php',
            'sylius.form.type.channels_collection' => 'getSylius_Form_Type_ChannelsCollectionService.php',
            'sylius.form.type.checkout_address' => 'getSylius_Form_Type_CheckoutAddressService.php',
            'sylius.form.type.checkout_complete' => 'getSylius_Form_Type_CheckoutCompleteService.php',
            'sylius.form.type.checkout_payment' => 'getSylius_Form_Type_CheckoutPaymentService.php',
            'sylius.form.type.checkout_select_payment' => 'getSylius_Form_Type_CheckoutSelectPaymentService.php',
            'sylius.form.type.checkout_select_shipping' => 'getSylius_Form_Type_CheckoutSelectShippingService.php',
            'sylius.form.type.checkout_shipment' => 'getSylius_Form_Type_CheckoutShipmentService.php',
            'sylius.form.type.country' => 'getSylius_Form_Type_CountryService.php',
            'sylius.form.type.country_choice' => 'getSylius_Form_Type_CountryChoiceService.php',
            'sylius.form.type.country_code_choice' => 'getSylius_Form_Type_CountryCodeChoiceService.php',
            'sylius.form.type.currency' => 'getSylius_Form_Type_CurrencyService.php',
            'sylius.form.type.currency_choice' => 'getSylius_Form_Type_CurrencyChoiceService.php',
            'sylius.form.type.customer' => 'getSylius_Form_Type_CustomerService.php',
            'sylius.form.type.customer_checkout_guest' => 'getSylius_Form_Type_CustomerCheckoutGuestService.php',
            'sylius.form.type.customer_choice' => 'getSylius_Form_Type_CustomerChoiceService.php',
            'sylius.form.type.customer_group' => 'getSylius_Form_Type_CustomerGroupService.php',
            'sylius.form.type.customer_group_choice' => 'getSylius_Form_Type_CustomerGroupChoiceService.php',
            'sylius.form.type.customer_group_code_choice' => 'getSylius_Form_Type_CustomerGroupCodeChoiceService.php',
            'sylius.form.type.customer_guest' => 'getSylius_Form_Type_CustomerGuestService.php',
            'sylius.form.type.customer_profile' => 'getSylius_Form_Type_CustomerProfileService.php',
            'sylius.form.type.customer_registration' => 'getSylius_Form_Type_CustomerRegistrationService.php',
            'sylius.form.type.customer_simple_registration' => 'getSylius_Form_Type_CustomerSimpleRegistrationService.php',
            'sylius.form.type.data_transformer.products_to_codes' => 'getSylius_Form_Type_DataTransformer_ProductsToCodesService.php',
            'sylius.form.type.data_transformer.products_to_product_associations' => 'getSylius_Form_Type_DataTransformer_ProductsToProductAssociationsService.php',
            'sylius.form.type.data_transformer.taxons_to_codes' => 'getSylius_Form_Type_DataTransformer_TaxonsToCodesService.php',
            'sylius.form.type.default' => 'getSylius_Form_Type_DefaultService.php',
            'sylius.form.type.exchange_rate' => 'getSylius_Form_Type_ExchangeRateService.php',
            'sylius.form.type.gateway_config' => 'getSylius_Form_Type_GatewayConfigService.php',
            'sylius.form.type.gateway_configuration.paypal' => 'getSylius_Form_Type_GatewayConfiguration_PaypalService.php',
            'sylius.form.type.gateway_configuration.stripe' => 'getSylius_Form_Type_GatewayConfiguration_StripeService.php',
            'sylius.form.type.grid_filter.boolean' => 'getSylius_Form_Type_GridFilter_BooleanService.php',
            'sylius.form.type.grid_filter.date' => 'getSylius_Form_Type_GridFilter_DateService.php',
            'sylius.form.type.grid_filter.entity' => 'getSylius_Form_Type_GridFilter_EntityService.php',
            'sylius.form.type.grid_filter.exists' => 'getSylius_Form_Type_GridFilter_ExistsService.php',
            'sylius.form.type.grid_filter.money' => 'getSylius_Form_Type_GridFilter_MoneyService.php',
            'sylius.form.type.grid_filter.select' => 'getSylius_Form_Type_GridFilter_SelectService.php',
            'sylius.form.type.grid_filter.string' => 'getSylius_Form_Type_GridFilter_StringService.php',
            'sylius.form.type.locale' => 'getSylius_Form_Type_LocaleService.php',
            'sylius.form.type.locale_choice' => 'getSylius_Form_Type_LocaleChoiceService.php',
            'sylius.form.type.money' => 'getSylius_Form_Type_MoneyService.php',
            'sylius.form.type.order' => 'getSylius_Form_Type_OrderService.php',
            'sylius.form.type.order_item' => 'getSylius_Form_Type_OrderItemService.php',
            'sylius.form.type.payment' => 'getSylius_Form_Type_PaymentService.php',
            'sylius.form.type.payment_gateway_choice' => 'getSylius_Form_Type_PaymentGatewayChoiceService.php',
            'sylius.form.type.payment_method' => 'getSylius_Form_Type_PaymentMethodService.php',
            'sylius.form.type.payment_method_choice' => 'getSylius_Form_Type_PaymentMethodChoiceService.php',
            'sylius.form.type.payment_method_translation' => 'getSylius_Form_Type_PaymentMethodTranslationService.php',
            'sylius.form.type.product' => 'getSylius_Form_Type_ProductService.php',
            'sylius.form.type.product_association' => 'getSylius_Form_Type_ProductAssociationService.php',
            'sylius.form.type.product_association_type' => 'getSylius_Form_Type_ProductAssociationTypeService.php',
            'sylius.form.type.product_association_type_choice' => 'getSylius_Form_Type_ProductAssociationTypeChoiceService.php',
            'sylius.form.type.product_association_type_translation' => 'getSylius_Form_Type_ProductAssociationTypeTranslationService.php',
            'sylius.form.type.product_attribute' => 'getSylius_Form_Type_ProductAttributeService.php',
            'sylius.form.type.product_attribute_choice' => 'getSylius_Form_Type_ProductAttributeChoiceService.php',
            'sylius.form.type.product_attribute_translation' => 'getSylius_Form_Type_ProductAttributeTranslationService.php',
            'sylius.form.type.product_attribute_value' => 'getSylius_Form_Type_ProductAttributeValueService.php',
            'sylius.form.type.product_choice' => 'getSylius_Form_Type_ProductChoiceService.php',
            'sylius.form.type.product_code_choice' => 'getSylius_Form_Type_ProductCodeChoiceService.php',
            'sylius.form.type.product_generate_variants' => 'getSylius_Form_Type_ProductGenerateVariantsService.php',
            'sylius.form.type.product_image' => 'getSylius_Form_Type_ProductImageService.php',
            'sylius.form.type.product_option' => 'getSylius_Form_Type_ProductOptionService.php',
            'sylius.form.type.product_option_choice' => 'getSylius_Form_Type_ProductOptionChoiceService.php',
            'sylius.form.type.product_option_translation' => 'getSylius_Form_Type_ProductOptionTranslationService.php',
            'sylius.form.type.product_option_value' => 'getSylius_Form_Type_ProductOptionValueService.php',
            'sylius.form.type.product_option_value_translation' => 'getSylius_Form_Type_ProductOptionValueTranslationService.php',
            'sylius.form.type.product_review' => 'getSylius_Form_Type_ProductReviewService.php',
            'sylius.form.type.product_translation' => 'getSylius_Form_Type_ProductTranslationService.php',
            'sylius.form.type.product_variant' => 'getSylius_Form_Type_ProductVariantService.php',
            'sylius.form.type.product_variant_generation' => 'getSylius_Form_Type_ProductVariantGenerationService.php',
            'sylius.form.type.product_variant_translation' => 'getSylius_Form_Type_ProductVariantTranslationService.php',
            'sylius.form.type.promotion' => 'getSylius_Form_Type_PromotionService.php',
            'sylius.form.type.promotion_action' => 'getSylius_Form_Type_PromotionActionService.php',
            'sylius.form.type.promotion_action.collection' => 'getSylius_Form_Type_PromotionAction_CollectionService.php',
            'sylius.form.type.promotion_action.filter.product' => 'getSylius_Form_Type_PromotionAction_Filter_ProductService.php',
            'sylius.form.type.promotion_action.filter.taxon' => 'getSylius_Form_Type_PromotionAction_Filter_TaxonService.php',
            'sylius.form.type.promotion_action_choice' => 'getSylius_Form_Type_PromotionActionChoiceService.php',
            'sylius.form.type.promotion_coupon' => 'getSylius_Form_Type_PromotionCouponService.php',
            'sylius.form.type.promotion_coupon_generator_instruction' => 'getSylius_Form_Type_PromotionCouponGeneratorInstructionService.php',
            'sylius.form.type.promotion_coupon_to_code' => 'getSylius_Form_Type_PromotionCouponToCodeService.php',
            'sylius.form.type.promotion_rule' => 'getSylius_Form_Type_PromotionRuleService.php',
            'sylius.form.type.promotion_rule.collection' => 'getSylius_Form_Type_PromotionRule_CollectionService.php',
            'sylius.form.type.promotion_rule.contains_product_configuration' => 'getSylius_Form_Type_PromotionRule_ContainsProductConfigurationService.php',
            'sylius.form.type.promotion_rule.customer_group_configuration' => 'getSylius_Form_Type_PromotionRule_CustomerGroupConfigurationService.php',
            'sylius.form.type.promotion_rule.has_taxon_configuration' => 'getSylius_Form_Type_PromotionRule_HasTaxonConfigurationService.php',
            'sylius.form.type.promotion_rule.total_of_items_from_taxon_configuration' => 'getSylius_Form_Type_PromotionRule_TotalOfItemsFromTaxonConfigurationService.php',
            'sylius.form.type.promotion_rule_choice' => 'getSylius_Form_Type_PromotionRuleChoiceService.php',
            'sylius.form.type.province' => 'getSylius_Form_Type_ProvinceService.php',
            'sylius.form.type.province_choice' => 'getSylius_Form_Type_ProvinceChoiceService.php',
            'sylius.form.type.province_code_choice' => 'getSylius_Form_Type_ProvinceCodeChoiceService.php',
            'sylius.form.type.resource_autocomplete_choice' => 'getSylius_Form_Type_ResourceAutocompleteChoiceService.php',
            'sylius.form.type.resource_translations' => 'getSylius_Form_Type_ResourceTranslationsService.php',
            'sylius.form.type.security_login' => 'getSylius_Form_Type_SecurityLoginService.php',
            'sylius.form.type.shipment' => 'getSylius_Form_Type_ShipmentService.php',
            'sylius.form.type.shipment_ship' => 'getSylius_Form_Type_ShipmentShipService.php',
            'sylius.form.type.shipping_calculator_choice' => 'getSylius_Form_Type_ShippingCalculatorChoiceService.php',
            'sylius.form.type.shipping_category' => 'getSylius_Form_Type_ShippingCategoryService.php',
            'sylius.form.type.shipping_category_choice' => 'getSylius_Form_Type_ShippingCategoryChoiceService.php',
            'sylius.form.type.shipping_method' => 'getSylius_Form_Type_ShippingMethodService.php',
            'sylius.form.type.shipping_method_choice' => 'getSylius_Form_Type_ShippingMethodChoiceService.php',
            'sylius.form.type.shipping_method_translation' => 'getSylius_Form_Type_ShippingMethodTranslationService.php',
            'sylius.form.type.shop_billing_data' => 'getSylius_Form_Type_ShopBillingDataService.php',
            'sylius.form.type.shop_user' => 'getSylius_Form_Type_ShopUserService.php',
            'sylius.form.type.shop_user_registration' => 'getSylius_Form_Type_ShopUserRegistrationService.php',
            'sylius.form.type.sylius_product_associations' => 'getSylius_Form_Type_SyliusProductAssociationsService.php',
            'sylius.form.type.tax_calculation_strategy_choice' => 'getSylius_Form_Type_TaxCalculationStrategyChoiceService.php',
            'sylius.form.type.tax_calculator_choice' => 'getSylius_Form_Type_TaxCalculatorChoiceService.php',
            'sylius.form.type.tax_category' => 'getSylius_Form_Type_TaxCategoryService.php',
            'sylius.form.type.tax_category_choice' => 'getSylius_Form_Type_TaxCategoryChoiceService.php',
            'sylius.form.type.tax_rate' => 'getSylius_Form_Type_TaxRateService.php',
            'sylius.form.type.taxon' => 'getSylius_Form_Type_TaxonService.php',
            'sylius.form.type.taxon_image' => 'getSylius_Form_Type_TaxonImageService.php',
            'sylius.form.type.taxon_position' => 'getSylius_Form_Type_TaxonPositionService.php',
            'sylius.form.type.taxon_translation' => 'getSylius_Form_Type_TaxonTranslationService.php',
            'sylius.form.type.user_change_password' => 'getSylius_Form_Type_UserChangePasswordService.php',
            'sylius.form.type.user_login' => 'getSylius_Form_Type_UserLoginService.php',
            'sylius.form.type.user_request_password_reset' => 'getSylius_Form_Type_UserRequestPasswordResetService.php',
            'sylius.form.type.user_reset_password' => 'getSylius_Form_Type_UserResetPasswordService.php',
            'sylius.form.type.zone' => 'getSylius_Form_Type_ZoneService.php',
            'sylius.form.type.zone_choice' => 'getSylius_Form_Type_ZoneChoiceService.php',
            'sylius.form.type.zone_code_choice' => 'getSylius_Form_Type_ZoneCodeChoiceService.php',
            'sylius.form.type.zone_member' => 'getSylius_Form_Type_ZoneMemberService.php',
            'sylius.form_registry.attribute_type' => 'getSylius_FormRegistry_AttributeTypeService.php',
            'sylius.form_registry.payum_gateway_config' => 'getSylius_FormRegistry_PayumGatewayConfigService.php',
            'sylius.form_registry.promotion_action' => 'getSylius_FormRegistry_PromotionActionService.php',
            'sylius.form_registry.promotion_rule_checker' => 'getSylius_FormRegistry_PromotionRuleCheckerService.php',
            'sylius.form_registry.shipping_calculator' => 'getSylius_FormRegistry_ShippingCalculatorService.php',
            'sylius.generator.product_variant' => 'getSylius_Generator_ProductVariantService.php',
            'sylius.generator.slug' => 'getSylius_Generator_SlugService.php',
            'sylius.generator.taxon_slug' => 'getSylius_Generator_TaxonSlugService.php',
            'sylius.grid.array_to_definition_converter' => 'getSylius_Grid_ArrayToDefinitionConverterService.php',
            'sylius.grid.data_extractor.property_access' => 'getSylius_Grid_DataExtractor_PropertyAccessService.php',
            'sylius.grid.data_provider' => 'getSylius_Grid_DataProviderService.php',
            'sylius.grid.data_source_provider' => 'getSylius_Grid_DataSourceProviderService.php',
            'sylius.grid.filters_applicator' => 'getSylius_Grid_FiltersApplicatorService.php',
            'sylius.grid.filters_criteria_resolver' => 'getSylius_Grid_FiltersCriteriaResolverService.php',
            'sylius.grid.provider' => 'getSylius_Grid_ProviderService.php',
            'sylius.grid.resource_view_factory' => 'getSylius_Grid_ResourceViewFactoryService.php',
            'sylius.grid.sorter' => 'getSylius_Grid_SorterService.php',
            'sylius.grid.view_factory' => 'getSylius_Grid_ViewFactoryService.php',
            'sylius.grid_driver.doctrine.dbal' => 'getSylius_GridDriver_Doctrine_DbalService.php',
            'sylius.grid_driver.doctrine.orm' => 'getSylius_GridDriver_Doctrine_OrmService.php',
            'sylius.grid_field.datetime' => 'getSylius_GridField_DatetimeService.php',
            'sylius.grid_field.string' => 'getSylius_GridField_StringService.php',
            'sylius.grid_field.twig' => 'getSylius_GridField_TwigService.php',
            'sylius.grid_filter.boolean' => 'getSylius_GridFilter_BooleanService.php',
            'sylius.grid_filter.date' => 'getSylius_GridFilter_DateService.php',
            'sylius.grid_filter.entity' => 'getSylius_GridFilter_EntityService.php',
            'sylius.grid_filter.exists' => 'getSylius_GridFilter_ExistsService.php',
            'sylius.grid_filter.money' => 'getSylius_GridFilter_MoneyService.php',
            'sylius.grid_filter.select' => 'getSylius_GridFilter_SelectService.php',
            'sylius.grid_filter.shop_string' => 'getSylius_GridFilter_ShopStringService.php',
            'sylius.grid_filter.string' => 'getSylius_GridFilter_StringService.php',
            'sylius.handler.shop_user_logout' => 'getSylius_Handler_ShopUserLogoutService.php',
            'sylius.image_uploader' => 'getSylius_ImageUploaderService.php',
            'sylius.installer.checker.command_directory' => 'getSylius_Installer_Checker_CommandDirectoryService.php',
            'sylius.installer.checker.sylius_requirements' => 'getSylius_Installer_Checker_SyliusRequirementsService.php',
            'sylius.integer_distributor' => 'getSylius_IntegerDistributorService.php',
            'sylius.invoice_number_generator' => 'getSylius_InvoiceNumberGeneratorService.php',
            'sylius.listener.api.add_to_cart' => 'getSylius_Listener_Api_AddToCartService.php',
            'sylius.listener.avatar_upload' => 'getSylius_Listener_AvatarUploadService.php',
            'sylius.listener.canonicalizer' => 'getSylius_Listener_CanonicalizerService.php',
            'sylius.listener.cart_blamer' => 'getSylius_Listener_CartBlamerService.php',
            'sylius.listener.channel' => 'getSylius_Listener_ChannelService.php',
            'sylius.listener.customer_default_address' => 'getSylius_Listener_CustomerDefaultAddressService.php',
            'sylius.listener.default_username' => 'getSylius_Listener_DefaultUsernameService.php',
            'sylius.listener.images_remove' => 'getSylius_Listener_ImagesRemoveService.php',
            'sylius.listener.images_upload' => 'getSylius_Listener_ImagesUploadService.php',
            'sylius.listener.locking' => 'getSylius_Listener_LockingService.php',
            'sylius.listener.order_complete' => 'getSylius_Listener_OrderCompleteService.php',
            'sylius.listener.order_customer_ip' => 'getSylius_Listener_OrderCustomerIpService.php',
            'sylius.listener.order_integrity_checker' => 'getSylius_Listener_OrderIntegrityCheckerService.php',
            'sylius.listener.order_recalculation' => 'getSylius_Listener_OrderRecalculationService.php',
            'sylius.listener.password_updater' => 'getSylius_Listener_PasswordUpdaterService.php',
            'sylius.listener.product_review_change' => 'getSylius_Listener_ProductReviewChangeService.php',
            'sylius.listener.review_create' => 'getSylius_Listener_ReviewCreateService.php',
            'sylius.listener.select_product_attribute_choice_remove' => 'getSylius_Listener_SelectProductAttributeChoiceRemoveService.php',
            'sylius.listener.shipment_ship' => 'getSylius_Listener_ShipmentShipService.php',
            'sylius.listener.simple_product_locking' => 'getSylius_Listener_SimpleProductLockingService.php',
            'sylius.listener.taxon_deletion' => 'getSylius_Listener_TaxonDeletionService.php',
            'sylius.listener.user_cart_recalculation' => 'getSylius_Listener_UserCartRecalculationService.php',
            'sylius.listener.user_impersonated' => 'getSylius_Listener_UserImpersonatedService.php',
            'sylius.listener.user_registration' => 'getSylius_Listener_UserRegistrationService.php',
            'sylius.locale_converter' => 'getSylius_LocaleConverterService.php',
            'sylius.mailer.default_settings_provider' => 'getSylius_Mailer_DefaultSettingsProviderService.php',
            'sylius.money_formatter' => 'getSylius_MoneyFormatterService.php',
            'sylius.oauth_server.client_manager' => 'getSylius_OauthServer_ClientManagerService.php',
            'sylius.oauth_user.pin_generator.password_reset' => 'getSylius_OauthUser_PinGenerator_PasswordResetService.php',
            'sylius.oauth_user.token_generator.email_verification' => 'getSylius_OauthUser_TokenGenerator_EmailVerificationService.php',
            'sylius.oauth_user.token_generator.password_reset' => 'getSylius_OauthUser_TokenGenerator_PasswordResetService.php',
            'sylius.order_item_names_setter' => 'getSylius_OrderItemNamesSetterService.php',
            'sylius.order_item_quantity_modifier.limiting' => 'getSylius_OrderItemQuantityModifier_LimitingService.php',
            'sylius.order_locale_assigner' => 'getSylius_OrderLocaleAssignerService.php',
            'sylius.order_modifier' => 'getSylius_OrderModifierService.php',
            'sylius.order_number_assigner' => 'getSylius_OrderNumberAssignerService.php',
            'sylius.order_payment_provider' => 'getSylius_OrderPaymentProviderService.php',
            'sylius.order_processing.order_adjustments_clearer' => 'getSylius_OrderProcessing_OrderAdjustmentsClearerService.php',
            'sylius.order_processing.order_payment_processor.after_checkout' => 'getSylius_OrderProcessing_OrderPaymentProcessor_AfterCheckoutService.php',
            'sylius.order_processing.order_payment_processor.checkout' => 'getSylius_OrderProcessing_OrderPaymentProcessor_CheckoutService.php',
            'sylius.order_processing.order_prices_recalculator' => 'getSylius_OrderProcessing_OrderPricesRecalculatorService.php',
            'sylius.order_processing.order_processor' => 'getSylius_OrderProcessing_OrderProcessorService.php',
            'sylius.order_processing.order_promotion_processor' => 'getSylius_OrderProcessing_OrderPromotionProcessorService.php',
            'sylius.order_processing.order_shipment_processor' => 'getSylius_OrderProcessing_OrderShipmentProcessorService.php',
            'sylius.order_processing.order_taxes_processor' => 'getSylius_OrderProcessing_OrderTaxesProcessorService.php',
            'sylius.order_processing.shipping_charges_processor' => 'getSylius_OrderProcessing_ShippingChargesProcessorService.php',
            'sylius.payment_description_provider' => 'getSylius_PaymentDescriptionProviderService.php',
            'sylius.payment_method_resolver.default' => 'getSylius_PaymentMethodResolver_DefaultService.php',
            'sylius.payment_methods_resolver' => 'getSylius_PaymentMethodsResolverService.php',
            'sylius.payment_methods_resolver.channel_based' => 'getSylius_PaymentMethodsResolver_ChannelBasedService.php',
            'sylius.payum.http_client' => 'getSylius_Payum_HttpClientService.php',
            'sylius.payum_action.authorize_payment' => 'getSylius_PayumAction_AuthorizePaymentService.php',
            'sylius.payum_action.capture_payment' => 'getSylius_PayumAction_CapturePaymentService.php',
            'sylius.payum_action.execute_same_request_with_payment_details' => 'getSylius_PayumAction_ExecuteSameRequestWithPaymentDetailsService.php',
            'sylius.payum_action.offline.convert_payment' => 'getSylius_PayumAction_Offline_ConvertPaymentService.php',
            'sylius.payum_action.offline.resolve_next_route' => 'getSylius_PayumAction_Offline_ResolveNextRouteService.php',
            'sylius.payum_action.paypal_express_checkout.convert_payment' => 'getSylius_PayumAction_PaypalExpressCheckout_ConvertPaymentService.php',
            'sylius.payum_action.resolve_next_route' => 'getSylius_PayumAction_ResolveNextRouteService.php',
            'sylius.payum_extension.update_payment_state' => 'getSylius_PayumExtension_UpdatePaymentStateService.php',
            'sylius.product_review.average_rating_updater' => 'getSylius_ProductReview_AverageRatingUpdaterService.php',
            'sylius.product_variant_resolver.default' => 'getSylius_ProductVariantResolver_DefaultService.php',
            'sylius.promotion.units_promotion_adjustments_applicator' => 'getSylius_Promotion_UnitsPromotionAdjustmentsApplicatorService.php',
            'sylius.promotion_action.fixed_discount' => 'getSylius_PromotionAction_FixedDiscountService.php',
            'sylius.promotion_action.percentage_discount' => 'getSylius_PromotionAction_PercentageDiscountService.php',
            'sylius.promotion_action.shipping_percentage_discount' => 'getSylius_PromotionAction_ShippingPercentageDiscountService.php',
            'sylius.promotion_action.unit_fixed_discount' => 'getSylius_PromotionAction_UnitFixedDiscountService.php',
            'sylius.promotion_action.unit_percentage_discount' => 'getSylius_PromotionAction_UnitPercentageDiscountService.php',
            'sylius.promotion_applicator' => 'getSylius_PromotionApplicatorService.php',
            'sylius.promotion_coupon_eligibility_checker' => 'getSylius_PromotionCouponEligibilityCheckerService.php',
            'sylius.promotion_coupon_generator' => 'getSylius_PromotionCouponGeneratorService.php',
            'sylius.promotion_coupon_generator.percentage_policy' => 'getSylius_PromotionCouponGenerator_PercentagePolicyService.php',
            'sylius.promotion_eligibility_checker' => 'getSylius_PromotionEligibilityCheckerService.php',
            'sylius.promotion_filter.price_range' => 'getSylius_PromotionFilter_PriceRangeService.php',
            'sylius.promotion_filter.product' => 'getSylius_PromotionFilter_ProductService.php',
            'sylius.promotion_filter.taxon' => 'getSylius_PromotionFilter_TaxonService.php',
            'sylius.promotion_processor' => 'getSylius_PromotionProcessorService.php',
            'sylius.promotion_rule_checker.cart_quantity' => 'getSylius_PromotionRuleChecker_CartQuantityService.php',
            'sylius.promotion_rule_checker.contains_product' => 'getSylius_PromotionRuleChecker_ContainsProductService.php',
            'sylius.promotion_rule_checker.has_taxon' => 'getSylius_PromotionRuleChecker_HasTaxonService.php',
            'sylius.promotion_rule_checker.item_total' => 'getSylius_PromotionRuleChecker_ItemTotalService.php',
            'sylius.promotion_rule_checker.nth_order' => 'getSylius_PromotionRuleChecker_NthOrderService.php',
            'sylius.promotion_rule_checker.shipping_country' => 'getSylius_PromotionRuleChecker_ShippingCountryService.php',
            'sylius.promotion_rule_checker.total_of_items_from_taxon' => 'getSylius_PromotionRuleChecker_TotalOfItemsFromTaxonService.php',
            'sylius.promotion_rule_updater.has_taxon' => 'getSylius_PromotionRuleUpdater_HasTaxonService.php',
            'sylius.promotion_rule_updater.total_of_items_from_taxon' => 'getSylius_PromotionRuleUpdater_TotalOfItemsFromTaxonService.php',
            'sylius.promotion_usage_modifier' => 'getSylius_PromotionUsageModifierService.php',
            'sylius.proportional_integer_distributor' => 'getSylius_ProportionalIntegerDistributorService.php',
            'sylius.provider.channel_based_default_zone_provider' => 'getSylius_Provider_ChannelBasedDefaultZoneProviderService.php',
            'sylius.provider.product_variants_prices' => 'getSylius_Provider_ProductVariantsPricesService.php',
            'sylius.province_naming_provider' => 'getSylius_ProvinceNamingProviderService.php',
            'sylius.random_generator' => 'getSylius_RandomGeneratorService.php',
            'sylius.registry.attribute_type' => 'getSylius_Registry_AttributeTypeService.php',
            'sylius.registry.grid_driver' => 'getSylius_Registry_GridDriverService.php',
            'sylius.registry.grid_field' => 'getSylius_Registry_GridFieldService.php',
            'sylius.registry.grid_filter' => 'getSylius_Registry_GridFilterService.php',
            'sylius.registry.payment_methods_resolver' => 'getSylius_Registry_PaymentMethodsResolverService.php',
            'sylius.registry.shipping_calculator' => 'getSylius_Registry_ShippingCalculatorService.php',
            'sylius.registry.shipping_methods_resolver' => 'getSylius_Registry_ShippingMethodsResolverService.php',
            'sylius.registry.tax_calculation_strategy' => 'getSylius_Registry_TaxCalculationStrategyService.php',
            'sylius.registry.tax_calculator' => 'getSylius_Registry_TaxCalculatorService.php',
            'sylius.registry_promotion_action' => 'getSylius_RegistryPromotionActionService.php',
            'sylius.registry_promotion_rule_checker' => 'getSylius_RegistryPromotionRuleCheckerService.php',
            'sylius.repository.address' => 'getSylius_Repository_AddressService.php',
            'sylius.repository.address_log_entry' => 'getSylius_Repository_AddressLogEntryService.php',
            'sylius.repository.adjustment' => 'getSylius_Repository_AdjustmentService.php',
            'sylius.repository.admin_user' => 'getSylius_Repository_AdminUserService.php',
            'sylius.repository.api_access_token' => 'getSylius_Repository_ApiAccessTokenService.php',
            'sylius.repository.api_auth_code' => 'getSylius_Repository_ApiAuthCodeService.php',
            'sylius.repository.api_client' => 'getSylius_Repository_ApiClientService.php',
            'sylius.repository.api_refresh_token' => 'getSylius_Repository_ApiRefreshTokenService.php',
            'sylius.repository.api_user' => 'getSylius_Repository_ApiUserService.php',
            'sylius.repository.avatar_image' => 'getSylius_Repository_AvatarImageService.php',
            'sylius.repository.channel_pricing' => 'getSylius_Repository_ChannelPricingService.php',
            'sylius.repository.country' => 'getSylius_Repository_CountryService.php',
            'sylius.repository.currency' => 'getSylius_Repository_CurrencyService.php',
            'sylius.repository.customer' => 'getSylius_Repository_CustomerService.php',
            'sylius.repository.customer_group' => 'getSylius_Repository_CustomerGroupService.php',
            'sylius.repository.exchange_rate' => 'getSylius_Repository_ExchangeRateService.php',
            'sylius.repository.gateway_config' => 'getSylius_Repository_GatewayConfigService.php',
            'sylius.repository.inventory_unit' => 'getSylius_Repository_InventoryUnitService.php',
            'sylius.repository.oauth_user' => 'getSylius_Repository_OauthUserService.php',
            'sylius.repository.order_item' => 'getSylius_Repository_OrderItemService.php',
            'sylius.repository.order_item_unit' => 'getSylius_Repository_OrderItemUnitService.php',
            'sylius.repository.order_sequence' => 'getSylius_Repository_OrderSequenceService.php',
            'sylius.repository.payment' => 'getSylius_Repository_PaymentService.php',
            'sylius.repository.payment_method' => 'getSylius_Repository_PaymentMethodService.php',
            'sylius.repository.payment_method_translation' => 'getSylius_Repository_PaymentMethodTranslationService.php',
            'sylius.repository.payment_security_token' => 'getSylius_Repository_PaymentSecurityTokenService.php',
            'sylius.repository.product' => 'getSylius_Repository_ProductService.php',
            'sylius.repository.product_association' => 'getSylius_Repository_ProductAssociationService.php',
            'sylius.repository.product_association_type' => 'getSylius_Repository_ProductAssociationTypeService.php',
            'sylius.repository.product_association_type_translation' => 'getSylius_Repository_ProductAssociationTypeTranslationService.php',
            'sylius.repository.product_attribute' => 'getSylius_Repository_ProductAttributeService.php',
            'sylius.repository.product_attribute_translation' => 'getSylius_Repository_ProductAttributeTranslationService.php',
            'sylius.repository.product_attribute_value' => 'getSylius_Repository_ProductAttributeValueService.php',
            'sylius.repository.product_image' => 'getSylius_Repository_ProductImageService.php',
            'sylius.repository.product_option' => 'getSylius_Repository_ProductOptionService.php',
            'sylius.repository.product_option_translation' => 'getSylius_Repository_ProductOptionTranslationService.php',
            'sylius.repository.product_option_value' => 'getSylius_Repository_ProductOptionValueService.php',
            'sylius.repository.product_option_value_translation' => 'getSylius_Repository_ProductOptionValueTranslationService.php',
            'sylius.repository.product_review' => 'getSylius_Repository_ProductReviewService.php',
            'sylius.repository.product_reviewer' => 'getSylius_Repository_ProductReviewerService.php',
            'sylius.repository.product_taxon' => 'getSylius_Repository_ProductTaxonService.php',
            'sylius.repository.product_translation' => 'getSylius_Repository_ProductTranslationService.php',
            'sylius.repository.product_variant' => 'getSylius_Repository_ProductVariantService.php',
            'sylius.repository.product_variant_translation' => 'getSylius_Repository_ProductVariantTranslationService.php',
            'sylius.repository.promotion' => 'getSylius_Repository_PromotionService.php',
            'sylius.repository.promotion_action' => 'getSylius_Repository_PromotionActionService.php',
            'sylius.repository.promotion_coupon' => 'getSylius_Repository_PromotionCouponService.php',
            'sylius.repository.promotion_rule' => 'getSylius_Repository_PromotionRuleService.php',
            'sylius.repository.promotion_subject' => 'getSylius_Repository_PromotionSubjectService.php',
            'sylius.repository.province' => 'getSylius_Repository_ProvinceService.php',
            'sylius.repository.shipment' => 'getSylius_Repository_ShipmentService.php',
            'sylius.repository.shipment_unit' => 'getSylius_Repository_ShipmentUnitService.php',
            'sylius.repository.shipping_category' => 'getSylius_Repository_ShippingCategoryService.php',
            'sylius.repository.shipping_method' => 'getSylius_Repository_ShippingMethodService.php',
            'sylius.repository.shipping_method_translation' => 'getSylius_Repository_ShippingMethodTranslationService.php',
            'sylius.repository.shop_billing_data' => 'getSylius_Repository_ShopBillingDataService.php',
            'sylius.repository.shop_user' => 'getSylius_Repository_ShopUserService.php',
            'sylius.repository.tax_category' => 'getSylius_Repository_TaxCategoryService.php',
            'sylius.repository.tax_rate' => 'getSylius_Repository_TaxRateService.php',
            'sylius.repository.taxon' => 'getSylius_Repository_TaxonService.php',
            'sylius.repository.taxon_image' => 'getSylius_Repository_TaxonImageService.php',
            'sylius.repository.taxon_translation' => 'getSylius_Repository_TaxonTranslationService.php',
            'sylius.repository.zone' => 'getSylius_Repository_ZoneService.php',
            'sylius.repository.zone_member' => 'getSylius_Repository_ZoneMemberService.php',
            'sylius.requirements' => 'getSylius_RequirementsService.php',
            'sylius.resource_controller.resources_resolver.grid_aware' => 'getSylius_ResourceController_ResourcesResolver_GridAwareService.php',
            'sylius.reviewer_reviews_remover' => 'getSylius_ReviewerReviewsRemoverService.php',
            'sylius.security.password_encoder' => 'getSylius_Security_PasswordEncoderService.php',
            'sylius.security.password_updater' => 'getSylius_Security_PasswordUpdaterService.php',
            'sylius.security.user_login' => 'getSylius_Security_UserLoginService.php',
            'sylius.sequential_order_number_generator' => 'getSylius_SequentialOrderNumberGeneratorService.php',
            'sylius.setup.channel' => 'getSylius_Setup_ChannelService.php',
            'sylius.setup.currency' => 'getSylius_Setup_CurrencyService.php',
            'sylius.setup.locale' => 'getSylius_Setup_LocaleService.php',
            'sylius.shipping_calculator' => 'getSylius_ShippingCalculatorService.php',
            'sylius.shipping_calculator.flat_rate' => 'getSylius_ShippingCalculator_FlatRateService.php',
            'sylius.shipping_calculator.per_unit_rate' => 'getSylius_ShippingCalculator_PerUnitRateService.php',
            'sylius.shipping_date_assigner' => 'getSylius_ShippingDateAssignerService.php',
            'sylius.shipping_eligibility_checker' => 'getSylius_ShippingEligibilityCheckerService.php',
            'sylius.shipping_method_resolver.default' => 'getSylius_ShippingMethodResolver_DefaultService.php',
            'sylius.shipping_methods_resolver' => 'getSylius_ShippingMethodsResolverService.php',
            'sylius.shipping_methods_resolver.default' => 'getSylius_ShippingMethodsResolver_DefaultService.php',
            'sylius.shipping_methods_resolver.zones_and_channel_based' => 'getSylius_ShippingMethodsResolver_ZonesAndChannelBasedService.php',
            'sylius.shop.menu_builder.account' => 'getSylius_Shop_MenuBuilder_AccountService.php',
            'sylius.shop_user.pin_generator.password_reset' => 'getSylius_ShopUser_PinGenerator_PasswordResetService.php',
            'sylius.shop_user.token_generator.email_verification' => 'getSylius_ShopUser_TokenGenerator_EmailVerificationService.php',
            'sylius.shop_user.token_generator.password_reset' => 'getSylius_ShopUser_TokenGenerator_PasswordResetService.php',
            'sylius.state_resolver.order' => 'getSylius_StateResolver_OrderService.php',
            'sylius.state_resolver.order_checkout' => 'getSylius_StateResolver_OrderCheckoutService.php',
            'sylius.state_resolver.order_payment' => 'getSylius_StateResolver_OrderPaymentService.php',
            'sylius.state_resolver.order_shipping' => 'getSylius_StateResolver_OrderShippingService.php',
            'sylius.storage.session' => 'getSylius_Storage_SessionService.php',
            'sylius.tax_calculator' => 'getSylius_TaxCalculatorService.php',
            'sylius.tax_calculator.default' => 'getSylius_TaxCalculator_DefaultService.php',
            'sylius.tax_rate_resolver' => 'getSylius_TaxRateResolverService.php',
            'sylius.taxation.order_item_units_based_strategy' => 'getSylius_Taxation_OrderItemUnitsBasedStrategyService.php',
            'sylius.taxation.order_item_units_taxes_applicator' => 'getSylius_Taxation_OrderItemUnitsTaxesApplicatorService.php',
            'sylius.taxation.order_items_based_strategy' => 'getSylius_Taxation_OrderItemsBasedStrategyService.php',
            'sylius.taxation.order_items_taxes_applicator' => 'getSylius_Taxation_OrderItemsTaxesApplicatorService.php',
            'sylius.taxation.order_shipment_taxes_applicator' => 'getSylius_Taxation_OrderShipmentTaxesApplicatorService.php',
            'sylius.templating.helper.adjustment' => 'getSylius_Templating_Helper_AdjustmentService.php',
            'sylius.templating.helper.bulk_action_grid' => 'getSylius_Templating_Helper_BulkActionGridService.php',
            'sylius.templating.helper.checkout_steps' => 'getSylius_Templating_Helper_CheckoutStepsService.php',
            'sylius.templating.helper.convert_money' => 'getSylius_Templating_Helper_ConvertMoneyService.php',
            'sylius.templating.helper.currency' => 'getSylius_Templating_Helper_CurrencyService.php',
            'sylius.templating.helper.format_money' => 'getSylius_Templating_Helper_FormatMoneyService.php',
            'sylius.templating.helper.grid' => 'getSylius_Templating_Helper_GridService.php',
            'sylius.templating.helper.inventory' => 'getSylius_Templating_Helper_InventoryService.php',
            'sylius.templating.helper.locale' => 'getSylius_Templating_Helper_LocaleService.php',
            'sylius.templating.helper.price' => 'getSylius_Templating_Helper_PriceService.php',
            'sylius.templating.helper.product_variants_prices' => 'getSylius_Templating_Helper_ProductVariantsPricesService.php',
            'sylius.templating.helper.variant_resolver' => 'getSylius_Templating_Helper_VariantResolverService.php',
            'sylius.theme.asset.assets_installer.output_aware' => 'getSylius_Theme_Asset_AssetsInstaller_OutputAwareService.php',
            'sylius.theme.locator.application_resource' => 'getSylius_Theme_Locator_ApplicationResourceService.php',
            'sylius.theme.locator.bundle_resource' => 'getSylius_Theme_Locator_BundleResourceService.php',
            'sylius.theme.templating.cache' => 'getSylius_Theme_Templating_CacheService.php',
            'sylius.translation_locale_provider.immutable' => 'getSylius_TranslationLocaleProvider_ImmutableService.php',
            'sylius.twig.extension.channels_currencies' => 'getSylius_Twig_Extension_ChannelsCurrenciesService.php',
            'sylius.twig.extension.country_name' => 'getSylius_Twig_Extension_CountryNameService.php',
            'sylius.twig.extension.form_test_attribute_array' => 'getSylius_Twig_Extension_FormTestAttributeArrayService.php',
            'sylius.twig.extension.form_test_attribute_name' => 'getSylius_Twig_Extension_FormTestAttributeNameService.php',
            'sylius.twig.extension.merge_recursive' => 'getSylius_Twig_Extension_MergeRecursiveService.php',
            'sylius.twig.extension.province_naming' => 'getSylius_Twig_Extension_ProvinceNamingService.php',
            'sylius.twig.extension.shop' => 'getSylius_Twig_Extension_ShopService.php',
            'sylius.twig.extension.sylius_bundle_loaded_checker' => 'getSylius_Twig_Extension_SyliusBundleLoadedCheckerService.php',
            'sylius.twig.extension.widget.admin_notification' => 'getSylius_Twig_Extension_Widget_AdminNotificationService.php',
            'sylius.unique_id_based_order_token_assigner' => 'getSylius_UniqueIdBasedOrderTokenAssignerService.php',
            'sylius.unpaid_orders_state_updater' => 'getSylius_UnpaidOrdersStateUpdaterService.php',
            'sylius.validator.cart_item_availability' => 'getSylius_Validator_CartItemAvailabilityService.php',
            'sylius.validator.channel_default_locale_enabled' => 'getSylius_Validator_ChannelDefaultLocaleEnabledService.php',
            'sylius.validator.customer_initializer' => 'getSylius_Validator_CustomerInitializerService.php',
            'sylius.validator.date_range' => 'getSylius_Validator_DateRangeService.php',
            'sylius.validator.different_source_target_currency' => 'getSylius_Validator_DifferentSourceTargetCurrencyService.php',
            'sylius.validator.has_all_prices_defined' => 'getSylius_Validator_HasAllPricesDefinedService.php',
            'sylius.validator.has_all_variant_prices_defined' => 'getSylius_Validator_HasAllVariantPricesDefinedService.php',
            'sylius.validator.has_enabled_entity' => 'getSylius_Validator_HasEnabledEntityService.php',
            'sylius.validator.in_stock' => 'getSylius_Validator_InStockService.php',
            'sylius.validator.locales_aware_valid_attribute_value' => 'getSylius_Validator_LocalesAwareValidAttributeValueService.php',
            'sylius.validator.payment_method_integrity' => 'getSylius_Validator_PaymentMethodIntegrityService.php',
            'sylius.validator.product_code_uniqueness' => 'getSylius_Validator_ProductCodeUniquenessService.php',
            'sylius.validator.product_integrity' => 'getSylius_Validator_ProductIntegrityService.php',
            'sylius.validator.product_variant_combination' => 'getSylius_Validator_ProductVariantCombinationService.php',
            'sylius.validator.promotion_coupon_generation_amount' => 'getSylius_Validator_PromotionCouponGenerationAmountService.php',
            'sylius.validator.promotion_subject_coupon' => 'getSylius_Validator_PromotionSubjectCouponService.php',
            'sylius.validator.shipping_method_integrity' => 'getSylius_Validator_ShippingMethodIntegrityService.php',
            'sylius.validator.unique.registered_user' => 'getSylius_Validator_Unique_RegisteredUserService.php',
            'sylius.validator.unique_currency_pair' => 'getSylius_Validator_UniqueCurrencyPairService.php',
            'sylius.validator.unique_reviewer_email' => 'getSylius_Validator_UniqueReviewerEmailService.php',
            'sylius.validator.valid_attribute_value' => 'getSylius_Validator_ValidAttributeValueService.php',
            'sylius.validator.valid_province_address' => 'getSylius_Validator_ValidProvinceAddressService.php',
            'sylius.validator.valid_select_attribute' => 'getSylius_Validator_ValidSelectAttributeService.php',
            'sylius.validator.valid_text_attribute' => 'getSylius_Validator_ValidTextAttributeService.php',
            'sylius.zone_matcher' => 'getSylius_ZoneMatcherService.php',
            'sylius_fixtures.fixture_loader' => 'getSyliusFixtures_FixtureLoaderService.php',
            'sylius_fixtures.fixture_registry' => 'getSyliusFixtures_FixtureRegistryService.php',
            'sylius_fixtures.listener.suite_loader_listener' => 'getSyliusFixtures_Listener_SuiteLoaderListenerService.php',
            'sylius_fixtures.logger' => 'getSyliusFixtures_LoggerService.php',
            'sylius_fixtures.logger.formatter.console' => 'getSyliusFixtures_Logger_Formatter_ConsoleService.php',
            'sylius_fixtures.logger.handler.console' => 'getSyliusFixtures_Logger_Handler_ConsoleService.php',
            'sylius_fixtures.suite_loader' => 'getSyliusFixtures_SuiteLoaderService.php',
            'sylius_fixtures.suite_registry' => 'getSyliusFixtures_SuiteRegistryService.php',
            'sylus.payum_action.offline.status' => 'getSylus_PayumAction_Offline_StatusService.php',
            'templating' => 'getTemplatingService.php',
            'templating.loader' => 'getTemplating_LoaderService.php',
            'twig' => 'getTwigService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'validator' => 'getValidatorService.php',
        ];
        $this->aliases = [
            'Payum\\Core\\Payum' => 'payum',
            'Sylius\\Bundle\\AdminBundle\\EmailManager\\ShipmentEmailManagerInterface' => 'sylius.email_manager.shipment',
            'Sylius\\Bundle\\CoreBundle\\Assigner\\IpAssignerInterface' => 'sylius.customer_ip_assigner',
            'Sylius\\Bundle\\CoreBundle\\Installer\\Provider\\DatabaseSetupCommandsProviderInterface' => 'sylius.commands_provider.database_setup',
            'Sylius\\Bundle\\CoreBundle\\Installer\\Setup\\ChannelSetupInterface' => 'sylius.setup.channel',
            'Sylius\\Bundle\\CoreBundle\\Installer\\Setup\\CurrencySetupInterface' => 'sylius.setup.currency',
            'Sylius\\Bundle\\CoreBundle\\Installer\\Setup\\LocaleSetupInterface' => 'sylius.setup.locale',
            'Sylius\\Bundle\\CoreBundle\\Remover\\ReviewerReviewsRemoverInterface' => 'sylius.reviewer_reviews_remover',
            'Sylius\\Bundle\\FixturesBundle\\Fixture\\FixtureRegistryInterface' => 'sylius_fixtures.fixture_registry',
            'Sylius\\Bundle\\FixturesBundle\\Loader\\FixtureLoaderInterface' => 'sylius_fixtures.fixture_loader',
            'Sylius\\Bundle\\FixturesBundle\\Loader\\SuiteLoaderInterface' => 'sylius_fixtures.suite_loader',
            'Sylius\\Bundle\\FixturesBundle\\Suite\\SuiteRegistryInterface' => 'sylius_fixtures.suite_registry',
            'Sylius\\Bundle\\MoneyBundle\\Formatter\\MoneyFormatterInterface' => 'sylius.money_formatter',
            'Sylius\\Bundle\\OrderBundle\\NumberAssigner\\OrderNumberAssignerInterface' => 'sylius.order_number_assigner',
            'Sylius\\Bundle\\PayumBundle\\Factory\\GetStatusFactoryInterface' => 'sylius.factory.payum_get_status_action',
            'Sylius\\Bundle\\PayumBundle\\Factory\\ResolveNextRouteFactoryInterface' => 'sylius.factory.payum_resolve_next_route',
            'Sylius\\Bundle\\PayumBundle\\Provider\\PaymentDescriptionProviderInterface' => 'sylius.payment_description_provider',
            'Sylius\\Bundle\\ShopBundle\\Calculator\\OrderItemsSubtotalCalculatorInterface' => 'sylius.calculator.order_items_subtotal',
            'Sylius\\Bundle\\ShopBundle\\EmailManager\\ContactEmailManagerInterface' => 'sylius.email_manager.contact',
            'Sylius\\Bundle\\ShopBundle\\EmailManager\\OrderEmailManagerInterface' => 'sylius.email_manager.order',
            'Sylius\\Bundle\\ThemeBundle\\Asset\\Installer\\AssetsInstallerInterface' => 'sylius.theme.asset.assets_installer.output_aware',
            'Sylius\\Bundle\\ThemeBundle\\Configuration\\ConfigurationProviderInterface' => 'sylius.theme.configuration.provider',
            'Sylius\\Bundle\\ThemeBundle\\Repository\\ThemeRepositoryInterface' => 'sylius.repository.theme',
            'Sylius\\Bundle\\UserBundle\\Security\\UserLoginInterface' => 'sylius.security.user_login',
            'Sylius\\Bundle\\UserBundle\\Security\\UserPasswordEncoderInterface' => 'sylius.security.password_encoder',
            'Sylius\\Component\\Addressing\\Comparator\\AddressComparatorInterface' => 'sylius.address_comparator',
            'Sylius\\Component\\Addressing\\Converter\\CountryNameConverterInterface' => 'sylius.converter.country_name',
            'Sylius\\Component\\Addressing\\Matcher\\ZoneMatcherInterface' => 'sylius.zone_matcher',
            'Sylius\\Component\\Addressing\\Provider\\ProvinceNamingProviderInterface' => 'sylius.province_naming_provider',
            'Sylius\\Component\\Core\\Calculator\\ProductVariantPriceCalculatorInterface' => 'sylius.calculator.product_variant_price',
            'Sylius\\Component\\Core\\Checker\\OrderPaymentMethodSelectionRequirementCheckerInterface' => 'sylius.checker.order_payment_method_selection_requirement',
            'Sylius\\Component\\Core\\Checker\\OrderShippingMethodSelectionRequirementCheckerInterface' => 'sylius.checker.order_shipping_method_selection_requirement',
            'Sylius\\Component\\Core\\Context\\ShopperContextInterface' => 'sylius.context.shopper',
            'Sylius\\Component\\Core\\Currency\\CurrencyStorageInterface' => 'sylius.storage.currency',
            'Sylius\\Component\\Core\\Customer\\CustomerAddressAdderInterface' => 'sylius.customer_unique_address_adder',
            'Sylius\\Component\\Core\\Customer\\OrderAddressesSaverInterface' => 'sylius.customer_order_addresses_saver',
            'Sylius\\Component\\Core\\Customer\\Statistics\\CustomerStatisticsProviderInterface' => 'sylius.customer_statistics_provider',
            'Sylius\\Component\\Core\\Dashboard\\DashboardStatisticsProviderInterface' => 'sylius.dashboard.statistics_provider',
            'Sylius\\Component\\Core\\Distributor\\IntegerDistributorInterface' => 'sylius.integer_distributor',
            'Sylius\\Component\\Core\\Distributor\\ProportionalIntegerDistributorInterface' => 'sylius.proportional_integer_distributor',
            'Sylius\\Component\\Core\\Factory\\CustomerAfterCheckoutFactoryInterface' => 'sylius.factory.customer_after_checkout',
            'Sylius\\Component\\Core\\Order\\OrderItemNamesSetterInterface' => 'sylius.order_item_names_setter',
            'Sylius\\Component\\Core\\Payment\\InvoiceNumberGeneratorInterface' => 'sylius.invoice_number_generator',
            'Sylius\\Component\\Core\\Payment\\Provider\\OrderPaymentProviderInterface' => 'sylius.order_payment_provider',
            'Sylius\\Component\\Core\\Promotion\\Applicator\\UnitsPromotionAdjustmentsApplicatorInterface' => 'sylius.promotion.units_promotion_adjustments_applicator',
            'Sylius\\Component\\Core\\Promotion\\Modifier\\OrderPromotionsUsageModifierInterface' => 'sylius.promotion_usage_modifier',
            'Sylius\\Component\\Core\\Provider\\ProductVariantsPricesProviderInterface' => 'sylius.provider.product_variants_prices',
            'Sylius\\Component\\Core\\Storage\\CartStorageInterface' => 'sylius.storage.cart_session',
            'Sylius\\Component\\Core\\TokenAssigner\\OrderTokenAssignerInterface' => 'sylius.unique_id_based_order_token_assigner',
            'Sylius\\Component\\Core\\Updater\\UnpaidOrdersStateUpdaterInterface' => 'sylius.unpaid_orders_state_updater',
            'Sylius\\Component\\Core\\Uploader\\ImageUploaderInterface' => 'sylius.image_uploader',
            'Sylius\\Component\\Currency\\Converter\\CurrencyConverterInterface' => 'sylius.currency_converter',
            'Sylius\\Component\\Currency\\Converter\\CurrencyNameConverterInterface' => 'sylius.currency_name_converter',
            'Sylius\\Component\\Customer\\Context\\CustomerContextInterface' => 'sylius.context.customer',
            'Sylius\\Component\\Locale\\Converter\\LocaleConverterInterface' => 'sylius.locale_converter',
            'Sylius\\Component\\Locale\\Provider\\LocaleProviderInterface' => 'sylius.locale_provider.channel_based',
            'Sylius\\Component\\Mailer\\Factory\\EmailFactoryInterface' => 'sylius.factory.email',
            'Sylius\\Component\\Mailer\\Provider\\DefaultSettingsProviderInterface' => 'sylius.mailer.default_settings_provider',
            'Sylius\\Component\\Mailer\\Provider\\EmailProviderInterface' => 'sylius.email_provider',
            'Sylius\\Component\\Mailer\\Sender\\SenderInterface' => 'sylius.email_sender',
            'Sylius\\Component\\Order\\Aggregator\\AdjustmentsAggregatorInterface' => 'sylius.adjustments_aggregator',
            'Sylius\\Component\\Order\\Modifier\\OrderItemQuantityModifierInterface' => 'sylius.order_item_quantity_modifier.limiting',
            'Sylius\\Component\\Order\\Modifier\\OrderModifierInterface' => 'sylius.order_modifier',
            'Sylius\\Component\\Order\\Remover\\ExpiredCartsRemoverInterface' => 'sylius.expired_carts_remover',
            'Sylius\\Component\\Payment\\Resolver\\DefaultPaymentMethodResolverInterface' => 'sylius.payment_method_resolver.default',
            'Sylius\\Component\\Payment\\Resolver\\PaymentMethodsResolverInterface' => 'sylius.payment_methods_resolver',
            'Sylius\\Component\\Product\\Checker\\ProductVariantsParityCheckerInterface' => 'sylius.checker.product_variants_parity',
            'Sylius\\Component\\Product\\Generator\\ProductVariantGeneratorInterface' => 'sylius.generator.product_variant',
            'Sylius\\Component\\Product\\Generator\\SlugGeneratorInterface' => 'sylius.generator.slug',
            'Sylius\\Component\\Promotion\\Action\\PromotionApplicatorInterface' => 'sylius.promotion_applicator',
            'Sylius\\Component\\Promotion\\Generator\\PromotionCouponGeneratorInterface' => 'sylius.promotion_coupon_generator',
            'Sylius\\Component\\Promotion\\Processor\\PromotionProcessorInterface' => 'sylius.promotion_processor',
            'Sylius\\Component\\Promotion\\Provider\\ActivePromotionsProvider' => 'sylius.active_promotions_provider',
            'Sylius\\Component\\Resource\\Generator\\RandomnessGeneratorInterface' => 'sylius.random_generator',
            'Sylius\\Component\\Shipping\\Calculator\\DelegatingCalculatorInterface' => 'sylius.shipping_calculator',
            'Sylius\\Component\\Shipping\\Checker\\ShippingMethodEligibilityCheckerInterface' => 'sylius.shipping_eligibility_checker',
            'Sylius\\Component\\Shipping\\Resolver\\DefaultShippingMethodResolverInterface' => 'sylius.shipping_method_resolver.default',
            'Sylius\\Component\\Shipping\\Resolver\\ShippingMethodsResolverInterface' => 'sylius.shipping_methods_resolver',
            'Sylius\\Component\\Taxation\\Calculator\\CalculatorInterface' => 'sylius.tax_calculator',
            'Sylius\\Component\\Taxation\\Resolver\\TaxRateResolverInterface' => 'sylius.tax_rate_resolver',
            'Sylius\\Component\\Taxonomy\\Generator\\TaxonSlugGeneratorInterface' => 'sylius.generator.taxon_slug',
            'Sylius\\Component\\User\\Canonicalizer\\CanonicalizerInterface' => 'sylius.canonicalizer',
            'Sylius\\Component\\User\\Security\\PasswordUpdaterInterface' => 'sylius.security.password_updater',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'liip_imagine.controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController',
            'mailer' => 'swiftmailer.mailer.default',
            'sylius.context.channel.request_based.resolver' => 'Sylius\\Component\\Channel\\Context\\RequestBased\\RequestResolverInterface',
            'sylius.context.currency' => 'sylius.context.currency.channel_aware',
            'sylius.context.locale' => 'Sylius\\Component\\Locale\\Context\\LocaleContextInterface',
            'sylius.factory.adjustment' => 'Sylius\\Component\\Order\\Factory\\AdjustmentFactoryInterface',
            'sylius.factory.channel' => 'Sylius\\Component\\Channel\\Factory\\ChannelFactoryInterface',
            'sylius.factory.order_item' => 'sylius.factory.cart_item',
            'sylius.factory.payment' => 'Sylius\\Component\\Payment\\Factory\\PaymentFactoryInterface',
            'sylius.factory.payment_method' => 'Sylius\\Component\\Core\\Factory\\PaymentMethodFactoryInterface',
            'sylius.factory.product' => 'Sylius\\Component\\Product\\Factory\\ProductFactoryInterface',
            'sylius.factory.product_variant' => 'Sylius\\Component\\Product\\Factory\\ProductVariantFactoryInterface',
            'sylius.factory.promotion_action' => 'Sylius\\Component\\Core\\Factory\\PromotionActionFactoryInterface',
            'sylius.factory.promotion_coupon' => 'Sylius\\Component\\Promotion\\Factory\\PromotionCouponFactoryInterface',
            'sylius.factory.promotion_rule' => 'Sylius\\Component\\Core\\Factory\\PromotionRuleFactoryInterface',
            'sylius.factory.taxon' => 'Sylius\\Component\\Taxonomy\\Factory\\TaxonFactoryInterface',
            'sylius.factory.zone' => 'Sylius\\Component\\Addressing\\Factory\\ZoneFactoryInterface',
            'sylius.grid.bulk_action_renderer.twig' => 'sylius.custom_bulk_action_grid_renderer.twig',
            'sylius.grid.renderer.twig' => 'sylius.custom_grid_renderer.twig',
            'sylius.inventory.order_inventory_operator' => 'Sylius\\Component\\Core\\Inventory\\Operator\\OrderInventoryOperatorInterface',
            'sylius.locale_provider' => 'sylius.locale_provider.channel_based',
            'sylius.manager.address' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.address_log_entry' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.adjustment' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.admin_user' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.api_access_token' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.api_auth_code' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.api_client' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.api_refresh_token' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.api_user' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.avatar_image' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.channel' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.channel_pricing' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.country' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.currency' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.customer' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.customer_group' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.exchange_rate' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.gateway_config' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.inventory_unit' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.locale' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.oauth_user' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.order' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.order_item' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.order_item_unit' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.order_sequence' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.payment' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.payment_method' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.payment_method_translation' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.payment_security_token' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_association' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_association_type' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_association_type_translation' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_attribute' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_attribute_translation' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_attribute_value' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_image' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_option' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_option_translation' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_option_value' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_option_value_translation' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_review' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_reviewer' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_taxon' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_translation' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_variant' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.product_variant_translation' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.promotion' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.promotion_action' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.promotion_coupon' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.promotion_rule' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.promotion_subject' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.province' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipment' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipment_unit' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipping_category' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipping_method' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shipping_method_translation' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shop_billing_data' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.shop_user' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.tax_category' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.tax_rate' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.taxon' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.taxon_image' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.taxon_translation' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.zone' => 'doctrine.orm.default_entity_manager',
            'sylius.manager.zone_member' => 'doctrine.orm.default_entity_manager',
            'sylius.order_item_quantity_modifier' => 'sylius.order_item_quantity_modifier.limiting',
            'sylius.theme.asset.assets_installer' => 'sylius.theme.asset.assets_installer.output_aware',
            'sylius.translation_locale_provider' => 'sylius.translation_locale_provider.admin',
        ];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernelInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/KernelInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/RebootableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/TerminableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Kernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php';
            include_once \dirname(__DIR__, 4).'/src/Kernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerNameParser.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher-contracts/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventDispatcher.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestStack.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ResetInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/SessionInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Session.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/SessionStorageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/NativeSessionStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/SessionBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/SessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/container/src/ContainerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ServiceLocator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RequestContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/FingersCrossedHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Processor/ProcessorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Authorization/AuthorizationCheckerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Authorization/AuthorizationChecker.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Authentication/Token/Storage/TokenStorageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Authentication/Token/Storage/UsageTrackingTokenStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Authentication/Token/Storage/TokenStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Authentication/AuthenticationManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Authentication/AuthenticationProviderManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Authorization/AccessDecisionManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Authorization/AccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/EventListener/FirewallListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/FirewallMapInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallMap.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Logout/LogoutUrlGenerator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/RememberMe/ResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/ResolveTargetEntityListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Mapping/MappedEventSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Tree/TreeListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Sluggable/SluggableListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/AbstractTrackingListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Timestampable/TimestampableListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Sortable/SortableListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Repository/RepositoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Doctrine/ORM/EntityRepository.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Order/Repository/OrderRepositoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Doctrine/ORM/OrderRepository.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Repository/OrderRepositoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Doctrine/ORM/OrderRepository.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/ClassMetadata.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ClassMetadataInfo.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ClassMetadata.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Factory/FactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Factory/Factory.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Listener/RequestLocaleSetter.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Doctrine/ORM/Subscriber/LoadMetadataSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Doctrine/ORM/Subscriber/LoadMetadataSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Context/ThemeContextInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Theme/ChannelBasedThemeContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Order/Context/CartContextInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Context/CustomerAndChannelBasedCartContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Currency/CurrencyStorageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Currency/CurrencyStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Currency/Context/CurrencyContextInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Currency/Context/StorageBasedCurrencyContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Currency/Context/ChannelAwareCurrencyContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Currency/Context/CompositeCurrencyContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Locale/Provider/LocaleProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Provider/ChannelBasedLocaleProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Locale/Context/LocaleContextInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Context/RequestBasedLocaleContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Locale/Context/ProviderBasedLocaleContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/TranslatorListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Customer/Context/CustomerContextInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Context/CustomerContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Translation/Provider/TranslationLocaleProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Provider/TranslationLocaleProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Storage/StorageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Storage/CookieStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Metadata/RegistryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Metadata/Registry.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/EventListener/ORMTranslatableListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Translation/TranslatableEntityLocaleAssignerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Translation/TranslatableEntityLocaleAssigner.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriverChain.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Doctrine/ResourceMappingDriverChain.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/FileDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/XmlDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/SimplifiedXmlDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/YamlDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/SimplifiedYamlDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/FileLocator.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/SymfonyFileLocator.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/EventListener/AbstractDoctrineSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/EventListener/ORMMappedSuperClassSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/EventListener/ORMRepositoryClassSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/winzou/state-machine/src/SM/Factory/FactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/winzou/state-machine/src/SM/Factory/ClearableFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/winzou/state-machine/src/SM/Factory/AbstractFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/winzou/state-machine/src/SM/Factory/Factory.php';
            include_once \dirname(__DIR__, 4).'/vendor/winzou/state-machine/src/SM/Callback/CallbackFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/winzou/state-machine/src/SM/Callback/CallbackFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/winzou/state-machine-bundle/Callback/ContainerAwareCallbackFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Cache/HttpCacheHandlerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Cache/HttpCacheHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/EventListener/BodyListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Decoder/DecoderProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Decoder/ContainerDecoderProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/EventListener/FormatListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/willdurand/negotiation/src/Negotiation/AbstractNegotiator.php';
            include_once \dirname(__DIR__, 4).'/vendor/willdurand/negotiation/src/Negotiation/Negotiator.php';
            include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Negotiation/FormatNegotiator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcher.php';
            include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Loggable/LoggableListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/stof/doctrine-extensions-bundle/EventListener/LoggerListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Repository/ThemeRepositoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Repository/InMemoryThemeRepository.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Configuration/ConfigurationProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Configuration/CompositeConfigurationProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Configuration/Filesystem/FilesystemConfigurationProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Locator/FileLocatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Locator/RecursiveFileLocator.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Configuration/Filesystem/ConfigurationLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Configuration/Filesystem/ProcessingConfigurationLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Configuration/Filesystem/JsonFileConfigurationLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Context/AdminBasedLocaleContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/EventListener/SessionCartSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Context/SessionAndChannelBasedCartContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Storage/CartStorageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Storage/CartSessionStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/EventListener/NonChannelLocaleListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Checkout/CheckoutResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Checkout/CheckoutStateUrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Checkout/CheckoutStateUrlGenerator.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Logger.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Log/DebugLoggerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Logger.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/TranslatorBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Translation/ThemeAwareTranslator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Translator.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Translation/Translator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/IntlFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/ChoiceMessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/IdentityTranslator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RouterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/DependencyInjection/CompatibilityServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/FrozenParameterBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Locale/Context/CompositeLocaleContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Channel/Context/ChannelContextInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Channel/Context/CompositeChannelContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Channel/Context/RequestBased/ChannelContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Channel/Context/SingleChannelContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Channel/Context/RequestBased/RequestResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Channel/Context/RequestBased/CompositeRequestResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Channel/Context/RequestBased/HostnameBasedRequestResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Factory/ThemeFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Factory/ThemeFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Factory/ThemeAuthorFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Factory/ThemeAuthorFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Factory/ThemeScreenshotFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Factory/ThemeScreenshotFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Loader/CircularDependencyCheckerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Loader/CircularDependencyChecker.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Loader/ThemeLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Loader/ThemeLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/zendframework/zend-hydrator/src/HydrationInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/zendframework/zend-hydrator/src/ExtractionInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/zendframework/zend-hydrator/src/HydratorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/zendframework/zend-hydrator/src/StrategyEnabledInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/zendframework/zend-hydrator/src/Filter/FilterProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/zendframework/zend-hydrator/src/FilterEnabledInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/zendframework/zend-hydrator/src/NamingStrategyEnabledInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/zendframework/zend-hydrator/src/AbstractHydrator.php';
            include_once \dirname(__DIR__, 4).'/vendor/zendframework/zend-hydrator/src/Reflection.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/HierarchyProvider/ThemeHierarchyProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/HierarchyProvider/ThemeHierarchyProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Filesystem/FilesystemInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Filesystem/Filesystem.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Factory/FinderFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Factory/FinderFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Configuration/ConfigurationProcessorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Configuration/SymfonyConfigurationProcessor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Definition/ConfigurationInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Configuration/ThemeConfiguration.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Definition/Processor.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Translation/Provider/Loader/TranslatorLoaderProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Translation/Provider/Loader/TranslatorLoaderProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Translation/Provider/Resource/TranslatorResourceProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Translation/Provider/Resource/CompositeTranslatorResourceProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Translation/Provider/Resource/TranslatorResourceProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Translation/Provider/Resource/ThemeTranslatorResourceProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Translation/Finder/TranslationFilesFinderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Translation/Finder/OrderingTranslationFilesFinder.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Translation/Finder/TranslationFilesFinder.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Order/Context/CompositeCartContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Channel/Context/CachedPerRequestChannelContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Cart/Context/ShopBasedCartContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Order/Context/CartContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    protected function createProxy($class, \Closure $factory)
    {
        class_exists($class, false) || $this->load("{$class}.php");

        return $factory();
    }

    /*
     * Gets the public 'Sylius\Bundle\ThemeBundle\Configuration\ConfigurationProcessorInterface' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Configuration\SymfonyConfigurationProcessor
     */
    protected function getConfigurationProcessorInterfaceService()
    {
        return $this->services['Sylius\\Bundle\\ThemeBundle\\Configuration\\ConfigurationProcessorInterface'] = new \Sylius\Bundle\ThemeBundle\Configuration\SymfonyConfigurationProcessor(new \Sylius\Bundle\ThemeBundle\Configuration\ThemeConfiguration(), new \Symfony\Component\Config\Definition\Processor());
    }

    /*
     * Gets the public 'Sylius\Bundle\ThemeBundle\Factory\FinderFactoryInterface' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Factory\FinderFactory
     */
    protected function getFinderFactoryInterfaceService()
    {
        return $this->services['Sylius\\Bundle\\ThemeBundle\\Factory\\FinderFactoryInterface'] = new \Sylius\Bundle\ThemeBundle\Factory\FinderFactory();
    }

    /*
     * Gets the public 'Sylius\Bundle\ThemeBundle\Factory\ThemeAuthorFactoryInterface' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Factory\ThemeAuthorFactory
     */
    protected function getThemeAuthorFactoryInterfaceService()
    {
        return $this->services['Sylius\\Bundle\\ThemeBundle\\Factory\\ThemeAuthorFactoryInterface'] = new \Sylius\Bundle\ThemeBundle\Factory\ThemeAuthorFactory();
    }

    /*
     * Gets the public 'Sylius\Bundle\ThemeBundle\Factory\ThemeFactoryInterface' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Factory\ThemeFactory
     */
    protected function getThemeFactoryInterfaceService()
    {
        return $this->services['Sylius\\Bundle\\ThemeBundle\\Factory\\ThemeFactoryInterface'] = new \Sylius\Bundle\ThemeBundle\Factory\ThemeFactory();
    }

    /*
     * Gets the public 'Sylius\Bundle\ThemeBundle\Factory\ThemeScreenshotFactoryInterface' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Factory\ThemeScreenshotFactory
     */
    protected function getThemeScreenshotFactoryInterfaceService()
    {
        return $this->services['Sylius\\Bundle\\ThemeBundle\\Factory\\ThemeScreenshotFactoryInterface'] = new \Sylius\Bundle\ThemeBundle\Factory\ThemeScreenshotFactory();
    }

    /*
     * Gets the public 'Sylius\Bundle\ThemeBundle\Filesystem\FilesystemInterface' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Filesystem\Filesystem
     */
    protected function getFilesystemInterfaceService()
    {
        return $this->services['Sylius\\Bundle\\ThemeBundle\\Filesystem\\FilesystemInterface'] = new \Sylius\Bundle\ThemeBundle\Filesystem\Filesystem();
    }

    /*
     * Gets the public 'Sylius\Bundle\ThemeBundle\HierarchyProvider\ThemeHierarchyProviderInterface' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\HierarchyProvider\ThemeHierarchyProvider
     */
    protected function getThemeHierarchyProviderInterfaceService()
    {
        return $this->services['Sylius\\Bundle\\ThemeBundle\\HierarchyProvider\\ThemeHierarchyProviderInterface'] = new \Sylius\Bundle\ThemeBundle\HierarchyProvider\ThemeHierarchyProvider();
    }

    /*
     * Gets the public 'Sylius\Bundle\ThemeBundle\Loader\CircularDependencyCheckerInterface' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Loader\CircularDependencyChecker
     */
    protected function getCircularDependencyCheckerInterfaceService()
    {
        return $this->services['Sylius\\Bundle\\ThemeBundle\\Loader\\CircularDependencyCheckerInterface'] = new \Sylius\Bundle\ThemeBundle\Loader\CircularDependencyChecker();
    }

    /*
     * Gets the public 'Sylius\Bundle\ThemeBundle\Loader\ThemeLoaderInterface' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Loader\ThemeLoader
     */
    protected function getThemeLoaderInterfaceService()
    {
        return $this->services['Sylius\\Bundle\\ThemeBundle\\Loader\\ThemeLoaderInterface'] = new \Sylius\Bundle\ThemeBundle\Loader\ThemeLoader(($this->services['sylius.theme.configuration.provider'] ?? $this->getSylius_Theme_Configuration_ProviderService()), ($this->services['Sylius\\Bundle\\ThemeBundle\\Factory\\ThemeFactoryInterface'] ?? ($this->services['Sylius\\Bundle\\ThemeBundle\\Factory\\ThemeFactoryInterface'] = new \Sylius\Bundle\ThemeBundle\Factory\ThemeFactory())), ($this->services['Sylius\\Bundle\\ThemeBundle\\Factory\\ThemeAuthorFactoryInterface'] ?? ($this->services['Sylius\\Bundle\\ThemeBundle\\Factory\\ThemeAuthorFactoryInterface'] = new \Sylius\Bundle\ThemeBundle\Factory\ThemeAuthorFactory())), ($this->services['Sylius\\Bundle\\ThemeBundle\\Factory\\ThemeScreenshotFactoryInterface'] ?? ($this->services['Sylius\\Bundle\\ThemeBundle\\Factory\\ThemeScreenshotFactoryInterface'] = new \Sylius\Bundle\ThemeBundle\Factory\ThemeScreenshotFactory())), new \Zend\Hydrator\Reflection(), ($this->services['Sylius\\Bundle\\ThemeBundle\\Loader\\CircularDependencyCheckerInterface'] ?? ($this->services['Sylius\\Bundle\\ThemeBundle\\Loader\\CircularDependencyCheckerInterface'] = new \Sylius\Bundle\ThemeBundle\Loader\CircularDependencyChecker())));
    }

    /*
     * Gets the public 'Sylius\Bundle\ThemeBundle\Translation\Finder\TranslationFilesFinderInterface' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Translation\Finder\OrderingTranslationFilesFinder
     */
    protected function getTranslationFilesFinderInterfaceService()
    {
        return $this->services['Sylius\\Bundle\\ThemeBundle\\Translation\\Finder\\TranslationFilesFinderInterface'] = new \Sylius\Bundle\ThemeBundle\Translation\Finder\OrderingTranslationFilesFinder(new \Sylius\Bundle\ThemeBundle\Translation\Finder\TranslationFilesFinder(($this->services['Sylius\\Bundle\\ThemeBundle\\Factory\\FinderFactoryInterface'] ?? ($this->services['Sylius\\Bundle\\ThemeBundle\\Factory\\FinderFactoryInterface'] = new \Sylius\Bundle\ThemeBundle\Factory\FinderFactory()))));
    }

    /*
     * Gets the public 'Sylius\Bundle\ThemeBundle\Translation\Provider\Loader\TranslatorLoaderProviderInterface' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Translation\Provider\Loader\TranslatorLoaderProvider
     */
    protected function getTranslatorLoaderProviderInterfaceService()
    {
        $a = ($this->privates['translation.loader.yml'] ?? $this->getTranslation_Loader_YmlService());
        $b = ($this->privates['translation.loader.xliff'] ?? $this->getTranslation_Loader_XliffService());

        return $this->services['Sylius\\Bundle\\ThemeBundle\\Translation\\Provider\\Loader\\TranslatorLoaderProviderInterface'] = new \Sylius\Bundle\ThemeBundle\Translation\Provider\Loader\TranslatorLoaderProvider(['php' => ($this->privates['translation.loader.php'] ?? $this->getTranslation_Loader_PhpService()), 'yaml' => $a, 'yml' => $a, 'xlf' => $b, 'xliff' => $b, 'po' => ($this->privates['translation.loader.po'] ?? $this->getTranslation_Loader_PoService()), 'mo' => ($this->privates['translation.loader.mo'] ?? $this->getTranslation_Loader_MoService()), 'ts' => ($this->privates['translation.loader.qt'] ?? $this->getTranslation_Loader_QtService()), 'csv' => ($this->privates['translation.loader.csv'] ?? $this->getTranslation_Loader_CsvService()), 'res' => ($this->privates['translation.loader.res'] ?? $this->getTranslation_Loader_ResService()), 'dat' => ($this->privates['translation.loader.dat'] ?? $this->getTranslation_Loader_DatService()), 'ini' => ($this->privates['translation.loader.ini'] ?? $this->getTranslation_Loader_IniService()), 'json' => ($this->privates['translation.loader.json'] ?? $this->getTranslation_Loader_JsonService())]);
    }

    /*
     * Gets the public 'Sylius\Bundle\ThemeBundle\Translation\Provider\Resource\TranslatorResourceProviderInterface' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Translation\Provider\Resource\CompositeTranslatorResourceProvider
     */
    protected function getTranslatorResourceProviderInterfaceService()
    {
        return $this->services['Sylius\\Bundle\\ThemeBundle\\Translation\\Provider\\Resource\\TranslatorResourceProviderInterface'] = new \Sylius\Bundle\ThemeBundle\Translation\Provider\Resource\CompositeTranslatorResourceProvider([0 => new \Sylius\Bundle\ThemeBundle\Translation\Provider\Resource\TranslatorResourceProvider([0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.af.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.af.yml'), 2 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.af.yml'), 3 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.af.yml'), 4 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.af.yml'), 5 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.af.yml'), 6 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.af.yml'), 7 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.af.yml'), 8 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.af.yml'), 9 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.af.yml'), 10 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.af.yml'), 11 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.af.yml'), 12 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.af.yml'), 13 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.af.yml'), 14 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.af.yml'), 15 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.af.yml'), 16 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.af.yml'), 17 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.af.yml'), 18 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 19 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 20 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.ar.xlf'), 21 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.ar.yml'), 22 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.ar.yml'), 23 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.ar.yml'), 24 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.ar.yml'), 25 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.ar.yml'), 26 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.ar.yml'), 27 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.ar.yml'), 28 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.ar.yml'), 29 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.ar.yml'), 30 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.ar.yml'), 31 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.ar.yml'), 32 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.ar.yml'), 33 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.ar.yml'), 34 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.ar.yml'), 35 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.ar.yml'), 36 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.ar.yml'), 37 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.ar.yml'), 38 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.ar.yml'), 39 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.ar.yml'), 40 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.ar.yml'), 41 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.ar.yml'), 42 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.ar.yml'), 43 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.ar.yml'), 44 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.ar.yml'), 45 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.ar.yml'), 46 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.ar.yml'), 47 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.ar.yml'), 48 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.ar.yml'), 49 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.ar.yml'), 50 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.ar.yml'), 51 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.ar.yml'), 52 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.ar.yml'), 53 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.ar.yml'), 54 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.ar.yml'), 55 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.ar.yml'), 56 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.ar.yml'), 57 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.ar.yml'), 58 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.ar.yml'), 59 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.ar.yml'), 60 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.ar.yml'), 61 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.ar.yml'), 62 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.ar.yml'), 63 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.ar.yml'), 64 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ar.xliff'), 65 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.ar.yml'), 66 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.ar.yml'), 67 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.ar.yml'), 68 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.ar.yml'), 69 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 70 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 71 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.az.xlf'), 72 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.az.xliff'), 73 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.be.xlf'), 74 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.be.xlf'), 75 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.be.xlf'), 76 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.be.yml'), 77 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.be.yml'), 78 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.be.yml'), 79 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.be.yml'), 80 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.be.yml'), 81 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.be.yml'), 82 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.be.yml'), 83 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.be.yml'), 84 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.be.yml'), 85 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.be.yml'), 86 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.be.yml'), 87 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.be.yml'), 88 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.be.yml'), 89 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.be.yml'), 90 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.be.yml'), 91 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.be.yml'), 92 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.be.yml'), 93 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.be.yml'), 94 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.be.yml'), 95 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.be.yml'), 96 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.be.yml'), 97 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.be.yml'), 98 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.be.yml'), 99 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.be.yml'), 100 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.be.yml'), 101 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.be.yml'), 102 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.be.yml'), 103 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.be.yml'), 104 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.be.yml'), 105 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.be.yml'), 106 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.be.yml'), 107 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.be.yml'), 108 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.be.yml'), 109 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.be.yml'), 110 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.be.yml'), 111 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.be.yml'), 112 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.be.yml'), 113 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.be.yml'), 114 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 115 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 116 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.bg.xlf'), 117 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.bg.yml'), 118 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.bg.yml'), 119 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.bg.yml'), 120 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.bg.yml'), 121 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.bg.yml'), 122 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.bg.yml'), 123 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.bg.yml'), 124 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.bg.yml'), 125 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.bg.yml'), 126 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.bg.yml'), 127 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.bg.yml'), 128 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.bg.yml'), 129 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.bg.yml'), 130 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.bg.yml'), 131 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.bg.yml'), 132 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.bg.yml'), 133 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.bg.yml'), 134 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.bg.yml'), 135 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.bg.yml'), 136 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.bg.yml'), 137 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.bg.yml'), 138 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.bg.yml'), 139 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.bg.yml'), 140 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.bg.yml'), 141 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.bg.yml'), 142 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.bg.yml'), 143 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.bg.yml'), 144 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.bg.yml'), 145 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.bg.yml'), 146 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.bg.yml'), 147 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.bg.yml'), 148 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.bg.yml'), 149 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.bg.yml'), 150 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.bg.yml'), 151 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.bg.yml'), 152 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.bg.yml'), 153 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.bg.yml'), 154 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.bg.yml'), 155 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.bg.yml'), 156 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.bg.yml'), 157 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.bg.yml'), 158 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.bg.yml'), 159 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.bg.yml'), 160 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.bg.yml'), 161 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.bg.yml'), 162 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.bg.yml'), 163 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.bg.yml'), 164 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 165 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 166 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.ca.xlf'), 167 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.ca.yml'), 168 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.ca.yml'), 169 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.ca.yml'), 170 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.ca.yml'), 171 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.ca.yml'), 172 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.ca.yml'), 173 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.ca.yml'), 174 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.ca.yml'), 175 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.ca.yml'), 176 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.ca.yml'), 177 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.ca.yml'), 178 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.ca.yml'), 179 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.ca.yml'), 180 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.ca.yml'), 181 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.ca.yml'), 182 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.ca.yml'), 183 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.ca.yml'), 184 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.ca.yml'), 185 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.ca.yml'), 186 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.ca.yml'), 187 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.ca.yml'), 188 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.ca.yml'), 189 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.ca.yml'), 190 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.ca.yml'), 191 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.ca.yml'), 192 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.ca.yml'), 193 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ca.xliff'), 194 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.ca.yml'), 195 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.ca.yml'), 196 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 197 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 198 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.cs.xlf'), 199 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.cs.yml'), 200 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.cs.yml'), 201 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.cs.yml'), 202 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.cs.yml'), 203 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.cs.yml'), 204 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.cs.yml'), 205 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.cs.yml'), 206 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.cs.yml'), 207 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.cs.yml'), 208 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.cs.yml'), 209 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.cs.yml'), 210 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.cs.yml'), 211 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.cs.yml'), 212 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.cs.yml'), 213 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.cs.yml'), 214 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.cs.yml'), 215 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.cs.yml'), 216 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.cs.yml'), 217 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.cs.yml'), 218 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.cs.yml'), 219 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.cs.yml'), 220 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.cs.yml'), 221 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.cs.yml'), 222 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.cs.yml'), 223 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.cs.yml'), 224 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.cs.yml'), 225 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.cs.yml'), 226 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.cs.yml'), 227 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.cs.yml'), 228 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.cs.yml'), 229 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.cs.yml'), 230 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.cs.yml'), 231 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.cs.yml'), 232 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.cs.yml'), 233 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.cs.yml'), 234 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.cs.yml'), 235 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.cs.yml'), 236 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.cs.yml'), 237 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.cs.yml'), 238 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.cs.yml'), 239 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.cs.yml'), 240 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.cs.yml'), 241 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.cs.yml'), 242 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.cs.xliff'), 243 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.cs.yml'), 244 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.cs.yml'), 245 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.cs.yml'), 246 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.cs.yml'), 247 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/messages.cs.yml'), 248 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cy.xlf'), 249 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 250 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 251 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.da.xlf'), 252 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.da.yml'), 253 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.da.yml'), 254 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.da.yml'), 255 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.da.yml'), 256 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.da.yml'), 257 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.da.yml'), 258 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.da.yml'), 259 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.da.yml'), 260 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.da.yml'), 261 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.da.yml'), 262 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.da.yml'), 263 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.da.yml'), 264 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.da.yml'), 265 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.da.yml'), 266 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.da.yml'), 267 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.da.yml'), 268 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.da.yml'), 269 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.da.yml'), 270 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.da.yml'), 271 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.da.yml'), 272 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.da.yml'), 273 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.da.yml'), 274 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.da.yml'), 275 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.da.yml'), 276 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.da.yml'), 277 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.da.yml'), 278 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.da.yml'), 279 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.da.yml'), 280 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.da.yml'), 281 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.da.yml'), 282 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.da.yml'), 283 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.da.yml'), 284 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.da.yml'), 285 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.da.yml'), 286 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.da.yml'), 287 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.da.yml'), 288 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.da.yml'), 289 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.da.yml'), 290 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.da.yml'), 291 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.da.yml'), 292 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.da.yml'), 293 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.da.yml'), 294 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.da.yml'), 295 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.da.xliff'), 296 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.da.yml'), 297 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.da.yml'), 298 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.da.yml'), 299 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.da.yml'), 300 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 301 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 302 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.de.xlf'), 303 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.de.yml'), 304 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.de.yml'), 305 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.de.yml'), 306 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.de.yml'), 307 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.de.yml'), 308 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.de.yml'), 309 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.de.yml'), 310 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.de.yml'), 311 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.de.yml'), 312 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.de.yml'), 313 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.de.yml'), 314 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.de.yml'), 315 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.de.yml'), 316 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.de.yml'), 317 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.de.yml'), 318 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.de.yml'), 319 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.de.yml'), 320 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.de.yml'), 321 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.de.yml'), 322 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.de.yml'), 323 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.de.yml'), 324 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.de.yml'), 325 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.de.yml'), 326 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.de.yml'), 327 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.de.yml'), 328 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.de.yml'), 329 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.de.yml'), 330 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.de.yml'), 331 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.de.yml'), 332 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.de.yml'), 333 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.de.yml'), 334 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.de.yml'), 335 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.de.yml'), 336 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.de.yml'), 337 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.de.yml'), 338 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.de.yml'), 339 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.de.yml'), 340 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.de.yml'), 341 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.de.yml'), 342 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.de.yml'), 343 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.de.yml'), 344 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.de.yml'), 345 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.de.yml'), 346 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.de.xliff'), 347 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/validators.de.xliff'), 348 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.de.xliff'), 349 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.de.yml'), 350 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.de.yml'), 351 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.de.yml'), 352 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.de.yml'), 353 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle/Resources/translations/FOSOAuthServerBundle.de.yml'), 354 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/messages.de.yml'), 355 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/validators.de.yml'), 356 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 357 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 358 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.el.xlf'), 359 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.el.yml'), 360 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.el.yml'), 361 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.el.yml'), 362 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.el.yml'), 363 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.el.yml'), 364 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.el.yml'), 365 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.el.yml'), 366 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.el.yml'), 367 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.el.yml'), 368 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.el.yml'), 369 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.el.yml'), 370 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.el.yml'), 371 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.el.yml'), 372 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.el.yml'), 373 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.el.yml'), 374 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.el.yml'), 375 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.el.yml'), 376 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.el.yml'), 377 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.el.yml'), 378 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.el.yml'), 379 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.el.yml'), 380 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.el.yml'), 381 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.el.yml'), 382 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.el.yml'), 383 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.el.yml'), 384 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.el.yml'), 385 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.el.yml'), 386 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.el.yml'), 387 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.el.yml'), 388 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.el.yml'), 389 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.el.yml'), 390 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.el.yml'), 391 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.el.yml'), 392 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.el.yml'), 393 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.el.yml'), 394 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.el.yml'), 395 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.el.yml'), 396 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.el.yml'), 397 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.el.yml'), 398 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 399 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 400 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.en.xlf'), 401 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.en.yml'), 402 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.en.yml'), 403 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.en.yml'), 404 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.en.yml'), 405 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.en.yml'), 406 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.en.yml'), 407 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.en.yml'), 408 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.en.yml'), 409 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.en.yml'), 410 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.en.yml'), 411 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.en.yml'), 412 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.en.yml'), 413 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.en.yml'), 414 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.en.yml'), 415 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.en.yml'), 416 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/flashes.en.yml'), 417 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.en.yml'), 418 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.en.yml'), 419 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.en.yml'), 420 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.en.yml'), 421 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.en.yml'), 422 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.en.yml'), 423 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.en.yml'), 424 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.en.yml'), 425 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.en.yml'), 426 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.en.yml'), 427 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.en.yml'), 428 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.en.yml'), 429 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.en.yml'), 430 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.en.yml'), 431 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.en.yml'), 432 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.en.yml'), 433 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.en.yml'), 434 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.en.yml'), 435 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.en.yml'), 436 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages+intl-icu.en.yml'), 437 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.en.yml'), 438 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.en.yml'), 439 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.en.yml'), 440 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.en.yml'), 441 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.en.yml'), 442 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.en.yml'), 443 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.en.yml'), 444 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.en.yml'), 445 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.en.yml'), 446 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.en.xliff'), 447 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/validators.en.xliff'), 448 => (\dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Resources/translations/PayumBundle.en.yml'), 449 => (\dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Resources/translations/validators.en.yml'), 450 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.en.xliff'), 451 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages+intl-icu.en.yml'), 452 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.en.yml'), 453 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.en.yml'), 454 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/flashes.en.yml'), 455 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.en.yml'), 456 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.en.yml'), 457 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle/Resources/translations/FOSOAuthServerBundle.en.yml'), 458 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/messages.en.yml'), 459 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/validators.en.yml'), 460 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 461 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 462 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.es.xlf'), 463 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.es.yml'), 464 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.es.yml'), 465 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.es.yml'), 466 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.es.yml'), 467 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.es.yml'), 468 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.es.yml'), 469 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.es.yml'), 470 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.es.yml'), 471 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.es.yml'), 472 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.es.yml'), 473 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.es.yml'), 474 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.es.yml'), 475 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.es.yml'), 476 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.es.yml'), 477 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.es.yml'), 478 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.es.yml'), 479 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.es.yml'), 480 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.es.yml'), 481 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.es.yml'), 482 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.es.yml'), 483 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.es.yml'), 484 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.es.yml'), 485 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.es.yml'), 486 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.es.yml'), 487 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.es.yml'), 488 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.es.yml'), 489 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.es.yml'), 490 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.es.yml'), 491 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.es.yml'), 492 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.es.yml'), 493 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.es.yml'), 494 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.es.yml'), 495 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.es.yml'), 496 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.es.yml'), 497 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.es.yml'), 498 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.es.yml'), 499 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.es.yml'), 500 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.es.yml'), 501 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.es.yml'), 502 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.es.yml'), 503 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.es.yml'), 504 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.es.yml'), 505 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.es.yml'), 506 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.es.xliff'), 507 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.es.yml'), 508 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.es.yml'), 509 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.es.yml'), 510 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.es.yml'), 511 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/messages.es.yml'), 512 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/validators.es.yml'), 513 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), 514 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.et.xlf'), 515 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.et.yml'), 516 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.et.yml'), 517 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.et.yml'), 518 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.et.yml'), 519 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.et.yml'), 520 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.et.yml'), 521 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.et.yml'), 522 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.et.yml'), 523 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.et.yml'), 524 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.et.yml'), 525 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.et.yml'), 526 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.et.yml'), 527 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.et.yml'), 528 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.et.yml'), 529 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.et.yml'), 530 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.et.yml'), 531 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.et.yml'), 532 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.et.yml'), 533 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.et.yml'), 534 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.et.yml'), 535 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.et.yml'), 536 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.et.yml'), 537 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), 538 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.eu.xlf'), 539 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.eu.xlf'), 540 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 541 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 542 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.fa.xlf'), 543 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.fa.yml'), 544 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.fa.yml'), 545 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.fa.yml'), 546 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.fa.yml'), 547 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.fa.yml'), 548 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.fa.yml'), 549 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.fa.yml'), 550 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.fa.yml'), 551 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.fa.yml'), 552 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.fa.yml'), 553 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.fa.yml'), 554 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.fa.yml'), 555 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.fa.yml'), 556 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.fa.yml'), 557 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.fa.yml'), 558 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.fa.yml'), 559 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.fa.yml'), 560 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.fa.yml'), 561 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.fa.yml'), 562 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.fa.yml'), 563 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.fa.yml'), 564 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.fa.yml'), 565 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.fa.yml'), 566 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.fa.yml'), 567 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.fa.yml'), 568 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.fa.yml'), 569 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.fa.yml'), 570 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.fa.yml'), 571 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.fa.yml'), 572 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.fa.yml'), 573 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.fa.yml'), 574 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.fa.yml'), 575 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.fa.yml'), 576 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.fa.yml'), 577 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.fa.yml'), 578 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.fa.yml'), 579 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.fa.yml'), 580 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.fa.yml'), 581 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.fa.yml'), 582 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.fa.yml'), 583 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.fa.yml'), 584 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.fa.yml'), 585 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.fa.yml'), 586 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fa.xliff'), 587 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.fa.yml'), 588 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.fa.yml'), 589 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.fa.yml'), 590 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.fa.yml'), 591 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), 592 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fi.xlf'), 593 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.fi.yml'), 594 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.fi.yml'), 595 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.fi.yml'), 596 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.fi.yml'), 597 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.fi.yml'), 598 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.fi.yml'), 599 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.fi.yml'), 600 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.fi.yml'), 601 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.fi.yml'), 602 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.fi.yml'), 603 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.fi.yml'), 604 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.fi.yml'), 605 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.fi.yml'), 606 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.fi.yml'), 607 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.fi.yml'), 608 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.fi.yml'), 609 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.fi.yml'), 610 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.fi.yml'), 611 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.fi.yml'), 612 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.fi.yml'), 613 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.fi.yml'), 614 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.fi.yml'), 615 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.fi.yml'), 616 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.fi.yml'), 617 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.fi.yml'), 618 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.fi.yml'), 619 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.fi.yml'), 620 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.fi.yml'), 621 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.fi.yml'), 622 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fi.xliff'), 623 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.fi.yml'), 624 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.fi.yml'), 625 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.fi.yml'), 626 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 627 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 628 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.fr.xlf'), 629 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.fr.yml'), 630 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.fr.yml'), 631 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.fr.yml'), 632 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.fr.yml'), 633 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.fr.yml'), 634 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.fr.yml'), 635 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.fr.yml'), 636 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.fr.yml'), 637 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.fr.yml'), 638 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.fr.yml'), 639 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.fr.yml'), 640 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.fr.yml'), 641 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.fr.yml'), 642 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.fr.yml'), 643 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.fr.yml'), 644 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/flashes.fr.yml'), 645 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.fr.yml'), 646 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.fr.yml'), 647 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.fr.yml'), 648 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.fr.yml'), 649 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.fr.yml'), 650 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.fr.yml'), 651 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.fr.yml'), 652 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.fr.yml'), 653 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.fr.yml'), 654 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.fr.yml'), 655 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.fr.yml'), 656 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.fr.yml'), 657 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.fr.yml'), 658 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.fr.yml'), 659 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.fr.yml'), 660 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.fr.yml'), 661 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.fr.yml'), 662 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.fr.yml'), 663 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.fr.yml'), 664 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages+intl-icu.fr.yml'), 665 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.fr.yml'), 666 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.fr.yml'), 667 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.fr.yml'), 668 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.fr.yml'), 669 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.fr.yml'), 670 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.fr.yml'), 671 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.fr.yml'), 672 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.fr.yml'), 673 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.fr.yml'), 674 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.fr.xliff'), 675 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/validators.fr.xliff'), 676 => (\dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Resources/translations/PayumBundle.fr.yml'), 677 => (\dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Resources/translations/validators.fr.yml'), 678 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fr.xliff'), 679 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages+intl-icu.fr.yml'), 680 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.fr.yml'), 681 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.fr.yml'), 682 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/flashes.fr.yml'), 683 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.fr.yml'), 684 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.fr.yml'), 685 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle/Resources/translations/FOSOAuthServerBundle.fr.yml'), 686 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/messages.fr.yml'), 687 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/validators.fr.yml'), 688 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 689 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 690 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.gl.xlf'), 691 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.gl.xliff'), 692 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 693 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 694 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.he.xlf'), 695 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.he.yml'), 696 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.he.yml'), 697 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.he.yml'), 698 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.he.yml'), 699 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.he.yml'), 700 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.he.yml'), 701 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.he.yml'), 702 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.he.yml'), 703 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.he.yml'), 704 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.he.yml'), 705 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.he.yml'), 706 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.he.yml'), 707 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.he.yml'), 708 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.he.yml'), 709 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.he.yml'), 710 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.he.yml'), 711 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.he.yml'), 712 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.he.yml'), 713 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.he.yml'), 714 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.he.yml'), 715 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.he.yml'), 716 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.he.yml'), 717 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.he.yml'), 718 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.he.yml'), 719 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.he.yml'), 720 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.he.yml'), 721 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.he.yml'), 722 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.he.yml'), 723 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.he.yml'), 724 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.he.yml'), 725 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.he.yml'), 726 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.he.yml'), 727 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 728 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 729 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.hr.xlf'), 730 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.hr.yml'), 731 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.hr.yml'), 732 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.hr.yml'), 733 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.hr.yml'), 734 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.hr.yml'), 735 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.hr.yml'), 736 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.hr.yml'), 737 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.hr.yml'), 738 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.hr.yml'), 739 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.hr.yml'), 740 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.hr.yml'), 741 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.hr.yml'), 742 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.hr.yml'), 743 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.hr.yml'), 744 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.hr.yml'), 745 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.hr.yml'), 746 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.hr.yml'), 747 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.hr.yml'), 748 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.hr.yml'), 749 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.hr.yml'), 750 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.hr.yml'), 751 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.hr.yml'), 752 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.hr.yml'), 753 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.hr.yml'), 754 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.hr.yml'), 755 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.hr.yml'), 756 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.hr.yml'), 757 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.hr.yml'), 758 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.hr.yml'), 759 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.hr.yml'), 760 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.hr.yml'), 761 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.hr.yml'), 762 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.hr.yml'), 763 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.hr.yml'), 764 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.hr.yml'), 765 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.hr.yml'), 766 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.hr.yml'), 767 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.hr.yml'), 768 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.hr.yml'), 769 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.hr.yml'), 770 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.hr.yml'), 771 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.hr.yml'), 772 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.hr.yml'), 773 => (\dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Resources/translations/PayumBundle.hr.yml'), 774 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.hr.xliff'), 775 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.hr.yml'), 776 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.hr.yml'), 777 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.hr.yml'), 778 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.hr.yml'), 779 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/messages.hr.yml'), 780 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/validators.hr.yml'), 781 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 782 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 783 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.hu.xlf'), 784 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.hu.yml'), 785 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.hu.yml'), 786 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.hu.yml'), 787 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.hu.yml'), 788 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.hu.yml'), 789 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.hu.yml'), 790 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.hu.yml'), 791 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.hu.yml'), 792 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.hu.yml'), 793 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.hu.yml'), 794 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.hu.yml'), 795 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.hu.yml'), 796 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.hu.yml'), 797 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.hu.yml'), 798 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.hu.yml'), 799 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.hu.yml'), 800 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.hu.yml'), 801 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.hu.yml'), 802 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.hu.yml'), 803 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.hu.yml'), 804 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.hu.yml'), 805 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.hu.yml'), 806 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.hu.yml'), 807 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.hu.yml'), 808 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.hu.yml'), 809 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.hu.yml'), 810 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.hu.yml'), 811 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.hu.yml'), 812 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.hu.yml'), 813 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.hu.yml'), 814 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.hu.yml'), 815 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.hu.yml'), 816 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.hu.yml'), 817 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.hu.yml'), 818 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.hu.yml'), 819 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.hu.yml'), 820 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.hu.yml'), 821 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.hu.yml'), 822 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.hu.yml'), 823 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.hu.yml'), 824 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.hu.xliff'), 825 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/validators.hu.xliff'), 826 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.hu.yml'), 827 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.hu.yml'), 828 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.hu.yml'), 829 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), 830 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hy.xlf'), 831 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 832 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 833 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.id.xlf'), 834 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.id.yml'), 835 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.id.yml'), 836 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.id.yml'), 837 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.id.yml'), 838 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.id.yml'), 839 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.id.yml'), 840 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.id.yml'), 841 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.id.yml'), 842 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.id.yml'), 843 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.id.yml'), 844 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.id.yml'), 845 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.id.yml'), 846 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.id.yml'), 847 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.id.yml'), 848 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.id.yml'), 849 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.id.yml'), 850 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.id.yml'), 851 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.id.yml'), 852 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.id.yml'), 853 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.id.yml'), 854 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.id.yml'), 855 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.id.yml'), 856 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.id.yml'), 857 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.id.yml'), 858 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.id.yml'), 859 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.id.yml'), 860 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.id.yml'), 861 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.id.yml'), 862 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.id.yml'), 863 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.id.yml'), 864 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.id.yml'), 865 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.id.yml'), 866 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.id.yml'), 867 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.id.yml'), 868 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.id.yml'), 869 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.id.yml'), 870 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.id.yml'), 871 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.id.yml'), 872 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.id.yml'), 873 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.id.yml'), 874 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.id.yml'), 875 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.id.yml'), 876 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.id.yml'), 877 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.id.yml'), 878 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.id.yml'), 879 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.id.yml'), 880 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.id.yml'), 881 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 882 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 883 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.it.xlf'), 884 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.it.yml'), 885 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.it.yml'), 886 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.it.yml'), 887 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.it.yml'), 888 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.it.yml'), 889 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.it.yml'), 890 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.it.yml'), 891 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.it.yml'), 892 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.it.yml'), 893 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.it.yml'), 894 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.it.yml'), 895 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.it.yml'), 896 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.it.yml'), 897 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.it.yml'), 898 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.it.yml'), 899 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.it.yml'), 900 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.it.yml'), 901 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.it.yml'), 902 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.it.yml'), 903 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.it.yml'), 904 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.it.yml'), 905 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.it.yml'), 906 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.it.yml'), 907 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.it.yml'), 908 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.it.yml'), 909 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.it.yml'), 910 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.it.yml'), 911 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.it.yml'), 912 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.it.yml'), 913 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.it.yml'), 914 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.it.yml'), 915 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.it.yml'), 916 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.it.yml'), 917 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.it.yml'), 918 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.it.yml'), 919 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.it.yml'), 920 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.it.yml'), 921 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.it.yml'), 922 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.it.yml'), 923 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.it.yml'), 924 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.it.yml'), 925 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.it.yml'), 926 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.it.yml'), 927 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.it.xliff'), 928 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.it.xliff'), 929 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.it.yml'), 930 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.it.yml'), 931 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.it.yml'), 932 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.it.yml'), 933 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 934 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 935 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.ja.xlf'), 936 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.ja.yml'), 937 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.ja.yml'), 938 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.ja.yml'), 939 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.ja.yml'), 940 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.ja.yml'), 941 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.ja.yml'), 942 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.ja.yml'), 943 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.ja.yml'), 944 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.ja.yml'), 945 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.ja.yml'), 946 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.ja.yml'), 947 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.ja.yml'), 948 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.ja.yml'), 949 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.ja.yml'), 950 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.ja.yml'), 951 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.ja.yml'), 952 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.ja.yml'), 953 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.ja.yml'), 954 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.ja.yml'), 955 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.ja.yml'), 956 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.ja.yml'), 957 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.ja.yml'), 958 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.ja.yml'), 959 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.ja.yml'), 960 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.ja.yml'), 961 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.ja.yml'), 962 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 963 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 964 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.lb.xlf'), 965 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 966 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 967 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.lt.xlf'), 968 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.lt.yml'), 969 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.lt.yml'), 970 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.lt.yml'), 971 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.lt.yml'), 972 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.lt.yml'), 973 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.lt.yml'), 974 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.lt.yml'), 975 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.lt.yml'), 976 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.lt.yml'), 977 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.lt.yml'), 978 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.lt.yml'), 979 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.lt.yml'), 980 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.lt.yml'), 981 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.lt.yml'), 982 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.lt.yml'), 983 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.lt.yml'), 984 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.lt.yml'), 985 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.lt.yml'), 986 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.lt.yml'), 987 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.lt.yml'), 988 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.lt.yml'), 989 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.lt.yml'), 990 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.lt.yml'), 991 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.lt.yml'), 992 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.lt.yml'), 993 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.lt.yml'), 994 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.lt.yml'), 995 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.lt.yml'), 996 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.lt.yml'), 997 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.lt.yml'), 998 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.lt.yml'), 999 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.lt.yml'), 1000 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.lt.yml'), 1001 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.lt.yml'), 1002 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.lt.yml'), 1003 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.lt.yml'), 1004 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.lt.yml'), 1005 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.lt.yml'), 1006 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.lt.yml'), 1007 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.lt.yml'), 1008 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.lt.yml'), 1009 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.lt.yml'), 1010 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.lt.yml'), 1011 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.lt.yml'), 1012 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.lt.yml'), 1013 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/messages.lt.yml'), 1014 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/validators.lt.yml'), 1015 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), 1016 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), 1017 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.lv.xlf'), 1018 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.lv.yml'), 1019 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.lv.yml'), 1020 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.lv.yml'), 1021 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.lv.yml'), 1022 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.lv.yml'), 1023 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.lv.yml'), 1024 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.lv.yml'), 1025 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.lv.yml'), 1026 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.lv.yml'), 1027 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.lv.yml'), 1028 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.lv.yml'), 1029 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.lv.yml'), 1030 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.lv.yml'), 1031 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.lv.yml'), 1032 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.lv.yml'), 1033 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.lv.yml'), 1034 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), 1035 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.mn.xlf'), 1036 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), 1037 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nb.xlf'), 1038 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.nb.xlf'), 1039 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 1040 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 1041 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.nl.xlf'), 1042 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.nl.yml'), 1043 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.nl.yml'), 1044 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.nl.yml'), 1045 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.nl.yml'), 1046 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.nl.yml'), 1047 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.nl.yml'), 1048 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.nl.yml'), 1049 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.nl.yml'), 1050 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.nl.yml'), 1051 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.nl.yml'), 1052 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.nl.yml'), 1053 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.nl.yml'), 1054 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.nl.yml'), 1055 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.nl.yml'), 1056 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.nl.yml'), 1057 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.nl.yml'), 1058 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.nl.yml'), 1059 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.nl.yml'), 1060 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.nl.yml'), 1061 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.nl.yml'), 1062 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.nl.yml'), 1063 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.nl.yml'), 1064 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.nl.yml'), 1065 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.nl.yml'), 1066 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.nl.yml'), 1067 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.nl.yml'), 1068 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.nl.yml'), 1069 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.nl.yml'), 1070 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.nl.yml'), 1071 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.nl.yml'), 1072 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.nl.yml'), 1073 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.nl.yml'), 1074 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.nl.yml'), 1075 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.nl.yml'), 1076 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.nl.yml'), 1077 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.nl.yml'), 1078 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.nl.yml'), 1079 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.nl.yml'), 1080 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.nl.yml'), 1081 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.nl.yml'), 1082 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.nl.yml'), 1083 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.nl.yml'), 1084 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.nl.yml'), 1085 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.nl.xliff'), 1086 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.nl.yml'), 1087 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.nl.yml'), 1088 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.nl.yml'), 1089 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.nl.yml'), 1090 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/messages.nl.yml'), 1091 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/validators.nl.yml'), 1092 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), 1093 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nn.xlf'), 1094 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.nn.xlf'), 1095 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 1096 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.no.xlf'), 1097 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.no.xlf'), 1098 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.no.yml'), 1099 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.no.yml'), 1100 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.no.yml'), 1101 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.no.yml'), 1102 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.no.yml'), 1103 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.no.yml'), 1104 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.no.yml'), 1105 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.no.yml'), 1106 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.no.yml'), 1107 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.no.yml'), 1108 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.no.yml'), 1109 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.no.yml'), 1110 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.no.yml'), 1111 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.no.yml'), 1112 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.no.yml'), 1113 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.no.yml'), 1114 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.no.yml'), 1115 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.no.yml'), 1116 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.no.yml'), 1117 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.no.yml'), 1118 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.no.yml'), 1119 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.no.yml'), 1120 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.no.yml'), 1121 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.no.yml'), 1122 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.no.yml'), 1123 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.no.yml'), 1124 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.no.yml'), 1125 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.no.yml'), 1126 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.no.yml'), 1127 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.no.yml'), 1128 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.no.yml'), 1129 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.no.yml'), 1130 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.no.yml'), 1131 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.no.yml'), 1132 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.no.yml'), 1133 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.no.yml'), 1134 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.no.yml'), 1135 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.no.yml'), 1136 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.no.yml'), 1137 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.no.yml'), 1138 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.no.xliff'), 1139 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.no.yml'), 1140 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.no.yml'), 1141 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.no.yml'), 1142 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.no.yml'), 1143 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 1144 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 1145 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.pl.xlf'), 1146 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.pl.yml'), 1147 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.pl.yml'), 1148 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.pl.yml'), 1149 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.pl.yml'), 1150 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.pl.yml'), 1151 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.pl.yml'), 1152 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.pl.yml'), 1153 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.pl.yml'), 1154 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.pl.yml'), 1155 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.pl.yml'), 1156 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.pl.yml'), 1157 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.pl.yml'), 1158 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.pl.yml'), 1159 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.pl.yml'), 1160 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.pl.yml'), 1161 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/flashes.pl.yml'), 1162 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.pl.yml'), 1163 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.pl.yml'), 1164 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.pl.yml'), 1165 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.pl.yml'), 1166 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.pl.yml'), 1167 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.pl.yml'), 1168 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.pl.yml'), 1169 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.pl.yml'), 1170 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.pl.yml'), 1171 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.pl.yml'), 1172 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.pl.yml'), 1173 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.pl.yml'), 1174 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.pl.yml'), 1175 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.pl.yml'), 1176 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.pl.yml'), 1177 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.pl.yml'), 1178 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.pl.yml'), 1179 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.pl.yml'), 1180 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.pl.yml'), 1181 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.pl.yml'), 1182 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.pl.yml'), 1183 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.pl.yml'), 1184 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.pl.yml'), 1185 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.pl.yml'), 1186 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.pl.yml'), 1187 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.pl.yml'), 1188 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.pl.yml'), 1189 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.pl.yml'), 1190 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pl.xliff'), 1191 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.pl.yml'), 1192 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.pl.yml'), 1193 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.pl.yml'), 1194 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.pl.yml'), 1195 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/messages.pl.yml'), 1196 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/validators.pl.yml'), 1197 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), 1198 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 1199 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.pt.yml'), 1200 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.pt.yml'), 1201 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.pt.yml'), 1202 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.pt.yml'), 1203 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.pt.yml'), 1204 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.pt.yml'), 1205 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.pt.yml'), 1206 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.pt.yml'), 1207 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.pt.yml'), 1208 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.pt.yml'), 1209 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.pt.yml'), 1210 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.pt.yml'), 1211 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.pt.yml'), 1212 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.pt.yml'), 1213 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.pt.yml'), 1214 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.pt.yml'), 1215 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.pt.yml'), 1216 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.pt.yml'), 1217 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.pt.yml'), 1218 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.pt.yml'), 1219 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.pt.yml'), 1220 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.pt.yml'), 1221 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.pt.yml'), 1222 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.pt.yml'), 1223 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.pt.yml'), 1224 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.pt.yml'), 1225 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.pt.yml'), 1226 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.pt.yml'), 1227 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.pt.yml'), 1228 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.pt.yml'), 1229 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.pt.yml'), 1230 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.pt.yml'), 1231 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.pt.yml'), 1232 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.pt.yml'), 1233 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.pt.yml'), 1234 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.pt.yml'), 1235 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.pt.yml'), 1236 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.pt.yml'), 1237 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.pt.yml'), 1238 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.pt.yml'), 1239 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.pt.yml'), 1240 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pt.xliff'), 1241 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.pt.yml'), 1242 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.pt.yml'), 1243 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.pt.yml'), 1244 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.pt.yml'), 1245 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 1246 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 1247 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.pt_BR.xlf'), 1248 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.pt_BR.yml'), 1249 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.pt_BR.yml'), 1250 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.pt_BR.yml'), 1251 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.pt_BR.yml'), 1252 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.pt_BR.yml'), 1253 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.pt_BR.yml'), 1254 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.pt_BR.yml'), 1255 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.pt_BR.yml'), 1256 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.pt_BR.yml'), 1257 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.pt_BR.yml'), 1258 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.pt_BR.yml'), 1259 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.pt_BR.yml'), 1260 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.pt_BR.yml'), 1261 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.pt_BR.yml'), 1262 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.pt_BR.yml'), 1263 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.pt_BR.yml'), 1264 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.pt_BR.yml'), 1265 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.pt_BR.yml'), 1266 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.pt_BR.yml'), 1267 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.pt_BR.yml'), 1268 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.pt_BR.yml'), 1269 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.pt_BR.yml'), 1270 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.pt_BR.yml'), 1271 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.pt_BR.yml'), 1272 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.pt_BR.yml'), 1273 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.pt_BR.yml'), 1274 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.pt_BR.yml'), 1275 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.pt_BR.yml'), 1276 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.pt_BR.yml'), 1277 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.pt_BR.yml'), 1278 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.pt_BR.yml'), 1279 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.pt_BR.yml'), 1280 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.pt_BR.yml'), 1281 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.pt_BR.yml'), 1282 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.pt_BR.yml'), 1283 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.pt_BR.yml'), 1284 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.pt_BR.yml'), 1285 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.pt_BR.yml'), 1286 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.pt_BR.yml'), 1287 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.pt_BR.yml'), 1288 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.pt_BR.yml'), 1289 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.pt_BR.yml'), 1290 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.pt_BR.yml'), 1291 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.pt_BR.yml'), 1292 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.pt_BR.yml'), 1293 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.pt_BR.yml'), 1294 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.pt_BR.yml'), 1295 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 1296 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 1297 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.ro.xlf'), 1298 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.ro.yml'), 1299 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.ro.yml'), 1300 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.ro.yml'), 1301 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.ro.yml'), 1302 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.ro.yml'), 1303 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.ro.yml'), 1304 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.ro.yml'), 1305 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.ro.yml'), 1306 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.ro.yml'), 1307 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.ro.yml'), 1308 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.ro.yml'), 1309 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.ro.yml'), 1310 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.ro.yml'), 1311 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.ro.yml'), 1312 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.ro.yml'), 1313 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/flashes.ro.yml'), 1314 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.ro.yml'), 1315 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.ro.yml'), 1316 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.ro.yml'), 1317 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.ro.yml'), 1318 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.ro.yml'), 1319 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.ro.yml'), 1320 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.ro.yml'), 1321 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.ro.yml'), 1322 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.ro.yml'), 1323 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.ro.yml'), 1324 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.ro.yml'), 1325 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.ro.yml'), 1326 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.ro.yml'), 1327 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.ro.yml'), 1328 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.ro.yml'), 1329 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.ro.yml'), 1330 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.ro.yml'), 1331 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.ro.yml'), 1332 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.ro.yml'), 1333 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages+intl-icu.ro.yml'), 1334 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.ro.yml'), 1335 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.ro.yml'), 1336 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.ro.yml'), 1337 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.ro.yml'), 1338 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.ro.yml'), 1339 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.ro.yml'), 1340 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.ro.yml'), 1341 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.ro.yml'), 1342 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.ro.yml'), 1343 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ro.xliff'), 1344 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages+intl-icu.ro.yml'), 1345 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.ro.yml'), 1346 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.ro.yml'), 1347 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/flashes.ro.yml'), 1348 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.ro.yml'), 1349 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.ro.yml'), 1350 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 1351 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 1352 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.ru.xlf'), 1353 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.ru.yml'), 1354 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.ru.yml'), 1355 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.ru.yml'), 1356 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.ru.yml'), 1357 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.ru.yml'), 1358 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.ru.yml'), 1359 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.ru.yml'), 1360 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.ru.yml'), 1361 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.ru.yml'), 1362 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.ru.yml'), 1363 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.ru.yml'), 1364 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.ru.yml'), 1365 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.ru.yml'), 1366 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.ru.yml'), 1367 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.ru.yml'), 1368 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.ru.yml'), 1369 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.ru.yml'), 1370 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.ru.yml'), 1371 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.ru.yml'), 1372 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.ru.yml'), 1373 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.ru.yml'), 1374 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.ru.yml'), 1375 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.ru.yml'), 1376 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.ru.yml'), 1377 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.ru.yml'), 1378 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.ru.yml'), 1379 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.ru.yml'), 1380 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.ru.yml'), 1381 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.ru.yml'), 1382 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.ru.yml'), 1383 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.ru.yml'), 1384 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.ru.yml'), 1385 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.ru.yml'), 1386 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.ru.yml'), 1387 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.ru.yml'), 1388 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.ru.yml'), 1389 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.ru.yml'), 1390 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.ru.yml'), 1391 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.ru.yml'), 1392 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.ru.yml'), 1393 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.ru.yml'), 1394 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.ru.yml'), 1395 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.ru.yml'), 1396 => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Resources/translations/SonataBlockBundle.ru.xliff'), 1397 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ru.xliff'), 1398 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.ru.yml'), 1399 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.ru.yml'), 1400 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.ru.yml'), 1401 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.ru.yml'), 1402 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/messages.ru.yml'), 1403 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/validators.ru.yml'), 1404 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 1405 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 1406 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.sk.xlf'), 1407 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.sk.yml'), 1408 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.sk.yml'), 1409 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.sk.yml'), 1410 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.sk.yml'), 1411 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.sk.yml'), 1412 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.sk.yml'), 1413 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.sk.yml'), 1414 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.sk.yml'), 1415 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.sk.yml'), 1416 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.sk.yml'), 1417 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.sk.yml'), 1418 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.sk.yml'), 1419 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.sk.yml'), 1420 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.sk.yml'), 1421 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.sk.yml'), 1422 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.sk.yml'), 1423 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.sk.yml'), 1424 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.sk.yml'), 1425 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.sk.yml'), 1426 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.sk.yml'), 1427 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.sk.yml'), 1428 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.sk.yml'), 1429 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.sk.yml'), 1430 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.sk.yml'), 1431 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.sk.yml'), 1432 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.sk.yml'), 1433 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.sk.yml'), 1434 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.sk.yml'), 1435 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.sk.yml'), 1436 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.sk.yml'), 1437 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.sk.yml'), 1438 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.sk.yml'), 1439 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.sk.yml'), 1440 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.sk.yml'), 1441 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.sk.yml'), 1442 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.sk.yml'), 1443 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.sk.yml'), 1444 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.sk.yml'), 1445 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.sk.yml'), 1446 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.sk.yml'), 1447 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.sk.yml'), 1448 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.sk.yml'), 1449 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.sk.yml'), 1450 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sk.xliff'), 1451 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.sk.yml'), 1452 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.sk.yml'), 1453 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.sk.yml'), 1454 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.sk.yml'), 1455 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/messages.sk.yml'), 1456 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/validators.sk.yml'), 1457 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 1458 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 1459 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.sl.xlf'), 1460 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.sl.yml'), 1461 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.sl.yml'), 1462 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.sl.yml'), 1463 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.sl.yml'), 1464 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.sl.yml'), 1465 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.sl.yml'), 1466 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.sl.yml'), 1467 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.sl.yml'), 1468 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.sl.yml'), 1469 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.sl.yml'), 1470 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.sl.yml'), 1471 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.sl.yml'), 1472 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.sl.yml'), 1473 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.sl.yml'), 1474 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.sl.yml'), 1475 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.sl.yml'), 1476 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.sl.yml'), 1477 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.sl.yml'), 1478 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.sl.yml'), 1479 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.sl.yml'), 1480 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.sl.yml'), 1481 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.sl.yml'), 1482 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.sl.yml'), 1483 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.sl.yml'), 1484 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.sl.yml'), 1485 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.sl.yml'), 1486 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.sl.yml'), 1487 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.sl.yml'), 1488 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.sl.yml'), 1489 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.sl.yml'), 1490 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.sl.yml'), 1491 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.sl.yml'), 1492 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.sl.yml'), 1493 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.sl.yml'), 1494 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.sl.yml'), 1495 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.sl.yml'), 1496 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.sl.yml'), 1497 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.sl.yml'), 1498 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.sl.yml'), 1499 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.sl.yml'), 1500 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sl.xliff'), 1501 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.sl.yml'), 1502 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.sl.yml'), 1503 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.sl.yml'), 1504 => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle/Resources/translations/FOSOAuthServerBundle.sl.yml'), 1505 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sq.xlf'), 1506 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.sq.yml'), 1507 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.sq.yml'), 1508 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.sq.yml'), 1509 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.sq.yml'), 1510 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.sq.yml'), 1511 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.sq.yml'), 1512 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.sq.yml'), 1513 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.sq.yml'), 1514 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.sq.yml'), 1515 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.sq.yml'), 1516 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.sq.yml'), 1517 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.sq.yml'), 1518 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.sq.yml'), 1519 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.sq.yml'), 1520 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.sq.yml'), 1521 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.sq.yml'), 1522 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.sq.yml'), 1523 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.sq.yml'), 1524 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.sq.yml'), 1525 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.sq.yml'), 1526 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.sq.yml'), 1527 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.sq.yml'), 1528 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.sq.yml'), 1529 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.sq.yml'), 1530 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.sq.yml'), 1531 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.sq.yml'), 1532 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.sq.yml'), 1533 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.sq.yml'), 1534 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.sq.yml'), 1535 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.sq.yml'), 1536 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.sq.yml'), 1537 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.sq.yml'), 1538 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.sq.yml'), 1539 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.sq.yml'), 1540 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.sq.yml'), 1541 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.sq.yml'), 1542 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.sq.yml'), 1543 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.sq.yml'), 1544 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.sq.yml'), 1545 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.sq.yml'), 1546 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.sq.yml'), 1547 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 1548 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 1549 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.sr_Cyrl.xlf'), 1550 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Cyrl.xliff'), 1551 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 1552 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 1553 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.sr_Latn.xlf'), 1554 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Latn.xliff'), 1555 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 1556 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 1557 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.sv.xlf'), 1558 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.sv.yml'), 1559 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.sv.yml'), 1560 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.sv.yml'), 1561 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.sv.yml'), 1562 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.sv.yml'), 1563 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.sv.yml'), 1564 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.sv.yml'), 1565 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.sv.yml'), 1566 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.sv.yml'), 1567 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.sv.yml'), 1568 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.sv.yml'), 1569 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.sv.yml'), 1570 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.sv.yml'), 1571 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.sv.yml'), 1572 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.sv.yml'), 1573 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.sv.yml'), 1574 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.sv.yml'), 1575 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.sv.yml'), 1576 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.sv.yml'), 1577 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.sv.yml'), 1578 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.sv.yml'), 1579 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.sv.yml'), 1580 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.sv.yml'), 1581 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.sv.yml'), 1582 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.sv.yml'), 1583 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.sv.yml'), 1584 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.sv.yml'), 1585 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.sv.yml'), 1586 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.sv.yml'), 1587 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.sv.yml'), 1588 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.sv.yml'), 1589 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.sv.yml'), 1590 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.sv.yml'), 1591 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.sv.yml'), 1592 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.sv.yml'), 1593 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sv.xliff'), 1594 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.sv.yml'), 1595 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.sv.yml'), 1596 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.sv.yml'), 1597 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 1598 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.th.xlf'), 1599 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.th.yml'), 1600 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.th.yml'), 1601 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.th.yml'), 1602 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.th.yml'), 1603 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.th.yml'), 1604 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.th.yml'), 1605 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.th.yml'), 1606 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.th.yml'), 1607 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.th.yml'), 1608 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.th.yml'), 1609 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.th.yml'), 1610 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.th.yml'), 1611 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.th.yml'), 1612 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.th.yml'), 1613 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.th.yml'), 1614 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.th.yml'), 1615 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.th.yml'), 1616 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.th.yml'), 1617 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.th.yml'), 1618 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.th.yml'), 1619 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.th.yml'), 1620 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.th.yml'), 1621 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.th.yml'), 1622 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.th.yml'), 1623 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.th.yml'), 1624 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.th.yml'), 1625 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.th.yml'), 1626 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.th.yml'), 1627 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.th.yml'), 1628 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.th.yml'), 1629 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.th.yml'), 1630 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.th.yml'), 1631 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.th.yml'), 1632 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.th.yml'), 1633 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.th.yml'), 1634 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.th.yml'), 1635 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.th.yml'), 1636 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.th.yml'), 1637 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.th.yml'), 1638 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.th.yml'), 1639 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.th.yml'), 1640 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.th.yml'), 1641 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.th.xliff'), 1642 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.th.yml'), 1643 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.th.yml'), 1644 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.th.yml'), 1645 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tl.xlf'), 1646 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tl.xlf'), 1647 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.tl.xlf'), 1648 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 1649 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tr.xlf'), 1650 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.tr.xlf'), 1651 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.tr.yml'), 1652 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.tr.yml'), 1653 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.tr.yml'), 1654 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.tr.yml'), 1655 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.tr.yml'), 1656 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.tr.yml'), 1657 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.tr.yml'), 1658 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.tr.yml'), 1659 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.tr.yml'), 1660 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.tr.yml'), 1661 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.tr.yml'), 1662 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.tr.yml'), 1663 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.tr.yml'), 1664 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.tr.yml'), 1665 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.tr.yml'), 1666 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.tr.yml'), 1667 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.tr.yml'), 1668 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.tr.yml'), 1669 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.tr.yml'), 1670 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.tr.yml'), 1671 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.tr.yml'), 1672 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.tr.yml'), 1673 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.tr.yml'), 1674 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.tr.yml'), 1675 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.tr.yml'), 1676 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.tr.yml'), 1677 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.tr.yml'), 1678 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.tr.yml'), 1679 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.tr.yml'), 1680 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.tr.yml'), 1681 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.tr.yml'), 1682 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.tr.yml'), 1683 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.tr.yml'), 1684 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.tr.yml'), 1685 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.tr.yml'), 1686 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.tr.yml'), 1687 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.tr.yml'), 1688 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.tr.yml'), 1689 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.tr.yml'), 1690 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.tr.yml'), 1691 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.tr.yml'), 1692 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.tr.yml'), 1693 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.tr.yml'), 1694 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.tr.xliff'), 1695 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.tr.yml'), 1696 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.tr.yml'), 1697 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.tr.yml'), 1698 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.tr.yml'), 1699 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 1700 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 1701 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.uk.xlf'), 1702 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.uk.yml'), 1703 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.uk.yml'), 1704 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.uk.yml'), 1705 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.uk.yml'), 1706 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.uk.yml'), 1707 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.uk.yml'), 1708 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.uk.yml'), 1709 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.uk.yml'), 1710 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.uk.yml'), 1711 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.uk.yml'), 1712 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.uk.yml'), 1713 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.uk.yml'), 1714 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.uk.yml'), 1715 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.uk.yml'), 1716 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.uk.yml'), 1717 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.uk.yml'), 1718 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.uk.yml'), 1719 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.uk.yml'), 1720 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.uk.yml'), 1721 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.uk.yml'), 1722 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.uk.yml'), 1723 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.uk.yml'), 1724 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.uk.yml'), 1725 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.uk.yml'), 1726 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.uk.yml'), 1727 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.uk.yml'), 1728 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.uk.yml'), 1729 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.uk.yml'), 1730 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.uk.yml'), 1731 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.uk.yml'), 1732 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.uk.yml'), 1733 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.uk.yml'), 1734 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.uk.yml'), 1735 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.uk.yml'), 1736 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.uk.yml'), 1737 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.uk.yml'), 1738 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.uk.yml'), 1739 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.uk.yml'), 1740 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.uk.yml'), 1741 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.uk.yml'), 1742 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.uk.yml'), 1743 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.uk.yml'), 1744 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.uk.yml'), 1745 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.uk.xliff'), 1746 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.uk.yml'), 1747 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.uk.yml'), 1748 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.uk.yml'), 1749 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.uk.yml'), 1750 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 1751 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.vi.xlf'), 1752 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.vi.xlf'), 1753 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.vi.yml'), 1754 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.vi.yml'), 1755 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.vi.yml'), 1756 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.vi.yml'), 1757 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.vi.yml'), 1758 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.vi.yml'), 1759 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.vi.yml'), 1760 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.vi.yml'), 1761 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.vi.yml'), 1762 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.vi.yml'), 1763 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.vi.yml'), 1764 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.vi.yml'), 1765 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.vi.yml'), 1766 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.vi.yml'), 1767 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.vi.yml'), 1768 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.vi.yml'), 1769 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.vi.yml'), 1770 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.vi.yml'), 1771 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.vi.yml'), 1772 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.vi.yml'), 1773 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.vi.yml'), 1774 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 1775 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 1776 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.zh_CN.xlf'), 1777 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.zh_CN.yml'), 1778 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.zh_CN.yml'), 1779 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.zh_CN.yml'), 1780 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.zh_CN.yml'), 1781 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.zh_CN.yml'), 1782 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.zh_CN.yml'), 1783 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.zh_CN.yml'), 1784 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.zh_CN.yml'), 1785 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.zh_CN.yml'), 1786 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.zh_CN.yml'), 1787 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.zh_CN.yml'), 1788 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.zh_CN.yml'), 1789 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.zh_CN.yml'), 1790 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.zh_CN.yml'), 1791 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.zh_CN.yml'), 1792 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.zh_CN.yml'), 1793 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.zh_CN.yml'), 1794 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.zh_CN.yml'), 1795 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.zh_CN.yml'), 1796 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.zh_CN.yml'), 1797 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.zh_CN.yml'), 1798 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.zh_CN.yml'), 1799 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.zh_CN.yml'), 1800 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.zh_CN.yml'), 1801 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.zh_CN.yml'), 1802 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.zh_CN.yml'), 1803 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.zh_CN.yml'), 1804 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.zh_CN.yml'), 1805 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.zh_CN.yml'), 1806 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.zh_CN.yml'), 1807 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.zh_CN.yml'), 1808 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.zh_CN.yml'), 1809 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.zh_CN.yml'), 1810 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.zh_CN.yml'), 1811 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.zh_CN.yml'), 1812 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.zh_CN.yml'), 1813 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.zh_CN.yml'), 1814 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.zh_CN.yml'), 1815 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.zh_CN.yml'), 1816 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.zh_CN.yml'), 1817 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.zh_CN.yml'), 1818 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.zh_CN.yml'), 1819 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.zh_CN.yml'), 1820 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.zh_CN.xliff'), 1821 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.zh_CN.yml'), 1822 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.zh_CN.yml'), 1823 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.zh_CN.yml'), 1824 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.zh_CN.yml'), 1825 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf'), 1826 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.zh_TW.yml'), 1827 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.zh_TW.yml'), 1828 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.zh_TW.yml'), 1829 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.zh_TW.yml'), 1830 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.zh_TW.yml'), 1831 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.zh_TW.yml'), 1832 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.zh_TW.yml'), 1833 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.zh_TW.yml'), 1834 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.zh_TW.yml'), 1835 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.zh_TW.yml'), 1836 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.zh_TW.yml'), 1837 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.zh_TW.yml'), 1838 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.zh_TW.yml'), 1839 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.zh_TW.yml'), 1840 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.zh_TW.yml'), 1841 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.zh_TW.yml'), 1842 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.zh_TW.yml'), 1843 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.zh_TW.yml'), 1844 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.zh_TW.yml'), 1845 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.zh_TW.yml'), 1846 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.zh_TW.yml'), 1847 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.zh_TW.yml'), 1848 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.zh_TW.yml'), 1849 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.zh_TW.yml'), 1850 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.zh_TW.yml'), 1851 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.zh_TW.yml'), 1852 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.zh_TW.yml'), 1853 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.zh_TW.yml'), 1854 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.zh_TW.yml'), 1855 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.zh_TW.yml'), 1856 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.zh_TW.yml'), 1857 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.zh_TW.yml'), 1858 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.zh_TW.yml'), 1859 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.zh_TW.yml'), 1860 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations/security.pt_PT.xlf'), 1861 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.de_CH.yml'), 1862 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.de_CH.yml'), 1863 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.de_CH.yml'), 1864 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.de_CH.yml'), 1865 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.de_CH.yml'), 1866 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.de_CH.yml'), 1867 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.de_CH.yml'), 1868 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.de_CH.yml'), 1869 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.de_CH.yml'), 1870 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.de_CH.yml'), 1871 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.de_CH.yml'), 1872 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.de_CH.yml'), 1873 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.de_CH.yml'), 1874 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.de_CH.yml'), 1875 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.de_CH.yml'), 1876 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.de_CH.yml'), 1877 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.de_CH.yml'), 1878 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.de_CH.yml'), 1879 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.de_CH.yml'), 1880 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.de_CH.yml'), 1881 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.de_CH.yml'), 1882 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.de_CH.yml'), 1883 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.de_CH.yml'), 1884 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.de_CH.yml'), 1885 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.de_CH.yml'), 1886 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.de_CH.yml'), 1887 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.de_CH.yml'), 1888 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.de_CH.yml'), 1889 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.de_CH.yml'), 1890 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.de_CH.yml'), 1891 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.de_CH.yml'), 1892 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.de_CH.yml'), 1893 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.de_CH.yml'), 1894 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.de_CH.yml'), 1895 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.de_CH.yml'), 1896 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.de_CH.yml'), 1897 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.de_CH.yml'), 1898 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.de_CH.yml'), 1899 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.de_CH.yml'), 1900 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.de_CH.yml'), 1901 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.de_CH.yml'), 1902 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.de_CH.yml'), 1903 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.de_CH.yml'), 1904 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.de_CH.yml'), 1905 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.de_CH.yml'), 1906 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.de_CH.yml'), 1907 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.de_CH.yml'), 1908 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/flashes.sr_CS.yml'), 1909 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/translations/validators.sr_CS.yml'), 1910 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.sr_CS.yml'), 1911 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/validators.sr_CS.yml'), 1912 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.sr_CS.yml'), 1913 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/validators.sr_CS.yml'), 1914 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/flashes.sr_CS.yml'), 1915 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.sr_CS.yml'), 1916 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/validators.sr_CS.yml'), 1917 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.sr_CS.yml'), 1918 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/validators.sr_CS.yml'), 1919 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.sr_CS.yml'), 1920 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.sr_CS.yml'), 1921 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.sr_CS.yml'), 1922 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/validators.sr_CS.yml'), 1923 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.sr_CS.yml'), 1924 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/validators.sr_CS.yml'), 1925 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/flashes.sr_CS.yml'), 1926 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.sr_CS.yml'), 1927 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/validators.sr_CS.yml'), 1928 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/flashes.sr_CS.yml'), 1929 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.sr_CS.yml'), 1930 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/validators.sr_CS.yml'), 1931 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.sr_CS.yml'), 1932 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.sr_CS.yml'), 1933 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.sr_CS.yml'), 1934 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/validators.sr_CS.yml'), 1935 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.sr_CS.yml'), 1936 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.sr_CS.yml'), 1937 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.sr_CS.yml'), 1938 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/flashes.sr_CS.yml'), 1939 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.sr_CS.yml'), 1940 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.sr_CS.yml'), 1941 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/flashes.sr_CS.yml'), 1942 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.sr_CS.yml'), 1943 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/flashes.sr_CS.yml'), 1944 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.sr_CS.yml'), 1945 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/validators.sr_CS.yml'), 1946 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.sr_CS.yml'), 1947 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.sr_CS.yml'), 1948 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.sr_CS.yml'), 1949 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.sr_CS.yml'), 1950 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/validators.sr_CS.yml'), 1951 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.sr_CS.yml'), 1952 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/validators.sr_CS.yml'), 1953 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.sr_CS.yml'), 1954 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.sr_CS.yml'), 1955 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.ko.yml'), 1956 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.ko.yml'), 1957 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.ko.yml'), 1958 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.ko.yml'), 1959 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.ko.yml'), 1960 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.ko.yml'), 1961 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.ko.yml'), 1962 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.ko.yml'), 1963 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.ko.yml'), 1964 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.ko.yml'), 1965 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.ko.yml'), 1966 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.ko.yml'), 1967 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.ko.yml'), 1968 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.ko.yml'), 1969 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.ko.yml'), 1970 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.ko.yml'), 1971 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.ko.yml'), 1972 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.ko.yml'), 1973 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.mk.yml'), 1974 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.mk.yml'), 1975 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.mk.yml'), 1976 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.mk.yml'), 1977 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.mk.yml'), 1978 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.mk.yml'), 1979 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.mk.yml'), 1980 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.mk.yml'), 1981 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.mk.yml'), 1982 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.mk.yml'), 1983 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.mk.yml'), 1984 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.mk.yml'), 1985 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/flashes.mk.yml'), 1986 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.mk.yml'), 1987 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/validators.mk.yml'), 1988 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.mk.yml'), 1989 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/validators.mk.yml'), 1990 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.mk.yml'), 1991 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.mk.yml'), 1992 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.mk.yml'), 1993 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/validators.mk.yml'), 1994 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.mk.yml'), 1995 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.ms.yml'), 1996 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.ms.yml'), 1997 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.ms.yml'), 1998 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.ms.yml'), 1999 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.ms.yml'), 2000 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.ms.yml'), 2001 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.ms.yml'), 2002 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.ms.yml'), 2003 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.ms.yml'), 2004 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.ms.yml'), 2005 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.ms.yml'), 2006 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.ms.yml'), 2007 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.ms.yml'), 2008 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.ms.yml'), 2009 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.ms.yml'), 2010 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.ms.yml'), 2011 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.ms.yml'), 2012 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/translations/messages.sr.yml'), 2013 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/translations/messages.sr.yml'), 2014 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/translations/messages.sr.yml'), 2015 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/translations/messages.sr.yml'), 2016 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/messages.sr.yml'), 2017 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/translations/validators.sr.yml'), 2018 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/translations/messages.sr.yml'), 2019 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/translations/messages.sr.yml'), 2020 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/translations/messages.sr.yml'), 2021 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/translations/messages.sr.yml'), 2022 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/messages.sr.yml'), 2023 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/translations/validators.sr.yml'), 2024 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/translations/messages.sr.yml'), 2025 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/translations/messages.sr.yml'), 2026 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/translations/messages.sr.yml'), 2027 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/translations/messages.sr.yml'), 2028 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/translations/messages.sr.yml'), 2029 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.sr.yml'), 2030 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/flashes.sr.yml'), 2031 => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Resources/translations/messages.sr.yml'), 2032 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/translations/messages.sr.yml'), 2033 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/translations/messages.sr.yml'), 2034 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/translations/messages.sr.yml'), 2035 => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/translations/messages.is.yml'), 2036 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.oc.xliff'), 2037 => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sw.xliff'), 2038 => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/translations/messages.cs_CZ.yml')]), 1 => new \Sylius\Bundle\ThemeBundle\Translation\Provider\Resource\ThemeTranslatorResourceProvider(($this->services['Sylius\\Bundle\\ThemeBundle\\Translation\\Finder\\TranslationFilesFinderInterface'] ?? $this->getTranslationFilesFinderInterfaceService()), ($this->services['sylius.repository.theme'] ?? $this->getSylius_Repository_ThemeService()), ($this->services['Sylius\\Bundle\\ThemeBundle\\HierarchyProvider\\ThemeHierarchyProviderInterface'] ?? ($this->services['Sylius\\Bundle\\ThemeBundle\\HierarchyProvider\\ThemeHierarchyProviderInterface'] = new \Sylius\Bundle\ThemeBundle\HierarchyProvider\ThemeHierarchyProvider())))]);
    }

    /*
     * Gets the public 'Sylius\Component\Channel\Context\ChannelContextInterface' shared service.
     *
     * @return \Sylius\Component\Channel\Context\CompositeChannelContext
     */
    protected function getChannelContextInterfaceService()
    {
        $this->services['Sylius\\Component\\Channel\\Context\\ChannelContextInterface'] = $instance = new \Sylius\Component\Channel\Context\CompositeChannelContext();

        $instance->addContext(new \Sylius\Component\Channel\Context\RequestBased\ChannelContext(($this->services['Sylius\\Component\\Channel\\Context\\RequestBased\\RequestResolverInterface'] ?? $this->getRequestResolverInterfaceService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))), 0);
        $instance->addContext(new \Sylius\Component\Channel\Context\SingleChannelContext(($this->services['sylius.repository.channel'] ?? $this->getSylius_Repository_ChannelService())), -128);

        return $instance;
    }

    /*
     * Gets the public 'Sylius\Component\Channel\Context\RequestBased\RequestResolverInterface' shared service.
     *
     * @return \Sylius\Component\Channel\Context\RequestBased\CompositeRequestResolver
     */
    protected function getRequestResolverInterfaceService()
    {
        $this->services['Sylius\\Component\\Channel\\Context\\RequestBased\\RequestResolverInterface'] = $instance = new \Sylius\Component\Channel\Context\RequestBased\CompositeRequestResolver();

        $instance->addResolver(new \Sylius\Component\Channel\Context\RequestBased\HostnameBasedRequestResolver(($this->services['sylius.repository.channel'] ?? $this->getSylius_Repository_ChannelService())), 0);

        return $instance;
    }

    /*
     * Gets the public 'Sylius\Component\Locale\Context\LocaleContextInterface' shared service.
     *
     * @return \Sylius\Component\Locale\Context\CompositeLocaleContext
     */
    protected function getLocaleContextInterfaceService()
    {
        $this->services['Sylius\\Component\\Locale\\Context\\LocaleContextInterface'] = $instance = new \Sylius\Component\Locale\Context\CompositeLocaleContext();

        $instance->addContext(($this->services['sylius.context.locale.request_based'] ?? $this->getSylius_Context_Locale_RequestBasedService()), 64);
        $instance->addContext(($this->services['sylius.context.locale.provider_based'] ?? $this->getSylius_Context_Locale_ProviderBasedService()), -128);
        $instance->addContext(($this->services['sylius.context.locale.admin_based'] ?? $this->getSylius_Context_Locale_AdminBasedService()), 128);

        return $instance;
    }

    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php', true],
            'sylius.listener.canonicalizer' => ['services', 'sylius.listener.canonicalizer', 'getSylius_Listener_CanonicalizerService.php', true],
            'sylius.listener.default_username' => ['services', 'sylius.listener.default_username', 'getSylius_Listener_DefaultUsernameService.php', true],
            'sylius.listener.images_remove' => ['services', 'sylius.listener.images_remove', 'getSylius_Listener_ImagesRemoveService.php', true],
            'sylius.listener.password_updater' => ['services', 'sylius.listener.password_updater', 'getSylius_Listener_PasswordUpdaterService.php', true],
            'sylius.listener.product_review_change' => ['services', 'sylius.listener.product_review_change', 'getSylius_Listener_ProductReviewChangeService.php', true],
            'sylius.listener.select_product_attribute_choice_remove' => ['services', 'sylius.listener.select_product_attribute_choice_remove', 'getSylius_Listener_SelectProductAttributeChoiceRemoveService.php', true],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
            'sylius.listener.canonicalizer' => '?',
            'sylius.listener.default_username' => '?',
            'sylius.listener.images_remove' => '?',
            'sylius.listener.password_updater' => '?',
            'sylius.listener.product_review_change' => '?',
            'sylius.listener.select_product_attribute_choice_remove' => '?',
        ]));

        $b = new \Doctrine\ORM\Tools\ResolveTargetEntityListener();
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\OrderItemInterface', 'App\\Entity\\Order\\OrderItem', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Order\\Model\\OrderItemInterface', 'App\\Entity\\Order\\OrderItem', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\OrderSequenceInterface', 'App\\Entity\\Order\\OrderSequence', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Order\\Model\\OrderSequenceInterface', 'App\\Entity\\Order\\OrderSequence', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Order\\Model\\AdjustmentInterface', 'App\\Entity\\Order\\Adjustment', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Currency\\Model\\CurrencyInterface', 'App\\Entity\\Currency\\Currency', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Currency\\Model\\ExchangeRateInterface', 'App\\Entity\\Currency\\ExchangeRate', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Locale\\Model\\LocaleInterface', 'App\\Entity\\Locale\\Locale', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ProductTaxonsAwareInterface', 'App\\Entity\\Product\\Product', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Review\\Model\\ReviewableInterface', 'App\\Entity\\Product\\Product', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ReviewableProductInterface', 'App\\Entity\\Product\\Product', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ProductInterface', 'App\\Entity\\Product\\Product', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Attribute\\Model\\AttributeSubjectInterface', 'App\\Entity\\Product\\Product', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductInterface', 'App\\Entity\\Product\\Product', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ProductTranslationInterface', 'App\\Entity\\Product\\ProductTranslation', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductTranslationInterface', 'App\\Entity\\Product\\ProductTranslation', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Shipping\\Model\\ShippableInterface', 'App\\Entity\\Product\\ProductVariant', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Inventory\\Model\\StockableInterface', 'App\\Entity\\Product\\ProductVariant', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ProductImagesAwareInterface', 'App\\Entity\\Product\\ProductVariant', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ProductVariantInterface', 'App\\Entity\\Product\\ProductVariant', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductVariantInterface', 'App\\Entity\\Product\\ProductVariant', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductVariantTranslationInterface', 'App\\Entity\\Product\\ProductVariantTranslation', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductOptionInterface', 'App\\Entity\\Product\\ProductOption', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductOptionTranslationInterface', 'App\\Entity\\Product\\ProductOptionTranslation', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductAssociationTypeInterface', 'App\\Entity\\Product\\ProductAssociationType', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslationInterface', 'App\\Entity\\Product\\ProductAssociationTypeTranslation', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductOptionValueInterface', 'App\\Entity\\Product\\ProductOptionValue', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductOptionValueTranslationInterface', 'App\\Entity\\Product\\ProductOptionValueTranslation', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductAssociationInterface', 'App\\Entity\\Product\\ProductAssociation', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Currency\\Model\\CurrenciesAwareInterface', 'App\\Entity\\Channel\\Channel', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Locale\\Model\\LocalesAwareInterface', 'App\\Entity\\Channel\\Channel', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ChannelInterface', 'App\\Entity\\Channel\\Channel', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Channel\\Model\\ChannelInterface', 'App\\Entity\\Channel\\Channel', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductAttributeInterface', 'App\\Entity\\Product\\ProductAttribute', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Attribute\\Model\\AttributeInterface', 'App\\Entity\\Product\\ProductAttribute', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductAttributeTranslationInterface', 'App\\Entity\\Product\\ProductAttributeTranslation', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Attribute\\Model\\AttributeTranslationInterface', 'App\\Entity\\Product\\ProductAttributeTranslation', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Product\\Model\\ProductAttributeValueInterface', 'App\\Entity\\Product\\ProductAttributeValue', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Attribute\\Model\\AttributeValueInterface', 'App\\Entity\\Product\\ProductAttributeValue', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\TaxRateInterface', 'App\\Entity\\Taxation\\TaxRate', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Taxation\\Model\\TaxRateInterface', 'App\\Entity\\Taxation\\TaxRate', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Taxation\\Model\\TaxCategoryInterface', 'App\\Entity\\Taxation\\TaxCategory', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ShipmentInterface', 'App\\Entity\\Shipping\\Shipment', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Shipping\\Model\\ShippingSubjectInterface', 'App\\Entity\\Shipping\\Shipment', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Shipping\\Model\\ShipmentInterface', 'App\\Entity\\Shipping\\Shipment', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ShippingMethodInterface', 'App\\Entity\\Shipping\\ShippingMethod', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Resource\\Model\\ArchivableInterface', 'App\\Entity\\Shipping\\ShippingMethod', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Shipping\\Model\\ShippingMethodInterface', 'App\\Entity\\Shipping\\ShippingMethod', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslationInterface', 'App\\Entity\\Shipping\\ShippingMethodTranslation', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Shipping\\Model\\ShippingCategoryInterface', 'App\\Entity\\Shipping\\ShippingCategory', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\PaymentInterface', 'App\\Entity\\Payment\\Payment', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Payment\\Model\\PaymentInterface', 'App\\Entity\\Payment\\Payment', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\PaymentMethodInterface', 'App\\Entity\\Payment\\PaymentMethod', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Payment\\Model\\PaymentMethodInterface', 'App\\Entity\\Payment\\PaymentMethod', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Payment\\Model\\PaymentMethodTranslationInterface', 'App\\Entity\\Payment\\PaymentMethodTranslation', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\PromotionInterface', 'App\\Entity\\Promotion\\Promotion', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Promotion\\Model\\PromotionInterface', 'App\\Entity\\Promotion\\Promotion', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\PromotionCouponInterface', 'App\\Entity\\Promotion\\PromotionCoupon', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Promotion\\Model\\PromotionCouponInterface', 'App\\Entity\\Promotion\\PromotionCoupon', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Promotion\\Model\\PromotionRuleInterface', 'App\\Entity\\Promotion\\PromotionRule', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Promotion\\Model\\PromotionActionInterface', 'App\\Entity\\Promotion\\PromotionAction', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\AddressInterface', 'App\\Entity\\Addressing\\Address', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Addressing\\Model\\AddressInterface', 'App\\Entity\\Addressing\\Address', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Addressing\\Model\\CountryInterface', 'App\\Entity\\Addressing\\Country', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Addressing\\Model\\ProvinceInterface', 'App\\Entity\\Addressing\\Province', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Addressing\\Model\\ZoneInterface', 'App\\Entity\\Addressing\\Zone', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Addressing\\Model\\ZoneMemberInterface', 'App\\Entity\\Addressing\\ZoneMember', []);
        $b->addResolveTargetEntity('Doctrine\\Common\\Comparable', 'App\\Entity\\Taxonomy\\Taxon', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\TaxonInterface', 'App\\Entity\\Taxonomy\\Taxon', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Taxonomy\\Model\\TaxonInterface', 'App\\Entity\\Taxonomy\\Taxon', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Taxonomy\\Model\\TaxonTranslationInterface', 'App\\Entity\\Taxonomy\\TaxonTranslation', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ShopUserInterface', 'App\\Entity\\User\\ShopUser', []);
        $b->addResolveTargetEntity('Sylius\\Component\\User\\Model\\UserOAuthInterface', 'App\\Entity\\User\\UserOAuth', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Customer\\Model\\CustomerGroupInterface', 'App\\Entity\\Customer\\CustomerGroup', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Review\\Model\\ReviewInterface', 'App\\Entity\\Product\\ProductReview', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ProductTaxonInterface', 'App\\Entity\\Product\\ProductTaxon', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ProductImageInterface', 'App\\Entity\\Product\\ProductImage', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\TaxonImageInterface', 'App\\Entity\\Taxonomy\\TaxonImage', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ChannelPricingInterface', 'App\\Entity\\Channel\\ChannelPricing', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\ShopBillingDataInterface', 'Sylius\\Component\\Core\\Model\\ShopBillingData', []);
        $b->addResolveTargetEntity('Payum\\Core\\Security\\TokenInterface', 'App\\Entity\\Payment\\PaymentSecurityToken', []);
        $b->addResolveTargetEntity('Payum\\Core\\Model\\DetailsAwareInterface', 'App\\Entity\\Payment\\PaymentSecurityToken', []);
        $b->addResolveTargetEntity('Payum\\Core\\Model\\DetailsAggregateInterface', 'App\\Entity\\Payment\\PaymentSecurityToken', []);
        $b->addResolveTargetEntity('Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityTokenInterface', 'App\\Entity\\Payment\\PaymentSecurityToken', []);
        $b->addResolveTargetEntity('Sylius\\Bundle\\PayumBundle\\Model\\GatewayConfigInterface', 'App\\Entity\\Payment\\GatewayConfig', []);
        $b->addResolveTargetEntity('Payum\\Core\\Security\\CryptedInterface', 'App\\Entity\\Payment\\GatewayConfig', []);
        $b->addResolveTargetEntity('Payum\\Core\\Model\\GatewayConfigInterface', 'App\\Entity\\Payment\\GatewayConfig', []);
        $b->addResolveTargetEntity('Sylius\\Bundle\\AdminApiBundle\\Model\\ClientInterface', 'App\\Entity\\AdminApi\\Client', []);
        $b->addResolveTargetEntity('FOS\\OAuthServerBundle\\Model\\ClientInterface', 'App\\Entity\\AdminApi\\Client', []);
        $b->addResolveTargetEntity('OAuth2\\Model\\IOAuth2Client', 'App\\Entity\\AdminApi\\Client', []);
        $b->addResolveTargetEntity('Sylius\\Bundle\\AdminApiBundle\\Model\\AccessTokenInterface', 'App\\Entity\\AdminApi\\AccessToken', []);
        $b->addResolveTargetEntity('FOS\\OAuthServerBundle\\Model\\AccessTokenInterface', 'App\\Entity\\AdminApi\\AccessToken', []);
        $b->addResolveTargetEntity('OAuth2\\Model\\IOAuth2AccessToken', 'App\\Entity\\AdminApi\\AccessToken', []);
        $b->addResolveTargetEntity('Sylius\\Bundle\\AdminApiBundle\\Model\\RefreshTokenInterface', 'App\\Entity\\AdminApi\\RefreshToken', []);
        $b->addResolveTargetEntity('FOS\\OAuthServerBundle\\Model\\RefreshTokenInterface', 'App\\Entity\\AdminApi\\RefreshToken', []);
        $b->addResolveTargetEntity('OAuth2\\Model\\IOAuth2RefreshToken', 'App\\Entity\\AdminApi\\RefreshToken', []);
        $b->addResolveTargetEntity('Sylius\\Bundle\\AdminApiBundle\\Model\\AuthCodeInterface', 'App\\Entity\\AdminApi\\AuthCode', []);
        $b->addResolveTargetEntity('FOS\\OAuthServerBundle\\Model\\AuthCodeInterface', 'App\\Entity\\AdminApi\\AuthCode', []);
        $b->addResolveTargetEntity('OAuth2\\Model\\IOAuth2AuthCode', 'App\\Entity\\AdminApi\\AuthCode', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Order\\Model\\OrderInterface', 'App\\Entity\\Order\\Order', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Order\\Model\\OrderItemUnitInterface', 'App\\Entity\\Order\\OrderItemUnit', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Shipping\\Model\\ShipmentUnitInterface', 'App\\Entity\\Order\\OrderItemUnit', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Inventory\\Model\\InventoryUnitInterface', 'App\\Entity\\Order\\OrderItemUnit', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Core\\Model\\AdminUserInterface', 'App\\Entity\\User\\AdminUser', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Customer\\Model\\CustomerInterface', 'App\\Entity\\Customer\\Customer', []);
        $b->addResolveTargetEntity('Sylius\\Component\\Review\\Model\\ReviewerInterface', 'App\\Entity\\Customer\\Customer', []);
        $b->addResolveTargetEntity('Sylius\\Bundle\\AdminApiBundle\\Model\\UserInterface', 'App\\Entity\\User\\AdminUser', []);
        $b->addResolveTargetEntity('Sylius\\Component\\User\\Model\\UserInterface', 'App\\Entity\\User\\ShopUser', []);
        $c = new \Gedmo\Tree\TreeListener();

        $d = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        $c->setAnnotationReader($d);
        $e = new \Gedmo\Sluggable\SluggableListener();
        $e->setAnnotationReader($d);
        $f = new \Gedmo\Timestampable\TimestampableListener();
        $f->setAnnotationReader($d);
        $g = new \Gedmo\Sortable\SortableListener();
        $g->setAnnotationReader($d);

        $a->addEventSubscriber(($this->services['sylius.event_subscriber.orm_mapped_super_class'] ?? $this->getSylius_EventSubscriber_OrmMappedSuperClassService()));
        $a->addEventSubscriber(($this->services['sylius.event_subscriber.orm_repository_class'] ?? $this->getSylius_EventSubscriber_OrmRepositoryClassService()));
        $a->addEventSubscriber(($this->services['sylius.translation.translatable_listener.doctrine.orm'] ?? $this->getSylius_Translation_TranslatableListener_Doctrine_OrmService()));
        $a->addEventSubscriber(($this->privates['stof_doctrine_extensions.listener.loggable'] ?? $this->getStofDoctrineExtensions_Listener_LoggableService()));
        $a->addEventSubscriber($b);
        $a->addEventSubscriber(($this->services['sylius.doctrine.orm.event_subscriber.load_metadata.attribute'] ?? $this->getSylius_Doctrine_Orm_EventSubscriber_LoadMetadata_AttributeService()));
        $a->addEventSubscriber(($this->services['sylius.doctrine.orm.event_subscriber.load_metadata.review'] ?? $this->getSylius_Doctrine_Orm_EventSubscriber_LoadMetadata_ReviewService()));
        $a->addEventSubscriber($c);
        $a->addEventSubscriber($e);
        $a->addEventSubscriber($f);
        $a->addEventSubscriber($g);
        $a->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');
        $a->addEventListener([0 => 'postUpdate'], 'sylius.listener.select_product_attribute_choice_remove');
        $a->addEventListener([0 => 'prePersist'], 'sylius.listener.password_updater');
        $a->addEventListener([0 => 'preUpdate'], 'sylius.listener.password_updater');
        $a->addEventListener([0 => 'postPersist'], 'sylius.listener.product_review_change');
        $a->addEventListener([0 => 'postUpdate'], 'sylius.listener.product_review_change');
        $a->addEventListener([0 => 'postRemove'], 'sylius.listener.product_review_change');
        $a->addEventListener([0 => 'onFlush'], 'sylius.listener.images_remove');
        $a->addEventListener([0 => 'postFlush'], 'sylius.listener.images_remove');
        $a->addEventListener([0 => 'onFlush'], 'sylius.listener.default_username');
        $a->addEventListener([0 => 'prePersist'], 'sylius.listener.canonicalizer');
        $a->addEventListener([0 => 'preUpdate'], 'sylius.listener.canonicalizer');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['driver' => 'pdo_mysql', 'charset' => 'UTF8', 'url' => $this->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'serverVersion' => '5.7', 'defaultTableOptions' => []], new \Doctrine\DBAL\Configuration(), $a, []);
    }

    /*
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['doctrine.orm.default_entity_manager'] = $this->createProxy('EntityManager_9a5be93', function () {
                return \EntityManager_9a5be93::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getDoctrine_Orm_DefaultEntityManagerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/DoctrineProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultNamingStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';

        $a = new \Doctrine\ORM\Configuration();

        $b = new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.system_cache_pool'] ?? $this->getDoctrine_SystemCachePoolService()));

        $a->setEntityNamespaces(['payum' => 'Payum\\Core\\Model', 'App' => 'App\\Entity', 'FOSOAuthServerBundle' => 'FOS\\OAuthServerBundle\\Entity', 'BitBagSyliusCmsPlugin' => 'BitBag\\SyliusCmsPlugin\\Entity']);
        $a->setMetadataCacheImpl($b);
        $a->setQueryCacheImpl($b);
        $a->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService())));
        $a->setMetadataDriverImpl(($this->services['sylius_resource.doctrine.mapping_driver_chain'] ?? $this->getSyliusResource_Doctrine_MappingDriverChainService()));
        $a->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(false);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(($this->privates['.service_locator.I3K77mT'] ?? ($this->privates['.service_locator.I3K77mT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], [])))));
        $a->addCustomStringFunction('DATE_FORMAT', 'Sylius\\Bundle\\CoreBundle\\Doctrine\\DQL\\DateFormat');

        $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.request', [0 => function () {
            return ($this->services['sylius.listener.request_locale_setter'] ?? $this->getSylius_Listener_RequestLocaleSetterService());
        }, 1 => 'onKernelRequest'], 4);
        $instance->addListener('sylius.user.pre_password_reset', [0 => function () {
            return ($this->services['sylius.listener.password_updater'] ?? $this->load('getSylius_Listener_PasswordUpdaterService.php'));
        }, 1 => 'genericEventUpdater'], 0);
        $instance->addListener('sylius.user.pre_password_change', [0 => function () {
            return ($this->services['sylius.listener.password_updater'] ?? $this->load('getSylius_Listener_PasswordUpdaterService.php'));
        }, 1 => 'genericEventUpdater'], 0);
        $instance->addListener('sylius.admin_user.pre_update', [0 => function () {
            return ($this->services['sylius.listener.password_updater'] ?? $this->load('getSylius_Listener_PasswordUpdaterService.php'));
        }, 1 => 'genericEventUpdater'], 0);
        $instance->addListener('sylius.customer.pre_update', [0 => function () {
            return ($this->services['sylius.listener.password_updater'] ?? $this->load('getSylius_Listener_PasswordUpdaterService.php'));
        }, 1 => 'customerUpdateEvent'], 0);
        $instance->addListener('sylius.user.password_reset.request.pin', [0 => function () {
            return ($this->privates['sylius.listener.user_mailer_listener'] ?? $this->load('getSylius_Listener_UserMailerListenerService.php'));
        }, 1 => 'sendResetPasswordPinEmail'], 0);
        $instance->addListener('sylius.user.password_reset.request.token', [0 => function () {
            return ($this->privates['sylius.listener.user_mailer_listener'] ?? $this->load('getSylius_Listener_UserMailerListenerService.php'));
        }, 1 => 'sendResetPasswordTokenEmail'], 0);
        $instance->addListener('sylius.user.email_verification.token', [0 => function () {
            return ($this->privates['sylius.listener.user_mailer_listener'] ?? $this->load('getSylius_Listener_UserMailerListenerService.php'));
        }, 1 => 'sendVerificationTokenEmail'], 0);
        $instance->addListener('sylius.customer.post_register', [0 => function () {
            return ($this->privates['sylius.listener.user_mailer_listener'] ?? $this->load('getSylius_Listener_UserMailerListenerService.php'));
        }, 1 => 'sendUserRegistrationEmail'], 0);
        $instance->addListener('sylius.admin_user.post_create', [0 => function () {
            return ($this->privates['sylius.listener.admin_user.reloader'] ?? $this->load('getSylius_Listener_AdminUser_ReloaderService.php'));
        }, 1 => 'reloadUser'], 0);
        $instance->addListener('sylius.admin_user.post_update', [0 => function () {
            return ($this->privates['sylius.listener.admin_user.reloader'] ?? $this->load('getSylius_Listener_AdminUser_ReloaderService.php'));
        }, 1 => 'reloadUser'], 0);
        $instance->addListener('sylius.admin_user.pre_delete', [0 => function () {
            return ($this->privates['sylius.listener.admin_user_delete'] ?? $this->load('getSylius_Listener_AdminUserDeleteService.php'));
        }, 1 => 'deleteUser'], 0);
        $instance->addListener('sylius.shop_user.post_create', [0 => function () {
            return ($this->privates['sylius.listener.shop_user.reloader'] ?? $this->load('getSylius_Listener_ShopUser_ReloaderService.php'));
        }, 1 => 'reloadUser'], 0);
        $instance->addListener('sylius.shop_user.post_update', [0 => function () {
            return ($this->privates['sylius.listener.shop_user.reloader'] ?? $this->load('getSylius_Listener_ShopUser_ReloaderService.php'));
        }, 1 => 'reloadUser'], 0);
        $instance->addListener('sylius.shop_user.pre_delete', [0 => function () {
            return ($this->privates['sylius.listener.shop_user_delete'] ?? $this->load('getSylius_Listener_ShopUserDeleteService.php'));
        }, 1 => 'deleteUser'], 0);
        $instance->addListener('sylius.oauth_user.post_create', [0 => function () {
            return ($this->privates['sylius.listener.oauth_user.reloader'] ?? $this->load('getSylius_Listener_OauthUser_ReloaderService.php'));
        }, 1 => 'reloadUser'], 0);
        $instance->addListener('sylius.oauth_user.post_update', [0 => function () {
            return ($this->privates['sylius.listener.oauth_user.reloader'] ?? $this->load('getSylius_Listener_OauthUser_ReloaderService.php'));
        }, 1 => 'reloadUser'], 0);
        $instance->addListener('sylius.oauth_user.pre_delete', [0 => function () {
            return ($this->privates['sylius.listener.oauth_user_delete'] ?? $this->load('getSylius_Listener_OauthUserDeleteService.php'));
        }, 1 => 'deleteUser'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ($this->privates['sylius.admin_user.listener.update_user_encoder'] ?? $this->load('getSylius_AdminUser_Listener_UpdateUserEncoderService.php'));
        }, 1 => 'onSecurityInteractivelogin'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ($this->privates['sylius.shop_user.listener.update_user_encoder'] ?? $this->load('getSylius_ShopUser_Listener_UpdateUserEncoderService.php'));
        }, 1 => 'onSecurityInteractivelogin'], 0);
        $instance->addListener('sylius.user.security.implicit_login', [0 => function () {
            return ($this->services['sylius.listener.cart_blamer'] ?? $this->load('getSylius_Listener_CartBlamerService.php'));
        }, 1 => 'onImplicitLogin'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ($this->services['sylius.listener.cart_blamer'] ?? $this->load('getSylius_Listener_CartBlamerService.php'));
        }, 1 => 'onInteractiveLogin'], 0);
        $instance->addListener('sylius.channel.pre_delete', [0 => function () {
            return ($this->services['sylius.listener.channel'] ?? $this->load('getSylius_Listener_ChannelService.php'));
        }, 1 => 'onChannelPreDelete'], 0);
        $instance->addListener('sylius.product.pre_create', [0 => function () {
            return ($this->services['sylius.listener.images_upload'] ?? $this->load('getSylius_Listener_ImagesUploadService.php'));
        }, 1 => 'uploadImages'], 0);
        $instance->addListener('sylius.product.pre_update', [0 => function () {
            return ($this->services['sylius.listener.images_upload'] ?? $this->load('getSylius_Listener_ImagesUploadService.php'));
        }, 1 => 'uploadImages'], 0);
        $instance->addListener('sylius.taxon.pre_create', [0 => function () {
            return ($this->services['sylius.listener.images_upload'] ?? $this->load('getSylius_Listener_ImagesUploadService.php'));
        }, 1 => 'uploadImages'], 0);
        $instance->addListener('sylius.taxon.pre_update', [0 => function () {
            return ($this->services['sylius.listener.images_upload'] ?? $this->load('getSylius_Listener_ImagesUploadService.php'));
        }, 1 => 'uploadImages'], 0);
        $instance->addListener('sylius.admin_user.pre_create', [0 => function () {
            return ($this->services['sylius.listener.avatar_upload'] ?? $this->load('getSylius_Listener_AvatarUploadService.php'));
        }, 1 => 'uploadImage'], 0);
        $instance->addListener('sylius.admin_user.pre_update', [0 => function () {
            return ($this->services['sylius.listener.avatar_upload'] ?? $this->load('getSylius_Listener_AvatarUploadService.php'));
        }, 1 => 'uploadImage'], 0);
        $instance->addListener('sylius.cart_change', [0 => function () {
            return ($this->services['sylius.listener.order_recalculation'] ?? $this->load('getSylius_Listener_OrderRecalculationService.php'));
        }, 1 => 'recalculateOrder'], 0);
        $instance->addListener('sylius.user.security.implicit_login', [0 => function () {
            return ($this->services['sylius.listener.user_cart_recalculation'] ?? $this->load('getSylius_Listener_UserCartRecalculationService.php'));
        }, 1 => 'recalculateCartWhileLogin'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ($this->services['sylius.listener.user_cart_recalculation'] ?? $this->load('getSylius_Listener_UserCartRecalculationService.php'));
        }, 1 => 'recalculateCartWhileLogin'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->services['sylius.translator.listener'] ?? $this->getSylius_Translator_ListenerService());
        }, 1 => 'onKernelRequest'], 2);
        $instance->addListener('sylius.product_review.pre_create', [0 => function () {
            return ($this->services['sylius.listener.review_create'] ?? $this->load('getSylius_Listener_ReviewCreateService.php'));
        }, 1 => 'ensureReviewHasAuthor'], 0);
        $instance->addListener('sylius.product_variant.initialize_update', [0 => function () {
            return ($this->services['sylius.listener.locking'] ?? $this->load('getSylius_Listener_LockingService.php'));
        }, 1 => 'lock'], 0);
        $instance->addListener('sylius.product.initialize_update', [0 => function () {
            return ($this->services['sylius.listener.simple_product_locking'] ?? $this->load('getSylius_Listener_SimpleProductLockingService.php'));
        }, 1 => 'lock'], 0);
        $instance->addListener('sylius.address.pre_create', [0 => function () {
            return ($this->services['sylius.listener.customer_default_address'] ?? ($this->services['sylius.listener.customer_default_address'] = new \Sylius\Bundle\CoreBundle\EventListener\CustomerDefaultAddressListener()));
        }, 1 => 'preCreate'], 0);
        $instance->addListener('sylius.taxon.pre_delete', [0 => function () {
            return ($this->services['sylius.listener.taxon_deletion'] ?? $this->load('getSylius_Listener_TaxonDeletionService.php'));
        }, 1 => 'protectFromRemovingMenuTaxon'], 0);
        $instance->addListener('sylius.taxon.post_delete', [0 => function () {
            return ($this->services['sylius.listener.taxon_deletion'] ?? $this->load('getSylius_Listener_TaxonDeletionService.php'));
        }, 1 => 'removeTaxonFromPromotionRules'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sonata.block.cache.handler.default'] ?? ($this->privates['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['fos_rest.body_listener'] ?? $this->getFosRest_BodyListenerService());
        }, 1 => 'onKernelRequest'], 10);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['fos_rest.format_listener'] ?? $this->getFosRest_FormatListenerService());
        }, 1 => 'onKernelRequest'], 34);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->services['payum.listener.reply_to_http_response'] ?? $this->load('getPayum_Listener_ReplyToHttpResponseService.php'));
        }, 1 => 'onKernelException'], 128);
        $instance->addListener('sylius.shipment.post_ship', [0 => function () {
            return ($this->services['sylius.listener.shipment_ship'] ?? $this->load('getSylius_Listener_ShipmentShipService.php'));
        }, 1 => 'sendConfirmationEmail'], 0);
        $instance->addListener('sylius.order.pre_complete', [0 => function () {
            return ($this->services['sylius.listener.order_customer_ip'] ?? $this->load('getSylius_Listener_OrderCustomerIpService.php'));
        }, 1 => 'assignCustomerIpToOrder'], 0);
        $instance->addListener('sylius.order.post_complete', [0 => function () {
            return ($this->services['sylius.listener.order_complete'] ?? $this->load('getSylius_Listener_OrderCompleteService.php'));
        }, 1 => 'sendConfirmationEmail'], 0);
        $instance->addListener('sylius.customer.post_register', [0 => function () {
            return ($this->services['sylius.listener.user_registration'] ?? $this->load('getSylius_Listener_UserRegistrationService.php'));
        }, 1 => 'handleUserVerification'], 0);
        $instance->addListener('sylius.order.pre_complete', [0 => function () {
            return ($this->services['sylius.listener.order_integrity_checker'] ?? $this->load('getSylius_Listener_OrderIntegrityCheckerService.php'));
        }, 1 => 'check'], 0);
        $instance->addListener('sylius.order.pre_complete', [0 => function () {
            return ($this->services['sylius.order_locale_assigner'] ?? $this->load('getSylius_OrderLocaleAssignerService.php'));
        }, 1 => 'assignLocale'], 0);
        $instance->addListener('sylius.user.security.impersonate', [0 => function () {
            return ($this->services['sylius.listener.user_impersonated'] ?? $this->load('getSylius_Listener_UserImpersonatedService.php'));
        }, 1 => 'onUserImpersonated'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->services['sylius.listener.non_channel_request_locale'] ?? $this->getSylius_Listener_NonChannelRequestLocaleService());
        }, 1 => 'restrictRequestLocale'], 10);
        $instance->addListener('sylius.order.post_address', [0 => function () {
            return ($this->privates['sylius.listener.checkout_redirect'] ?? $this->load('getSylius_Listener_CheckoutRedirectService.php'));
        }, 1 => 'handleCheckoutRedirect'], 0);
        $instance->addListener('sylius.order.post_select_shipping', [0 => function () {
            return ($this->privates['sylius.listener.checkout_redirect'] ?? $this->load('getSylius_Listener_CheckoutRedirectService.php'));
        }, 1 => 'handleCheckoutRedirect'], 0);
        $instance->addListener('sylius.order.post_payment', [0 => function () {
            return ($this->privates['sylius.listener.checkout_redirect'] ?? $this->load('getSylius_Listener_CheckoutRedirectService.php'));
        }, 1 => 'handleCheckoutRedirect'], 0);
        $instance->addListener('sylius.order_item.pre_create', [0 => function () {
            return ($this->services['sylius.listener.api.add_to_cart'] ?? $this->load('getSylius_Listener_Api_AddToCartService.php'));
        }, 1 => 'recalculateOrderOnAdd'], 0);
        $instance->addListener('sylius.order_item.pre_update', [0 => function () {
            return ($this->services['sylius.listener.api.add_to_cart'] ?? $this->load('getSylius_Listener_Api_AddToCartService.php'));
        }, 1 => 'recalculateOrderOnAdd'], 0);
        $instance->addListener('sylius.order_item.pre_delete', [0 => function () {
            return ($this->services['sylius.listener.api.add_to_cart'] ?? $this->load('getSylius_Listener_Api_AddToCartService.php'));
        }, 1 => 'recalculateOrderOnDelete'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['.legacy_resolve_controller_name_subscriber'] ?? $this->get_LegacyResolveControllerNameSubscriberService());
        }, 1 => 'resolveControllerName'], 24);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ($this->privates['sylius.listener.admin_user_last_login'] ?? $this->load('getSylius_Listener_AdminUserLastLoginService.php'));
        }, 1 => 'onSecurityInteractiveLogin'], 0);
        $instance->addListener('sylius.user.security.implicit_login', [0 => function () {
            return ($this->privates['sylius.listener.admin_user_last_login'] ?? $this->load('getSylius_Listener_AdminUserLastLoginService.php'));
        }, 1 => 'onImplicitLogin'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ($this->privates['sylius.listener.shop_user_last_login'] ?? $this->load('getSylius_Listener_ShopUserLastLoginService.php'));
        }, 1 => 'onSecurityInteractiveLogin'], 0);
        $instance->addListener('sylius.user.security.implicit_login', [0 => function () {
            return ($this->privates['sylius.listener.shop_user_last_login'] ?? $this->load('getSylius_Listener_ShopUserLastLoginService.php'));
        }, 1 => 'onImplicitLogin'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ($this->privates['sylius.listener.oauth_user_last_login'] ?? $this->load('getSylius_Listener_OauthUserLastLoginService.php'));
        }, 1 => 'onSecurityInteractiveLogin'], 0);
        $instance->addListener('sylius.user.security.implicit_login', [0 => function () {
            return ($this->privates['sylius.listener.oauth_user_last_login'] ?? $this->load('getSylius_Listener_OauthUserLastLoginService.php'));
        }, 1 => 'onImplicitLogin'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->services['sylius.storage.cookie'] ?? ($this->services['sylius.storage.cookie'] = new \Sylius\Bundle\ResourceBundle\Storage\CookieStorage()));
        }, 1 => 'onKernelRequest'], 1024);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->services['sylius.storage.cookie'] ?? ($this->services['sylius.storage.cookie'] = new \Sylius\Bundle\ResourceBundle\Storage\CookieStorage()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['fos_rest.exception_listener'] ?? $this->load('getFosRest_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'], -100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['stof_doctrine_extensions.event_listener.logger'] ?? $this->getStofDoctrineExtensions_EventListener_LoggerService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] ?? ($this->privates['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener()));
        }, 1 => 'onException'], 512);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] ?? ($this->privates['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener()));
        }, 1 => 'onException'], 512);
        $instance->addListener('console.command', [0 => function () {
            return ($this->services['sylius_fixtures.logger.handler.console'] ?? $this->load('getSyliusFixtures_Logger_Handler_ConsoleService.php'));
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->services['sylius_fixtures.logger.handler.console'] ?? $this->load('getSyliusFixtures_Logger_Handler_ConsoleService.php'));
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->services['sylius.event_subscriber.resource_delete'] ?? $this->load('getSylius_EventSubscriber_ResourceDeleteService.php'));
        }, 1 => 'onResourceDelete'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->services['sylius.listener.session_cart'] ?? $this->getSylius_Listener_SessionCartService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['sylius.resolver.checkout'] ?? $this->getSylius_Resolver_CheckoutService());
        }, 1 => 'onKernelRequest'], 0);

        return $instance;
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false)))), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? ($this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()));
            yield 1 => ($this->privates['argument_resolver.request'] ?? ($this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()));
            yield 2 => ($this->privates['argument_resolver.session'] ?? ($this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()));
            yield 3 => ($this->privates['security.user_value_resolver'] ?? $this->load('getSecurity_UserValueResolverService.php'));
            yield 4 => ($this->privates['argument_resolver.service'] ?? $this->load('getArgumentResolver_ServiceService.php'));
            yield 5 => ($this->privates['argument_resolver.default'] ?? ($this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()));
            yield 6 => ($this->privates['argument_resolver.variadic'] ?? ($this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()));
        }, 7)));
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService.php', true],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => NULL, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this), $a, 'en_US');

        $instance->setConfigCacheFactory(new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory());

        return $instance;
    }

    /*
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), true);
    }

    /*
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]));
    }

    /*
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0)));
    }

    /*
     * Gets the public 'sm.callback_factory' shared service.
     *
     * @return \winzou\Bundle\StateMachineBundle\Callback\ContainerAwareCallbackFactory
     */
    protected function getSm_CallbackFactoryService()
    {
        return $this->services['sm.callback_factory'] = new \winzou\Bundle\StateMachineBundle\Callback\ContainerAwareCallbackFactory('winzou\\Bundle\\StateMachineBundle\\Callback\\ContainerAwareCallback', $this);
    }

    /*
     * Gets the public 'sm.factory' shared service.
     *
     * @return \SM\Factory\Factory
     */
    protected function getSm_FactoryService()
    {
        return $this->services['sm.factory'] = new \SM\Factory\Factory($this->parameters['sm.configs'], ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['sm.callback_factory'] ?? ($this->services['sm.callback_factory'] = new \winzou\Bundle\StateMachineBundle\Callback\ContainerAwareCallbackFactory('winzou\\Bundle\\StateMachineBundle\\Callback\\ContainerAwareCallback', $this))));
    }

    /*
     * Gets the public 'sylius.context.cart' shared service.
     *
     * @return \Sylius\Component\Order\Context\CompositeCartContext
     */
    protected function getSylius_Context_CartService()
    {
        $this->services['sylius.context.cart'] = $instance = new \Sylius\Component\Order\Context\CompositeCartContext();

        $instance->addContext(($this->services['sylius.context.cart.new'] ?? $this->getSylius_Context_Cart_NewService()), -999);
        $instance->addContext(($this->services['sylius.context.cart.customer_and_channel_based'] ?? $this->getSylius_Context_Cart_CustomerAndChannelBasedService()), -555);
        $instance->addContext(($this->services['sylius.context.cart.session_and_channel_based'] ?? $this->getSylius_Context_Cart_SessionAndChannelBasedService()), -777);

        return $instance;
    }

    /*
     * Gets the public 'sylius.context.cart.customer_and_channel_based' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Context\CustomerAndChannelBasedCartContext
     */
    protected function getSylius_Context_Cart_CustomerAndChannelBasedService()
    {
        return $this->services['sylius.context.cart.customer_and_channel_based'] = new \Sylius\Bundle\CoreBundle\Context\CustomerAndChannelBasedCartContext(($this->services['sylius.context.customer'] ?? $this->getSylius_Context_CustomerService()), ($this->services['sylius.context.channel'] ?? $this->getSylius_Context_ChannelService()), ($this->services['sylius.repository.order'] ?? $this->getSylius_Repository_OrderService()));
    }

    /*
     * Gets the public 'sylius.context.cart.new' shared service.
     *
     * @return \Sylius\Component\Core\Cart\Context\ShopBasedCartContext
     */
    protected function getSylius_Context_Cart_NewService()
    {
        return $this->services['sylius.context.cart.new'] = new \Sylius\Component\Core\Cart\Context\ShopBasedCartContext(new \Sylius\Component\Order\Context\CartContext(($this->services['sylius.factory.order'] ?? ($this->services['sylius.factory.order'] = new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Order\\Order')))), ($this->services['sylius.context.shopper'] ?? $this->getSylius_Context_ShopperService()));
    }

    /*
     * Gets the public 'sylius.context.cart.session_and_channel_based' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Context\SessionAndChannelBasedCartContext
     */
    protected function getSylius_Context_Cart_SessionAndChannelBasedService()
    {
        return $this->services['sylius.context.cart.session_and_channel_based'] = new \Sylius\Bundle\CoreBundle\Context\SessionAndChannelBasedCartContext(($this->services['sylius.storage.cart_session'] ?? $this->getSylius_Storage_CartSessionService()), ($this->services['sylius.context.channel'] ?? $this->getSylius_Context_ChannelService()));
    }

    /*
     * Gets the public 'sylius.context.channel' shared service.
     *
     * @return \Sylius\Component\Channel\Context\CachedPerRequestChannelContext
     */
    protected function getSylius_Context_ChannelService()
    {
        return $this->services['sylius.context.channel'] = new \Sylius\Component\Channel\Context\CachedPerRequestChannelContext(($this->services['Sylius\\Component\\Channel\\Context\\ChannelContextInterface'] ?? $this->getChannelContextInterfaceService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the public 'sylius.context.currency.channel_aware' shared service.
     *
     * @return \Sylius\Component\Core\Currency\Context\ChannelAwareCurrencyContext
     */
    protected function getSylius_Context_Currency_ChannelAwareService()
    {
        $a = new \Sylius\Component\Currency\Context\CompositeCurrencyContext();
        $a->addContext(($this->services['sylius.context.currency.storage_based'] ?? $this->getSylius_Context_Currency_StorageBasedService()), 0);

        return $this->services['sylius.context.currency.channel_aware'] = new \Sylius\Component\Core\Currency\Context\ChannelAwareCurrencyContext($a, ($this->services['sylius.context.channel'] ?? $this->getSylius_Context_ChannelService()));
    }

    /*
     * Gets the public 'sylius.context.currency.storage_based' shared service.
     *
     * @return \Sylius\Component\Core\Currency\Context\StorageBasedCurrencyContext
     */
    protected function getSylius_Context_Currency_StorageBasedService()
    {
        return $this->services['sylius.context.currency.storage_based'] = new \Sylius\Component\Core\Currency\Context\StorageBasedCurrencyContext(($this->services['sylius.context.channel'] ?? $this->getSylius_Context_ChannelService()), ($this->services['sylius.storage.currency'] ?? $this->getSylius_Storage_CurrencyService()));
    }

    /*
     * Gets the public 'sylius.context.customer' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Context\CustomerContext
     */
    protected function getSylius_Context_CustomerService()
    {
        return $this->services['sylius.context.customer'] = new \Sylius\Bundle\CoreBundle\Context\CustomerContext(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /*
     * Gets the public 'sylius.context.locale.admin_based' shared service.
     *
     * @return \Sylius\Bundle\AdminBundle\Context\AdminBasedLocaleContext
     */
    protected function getSylius_Context_Locale_AdminBasedService()
    {
        return $this->services['sylius.context.locale.admin_based'] = new \Sylius\Bundle\AdminBundle\Context\AdminBasedLocaleContext(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
    }

    /*
     * Gets the public 'sylius.context.locale.provider_based' shared service.
     *
     * @return \Sylius\Component\Locale\Context\ProviderBasedLocaleContext
     */
    protected function getSylius_Context_Locale_ProviderBasedService()
    {
        return $this->services['sylius.context.locale.provider_based'] = new \Sylius\Component\Locale\Context\ProviderBasedLocaleContext(($this->services['sylius.locale_provider.channel_based'] ?? $this->getSylius_LocaleProvider_ChannelBasedService()));
    }

    /*
     * Gets the public 'sylius.context.locale.request_based' shared service.
     *
     * @return \Sylius\Bundle\LocaleBundle\Context\RequestBasedLocaleContext
     */
    protected function getSylius_Context_Locale_RequestBasedService()
    {
        return $this->services['sylius.context.locale.request_based'] = new \Sylius\Bundle\LocaleBundle\Context\RequestBasedLocaleContext(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['sylius.locale_provider.channel_based'] ?? $this->getSylius_LocaleProvider_ChannelBasedService()));
    }

    /*
     * Gets the public 'sylius.context.shopper' shared service.
     *
     * @return \Sylius\Component\Core\Context\ShopperContext
     */
    protected function getSylius_Context_ShopperService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['sylius.context.shopper'] = $this->createProxy('ShopperContext_d398ef6', function () {
                return \ShopperContext_d398ef6::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSylius_Context_ShopperService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Context/ShopperContextInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Context/ShopperContext.php';

        return new \Sylius\Component\Core\Context\ShopperContext(($this->services['sylius.context.channel'] ?? $this->getSylius_Context_ChannelService()), ($this->services['sylius.context.currency.channel_aware'] ?? $this->getSylius_Context_Currency_ChannelAwareService()), ($this->services['Sylius\\Component\\Locale\\Context\\LocaleContextInterface'] ?? $this->getLocaleContextInterfaceService()), ($this->services['sylius.context.customer'] ?? $this->getSylius_Context_CustomerService()));
    }

    /*
     * Gets the public 'sylius.doctrine.orm.event_subscriber.load_metadata.attribute' shared service.
     *
     * @return \Sylius\Bundle\AttributeBundle\Doctrine\ORM\Subscriber\LoadMetadataSubscriber
     */
    protected function getSylius_Doctrine_Orm_EventSubscriber_LoadMetadata_AttributeService()
    {
        return $this->services['sylius.doctrine.orm.event_subscriber.load_metadata.attribute'] = new \Sylius\Bundle\AttributeBundle\Doctrine\ORM\Subscriber\LoadMetadataSubscriber($this->parameters['sylius.attribute.subjects']);
    }

    /*
     * Gets the public 'sylius.doctrine.orm.event_subscriber.load_metadata.review' shared service.
     *
     * @return \Sylius\Bundle\ReviewBundle\Doctrine\ORM\Subscriber\LoadMetadataSubscriber
     */
    protected function getSylius_Doctrine_Orm_EventSubscriber_LoadMetadata_ReviewService()
    {
        return $this->services['sylius.doctrine.orm.event_subscriber.load_metadata.review'] = new \Sylius\Bundle\ReviewBundle\Doctrine\ORM\Subscriber\LoadMetadataSubscriber($this->parameters['sylius.review.subjects']);
    }

    /*
     * Gets the public 'sylius.event_subscriber.orm_mapped_super_class' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\EventListener\ORMMappedSuperClassSubscriber
     */
    protected function getSylius_EventSubscriber_OrmMappedSuperClassService()
    {
        return $this->services['sylius.event_subscriber.orm_mapped_super_class'] = new \Sylius\Bundle\ResourceBundle\EventListener\ORMMappedSuperClassSubscriber(($this->privates['sylius.resource_registry'] ?? $this->getSylius_ResourceRegistryService()));
    }

    /*
     * Gets the public 'sylius.event_subscriber.orm_repository_class' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\EventListener\ORMRepositoryClassSubscriber
     */
    protected function getSylius_EventSubscriber_OrmRepositoryClassService()
    {
        return $this->services['sylius.event_subscriber.orm_repository_class'] = new \Sylius\Bundle\ResourceBundle\EventListener\ORMRepositoryClassSubscriber(($this->privates['sylius.resource_registry'] ?? $this->getSylius_ResourceRegistryService()));
    }

    /*
     * Gets the public 'sylius.factory.order' shared service.
     *
     * @return \Sylius\Component\Resource\Factory\Factory
     */
    protected function getSylius_Factory_OrderService()
    {
        return $this->services['sylius.factory.order'] = new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Order\\Order');
    }

    /*
     * Gets the public 'sylius.listener.non_channel_request_locale' shared service.
     *
     * @return \Sylius\Bundle\ShopBundle\EventListener\NonChannelLocaleListener
     */
    protected function getSylius_Listener_NonChannelRequestLocaleService()
    {
        return $this->services['sylius.listener.non_channel_request_locale'] = new \Sylius\Bundle\ShopBundle\EventListener\NonChannelLocaleListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['sylius.locale_provider.channel_based'] ?? $this->getSylius_LocaleProvider_ChannelBasedService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), [0 => 'shop']);
    }

    /*
     * Gets the public 'sylius.listener.request_locale_setter' shared service.
     *
     * @return \Sylius\Bundle\LocaleBundle\Listener\RequestLocaleSetter
     */
    protected function getSylius_Listener_RequestLocaleSetterService()
    {
        return $this->services['sylius.listener.request_locale_setter'] = new \Sylius\Bundle\LocaleBundle\Listener\RequestLocaleSetter(($this->services['Sylius\\Component\\Locale\\Context\\LocaleContextInterface'] ?? $this->getLocaleContextInterfaceService()), ($this->services['sylius.locale_provider.channel_based'] ?? $this->getSylius_LocaleProvider_ChannelBasedService()));
    }

    /*
     * Gets the public 'sylius.listener.session_cart' shared service.
     *
     * @return \Sylius\Bundle\ShopBundle\EventListener\SessionCartSubscriber
     */
    protected function getSylius_Listener_SessionCartService()
    {
        return $this->services['sylius.listener.session_cart'] = new \Sylius\Bundle\ShopBundle\EventListener\SessionCartSubscriber(($this->services['sylius.context.cart'] ?? $this->getSylius_Context_CartService()), ($this->services['sylius.storage.cart_session'] ?? $this->getSylius_Storage_CartSessionService()));
    }

    /*
     * Gets the public 'sylius.locale_provider.channel_based' shared service.
     *
     * @return \Sylius\Component\Core\Provider\ChannelBasedLocaleProvider
     */
    protected function getSylius_LocaleProvider_ChannelBasedService()
    {
        return $this->services['sylius.locale_provider.channel_based'] = new \Sylius\Component\Core\Provider\ChannelBasedLocaleProvider(($this->services['sylius.context.channel'] ?? $this->getSylius_Context_ChannelService()), 'en_US');
    }

    /*
     * Gets the public 'sylius.repository.channel' shared service.
     *
     * @return \Sylius\Bundle\ChannelBundle\Doctrine\ORM\ChannelRepository
     */
    protected function getSylius_Repository_ChannelService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['sylius.repository.channel'] = $this->createProxy('ChannelRepository_04960bc', function () {
                return \ChannelRepository_04960bc::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSylius_Repository_ChannelService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Channel/Repository/ChannelRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Doctrine/ORM/ChannelRepository.php';

        $a = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());

        return new \Sylius\Bundle\ChannelBundle\Doctrine\ORM\ChannelRepository($a, $a->getClassMetadata('App\\Entity\\Channel\\Channel'));
    }

    /*
     * Gets the public 'sylius.repository.locale' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository
     */
    protected function getSylius_Repository_LocaleService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['sylius.repository.locale'] = $this->createProxy('EntityRepository_afc836c', function () {
                return \EntityRepository_afc836c::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSylius_Repository_LocaleService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        $a = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());

        return new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($a, $a->getClassMetadata('App\\Entity\\Locale\\Locale'));
    }

    /*
     * Gets the public 'sylius.repository.order' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Doctrine\ORM\OrderRepository
     */
    protected function getSylius_Repository_OrderService()
    {
        $a = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());

        return $this->services['sylius.repository.order'] = new \Sylius\Bundle\CoreBundle\Doctrine\ORM\OrderRepository($a, $a->getClassMetadata('App\\Entity\\Order\\Order'));
    }

    /*
     * Gets the public 'sylius.repository.theme' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Repository\InMemoryThemeRepository
     */
    protected function getSylius_Repository_ThemeService()
    {
        return $this->services['sylius.repository.theme'] = new \Sylius\Bundle\ThemeBundle\Repository\InMemoryThemeRepository(($this->services['Sylius\\Bundle\\ThemeBundle\\Loader\\ThemeLoaderInterface'] ?? $this->getThemeLoaderInterfaceService()));
    }

    /*
     * Gets the public 'sylius.storage.cart_session' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Storage\CartSessionStorage
     */
    protected function getSylius_Storage_CartSessionService()
    {
        return $this->services['sylius.storage.cart_session'] = new \Sylius\Bundle\CoreBundle\Storage\CartSessionStorage(($this->services['session'] ?? $this->getSessionService()), '_sylius.cart', ($this->services['sylius.repository.order'] ?? $this->getSylius_Repository_OrderService()));
    }

    /*
     * Gets the public 'sylius.storage.cookie' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Storage\CookieStorage
     */
    protected function getSylius_Storage_CookieService()
    {
        return $this->services['sylius.storage.cookie'] = new \Sylius\Bundle\ResourceBundle\Storage\CookieStorage();
    }

    /*
     * Gets the public 'sylius.storage.currency' shared service.
     *
     * @return \Sylius\Component\Core\Currency\CurrencyStorage
     */
    protected function getSylius_Storage_CurrencyService()
    {
        return $this->services['sylius.storage.currency'] = new \Sylius\Component\Core\Currency\CurrencyStorage(($this->services['sylius.storage.cookie'] ?? ($this->services['sylius.storage.cookie'] = new \Sylius\Bundle\ResourceBundle\Storage\CookieStorage())));
    }

    /*
     * Gets the public 'sylius.theme.configuration.provider' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Configuration\CompositeConfigurationProvider
     */
    protected function getSylius_Theme_Configuration_ProviderService()
    {
        return $this->services['sylius.theme.configuration.provider'] = new \Sylius\Bundle\ThemeBundle\Configuration\CompositeConfigurationProvider([0 => new \Sylius\Bundle\ThemeBundle\Configuration\Filesystem\FilesystemConfigurationProvider(new \Sylius\Bundle\ThemeBundle\Locator\RecursiveFileLocator(($this->services['Sylius\\Bundle\\ThemeBundle\\Factory\\FinderFactoryInterface'] ?? ($this->services['Sylius\\Bundle\\ThemeBundle\\Factory\\FinderFactoryInterface'] = new \Sylius\Bundle\ThemeBundle\Factory\FinderFactory())), [0 => (\dirname(__DIR__, 4).'/themes')], 1), new \Sylius\Bundle\ThemeBundle\Configuration\Filesystem\ProcessingConfigurationLoader(new \Sylius\Bundle\ThemeBundle\Configuration\Filesystem\JsonFileConfigurationLoader(($this->services['Sylius\\Bundle\\ThemeBundle\\Filesystem\\FilesystemInterface'] ?? ($this->services['Sylius\\Bundle\\ThemeBundle\\Filesystem\\FilesystemInterface'] = new \Sylius\Bundle\ThemeBundle\Filesystem\Filesystem()))), ($this->services['Sylius\\Bundle\\ThemeBundle\\Configuration\\ConfigurationProcessorInterface'] ?? $this->getConfigurationProcessorInterfaceService())), 'composer.json')]);
    }

    /*
     * Gets the public 'sylius.translatable_entity_locale_assigner' shared service.
     *
     * @return \Sylius\Component\Core\Translation\TranslatableEntityLocaleAssigner
     */
    protected function getSylius_TranslatableEntityLocaleAssignerService()
    {
        return $this->services['sylius.translatable_entity_locale_assigner'] = new \Sylius\Component\Core\Translation\TranslatableEntityLocaleAssigner(($this->services['Sylius\\Component\\Locale\\Context\\LocaleContextInterface'] ?? $this->getLocaleContextInterfaceService()), ($this->services['sylius.translation_locale_provider.admin'] ?? $this->getSylius_TranslationLocaleProvider_AdminService()));
    }

    /*
     * Gets the public 'sylius.translation.translatable_listener.doctrine.orm' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\EventListener\ORMTranslatableListener
     */
    protected function getSylius_Translation_TranslatableListener_Doctrine_OrmService()
    {
        return $this->services['sylius.translation.translatable_listener.doctrine.orm'] = new \Sylius\Bundle\ResourceBundle\EventListener\ORMTranslatableListener(($this->privates['sylius.resource_registry'] ?? $this->getSylius_ResourceRegistryService()), ($this->services['sylius.translatable_entity_locale_assigner'] ?? $this->getSylius_TranslatableEntityLocaleAssignerService()));
    }

    /*
     * Gets the public 'sylius.translation_locale_provider.admin' shared service.
     *
     * @return \Sylius\Component\Core\Provider\TranslationLocaleProvider
     */
    protected function getSylius_TranslationLocaleProvider_AdminService()
    {
        return $this->services['sylius.translation_locale_provider.admin'] = new \Sylius\Component\Core\Provider\TranslationLocaleProvider(($this->services['sylius.repository.locale'] ?? $this->getSylius_Repository_LocaleService()), 'en_US');
    }

    /*
     * Gets the public 'sylius.translator.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getSylius_Translator_ListenerService()
    {
        return $this->services['sylius.translator.listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the public 'sylius_resource.doctrine.mapping_driver_chain' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Doctrine\ResourceMappingDriverChain
     */
    protected function getSyliusResource_Doctrine_MappingDriverChainService()
    {
        $a = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $b = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver([(\dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Bridge/Doctrine/Resources/mapping') => 'Payum\\Core\\Model', (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle/Resources/config/doctrine') => 'FOS\\OAuthServerBundle\\Entity']);
        $b->setGlobalBasename('mapping');
        $c = new \Doctrine\ORM\Mapping\Driver\SimplifiedYamlDriver([(\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src/Resources/config/doctrine') => 'BitBag\\SyliusCmsPlugin\\Entity']);
        $c->setGlobalBasename('mapping');

        $a->addDriver($b, 'Payum\\Core\\Model');
        $a->addDriver($b, 'FOS\\OAuthServerBundle\\Entity');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).'/src/Entity')]), 'App\\Entity');
        $a->addDriver($c, 'BitBag\\SyliusCmsPlugin\\Entity');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Order\\Model'], '.orm.xml')), 'Sylius\\Component\\Order\\Model');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Currency\\Model'], '.orm.xml')), 'Sylius\\Component\\Currency\\Model');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Locale\\Model'], '.orm.xml')), 'Sylius\\Component\\Locale\\Model');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Product\\Model'], '.orm.xml')), 'Sylius\\Component\\Product\\Model');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Channel\\Model'], '.orm.xml')), 'Sylius\\Component\\Channel\\Model');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Attribute\\Model'], '.orm.xml')), 'Sylius\\Component\\Attribute\\Model');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Taxation\\Model'], '.orm.xml')), 'Sylius\\Component\\Taxation\\Model');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Shipping\\Model'], '.orm.xml')), 'Sylius\\Component\\Shipping\\Model');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Payment\\Model'], '.orm.xml')), 'Sylius\\Component\\Payment\\Model');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Promotion\\Model'], '.orm.xml')), 'Sylius\\Component\\Promotion\\Model');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Addressing\\Model'], '.orm.xml')), 'Sylius\\Component\\Addressing\\Model');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/InventoryBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Inventory\\Model'], '.orm.xml')), 'Sylius\\Component\\Inventory\\Model');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Taxonomy\\Model'], '.orm.xml')), 'Sylius\\Component\\Taxonomy\\Model');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\User\\Model'], '.orm.xml')), 'Sylius\\Component\\User\\Model');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Customer\\Model'], '.orm.xml')), 'Sylius\\Component\\Customer\\Model');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Review\\Model'], '.orm.xml')), 'Sylius\\Component\\Review\\Model');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/config/doctrine/model') => 'Sylius\\Component\\Core\\Model'], '.orm.xml')), 'Sylius\\Component\\Core\\Model');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/config/doctrine/model') => 'Sylius\\Bundle\\PayumBundle\\Model'], '.orm.xml')), 'Sylius\\Bundle\\PayumBundle\\Model');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminApiBundle/Resources/config/doctrine/model') => 'Sylius\\Bundle\\AdminApiBundle\\Model'], '.orm.xml')), 'Sylius\\Bundle\\AdminApiBundle\\Model');

        return $this->services['sylius_resource.doctrine.mapping_driver_chain'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ResourceMappingDriverChain($a, ($this->privates['sylius.resource_registry'] ?? $this->getSylius_ResourceRegistryService()));
    }

    /*
     * Gets the public 'translator' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Translation\ThemeAwareTranslator
     */
    protected function getTranslatorService()
    {
        $a = new \Sylius\Bundle\ThemeBundle\Translation\Translator(($this->services['Sylius\\Bundle\\ThemeBundle\\Translation\\Provider\\Loader\\TranslatorLoaderProviderInterface'] ?? $this->getTranslatorLoaderProviderInterfaceService()), ($this->services['Sylius\\Bundle\\ThemeBundle\\Translation\\Provider\\Resource\\TranslatorResourceProviderInterface'] ?? $this->getTranslatorResourceProviderInterfaceService()), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'en_US', ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => false]);
        $a->setFallbackLocales([0 => 'en_US', 1 => 'en_US', 2 => 'en']);

        return $this->services['translator'] = new \Sylius\Bundle\ThemeBundle\Translation\ThemeAwareTranslator($a, ($this->privates['sylius.theme.context.channel_based'] ?? $this->getSylius_Theme_Context_ChannelBasedService()));
    }

    /*
     * Gets the private '.legacy_resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function get_LegacyResolveControllerNameSubscriberService()
    {
        return $this->privates['.legacy_resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), false);
    }

    /*
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->load('getAnnotations_CacheService.php'), false);
    }

    /*
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);
        $instance->addGlobalIgnoredName('template');
        $instance->addGlobalIgnoredName('psalm');

        return $instance;
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, NULL, NULL, 0, false, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), false);
    }

    /*
     * Gets the private 'doctrine.result_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getDoctrine_ResultCachePoolService()
    {
        $this->privates['doctrine.result_cache_pool'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('v-TysSUP5O', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $instance;
    }

    /*
     * Gets the private 'doctrine.system_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getDoctrine_SystemCachePoolService()
    {
        return $this->privates['doctrine.system_cache_pool'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('0vkwe4JOqb', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'fos_rest.body_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\BodyListener
     */
    protected function getFosRest_BodyListenerService()
    {
        $this->privates['fos_rest.body_listener'] = $instance = new \FOS\RestBundle\EventListener\BodyListener(new \FOS\RestBundle\Decoder\ContainerDecoderProvider(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'fos_rest.decoder.json' => ['privates', 'fos_rest.decoder.json', 'getFosRest_Decoder_JsonService.php', true],
        ], [
            'fos_rest.decoder.json' => '?',
        ]), ['json' => 'fos_rest.decoder.json']), false);

        $instance->setDefaultFormat(NULL);

        return $instance;
    }

    /*
     * Gets the private 'fos_rest.format_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\FormatListener
     */
    protected function getFosRest_FormatListenerService()
    {
        $a = new \FOS\RestBundle\Negotiation\FormatNegotiator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
        $a->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/.*', NULL, NULL, NULL, []), ['priorities' => [0 => 'json', 1 => 'xml'], 'fallback_format' => 'json', 'prefer_extension' => '2.0', 'methods' => NULL, 'attributes' => [], 'stop' => false]);
        $a->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/', NULL, NULL, NULL, []), ['stop' => true, 'methods' => NULL, 'attributes' => [], 'prefer_extension' => '2.0', 'fallback_format' => 'html', 'priorities' => []]);

        return $this->privates['fos_rest.format_listener'] = new \FOS\RestBundle\EventListener\FormatListener($a);
    }

    /*
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->services['translator'] ?? $this->getTranslatorService());
        }, 1), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en_US', ($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $a = new \Monolog\Handler\StreamHandler((\dirname(__DIR__, 3).'/log/prod.log'), 100, true, NULL, false);
        $a->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $this->privates['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($a, 400, 0, true, true, NULL);
    }

    /*
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), \dirname(__DIR__, 4), false);
    }

    /*
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->privates['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.access.authenticated_voter'] ?? $this->load('getSecurity_Access_AuthenticatedVoterService.php'));
            yield 1 => ($this->privates['security.access.simple_role_voter'] ?? ($this->privates['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter()));
            yield 2 => ($this->privates['security.access.expression_voter'] ?? $this->load('getSecurity_Access_ExpressionVoterService.php'));
        }, 3), 'affirmative', false, true);
    }

    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.dao.admin'] ?? $this->load('getSecurity_Authentication_Provider_Dao_AdminService.php'));
            yield 1 => ($this->privates['security.authentication.provider.rememberme.admin'] ?? $this->load('getSecurity_Authentication_Provider_Rememberme_AdminService.php'));
            yield 2 => ($this->privates['security.authentication.provider.anonymous.admin'] ?? ($this->privates['security.authentication.provider.anonymous.admin'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 3 => ($this->privates['security.authentication.provider.fos_oauth_server.api'] ?? $this->load('getSecurity_Authentication_Provider_FosOauthServer_ApiService.php'));
            yield 4 => ($this->privates['security.authentication.provider.anonymous.api'] ?? ($this->privates['security.authentication.provider.anonymous.api'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 5 => ($this->privates['security.authentication.provider.dao.shop'] ?? $this->load('getSecurity_Authentication_Provider_Dao_ShopService.php'));
            yield 6 => ($this->privates['security.authentication.provider.rememberme.shop'] ?? $this->load('getSecurity_Authentication_Provider_Rememberme_ShopService.php'));
            yield 7 => ($this->privates['security.authentication.provider.anonymous.shop'] ?? ($this->privates['security.authentication.provider.anonymous.shop'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 8), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /*
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->privates['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /*
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.admin' => ['privates', 'security.firewall.map.context.admin', 'getSecurity_Firewall_Map_Context_AdminService.php', true],
            'security.firewall.map.context.api' => ['privates', 'security.firewall.map.context.api', 'getSecurity_Firewall_Map_Context_ApiService.php', true],
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService.php', true],
            'security.firewall.map.context.oauth_token' => ['privates', 'security.firewall.map.context.oauth_token', 'getSecurity_Firewall_Map_Context_OauthTokenService.php', true],
            'security.firewall.map.context.shop' => ['privates', 'security.firewall.map.context.shop', 'getSecurity_Firewall_Map_Context_ShopService.php', true],
        ], [
            'security.firewall.map.context.admin' => '?',
            'security.firewall.map.context.api' => '?',
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.oauth_token' => '?',
            'security.firewall.map.context.shop' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.admin' => ($this->privates['.security.request_matcher.B3ldH_a'] ?? ($this->privates['.security.request_matcher.B3ldH_a'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin')));
            yield 'security.firewall.map.context.oauth_token' => ($this->privates['.security.request_matcher.2IPYWkw'] ?? ($this->privates['.security.request_matcher.2IPYWkw'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/oauth/v2/token')));
            yield 'security.firewall.map.context.api' => ($this->privates['.security.request_matcher.jsUtyW7'] ?? ($this->privates['.security.request_matcher.jsUtyW7'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/.*')));
            yield 'security.firewall.map.context.shop' => ($this->privates['.security.request_matcher.HMGYYxQ'] ?? ($this->privates['.security.request_matcher.HMGYYxQ'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(?!admin|api/.*|api$|media/.*)[^/]++')));
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
        }, 5));
    }

    /*
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->registerListener('admin', 'sylius_admin_logout', 'logout', '_csrf_token', NULL, 'admin');
        $instance->registerListener('shop', 'sylius_shop_logout', 'logout', '_csrf_token', NULL, 'shop');

        return $instance;
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'initialized_session' => '?',
            'session' => '?',
        ]));
    }

    /*
     * Gets the private 'stof_doctrine_extensions.event_listener.logger' shared service.
     *
     * @return \Stof\DoctrineExtensionsBundle\EventListener\LoggerListener
     */
    protected function getStofDoctrineExtensions_EventListener_LoggerService()
    {
        return $this->privates['stof_doctrine_extensions.event_listener.logger'] = new \Stof\DoctrineExtensionsBundle\EventListener\LoggerListener(($this->privates['stof_doctrine_extensions.listener.loggable'] ?? $this->getStofDoctrineExtensions_Listener_LoggableService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /*
     * Gets the private 'stof_doctrine_extensions.listener.loggable' shared service.
     *
     * @return \Gedmo\Loggable\LoggableListener
     */
    protected function getStofDoctrineExtensions_Listener_LoggableService()
    {
        $this->privates['stof_doctrine_extensions.listener.loggable'] = $instance = new \Gedmo\Loggable\LoggableListener();

        $instance->setAnnotationReader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));

        return $instance;
    }

    /*
     * Gets the private 'sylius.resolver.checkout' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Checkout\CheckoutResolver
     */
    protected function getSylius_Resolver_CheckoutService()
    {
        return $this->privates['sylius.resolver.checkout'] = new \Sylius\Bundle\CoreBundle\Checkout\CheckoutResolver(($this->services['sylius.context.cart'] ?? $this->getSylius_Context_CartService()), ($this->privates['sylius.router.checkout_state'] ?? $this->getSylius_Router_CheckoutStateService()), new \Symfony\Component\HttpFoundation\RequestMatcher('/checkout/.+'), ($this->services['sm.factory'] ?? $this->getSm_FactoryService()));
    }

    /*
     * Gets the private 'sylius.resource_registry' shared service.
     *
     * @return \Sylius\Component\Resource\Metadata\Registry
     */
    protected function getSylius_ResourceRegistryService()
    {
        $this->privates['sylius.resource_registry'] = $instance = new \Sylius\Component\Resource\Metadata\Registry();

        $instance->addFromAliasAndConfiguration('sylius.order', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Order\\Order', 'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\OrderController', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\OrderRepository', 'interface' => 'Sylius\\Component\\Order\\Model\\OrderInterface', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\OrderType']]);
        $instance->addFromAliasAndConfiguration('sylius.order_item', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Order\\OrderItem', 'interface' => 'Sylius\\Component\\Order\\Model\\OrderItemInterface', 'controller' => 'Sylius\\Bundle\\OrderBundle\\Controller\\OrderItemController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\OrderItemType']]);
        $instance->addFromAliasAndConfiguration('sylius.order_item_unit', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Order\\OrderItemUnit', 'interface' => 'Sylius\\Component\\Order\\Model\\OrderItemUnitInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Order\\Factory\\OrderItemUnitFactory']]);
        $instance->addFromAliasAndConfiguration('sylius.order_sequence', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Order\\OrderSequence', 'interface' => 'Sylius\\Component\\Order\\Model\\OrderSequenceInterface', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory']]);
        $instance->addFromAliasAndConfiguration('sylius.adjustment', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Order\\Adjustment', 'interface' => 'Sylius\\Component\\Order\\Model\\AdjustmentInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory']]);
        $instance->addFromAliasAndConfiguration('sylius.currency', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Currency\\Currency', 'interface' => 'Sylius\\Component\\Currency\\Model\\CurrencyInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\CurrencyBundle\\Form\\Type\\CurrencyType']]);
        $instance->addFromAliasAndConfiguration('sylius.exchange_rate', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Currency\\ExchangeRate', 'interface' => 'Sylius\\Component\\Currency\\Model\\ExchangeRateInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\CurrencyBundle\\Form\\Type\\ExchangeRateType']]);
        $instance->addFromAliasAndConfiguration('sylius.locale', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Locale\\Locale', 'interface' => 'Sylius\\Component\\Locale\\Model\\LocaleInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\LocaleBundle\\Form\\Type\\LocaleType']]);
        $instance->addFromAliasAndConfiguration('sylius.product', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Product\\Product', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductRepository', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductType'], 'translation' => ['classes' => ['model' => 'App\\Entity\\Product\\ProductTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductTranslationType']]]);
        $instance->addFromAliasAndConfiguration('sylius.product_translation', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Product\\ProductTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductTranslationType']]);
        $instance->addFromAliasAndConfiguration('sylius.product_variant', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Product\\ProductVariant', 'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\ProductVariantController', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductVariantRepository', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductVariantInterface', 'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductVariantType'], 'translation' => ['classes' => ['model' => 'App\\Entity\\Product\\ProductVariantTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductVariantTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductVariantTranslationType']]]);
        $instance->addFromAliasAndConfiguration('sylius.product_variant_translation', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Product\\ProductVariantTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductVariantTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductVariantTranslationType']]);
        $instance->addFromAliasAndConfiguration('sylius.product_option', ['driver' => 'doctrine/orm', 'classes' => ['repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductOptionRepository', 'model' => 'App\\Entity\\Product\\ProductOption', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionType'], 'translation' => ['classes' => ['model' => 'App\\Entity\\Product\\ProductOptionTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionTranslationType']]]);
        $instance->addFromAliasAndConfiguration('sylius.product_option_translation', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Product\\ProductOptionTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionTranslationType']]);
        $instance->addFromAliasAndConfiguration('sylius.product_association_type', ['driver' => 'doctrine/orm', 'classes' => ['repository' => 'Sylius\\Bundle\\ProductBundle\\Doctrine\\ORM\\ProductAssociationTypeRepository', 'model' => 'App\\Entity\\Product\\ProductAssociationType', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductAssociationTypeInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeType'], 'translation' => ['classes' => ['model' => 'App\\Entity\\Product\\ProductAssociationTypeTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeTranslationType']]]);
        $instance->addFromAliasAndConfiguration('sylius.product_association_type_translation', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Product\\ProductAssociationTypeTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeTranslationType']]);
        $instance->addFromAliasAndConfiguration('sylius.product_option_value', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Product\\ProductOptionValue', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionValueInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionValueType'], 'translation' => ['classes' => ['model' => 'App\\Entity\\Product\\ProductOptionValueTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionValueTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionValueTranslationType']]]);
        $instance->addFromAliasAndConfiguration('sylius.product_option_value_translation', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Product\\ProductOptionValueTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionValueTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionValueTranslationType']]);
        $instance->addFromAliasAndConfiguration('sylius.product_association', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Product\\ProductAssociation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductAssociationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationType']]);
        $instance->addFromAliasAndConfiguration('sylius.channel', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Channel\\Channel', 'interface' => 'Sylius\\Component\\Channel\\Model\\ChannelInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ChannelBundle\\Form\\Type\\ChannelType']]);
        $instance->addFromAliasAndConfiguration('sylius.product_attribute', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Product\\ProductAttribute', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeInterface', 'controller' => 'Sylius\\Bundle\\ProductBundle\\Controller\\ProductAttributeController', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeType', 'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory'], 'translation' => ['classes' => ['model' => 'App\\Entity\\Product\\ProductAttributeTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeTranslationInterface', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeTranslationType', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory']]]);
        $instance->addFromAliasAndConfiguration('sylius.product_attribute_translation', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Product\\ProductAttributeTranslation', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeTranslationInterface', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeTranslationType', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory']]);
        $instance->addFromAliasAndConfiguration('sylius.product_attribute_value', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Product\\ProductAttributeValue', 'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeValueInterface', 'repository' => 'Sylius\\Bundle\\ProductBundle\\Doctrine\\ORM\\ProductAttributeValueRepository', 'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeValueType', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory']]);
        $instance->addFromAliasAndConfiguration('sylius.tax_rate', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Taxation\\TaxRate', 'interface' => 'Sylius\\Component\\Taxation\\Model\\TaxRateInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxRateType']]);
        $instance->addFromAliasAndConfiguration('sylius.tax_category', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Taxation\\TaxCategory', 'interface' => 'Sylius\\Component\\Taxation\\Model\\TaxCategoryInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxCategoryType']]);
        $instance->addFromAliasAndConfiguration('sylius.shipment', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Shipping\\Shipment', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShipmentRepository', 'interface' => 'Sylius\\Component\\Shipping\\Model\\ShipmentInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentType']]);
        $instance->addFromAliasAndConfiguration('sylius.shipment_unit', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Order\\OrderItemUnit', 'interface' => 'Sylius\\Component\\Shipping\\Model\\ShipmentUnitInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory']]);
        $instance->addFromAliasAndConfiguration('sylius.shipping_method', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Shipping\\ShippingMethod', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShippingMethodRepository', 'interface' => 'Sylius\\Component\\Shipping\\Model\\ShippingMethodInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodType'], 'translation' => ['classes' => ['model' => 'App\\Entity\\Shipping\\ShippingMethodTranslation', 'interface' => 'Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodTranslationType']]]);
        $instance->addFromAliasAndConfiguration('sylius.shipping_method_translation', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Shipping\\ShippingMethodTranslation', 'interface' => 'Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodTranslationType']]);
        $instance->addFromAliasAndConfiguration('sylius.shipping_category', ['driver' => 'doctrine/orm', 'classes' => ['repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShippingCategoryRepository', 'model' => 'App\\Entity\\Shipping\\ShippingCategory', 'interface' => 'Sylius\\Component\\Shipping\\Model\\ShippingCategoryInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingCategoryType']]);
        $instance->addFromAliasAndConfiguration('sylius.payment', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Payment\\Payment', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\PaymentRepository', 'interface' => 'Sylius\\Component\\Payment\\Model\\PaymentInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentType']]);
        $instance->addFromAliasAndConfiguration('sylius.payment_method', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Payment\\PaymentMethod', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\PaymentMethodRepository', 'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\PaymentMethodController', 'interface' => 'Sylius\\Component\\Payment\\Model\\PaymentMethodInterface', 'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory', 'form' => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodType'], 'translation' => ['classes' => ['model' => 'App\\Entity\\Payment\\PaymentMethodTranslation', 'interface' => 'Sylius\\Component\\Payment\\Model\\PaymentMethodTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodTranslationType']]]);
        $instance->addFromAliasAndConfiguration('sylius.payment_method_translation', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Payment\\PaymentMethodTranslation', 'interface' => 'Sylius\\Component\\Payment\\Model\\PaymentMethodTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodTranslationType']]);
        $instance->addFromAliasAndConfiguration('sylius.promotion_subject', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Order\\Order']]);
        $instance->addFromAliasAndConfiguration('sylius.promotion', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Promotion\\Promotion', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\PromotionRepository', 'interface' => 'Sylius\\Component\\Promotion\\Model\\PromotionInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionType']]);
        $instance->addFromAliasAndConfiguration('sylius.promotion_coupon', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Promotion\\PromotionCoupon', 'repository' => 'Sylius\\Bundle\\PromotionBundle\\Doctrine\\ORM\\PromotionCouponRepository', 'interface' => 'Sylius\\Component\\Promotion\\Model\\PromotionCouponInterface', 'controller' => 'Sylius\\Bundle\\PromotionBundle\\Controller\\PromotionCouponController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionCouponType']]);
        $instance->addFromAliasAndConfiguration('sylius.promotion_rule', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Promotion\\PromotionRule', 'interface' => 'Sylius\\Component\\Promotion\\Model\\PromotionRuleInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionRuleType']]);
        $instance->addFromAliasAndConfiguration('sylius.promotion_action', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Promotion\\PromotionAction', 'interface' => 'Sylius\\Component\\Promotion\\Model\\PromotionActionInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionActionType']]);
        $instance->addFromAliasAndConfiguration('sylius.address', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Addressing\\Address', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\AddressRepository', 'interface' => 'Sylius\\Component\\Addressing\\Model\\AddressInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\AddressType']]);
        $instance->addFromAliasAndConfiguration('sylius.country', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Addressing\\Country', 'interface' => 'Sylius\\Component\\Addressing\\Model\\CountryInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\CountryType']]);
        $instance->addFromAliasAndConfiguration('sylius.province', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Addressing\\Province', 'interface' => 'Sylius\\Component\\Addressing\\Model\\ProvinceInterface', 'controller' => 'Sylius\\Bundle\\AddressingBundle\\Controller\\ProvinceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ProvinceType']]);
        $instance->addFromAliasAndConfiguration('sylius.zone', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Addressing\\Zone', 'interface' => 'Sylius\\Component\\Addressing\\Model\\ZoneInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneType']]);
        $instance->addFromAliasAndConfiguration('sylius.zone_member', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Addressing\\ZoneMember', 'interface' => 'Sylius\\Component\\Addressing\\Model\\ZoneMemberInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberType']]);
        $instance->addFromAliasAndConfiguration('sylius.address_log_entry', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'Sylius\\Component\\Addressing\\Model\\AddressLogEntry', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'repository' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\ResourceLogEntryRepository', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory']]);
        $instance->addFromAliasAndConfiguration('sylius.inventory_unit', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Order\\OrderItemUnit', 'interface' => 'Sylius\\Component\\Inventory\\Model\\InventoryUnitInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory']]);
        $instance->addFromAliasAndConfiguration('sylius.taxon', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Taxonomy\\Taxon', 'repository' => 'Sylius\\Bundle\\TaxonomyBundle\\Doctrine\\ORM\\TaxonRepository', 'interface' => 'Sylius\\Component\\Taxonomy\\Model\\TaxonInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory', 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonType'], 'translation' => ['classes' => ['model' => 'App\\Entity\\Taxonomy\\TaxonTranslation', 'interface' => 'Sylius\\Component\\Taxonomy\\Model\\TaxonTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonTranslationType']]]);
        $instance->addFromAliasAndConfiguration('sylius.taxon_translation', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Taxonomy\\TaxonTranslation', 'interface' => 'Sylius\\Component\\Taxonomy\\Model\\TaxonTranslationInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonTranslationType']]);
        $instance->addFromAliasAndConfiguration('sylius.admin_user', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\User\\AdminUser', 'interface' => 'Sylius\\Component\\Core\\Model\\AdminUserInterface', 'repository' => 'Sylius\\Bundle\\UserBundle\\Doctrine\\ORM\\UserRepository', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\User\\AdminUserType', 'controller' => 'Sylius\\Bundle\\UserBundle\\Controller\\UserController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory'], 'templates' => 'SyliusUserBundle:User', 'encoder' => NULL, 'resetting' => ['token' => ['ttl' => 'P1D', 'length' => 16, 'field_name' => 'passwordResetToken'], 'pin' => ['length' => 4, 'field_name' => 'passwordResetToken']], 'verification' => ['token' => ['length' => 16, 'field_name' => 'emailVerificationToken']]]);
        $instance->addFromAliasAndConfiguration('sylius.shop_user', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\User\\ShopUser', 'interface' => 'Sylius\\Component\\Core\\Model\\ShopUserInterface', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\UserRepository', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\User\\ShopUserType', 'controller' => 'Sylius\\Bundle\\UserBundle\\Controller\\UserController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory'], 'templates' => 'SyliusUserBundle:User', 'encoder' => NULL, 'resetting' => ['token' => ['ttl' => 'P1D', 'length' => 16, 'field_name' => 'passwordResetToken'], 'pin' => ['length' => 4, 'field_name' => 'passwordResetToken']], 'verification' => ['token' => ['length' => 16, 'field_name' => 'emailVerificationToken']]]);
        $instance->addFromAliasAndConfiguration('sylius.oauth_user', ['driver' => 'doctrine/orm', 'encoder' => false, 'classes' => ['model' => 'App\\Entity\\User\\UserOAuth', 'interface' => 'Sylius\\Component\\User\\Model\\UserOAuthInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory'], 'templates' => 'SyliusUserBundle:User', 'resetting' => ['token' => ['ttl' => 'P1D', 'length' => 16, 'field_name' => 'passwordResetToken'], 'pin' => ['length' => 4, 'field_name' => 'passwordResetToken']], 'verification' => ['token' => ['length' => 16, 'field_name' => 'emailVerificationToken']]]);
        $instance->addFromAliasAndConfiguration('sylius.customer', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Customer\\Customer', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\CustomerRepository', 'interface' => 'Sylius\\Component\\Customer\\Model\\CustomerInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerType']]);
        $instance->addFromAliasAndConfiguration('sylius.customer_group', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Customer\\CustomerGroup', 'interface' => 'Sylius\\Component\\Customer\\Model\\CustomerGroupInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerGroupType']]);
        $instance->addFromAliasAndConfiguration('sylius.product_review', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Product\\ProductReview', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductReviewRepository', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ProductReviewType', 'interface' => 'Sylius\\Component\\Review\\Model\\ReviewInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory']]);
        $instance->addFromAliasAndConfiguration('sylius.product_reviewer', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Customer\\Customer', 'interface' => 'Sylius\\Component\\Review\\Model\\ReviewerInterface', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory']]);
        $instance->addFromAliasAndConfiguration('sylius.product_taxon', ['driver' => 'doctrine/orm', 'classes' => ['repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductTaxonRepository', 'model' => 'App\\Entity\\Product\\ProductTaxon', 'interface' => 'Sylius\\Component\\Core\\Model\\ProductTaxonInterface', 'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\ProductTaxonController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory']]);
        $instance->addFromAliasAndConfiguration('sylius.product_image', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Product\\ProductImage', 'interface' => 'Sylius\\Component\\Core\\Model\\ProductImageInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory']]);
        $instance->addFromAliasAndConfiguration('sylius.taxon_image', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Taxonomy\\TaxonImage', 'interface' => 'Sylius\\Component\\Core\\Model\\TaxonImageInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory']]);
        $instance->addFromAliasAndConfiguration('sylius.channel_pricing', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Channel\\ChannelPricing', 'interface' => 'Sylius\\Component\\Core\\Model\\ChannelPricingInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ChannelPricingType']]);
        $instance->addFromAliasAndConfiguration('sylius.avatar_image', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'Sylius\\Component\\Core\\Model\\AvatarImage', 'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\AvatarImageRepository']]);
        $instance->addFromAliasAndConfiguration('sylius.shop_billing_data', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'Sylius\\Component\\Core\\Model\\ShopBillingData', 'interface' => 'Sylius\\Component\\Core\\Model\\ShopBillingDataInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ShopBillingDataType']]);
        $instance->addFromAliasAndConfiguration('sylius.payment_security_token', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Payment\\PaymentSecurityToken', 'interface' => 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityTokenInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory']]);
        $instance->addFromAliasAndConfiguration('sylius.gateway_config', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\Payment\\GatewayConfig', 'interface' => 'Sylius\\Bundle\\PayumBundle\\Model\\GatewayConfigInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\PayumBundle\\Form\\Type\\GatewayConfigType']]);
        $instance->addFromAliasAndConfiguration('sylius.api_user', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\User\\AdminUser', 'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\UserInterface']]);
        $instance->addFromAliasAndConfiguration('sylius.api_client', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\AdminApi\\Client', 'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\ClientInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ClientType']]);
        $instance->addFromAliasAndConfiguration('sylius.api_access_token', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\AdminApi\\AccessToken', 'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\AccessTokenInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory']]);
        $instance->addFromAliasAndConfiguration('sylius.api_refresh_token', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\AdminApi\\RefreshToken', 'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\RefreshTokenInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory']]);
        $instance->addFromAliasAndConfiguration('sylius.api_auth_code', ['driver' => 'doctrine/orm', 'classes' => ['model' => 'App\\Entity\\AdminApi\\AuthCode', 'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\AuthCodeInterface', 'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController', 'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory']]);

        return $instance;
    }

    /*
     * Gets the private 'sylius.router.checkout_state' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Checkout\CheckoutStateUrlGenerator
     */
    protected function getSylius_Router_CheckoutStateService()
    {
        return $this->privates['sylius.router.checkout_state'] = new \Sylius\Bundle\CoreBundle\Checkout\CheckoutStateUrlGenerator(($this->services['router'] ?? $this->getRouterService()), ['empty_order' => ['route' => 'sylius_shop_cart_summary'], 'cart' => ['route' => 'sylius_shop_checkout_address'], 'addressed' => ['route' => 'sylius_shop_checkout_select_shipping'], 'shipping_selected' => ['route' => 'sylius_shop_checkout_select_payment'], 'shipping_skipped' => ['route' => 'sylius_shop_checkout_select_payment'], 'payment_selected' => ['route' => 'sylius_shop_checkout_complete'], 'payment_skipped' => ['route' => 'sylius_shop_checkout_complete']]);
    }

    /*
     * Gets the private 'sylius.theme.context.channel_based' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Theme\ChannelBasedThemeContext
     */
    protected function getSylius_Theme_Context_ChannelBasedService()
    {
        return $this->privates['sylius.theme.context.channel_based'] = new \Sylius\Bundle\CoreBundle\Theme\ChannelBasedThemeContext(($this->services['sylius.context.channel'] ?? $this->getSylius_Context_ChannelService()), ($this->services['sylius.repository.theme'] ?? $this->getSylius_Repository_ThemeService()));
    }

    /*
     * Gets the private 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.csv'] = $this->createProxy('CsvFileLoader_5cc7c8f', function () {
                return \CsvFileLoader_5cc7c8f::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_CsvService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/CsvFileLoader.php';

        return new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /*
     * Gets the private 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.dat'] = $this->createProxy('IcuDatFileLoader_a54a424', function () {
                return \IcuDatFileLoader_a54a424::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_DatService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuResFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuDatFileLoader.php';

        return new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /*
     * Gets the private 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.ini'] = $this->createProxy('IniFileLoader_d75c726', function () {
                return \IniFileLoader_d75c726::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_IniService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IniFileLoader.php';

        return new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /*
     * Gets the private 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.json'] = $this->createProxy('JsonFileLoader_6854993', function () {
                return \JsonFileLoader_6854993::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_JsonService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/JsonFileLoader.php';

        return new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /*
     * Gets the private 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.mo'] = $this->createProxy('MoFileLoader_067a4cd', function () {
                return \MoFileLoader_067a4cd::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_MoService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/MoFileLoader.php';

        return new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /*
     * Gets the private 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.php'] = $this->createProxy('PhpFileLoader_e63c58d', function () {
                return \PhpFileLoader_e63c58d::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_PhpService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/PhpFileLoader.php';

        return new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /*
     * Gets the private 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.po'] = $this->createProxy('PoFileLoader_8acad7f', function () {
                return \PoFileLoader_8acad7f::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_PoService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/PoFileLoader.php';

        return new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /*
     * Gets the private 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.qt'] = $this->createProxy('QtFileLoader_b0bf5a8', function () {
                return \QtFileLoader_b0bf5a8::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_QtService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/QtFileLoader.php';

        return new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /*
     * Gets the private 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.res'] = $this->createProxy('IcuResFileLoader_54be3cf', function () {
                return \IcuResFileLoader_54be3cf::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_ResService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuResFileLoader.php';

        return new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /*
     * Gets the private 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.xliff'] = $this->createProxy('XliffFileLoader_17bf9c6', function () {
                return \XliffFileLoader_17bf9c6::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_XliffService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/XliffFileLoader.php';

        return new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /*
     * Gets the private 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['translation.loader.yml'] = $this->createProxy('YamlFileLoader_53c0405', function () {
                return \YamlFileLoader_53c0405::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTranslation_Loader_YmlService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/YamlFileLoader.php';

        return new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'doctrine.orm.proxy_dir' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.root_dir' => (\dirname(__DIR__, 4).'/src'),
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'src',
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'/log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'SyliusOrderBundle' => 'Sylius\\Bundle\\OrderBundle\\SyliusOrderBundle',
                'SyliusMoneyBundle' => 'Sylius\\Bundle\\MoneyBundle\\SyliusMoneyBundle',
                'SyliusCurrencyBundle' => 'Sylius\\Bundle\\CurrencyBundle\\SyliusCurrencyBundle',
                'SyliusLocaleBundle' => 'Sylius\\Bundle\\LocaleBundle\\SyliusLocaleBundle',
                'SyliusProductBundle' => 'Sylius\\Bundle\\ProductBundle\\SyliusProductBundle',
                'SyliusChannelBundle' => 'Sylius\\Bundle\\ChannelBundle\\SyliusChannelBundle',
                'SyliusAttributeBundle' => 'Sylius\\Bundle\\AttributeBundle\\SyliusAttributeBundle',
                'SyliusTaxationBundle' => 'Sylius\\Bundle\\TaxationBundle\\SyliusTaxationBundle',
                'SyliusShippingBundle' => 'Sylius\\Bundle\\ShippingBundle\\SyliusShippingBundle',
                'SyliusPaymentBundle' => 'Sylius\\Bundle\\PaymentBundle\\SyliusPaymentBundle',
                'SyliusMailerBundle' => 'Sylius\\Bundle\\MailerBundle\\SyliusMailerBundle',
                'SyliusPromotionBundle' => 'Sylius\\Bundle\\PromotionBundle\\SyliusPromotionBundle',
                'SyliusAddressingBundle' => 'Sylius\\Bundle\\AddressingBundle\\SyliusAddressingBundle',
                'SyliusInventoryBundle' => 'Sylius\\Bundle\\InventoryBundle\\SyliusInventoryBundle',
                'SyliusTaxonomyBundle' => 'Sylius\\Bundle\\TaxonomyBundle\\SyliusTaxonomyBundle',
                'SyliusUserBundle' => 'Sylius\\Bundle\\UserBundle\\SyliusUserBundle',
                'SyliusCustomerBundle' => 'Sylius\\Bundle\\CustomerBundle\\SyliusCustomerBundle',
                'SyliusUiBundle' => 'Sylius\\Bundle\\UiBundle\\SyliusUiBundle',
                'SyliusReviewBundle' => 'Sylius\\Bundle\\ReviewBundle\\SyliusReviewBundle',
                'SyliusCoreBundle' => 'Sylius\\Bundle\\CoreBundle\\SyliusCoreBundle',
                'SyliusResourceBundle' => 'Sylius\\Bundle\\ResourceBundle\\SyliusResourceBundle',
                'SyliusGridBundle' => 'Sylius\\Bundle\\GridBundle\\SyliusGridBundle',
                'winzouStateMachineBundle' => 'winzou\\Bundle\\StateMachineBundle\\winzouStateMachineBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'BazingaHateoasBundle' => 'Bazinga\\Bundle\\HateoasBundle\\BazingaHateoasBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'KnpGaufretteBundle' => 'Knp\\Bundle\\GaufretteBundle\\KnpGaufretteBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle',
                'PayumBundle' => 'Payum\\Bundle\\PayumBundle\\PayumBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'SyliusFixturesBundle' => 'Sylius\\Bundle\\FixturesBundle\\SyliusFixturesBundle',
                'SyliusPayumBundle' => 'Sylius\\Bundle\\PayumBundle\\SyliusPayumBundle',
                'SyliusThemeBundle' => 'Sylius\\Bundle\\ThemeBundle\\SyliusThemeBundle',
                'SyliusAdminBundle' => 'Sylius\\Bundle\\AdminBundle\\SyliusAdminBundle',
                'SyliusShopBundle' => 'Sylius\\Bundle\\ShopBundle\\SyliusShopBundle',
                'FOSOAuthServerBundle' => 'FOS\\OAuthServerBundle\\FOSOAuthServerBundle',
                'SyliusAdminApiBundle' => 'Sylius\\Bundle\\AdminApiBundle\\SyliusAdminApiBundle',
                'SitemapPlugin' => 'SitemapPlugin\\SitemapPlugin',
                'FOSCKEditorBundle' => 'FOS\\CKEditorBundle\\FOSCKEditorBundle',
                'BitBagSyliusCmsPlugin' => 'BitBag\\SyliusCmsPlugin\\BitBagSyliusCmsPlugin',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'MonologBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'SwiftmailerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineCacheBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ],
                'SyliusOrderBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle'),
                    'namespace' => 'Sylius\\Bundle\\OrderBundle',
                ],
                'SyliusMoneyBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/MoneyBundle'),
                    'namespace' => 'Sylius\\Bundle\\MoneyBundle',
                ],
                'SyliusCurrencyBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle'),
                    'namespace' => 'Sylius\\Bundle\\CurrencyBundle',
                ],
                'SyliusLocaleBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle'),
                    'namespace' => 'Sylius\\Bundle\\LocaleBundle',
                ],
                'SyliusProductBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle'),
                    'namespace' => 'Sylius\\Bundle\\ProductBundle',
                ],
                'SyliusChannelBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle'),
                    'namespace' => 'Sylius\\Bundle\\ChannelBundle',
                ],
                'SyliusAttributeBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle'),
                    'namespace' => 'Sylius\\Bundle\\AttributeBundle',
                ],
                'SyliusTaxationBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle'),
                    'namespace' => 'Sylius\\Bundle\\TaxationBundle',
                ],
                'SyliusShippingBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle'),
                    'namespace' => 'Sylius\\Bundle\\ShippingBundle',
                ],
                'SyliusPaymentBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle'),
                    'namespace' => 'Sylius\\Bundle\\PaymentBundle',
                ],
                'SyliusMailerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Bundle'),
                    'namespace' => 'Sylius\\Bundle\\MailerBundle',
                ],
                'SyliusPromotionBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle'),
                    'namespace' => 'Sylius\\Bundle\\PromotionBundle',
                ],
                'SyliusAddressingBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle'),
                    'namespace' => 'Sylius\\Bundle\\AddressingBundle',
                ],
                'SyliusInventoryBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/InventoryBundle'),
                    'namespace' => 'Sylius\\Bundle\\InventoryBundle',
                ],
                'SyliusTaxonomyBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle'),
                    'namespace' => 'Sylius\\Bundle\\TaxonomyBundle',
                ],
                'SyliusUserBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle'),
                    'namespace' => 'Sylius\\Bundle\\UserBundle',
                ],
                'SyliusCustomerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle'),
                    'namespace' => 'Sylius\\Bundle\\CustomerBundle',
                ],
                'SyliusUiBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle'),
                    'namespace' => 'Sylius\\Bundle\\UiBundle',
                ],
                'SyliusReviewBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle'),
                    'namespace' => 'Sylius\\Bundle\\ReviewBundle',
                ],
                'SyliusCoreBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle'),
                    'namespace' => 'Sylius\\Bundle\\CoreBundle',
                ],
                'SyliusResourceBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle'),
                    'namespace' => 'Sylius\\Bundle\\ResourceBundle',
                ],
                'SyliusGridBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Bundle'),
                    'namespace' => 'Sylius\\Bundle\\GridBundle',
                ],
                'winzouStateMachineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/winzou/state-machine-bundle'),
                    'namespace' => 'winzou\\Bundle\\StateMachineBundle',
                ],
                'SonataBlockBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src'),
                    'namespace' => 'Sonata\\BlockBundle',
                ],
                'BazingaHateoasBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/willdurand/hateoas-bundle'),
                    'namespace' => 'Bazinga\\Bundle\\HateoasBundle',
                ],
                'JMSSerializerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/jms/serializer-bundle'),
                    'namespace' => 'JMS\\SerializerBundle',
                ],
                'FOSRestBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle'),
                    'namespace' => 'FOS\\RestBundle',
                ],
                'KnpGaufretteBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-gaufrette-bundle'),
                    'namespace' => 'Knp\\Bundle\\GaufretteBundle',
                ],
                'KnpMenuBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-menu-bundle/src'),
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ],
                'LiipImagineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/liip/imagine-bundle'),
                    'namespace' => 'Liip\\ImagineBundle',
                ],
                'PayumBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/payum/payum-bundle'),
                    'namespace' => 'Payum\\Bundle\\PayumBundle',
                ],
                'StofDoctrineExtensionsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/stof/doctrine-extensions-bundle'),
                    'namespace' => 'Stof\\DoctrineExtensionsBundle',
                ],
                'WhiteOctoberPagerfantaBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/white-october/pagerfanta-bundle'),
                    'namespace' => 'WhiteOctober\\PagerfantaBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'SyliusFixturesBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src'),
                    'namespace' => 'Sylius\\Bundle\\FixturesBundle',
                ],
                'SyliusPayumBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle'),
                    'namespace' => 'Sylius\\Bundle\\PayumBundle',
                ],
                'SyliusThemeBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src'),
                    'namespace' => 'Sylius\\Bundle\\ThemeBundle',
                ],
                'SyliusAdminBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle'),
                    'namespace' => 'Sylius\\Bundle\\AdminBundle',
                ],
                'SyliusShopBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle'),
                    'namespace' => 'Sylius\\Bundle\\ShopBundle',
                ],
                'FOSOAuthServerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle'),
                    'namespace' => 'FOS\\OAuthServerBundle',
                ],
                'SyliusAdminApiBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminApiBundle'),
                    'namespace' => 'Sylius\\Bundle\\AdminApiBundle',
                ],
                'SitemapPlugin' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/stefandoorn/sitemap-plugin/src'),
                    'namespace' => 'SitemapPlugin',
                ],
                'FOSCKEditorBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/friendsofsymfony/ckeditor-bundle/src'),
                    'namespace' => 'FOS\\CKEditorBundle',
                ],
                'BitBagSyliusCmsPlugin' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/bitbag/cms-plugin/src'),
                    'namespace' => 'BitBag\\SyliusCmsPlugin',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcApp_KernelProdContainer',
            'container.dumper.inline_class_loader' => true,
            'sylius.uploader.filesystem' => 'sylius_image',
            'sylius_core.public_dir' => (\dirname(__DIR__, 4).'/public'),
            'env(SYLIUS_FIXTURES_HOSTNAME)' => 'localhost',
            'env(DATABASE_URL)' => '',
            'sylius.security.admin_regex' => '^/admin',
            'sylius.security.api_regex' => '^/api',
            'sylius.security.shop_regex' => '^/(?!admin|api/.*|api$|media/.*)[^/]++',
            'locale' => 'en_US',
            'event_dispatcher.event_aliases' => [
                'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => 'console.command',
                'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => 'console.error',
                'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => 'console.terminate',
                'Symfony\\Component\\Form\\Event\\PreSubmitEvent' => 'form.pre_submit',
                'Symfony\\Component\\Form\\Event\\SubmitEvent' => 'form.submit',
                'Symfony\\Component\\Form\\Event\\PostSubmitEvent' => 'form.post_submit',
                'Symfony\\Component\\Form\\Event\\PreSetDataEvent' => 'form.pre_set_data',
                'Symfony\\Component\\Form\\Event\\PostSetDataEvent' => 'form.post_set_data',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent' => 'kernel.controller_arguments',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent' => 'kernel.controller',
                'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent' => 'kernel.response',
                'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent' => 'kernel.finish_request',
                'Symfony\\Component\\HttpKernel\\Event\\RequestEvent' => 'kernel.request',
                'Symfony\\Component\\HttpKernel\\Event\\ViewEvent' => 'kernel.view',
                'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent' => 'kernel.exception',
                'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent' => 'kernel.terminate',
                'Symfony\\Component\\Workflow\\Event\\GuardEvent' => 'workflow.guard',
                'Symfony\\Component\\Workflow\\Event\\LeaveEvent' => 'workflow.leave',
                'Symfony\\Component\\Workflow\\Event\\TransitionEvent' => 'workflow.transition',
                'Symfony\\Component\\Workflow\\Event\\EnterEvent' => 'workflow.enter',
                'Symfony\\Component\\Workflow\\Event\\EnteredEvent' => 'workflow.entered',
                'Symfony\\Component\\Workflow\\Event\\CompletedEvent' => 'workflow.completed',
                'Symfony\\Component\\Workflow\\Event\\AnnounceEvent' => 'workflow.announce',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationSuccessEvent' => 'security.authentication.success',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationFailureEvent' => 'security.authentication.failure',
                'Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent' => 'security.interactive_login',
                'Symfony\\Component\\Security\\Http\\Event\\SwitchUserEvent' => 'security.switch_user',
            ],
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en_US',
            'kernel.error_controller' => 'error_controller',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => [
                0 => 'twig',
            ],
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'data_collector.templates' => [

            ],
            'debug.error_handler.throw_at' => 0,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcApp_KernelProdContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.main' => NULL,
            ],
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => [

            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => true,
            'security.authentication.hide_user_not_found' => true,
            'swiftmailer.mailer.default.transport.name' => 'dynamic',
            'swiftmailer.mailer.default.spool.enabled' => false,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => false,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'twig.exception_listener.controller' => 'twig.controller.exception::showAction',
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
                1 => '@FOSCKEditor/Form/ckeditor_widget.html.twig',
                2 => '@LiipImagine/Form/form_div_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sylius.repository.order.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\OrderRepository',
            'sylius.repository.order_item.class' => 'Sylius\\Bundle\\OrderBundle\\Doctrine\\ORM\\OrderItemRepository',
            'sylius_order.driver.doctrine/orm' => true,
            'sylius_order.driver' => 'doctrine/orm',
            'sylius.resources' => [
                'sylius.order' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Order\\Order',
                        'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\OrderController',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\OrderRepository',
                        'interface' => 'Sylius\\Component\\Order\\Model\\OrderInterface',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\OrderType',
                    ],
                ],
                'sylius.order_item' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Order\\OrderItem',
                        'interface' => 'Sylius\\Component\\Order\\Model\\OrderItemInterface',
                        'controller' => 'Sylius\\Bundle\\OrderBundle\\Controller\\OrderItemController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\OrderItemType',
                    ],
                ],
                'sylius.order_item_unit' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Order\\OrderItemUnit',
                        'interface' => 'Sylius\\Component\\Order\\Model\\OrderItemUnitInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Order\\Factory\\OrderItemUnitFactory',
                    ],
                ],
                'sylius.order_sequence' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Order\\OrderSequence',
                        'interface' => 'Sylius\\Component\\Order\\Model\\OrderSequenceInterface',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ],
                ],
                'sylius.adjustment' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Order\\Adjustment',
                        'interface' => 'Sylius\\Component\\Order\\Model\\AdjustmentInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ],
                ],
                'sylius.currency' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Currency\\Currency',
                        'interface' => 'Sylius\\Component\\Currency\\Model\\CurrencyInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\CurrencyBundle\\Form\\Type\\CurrencyType',
                    ],
                ],
                'sylius.exchange_rate' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Currency\\ExchangeRate',
                        'interface' => 'Sylius\\Component\\Currency\\Model\\ExchangeRateInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\CurrencyBundle\\Form\\Type\\ExchangeRateType',
                    ],
                ],
                'sylius.locale' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Locale\\Locale',
                        'interface' => 'Sylius\\Component\\Locale\\Model\\LocaleInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\LocaleBundle\\Form\\Type\\LocaleType',
                    ],
                ],
                'sylius.product' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Product\\Product',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductRepository',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductType',
                    ],
                    'translation' => [
                        'classes' => [
                            'model' => 'App\\Entity\\Product\\ProductTranslation',
                            'interface' => 'Sylius\\Component\\Product\\Model\\ProductTranslationInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductTranslationType',
                        ],
                    ],
                ],
                'sylius.product_translation' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Product\\ProductTranslation',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductTranslationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductTranslationType',
                    ],
                ],
                'sylius.product_variant' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Product\\ProductVariant',
                        'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\ProductVariantController',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductVariantRepository',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductVariantInterface',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductVariantType',
                    ],
                    'translation' => [
                        'classes' => [
                            'model' => 'App\\Entity\\Product\\ProductVariantTranslation',
                            'interface' => 'Sylius\\Component\\Product\\Model\\ProductVariantTranslationInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductVariantTranslationType',
                        ],
                    ],
                ],
                'sylius.product_variant_translation' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Product\\ProductVariantTranslation',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductVariantTranslationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductVariantTranslationType',
                    ],
                ],
                'sylius.product_option' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductOptionRepository',
                        'model' => 'App\\Entity\\Product\\ProductOption',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionType',
                    ],
                    'translation' => [
                        'classes' => [
                            'model' => 'App\\Entity\\Product\\ProductOptionTranslation',
                            'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionTranslationInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionTranslationType',
                        ],
                    ],
                ],
                'sylius.product_option_translation' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Product\\ProductOptionTranslation',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionTranslationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionTranslationType',
                    ],
                ],
                'sylius.product_association_type' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'repository' => 'Sylius\\Bundle\\ProductBundle\\Doctrine\\ORM\\ProductAssociationTypeRepository',
                        'model' => 'App\\Entity\\Product\\ProductAssociationType',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductAssociationTypeInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeType',
                    ],
                    'translation' => [
                        'classes' => [
                            'model' => 'App\\Entity\\Product\\ProductAssociationTypeTranslation',
                            'interface' => 'Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslationInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeTranslationType',
                        ],
                    ],
                ],
                'sylius.product_association_type_translation' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Product\\ProductAssociationTypeTranslation',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeTranslationType',
                    ],
                ],
                'sylius.product_option_value' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Product\\ProductOptionValue',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionValueInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionValueType',
                    ],
                    'translation' => [
                        'classes' => [
                            'model' => 'App\\Entity\\Product\\ProductOptionValueTranslation',
                            'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionValueTranslationInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionValueTranslationType',
                        ],
                    ],
                ],
                'sylius.product_option_value_translation' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Product\\ProductOptionValueTranslation',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductOptionValueTranslationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionValueTranslationType',
                    ],
                ],
                'sylius.product_association' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Product\\ProductAssociation',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductAssociationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationType',
                    ],
                ],
                'sylius.channel' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Channel\\Channel',
                        'interface' => 'Sylius\\Component\\Channel\\Model\\ChannelInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ChannelBundle\\Form\\Type\\ChannelType',
                    ],
                ],
                'sylius.product_attribute' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Product\\ProductAttribute',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeInterface',
                        'controller' => 'Sylius\\Bundle\\ProductBundle\\Controller\\ProductAttributeController',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeType',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                    ],
                    'translation' => [
                        'classes' => [
                            'model' => 'App\\Entity\\Product\\ProductAttributeTranslation',
                            'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeTranslationInterface',
                            'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeTranslationType',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        ],
                    ],
                ],
                'sylius.product_attribute_translation' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Product\\ProductAttributeTranslation',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeTranslationInterface',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeTranslationType',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ],
                ],
                'sylius.product_attribute_value' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Product\\ProductAttributeValue',
                        'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeValueInterface',
                        'repository' => 'Sylius\\Bundle\\ProductBundle\\Doctrine\\ORM\\ProductAttributeValueRepository',
                        'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeValueType',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ],
                ],
                'sylius.tax_rate' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Taxation\\TaxRate',
                        'interface' => 'Sylius\\Component\\Taxation\\Model\\TaxRateInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxRateType',
                    ],
                ],
                'sylius.tax_category' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Taxation\\TaxCategory',
                        'interface' => 'Sylius\\Component\\Taxation\\Model\\TaxCategoryInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxCategoryType',
                    ],
                ],
                'sylius.shipment' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Shipping\\Shipment',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShipmentRepository',
                        'interface' => 'Sylius\\Component\\Shipping\\Model\\ShipmentInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentType',
                    ],
                ],
                'sylius.shipment_unit' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Order\\OrderItemUnit',
                        'interface' => 'Sylius\\Component\\Shipping\\Model\\ShipmentUnitInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ],
                ],
                'sylius.shipping_method' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Shipping\\ShippingMethod',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShippingMethodRepository',
                        'interface' => 'Sylius\\Component\\Shipping\\Model\\ShippingMethodInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodType',
                    ],
                    'translation' => [
                        'classes' => [
                            'model' => 'App\\Entity\\Shipping\\ShippingMethodTranslation',
                            'interface' => 'Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslationInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodTranslationType',
                        ],
                    ],
                ],
                'sylius.shipping_method_translation' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Shipping\\ShippingMethodTranslation',
                        'interface' => 'Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodTranslationType',
                    ],
                ],
                'sylius.shipping_category' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShippingCategoryRepository',
                        'model' => 'App\\Entity\\Shipping\\ShippingCategory',
                        'interface' => 'Sylius\\Component\\Shipping\\Model\\ShippingCategoryInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingCategoryType',
                    ],
                ],
                'sylius.payment' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Payment\\Payment',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\PaymentRepository',
                        'interface' => 'Sylius\\Component\\Payment\\Model\\PaymentInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentType',
                    ],
                ],
                'sylius.payment_method' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Payment\\PaymentMethod',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\PaymentMethodRepository',
                        'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\PaymentMethodController',
                        'interface' => 'Sylius\\Component\\Payment\\Model\\PaymentMethodInterface',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        'form' => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodType',
                    ],
                    'translation' => [
                        'classes' => [
                            'model' => 'App\\Entity\\Payment\\PaymentMethodTranslation',
                            'interface' => 'Sylius\\Component\\Payment\\Model\\PaymentMethodTranslationInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            'form' => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodTranslationType',
                        ],
                    ],
                ],
                'sylius.payment_method_translation' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Payment\\PaymentMethodTranslation',
                        'interface' => 'Sylius\\Component\\Payment\\Model\\PaymentMethodTranslationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodTranslationType',
                    ],
                ],
                'sylius.promotion_subject' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Order\\Order',
                    ],
                ],
                'sylius.promotion' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Promotion\\Promotion',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\PromotionRepository',
                        'interface' => 'Sylius\\Component\\Promotion\\Model\\PromotionInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionType',
                    ],
                ],
                'sylius.promotion_coupon' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Promotion\\PromotionCoupon',
                        'repository' => 'Sylius\\Bundle\\PromotionBundle\\Doctrine\\ORM\\PromotionCouponRepository',
                        'interface' => 'Sylius\\Component\\Promotion\\Model\\PromotionCouponInterface',
                        'controller' => 'Sylius\\Bundle\\PromotionBundle\\Controller\\PromotionCouponController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionCouponType',
                    ],
                ],
                'sylius.promotion_rule' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Promotion\\PromotionRule',
                        'interface' => 'Sylius\\Component\\Promotion\\Model\\PromotionRuleInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionRuleType',
                    ],
                ],
                'sylius.promotion_action' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Promotion\\PromotionAction',
                        'interface' => 'Sylius\\Component\\Promotion\\Model\\PromotionActionInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionActionType',
                    ],
                ],
                'sylius.address' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Addressing\\Address',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\AddressRepository',
                        'interface' => 'Sylius\\Component\\Addressing\\Model\\AddressInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\AddressType',
                    ],
                ],
                'sylius.country' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Addressing\\Country',
                        'interface' => 'Sylius\\Component\\Addressing\\Model\\CountryInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\CountryType',
                    ],
                ],
                'sylius.province' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Addressing\\Province',
                        'interface' => 'Sylius\\Component\\Addressing\\Model\\ProvinceInterface',
                        'controller' => 'Sylius\\Bundle\\AddressingBundle\\Controller\\ProvinceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ProvinceType',
                    ],
                ],
                'sylius.zone' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Addressing\\Zone',
                        'interface' => 'Sylius\\Component\\Addressing\\Model\\ZoneInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneType',
                    ],
                ],
                'sylius.zone_member' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Addressing\\ZoneMember',
                        'interface' => 'Sylius\\Component\\Addressing\\Model\\ZoneMemberInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberType',
                    ],
                ],
                'sylius.address_log_entry' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'Sylius\\Component\\Addressing\\Model\\AddressLogEntry',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'repository' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\ResourceLogEntryRepository',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ],
                ],
                'sylius.inventory_unit' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Order\\OrderItemUnit',
                        'interface' => 'Sylius\\Component\\Inventory\\Model\\InventoryUnitInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ],
                ],
                'sylius.taxon' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Taxonomy\\Taxon',
                        'repository' => 'Sylius\\Bundle\\TaxonomyBundle\\Doctrine\\ORM\\TaxonRepository',
                        'interface' => 'Sylius\\Component\\Taxonomy\\Model\\TaxonInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonType',
                    ],
                    'translation' => [
                        'classes' => [
                            'model' => 'App\\Entity\\Taxonomy\\TaxonTranslation',
                            'interface' => 'Sylius\\Component\\Taxonomy\\Model\\TaxonTranslationInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonTranslationType',
                        ],
                    ],
                ],
                'sylius.taxon_translation' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Taxonomy\\TaxonTranslation',
                        'interface' => 'Sylius\\Component\\Taxonomy\\Model\\TaxonTranslationInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonTranslationType',
                    ],
                ],
                'sylius.admin_user' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\User\\AdminUser',
                        'interface' => 'Sylius\\Component\\Core\\Model\\AdminUserInterface',
                        'repository' => 'Sylius\\Bundle\\UserBundle\\Doctrine\\ORM\\UserRepository',
                        'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\User\\AdminUserType',
                        'controller' => 'Sylius\\Bundle\\UserBundle\\Controller\\UserController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ],
                    'templates' => 'SyliusUserBundle:User',
                    'encoder' => NULL,
                    'resetting' => [
                        'token' => [
                            'ttl' => 'P1D',
                            'length' => 16,
                            'field_name' => 'passwordResetToken',
                        ],
                        'pin' => [
                            'length' => 4,
                            'field_name' => 'passwordResetToken',
                        ],
                    ],
                    'verification' => [
                        'token' => [
                            'length' => 16,
                            'field_name' => 'emailVerificationToken',
                        ],
                    ],
                ],
                'sylius.shop_user' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\User\\ShopUser',
                        'interface' => 'Sylius\\Component\\Core\\Model\\ShopUserInterface',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\UserRepository',
                        'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\User\\ShopUserType',
                        'controller' => 'Sylius\\Bundle\\UserBundle\\Controller\\UserController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ],
                    'templates' => 'SyliusUserBundle:User',
                    'encoder' => NULL,
                    'resetting' => [
                        'token' => [
                            'ttl' => 'P1D',
                            'length' => 16,
                            'field_name' => 'passwordResetToken',
                        ],
                        'pin' => [
                            'length' => 4,
                            'field_name' => 'passwordResetToken',
                        ],
                    ],
                    'verification' => [
                        'token' => [
                            'length' => 16,
                            'field_name' => 'emailVerificationToken',
                        ],
                    ],
                ],
                'sylius.oauth_user' => [
                    'driver' => 'doctrine/orm',
                    'encoder' => false,
                    'classes' => [
                        'model' => 'App\\Entity\\User\\UserOAuth',
                        'interface' => 'Sylius\\Component\\User\\Model\\UserOAuthInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ],
                    'templates' => 'SyliusUserBundle:User',
                    'resetting' => [
                        'token' => [
                            'ttl' => 'P1D',
                            'length' => 16,
                            'field_name' => 'passwordResetToken',
                        ],
                        'pin' => [
                            'length' => 4,
                            'field_name' => 'passwordResetToken',
                        ],
                    ],
                    'verification' => [
                        'token' => [
                            'length' => 16,
                            'field_name' => 'emailVerificationToken',
                        ],
                    ],
                ],
                'sylius.customer' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Customer\\Customer',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\CustomerRepository',
                        'interface' => 'Sylius\\Component\\Customer\\Model\\CustomerInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerType',
                    ],
                ],
                'sylius.customer_group' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Customer\\CustomerGroup',
                        'interface' => 'Sylius\\Component\\Customer\\Model\\CustomerGroupInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerGroupType',
                    ],
                ],
                'sylius.product_review' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Product\\ProductReview',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductReviewRepository',
                        'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ProductReviewType',
                        'interface' => 'Sylius\\Component\\Review\\Model\\ReviewInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ],
                ],
                'sylius.product_reviewer' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Customer\\Customer',
                        'interface' => 'Sylius\\Component\\Review\\Model\\ReviewerInterface',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ],
                ],
                'sylius.product_taxon' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductTaxonRepository',
                        'model' => 'App\\Entity\\Product\\ProductTaxon',
                        'interface' => 'Sylius\\Component\\Core\\Model\\ProductTaxonInterface',
                        'controller' => 'Sylius\\Bundle\\CoreBundle\\Controller\\ProductTaxonController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ],
                ],
                'sylius.product_image' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Product\\ProductImage',
                        'interface' => 'Sylius\\Component\\Core\\Model\\ProductImageInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ],
                ],
                'sylius.taxon_image' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Taxonomy\\TaxonImage',
                        'interface' => 'Sylius\\Component\\Core\\Model\\TaxonImageInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ],
                ],
                'sylius.channel_pricing' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Channel\\ChannelPricing',
                        'interface' => 'Sylius\\Component\\Core\\Model\\ChannelPricingInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ChannelPricingType',
                    ],
                ],
                'sylius.avatar_image' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'Sylius\\Component\\Core\\Model\\AvatarImage',
                        'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\AvatarImageRepository',
                    ],
                ],
                'sylius.shop_billing_data' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'Sylius\\Component\\Core\\Model\\ShopBillingData',
                        'interface' => 'Sylius\\Component\\Core\\Model\\ShopBillingDataInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ShopBillingDataType',
                    ],
                ],
                'sylius.payment_security_token' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Payment\\PaymentSecurityToken',
                        'interface' => 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityTokenInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ],
                ],
                'sylius.gateway_config' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\Payment\\GatewayConfig',
                        'interface' => 'Sylius\\Bundle\\PayumBundle\\Model\\GatewayConfigInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\PayumBundle\\Form\\Type\\GatewayConfigType',
                    ],
                ],
                'sylius.api_user' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\User\\AdminUser',
                        'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\UserInterface',
                    ],
                ],
                'sylius.api_client' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\AdminApi\\Client',
                        'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\ClientInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ClientType',
                    ],
                ],
                'sylius.api_access_token' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\AdminApi\\AccessToken',
                        'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\AccessTokenInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ],
                ],
                'sylius.api_refresh_token' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\AdminApi\\RefreshToken',
                        'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\RefreshTokenInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ],
                ],
                'sylius.api_auth_code' => [
                    'driver' => 'doctrine/orm',
                    'classes' => [
                        'model' => 'App\\Entity\\AdminApi\\AuthCode',
                        'interface' => 'Sylius\\Bundle\\AdminApiBundle\\Model\\AuthCodeInterface',
                        'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                        'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                    ],
                ],
            ],
            'sylius.model.order.class' => 'App\\Entity\\Order\\Order',
            'sylius.controller.order.class' => 'Sylius\\Bundle\\CoreBundle\\Controller\\OrderController',
            'sylius.factory.order.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.order_item.class' => 'App\\Entity\\Order\\OrderItem',
            'sylius.controller.order_item.class' => 'Sylius\\Bundle\\OrderBundle\\Controller\\OrderItemController',
            'sylius.factory.order_item.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.order_item_unit.class' => 'App\\Entity\\Order\\OrderItemUnit',
            'sylius.controller.order_item_unit.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.order_item_unit.class' => 'Sylius\\Component\\Order\\Factory\\OrderItemUnitFactory',
            'sylius.model.order_sequence.class' => 'App\\Entity\\Order\\OrderSequence',
            'sylius.factory.order_sequence.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.adjustment.class' => 'App\\Entity\\Order\\Adjustment',
            'sylius.controller.adjustment.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.adjustment.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.order.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.order_item.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.cart.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.cart_item.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius_order.cart_expiration_period' => '2 days',
            'sylius_order.order_expiration_period' => '5 days',
            'sylius_money.locale' => 'en_US',
            'sylius.repository.exchange_rate.class' => 'Sylius\\Bundle\\CurrencyBundle\\Doctrine\\ORM\\ExchangeRateRepository',
            'sylius_currency.driver.doctrine/orm' => true,
            'sylius_currency.driver' => 'doctrine/orm',
            'sylius.model.currency.class' => 'App\\Entity\\Currency\\Currency',
            'sylius.controller.currency.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.currency.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.exchange_rate.class' => 'App\\Entity\\Currency\\ExchangeRate',
            'sylius.controller.exchange_rate.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.exchange_rate.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.currency.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.exchange_rate.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius_locale.driver.doctrine/orm' => true,
            'sylius_locale.driver' => 'doctrine/orm',
            'sylius.model.locale.class' => 'App\\Entity\\Locale\\Locale',
            'sylius.controller.locale.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.locale.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.locale.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius_locale.locale' => 'en_US',
            'sylius.repository.product.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductRepository',
            'sylius.repository.product_variant.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductVariantRepository',
            'sylius.repository.product_attribute.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.repository.product_option.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductOptionRepository',
            'sylius_product.driver.doctrine/orm' => true,
            'sylius_product.driver' => 'doctrine/orm',
            'sylius.model.product.class' => 'App\\Entity\\Product\\Product',
            'sylius.controller.product.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'sylius.model.product_translation.class' => 'App\\Entity\\Product\\ProductTranslation',
            'sylius.controller.product_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.product_variant.class' => 'App\\Entity\\Product\\ProductVariant',
            'sylius.controller.product_variant.class' => 'Sylius\\Bundle\\CoreBundle\\Controller\\ProductVariantController',
            'sylius.factory.product_variant.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'sylius.model.product_variant_translation.class' => 'App\\Entity\\Product\\ProductVariantTranslation',
            'sylius.controller.product_variant_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_variant_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.product_option.class' => 'App\\Entity\\Product\\ProductOption',
            'sylius.controller.product_option.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_option.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'sylius.model.product_option_translation.class' => 'App\\Entity\\Product\\ProductOptionTranslation',
            'sylius.controller.product_option_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_option_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.product_association_type.class' => 'App\\Entity\\Product\\ProductAssociationType',
            'sylius.controller.product_association_type.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_association_type.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'sylius.repository.product_association_type.class' => 'Sylius\\Bundle\\ProductBundle\\Doctrine\\ORM\\ProductAssociationTypeRepository',
            'sylius.model.product_association_type_translation.class' => 'App\\Entity\\Product\\ProductAssociationTypeTranslation',
            'sylius.controller.product_association_type_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_association_type_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.product_option_value.class' => 'App\\Entity\\Product\\ProductOptionValue',
            'sylius.controller.product_option_value.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_option_value.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'sylius.model.product_option_value_translation.class' => 'App\\Entity\\Product\\ProductOptionValueTranslation',
            'sylius.controller.product_option_value_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_option_value_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.product_association.class' => 'App\\Entity\\Product\\ProductAssociation',
            'sylius.controller.product_association.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_association.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.product_association.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.product_association_type.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.product_association_type_translation.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.product_attribute.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.product_attribute_translation.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.product_attribute_value.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.product.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.product_translation.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.product_generate_variants.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.product_option.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.product_option_translation.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.product_option_value.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.product_option_value_translation.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.product_variant.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.product_variant_translation.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.product_variant_generation.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.repository.channel.class' => 'Sylius\\Bundle\\ChannelBundle\\Doctrine\\ORM\\ChannelRepository',
            'sylius_channel.driver.doctrine/orm' => true,
            'sylius_channel.driver' => 'doctrine/orm',
            'sylius.model.channel.class' => 'App\\Entity\\Channel\\Channel',
            'sylius.controller.channel.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.channel.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.channel.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.model.attribute.interface' => 'Sylius\\Component\\Attribute\\AttributeType\\AttributeTypeInterface',
            'sylius.attribute.subjects' => [
                'product' => [
                    'subject' => 'App\\Entity\\Product\\Product',
                    'attribute' => [
                        'classes' => [
                            'model' => 'App\\Entity\\Product\\ProductAttribute',
                            'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeInterface',
                            'controller' => 'Sylius\\Bundle\\ProductBundle\\Controller\\ProductAttributeController',
                            'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeType',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
                        ],
                        'translation' => [
                            'classes' => [
                                'model' => 'App\\Entity\\Product\\ProductAttributeTranslation',
                                'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeTranslationInterface',
                                'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeTranslationType',
                                'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                                'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                            ],
                        ],
                    ],
                    'attribute_value' => [
                        'classes' => [
                            'model' => 'App\\Entity\\Product\\ProductAttributeValue',
                            'interface' => 'Sylius\\Component\\Product\\Model\\ProductAttributeValueInterface',
                            'repository' => 'Sylius\\Bundle\\ProductBundle\\Doctrine\\ORM\\ProductAttributeValueRepository',
                            'form' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeValueType',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        ],
                    ],
                ],
            ],
            'sylius_attribute.driver.doctrine/orm' => true,
            'sylius_attribute.driver' => 'doctrine/orm',
            'sylius.model.product_attribute.class' => 'App\\Entity\\Product\\ProductAttribute',
            'sylius.controller.product_attribute.class' => 'Sylius\\Bundle\\ProductBundle\\Controller\\ProductAttributeController',
            'sylius.factory.product_attribute.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'sylius.model.product_attribute_translation.class' => 'App\\Entity\\Product\\ProductAttributeTranslation',
            'sylius.controller.product_attribute_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_attribute_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.product_attribute_value.class' => 'App\\Entity\\Product\\ProductAttributeValue',
            'sylius.controller.product_attribute_value.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_attribute_value.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.product_attribute_value.class' => 'Sylius\\Bundle\\ProductBundle\\Doctrine\\ORM\\ProductAttributeValueRepository',
            'sylius.repository.tax_category.class' => 'Sylius\\Bundle\\TaxationBundle\\Doctrine\\ORM\\TaxCategoryRepository',
            'sylius_taxation.driver.doctrine/orm' => true,
            'sylius_taxation.driver' => 'doctrine/orm',
            'sylius.model.tax_rate.class' => 'App\\Entity\\Taxation\\TaxRate',
            'sylius.controller.tax_rate.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.tax_rate.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.tax_category.class' => 'App\\Entity\\Taxation\\TaxCategory',
            'sylius.controller.tax_category.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.tax_category.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.tax_category.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.tax_rate.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.tax_calculator.interface' => 'Sylius\\Component\\Taxation\\Calculator\\CalculatorInterface',
            'sylius.repository.shipping_method.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShippingMethodRepository',
            'sylius_shipping.driver.doctrine/orm' => true,
            'sylius_shipping.driver' => 'doctrine/orm',
            'sylius.model.shipment.class' => 'App\\Entity\\Shipping\\Shipment',
            'sylius.controller.shipment.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.shipment.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.shipment.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShipmentRepository',
            'sylius.model.shipment_unit.class' => 'App\\Entity\\Order\\OrderItemUnit',
            'sylius.controller.shipment_unit.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.shipment_unit.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.shipping_method.class' => 'App\\Entity\\Shipping\\ShippingMethod',
            'sylius.controller.shipping_method.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.shipping_method.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'sylius.model.shipping_method_translation.class' => 'App\\Entity\\Shipping\\ShippingMethodTranslation',
            'sylius.controller.shipping_method_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.shipping_method_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.shipping_category.class' => 'App\\Entity\\Shipping\\ShippingCategory',
            'sylius.controller.shipping_category.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.shipping_category.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.shipping_category.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShippingCategoryRepository',
            'sylius.form.type.shipping_method.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.shipping_method_translation.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.shipping_category.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.shipment.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.shipment_ship.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.shipping_methods_resolver.interface' => 'Sylius\\Component\\Shipping\\Resolver\\ShippingMethodsResolverInterface',
            'sylius_payment.driver.doctrine/orm' => true,
            'sylius_payment.driver' => 'doctrine/orm',
            'sylius.model.payment.class' => 'App\\Entity\\Payment\\Payment',
            'sylius.controller.payment.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.payment.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.payment.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\PaymentRepository',
            'sylius.model.payment_method.class' => 'App\\Entity\\Payment\\PaymentMethod',
            'sylius.controller.payment_method.class' => 'Sylius\\Bundle\\CoreBundle\\Controller\\PaymentMethodController',
            'sylius.factory.payment_method.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'sylius.repository.payment_method.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\PaymentMethodRepository',
            'sylius.model.payment_method_translation.class' => 'App\\Entity\\Payment\\PaymentMethodTranslation',
            'sylius.controller.payment_method_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.payment_method_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.payment.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.payment_method.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.payment_method_translation.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.payment_methods_resolver.interface' => 'Sylius\\Component\\Payment\\Resolver\\PaymentMethodsResolverInterface',
            'sylius.payment_gateways' => [
                'offline' => 'sylius.payum_gateway.offline',
            ],
            'sylius.mailer.sender_name' => 'Example.com',
            'sylius.mailer.sender_address' => 'no-reply@example.com',
            'sylius.mailer.emails' => [
                'order_confirmation_resent' => [
                    'subject' => 'sylius.emails.order_confirmation.subject',
                    'template' => '@SyliusAdmin/Email/orderConfirmation.html.twig',
                    'enabled' => true,
                ],
                'shipment_confirmation' => [
                    'subject' => 'sylius.emails.shipment_confirmation.subject',
                    'template' => '@SyliusAdmin/Email/shipmentConfirmation.html.twig',
                    'enabled' => true,
                ],
                'contact_request' => [
                    'subject' => 'sylius.emails.contact_request.subject',
                    'template' => '@SyliusShop/Email/contactRequest.html.twig',
                    'enabled' => true,
                ],
                'order_confirmation' => [
                    'subject' => 'sylius.emails.order_confirmation.subject',
                    'template' => '@SyliusShop/Email/orderConfirmation.html.twig',
                    'enabled' => true,
                ],
                'user_registration' => [
                    'subject' => 'sylius.emails.user_registration.subject',
                    'template' => '@SyliusShop/Email/userRegistration.html.twig',
                    'enabled' => true,
                ],
                'password_reset' => [
                    'subject' => 'sylius.emails.user.password_reset.subject',
                    'template' => '@SyliusShop/Email/passwordReset.html.twig',
                    'enabled' => true,
                ],
                'reset_password_token' => [
                    'subject' => 'sylius.emails.user.password_reset.subject',
                    'template' => '@SyliusShop/Email/passwordReset.html.twig',
                    'enabled' => true,
                ],
                'reset_password_pin' => [
                    'subject' => 'sylius.emails.user.password_reset.subject',
                    'template' => '@SyliusShop/Email/passwordReset.html.twig',
                    'enabled' => true,
                ],
                'verification_token' => [
                    'subject' => 'sylius.emails.user.verification_token.subject',
                    'template' => '@SyliusShop/Email/verification.html.twig',
                    'enabled' => true,
                ],
            ],
            'sylius.mailer.templates' => [

            ],
            'sylius.form.type.promotion.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.promotion_action.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.promotion_rule.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.promotion_coupon.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.repository.promotion.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\PromotionRepository',
            'sylius.repository.promotion_coupon.class' => 'Sylius\\Bundle\\PromotionBundle\\Doctrine\\ORM\\PromotionCouponRepository',
            'sylius_promotion.driver.doctrine/orm' => true,
            'sylius_promotion.driver' => 'doctrine/orm',
            'sylius.model.promotion_subject.class' => 'App\\Entity\\Order\\Order',
            'sylius.model.promotion.class' => 'App\\Entity\\Promotion\\Promotion',
            'sylius.controller.promotion.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.promotion.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.promotion_coupon.class' => 'App\\Entity\\Promotion\\PromotionCoupon',
            'sylius.controller.promotion_coupon.class' => 'Sylius\\Bundle\\PromotionBundle\\Controller\\PromotionCouponController',
            'sylius.factory.promotion_coupon.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.promotion_rule.class' => 'App\\Entity\\Promotion\\PromotionRule',
            'sylius.controller.promotion_rule.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.promotion_rule.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.promotion_action.class' => 'App\\Entity\\Promotion\\PromotionAction',
            'sylius.controller.promotion_action.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.promotion_action.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius_addressing.driver.doctrine/orm' => true,
            'sylius_addressing.driver' => 'doctrine/orm',
            'sylius.model.address.class' => 'App\\Entity\\Addressing\\Address',
            'sylius.controller.address.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.address.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.address.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\AddressRepository',
            'sylius.model.country.class' => 'App\\Entity\\Addressing\\Country',
            'sylius.controller.country.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.country.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.province.class' => 'App\\Entity\\Addressing\\Province',
            'sylius.controller.province.class' => 'Sylius\\Bundle\\AddressingBundle\\Controller\\ProvinceController',
            'sylius.factory.province.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.zone.class' => 'App\\Entity\\Addressing\\Zone',
            'sylius.controller.zone.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.zone.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.zone_member.class' => 'App\\Entity\\Addressing\\ZoneMember',
            'sylius.controller.zone_member.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.zone_member.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.address_log_entry.class' => 'Sylius\\Component\\Addressing\\Model\\AddressLogEntry',
            'sylius.controller.address_log_entry.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.address_log_entry.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.address_log_entry.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\ResourceLogEntryRepository',
            'sylius.form.type.address.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.country.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.province.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.zone.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.zone_member.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.scope.zone' => [
                'shipping' => 'sylius.form.zone.scopes.shipping',
                'tax' => 'sylius.form.zone.scopes.tax',
                'all' => 'sylius.form.zone.scopes.all',
            ],
            'sylius_inventory.driver.doctrine/orm' => true,
            'sylius_inventory.driver' => 'doctrine/orm',
            'sylius.model.inventory_unit.class' => 'App\\Entity\\Order\\OrderItemUnit',
            'sylius.controller.inventory_unit.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.inventory_unit.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.taxon.class' => 'Sylius\\Bundle\\TaxonomyBundle\\Doctrine\\ORM\\TaxonRepository',
            'sylius_taxonomy.driver.doctrine/orm' => true,
            'sylius_taxonomy.driver' => 'doctrine/orm',
            'sylius.model.taxon.class' => 'App\\Entity\\Taxonomy\\Taxon',
            'sylius.controller.taxon.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.taxon.class' => 'Sylius\\Component\\Resource\\Factory\\TranslatableFactory',
            'sylius.model.taxon_translation.class' => 'App\\Entity\\Taxonomy\\TaxonTranslation',
            'sylius.controller.taxon_translation.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.taxon_translation.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.taxon.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.taxon_translation.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.taxon_position.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.repository.user.class' => 'Sylius\\Bundle\\UserBundle\\Doctrine\\ORM\\UserRepository',
            'sylius.user.users' => [
                'admin' => [
                    'user' => [
                        'classes' => [
                            'model' => 'App\\Entity\\User\\AdminUser',
                            'interface' => 'Sylius\\Component\\Core\\Model\\AdminUserInterface',
                            'repository' => 'Sylius\\Bundle\\UserBundle\\Doctrine\\ORM\\UserRepository',
                            'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\User\\AdminUserType',
                            'controller' => 'Sylius\\Bundle\\UserBundle\\Controller\\UserController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        ],
                        'templates' => 'SyliusUserBundle:User',
                        'encoder' => NULL,
                        'resetting' => [
                            'token' => [
                                'ttl' => 'P1D',
                                'length' => 16,
                                'field_name' => 'passwordResetToken',
                            ],
                            'pin' => [
                                'length' => 4,
                                'field_name' => 'passwordResetToken',
                            ],
                        ],
                        'verification' => [
                            'token' => [
                                'length' => 16,
                                'field_name' => 'emailVerificationToken',
                            ],
                        ],
                    ],
                ],
                'shop' => [
                    'user' => [
                        'classes' => [
                            'model' => 'App\\Entity\\User\\ShopUser',
                            'interface' => 'Sylius\\Component\\Core\\Model\\ShopUserInterface',
                            'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\UserRepository',
                            'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\User\\ShopUserType',
                            'controller' => 'Sylius\\Bundle\\UserBundle\\Controller\\UserController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        ],
                        'templates' => 'SyliusUserBundle:User',
                        'encoder' => NULL,
                        'resetting' => [
                            'token' => [
                                'ttl' => 'P1D',
                                'length' => 16,
                                'field_name' => 'passwordResetToken',
                            ],
                            'pin' => [
                                'length' => 4,
                                'field_name' => 'passwordResetToken',
                            ],
                        ],
                        'verification' => [
                            'token' => [
                                'length' => 16,
                                'field_name' => 'emailVerificationToken',
                            ],
                        ],
                    ],
                ],
                'oauth' => [
                    'user' => [
                        'encoder' => false,
                        'classes' => [
                            'model' => 'App\\Entity\\User\\UserOAuth',
                            'interface' => 'Sylius\\Component\\User\\Model\\UserOAuthInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        ],
                        'templates' => 'SyliusUserBundle:User',
                        'resetting' => [
                            'token' => [
                                'ttl' => 'P1D',
                                'length' => 16,
                                'field_name' => 'passwordResetToken',
                            ],
                            'pin' => [
                                'length' => 4,
                                'field_name' => 'passwordResetToken',
                            ],
                        ],
                        'verification' => [
                            'token' => [
                                'length' => 16,
                                'field_name' => 'emailVerificationToken',
                            ],
                        ],
                    ],
                ],
            ],
            'sylius_user.driver.doctrine/orm' => true,
            'sylius_user.driver' => 'doctrine/orm',
            'sylius.model.admin_user.class' => 'App\\Entity\\User\\AdminUser',
            'sylius.controller.admin_user.class' => 'Sylius\\Bundle\\UserBundle\\Controller\\UserController',
            'sylius.factory.admin_user.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.admin_user.class' => 'Sylius\\Bundle\\UserBundle\\Doctrine\\ORM\\UserRepository',
            'sylius.model.shop_user.class' => 'App\\Entity\\User\\ShopUser',
            'sylius.controller.shop_user.class' => 'Sylius\\Bundle\\UserBundle\\Controller\\UserController',
            'sylius.factory.shop_user.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.shop_user.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\UserRepository',
            'sylius.model.oauth_user.class' => 'App\\Entity\\User\\UserOAuth',
            'sylius.controller.oauth_user.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.oauth_user.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.user_request_password_reset.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.user_reset_password.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.user_change_password.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius_customer.driver.doctrine/orm' => true,
            'sylius_customer.driver' => 'doctrine/orm',
            'sylius.model.customer.class' => 'App\\Entity\\Customer\\Customer',
            'sylius.controller.customer.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.customer.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.customer.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\CustomerRepository',
            'sylius.model.customer_group.class' => 'App\\Entity\\Customer\\CustomerGroup',
            'sylius.controller.customer_group.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.customer_group.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.customer.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.customer_profile.validation_groups' => [
                0 => 'sylius',
                1 => 'sylius_customer_profile',
            ],
            'sylius.form.type.customer_group.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.review.subjects' => [
                'product' => [
                    'subject' => 'App\\Entity\\Product\\Product',
                    'review' => [
                        'classes' => [
                            'model' => 'App\\Entity\\Product\\ProductReview',
                            'repository' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductReviewRepository',
                            'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ProductReviewType',
                            'interface' => 'Sylius\\Component\\Review\\Model\\ReviewInterface',
                            'controller' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        ],
                    ],
                    'reviewer' => [
                        'classes' => [
                            'model' => 'App\\Entity\\Customer\\Customer',
                            'interface' => 'Sylius\\Component\\Review\\Model\\ReviewerInterface',
                            'factory' => 'Sylius\\Component\\Resource\\Factory\\Factory',
                        ],
                    ],
                ],
            ],
            'sylius_review.driver.doctrine/orm' => true,
            'sylius_review.driver' => 'doctrine/orm',
            'sylius.model.product_review.class' => 'App\\Entity\\Product\\ProductReview',
            'sylius.controller.product_review.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_review.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.product_review.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductReviewRepository',
            'sylius.model.product_reviewer.class' => 'App\\Entity\\Customer\\Customer',
            'sylius.factory.product_reviewer.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius_core.driver.doctrine/orm' => true,
            'sylius_core.driver' => 'doctrine/orm',
            'sylius.model.product_taxon.class' => 'App\\Entity\\Product\\ProductTaxon',
            'sylius.controller.product_taxon.class' => 'Sylius\\Bundle\\CoreBundle\\Controller\\ProductTaxonController',
            'sylius.factory.product_taxon.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.repository.product_taxon.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductTaxonRepository',
            'sylius.model.product_image.class' => 'App\\Entity\\Product\\ProductImage',
            'sylius.controller.product_image.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.product_image.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.taxon_image.class' => 'App\\Entity\\Taxonomy\\TaxonImage',
            'sylius.controller.taxon_image.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.taxon_image.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.channel_pricing.class' => 'App\\Entity\\Channel\\ChannelPricing',
            'sylius.controller.channel_pricing.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.channel_pricing.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.avatar_image.class' => 'Sylius\\Component\\Core\\Model\\AvatarImage',
            'sylius.repository.avatar_image.class' => 'Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\AvatarImageRepository',
            'sylius.model.shop_billing_data.class' => 'Sylius\\Component\\Core\\Model\\ShopBillingData',
            'sylius.controller.shop_billing_data.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.shop_billing_data.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.checkout_address.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.checkout_select_shipping.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.checkout_shipment.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.checkout_select_payment.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.checkout_payment.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.checkout_complete.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.product_review.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.admin_user.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.shop_user.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.shop_user_registration.validation_groups' => [
                0 => 'sylius',
                1 => 'sylius_user_registration',
            ],
            'sylius.form.type.customer_guest.validation_groups' => [
                0 => 'sylius_customer_guest',
            ],
            'sylius.form.type.customer_checkout_guest.validation_groups' => [
                0 => 'sylius_customer_checkout_guest',
            ],
            'sylius.form.type.customer_simple_registration.validation_groups' => [
                0 => 'sylius',
                1 => 'sylius_user_registration',
            ],
            'sylius.form.type.customer_registration.validation_groups' => [
                0 => 'sylius',
                1 => 'sylius_user_registration',
                2 => 'sylius_customer_profile',
            ],
            'sylius.form.type.add_to_cart.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.channel_pricing.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.product_image.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius_installer_currency' => 'USD',
            'sylius.tax_calculation_strategy.interface' => 'Sylius\\Component\\Core\\Taxation\\Strategy\\TaxCalculationStrategyInterface',
            'sylius.state_machine.class' => 'Sylius\\Component\\Resource\\StateMachine\\StateMachine',
            'sylius.resource.settings' => [
                'paginate' => NULL,
                'limit' => NULL,
                'allowed_paginate' => [
                    0 => 10,
                    1 => 20,
                    2 => 30,
                ],
                'default_page_size' => 10,
                'sortable' => false,
                'sorting' => NULL,
                'filterable' => false,
                'criteria' => NULL,
            ],
            'sylius.orm.repository.class' => 'Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\EntityRepository',
            'sylius.translation.translatable_listener.doctrine.orm.class' => 'Sylius\\Bundle\\ResourceBundle\\EventListener\\ORMTranslatableListener',
            'sylius.grid.templates.action' => [
                'default' => '@SyliusUi/Grid/Action/default.html.twig',
                'create' => '@SyliusUi/Grid/Action/create.html.twig',
                'delete' => '@SyliusUi/Grid/Action/delete.html.twig',
                'show' => '@SyliusUi/Grid/Action/show.html.twig',
                'update' => '@SyliusUi/Grid/Action/update.html.twig',
                'apply_transition' => '@SyliusUi/Grid/Action/applyTransition.html.twig',
                'links' => '@SyliusUi/Grid/Action/links.html.twig',
                'archive' => '@SyliusUi/Grid/Action/archive.html.twig',
                'create_payment_method' => '@SyliusAdmin/PaymentMethod/Grid/Action/create.html.twig',
                'create_product_attribute' => '@SyliusAdmin/ProductAttribute/Grid/Action/create.html.twig',
                'generate_variants' => '@SyliusAdmin/Product/Grid/Action/generateVariants.html.twig',
                'ship_with_tracking_code' => '@SyliusAdmin/Shipment/Grid/Action/shipWithTrackingCode.html.twig',
                'update_product_positions' => '@SyliusAdmin/Product/Grid/Action/updatePositions.html.twig',
                'update_product_variant_positions' => '@SyliusAdmin/ProductVariant/Grid/Action/updatePositions.html.twig',
                'pay' => '@SyliusShop/Account/Order/Grid/Action/_pay_deprecated.html.twig',
                'shop_show' => '@SyliusShop/Grid/Action/show.html.twig',
                'shop_pay' => '@SyliusShop/Account/Order/Grid/Action/pay.html.twig',
            ],
            'sylius.grid.templates.bulk_action' => [
                'delete' => '@SyliusUi/Grid/BulkAction/delete.html.twig',
            ],
            'sylius.grid.templates.filter' => [
                'string' => '@SyliusUi/Grid/Filter/string.html.twig',
                'boolean' => '@SyliusUi/Grid/Filter/boolean.html.twig',
                'date' => '@SyliusUi/Grid/Filter/date.html.twig',
                'entity' => '@SyliusUi/Grid/Filter/entity.html.twig',
                'money' => '@SyliusUi/Grid/Filter/money.html.twig',
                'exists' => '@SyliusUi/Grid/Filter/exists.html.twig',
                'select' => '@SyliusUi/Grid/Filter/select.html.twig',
                'shop_string' => '@SyliusShop/Grid/Filter/string.html.twig',
            ],
            'sylius.grids_definitions' => [
                'sylius_admin_address_log_entry' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'Sylius\\Component\\Addressing\\Model\\AddressLogEntry',
                            'repository' => [
                                'method' => 'createByObjectIdQueryBuilder',
                                'arguments' => [
                                    'objectId' => '$id',
                                ],
                            ],
                        ],
                    ],
                    'fields' => [
                        'action' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.action',
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/logAction.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'loggedAt' => [
                            'type' => 'datetime',
                            'label' => 'sylius.ui.logged_at',
                            'options' => [
                                'format' => 'd-m-Y H:i:s',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'data' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.changes',
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/logData.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'sorting' => [

                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                    'filters' => [

                    ],
                    'actions' => [

                    ],
                ],
                'sylius_admin_admin_user' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\User\\AdminUser',
                        ],
                    ],
                    'sorting' => [
                        'createdAt' => 'desc',
                    ],
                    'fields' => [
                        'firstName' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.first_name',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'lastName' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.last_name',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'username' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.username',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'email' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.email',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'createdAt' => [
                            'type' => 'datetime',
                            'label' => 'sylius.ui.registration_date',
                            'sortable' => NULL,
                            'options' => [
                                'format' => 'd-m-Y H:i',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'enabled' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.enabled',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/enabled.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'filters' => [
                        'search' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => [
                                'fields' => [
                                    0 => 'email',
                                    1 => 'username',
                                    2 => 'firstName',
                                    3 => 'lastName',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                        'enabled' => [
                            'type' => 'boolean',
                            'label' => 'sylius.ui.enabled',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'create' => [
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'item' => [
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'bulk' => [
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_channel' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Channel\\Channel',
                        ],
                    ],
                    'sorting' => [
                        'nameAndDescription' => 'asc',
                    ],
                    'fields' => [
                        'nameAndDescription' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.name',
                            'path' => '.',
                            'sortable' => 'name',
                            'options' => [
                                'template' => '@SyliusAdmin/Channel/Grid/Field/name.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'code' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.code',
                            'path' => '.',
                            'sortable' => 'code',
                            'options' => [
                                'template' => '@SyliusAdmin/Channel/Grid/Field/code.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'themeName' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.theme',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusAdmin/Channel/Grid/Field/themeName.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'enabled' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.enabled',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/enabled.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'filters' => [
                        'search' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => [
                                'fields' => [
                                    0 => 'code',
                                    1 => 'name',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                        'enabled' => [
                            'type' => 'boolean',
                            'label' => 'sylius.ui.enabled',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'create' => [
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'item' => [
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'bulk' => [
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_country' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Addressing\\Country',
                        ],
                    ],
                    'sorting' => [
                        'code' => 'asc',
                    ],
                    'fields' => [
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.name',
                            'path' => '.',
                            'sortable' => 'code',
                            'options' => [
                                'template' => '@SyliusAdmin/Country/Grid/Field/name.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'enabled' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.enabled',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/enabled.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'filters' => [
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                        'enabled' => [
                            'type' => 'boolean',
                            'label' => 'sylius.ui.enabled',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'create' => [
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'item' => [
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_currency' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Currency\\Currency',
                        ],
                    ],
                    'sorting' => [
                        'code' => 'asc',
                    ],
                    'fields' => [
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                    ],
                    'filters' => [
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'create' => [
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'item' => [
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_customer' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Customer\\Customer',
                        ],
                    ],
                    'sorting' => [
                        'createdAt' => 'desc',
                    ],
                    'fields' => [
                        'firstName' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.first_name',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'lastName' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.last_name',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'email' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.email',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'createdAt' => [
                            'type' => 'datetime',
                            'label' => 'sylius.ui.registration_date',
                            'sortable' => NULL,
                            'options' => [
                                'format' => 'd-m-Y H:i',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'enabled' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.enabled',
                            'path' => '.',
                            'options' => [
                                'template' => '@SyliusAdmin/Customer/Grid/Field/enabled.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'verified' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.verified',
                            'path' => '.',
                            'options' => [
                                'template' => '@SyliusAdmin/Customer/Grid/Field/verified.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'filters' => [
                        'search' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => [
                                'fields' => [
                                    0 => 'email',
                                    1 => 'firstName',
                                    2 => 'lastName',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'create' => [
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'item' => [
                            'show_orders' => [
                                'type' => 'show',
                                'label' => 'sylius.ui.show_orders',
                                'options' => [
                                    'link' => [
                                        'route' => 'sylius_admin_customer_order_index',
                                        'parameters' => [
                                            'id' => 'resource.id',
                                        ],
                                    ],
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                            'show' => [
                                'type' => 'show',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_customer_group' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Customer\\CustomerGroup',
                        ],
                    ],
                    'sorting' => [
                        'name' => 'asc',
                    ],
                    'fields' => [
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                    ],
                    'filters' => [
                        'search' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => [
                                'fields' => [
                                    0 => 'code',
                                    1 => 'name',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'create' => [
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'item' => [
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'bulk' => [
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_customer_order' => [
                    'extends' => 'sylius_admin_order',
                    'driver' => [
                        'options' => [
                            'repository' => [
                                'method' => 'createByCustomerIdQueryBuilder',
                                'arguments' => [
                                    'customerId' => '$id',
                                ],
                            ],
                        ],
                        'name' => 'doctrine/orm',
                    ],
                    'fields' => [
                        'customer' => [
                            'type' => 'string',
                            'enabled' => false,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                    ],
                    'sorting' => [
                        'number' => 'desc',
                    ],
                    'filters' => [
                        'customer' => [
                            'type' => 'string',
                            'enabled' => false,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                    'actions' => [

                    ],
                ],
                'sylius_admin_exchange_rate' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Currency\\ExchangeRate',
                        ],
                    ],
                    'sorting' => [
                        'id' => 'desc',
                    ],
                    'fields' => [
                        'id' => [
                            'type' => 'string',
                            'enabled' => false,
                            'sortable' => NULL,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'sourceCurrency' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.source_currency',
                            'path' => '.',
                            'options' => [
                                'template' => '@SyliusAdmin/ExchangeRate/Grid/Field/sourceCurrencyName.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'targetCurrency' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.target_currency',
                            'path' => '.',
                            'options' => [
                                'template' => '@SyliusAdmin/ExchangeRate/Grid/Field/targetCurrencyName.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'ratio' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.ratio',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                    ],
                    'filters' => [
                        'currency' => [
                            'type' => 'entity',
                            'label' => 'sylius.ui.currency',
                            'options' => [
                                'fields' => [
                                    0 => 'sourceCurrency',
                                    1 => 'targetCurrency',
                                ],
                            ],
                            'form_options' => [
                                'class' => 'App\\Entity\\Currency\\Currency',
                                'choice_label' => 'name',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'create' => [
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'item' => [
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'bulk' => [
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_inventory' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Product\\ProductVariant',
                            'repository' => [
                                'method' => 'createInventoryListQueryBuilder',
                                'arguments' => [
                                    0 => 'en_US',
                                ],
                            ],
                        ],
                    ],
                    'fields' => [
                        'name' => [
                            'type' => 'twig',
                            'path' => '.',
                            'label' => 'sylius.ui.name',
                            'options' => [
                                'template' => '@SyliusAdmin/ProductVariant/Grid/Field/name.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'inventory' => [
                            'type' => 'twig',
                            'path' => '.',
                            'label' => 'sylius.ui.inventory',
                            'options' => [
                                'template' => '@SyliusAdmin/ProductVariant/Grid/Field/inventory.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'filters' => [
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'options' => [
                                'fields' => [
                                    0 => 'translation.name',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'item' => [
                            'update_product' => [
                                'type' => 'update',
                                'label' => 'sylius.ui.edit_product',
                                'options' => [
                                    'link' => [
                                        'route' => 'sylius_admin_product_update',
                                        'parameters' => [
                                            'id' => 'resource.product.id',
                                        ],
                                    ],
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                            'update' => [
                                'type' => 'update',
                                'options' => [
                                    'link' => [
                                        'parameters' => [
                                            'id' => 'resource.id',
                                            'productId' => 'resource.product.id',
                                        ],
                                    ],
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                        ],
                    ],
                    'sorting' => [

                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_locale' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Locale\\Locale',
                        ],
                    ],
                    'sorting' => [
                        'code' => 'asc',
                    ],
                    'fields' => [
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.name',
                            'path' => '.',
                            'sortable' => 'code',
                            'options' => [
                                'template' => '@SyliusAdmin/Locale/Grid/Field/name.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'filters' => [
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'create' => [
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'item' => [
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_order' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Order\\Order',
                            'repository' => [
                                'method' => 'createListQueryBuilder',
                            ],
                        ],
                    ],
                    'sorting' => [
                        'number' => 'desc',
                    ],
                    'fields' => [
                        'date' => [
                            'type' => 'datetime',
                            'label' => 'sylius.ui.date',
                            'path' => 'checkoutCompletedAt',
                            'sortable' => 'checkoutCompletedAt',
                            'options' => [
                                'format' => 'd-m-Y H:i:s',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'number' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.number',
                            'path' => '.',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusAdmin/Order/Grid/Field/number.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'channel' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.channel',
                            'sortable' => 'channel.code',
                            'options' => [
                                'template' => '@SyliusAdmin/Order/Grid/Field/channel.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'customer' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.customer',
                            'sortable' => 'customer.lastName',
                            'options' => [
                                'template' => '@SyliusAdmin/Order/Grid/Field/customer.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'state' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.state',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/state.html.twig',
                                'vars' => [
                                    'labels' => '@SyliusAdmin/Order/Label/State',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'paymentState' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.payment_state',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/state.html.twig',
                                'vars' => [
                                    'labels' => '@SyliusAdmin/Order/Label/PaymentState',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'shippingState' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.shipping_state',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/state.html.twig',
                                'vars' => [
                                    'labels' => '@SyliusAdmin/Order/Label/ShippingState',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'total' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.total',
                            'path' => '.',
                            'sortable' => 'total',
                            'options' => [
                                'template' => '@SyliusAdmin/Order/Grid/Field/total.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'currencyCode' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.currency',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                    ],
                    'filters' => [
                        'number' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.number',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                        'customer' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.customer',
                            'options' => [
                                'fields' => [
                                    0 => 'customer.email',
                                    1 => 'customer.firstName',
                                    2 => 'customer.lastName',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                        'date' => [
                            'type' => 'date',
                            'label' => 'sylius.ui.date',
                            'options' => [
                                'field' => 'checkoutCompletedAt',
                                'inclusive_to' => true,
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                        'channel' => [
                            'type' => 'entity',
                            'label' => 'sylius.ui.channel',
                            'form_options' => [
                                'class' => 'App\\Entity\\Channel\\Channel',
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'total' => [
                            'type' => 'money',
                            'label' => 'sylius.ui.total',
                            'options' => [
                                'currency_field' => 'currencyCode',
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'item' => [
                            'show' => [
                                'type' => 'show',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_payment' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Payment\\Payment',
                            'repository' => [
                                'method' => 'createListQueryBuilder',
                            ],
                        ],
                    ],
                    'sorting' => [
                        'createdAt' => 'desc',
                    ],
                    'fields' => [
                        'createdAt' => [
                            'type' => 'datetime',
                            'label' => 'sylius.ui.date',
                            'sortable' => NULL,
                            'options' => [
                                'format' => 'd-m-Y H:i:s',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'number' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.order',
                            'path' => 'order',
                            'options' => [
                                'template' => '@SyliusAdmin/Order/Grid/Field/number.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'channel' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.channel',
                            'path' => 'order.channel',
                            'options' => [
                                'template' => '@SyliusAdmin/Order/Grid/Field/channel.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'customer' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.customer',
                            'path' => 'order.customer',
                            'options' => [
                                'template' => '@SyliusAdmin/Order/Grid/Field/customer.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'state' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.state',
                            'options' => [
                                'template' => '@SyliusAdmin/Common/Label/paymentState.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'filters' => [
                        'state' => [
                            'type' => 'select',
                            'label' => 'sylius.ui.state',
                            'form_options' => [
                                'choices' => [
                                    'sylius.ui.cancelled' => 'cancelled',
                                    'sylius.ui.completed' => 'completed',
                                    'sylius.ui.failed' => 'failed',
                                    'sylius.ui.new' => 'new',
                                    'sylius.ui.processing' => 'processing',
                                    'sylius.ui.refunded' => 'refunded',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'channel' => [
                            'type' => 'entity',
                            'label' => 'sylius.ui.channel',
                            'options' => [
                                'fields' => [
                                    0 => 'order.channel',
                                ],
                            ],
                            'form_options' => [
                                'class' => 'App\\Entity\\Channel\\Channel',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'actions' => [
                        'item' => [
                            'complete' => [
                                'type' => 'apply_transition',
                                'label' => 'sylius.ui.complete',
                                'icon' => 'payment',
                                'options' => [
                                    'link' => [
                                        'route' => 'sylius_admin_payment_complete',
                                        'parameters' => [
                                            'id' => 'resource.id',
                                        ],
                                    ],
                                    'class' => 'teal',
                                    'transition' => 'complete',
                                    'graph' => 'sylius_payment',
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_payment_method' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Payment\\PaymentMethod',
                            'repository' => [
                                'method' => 'createListQueryBuilder',
                                'arguments' => [
                                    0 => 'en_US',
                                ],
                            ],
                        ],
                    ],
                    'sorting' => [
                        'position' => 'asc',
                    ],
                    'fields' => [
                        'position' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.position',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/position.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'sortable' => 'translation.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'gateway' => [
                            'type' => 'twig',
                            'path' => 'gatewayConfig.factoryName',
                            'label' => 'sylius.ui.gateway',
                            'sortable' => 'gatewayConfig.factoryName',
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/humanized.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'enabled' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.enabled',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/enabled.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'filters' => [
                        'search' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => [
                                'fields' => [
                                    0 => 'code',
                                    1 => 'translation.name',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                        'enabled' => [
                            'type' => 'boolean',
                            'label' => 'sylius.ui.enabled',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'create' => [
                                'type' => 'create_payment_method',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'item' => [
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'bulk' => [
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_product' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Product\\Product',
                            'repository' => [
                                'method' => 'createListQueryBuilder',
                                'arguments' => [
                                    0 => 'en_US',
                                    1 => '$taxonId',
                                ],
                            ],
                        ],
                    ],
                    'sorting' => [
                        'code' => 'asc',
                    ],
                    'fields' => [
                        'image' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.image',
                            'path' => '.',
                            'options' => [
                                'template' => '@SyliusAdmin/Product/Grid/Field/image.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'sortable' => 'translation.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'mainTaxon' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.main_taxon',
                            'options' => [
                                'template' => '@SyliusAdmin/Product/Grid/Field/mainTaxon.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'enabled' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.enabled',
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/enabled.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'filters' => [
                        'search' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => [
                                'fields' => [
                                    0 => 'code',
                                    1 => 'translation.name',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                        'enabled' => [
                            'type' => 'boolean',
                            'label' => 'sylius.ui.enabled',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'create' => [
                                'type' => 'links',
                                'label' => 'sylius.ui.create',
                                'options' => [
                                    'class' => 'primary',
                                    'icon' => 'plus',
                                    'header' => [
                                        'icon' => 'cube',
                                        'label' => 'sylius.ui.type',
                                    ],
                                    'links' => [
                                        'simple' => [
                                            'label' => 'sylius.ui.simple_product',
                                            'icon' => 'plus',
                                            'route' => 'sylius_admin_product_create_simple',
                                        ],
                                        'configurable' => [
                                            'label' => 'sylius.ui.configurable_product',
                                            'icon' => 'plus',
                                            'route' => 'sylius_admin_product_create',
                                        ],
                                    ],
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                        ],
                        'item' => [
                            'details' => [
                                'label' => 'sylius.ui.details',
                                'type' => 'show',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'subitem' => [
                            'variants' => [
                                'type' => 'links',
                                'label' => 'sylius.ui.manage_variants',
                                'options' => [
                                    'icon' => 'cubes',
                                    'links' => [
                                        'index' => [
                                            'label' => 'sylius.ui.list_variants',
                                            'icon' => 'list',
                                            'route' => 'sylius_admin_product_variant_index',
                                            'parameters' => [
                                                'productId' => 'resource.id',
                                            ],
                                        ],
                                        'create' => [
                                            'label' => 'sylius.ui.create',
                                            'icon' => 'plus',
                                            'route' => 'sylius_admin_product_variant_create',
                                            'parameters' => [
                                                'productId' => 'resource.id',
                                            ],
                                        ],
                                        'generate' => [
                                            'label' => 'sylius.ui.generate',
                                            'icon' => 'random',
                                            'route' => 'sylius_admin_product_variant_generate',
                                            'visible' => 'resource.hasOptions',
                                            'parameters' => [
                                                'productId' => 'resource.id',
                                            ],
                                        ],
                                    ],
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                        ],
                        'bulk' => [
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_product_association_type' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Product\\ProductAssociationType',
                            'repository' => [
                                'method' => 'createListQueryBuilder',
                                'arguments' => [
                                    0 => 'en_US',
                                ],
                            ],
                        ],
                    ],
                    'sorting' => [
                        'code' => 'asc',
                    ],
                    'fields' => [
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                    ],
                    'filters' => [
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'options' => [
                                'fields' => [
                                    0 => 'translation.name',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'create' => [
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'item' => [
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'bulk' => [
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_product_attribute' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Product\\ProductAttribute',
                        ],
                    ],
                    'sorting' => [
                        'position' => 'asc',
                    ],
                    'fields' => [
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'position' => [
                            'type' => 'string',
                            'enabled' => false,
                            'sortable' => NULL,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'type' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.type',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/label.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'filters' => [
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'create' => [
                                'type' => 'create_product_attribute',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'item' => [
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'bulk' => [
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_product_from_taxon' => [
                    'extends' => 'sylius_admin_product',
                    'sorting' => [
                        'position' => 'asc',
                    ],
                    'fields' => [
                        'position' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.position',
                            'path' => '.',
                            'sortable' => 'productTaxon.position',
                            'options' => [
                                'template' => '@SyliusAdmin/Product/Grid/Field/position.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'update_positions' => [
                                'type' => 'update_product_positions',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [

                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                    'filters' => [

                    ],
                ],
                'sylius_admin_product_option' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Product\\ProductOption',
                            'repository' => [
                                'method' => 'createListQueryBuilder',
                                'arguments' => [
                                    0 => 'en_US',
                                ],
                            ],
                        ],
                    ],
                    'sorting' => [
                        'position' => 'asc',
                    ],
                    'fields' => [
                        'position' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.position',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/position.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'sortable' => 'translation.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                    ],
                    'filters' => [
                        'search' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => [
                                'fields' => [
                                    0 => 'code',
                                    1 => 'translation.name',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'create' => [
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'item' => [
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'bulk' => [
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_product_review' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Product\\ProductReview',
                        ],
                    ],
                    'sorting' => [
                        'date' => 'desc',
                    ],
                    'fields' => [
                        'date' => [
                            'type' => 'datetime',
                            'label' => 'sylius.ui.date',
                            'path' => 'createdAt',
                            'sortable' => 'createdAt',
                            'options' => [
                                'format' => 'd-m-Y H:i:s',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'title' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.title',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'rating' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.rating',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'status' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.status',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/state.html.twig',
                                'vars' => [
                                    'labels' => '@SyliusAdmin/ProductReview/Label/Status',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'reviewSubject' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.product',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'author' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.customer',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                    ],
                    'filters' => [
                        'title' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.title',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'item' => [
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'accept' => [
                                'type' => 'apply_transition',
                                'label' => 'sylius.ui.accept',
                                'icon' => 'checkmark',
                                'options' => [
                                    'link' => [
                                        'route' => 'sylius_admin_product_review_accept',
                                        'parameters' => [
                                            'id' => 'resource.id',
                                        ],
                                    ],
                                    'class' => 'green',
                                    'transition' => 'accept',
                                    'graph' => 'sylius_product_review',
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                            'reject' => [
                                'type' => 'apply_transition',
                                'label' => 'sylius.ui.reject',
                                'icon' => 'remove',
                                'options' => [
                                    'link' => [
                                        'route' => 'sylius_admin_product_review_reject',
                                        'parameters' => [
                                            'id' => 'resource.id',
                                        ],
                                    ],
                                    'class' => 'yellow',
                                    'transition' => 'reject',
                                    'graph' => 'sylius_product_review',
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'bulk' => [
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_product_variant' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Product\\ProductVariant',
                            'repository' => [
                                'method' => 'createQueryBuilderByProductId',
                                'arguments' => [
                                    0 => 'en_US',
                                    1 => '$productId',
                                ],
                            ],
                        ],
                    ],
                    'sorting' => [
                        'position' => 'asc',
                    ],
                    'fields' => [
                        'name' => [
                            'type' => 'twig',
                            'path' => '.',
                            'label' => 'sylius.ui.name',
                            'options' => [
                                'template' => '@SyliusAdmin/ProductVariant/Grid/Field/name.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'inventory' => [
                            'type' => 'twig',
                            'path' => '.',
                            'label' => 'sylius.ui.inventory',
                            'options' => [
                                'template' => '@SyliusAdmin/ProductVariant/Grid/Field/inventory.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'position' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.position',
                            'path' => '.',
                            'sortable' => 'position',
                            'options' => [
                                'template' => '@SyliusAdmin/ProductVariant/Grid/Field/position.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'filters' => [
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'options' => [
                                'fields' => [
                                    0 => 'translation.name',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'generate' => [
                                'type' => 'generate_variants',
                                'options' => [
                                    'product' => 'expr:service(\'sylius.repository.product\').find($productId)',
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                            'update_positions' => [
                                'type' => 'update_product_variant_positions',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'create' => [
                                'type' => 'create',
                                'options' => [
                                    'link' => [
                                        'parameters' => [
                                            'productId' => '$productId',
                                        ],
                                    ],
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                        ],
                        'item' => [
                            'update' => [
                                'type' => 'update',
                                'options' => [
                                    'link' => [
                                        'parameters' => [
                                            'id' => 'resource.id',
                                            'productId' => '$productId',
                                        ],
                                    ],
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                            'delete' => [
                                'type' => 'delete',
                                'options' => [
                                    'link' => [
                                        'parameters' => [
                                            'id' => 'resource.id',
                                            'productId' => '$productId',
                                        ],
                                    ],
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                        ],
                        'bulk' => [
                            'delete' => [
                                'type' => 'delete',
                                'options' => [
                                    'link' => [
                                        'parameters' => [
                                            'productId' => '$productId',
                                        ],
                                    ],
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_promotion' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Promotion\\Promotion',
                        ],
                    ],
                    'sorting' => [
                        'priority' => 'desc',
                    ],
                    'fields' => [
                        'priority' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.priority',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/position.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.name',
                            'path' => '.',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/nameAndDescription.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'couponBased' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.coupons',
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/yesNo.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'usage' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.usage',
                            'path' => '.',
                            'sortable' => 'used',
                            'options' => [
                                'template' => '@SyliusAdmin/Promotion/Grid/Field/usage.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'filters' => [
                        'search' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => [
                                'fields' => [
                                    0 => 'code',
                                    1 => 'name',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                        'couponBased' => [
                            'type' => 'boolean',
                            'label' => 'sylius.ui.coupon_based',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'create' => [
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'item' => [
                            'coupons' => [
                                'type' => 'links',
                                'label' => 'sylius.ui.manage_coupons',
                                'options' => [
                                    'visible' => 'resource.couponBased',
                                    'icon' => 'ticket',
                                    'links' => [
                                        'index' => [
                                            'label' => 'sylius.ui.list_coupons',
                                            'icon' => 'list',
                                            'route' => 'sylius_admin_promotion_coupon_index',
                                            'parameters' => [
                                                'promotionId' => 'resource.id',
                                            ],
                                        ],
                                        'create' => [
                                            'label' => 'sylius.ui.create',
                                            'icon' => 'plus',
                                            'route' => 'sylius_admin_promotion_coupon_create',
                                            'parameters' => [
                                                'promotionId' => 'resource.id',
                                            ],
                                        ],
                                        'generate' => [
                                            'label' => 'sylius.ui.generate',
                                            'icon' => 'random',
                                            'route' => 'sylius_admin_promotion_coupon_generate',
                                            'parameters' => [
                                                'promotionId' => 'resource.id',
                                            ],
                                        ],
                                    ],
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'bulk' => [
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_promotion_coupon' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Promotion\\PromotionCoupon',
                            'repository' => [
                                'method' => 'createQueryBuilderByPromotionId',
                                'arguments' => [
                                    'promotionId' => '$promotionId',
                                ],
                            ],
                        ],
                    ],
                    'fields' => [
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'usageLimit' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.usage_limit',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'perCustomerUsageLimit' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.per_customer_usage_limit',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'used' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.used',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'expiresAt' => [
                            'type' => 'datetime',
                            'label' => 'sylius.ui.expires_at',
                            'sortable' => NULL,
                            'options' => [
                                'format' => 'd-m-Y',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'filters' => [
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'generate' => [
                                'type' => 'default',
                                'label' => 'sylius.ui.generate',
                                'icon' => 'random',
                                'options' => [
                                    'link' => [
                                        'route' => 'sylius_admin_promotion_coupon_generate',
                                        'parameters' => [
                                            'promotionId' => '$promotionId',
                                        ],
                                    ],
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                            'create' => [
                                'type' => 'create',
                                'options' => [
                                    'link' => [
                                        'parameters' => [
                                            'promotionId' => '$promotionId',
                                        ],
                                    ],
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                        ],
                        'item' => [
                            'update' => [
                                'type' => 'update',
                                'options' => [
                                    'link' => [
                                        'parameters' => [
                                            'id' => 'resource.id',
                                            'promotionId' => '$promotionId',
                                        ],
                                    ],
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                            'delete' => [
                                'type' => 'delete',
                                'options' => [
                                    'link' => [
                                        'parameters' => [
                                            'id' => 'resource.id',
                                            'promotionId' => '$promotionId',
                                        ],
                                    ],
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                        ],
                        'bulk' => [
                            'delete' => [
                                'type' => 'delete',
                                'options' => [
                                    'link' => [
                                        'parameters' => [
                                            'promotionId' => '$promotionId',
                                        ],
                                    ],
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                        ],
                    ],
                    'sorting' => [

                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_shipment' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Shipping\\Shipment',
                            'repository' => [
                                'method' => 'createListQueryBuilder',
                            ],
                        ],
                    ],
                    'sorting' => [
                        'createdAt' => 'desc',
                    ],
                    'fields' => [
                        'createdAt' => [
                            'type' => 'datetime',
                            'label' => 'sylius.ui.created_at',
                            'sortable' => NULL,
                            'options' => [
                                'format' => 'd-m-Y H:i:s',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'shippedAt' => [
                            'type' => 'datetime',
                            'label' => 'sylius.ui.shipped_at',
                            'sortable' => NULL,
                            'options' => [
                                'format' => 'd-m-Y H:i:s',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'number' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.order',
                            'path' => 'order',
                            'options' => [
                                'template' => '@SyliusAdmin/Order/Grid/Field/number.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'channel' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.channel',
                            'path' => 'order.channel',
                            'options' => [
                                'template' => '@SyliusAdmin/Order/Grid/Field/channel.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'state' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.state',
                            'options' => [
                                'template' => '@SyliusAdmin/Common/Label/shipmentState.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'filters' => [
                        'state' => [
                            'type' => 'select',
                            'label' => 'sylius.ui.state',
                            'form_options' => [
                                'choices' => [
                                    'sylius.ui.cancelled' => 'cancelled',
                                    'sylius.ui.ready' => 'ready',
                                    'sylius.ui.shipped' => 'shipped',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'channel' => [
                            'type' => 'entity',
                            'label' => 'sylius.ui.channel',
                            'options' => [
                                'fields' => [
                                    0 => 'order.channel',
                                ],
                            ],
                            'form_options' => [
                                'class' => 'App\\Entity\\Channel\\Channel',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'actions' => [
                        'item' => [
                            'ship' => [
                                'type' => 'ship_with_tracking_code',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'show' => [
                                'type' => 'show',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_shipping_category' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Shipping\\ShippingCategory',
                            'repository' => [
                                'method' => 'createListQueryBuilder',
                            ],
                        ],
                    ],
                    'fields' => [
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'createdAt' => [
                            'type' => 'datetime',
                            'label' => 'sylius.ui.creation_date',
                            'options' => [
                                'format' => 'd-m-Y H:i',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'updatedAt' => [
                            'type' => 'datetime',
                            'label' => 'sylius.ui.updating_date',
                            'options' => [
                                'format' => 'd-m-Y H:i',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'filters' => [
                        'search' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => [
                                'fields' => [
                                    0 => 'code',
                                    1 => 'name',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'create' => [
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'item' => [
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'bulk' => [
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'sorting' => [

                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_shipping_method' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Shipping\\ShippingMethod',
                            'repository' => [
                                'method' => 'createListQueryBuilder',
                                'arguments' => [
                                    0 => 'en_US',
                                ],
                            ],
                        ],
                    ],
                    'sorting' => [
                        'position' => 'asc',
                    ],
                    'fields' => [
                        'position' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.position',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/position.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'sortable' => 'translation.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'zone' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.zone',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'enabled' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.enabled',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/enabled.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'filters' => [
                        'search' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => [
                                'fields' => [
                                    0 => 'code',
                                    1 => 'translation.name',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                        'enabled' => [
                            'type' => 'boolean',
                            'label' => 'sylius.ui.enabled',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                        'archival' => [
                            'type' => 'exists',
                            'label' => 'sylius.ui.archival',
                            'options' => [
                                'field' => 'archivedAt',
                            ],
                            'default_value' => false,
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'create' => [
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'item' => [
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'archive' => [
                                'type' => 'archive',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'bulk' => [
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_tax_category' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Taxation\\TaxCategory',
                        ],
                    ],
                    'sorting' => [
                        'nameAndDescription' => 'asc',
                    ],
                    'fields' => [
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'nameAndDescription' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.name',
                            'path' => '.',
                            'sortable' => 'name',
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/nameAndDescription.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'filters' => [
                        'search' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => [
                                'fields' => [
                                    0 => 'code',
                                    1 => 'name',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'create' => [
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'item' => [
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'bulk' => [
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_tax_rate' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Taxation\\TaxRate',
                        ],
                    ],
                    'sorting' => [
                        'name' => 'asc',
                    ],
                    'fields' => [
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'zone' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.zone',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'category' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.category',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'amount' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.amount',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/percent.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'filters' => [
                        'search' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.search',
                            'options' => [
                                'fields' => [
                                    0 => 'code',
                                    1 => 'name',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'create' => [
                                'type' => 'create',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'item' => [
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'bulk' => [
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_taxon' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Taxonomy\\Taxon',
                            'repository' => [
                                'method' => 'createListQueryBuilder',
                            ],
                        ],
                    ],
                    'filters' => [
                        'code' => [
                            'type' => 'string',
                            'options' => [
                                'fields' => [
                                    0 => 'code',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'string',
                            'options' => [
                                'fields' => [
                                    0 => 'translation.name',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                    ],
                    'sorting' => [

                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                    'fields' => [

                    ],
                    'actions' => [

                    ],
                ],
                'sylius_admin_zone' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Addressing\\Zone',
                        ],
                    ],
                    'fields' => [
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'type' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.type',
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/label.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'filters' => [
                        'name' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                    ],
                    'actions' => [
                        'main' => [
                            'create' => [
                                'type' => 'links',
                                'label' => 'sylius.ui.create',
                                'options' => [
                                    'class' => 'primary',
                                    'icon' => 'plus',
                                    'header' => [
                                        'icon' => 'cube',
                                        'label' => 'sylius.ui.type',
                                    ],
                                    'links' => [
                                        'country' => [
                                            'label' => 'sylius.ui.zone_consisting_of_countries',
                                            'icon' => 'plus',
                                            'route' => 'sylius_admin_zone_create',
                                            'parameters' => [
                                                'type' => 'country',
                                            ],
                                        ],
                                        'province' => [
                                            'label' => 'sylius.ui.zone_consisting_of_provinces',
                                            'icon' => 'plus',
                                            'route' => 'sylius_admin_zone_create',
                                            'parameters' => [
                                                'type' => 'province',
                                            ],
                                        ],
                                        'zone' => [
                                            'label' => 'sylius.ui.zone_consisting_of_other_zones',
                                            'icon' => 'plus',
                                            'route' => 'sylius_admin_zone_create',
                                            'parameters' => [
                                                'type' => 'zone',
                                            ],
                                        ],
                                    ],
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                        ],
                        'item' => [
                            'update' => [
                                'type' => 'update',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                        'bulk' => [
                            'delete' => [
                                'type' => 'delete',
                                'enabled' => true,
                                'position' => 100,
                                'options' => [

                                ],
                            ],
                        ],
                    ],
                    'sorting' => [

                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                ],
                'sylius_admin_api_cart' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Order\\Order',
                            'repository' => [
                                'method' => 'createCartQueryBuilder',
                            ],
                        ],
                    ],
                    'sorting' => [
                        'number' => 'desc',
                    ],
                    'fields' => [
                        'channel' => [
                            'type' => 'string',
                            'path' => 'channel.code',
                            'sortable' => 'channel.code',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'number' => [
                            'type' => 'string',
                            'path' => '.',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'date' => [
                            'type' => 'datetime',
                            'path' => 'checkoutCompletedAt',
                            'sortable' => 'checkoutCompletedAt',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'customer' => [
                            'type' => 'string',
                            'sortable' => 'customer.email',
                            'path' => 'customer.email',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'total' => [
                            'type' => 'integer',
                            'sortable' => 'total',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'currencyCode' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.currency',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                    ],
                    'filters' => [
                        'number' => [
                            'type' => 'string',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                        'customer' => [
                            'type' => 'string',
                            'options' => [
                                'fields' => [
                                    0 => 'customer.email',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                        'date' => [
                            'type' => 'date',
                            'label' => 'sylius.ui.date',
                            'options' => [
                                'field' => 'checkoutCompletedAt',
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                        'channel' => [
                            'type' => 'string',
                            'options' => [
                                'fields' => [
                                    0 => 'channel.code',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                        'total' => [
                            'type' => 'money',
                            'options' => [
                                'currency_field' => 'currencyCode',
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                    'actions' => [

                    ],
                ],
                'sylius_admin_api_payment' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Payment\\Payment',
                            'repository' => [
                                'method' => 'createListQueryBuilder',
                            ],
                        ],
                    ],
                    'sorting' => [
                        'createdAt' => 'desc',
                    ],
                    'fields' => [
                        'amount' => [
                            'type' => 'integer',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'state' => [
                            'type' => 'string',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'createdAt' => [
                            'type' => 'datetime',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'updatedAt' => [
                            'type' => 'datetime',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                    ],
                    'filters' => [
                        'state' => [
                            'type' => 'string',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                    'actions' => [

                    ],
                ],
                'sylius_admin_api_product' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Product\\Product',
                            'repository' => [
                                'method' => 'createListQueryBuilder',
                                'arguments' => [
                                    0 => 'en_US',
                                    1 => '$taxonId',
                                ],
                            ],
                        ],
                    ],
                    'sorting' => [
                        'code' => 'asc',
                    ],
                    'fields' => [
                        'code' => [
                            'type' => 'string',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'string',
                            'sortable' => 'translation.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                    ],
                    'filters' => [
                        'search' => [
                            'type' => 'string',
                            'options' => [
                                'fields' => [
                                    0 => 'code',
                                    1 => 'translation.name',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                        'enabled' => [
                            'type' => 'boolean',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                    'actions' => [

                    ],
                ],
                'sylius_admin_api_product_review' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Product\\ProductReview',
                            'repository' => [
                                'method' => 'createQueryBuilderByProductCode',
                                'arguments' => [
                                    0 => 'en_US',
                                    1 => '$productCode',
                                ],
                            ],
                        ],
                    ],
                    'sorting' => [
                        'date' => 'desc',
                    ],
                    'fields' => [
                        'date' => [
                            'type' => 'datetime',
                            'label' => 'sylius.ui.date',
                            'path' => 'createdAt',
                            'sortable' => 'createdAt',
                            'options' => [
                                'format' => 'd-m-Y H:i:s',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'title' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.title',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'rating' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.rating',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'status' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.status',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'reviewSubject' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.product',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'author' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.customer',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                    ],
                    'filters' => [
                        'title' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.title',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                    'actions' => [

                    ],
                ],
                'sylius_admin_api_product_variant' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Product\\ProductVariant',
                            'repository' => [
                                'method' => 'createQueryBuilderByProductCode',
                                'arguments' => [
                                    0 => 'en_US',
                                    1 => '$productCode',
                                ],
                            ],
                        ],
                    ],
                    'sorting' => [
                        'position' => 'asc',
                    ],
                    'fields' => [
                        'name' => [
                            'type' => 'string',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'code' => [
                            'type' => 'string',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'position' => [
                            'type' => 'string',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                    ],
                    'filters' => [
                        'code' => [
                            'type' => 'string',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'string',
                            'options' => [
                                'fields' => [
                                    0 => 'translation.name',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                    'actions' => [

                    ],
                ],
                'sylius_admin_api_promotion' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Promotion\\Promotion',
                        ],
                    ],
                    'sorting' => [
                        'priority' => 'desc',
                    ],
                    'fields' => [
                        'priority' => [
                            'type' => 'integer',
                            'label' => 'sylius.ui.priority',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'code' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.code',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'string',
                            'label' => 'sylius.ui.name',
                            'path' => '.',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                    ],
                    'filters' => [
                        'search' => [
                            'type' => 'string',
                            'options' => [
                                'fields' => [
                                    0 => 'code',
                                    1 => 'name',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                        'couponBased' => [
                            'type' => 'boolean',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                    'actions' => [

                    ],
                ],
                'sylius_admin_api_shipment' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Shipping\\Shipment',
                            'repository' => [
                                'method' => 'createListQueryBuilder',
                            ],
                        ],
                    ],
                    'sorting' => [
                        'createdAt' => 'desc',
                    ],
                    'fields' => [
                        'state' => [
                            'type' => 'string',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'createdAt' => [
                            'type' => 'datetime',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'updatedAt' => [
                            'type' => 'datetime',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                    ],
                    'filters' => [
                        'state' => [
                            'type' => 'string',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                    'actions' => [

                    ],
                ],
                'sylius_admin_api_taxon' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Taxonomy\\Taxon',
                            'repository' => [
                                'method' => 'createListQueryBuilder',
                            ],
                        ],
                    ],
                    'filters' => [
                        'name' => [
                            'type' => 'string',
                            'options' => [
                                'fields' => [
                                    0 => 'translation.name',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                            'form_options' => [

                            ],
                        ],
                        'code' => [
                            'type' => 'string',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                            'form_options' => [

                            ],
                        ],
                    ],
                    'sorting' => [

                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                    'fields' => [

                    ],
                    'actions' => [

                    ],
                ],
                'sylius_shop_account_order' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Order\\Order',
                            'repository' => [
                                'method' => 'createByCustomerAndChannelIdQueryBuilder',
                                'arguments' => [
                                    0 => 'expr:service(\'sylius.context.customer\').getCustomer().getId()',
                                    1 => 'expr:service(\'sylius.context.channel\').getChannel().getId()',
                                ],
                            ],
                        ],
                    ],
                    'sorting' => [
                        'checkoutCompletedAt' => 'desc',
                    ],
                    'fields' => [
                        'number' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.number',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusShop/Account/Order/Grid/Field/number.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'checkoutCompletedAt' => [
                            'type' => 'datetime',
                            'label' => 'sylius.ui.date',
                            'sortable' => NULL,
                            'options' => [
                                'format' => 'm/d/Y',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'shippingAddress' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.ship_to',
                            'options' => [
                                'template' => '@SyliusShop/Account/Order/Grid/Field/address.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'total' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.total',
                            'path' => '.',
                            'sortable' => 'total',
                            'options' => [
                                'template' => '@SyliusShop/Account/Order/Grid/Field/total.html.twig',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                        'state' => [
                            'type' => 'twig',
                            'label' => 'sylius.ui.state',
                            'sortable' => NULL,
                            'options' => [
                                'template' => '@SyliusUi/Grid/Field/label.html.twig',
                                'vars' => [
                                    'labels' => '@SyliusShop/Account/Order/Label/State',
                                ],
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'actions' => [
                        'item' => [
                            'show' => [
                                'type' => 'shop_show',
                                'label' => 'sylius.ui.show',
                                'options' => [
                                    'link' => [
                                        'route' => 'sylius_shop_account_order_show',
                                        'parameters' => [
                                            'number' => 'resource.number',
                                        ],
                                    ],
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                            'pay' => [
                                'type' => 'shop_pay',
                                'label' => 'sylius.ui.pay',
                                'options' => [
                                    'link' => [
                                        'route' => 'sylius_shop_order_show',
                                        'parameters' => [
                                            'tokenValue' => 'resource.tokenValue',
                                        ],
                                    ],
                                ],
                                'enabled' => true,
                                'position' => 100,
                            ],
                        ],
                    ],
                    'limits' => [
                        0 => 10,
                        1 => 25,
                        2 => 50,
                    ],
                    'filters' => [

                    ],
                ],
                'sylius_shop_product' => [
                    'driver' => [
                        'name' => 'doctrine/orm',
                        'options' => [
                            'class' => 'App\\Entity\\Product\\Product',
                            'repository' => [
                                'method' => 'createShopListQueryBuilder',
                                'arguments' => [
                                    'channel' => 'expr:service(\'sylius.context.channel\').getChannel()',
                                    'taxon' => 'expr:notFoundOnNull(service(\'sylius.repository.taxon\').findOneBySlug($slug, service(\'sylius.context.locale\').getLocaleCode()))',
                                    'locale' => 'expr:service(\'sylius.context.locale\').getLocaleCode()',
                                    'sorting' => 'expr:service(\'request_stack\').getCurrentRequest().get(\'sorting\', [])',
                                    'includeAllDescendants' => 'expr:parameter(\'sylius_shop.product_grid.include_all_descendants\')',
                                ],
                            ],
                        ],
                    ],
                    'sorting' => [
                        'position' => 'asc',
                    ],
                    'limits' => [
                        0 => 9,
                        1 => 18,
                        2 => 27,
                    ],
                    'fields' => [
                        'createdAt' => [
                            'type' => 'datetime',
                            'sortable' => NULL,
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'position' => [
                            'type' => 'string ',
                            'sortable' => 'productTaxon.position',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'name' => [
                            'type' => 'string ',
                            'sortable' => 'translation.name',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                        'price' => [
                            'type' => 'int',
                            'sortable' => 'channelPricing.price',
                            'enabled' => true,
                            'position' => 100,
                            'options' => [

                            ],
                        ],
                    ],
                    'filters' => [
                        'search' => [
                            'type' => 'shop_string',
                            'label' => false,
                            'options' => [
                                'fields' => [
                                    0 => 'translation.name',
                                ],
                            ],
                            'form_options' => [
                                'type' => 'contains',
                            ],
                            'enabled' => true,
                            'position' => 100,
                        ],
                    ],
                    'actions' => [

                    ],
                ],
            ],
            'sm.configs' => [
                'sylius_order_checkout' => [
                    'class' => 'App\\Entity\\Order\\Order',
                    'property_path' => 'checkoutState',
                    'graph' => 'sylius_order_checkout',
                    'state_machine_class' => 'Sylius\\Component\\Resource\\StateMachine\\StateMachine',
                    'states' => [
                        0 => 'cart',
                        1 => 'addressed',
                        2 => 'shipping_selected',
                        3 => 'shipping_skipped',
                        4 => 'payment_skipped',
                        5 => 'payment_selected',
                        6 => 'completed',
                    ],
                    'transitions' => [
                        'address' => [
                            'from' => [
                                0 => 'cart',
                                1 => 'addressed',
                                2 => 'shipping_selected',
                                3 => 'shipping_skipped',
                                4 => 'payment_selected',
                                5 => 'payment_skipped',
                            ],
                            'to' => 'addressed',
                        ],
                        'skip_shipping' => [
                            'from' => [
                                0 => 'addressed',
                            ],
                            'to' => 'shipping_skipped',
                        ],
                        'select_shipping' => [
                            'from' => [
                                0 => 'addressed',
                                1 => 'shipping_selected',
                                2 => 'payment_selected',
                                3 => 'payment_skipped',
                            ],
                            'to' => 'shipping_selected',
                        ],
                        'skip_payment' => [
                            'from' => [
                                0 => 'shipping_selected',
                                1 => 'shipping_skipped',
                            ],
                            'to' => 'payment_skipped',
                        ],
                        'select_payment' => [
                            'from' => [
                                0 => 'payment_selected',
                                1 => 'shipping_skipped',
                                2 => 'shipping_selected',
                            ],
                            'to' => 'payment_selected',
                        ],
                        'complete' => [
                            'from' => [
                                0 => 'payment_selected',
                                1 => 'payment_skipped',
                            ],
                            'to' => 'completed',
                        ],
                    ],
                    'callbacks' => [
                        'after' => [
                            'sylius_process_cart' => [
                                'on' => [
                                    0 => 'select_shipping',
                                    1 => 'address',
                                    2 => 'select_payment',
                                    3 => 'skip_shipping',
                                    4 => 'skip_payment',
                                ],
                                'do' => [
                                    0 => '@sylius.order_processing.order_processor',
                                    1 => 'process',
                                ],
                                'args' => [
                                    0 => 'object',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_create_order' => [
                                'on' => [
                                    0 => 'complete',
                                ],
                                'do' => [
                                    0 => '@sm.callback.cascade_transition',
                                    1 => 'apply',
                                ],
                                'args' => [
                                    0 => 'object',
                                    1 => 'event',
                                    2 => '\'create\'',
                                    3 => '\'sylius_order\'',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_save_checkout_completion_date' => [
                                'on' => [
                                    0 => 'complete',
                                ],
                                'do' => [
                                    0 => 'object',
                                    1 => 'completeCheckout',
                                ],
                                'args' => [
                                    0 => 'object',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_control_payment_state' => [
                                'on' => [
                                    0 => 'complete',
                                ],
                                'do' => [
                                    0 => '@sylius.state_resolver.order_payment',
                                    1 => 'resolve',
                                ],
                                'args' => [
                                    0 => 'object',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_control_shipping_state' => [
                                'on' => [
                                    0 => 'complete',
                                ],
                                'do' => [
                                    0 => '@sylius.state_resolver.order_shipping',
                                    1 => 'resolve',
                                ],
                                'args' => [
                                    0 => 'object',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_skip_shipping' => [
                                'on' => [
                                    0 => 'address',
                                ],
                                'do' => [
                                    0 => '@sylius.state_resolver.order_checkout',
                                    1 => 'resolve',
                                ],
                                'args' => [
                                    0 => 'object',
                                ],
                                'priority' => 1,
                                'disabled' => false,
                            ],
                            'sylius_skip_payment' => [
                                'on' => [
                                    0 => 'select_shipping',
                                ],
                                'do' => [
                                    0 => '@sylius.state_resolver.order_checkout',
                                    1 => 'resolve',
                                ],
                                'args' => [
                                    0 => 'object',
                                ],
                                'priority' => 1,
                                'disabled' => false,
                            ],
                        ],
                        'guard' => [

                        ],
                        'before' => [

                        ],
                    ],
                ],
                'sylius_order_shipping' => [
                    'class' => 'App\\Entity\\Order\\Order',
                    'property_path' => 'shippingState',
                    'graph' => 'sylius_order_shipping',
                    'state_machine_class' => 'Sylius\\Component\\Resource\\StateMachine\\StateMachine',
                    'states' => [
                        0 => 'cart',
                        1 => 'ready',
                        2 => 'cancelled',
                        3 => 'partially_shipped',
                        4 => 'shipped',
                    ],
                    'transitions' => [
                        'request_shipping' => [
                            'from' => [
                                0 => 'cart',
                            ],
                            'to' => 'ready',
                        ],
                        'cancel' => [
                            'from' => [
                                0 => 'ready',
                            ],
                            'to' => 'cancelled',
                        ],
                        'partially_ship' => [
                            'from' => [
                                0 => 'ready',
                            ],
                            'to' => 'partially_shipped',
                        ],
                        'ship' => [
                            'from' => [
                                0 => 'ready',
                                1 => 'partially_shipped',
                            ],
                            'to' => 'shipped',
                        ],
                    ],
                    'callbacks' => [
                        'after' => [
                            'sylius_resolve_state' => [
                                'on' => [
                                    0 => 'ship',
                                ],
                                'do' => [
                                    0 => '@sylius.state_resolver.order',
                                    1 => 'resolve',
                                ],
                                'args' => [
                                    0 => 'object',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                        ],
                        'guard' => [

                        ],
                        'before' => [

                        ],
                    ],
                ],
                'sylius_order_payment' => [
                    'class' => 'App\\Entity\\Order\\Order',
                    'property_path' => 'paymentState',
                    'graph' => 'sylius_order_payment',
                    'state_machine_class' => 'Sylius\\Component\\Resource\\StateMachine\\StateMachine',
                    'states' => [
                        0 => 'cart',
                        1 => 'awaiting_payment',
                        2 => 'partially_authorized',
                        3 => 'authorized',
                        4 => 'partially_paid',
                        5 => 'cancelled',
                        6 => 'paid',
                        7 => 'partially_refunded',
                        8 => 'refunded',
                    ],
                    'transitions' => [
                        'request_payment' => [
                            'from' => [
                                0 => 'cart',
                            ],
                            'to' => 'awaiting_payment',
                        ],
                        'partially_authorize' => [
                            'from' => [
                                0 => 'awaiting_payment',
                                1 => 'partially_authorized',
                            ],
                            'to' => 'partially_authorized',
                        ],
                        'authorize' => [
                            'from' => [
                                0 => 'awaiting_payment',
                                1 => 'partially_authorized',
                            ],
                            'to' => 'authorized',
                        ],
                        'partially_pay' => [
                            'from' => [
                                0 => 'awaiting_payment',
                                1 => 'partially_paid',
                                2 => 'partially_authorized',
                            ],
                            'to' => 'partially_paid',
                        ],
                        'cancel' => [
                            'from' => [
                                0 => 'awaiting_payment',
                                1 => 'authorized',
                                2 => 'partially_authorized',
                            ],
                            'to' => 'cancelled',
                        ],
                        'pay' => [
                            'from' => [
                                0 => 'awaiting_payment',
                                1 => 'partially_paid',
                                2 => 'authorized',
                            ],
                            'to' => 'paid',
                        ],
                        'partially_refund' => [
                            'from' => [
                                0 => 'paid',
                                1 => 'partially_paid',
                                2 => 'partially_refunded',
                            ],
                            'to' => 'partially_refunded',
                        ],
                        'refund' => [
                            'from' => [
                                0 => 'paid',
                                1 => 'partially_paid',
                                2 => 'partially_refunded',
                            ],
                            'to' => 'refunded',
                        ],
                    ],
                    'callbacks' => [
                        'after' => [
                            'sylius_order_paid' => [
                                'on' => [
                                    0 => 'pay',
                                ],
                                'do' => [
                                    0 => '@sylius.inventory.order_inventory_operator',
                                    1 => 'sell',
                                ],
                                'args' => [
                                    0 => 'object',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_resolve_state' => [
                                'on' => [
                                    0 => 'pay',
                                ],
                                'do' => [
                                    0 => '@sylius.state_resolver.order',
                                    1 => 'resolve',
                                ],
                                'args' => [
                                    0 => 'object',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                        ],
                        'guard' => [

                        ],
                        'before' => [

                        ],
                    ],
                ],
                'sylius_order' => [
                    'class' => 'App\\Entity\\Order\\Order',
                    'property_path' => 'state',
                    'graph' => 'sylius_order',
                    'state_machine_class' => 'Sylius\\Component\\Resource\\StateMachine\\StateMachine',
                    'states' => [
                        0 => 'cart',
                        1 => 'new',
                        2 => 'cancelled',
                        3 => 'fulfilled',
                    ],
                    'transitions' => [
                        'create' => [
                            'from' => [
                                0 => 'cart',
                            ],
                            'to' => 'new',
                        ],
                        'cancel' => [
                            'from' => [
                                0 => 'new',
                            ],
                            'to' => 'cancelled',
                        ],
                        'fulfill' => [
                            'from' => [
                                0 => 'new',
                            ],
                            'to' => 'fulfilled',
                        ],
                    ],
                    'callbacks' => [
                        'before' => [
                            'sylius_assign_number' => [
                                'on' => [
                                    0 => 'create',
                                ],
                                'do' => [
                                    0 => '@sylius.order_number_assigner',
                                    1 => 'assignNumber',
                                ],
                                'args' => [
                                    0 => 'object',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_assign_token' => [
                                'on' => [
                                    0 => 'create',
                                ],
                                'do' => [
                                    0 => '@sylius.unique_id_based_order_token_assigner',
                                    1 => 'assignTokenValueIfNotSet',
                                ],
                                'args' => [
                                    0 => 'object',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                        ],
                        'after' => [
                            'sylius_request_shipping' => [
                                'on' => [
                                    0 => 'create',
                                ],
                                'do' => [
                                    0 => '@sm.callback.cascade_transition',
                                    1 => 'apply',
                                ],
                                'args' => [
                                    0 => 'object',
                                    1 => 'event',
                                    2 => '\'request_shipping\'',
                                    3 => '\'sylius_order_shipping\'',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_request_payment' => [
                                'on' => [
                                    0 => 'create',
                                ],
                                'do' => [
                                    0 => '@sm.callback.cascade_transition',
                                    1 => 'apply',
                                ],
                                'args' => [
                                    0 => 'object',
                                    1 => 'event',
                                    2 => '\'request_payment\'',
                                    3 => '\'sylius_order_payment\'',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_create_payment' => [
                                'on' => [
                                    0 => 'create',
                                ],
                                'do' => [
                                    0 => '@sm.callback.cascade_transition',
                                    1 => 'apply',
                                ],
                                'args' => [
                                    0 => 'object.getPayments()',
                                    1 => 'event',
                                    2 => '\'create\'',
                                    3 => '\'sylius_payment\'',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_create_shipment' => [
                                'on' => [
                                    0 => 'create',
                                ],
                                'do' => [
                                    0 => '@sm.callback.cascade_transition',
                                    1 => 'apply',
                                ],
                                'args' => [
                                    0 => 'object.getShipments()',
                                    1 => 'event',
                                    2 => '\'create\'',
                                    3 => '\'sylius_shipment\'',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_hold_inventory' => [
                                'on' => [
                                    0 => 'create',
                                ],
                                'do' => [
                                    0 => '@sylius.inventory.order_inventory_operator',
                                    1 => 'hold',
                                ],
                                'args' => [
                                    0 => 'object',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_increment_promotions_usages' => [
                                'on' => [
                                    0 => 'create',
                                ],
                                'do' => [
                                    0 => '@sylius.promotion_usage_modifier',
                                    1 => 'increment',
                                ],
                                'args' => [
                                    0 => 'object',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_save_addresses_on_customer' => [
                                'on' => [
                                    0 => 'create',
                                ],
                                'do' => [
                                    0 => '@sylius.customer_order_addresses_saver',
                                    1 => 'saveAddresses',
                                ],
                                'args' => [
                                    0 => 'object',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_set_order_immutable_names' => [
                                'on' => [
                                    0 => 'create',
                                ],
                                'do' => [
                                    0 => '@sylius.order_item_names_setter',
                                    1 => '__invoke',
                                ],
                                'args' => [
                                    0 => 'object',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_cancel_payment' => [
                                'on' => [
                                    0 => 'cancel',
                                ],
                                'do' => [
                                    0 => '@sm.callback.cascade_transition',
                                    1 => 'apply',
                                ],
                                'args' => [
                                    0 => 'object.getPayments()',
                                    1 => 'event',
                                    2 => '\'cancel\'',
                                    3 => '\'sylius_payment\'',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_cancel_shipment' => [
                                'on' => [
                                    0 => 'cancel',
                                ],
                                'do' => [
                                    0 => '@sm.callback.cascade_transition',
                                    1 => 'apply',
                                ],
                                'args' => [
                                    0 => 'object.getShipments()',
                                    1 => 'event',
                                    2 => '\'cancel\'',
                                    3 => '\'sylius_shipment\'',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_cancel_order_payment' => [
                                'on' => [
                                    0 => 'cancel',
                                ],
                                'do' => [
                                    0 => '@sm.callback.cascade_transition',
                                    1 => 'apply',
                                ],
                                'args' => [
                                    0 => 'object',
                                    1 => 'event',
                                    2 => '\'cancel\'',
                                    3 => '\'sylius_order_payment\'',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_cancel_order_shipment' => [
                                'on' => [
                                    0 => 'cancel',
                                ],
                                'do' => [
                                    0 => '@sm.callback.cascade_transition',
                                    1 => 'apply',
                                ],
                                'args' => [
                                    0 => 'object',
                                    1 => 'event',
                                    2 => '\'cancel\'',
                                    3 => '\'sylius_order_shipping\'',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylis_cancel_order' => [
                                'on' => [
                                    0 => 'cancel',
                                ],
                                'do' => [
                                    0 => '@sylius.inventory.order_inventory_operator',
                                    1 => 'cancel',
                                ],
                                'args' => [
                                    0 => 'object',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_decrement_promotions_usages' => [
                                'on' => [
                                    0 => 'cancel',
                                ],
                                'do' => [
                                    0 => '@sylius.promotion_usage_modifier',
                                    1 => 'decrement',
                                ],
                                'args' => [
                                    0 => 'object',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                        ],
                        'guard' => [

                        ],
                    ],
                ],
                'sylius_shipment' => [
                    'class' => 'App\\Entity\\Shipping\\Shipment',
                    'property_path' => 'state',
                    'graph' => 'sylius_shipment',
                    'state_machine_class' => 'Sylius\\Component\\Resource\\StateMachine\\StateMachine',
                    'states' => [
                        0 => 'cart',
                        1 => 'ready',
                        2 => 'shipped',
                        3 => 'cancelled',
                    ],
                    'transitions' => [
                        'create' => [
                            'from' => [
                                0 => 'cart',
                            ],
                            'to' => 'ready',
                        ],
                        'ship' => [
                            'from' => [
                                0 => 'ready',
                            ],
                            'to' => 'shipped',
                        ],
                        'cancel' => [
                            'from' => [
                                0 => 'ready',
                            ],
                            'to' => 'cancelled',
                        ],
                    ],
                    'callbacks' => [
                        'before' => [
                            'sylius_assign_date' => [
                                'on' => 'ship',
                                'do' => [
                                    0 => '@sylius.shipping_date_assigner',
                                    1 => 'assign',
                                ],
                                'args' => [
                                    0 => 'object',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                        ],
                        'after' => [
                            'sylius_resolve_state' => [
                                'on' => [
                                    0 => 'ship',
                                ],
                                'do' => [
                                    0 => '@sylius.state_resolver.order_shipping',
                                    1 => 'resolve',
                                ],
                                'args' => [
                                    0 => 'object.getOrder()',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                        ],
                        'guard' => [

                        ],
                    ],
                ],
                'sylius_payment' => [
                    'class' => 'App\\Entity\\Payment\\Payment',
                    'property_path' => 'state',
                    'graph' => 'sylius_payment',
                    'state_machine_class' => 'Sylius\\Component\\Resource\\StateMachine\\StateMachine',
                    'states' => [
                        0 => 'cart',
                        1 => 'new',
                        2 => 'processing',
                        3 => 'authorized',
                        4 => 'completed',
                        5 => 'failed',
                        6 => 'cancelled',
                        7 => 'refunded',
                    ],
                    'transitions' => [
                        'create' => [
                            'from' => [
                                0 => 'cart',
                            ],
                            'to' => 'new',
                        ],
                        'process' => [
                            'from' => [
                                0 => 'new',
                            ],
                            'to' => 'processing',
                        ],
                        'authorize' => [
                            'from' => [
                                0 => 'new',
                                1 => 'processing',
                            ],
                            'to' => 'authorized',
                        ],
                        'complete' => [
                            'from' => [
                                0 => 'new',
                                1 => 'processing',
                                2 => 'authorized',
                            ],
                            'to' => 'completed',
                        ],
                        'fail' => [
                            'from' => [
                                0 => 'new',
                                1 => 'processing',
                            ],
                            'to' => 'failed',
                        ],
                        'cancel' => [
                            'from' => [
                                0 => 'new',
                                1 => 'processing',
                                2 => 'authorized',
                            ],
                            'to' => 'cancelled',
                        ],
                        'refund' => [
                            'from' => [
                                0 => 'completed',
                            ],
                            'to' => 'refunded',
                        ],
                    ],
                    'callbacks' => [
                        'after' => [
                            'sylius_process_order' => [
                                'on' => [
                                    0 => 'fail',
                                    1 => 'cancel',
                                ],
                                'do' => [
                                    0 => '@sylius.order_processing.order_payment_processor.after_checkout',
                                    1 => 'process',
                                ],
                                'args' => [
                                    0 => 'object.getOrder()',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                            'sylius_resolve_state' => [
                                'on' => [
                                    0 => 'complete',
                                    1 => 'refund',
                                    2 => 'authorize',
                                ],
                                'do' => [
                                    0 => '@sylius.state_resolver.order_payment',
                                    1 => 'resolve',
                                ],
                                'args' => [
                                    0 => 'object.getOrder()',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                        ],
                        'guard' => [

                        ],
                        'before' => [

                        ],
                    ],
                ],
                'sylius_product_review' => [
                    'class' => 'App\\Entity\\Product\\ProductReview',
                    'property_path' => 'status',
                    'graph' => 'sylius_product_review',
                    'state_machine_class' => 'Sylius\\Component\\Resource\\StateMachine\\StateMachine',
                    'states' => [
                        0 => 'new',
                        1 => 'accepted',
                        2 => 'rejected',
                    ],
                    'transitions' => [
                        'accept' => [
                            'from' => [
                                0 => 'new',
                            ],
                            'to' => 'accepted',
                        ],
                        'reject' => [
                            'from' => [
                                0 => 'new',
                            ],
                            'to' => 'rejected',
                        ],
                    ],
                    'callbacks' => [
                        'after' => [
                            'sylius_update_rating' => [
                                'on' => [
                                    0 => 'accept',
                                ],
                                'do' => [
                                    0 => '@sylius.product_review.average_rating_updater',
                                    1 => 'updateFromReview',
                                ],
                                'args' => [
                                    0 => 'object',
                                ],
                                'disabled' => false,
                                'priority' => 0,
                            ],
                        ],
                        'guard' => [

                        ],
                        'before' => [

                        ],
                    ],
                ],
            ],
            'sm.factory.class' => 'SM\\Factory\\Factory',
            'sm.callback_factory.class' => 'winzou\\Bundle\\StateMachineBundle\\Callback\\ContainerAwareCallbackFactory',
            'sm.callback.class' => 'winzou\\Bundle\\StateMachineBundle\\Callback\\ContainerAwareCallback',
            'sm.twig_extension.class' => 'SM\\Extension\\Twig\\SMExtension',
            'sm.callback.cascade_transition.class' => 'SM\\Callback\\CascadeTransitionCallback',
            'sonata.block.container.types' => [
                0 => 'sonata.block.service.container',
                1 => 'sonata.page.block.container',
                2 => 'sonata.dashboard.block.container',
                3 => 'cmf.block.container',
                4 => 'cmf.block.slideshow',
            ],
            'sonata_block.blocks' => [
                'sonata.block.service.template' => [
                    'settings' => [
                        'address' => NULL,
                        'addresses' => NULL,
                        'cart' => NULL,
                        'channel' => NULL,
                        'customer' => NULL,
                        'form' => NULL,
                        'order' => NULL,
                        'order_item' => NULL,
                        'orders' => NULL,
                        'product' => NULL,
                        'product_review' => NULL,
                        'product_reviews' => NULL,
                        'products' => NULL,
                        'resource' => NULL,
                        'resources' => NULL,
                        'statistics' => NULL,
                        'taxon' => NULL,
                    ],
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                ],
                'sonata.block.service.container' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.empty' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.text' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.rss' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.menu' => [
                    'contexts' => [

                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
            ],
            'sonata_block.blocks_by_class' => [

            ],
            'sonata_blocks.block_types' => [
                0 => 'sonata.block.service.template',
                1 => 'sonata.block.service.container',
                2 => 'sonata.block.service.empty',
                3 => 'sonata.block.service.text',
                4 => 'sonata.block.service.rss',
                5 => 'sonata.block.service.menu',
            ],
            'sonata_block.cache_blocks' => [
                'by_type' => [
                    'sonata.block.service.template' => 'sonata.cache.noop',
                    'sonata.block.service.container' => 'sonata.cache.noop',
                    'sonata.block.service.empty' => 'sonata.cache.noop',
                    'sonata.block.service.text' => 'sonata.cache.noop',
                    'sonata.block.service.rss' => 'sonata.cache.noop',
                    'sonata.block.service.menu' => 'sonata.cache.noop',
                ],
            ],
            'sonata_blocks.default_contexts' => [

            ],
            'hateoas.link_factory.class' => 'Hateoas\\Factory\\LinkFactory',
            'hateoas.links_factory.class' => 'Hateoas\\Factory\\LinksFactory',
            'hateoas.embeds_factory.class' => 'Hateoas\\Factory\\EmbeddedsFactory',
            'hateoas.expression.evaluator.class' => 'Bazinga\\Bundle\\HateoasBundle\\Hateoas\\Expression\\LazyFunctionExpressionEvaluator',
            'bazinga_hateoas.expression_language.class' => 'Bazinga\\Bundle\\HateoasBundle\\ExpressionLanguage\\ExpressionLanguage',
            'hateoas.expression.link.class' => 'Hateoas\\Expression\\LinkExpressionFunction',
            'hateoas.serializer.xml.class' => 'Hateoas\\Serializer\\XmlSerializer',
            'hateoas.serializer.json_hal.class' => 'Hateoas\\Serializer\\JsonHalSerializer',
            'hateoas.serializer.exclusion_manager.class' => 'Hateoas\\Serializer\\ExclusionManager',
            'hateoas.event_subscriber.xml.class' => 'Hateoas\\Serializer\\EventSubscriber\\XmlEventSubscriber',
            'hateoas.event_subscriber.json.class' => 'Hateoas\\Serializer\\EventSubscriber\\JsonEventSubscriber',
            'hateoas.inline_deferrer.embeds.class' => 'Hateoas\\Serializer\\Metadata\\InlineDeferrer',
            'hateoas.inline_deferrer.links.class' => 'Hateoas\\Serializer\\Metadata\\InlineDeferrer',
            'hateoas.configuration.provider.resolver.chain.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\ChainResolver',
            'hateoas.configuration.provider.resolver.method.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\MethodResolver',
            'hateoas.configuration.provider.resolver.static_method.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\StaticMethodResolver',
            'hateoas.configuration.provider.resolver.symfony_container.class' => 'Hateoas\\Configuration\\Provider\\Resolver\\SymfonyContainerResolver',
            'hateoas.configuration.relation_provider.class' => 'Hateoas\\Configuration\\Provider\\RelationProvider',
            'hateoas.configuration.relations_repository.class' => 'Hateoas\\Configuration\\RelationsRepository',
            'hateoas.configuration.metadata.yaml_driver.class' => 'Hateoas\\Configuration\\Metadata\\Driver\\YamlDriver',
            'hateoas.configuration.metadata.xml_driver.class' => 'Hateoas\\Configuration\\Metadata\\Driver\\XmlDriver',
            'hateoas.configuration.metadata.annotation_driver.class' => 'Hateoas\\Configuration\\Metadata\\Driver\\AnnotationDriver',
            'hateoas.configuration.metadata.extension_driver.class' => 'Hateoas\\Configuration\\Metadata\\Driver\\ExtensionDriver',
            'hateoas.generator.registry.class' => 'Hateoas\\UrlGenerator\\UrlGeneratorRegistry',
            'hateoas.generator.symfony.class' => 'Hateoas\\UrlGenerator\\SymfonyUrlGenerator',
            'hateoas.helper.link.class' => 'Hateoas\\Helper\\LinkHelper',
            'hateoas.twig.link.class' => 'Hateoas\\Twig\\Extension\\LinkExtension',
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.doctrine_phpcr_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrinePHPCRTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.identical_property_naming_strategy.class' => 'JMS\\Serializer\\Naming\\IdenticalPropertyNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.twig_runtime_extension.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeExtension',
            'jms_serializer.twig_runtime_extension_helper.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeHelper',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 1088,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => [

            ],
            'jms_serializer.xml_serialization_visitor.format_output' => false,
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber',
            'jms_serializer.configured_context_factory.class' => 'JMS\\SerializerBundle\\ContextFactory\\ConfiguredContextFactory',
            'jms_serializer.expression_evaluator.class' => 'JMS\\Serializer\\Expression\\ExpressionEvaluator',
            'jms_serializer.expression_language.class' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage',
            'jms_serializer.expression_language.function_provider.class' => 'JMS\\SerializerBundle\\ExpressionLanguage\\BasicSerializerFunctionsProvider',
            'jms_serializer.accessor_strategy.default.class' => 'JMS\\Serializer\\Accessor\\DefaultAccessorStrategy',
            'jms_serializer.accessor_strategy.expression.class' => 'JMS\\Serializer\\Accessor\\ExpressionAccessorStrategy',
            'jms_serializer.cache.cache_warmer.class' => 'JMS\\SerializerBundle\\Cache\\CacheWarmer',
            'fos_rest.format_listener.rules' => NULL,
            'knp_gaufrette.filesystem_map.class' => 'Knp\\Bundle\\GaufretteBundle\\FilesystemMap',
            'knp_menu.renderer.list.options' => [

            ],
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => [

            ],
            'knp_menu.renderer.twig.template' => '@KnpMenu/menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'liip_imagine.resolvers' => [
                'default' => [
                    'web_path' => [
                        'web_root' => (\dirname(__DIR__, 4).'/public'),
                        'cache_prefix' => 'media/cache',
                    ],
                ],
            ],
            'liip_imagine.loaders' => [
                'default' => [
                    'filesystem' => [
                        'data_root' => [
                            0 => (\dirname(__DIR__, 4).'/public/media/image'),
                        ],
                        'locator' => 'filesystem',
                        'allow_unresolvable_data_roots' => false,
                        'bundle_resources' => [
                            'enabled' => false,
                            'access_control_type' => 'blacklist',
                            'access_control_list' => [

                            ],
                        ],
                    ],
                ],
            ],
            'liip_imagine.jpegoptim.binary' => '/usr/bin/jpegoptim',
            'liip_imagine.jpegoptim.stripAll' => true,
            'liip_imagine.jpegoptim.max' => NULL,
            'liip_imagine.jpegoptim.progressive' => true,
            'liip_imagine.jpegoptim.tempDir' => NULL,
            'liip_imagine.optipng.binary' => '/usr/bin/optipng',
            'liip_imagine.optipng.level' => 7,
            'liip_imagine.optipng.stripAll' => true,
            'liip_imagine.optipng.tempDir' => NULL,
            'liip_imagine.pngquant.binary' => '/usr/bin/pngquant',
            'liip_imagine.mozjpeg.binary' => '/opt/mozjpeg/bin/cjpeg',
            'liip_imagine.driver_service' => 'liip_imagine.gd',
            'liip_imagine.cache.resolver.default' => 'default',
            'liip_imagine.default_image' => NULL,
            'liip_imagine.filter_sets' => [
                'sylius_small' => [
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'thumbnail' => [
                            'size' => [
                                0 => 120,
                                1 => 90,
                            ],
                            'mode' => 'outbound',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'sylius_medium' => [
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'thumbnail' => [
                            'size' => [
                                0 => 240,
                                1 => 180,
                            ],
                            'mode' => 'outbound',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'sylius_large' => [
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'thumbnail' => [
                            'size' => [
                                0 => 640,
                                1 => 480,
                            ],
                            'mode' => 'outbound',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'sylius_admin_product_original' => [
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [

                    ],
                    'post_processors' => [

                    ],
                ],
                'sylius_admin_admin_user_avatar_thumbnail' => [
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'thumbnail' => [
                            'size' => [
                                0 => 50,
                                1 => 50,
                            ],
                            'mode' => 'outbound',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'sylius_admin_product_tiny_thumbnail' => [
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'thumbnail' => [
                            'size' => [
                                0 => 64,
                                1 => 64,
                            ],
                            'mode' => 'outbound',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'sylius_admin_product_thumbnail' => [
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'thumbnail' => [
                            'size' => [
                                0 => 50,
                                1 => 50,
                            ],
                            'mode' => 'outbound',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'sylius_admin_product_small_thumbnail' => [
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'thumbnail' => [
                            'size' => [
                                0 => 150,
                                1 => 112,
                            ],
                            'mode' => 'outbound',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'sylius_admin_product_large_thumbnail' => [
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'thumbnail' => [
                            'size' => [
                                0 => 550,
                                1 => 412,
                            ],
                            'mode' => 'outbound',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'sylius_shop_product_original' => [
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [

                    ],
                    'post_processors' => [

                    ],
                ],
                'sylius_shop_product_tiny_thumbnail' => [
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'thumbnail' => [
                            'size' => [
                                0 => 64,
                                1 => 64,
                            ],
                            'mode' => 'outbound',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'sylius_shop_product_small_thumbnail' => [
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'thumbnail' => [
                            'size' => [
                                0 => 150,
                                1 => 112,
                            ],
                            'mode' => 'outbound',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'sylius_shop_product_thumbnail' => [
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'thumbnail' => [
                            'size' => [
                                0 => 260,
                                1 => 260,
                            ],
                            'mode' => 'outbound',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
                'sylius_shop_product_large_thumbnail' => [
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => [
                        'thumbnail' => [
                            'size' => [
                                0 => 550,
                                1 => 412,
                            ],
                            'mode' => 'outbound',
                        ],
                    ],
                    'post_processors' => [

                    ],
                ],
            ],
            'liip_imagine.binary.loader.default' => 'default',
            'liip_imagine.controller.filter_action' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction',
            'liip_imagine.controller.filter_runtime_action' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction',
            'payum.capture_path' => 'payum_capture_do',
            'payum.notify_path' => 'payum_notify_do',
            'payum.authorize_path' => 'payum_authorize_do',
            'payum.refund_path' => 'payum_refund_do',
            'payum.cancel_path' => 'payum_cancel_do',
            'payum.payout_path' => 'payum_payout_do',
            'payum.available_gateway_factories' => [

            ],
            'payum.storage.doctrine.orm.class' => 'Payum\\Core\\Bridge\\Doctrine\\Storage\\DoctrineStorage',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.default_locale' => 'en_US',
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'white_october_pagerfanta.default_view' => 'default',
            'white_october_pagerfanta.view_factory.class' => 'Pagerfanta\\View\\ViewFactory',
            'doctrine_migrations.dir_name' => (\dirname(__DIR__, 4).'/src/Migrations'),
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.migrations_paths' => [

            ],
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.column_name' => 'version',
            'doctrine_migrations.column_length' => 14,
            'doctrine_migrations.executed_at_column_name' => 'executed_at',
            'doctrine_migrations.all_or_nothing' => false,
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'sylius_payum.driver.doctrine/orm' => true,
            'sylius_payum.driver' => 'doctrine/orm',
            'sylius.model.payment_security_token.class' => 'App\\Entity\\Payment\\PaymentSecurityToken',
            'sylius.controller.payment_security_token.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.payment_security_token.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.gateway_config.class' => 'App\\Entity\\Payment\\GatewayConfig',
            'sylius.controller.gateway_config.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.gateway_config.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.gateway_config.validation_groups' => [
                0 => 'sylius',
            ],
            'payum.template.layout' => '@SyliusPayum/layout.html.twig',
            'payum.template.obtain_credit_card' => '@SyliusPayum/Action/obtainCreditCard.html.twig',
            'sylius.admin.notification.enabled' => true,
            'sylius.admin.notification.frequency' => 60,
            'sylius.admin.shop_enabled' => true,
            'sylius.admin.notification.uri' => 'http://gus.sylius.com/version',
            'sylius_shop.firewall_context_name' => 'shop',
            'sylius_shop.product_grid.include_all_descendants' => true,
            'fos_oauth_server.server.class' => 'OAuth2\\OAuth2',
            'fos_oauth_server.security.authentication.provider.class' => 'FOS\\OAuthServerBundle\\Security\\Authentication\\Provider\\OAuthProvider',
            'fos_oauth_server.security.authentication.listener.class' => 'FOS\\OAuthServerBundle\\Security\\Firewall\\OAuthListener',
            'fos_oauth_server.security.entry_point.class' => 'FOS\\OAuthServerBundle\\Security\\EntryPoint\\OAuthEntryPoint',
            'fos_oauth_server.server.options' => [

            ],
            'fos_oauth_server.model_manager_name' => NULL,
            'fos_oauth_server.model.client.class' => 'App\\Entity\\AdminApi\\Client',
            'fos_oauth_server.model.access_token.class' => 'App\\Entity\\AdminApi\\AccessToken',
            'fos_oauth_server.model.refresh_token.class' => 'App\\Entity\\AdminApi\\RefreshToken',
            'fos_oauth_server.model.auth_code.class' => 'App\\Entity\\AdminApi\\AuthCode',
            'fos_oauth_server.template.engine' => 'twig',
            'fos_oauth_server.authorize.form.type' => 'FOS\\OAuthServerBundle\\Form\\Type\\AuthorizeFormType',
            'fos_oauth_server.authorize.form.name' => 'fos_oauth_server_authorize_form',
            'fos_oauth_server.authorize.form.validation_groups' => [
                0 => 'Authorize',
                1 => 'Default',
            ],
            'sylius_admin_api.driver.doctrine/orm' => true,
            'sylius_admin_api.driver' => 'doctrine/orm',
            'sylius.model.api_user.class' => 'App\\Entity\\User\\AdminUser',
            'sylius.model.api_client.class' => 'App\\Entity\\AdminApi\\Client',
            'sylius.controller.api_client.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.api_client.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.api_access_token.class' => 'App\\Entity\\AdminApi\\AccessToken',
            'sylius.controller.api_access_token.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.api_access_token.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.api_refresh_token.class' => 'App\\Entity\\AdminApi\\RefreshToken',
            'sylius.controller.api_refresh_token.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.api_refresh_token.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.model.api_auth_code.class' => 'App\\Entity\\AdminApi\\AuthCode',
            'sylius.controller.api_auth_code.class' => 'Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController',
            'sylius.factory.api_auth_code.class' => 'Sylius\\Component\\Resource\\Factory\\Factory',
            'sylius.form.type.api_client.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.api_order.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.form.type.api_customer.validation_groups' => [
                0 => 'sylius',
            ],
            'sylius.sitemap_template' => '@SitemapPlugin/show.xml.twig',
            'sylius.sitemap_index_template' => '@SitemapPlugin/index.xml.twig',
            'sylius.sitemap_exclude_taxon_root' => true,
            'sylius.sitemap_absolute_url' => true,
            'sylius.sitemap_hreflang' => true,
            'sylius.sitemap_static' => [

            ],
            'sylius.provider.products' => true,
            'sylius.provider.taxons' => true,
            'sylius.provider.static' => true,
            'sylius.attribute.attribute_types' => [
                'text' => 'Text',
                'textarea' => 'Textarea',
                'checkbox' => 'Checkbox',
                'integer' => 'Integer',
                'percent' => 'Percent',
                'datetime' => 'Datetime',
                'date' => 'Date',
                'select' => 'Select',
            ],
            'sylius.tax_calculators' => [
                'default' => 'default',
            ],
            'sylius.shipping_calculators' => [
                'flat_rate' => 'sylius.form.shipping_calculator.flat_rate_configuration.label',
                'per_unit_rate' => 'sylius.form.shipping_calculator.per_unit_rate_configuration.label',
            ],
            'sylius.shipping_method_resolvers' => [
                'default' => 'Default',
                'zones_and_channel_based' => 'sylius.shipping_methods_resolver.zones_and_channel_based',
            ],
            'sylius.payment_method_resolvers' => [
                'default' => 'Default',
                'channel_based' => 'sylius.payment_methods_resolver.channel_based',
            ],
            'sylius.promotion_rules' => [
                'cart_quantity' => 'sylius.form.promotion_rule.cart_quantity',
                'customer_group' => 'sylius.form.promotion_rule.customer_group',
                'nth_order' => 'sylius.form.promotion_rule.nth_order',
                'shipping_country' => 'sylius.form.promotion_rule.shipping_country',
                'has_taxon' => 'sylius.form.promotion_rule.has_at_least_one_from_taxons',
                'total_of_items_from_taxon' => 'sylius.form.promotion_rule.total_price_of_items_from_taxon',
                'contains_product' => 'sylius.form.promotion_rule.contains_product',
                'item_total' => 'sylius.form.promotion_rule.item_total',
            ],
            'sylius.promotion_actions' => [
                'order_fixed_discount' => 'sylius.form.promotion_action.order_fixed_discount',
                'unit_fixed_discount' => 'sylius.form.promotion_action.item_fixed_discount',
                'order_percentage_discount' => 'sylius.form.promotion_action.order_percentage_discount',
                'unit_percentage_discount' => 'sylius.form.promotion_action.item_percentage_discount',
                'shipping_percentage_discount' => 'sylius.form.promotion_action.shipping_percentage_discount',
            ],
            'sylius_ui.sonata_block.whitelisted_variables' => [
                0 => 'address',
                1 => 'addresses',
                2 => 'cart',
                3 => 'channel',
                4 => 'customer',
                5 => 'form',
                6 => 'order',
                7 => 'order_item',
                8 => 'orders',
                9 => 'product',
                10 => 'product_review',
                11 => 'product_reviews',
                12 => 'products',
                13 => 'resource',
                14 => 'resources',
                15 => 'statistics',
                16 => 'taxon',
            ],
            'sylius.tax_calculation_strategies' => [
                'order_items_based' => 'Order items based',
                'order_item_units_based' => 'Order item units based',
            ],
            'sylius.gateway_factories' => [
                'offline' => 'sylius.payum_gateway_factory.offline',
                'paypal_express_checkout' => 'sylius.payum_gateway_factory.paypal_express_checkout',
                'stripe_checkout' => 'sylius.payum_gateway_factory.stripe_checkout',
            ],
            'console.command.ids' => [
                0 => 'console.command.public_alias.doctrine_cache.contains_command',
                1 => 'console.command.public_alias.doctrine_cache.delete_command',
                2 => 'console.command.public_alias.doctrine_cache.flush_command',
                3 => 'console.command.public_alias.doctrine_cache.stats_command',
                4 => 'Sylius\\Bundle\\OrderBundle\\Command\\RemoveExpiredCartsCommand',
                5 => 'Sylius\\Bundle\\UserBundle\\Command\\DemoteUserCommand',
                6 => 'Sylius\\Bundle\\UserBundle\\Command\\PromoteUserCommand',
                7 => 'Sylius\\Bundle\\CoreBundle\\Command\\CancelUnpaidOrdersCommand',
                8 => 'Sylius\\Bundle\\CoreBundle\\Command\\CheckRequirementsCommand',
                9 => 'Sylius\\Bundle\\CoreBundle\\Command\\InstallAssetsCommand',
                10 => 'Sylius\\Bundle\\CoreBundle\\Command\\InstallCommand',
                11 => 'Sylius\\Bundle\\CoreBundle\\Command\\InstallDatabaseCommand',
                12 => 'Sylius\\Bundle\\CoreBundle\\Command\\InstallSampleDataCommand',
                13 => 'Sylius\\Bundle\\CoreBundle\\Command\\SetupCommand',
                14 => 'Sylius\\Bundle\\CoreBundle\\Command\\ShowAvailablePluginsCommand',
                15 => 'Sylius\\Bundle\\CoreBundle\\Command\\InformAboutGUSCommand',
                16 => 'sylius.console.command.resource_debug',
                17 => 'console.command.public_alias.Sylius\\Bundle\\FixturesBundle\\Command\\FixturesListCommand',
                18 => 'console.command.public_alias.Sylius\\Bundle\\FixturesBundle\\Command\\FixturesLoadCommand',
                19 => 'Sylius\\Bundle\\ThemeBundle\\Command\\AssetsInstallCommand',
                20 => 'Sylius\\Bundle\\ThemeBundle\\Command\\ListCommand',
                21 => 'console.command.public_alias.fos_oauth_server.clean_command',
                22 => 'console.command.public_alias.fos_oauth_server.create_client_command',
                23 => 'Sylius\\Bundle\\AdminApiBundle\\Command\\CreateClientCommand',
            ],
        ];
    }
}
