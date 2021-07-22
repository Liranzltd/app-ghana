<?php

namespace ContainerGnx87dl;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appDevDebugProjectContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters;
    private $targetDirs = [];

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 3; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = [];
        $this->normalizedIds = [
            'admin.tierbenefits' => 'admin.tierBenefits',
            'admin.tierbenefits.template_registry' => 'admin.tierBenefits.template_registry',
            'appbundle\\controller\\admincontroller' => 'AppBundle\\Controller\\AdminController',
            'appbundle\\controller\\apicontroller' => 'AppBundle\\Controller\\ApiController',
            'appbundle\\controller\\authcontroller' => 'AppBundle\\Controller\\AuthController',
            'appbundle\\controller\\commandcontroller' => 'AppBundle\\Controller\\CommandController',
            'appbundle\\controller\\dashboardcontroller' => 'AppBundle\\Controller\\DashboardController',
            'appbundle\\controller\\defaultcontroller' => 'AppBundle\\Controller\\DefaultController',
            'appbundle\\controller\\notificationscontroller' => 'AppBundle\\Controller\\NotificationsController',
            'appbundle\\controller\\portalcontroller' => 'AppBundle\\Controller\\PortalController',
            'appbundle\\controller\\recollectioncontroller' => 'AppBundle\\Controller\\RecollectionController',
            'appbundle\\controller\\resettingcontroller' => 'AppBundle\\Controller\\ResettingController',
            'appbundle\\controller\\samlcontroller' => 'AppBundle\\Controller\\SamlController',
            'appbundle\\controller\\securitycontroller' => 'AppBundle\\Controller\\SecurityController',
            'appbundle\\controller\\servicescontroller' => 'AppBundle\\Controller\\ServicesController',
            'appbundle\\controller\\sourcedoggcontroller' => 'AppBundle\\Controller\\SourceDoggController',
            'appbundle\\controller\\testcontroller' => 'AppBundle\\Controller\\TestController',
            'appbundle\\controller\\userguidecontroller' => 'AppBundle\\Controller\\UserGuideController',
            'appbundle\\eventlistener\\passwordresettinglistener' => 'AppBundle\\EventListener\\PasswordResettingListener',
            'appbundle\\eventsubscriber\\samlsubscriber' => 'AppBundle\\EventSubscriber\\SamlSubscriber',
            'fos\\oauthserverbundle\\controller\\tokencontroller' => 'FOS\\OAuthServerBundle\\Controller\\TokenController',
            'fos\\oauthserverbundle\\model\\accesstokenmanagerinterface' => 'FOS\\OAuthServerBundle\\Model\\AccessTokenManagerInterface',
            'fos\\oauthserverbundle\\model\\authcodemanagerinterface' => 'FOS\\OAuthServerBundle\\Model\\AuthCodeManagerInterface',
            'fos\\oauthserverbundle\\model\\clientmanagerinterface' => 'FOS\\OAuthServerBundle\\Model\\ClientManagerInterface',
            'fos\\oauthserverbundle\\model\\refreshtokenmanagerinterface' => 'FOS\\OAuthServerBundle\\Model\\RefreshTokenManagerInterface',
            'http\\httplugbundle\\collector\\pluginclientfactorylistener' => 'Http\\HttplugBundle\\Collector\\PluginClientFactoryListener',
            'knp\\snappy\\image' => 'Knp\\Snappy\\Image',
            'knp\\snappy\\pdf' => 'Knp\\Snappy\\Pdf',
            'sonata\\adminbundle\\action\\dashboardaction' => 'Sonata\\AdminBundle\\Action\\DashboardAction',
            'sonata\\adminbundle\\action\\searchaction' => 'Sonata\\AdminBundle\\Action\\SearchAction',
            'sonata\\adminbundle\\admin\\adminhelper' => 'Sonata\\AdminBundle\\Admin\\AdminHelper',
            'sonata\\adminbundle\\admin\\breadcrumbsbuilder' => 'Sonata\\AdminBundle\\Admin\\BreadcrumbsBuilder',
            'sonata\\adminbundle\\admin\\breadcrumbsbuilderinterface' => 'Sonata\\AdminBundle\\Admin\\BreadcrumbsBuilderInterface',
            'sonata\\adminbundle\\admin\\pool' => 'Sonata\\AdminBundle\\Admin\\Pool',
            'sonata\\adminbundle\\command\\createclasscachecommand' => 'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand',
            'sonata\\adminbundle\\command\\explainadmincommand' => 'Sonata\\AdminBundle\\Command\\ExplainAdminCommand',
            'sonata\\adminbundle\\command\\generateadmincommand' => 'Sonata\\AdminBundle\\Command\\GenerateAdminCommand',
            'sonata\\adminbundle\\command\\generateobjectaclcommand' => 'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand',
            'sonata\\adminbundle\\command\\listadmincommand' => 'Sonata\\AdminBundle\\Command\\ListAdminCommand',
            'sonata\\adminbundle\\command\\setupaclcommand' => 'Sonata\\AdminBundle\\Command\\SetupAclCommand',
            'sonata\\adminbundle\\event\\admineventextension' => 'Sonata\\AdminBundle\\Event\\AdminEventExtension',
            'sonata\\adminbundle\\filter\\filterfactory' => 'Sonata\\AdminBundle\\Filter\\FilterFactory',
            'sonata\\adminbundle\\filter\\filterfactoryinterface' => 'Sonata\\AdminBundle\\Filter\\FilterFactoryInterface',
            'sonata\\adminbundle\\filter\\persister\\filterpersisterinterface' => 'Sonata\\AdminBundle\\Filter\\Persister\\FilterPersisterInterface',
            'sonata\\adminbundle\\filter\\persister\\sessionfilterpersister' => 'Sonata\\AdminBundle\\Filter\\Persister\\SessionFilterPersister',
            'sonata\\adminbundle\\model\\auditmanager' => 'Sonata\\AdminBundle\\Model\\AuditManager',
            'sonata\\adminbundle\\model\\auditmanagerinterface' => 'Sonata\\AdminBundle\\Model\\AuditManagerInterface',
            'sonata\\adminbundle\\route\\adminpoolloader' => 'Sonata\\AdminBundle\\Route\\AdminPoolLoader',
            'sonata\\adminbundle\\search\\searchhandler' => 'Sonata\\AdminBundle\\Search\\SearchHandler',
            'sonata\\adminbundle\\templating\\mutabletemplateregistryinterface' => 'Sonata\\AdminBundle\\Templating\\MutableTemplateRegistryInterface',
            'sonata\\adminbundle\\templating\\templateregistry' => 'Sonata\\AdminBundle\\Templating\\TemplateRegistry',
            'sonata\\adminbundle\\translator\\bclabeltranslatorstrategy' => 'Sonata\\AdminBundle\\Translator\\BCLabelTranslatorStrategy',
            'sonata\\adminbundle\\translator\\formlabeltranslatorstrategy' => 'Sonata\\AdminBundle\\Translator\\FormLabelTranslatorStrategy',
            'sonata\\adminbundle\\translator\\labeltranslatorstrategyinterface' => 'Sonata\\AdminBundle\\Translator\\LabelTranslatorStrategyInterface',
            'sonata\\adminbundle\\translator\\nativelabeltranslatorstrategy' => 'Sonata\\AdminBundle\\Translator\\NativeLabelTranslatorStrategy',
            'sonata\\adminbundle\\translator\\nooplabeltranslatorstrategy' => 'Sonata\\AdminBundle\\Translator\\NoopLabelTranslatorStrategy',
            'sonata\\adminbundle\\translator\\underscorelabeltranslatorstrategy' => 'Sonata\\AdminBundle\\Translator\\UnderscoreLabelTranslatorStrategy',
            'sonata\\adminbundle\\twig\\globalvariables' => 'Sonata\\AdminBundle\\Twig\\GlobalVariables',
            'sonata\\blockbundle\\command\\debugblockscommand' => 'Sonata\\BlockBundle\\Command\\DebugBlocksCommand',
            'sonata\\corebundle\\command\\sonatadumpdoctrinemetacommand' => 'Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand',
            'sonata\\corebundle\\command\\sonatalistformmappingcommand' => 'Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand',
            'sonata\\easyextendsbundle\\command\\dumpmappingcommand' => 'Sonata\\EasyExtendsBundle\\Command\\DumpMappingCommand',
            'sonata\\easyextendsbundle\\command\\generatecommand' => 'Sonata\\EasyExtendsBundle\\Command\\GenerateCommand',
            'sonata\\userbundle\\action\\checkemailaction' => 'Sonata\\UserBundle\\Action\\CheckEmailAction',
            'sonata\\userbundle\\action\\checkloginaction' => 'Sonata\\UserBundle\\Action\\CheckLoginAction',
            'sonata\\userbundle\\action\\loginaction' => 'Sonata\\UserBundle\\Action\\LoginAction',
            'sonata\\userbundle\\action\\logoutaction' => 'Sonata\\UserBundle\\Action\\LogoutAction',
            'sonata\\userbundle\\action\\requestaction' => 'Sonata\\UserBundle\\Action\\RequestAction',
            'sonata\\userbundle\\action\\resetaction' => 'Sonata\\UserBundle\\Action\\ResetAction',
            'sonata\\userbundle\\action\\sendemailaction' => 'Sonata\\UserBundle\\Action\\SendEmailAction',
            'sonata\\userbundle\\command\\twostepverificationcommand' => 'Sonata\\UserBundle\\Command\\TwoStepVerificationCommand',
            'symfony\\bundle\\frameworkbundle\\controller\\redirectcontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController',
            'symfony\\bundle\\frameworkbundle\\controller\\templatecontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController',
        ];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'Http\\HttplugBundle\\Collector\\PluginClientFactoryListener' => 'getPluginClientFactoryListenerService',
            'admin.buyer_membership' => 'getAdmin_BuyerMembershipService',
            'admin.buyers' => 'getAdmin_BuyersService',
            'admin.categories' => 'getAdmin_CategoriesService',
            'admin.companies' => 'getAdmin_CompaniesService',
            'admin.company_addresses' => 'getAdmin_CompanyAddressesService',
            'admin.company_contacts' => 'getAdmin_CompanyContactsService',
            'admin.company_directors' => 'getAdmin_CompanyDirectorsService',
            'admin.company_documents' => 'getAdmin_CompanyDocumentsService',
            'admin.company_references' => 'getAdmin_CompanyReferencesService',
            'admin.company_requests' => 'getAdmin_CompanyRequestsService',
            'admin.company_shareholding' => 'getAdmin_CompanyShareholdingService',
            'admin.company_type_documentation' => 'getAdmin_CompanyTypeDocumentationService',
            'admin.company_types' => 'getAdmin_CompanyTypesService',
            'admin.company_verification' => 'getAdmin_CompanyVerificationService',
            'admin.content_categories' => 'getAdmin_ContentCategoriesService',
            'admin.documents_types' => 'getAdmin_DocumentsTypesService',
            'admin.members' => 'getAdmin_MembersService',
            'admin.news' => 'getAdmin_NewsService',
            'admin.payment_modes' => 'getAdmin_PaymentModesService',
            'admin.payments' => 'getAdmin_PaymentsService',
            'admin.promo_codes' => 'getAdmin_PromoCodesService',
            'admin.requests' => 'getAdmin_RequestsService',
            'admin.requests_documents' => 'getAdmin_RequestsDocumentsService',
            'admin.requests_type' => 'getAdmin_RequestsTypeService',
            'admin.staff' => 'getAdmin_StaffService',
            'admin.testimonials' => 'getAdmin_TestimonialsService',
            'admin.tierBenefits' => 'getAdmin_TierBenefitsService',
            'admin.tiers' => 'getAdmin_TiersService',
            'admin.ujuzi_hub' => 'getAdmin_UjuziHubService',
            'admin.user_guide.content' => 'getAdmin_UserGuide_ContentService',
            'admin.user_guide.topic' => 'getAdmin_UserGuide_TopicService',
            'admin.verification_stages' => 'getAdmin_VerificationStagesService',
            'admin.verification_step' => 'getAdmin_VerificationStepService',
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'app.twig.extension.date' => 'getApp_Twig_Extension_DateService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.request_listener' => 'getAssetic_RequestListenerService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.app' => 'getCache_AppService',
            'cache.serializer' => 'getCache_SerializerService',
            'cache.system' => 'getCache_SystemService',
            'cache.validator' => 'getCache_ValidatorService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'data_collector.translation' => 'getDataCollector_TranslationService',
            'debug.argument_resolver' => 'getDebug_ArgumentResolverService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.log_processor' => 'getDebug_LogProcessorService',
            'debug.security.access.decision_manager' => 'getDebug_Security_Access_DecisionManagerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'file_locator' => 'getFileLocatorService',
            'fos_user.util.canonical_fields_updater' => 'getFosUser_Util_CanonicalFieldsUpdaterService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'http_kernel' => 'getHttpKernelService',
            'httplug.auto_discovery.auto_discovered_client' => 'getHttplug_AutoDiscovery_AutoDiscoveredClientService',
            'httplug.collector.collector' => 'getHttplug_Collector_CollectorService',
            'httplug.collector.formatter' => 'getHttplug_Collector_FormatterService',
            'httplug.strategy' => 'getHttplug_StrategyService',
            'hwi_oauth.resource_ownermap.main' => 'getHwiOauth_ResourceOwnermap_MainService',
            'hwi_oauth.security.oauth_utils' => 'getHwiOauth_Security_OauthUtilsService',
            'hwi_oauth.templating.helper.oauth' => 'getHwiOauth_Templating_Helper_OauthService',
            'ivory_ck_editor.renderer' => 'getIvoryCkEditor_RendererService',
            'ivory_ck_editor.twig_extension' => 'getIvoryCkEditor_TwigExtensionService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.server_log' => 'getMonolog_Handler_ServerLogService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map' => 'getSecurity_Firewall_MapService',
            'security.http_utils' => 'getSecurity_HttpUtilsService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session_listener' => 'getSessionListenerService',
            'sonata.admin.global_template_registry' => 'getSonata_Admin_GlobalTemplateRegistryService',
            'sonata.admin.orm.filter.type.boolean' => 'getSonata_Admin_Orm_Filter_Type_BooleanService',
            'sonata.admin.orm.filter.type.callback' => 'getSonata_Admin_Orm_Filter_Type_CallbackService',
            'sonata.admin.orm.filter.type.choice' => 'getSonata_Admin_Orm_Filter_Type_ChoiceService',
            'sonata.admin.orm.filter.type.class' => 'getSonata_Admin_Orm_Filter_Type_ClassService',
            'sonata.admin.orm.filter.type.date' => 'getSonata_Admin_Orm_Filter_Type_DateService',
            'sonata.admin.orm.filter.type.date_range' => 'getSonata_Admin_Orm_Filter_Type_DateRangeService',
            'sonata.admin.orm.filter.type.datetime' => 'getSonata_Admin_Orm_Filter_Type_DatetimeService',
            'sonata.admin.orm.filter.type.datetime_range' => 'getSonata_Admin_Orm_Filter_Type_DatetimeRangeService',
            'sonata.admin.orm.filter.type.model' => 'getSonata_Admin_Orm_Filter_Type_ModelService',
            'sonata.admin.orm.filter.type.model_autocomplete' => 'getSonata_Admin_Orm_Filter_Type_ModelAutocompleteService',
            'sonata.admin.orm.filter.type.number' => 'getSonata_Admin_Orm_Filter_Type_NumberService',
            'sonata.admin.orm.filter.type.string' => 'getSonata_Admin_Orm_Filter_Type_StringService',
            'sonata.admin.orm.filter.type.time' => 'getSonata_Admin_Orm_Filter_Type_TimeService',
            'sonata.admin.pool' => 'getSonata_Admin_PoolService',
            'sonata.admin.twig.extension' => 'getSonata_Admin_Twig_ExtensionService',
            'sonata.admin.twig.global' => 'getSonata_Admin_Twig_GlobalService',
            'sonata.block.cache.handler.default' => 'getSonata_Block_Cache_Handler_DefaultService',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService',
            'sonata.block.exception.strategy.manager' => 'getSonata_Block_Exception_Strategy_ManagerService',
            'sonata.block.loader.chain' => 'getSonata_Block_Loader_ChainService',
            'sonata.block.loader.service' => 'getSonata_Block_Loader_ServiceService',
            'sonata.block.manager' => 'getSonata_Block_ManagerService',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService',
            'sonata.block.templating.helper' => 'getSonata_Block_Templating_HelperService',
            'sonata.block.twig.global' => 'getSonata_Block_Twig_GlobalService',
            'sonata.core.flashmessage.twig.extension' => 'getSonata_Core_Flashmessage_Twig_ExtensionService',
            'sonata.core.twig.deprecated_template_extension' => 'getSonata_Core_Twig_DeprecatedTemplateExtensionService',
            'sonata.core.twig.extension.text' => 'getSonata_Core_Twig_Extension_TextService',
            'sonata.core.twig.extension.wrapping' => 'getSonata_Core_Twig_Extension_WrappingService',
            'sonata.core.twig.status_extension' => 'getSonata_Core_Twig_StatusExtensionService',
            'sonata.core.twig.template_extension' => 'getSonata_Core_Twig_TemplateExtensionService',
            'sonata.user.admin.group' => 'getSonata_User_Admin_GroupService',
            'sonata.user.admin.user' => 'getSonata_User_Admin_UserService',
            'sonata.user.matrix_roles_builder' => 'getSonata_User_MatrixRolesBuilderService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.extension.sortbyfield' => 'getTwig_Extension_SortbyfieldService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.validator_factory' => 'getValidator_ValidatorFactoryService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.csp.handler' => 'getWebProfiler_Csp_HandlerService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        ];
        $this->fileMap = [
            'AppBundle\\Controller\\AdminController' => 'getAdminControllerService.php',
            'AppBundle\\Controller\\ApiController' => 'getApiControllerService.php',
            'AppBundle\\Controller\\AuthController' => 'getAuthControllerService.php',
            'AppBundle\\Controller\\CommandController' => 'getCommandControllerService.php',
            'AppBundle\\Controller\\DashboardController' => 'getDashboardControllerService.php',
            'AppBundle\\Controller\\DefaultController' => 'getDefaultControllerService.php',
            'AppBundle\\Controller\\NotificationsController' => 'getNotificationsControllerService.php',
            'AppBundle\\Controller\\PortalController' => 'getPortalControllerService.php',
            'AppBundle\\Controller\\RecollectionController' => 'getRecollectionControllerService.php',
            'AppBundle\\Controller\\ResettingController' => 'getResettingControllerService.php',
            'AppBundle\\Controller\\SamlController' => 'getSamlControllerService.php',
            'AppBundle\\Controller\\SecurityController' => 'getSecurityControllerService.php',
            'AppBundle\\Controller\\ServicesController' => 'getServicesControllerService.php',
            'AppBundle\\Controller\\SourceDoggController' => 'getSourceDoggControllerService.php',
            'AppBundle\\Controller\\TestController' => 'getTestControllerService.php',
            'AppBundle\\Controller\\UserGuideController' => 'getUserGuideControllerService.php',
            'AppBundle\\EventListener\\PasswordResettingListener' => 'getPasswordResettingListenerService.php',
            'AppBundle\\EventSubscriber\\SamlSubscriber' => 'getSamlSubscriberService.php',
            'FOS\\OAuthServerBundle\\Controller\\TokenController' => 'getTokenControllerService.php',
            'Sonata\\AdminBundle\\Action\\DashboardAction' => 'getDashboardActionService.php',
            'Sonata\\AdminBundle\\Action\\SearchAction' => 'getSearchActionService.php',
            'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand' => 'getCreateClassCacheCommandService.php',
            'Sonata\\AdminBundle\\Command\\ExplainAdminCommand' => 'getExplainAdminCommandService.php',
            'Sonata\\AdminBundle\\Command\\GenerateAdminCommand' => 'getGenerateAdminCommandService.php',
            'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand' => 'getGenerateObjectAclCommandService.php',
            'Sonata\\AdminBundle\\Command\\ListAdminCommand' => 'getListAdminCommandService.php',
            'Sonata\\AdminBundle\\Command\\SetupAclCommand' => 'getSetupAclCommandService.php',
            'Sonata\\BlockBundle\\Command\\DebugBlocksCommand' => 'getDebugBlocksCommandService.php',
            'Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand' => 'getSonataDumpDoctrineMetaCommandService.php',
            'Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand' => 'getSonataListFormMappingCommandService.php',
            'Sonata\\EasyExtendsBundle\\Command\\DumpMappingCommand' => 'getDumpMappingCommandService.php',
            'Sonata\\EasyExtendsBundle\\Command\\GenerateCommand' => 'getGenerateCommandService.php',
            'Sonata\\UserBundle\\Action\\CheckEmailAction' => 'getCheckEmailActionService.php',
            'Sonata\\UserBundle\\Action\\CheckLoginAction' => 'getCheckLoginActionService.php',
            'Sonata\\UserBundle\\Action\\LoginAction' => 'getLoginActionService.php',
            'Sonata\\UserBundle\\Action\\LogoutAction' => 'getLogoutActionService.php',
            'Sonata\\UserBundle\\Action\\RequestAction' => 'getRequestActionService.php',
            'Sonata\\UserBundle\\Action\\ResetAction' => 'getResetActionService.php',
            'Sonata\\UserBundle\\Action\\SendEmailAction' => 'getSendEmailActionService.php',
            'Sonata\\UserBundle\\Command\\TwoStepVerificationCommand' => 'getTwoStepVerificationCommandService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'admin.buyer_membership.template_registry' => 'getAdmin_BuyerMembership_TemplateRegistryService.php',
            'admin.buyers.template_registry' => 'getAdmin_Buyers_TemplateRegistryService.php',
            'admin.categories.template_registry' => 'getAdmin_Categories_TemplateRegistryService.php',
            'admin.companies.template_registry' => 'getAdmin_Companies_TemplateRegistryService.php',
            'admin.company_addresses.template_registry' => 'getAdmin_CompanyAddresses_TemplateRegistryService.php',
            'admin.company_contacts.template_registry' => 'getAdmin_CompanyContacts_TemplateRegistryService.php',
            'admin.company_directors.template_registry' => 'getAdmin_CompanyDirectors_TemplateRegistryService.php',
            'admin.company_documents.template_registry' => 'getAdmin_CompanyDocuments_TemplateRegistryService.php',
            'admin.company_references.template_registry' => 'getAdmin_CompanyReferences_TemplateRegistryService.php',
            'admin.company_requests.template_registry' => 'getAdmin_CompanyRequests_TemplateRegistryService.php',
            'admin.company_shareholding.template_registry' => 'getAdmin_CompanyShareholding_TemplateRegistryService.php',
            'admin.company_type_documentation.template_registry' => 'getAdmin_CompanyTypeDocumentation_TemplateRegistryService.php',
            'admin.company_types.template_registry' => 'getAdmin_CompanyTypes_TemplateRegistryService.php',
            'admin.company_verification.template_registry' => 'getAdmin_CompanyVerification_TemplateRegistryService.php',
            'admin.content_categories.template_registry' => 'getAdmin_ContentCategories_TemplateRegistryService.php',
            'admin.documents_types.template_registry' => 'getAdmin_DocumentsTypes_TemplateRegistryService.php',
            'admin.members.template_registry' => 'getAdmin_Members_TemplateRegistryService.php',
            'admin.news.template_registry' => 'getAdmin_News_TemplateRegistryService.php',
            'admin.payment_modes.template_registry' => 'getAdmin_PaymentModes_TemplateRegistryService.php',
            'admin.payments.template_registry' => 'getAdmin_Payments_TemplateRegistryService.php',
            'admin.promo_codes.template_registry' => 'getAdmin_PromoCodes_TemplateRegistryService.php',
            'admin.requests.template_registry' => 'getAdmin_Requests_TemplateRegistryService.php',
            'admin.requests_documents.template_registry' => 'getAdmin_RequestsDocuments_TemplateRegistryService.php',
            'admin.requests_type.template_registry' => 'getAdmin_RequestsType_TemplateRegistryService.php',
            'admin.staff.template_registry' => 'getAdmin_Staff_TemplateRegistryService.php',
            'admin.testimonials.template_registry' => 'getAdmin_Testimonials_TemplateRegistryService.php',
            'admin.tierBenefits.template_registry' => 'getAdmin_TierBenefits_TemplateRegistryService.php',
            'admin.tiers.template_registry' => 'getAdmin_Tiers_TemplateRegistryService.php',
            'admin.ujuzi_hub.template_registry' => 'getAdmin_UjuziHub_TemplateRegistryService.php',
            'admin.user_guide.content.template_registry' => 'getAdmin_UserGuide_Content_TemplateRegistryService.php',
            'admin.user_guide.topic.template_registry' => 'getAdmin_UserGuide_Topic_TemplateRegistryService.php',
            'admin.verification_stages.template_registry' => 'getAdmin_VerificationStages_TemplateRegistryService.php',
            'admin.verification_step.template_registry' => 'getAdmin_VerificationStep_TemplateRegistryService.php',
            'annotations.cache' => 'getAnnotations_CacheService.php',
            'annotations.cache_warmer' => 'getAnnotations_CacheWarmerService.php',
            'app.activity_service' => 'getApp_ActivityServiceService.php',
            'app.azure' => 'getApp_AzureService.php',
            'app.command.create_oauth_client' => 'getApp_Command_CreateOauthClientService.php',
            'app.company.service' => 'getApp_Company_ServiceService.php',
            'app.crb_service' => 'getApp_CrbServiceService.php',
            'app.hivebrite' => 'getApp_HivebriteService.php',
            'app.notifications' => 'getApp_NotificationsService.php',
            'app.password_resetting' => 'getApp_PasswordResettingService.php',
            'app.post.save' => 'getApp_Post_SaveService.php',
            'app.print_service' => 'getApp_PrintServiceService.php',
            'app.saml.event_subscriber' => 'getApp_Saml_EventSubscriberService.php',
            'app.saml.service_provider_repository' => 'getApp_Saml_ServiceProviderRepositoryService.php',
            'app.sourcedogg' => 'getApp_SourcedoggService.php',
            'app.sourcedogg_selenium' => 'getApp_SourcedoggSeleniumService.php',
            'app.user' => 'getApp_UserService.php',
            'argument_resolver.default' => 'getArgumentResolver_DefaultService.php',
            'argument_resolver.request' => 'getArgumentResolver_RequestService.php',
            'argument_resolver.request_attribute' => 'getArgumentResolver_RequestAttributeService.php',
            'argument_resolver.service' => 'getArgumentResolver_ServiceService.php',
            'argument_resolver.session' => 'getArgumentResolver_SessionService.php',
            'argument_resolver.variadic' => 'getArgumentResolver_VariadicService.php',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService.php',
            'assetic.asset_manager_cache_warmer' => 'getAssetic_AssetManagerCacheWarmerService.php',
            'assetic.controller' => 'getAssetic_ControllerService.php',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService.php',
            'assetic.filter.jsqueeze' => 'getAssetic_Filter_JsqueezeService.php',
            'assetic.filter.minifycsscompressor' => 'getAssetic_Filter_MinifycsscompressorService.php',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService.php',
            'azure.oauth_aware.user_provider.service' => 'getAzure_OauthAware_UserProvider_ServiceService.php',
            'cache.default_clearer' => 'getCache_DefaultClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'config.resource.self_checking_resource_checker' => 'getConfig_Resource_SelfCheckingResourceCheckerService.php',
            'console.command.about' => 'getConsole_Command_AboutService.php',
            'console.command.appbundle_command_addtogroupcommand' => 'getConsole_Command_AppbundleCommandAddtogroupcommandService.php',
            'console.command.appbundle_command_addverificationcommand' => 'getConsole_Command_AppbundleCommandAddverificationcommandService.php',
            'console.command.appbundle_command_closerequestscommand' => 'getConsole_Command_AppbundleCommandCloserequestscommandService.php',
            'console.command.appbundle_command_confirmationcommand' => 'getConsole_Command_AppbundleCommandConfirmationcommandService.php',
            'console.command.appbundle_command_createbronzecommand' => 'getConsole_Command_AppbundleCommandCreatebronzecommandService.php',
            'console.command.appbundle_command_createoauthclientcommand' => 'getConsole_Command_AppbundleCommandCreateoauthclientcommandService.php',
            'console.command.appbundle_command_dbbackupcommand' => 'getConsole_Command_AppbundleCommandDbbackupcommandService.php',
            'console.command.appbundle_command_importsupplierscommand' => 'getConsole_Command_AppbundleCommandImportsupplierscommandService.php',
            'console.command.appbundle_command_importtenderscommand' => 'getConsole_Command_AppbundleCommandImporttenderscommandService.php',
            'console.command.appbundle_command_importupdatecommand' => 'getConsole_Command_AppbundleCommandImportupdatecommandService.php',
            'console.command.appbundle_command_importupdatevalidationcommand' => 'getConsole_Command_AppbundleCommandImportupdatevalidationcommandService.php',
            'console.command.appbundle_command_invoicecommand' => 'getConsole_Command_AppbundleCommandInvoicecommandService.php',
            'console.command.appbundle_command_migratereferencescommand' => 'getConsole_Command_AppbundleCommandMigratereferencescommandService.php',
            'console.command.appbundle_command_migratetoazurecommand' => 'getConsole_Command_AppbundleCommandMigratetoazurecommandService.php',
            'console.command.appbundle_command_organisationtosourcedoggcommand' => 'getConsole_Command_AppbundleCommandOrganisationtosourcedoggcommandService.php',
            'console.command.appbundle_command_patacommand' => 'getConsole_Command_AppbundleCommandPatacommandService.php',
            'console.command.appbundle_command_pushtoapicommand' => 'getConsole_Command_AppbundleCommandPushtoapicommandService.php',
            'console.command.appbundle_command_requestsremindercommand' => 'getConsole_Command_AppbundleCommandRequestsremindercommandService.php',
            'console.command.appbundle_command_runbronzecommand' => 'getConsole_Command_AppbundleCommandRunbronzecommandService.php',
            'console.command.appbundle_command_runcrbcommand' => 'getConsole_Command_AppbundleCommandRuncrbcommandService.php',
            'console.command.appbundle_command_sendemailactivationcommand' => 'getConsole_Command_AppbundleCommandSendemailactivationcommandService.php',
            'console.command.appbundle_command_smscommand' => 'getConsole_Command_AppbundleCommandSmscommandService.php',
            'console.command.appbundle_command_subscriptionremindercommand' => 'getConsole_Command_AppbundleCommandSubscriptionremindercommandService.php',
            'console.command.appbundle_command_updatesubscriptioncommand' => 'getConsole_Command_AppbundleCommandUpdatesubscriptioncommandService.php',
            'console.command.appbundle_command_updatesupplierscommand' => 'getConsole_Command_AppbundleCommandUpdatesupplierscommandService.php',
            'console.command.appbundle_command_usertosourcedoggcommand' => 'getConsole_Command_AppbundleCommandUsertosourcedoggcommandService.php',
            'console.command.assets_install' => 'getConsole_Command_AssetsInstallService.php',
            'console.command.cache_clear' => 'getConsole_Command_CacheClearService.php',
            'console.command.cache_pool_clear' => 'getConsole_Command_CachePoolClearService.php',
            'console.command.cache_pool_prune' => 'getConsole_Command_CachePoolPruneService.php',
            'console.command.cache_warmup' => 'getConsole_Command_CacheWarmupService.php',
            'console.command.config_debug' => 'getConsole_Command_ConfigDebugService.php',
            'console.command.config_dump_reference' => 'getConsole_Command_ConfigDumpReferenceService.php',
            'console.command.container_debug' => 'getConsole_Command_ContainerDebugService.php',
            'console.command.debug_autowiring' => 'getConsole_Command_DebugAutowiringService.php',
            'console.command.event_dispatcher_debug' => 'getConsole_Command_EventDispatcherDebugService.php',
            'console.command.form_debug' => 'getConsole_Command_FormDebugService.php',
            'console.command.router_debug' => 'getConsole_Command_RouterDebugService.php',
            'console.command.router_match' => 'getConsole_Command_RouterMatchService.php',
            'console.command.translation_debug' => 'getConsole_Command_TranslationDebugService.php',
            'console.command.translation_update' => 'getConsole_Command_TranslationUpdateService.php',
            'console.command.xliff_lint' => 'getConsole_Command_XliffLintService.php',
            'console.command.yaml_lint' => 'getConsole_Command_YamlLintService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'console.error_listener' => 'getConsole_ErrorListenerService.php',
            'debug.dump_listener' => 'getDebug_DumpListenerService.php',
            'debug.file_link_formatter.url_format' => 'getDebug_FileLinkFormatter_UrlFormatService.php',
            'dependency_injection.config.container_parameters_resource_checker' => 'getDependencyInjection_Config_ContainerParametersResourceCheckerService.php',
            'deprecated.form.registry' => 'getDeprecated_Form_RegistryService.php',
            'deprecated.form.registry.csrf' => 'getDeprecated_Form_Registry_CsrfService.php',
            'doctrine.cache_clear_metadata_command' => 'getDoctrine_CacheClearMetadataCommandService.php',
            'doctrine.cache_clear_query_cache_command' => 'getDoctrine_CacheClearQueryCacheCommandService.php',
            'doctrine.cache_clear_result_command' => 'getDoctrine_CacheClearResultCommandService.php',
            'doctrine.cache_collection_region_command' => 'getDoctrine_CacheCollectionRegionCommandService.php',
            'doctrine.clear_entity_region_command' => 'getDoctrine_ClearEntityRegionCommandService.php',
            'doctrine.clear_query_region_command' => 'getDoctrine_ClearQueryRegionCommandService.php',
            'doctrine.database_create_command' => 'getDoctrine_DatabaseCreateCommandService.php',
            'doctrine.database_drop_command' => 'getDoctrine_DatabaseDropCommandService.php',
            'doctrine.database_import_command' => 'getDoctrine_DatabaseImportCommandService.php',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService.php',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService.php',
            'doctrine.ensure_production_settings_command' => 'getDoctrine_EnsureProductionSettingsCommandService.php',
            'doctrine.generate_entities_command' => 'getDoctrine_GenerateEntitiesCommandService.php',
            'doctrine.mapping_convert_command' => 'getDoctrine_MappingConvertCommandService.php',
            'doctrine.mapping_import_command' => 'getDoctrine_MappingImportCommandService.php',
            'doctrine.mapping_info_command' => 'getDoctrine_MappingInfoCommandService.php',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService.php',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService.php',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService.php',
            'doctrine.orm.proxy_cache_warmer' => 'getDoctrine_Orm_ProxyCacheWarmerService.php',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService.php',
            'doctrine.query_dql_command' => 'getDoctrine_QueryDqlCommandService.php',
            'doctrine.query_sql_command' => 'getDoctrine_QuerySqlCommandService.php',
            'doctrine.schema_create_command' => 'getDoctrine_SchemaCreateCommandService.php',
            'doctrine.schema_drop_command' => 'getDoctrine_SchemaDropCommandService.php',
            'doctrine.schema_update_command' => 'getDoctrine_SchemaUpdateCommandService.php',
            'doctrine.schema_validate_command' => 'getDoctrine_SchemaValidateCommandService.php',
            'doctrine_cache.contains_command' => 'getDoctrineCache_ContainsCommandService.php',
            'doctrine_cache.delete_command' => 'getDoctrineCache_DeleteCommandService.php',
            'doctrine_cache.flush_command' => 'getDoctrineCache_FlushCommandService.php',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService.php',
            'doctrine_cache.stats_command' => 'getDoctrineCache_StatsCommandService.php',
            'expertcoder_swift_mailer.send_grid.transport' => 'getExpertcoderSwiftMailer_SendGrid_TransportService.php',
            'filesystem' => 'getFilesystemService.php',
            'form.extension' => 'getForm_ExtensionService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'form.registry' => 'getForm_RegistryService.php',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService.php',
            'form.server_params' => 'getForm_ServerParamsService.php',
            'form.type.birthday' => 'getForm_Type_BirthdayService.php',
            'form.type.button' => 'getForm_Type_ButtonService.php',
            'form.type.checkbox' => 'getForm_Type_CheckboxService.php',
            'form.type.choice' => 'getForm_Type_ChoiceService.php',
            'form.type.collection' => 'getForm_Type_CollectionService.php',
            'form.type.country' => 'getForm_Type_CountryService.php',
            'form.type.currency' => 'getForm_Type_CurrencyService.php',
            'form.type.date' => 'getForm_Type_DateService.php',
            'form.type.datetime' => 'getForm_Type_DatetimeService.php',
            'form.type.email' => 'getForm_Type_EmailService.php',
            'form.type.entity' => 'getForm_Type_EntityService.php',
            'form.type.file' => 'getForm_Type_FileService.php',
            'form.type.form' => 'getForm_Type_FormService.php',
            'form.type.hidden' => 'getForm_Type_HiddenService.php',
            'form.type.integer' => 'getForm_Type_IntegerService.php',
            'form.type.language' => 'getForm_Type_LanguageService.php',
            'form.type.locale' => 'getForm_Type_LocaleService.php',
            'form.type.money' => 'getForm_Type_MoneyService.php',
            'form.type.number' => 'getForm_Type_NumberService.php',
            'form.type.password' => 'getForm_Type_PasswordService.php',
            'form.type.percent' => 'getForm_Type_PercentService.php',
            'form.type.radio' => 'getForm_Type_RadioService.php',
            'form.type.range' => 'getForm_Type_RangeService.php',
            'form.type.repeated' => 'getForm_Type_RepeatedService.php',
            'form.type.reset' => 'getForm_Type_ResetService.php',
            'form.type.search' => 'getForm_Type_SearchService.php',
            'form.type.submit' => 'getForm_Type_SubmitService.php',
            'form.type.text' => 'getForm_Type_TextService.php',
            'form.type.textarea' => 'getForm_Type_TextareaService.php',
            'form.type.time' => 'getForm_Type_TimeService.php',
            'form.type.timezone' => 'getForm_Type_TimezoneService.php',
            'form.type.url' => 'getForm_Type_UrlService.php',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService.php',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService.php',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService.php',
            'form.type_extension.form.transformation_failure_handling' => 'getForm_TypeExtension_Form_TransformationFailureHandlingService.php',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService.php',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService.php',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService.php',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService.php',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService.php',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService.php',
            'fos_oauth_server.access_token_manager.default' => 'getFosOauthServer_AccessTokenManager_DefaultService.php',
            'fos_oauth_server.auth_code_manager.default' => 'getFosOauthServer_AuthCodeManager_DefaultService.php',
            'fos_oauth_server.authorize.form' => 'getFosOauthServer_Authorize_FormService.php',
            'fos_oauth_server.authorize.form.handler.default' => 'getFosOauthServer_Authorize_Form_Handler_DefaultService.php',
            'fos_oauth_server.authorize.form.type' => 'getFosOauthServer_Authorize_Form_TypeService.php',
            'fos_oauth_server.clean_command' => 'getFosOauthServer_CleanCommandService.php',
            'fos_oauth_server.client_manager.default' => 'getFosOauthServer_ClientManager_DefaultService.php',
            'fos_oauth_server.controller.authorize' => 'getFosOauthServer_Controller_AuthorizeService.php',
            'fos_oauth_server.create_client_command' => 'getFosOauthServer_CreateClientCommandService.php',
            'fos_oauth_server.entity_manager' => 'getFosOauthServer_EntityManagerService.php',
            'fos_oauth_server.refresh_token_manager.default' => 'getFosOauthServer_RefreshTokenManager_DefaultService.php',
            'fos_oauth_server.server' => 'getFosOauthServer_ServerService.php',
            'fos_oauth_server.storage' => 'getFosOauthServer_StorageService.php',
            'fos_user.change_password.controller' => 'getFosUser_ChangePassword_ControllerService.php',
            'fos_user.change_password.form.factory' => 'getFosUser_ChangePassword_Form_FactoryService.php',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService.php',
            'fos_user.command.activate_user' => 'getFosUser_Command_ActivateUserService.php',
            'fos_user.command.change_password' => 'getFosUser_Command_ChangePasswordService.php',
            'fos_user.command.create_user' => 'getFosUser_Command_CreateUserService.php',
            'fos_user.command.deactivate_user' => 'getFosUser_Command_DeactivateUserService.php',
            'fos_user.command.demote_user' => 'getFosUser_Command_DemoteUserService.php',
            'fos_user.command.promote_user' => 'getFosUser_Command_PromoteUserService.php',
            'fos_user.group.controller' => 'getFosUser_Group_ControllerService.php',
            'fos_user.group.form.factory' => 'getFosUser_Group_Form_FactoryService.php',
            'fos_user.group.form.type' => 'getFosUser_Group_Form_TypeService.php',
            'fos_user.group_manager' => 'getFosUser_GroupManagerService.php',
            'fos_user.listener.authentication' => 'getFosUser_Listener_AuthenticationService.php',
            'fos_user.listener.flash' => 'getFosUser_Listener_FlashService.php',
            'fos_user.listener.resetting' => 'getFosUser_Listener_ResettingService.php',
            'fos_user.mailer' => 'getFosUser_MailerService.php',
            'fos_user.object_manager' => 'getFosUser_ObjectManagerService.php',
            'fos_user.profile.controller' => 'getFosUser_Profile_ControllerService.php',
            'fos_user.profile.form.factory' => 'getFosUser_Profile_Form_FactoryService.php',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService.php',
            'fos_user.registration.controller' => 'getFosUser_Registration_ControllerService.php',
            'fos_user.registration.form.factory' => 'getFosUser_Registration_Form_FactoryService.php',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService.php',
            'fos_user.resetting.controller' => 'getFosUser_Resetting_ControllerService.php',
            'fos_user.resetting.form.factory' => 'getFosUser_Resetting_Form_FactoryService.php',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService.php',
            'fos_user.security.controller' => 'getFosUser_Security_ControllerService.php',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService.php',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService.php',
            'fos_user.user_manager' => 'getFosUser_UserManagerService.php',
            'fos_user.user_provider.username' => 'getFosUser_UserProvider_UsernameService.php',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService.php',
            'fos_user.util.password_updater' => 'getFosUser_Util_PasswordUpdaterService.php',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService.php',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService.php',
            'fragment.handler' => 'getFragment_HandlerService.php',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService.php',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService.php',
            'httplug.async_client.default' => 'getHttplug_AsyncClient_DefaultService.php',
            'httplug.client.default' => 'getHttplug_Client_DefaultService.php',
            'httplug.message_factory.default' => 'getHttplug_MessageFactory_DefaultService.php',
            'httplug.stream_factory.default' => 'getHttplug_StreamFactory_DefaultService.php',
            'httplug.uri_factory.default' => 'getHttplug_UriFactory_DefaultService.php',
            'hwi_oauth.authentication.listener.oauth.main' => 'getHwiOauth_Authentication_Listener_Oauth_MainService.php',
            'hwi_oauth.authentication.provider.oauth.main' => 'getHwiOauth_Authentication_Provider_Oauth_MainService.php',
            'hwi_oauth.http_client' => 'getHwiOauth_HttpClientService.php',
            'hwi_oauth.registration.form.handler.fosub_bridge' => 'getHwiOauth_Registration_Form_Handler_FosubBridgeService.php',
            'hwi_oauth.resource_owner.azure' => 'getHwiOauth_ResourceOwner_AzureService.php',
            'hwi_oauth.user.provider.entity.main' => 'getHwiOauth_User_Provider_Entity_MainService.php',
            'hwi_oauth.user.provider.fosub_bridge' => 'getHwiOauth_User_Provider_FosubBridgeService.php',
            'hwi_oauth.user_checker' => 'getHwiOauth_UserCheckerService.php',
            'ivory_ck_editor.command.installer' => 'getIvoryCkEditor_Command_InstallerService.php',
            'ivory_ck_editor.config_manager' => 'getIvoryCkEditor_ConfigManagerService.php',
            'ivory_ck_editor.form.type' => 'getIvoryCkEditor_Form_TypeService.php',
            'ivory_ck_editor.installer' => 'getIvoryCkEditor_InstallerService.php',
            'ivory_ck_editor.plugin_manager' => 'getIvoryCkEditor_PluginManagerService.php',
            'ivory_ck_editor.renderer.json_builder' => 'getIvoryCkEditor_Renderer_JsonBuilderService.php',
            'ivory_ck_editor.styles_set_manager' => 'getIvoryCkEditor_StylesSetManagerService.php',
            'ivory_ck_editor.template_manager' => 'getIvoryCkEditor_TemplateManagerService.php',
            'ivory_ck_editor.toolbar_manager' => 'getIvoryCkEditor_ToolbarManagerService.php',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService.php',
            'knp_menu.factory' => 'getKnpMenu_FactoryService.php',
            'knp_menu.menu_provider.builder_alias' => 'getKnpMenu_MenuProvider_BuilderAliasService.php',
            'knp_menu.menu_provider.lazy' => 'getKnpMenu_MenuProvider_LazyService.php',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService.php',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService.php',
            'knp_menu.voter.router' => 'getKnpMenu_Voter_RouterService.php',
            'knp_snappy.image' => 'getKnpSnappy_ImageService.php',
            'knp_snappy.pdf' => 'getKnpSnappy_PdfService.php',
            'maker.auto_command.make_auth' => 'getMaker_AutoCommand_MakeAuthService.php',
            'maker.auto_command.make_command' => 'getMaker_AutoCommand_MakeCommandService.php',
            'maker.auto_command.make_controller' => 'getMaker_AutoCommand_MakeControllerService.php',
            'maker.auto_command.make_crud' => 'getMaker_AutoCommand_MakeCrudService.php',
            'maker.auto_command.make_entity' => 'getMaker_AutoCommand_MakeEntityService.php',
            'maker.auto_command.make_fixtures' => 'getMaker_AutoCommand_MakeFixturesService.php',
            'maker.auto_command.make_form' => 'getMaker_AutoCommand_MakeFormService.php',
            'maker.auto_command.make_functional_test' => 'getMaker_AutoCommand_MakeFunctionalTestService.php',
            'maker.auto_command.make_migration' => 'getMaker_AutoCommand_MakeMigrationService.php',
            'maker.auto_command.make_registration_form' => 'getMaker_AutoCommand_MakeRegistrationFormService.php',
            'maker.auto_command.make_serializer_encoder' => 'getMaker_AutoCommand_MakeSerializerEncoderService.php',
            'maker.auto_command.make_serializer_normalizer' => 'getMaker_AutoCommand_MakeSerializerNormalizerService.php',
            'maker.auto_command.make_sonata_admin' => 'getMaker_AutoCommand_MakeSonataAdminService.php',
            'maker.auto_command.make_subscriber' => 'getMaker_AutoCommand_MakeSubscriberService.php',
            'maker.auto_command.make_twig_extension' => 'getMaker_AutoCommand_MakeTwigExtensionService.php',
            'maker.auto_command.make_unit_test' => 'getMaker_AutoCommand_MakeUnitTestService.php',
            'maker.auto_command.make_user' => 'getMaker_AutoCommand_MakeUserService.php',
            'maker.auto_command.make_validator' => 'getMaker_AutoCommand_MakeValidatorService.php',
            'maker.auto_command.make_voter' => 'getMaker_AutoCommand_MakeVoterService.php',
            'maker.console_error_listener' => 'getMaker_ConsoleErrorListenerService.php',
            'maker.doctrine_helper' => 'getMaker_DoctrineHelperService.php',
            'maker.file_manager' => 'getMaker_FileManagerService.php',
            'maker.generator' => 'getMaker_GeneratorService.php',
            'maker.renderer.form_type_renderer' => 'getMaker_Renderer_FormTypeRendererService.php',
            'maker.security_config_updater' => 'getMaker_SecurityConfigUpdaterService.php',
            'monolog.handler.azure' => 'getMonolog_Handler_AzureService.php',
            'monolog.handler.dumps' => 'getMonolog_Handler_DumpsService.php',
            'monolog.handler.email' => 'getMonolog_Handler_EmailService.php',
            'monolog.handler.hivebrite' => 'getMonolog_Handler_HivebriteService.php',
            'monolog.handler.hubtel' => 'getMonolog_Handler_HubtelService.php',
            'monolog.handler.import' => 'getMonolog_Handler_ImportService.php',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService.php',
            'monolog.handler.sms' => 'getMonolog_Handler_SmsService.php',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService.php',
            'monolog.logger.azure' => 'getMonolog_Logger_AzureService.php',
            'monolog.logger.console' => 'getMonolog_Logger_ConsoleService.php',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService.php',
            'monolog.logger.dumps' => 'getMonolog_Logger_DumpsService.php',
            'monolog.logger.email' => 'getMonolog_Logger_EmailService.php',
            'monolog.logger.hivebrite' => 'getMonolog_Logger_HivebriteService.php',
            'monolog.logger.hubtel' => 'getMonolog_Logger_HubtelService.php',
            'monolog.logger.import' => 'getMonolog_Logger_ImportService.php',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService.php',
            'monolog.logger.sms' => 'getMonolog_Logger_SmsService.php',
            'monolog.logger.snappy' => 'getMonolog_Logger_SnappyService.php',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService.php',
            'router.cache_warmer' => 'getRouter_CacheWarmerService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.access.authenticated_voter' => 'getSecurity_Access_AuthenticatedVoterService.php',
            'security.access.expression_voter' => 'getSecurity_Access_ExpressionVoterService.php',
            'security.access.role_hierarchy_voter' => 'getSecurity_Access_RoleHierarchyVoterService.php',
            'security.access_listener' => 'getSecurity_AccessListenerService.php',
            'security.access_map' => 'getSecurity_AccessMapService.php',
            'security.acl.dbal.schema' => 'getSecurity_Acl_Dbal_SchemaService.php',
            'security.acl.dbal.schema_listener' => 'getSecurity_Acl_Dbal_SchemaListenerService.php',
            'security.acl.provider' => 'getSecurity_Acl_ProviderService.php',
            'security.acl.voter.basic_permissions' => 'getSecurity_Acl_Voter_BasicPermissionsService.php',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService.php',
            'security.authentication.listener.anonymous.admin' => 'getSecurity_Authentication_Listener_Anonymous_AdminService.php',
            'security.authentication.listener.anonymous.main' => 'getSecurity_Authentication_Listener_Anonymous_MainService.php',
            'security.authentication.listener.anonymous.oauth_authorize' => 'getSecurity_Authentication_Listener_Anonymous_OauthAuthorizeService.php',
            'security.authentication.listener.form.admin' => 'getSecurity_Authentication_Listener_Form_AdminService.php',
            'security.authentication.listener.form.oauth_authorize' => 'getSecurity_Authentication_Listener_Form_OauthAuthorizeService.php',
            'security.authentication.provider.anonymous.admin' => 'getSecurity_Authentication_Provider_Anonymous_AdminService.php',
            'security.authentication.provider.anonymous.main' => 'getSecurity_Authentication_Provider_Anonymous_MainService.php',
            'security.authentication.provider.anonymous.oauth_authorize' => 'getSecurity_Authentication_Provider_Anonymous_OauthAuthorizeService.php',
            'security.authentication.provider.dao.admin' => 'getSecurity_Authentication_Provider_Dao_AdminService.php',
            'security.authentication.provider.dao.oauth_authorize' => 'getSecurity_Authentication_Provider_Dao_OauthAuthorizeService.php',
            'security.authentication.session_strategy.admin' => 'getSecurity_Authentication_SessionStrategy_AdminService.php',
            'security.authentication.switchuser_listener.admin' => 'getSecurity_Authentication_SwitchuserListener_AdminService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.channel_listener' => 'getSecurity_ChannelListenerService.php',
            'security.command.init_acl' => 'getSecurity_Command_InitAclService.php',
            'security.command.set_acl' => 'getSecurity_Command_SetAclService.php',
            'security.command.user_password_encoder' => 'getSecurity_Command_UserPasswordEncoderService.php',
            'security.context_listener.0' => 'getSecurity_ContextListener_0Service.php',
            'security.context_listener.1' => 'getSecurity_ContextListener_1Service.php',
            'security.context_listener.2' => 'getSecurity_ContextListener_2Service.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.csrf.token_storage' => 'getSecurity_Csrf_TokenStorageService.php',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService.php',
            'security.firewall.map.context.admin' => 'getSecurity_Firewall_Map_Context_AdminService.php',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService.php',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService.php',
            'security.firewall.map.context.oauth_authorize' => 'getSecurity_Firewall_Map_Context_OauthAuthorizeService.php',
            'security.firewall.map.context.oauth_token' => 'getSecurity_Firewall_Map_Context_OauthTokenService.php',
            'security.logout.handler.csrf_token_clearing' => 'getSecurity_Logout_Handler_CsrfTokenClearingService.php',
            'security.logout.handler.session' => 'getSecurity_Logout_Handler_SessionService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'security.request_matcher.6xxs_ip' => 'getSecurity_RequestMatcher_6xxsIpService.php',
            'security.request_matcher.gt2qimv' => 'getSecurity_RequestMatcher_Gt2qimvService.php',
            'security.request_matcher.kenuv22' => 'getSecurity_RequestMatcher_Kenuv22Service.php',
            'security.request_matcher.q0ptkup' => 'getSecurity_RequestMatcher_Q0ptkupService.php',
            'security.request_matcher.zfhj2lw' => 'getSecurity_RequestMatcher_Zfhj2lwService.php',
            'security.user_value_resolver' => 'getSecurity_UserValueResolverService.php',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService.php',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService.php',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService.php',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService.php',
            'service_locator.2po_rap' => 'getServiceLocator_2poRapService.php',
            'service_locator.mctheb9' => 'getServiceLocator_Mctheb9Service.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session' => 'getSessionService.php',
            'session.handler' => 'getSession_HandlerService.php',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService.php',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService.php',
            'session.storage.native' => 'getSession_Storage_NativeService.php',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService.php',
            'sonata.admin.action.append_form_field_element' => 'getSonata_Admin_Action_AppendFormFieldElementService.php',
            'sonata.admin.action.get_short_object_description' => 'getSonata_Admin_Action_GetShortObjectDescriptionService.php',
            'sonata.admin.action.retrieve_autocomplete_items' => 'getSonata_Admin_Action_RetrieveAutocompleteItemsService.php',
            'sonata.admin.action.retrieve_form_field_element' => 'getSonata_Admin_Action_RetrieveFormFieldElementService.php',
            'sonata.admin.action.set_object_field_value' => 'getSonata_Admin_Action_SetObjectFieldValueService.php',
            'sonata.admin.audit.manager' => 'getSonata_Admin_Audit_ManagerService.php',
            'sonata.admin.block.admin_list' => 'getSonata_Admin_Block_AdminListService.php',
            'sonata.admin.block.search_result' => 'getSonata_Admin_Block_SearchResultService.php',
            'sonata.admin.block.stats' => 'getSonata_Admin_Block_StatsService.php',
            'sonata.admin.breadcrumbs_builder' => 'getSonata_Admin_BreadcrumbsBuilderService.php',
            'sonata.admin.builder.filter.factory' => 'getSonata_Admin_Builder_Filter_FactoryService.php',
            'sonata.admin.builder.orm_datagrid' => 'getSonata_Admin_Builder_OrmDatagridService.php',
            'sonata.admin.builder.orm_form' => 'getSonata_Admin_Builder_OrmFormService.php',
            'sonata.admin.builder.orm_list' => 'getSonata_Admin_Builder_OrmListService.php',
            'sonata.admin.builder.orm_show' => 'getSonata_Admin_Builder_OrmShowService.php',
            'sonata.admin.controller.admin' => 'getSonata_Admin_Controller_AdminService.php',
            'sonata.admin.doctrine_orm.form.type.choice_field_mask' => 'getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService.php',
            'sonata.admin.event.extension' => 'getSonata_Admin_Event_ExtensionService.php',
            'sonata.admin.exporter' => 'getSonata_Admin_ExporterService.php',
            'sonata.admin.filter_persister.session' => 'getSonata_Admin_FilterPersister_SessionService.php',
            'sonata.admin.form.extension.choice' => 'getSonata_Admin_Form_Extension_ChoiceService.php',
            'sonata.admin.form.extension.field' => 'getSonata_Admin_Form_Extension_FieldService.php',
            'sonata.admin.form.extension.field.mopa' => 'getSonata_Admin_Form_Extension_Field_MopaService.php',
            'sonata.admin.form.filter.type.choice' => 'getSonata_Admin_Form_Filter_Type_ChoiceService.php',
            'sonata.admin.form.filter.type.date' => 'getSonata_Admin_Form_Filter_Type_DateService.php',
            'sonata.admin.form.filter.type.daterange' => 'getSonata_Admin_Form_Filter_Type_DaterangeService.php',
            'sonata.admin.form.filter.type.datetime' => 'getSonata_Admin_Form_Filter_Type_DatetimeService.php',
            'sonata.admin.form.filter.type.datetime_range' => 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService.php',
            'sonata.admin.form.filter.type.default' => 'getSonata_Admin_Form_Filter_Type_DefaultService.php',
            'sonata.admin.form.filter.type.number' => 'getSonata_Admin_Form_Filter_Type_NumberService.php',
            'sonata.admin.form.type.admin' => 'getSonata_Admin_Form_Type_AdminService.php',
            'sonata.admin.form.type.collection' => 'getSonata_Admin_Form_Type_CollectionService.php',
            'sonata.admin.form.type.model_autocomplete' => 'getSonata_Admin_Form_Type_ModelAutocompleteService.php',
            'sonata.admin.form.type.model_choice' => 'getSonata_Admin_Form_Type_ModelChoiceService.php',
            'sonata.admin.form.type.model_hidden' => 'getSonata_Admin_Form_Type_ModelHiddenService.php',
            'sonata.admin.form.type.model_list' => 'getSonata_Admin_Form_Type_ModelListService.php',
            'sonata.admin.form.type.model_reference' => 'getSonata_Admin_Form_Type_ModelReferenceService.php',
            'sonata.admin.guesser.orm_datagrid' => 'getSonata_Admin_Guesser_OrmDatagridService.php',
            'sonata.admin.guesser.orm_datagrid_chain' => 'getSonata_Admin_Guesser_OrmDatagridChainService.php',
            'sonata.admin.guesser.orm_list' => 'getSonata_Admin_Guesser_OrmListService.php',
            'sonata.admin.guesser.orm_list_chain' => 'getSonata_Admin_Guesser_OrmListChainService.php',
            'sonata.admin.guesser.orm_show' => 'getSonata_Admin_Guesser_OrmShowService.php',
            'sonata.admin.guesser.orm_show_chain' => 'getSonata_Admin_Guesser_OrmShowChainService.php',
            'sonata.admin.helper' => 'getSonata_Admin_HelperService.php',
            'sonata.admin.label.strategy.bc' => 'getSonata_Admin_Label_Strategy_BcService.php',
            'sonata.admin.label.strategy.form_component' => 'getSonata_Admin_Label_Strategy_FormComponentService.php',
            'sonata.admin.label.strategy.native' => 'getSonata_Admin_Label_Strategy_NativeService.php',
            'sonata.admin.label.strategy.noop' => 'getSonata_Admin_Label_Strategy_NoopService.php',
            'sonata.admin.label.strategy.underscore' => 'getSonata_Admin_Label_Strategy_UnderscoreService.php',
            'sonata.admin.manager.orm' => 'getSonata_Admin_Manager_OrmService.php',
            'sonata.admin.manipulator.acl.admin' => 'getSonata_Admin_Manipulator_Acl_AdminService.php',
            'sonata.admin.manipulator.acl.object.orm' => 'getSonata_Admin_Manipulator_Acl_Object_OrmService.php',
            'sonata.admin.menu.group_provider' => 'getSonata_Admin_Menu_GroupProviderService.php',
            'sonata.admin.menu.matcher.voter.active' => 'getSonata_Admin_Menu_Matcher_Voter_ActiveService.php',
            'sonata.admin.menu.matcher.voter.admin' => 'getSonata_Admin_Menu_Matcher_Voter_AdminService.php',
            'sonata.admin.menu.matcher.voter.children' => 'getSonata_Admin_Menu_Matcher_Voter_ChildrenService.php',
            'sonata.admin.menu_builder' => 'getSonata_Admin_MenuBuilderService.php',
            'sonata.admin.object.manipulator.acl.admin' => 'getSonata_Admin_Object_Manipulator_Acl_AdminService.php',
            'sonata.admin.route.cache' => 'getSonata_Admin_Route_CacheService.php',
            'sonata.admin.route.cache_warmup' => 'getSonata_Admin_Route_CacheWarmupService.php',
            'sonata.admin.route.default_generator' => 'getSonata_Admin_Route_DefaultGeneratorService.php',
            'sonata.admin.route.path_info' => 'getSonata_Admin_Route_PathInfoService.php',
            'sonata.admin.route.query_string' => 'getSonata_Admin_Route_QueryStringService.php',
            'sonata.admin.route_loader' => 'getSonata_Admin_RouteLoaderService.php',
            'sonata.admin.search.handler' => 'getSonata_Admin_Search_HandlerService.php',
            'sonata.admin.security.handler' => 'getSonata_Admin_Security_HandlerService.php',
            'sonata.admin.sidebar_menu' => 'getSonata_Admin_SidebarMenuService.php',
            'sonata.admin.validator.inline' => 'getSonata_Admin_Validator_InlineService.php',
            'sonata.block.cache.handler.noop' => 'getSonata_Block_Cache_Handler_NoopService.php',
            'sonata.block.dash' => 'getSonata_Block_DashService.php',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService.php',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService.php',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService.php',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService.php',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService.php',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService.php',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService.php',
            'sonata.block.form.type.block' => 'getSonata_Block_Form_Type_BlockService.php',
            'sonata.block.form.type.container_template' => 'getSonata_Block_Form_Type_ContainerTemplateService.php',
            'sonata.block.menu.registry' => 'getSonata_Block_Menu_RegistryService.php',
            'sonata.block.service.container' => 'getSonata_Block_Service_ContainerService.php',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService.php',
            'sonata.block.service.menu' => 'getSonata_Block_Service_MenuService.php',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService.php',
            'sonata.block.service.template' => 'getSonata_Block_Service_TemplateService.php',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService.php',
            'sonata.core.date.moment_format_converter' => 'getSonata_Core_Date_MomentFormatConverterService.php',
            'sonata.core.flashmessage.manager' => 'getSonata_Core_Flashmessage_ManagerService.php',
            'sonata.core.flashmessage.twig.runtime' => 'getSonata_Core_Flashmessage_Twig_RuntimeService.php',
            'sonata.core.form.type.array' => 'getSonata_Core_Form_Type_ArrayService.php',
            'sonata.core.form.type.array_legacy' => 'getSonata_Core_Form_Type_ArrayLegacyService.php',
            'sonata.core.form.type.boolean' => 'getSonata_Core_Form_Type_BooleanService.php',
            'sonata.core.form.type.boolean_legacy' => 'getSonata_Core_Form_Type_BooleanLegacyService.php',
            'sonata.core.form.type.collection' => 'getSonata_Core_Form_Type_CollectionService.php',
            'sonata.core.form.type.collection_legacy' => 'getSonata_Core_Form_Type_CollectionLegacyService.php',
            'sonata.core.form.type.color_legacy' => 'getSonata_Core_Form_Type_ColorLegacyService.php',
            'sonata.core.form.type.color_selector' => 'getSonata_Core_Form_Type_ColorSelectorService.php',
            'sonata.core.form.type.date_picker' => 'getSonata_Core_Form_Type_DatePickerService.php',
            'sonata.core.form.type.date_picker_legacy' => 'getSonata_Core_Form_Type_DatePickerLegacyService.php',
            'sonata.core.form.type.date_range' => 'getSonata_Core_Form_Type_DateRangeService.php',
            'sonata.core.form.type.date_range_legacy' => 'getSonata_Core_Form_Type_DateRangeLegacyService.php',
            'sonata.core.form.type.date_range_picker' => 'getSonata_Core_Form_Type_DateRangePickerService.php',
            'sonata.core.form.type.date_range_picker_legacy' => 'getSonata_Core_Form_Type_DateRangePickerLegacyService.php',
            'sonata.core.form.type.datetime_picker' => 'getSonata_Core_Form_Type_DatetimePickerService.php',
            'sonata.core.form.type.datetime_picker_legacy' => 'getSonata_Core_Form_Type_DatetimePickerLegacyService.php',
            'sonata.core.form.type.datetime_range' => 'getSonata_Core_Form_Type_DatetimeRangeService.php',
            'sonata.core.form.type.datetime_range_legacy' => 'getSonata_Core_Form_Type_DatetimeRangeLegacyService.php',
            'sonata.core.form.type.datetime_range_picker' => 'getSonata_Core_Form_Type_DatetimeRangePickerService.php',
            'sonata.core.form.type.datetime_range_picker_legacy' => 'getSonata_Core_Form_Type_DatetimeRangePickerLegacyService.php',
            'sonata.core.form.type.equal' => 'getSonata_Core_Form_Type_EqualService.php',
            'sonata.core.form.type.equal_legacy' => 'getSonata_Core_Form_Type_EqualLegacyService.php',
            'sonata.core.form.type.translatable_choice' => 'getSonata_Core_Form_Type_TranslatableChoiceService.php',
            'sonata.core.model.adapter.chain' => 'getSonata_Core_Model_Adapter_ChainService.php',
            'sonata.core.model.adapter.doctrine_orm' => 'getSonata_Core_Model_Adapter_DoctrineOrmService.php',
            'sonata.core.slugify.cocur' => 'getSonata_Core_Slugify_CocurService.php',
            'sonata.core.slugify.native' => 'getSonata_Core_Slugify_NativeService.php',
            'sonata.core.twig.status_runtime' => 'getSonata_Core_Twig_StatusRuntimeService.php',
            'sonata.core.validator.inline' => 'getSonata_Core_Validator_InlineService.php',
            'sonata.easy_extends.doctrine.mapper' => 'getSonata_EasyExtends_Doctrine_MapperService.php',
            'sonata.easy_extends.generator.bundle' => 'getSonata_EasyExtends_Generator_BundleService.php',
            'sonata.easy_extends.generator.odm' => 'getSonata_EasyExtends_Generator_OdmService.php',
            'sonata.easy_extends.generator.orm' => 'getSonata_EasyExtends_Generator_OrmService.php',
            'sonata.easy_extends.generator.phpcr' => 'getSonata_EasyExtends_Generator_PhpcrService.php',
            'sonata.easy_extends.generator.serializer' => 'getSonata_EasyExtends_Generator_SerializerService.php',
            'sonata.templating' => 'getSonata_TemplatingService.php',
            'sonata.templating.locator' => 'getSonata_Templating_LocatorService.php',
            'sonata.templating.name_parser' => 'getSonata_Templating_NameParserService.php',
            'sonata.user.admin.group.template_registry' => 'getSonata_User_Admin_Group_TemplateRegistryService.php',
            'sonata.user.admin.user.template_registry' => 'getSonata_User_Admin_User_TemplateRegistryService.php',
            'sonata.user.form.gender_list' => 'getSonata_User_Form_GenderListService.php',
            'sonata.user.form.roles_matrix_type' => 'getSonata_User_Form_RolesMatrixTypeService.php',
            'sonata.user.form.type.security_roles' => 'getSonata_User_Form_Type_SecurityRolesService.php',
            'sonata.user.mailer.default' => 'getSonata_User_Mailer_DefaultService.php',
            'sonata.user.manager.user' => 'getSonata_User_Manager_UserService.php',
            'swiftmailer.command.debug' => 'getSwiftmailer_Command_DebugService.php',
            'swiftmailer.command.new_email' => 'getSwiftmailer_Command_NewEmailService.php',
            'swiftmailer.command.send_email' => 'getSwiftmailer_Command_SendEmailService.php',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService.php',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService.php',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService.php',
            'templating' => 'getTemplatingService.php',
            'templating.cache_warmer.template_paths' => 'getTemplating_CacheWarmer_TemplatePathsService.php',
            'templating.filename_parser' => 'getTemplating_FilenameParserService.php',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService.php',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService.php',
            'templating.loader' => 'getTemplating_LoaderService.php',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService.php',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService.php',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService.php',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService.php',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService.php',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService.php',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService.php',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService.php',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService.php',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService.php',
            'translation.extractor' => 'getTranslation_ExtractorService.php',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService.php',
            'translation.loader' => 'getTranslation_LoaderService.php',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService.php',
            'translation.loader.dat' => 'getTranslation_Loader_DatService.php',
            'translation.loader.ini' => 'getTranslation_Loader_IniService.php',
            'translation.loader.json' => 'getTranslation_Loader_JsonService.php',
            'translation.loader.mo' => 'getTranslation_Loader_MoService.php',
            'translation.loader.php' => 'getTranslation_Loader_PhpService.php',
            'translation.loader.po' => 'getTranslation_Loader_PoService.php',
            'translation.loader.qt' => 'getTranslation_Loader_QtService.php',
            'translation.loader.res' => 'getTranslation_Loader_ResService.php',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService.php',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService.php',
            'translation.reader' => 'getTranslation_ReaderService.php',
            'translation.warmer' => 'getTranslation_WarmerService.php',
            'translation.writer' => 'getTranslation_WriterService.php',
            'twig.command.debug' => 'getTwig_Command_DebugService.php',
            'twig.command.lint' => 'getTwig_Command_LintService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService.php',
            'twig.form.renderer' => 'getTwig_Form_RendererService.php',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService.php',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService.php',
            'validator.email' => 'getValidator_EmailService.php',
            'validator.expression' => 'getValidator_ExpressionService.php',
            'validator.mapping.cache_warmer' => 'getValidator_Mapping_CacheWarmerService.php',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService.php',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService.php',
            'web_server.command.server_log' => 'getWebServer_Command_ServerLogService.php',
            'web_server.command.server_run' => 'getWebServer_Command_ServerRunService.php',
            'web_server.command.server_start' => 'getWebServer_Command_ServerStartService.php',
            'web_server.command.server_status' => 'getWebServer_Command_ServerStatusService.php',
            'web_server.command.server_stop' => 'getWebServer_Command_ServerStopService.php',
        ];
        $this->privates = [
            'FOS\\OAuthServerBundle\\Model\\AccessTokenManagerInterface' => true,
            'FOS\\OAuthServerBundle\\Model\\AuthCodeManagerInterface' => true,
            'FOS\\OAuthServerBundle\\Model\\ClientManagerInterface' => true,
            'FOS\\OAuthServerBundle\\Model\\RefreshTokenManagerInterface' => true,
            'Knp\\Snappy\\Image' => true,
            'Knp\\Snappy\\Pdf' => true,
            'Sonata\\AdminBundle\\Admin\\AdminHelper' => true,
            'Sonata\\AdminBundle\\Admin\\BreadcrumbsBuilder' => true,
            'Sonata\\AdminBundle\\Admin\\BreadcrumbsBuilderInterface' => true,
            'Sonata\\AdminBundle\\Admin\\Pool' => true,
            'Sonata\\AdminBundle\\Event\\AdminEventExtension' => true,
            'Sonata\\AdminBundle\\Filter\\FilterFactory' => true,
            'Sonata\\AdminBundle\\Filter\\FilterFactoryInterface' => true,
            'Sonata\\AdminBundle\\Filter\\Persister\\FilterPersisterInterface' => true,
            'Sonata\\AdminBundle\\Filter\\Persister\\SessionFilterPersister' => true,
            'Sonata\\AdminBundle\\Model\\AuditManager' => true,
            'Sonata\\AdminBundle\\Model\\AuditManagerInterface' => true,
            'Sonata\\AdminBundle\\Route\\AdminPoolLoader' => true,
            'Sonata\\AdminBundle\\Search\\SearchHandler' => true,
            'Sonata\\AdminBundle\\Templating\\MutableTemplateRegistryInterface' => true,
            'Sonata\\AdminBundle\\Templating\\TemplateRegistry' => true,
            'Sonata\\AdminBundle\\Translator\\BCLabelTranslatorStrategy' => true,
            'Sonata\\AdminBundle\\Translator\\FormLabelTranslatorStrategy' => true,
            'Sonata\\AdminBundle\\Translator\\LabelTranslatorStrategyInterface' => true,
            'Sonata\\AdminBundle\\Translator\\NativeLabelTranslatorStrategy' => true,
            'Sonata\\AdminBundle\\Translator\\NoopLabelTranslatorStrategy' => true,
            'Sonata\\AdminBundle\\Translator\\UnderscoreLabelTranslatorStrategy' => true,
            'Sonata\\AdminBundle\\Twig\\GlobalVariables' => true,
            'fos_oauth_server.access_token_manager' => true,
            'fos_oauth_server.auth_code_manager' => true,
            'fos_oauth_server.authorize.form.handler' => true,
            'fos_oauth_server.client_manager' => true,
            'fos_oauth_server.refresh_token_manager' => true,
            'fos_user.util.username_canonicalizer' => true,
            'security.acl.dbal.connection' => true,
            'security.authentication.session_strategy.main' => true,
            'security.authentication.session_strategy.oauth_authorize' => true,
            'session.storage' => true,
            'sonata.block.cache.handler' => true,
            'sonata.block.context_manager' => true,
            'sonata.block.renderer' => true,
            'sonata.doctrine.model.adapter.chain' => true,
            'sonata.user.mailer' => true,
            'swiftmailer.mailer' => true,
            'swiftmailer.plugin.messagelogger' => true,
            'swiftmailer.spool' => true,
            'swiftmailer.transport.real' => true,
            'AppBundle\\EventListener\\PasswordResettingListener' => true,
            'AppBundle\\EventSubscriber\\SamlSubscriber' => true,
            'FOS\\OAuthServerBundle\\Controller\\TokenController' => true,
            'Http\\HttplugBundle\\Collector\\PluginClientFactoryListener' => true,
            'Sonata\\BlockBundle\\Command\\DebugBlocksCommand' => true,
            'Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand' => true,
            'Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand' => true,
            'annotation_reader' => true,
            'annotations.cache' => true,
            'annotations.cache_warmer' => true,
            'annotations.reader' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'assetic.asset_factory' => true,
            'assetic.asset_manager' => true,
            'assetic.asset_manager_cache_warmer' => true,
            'assetic.controller' => true,
            'assetic.filter.cssrewrite' => true,
            'assetic.filter.jsqueeze' => true,
            'assetic.filter.minifycsscompressor' => true,
            'assetic.filter_manager' => true,
            'assetic.request_listener' => true,
            'assets.context' => true,
            'assets.packages' => true,
            'cache.annotations' => true,
            'cache.default_clearer' => true,
            'cache.serializer' => true,
            'cache.validator' => true,
            'config.resource.self_checking_resource_checker' => true,
            'config_cache_factory' => true,
            'console.command.about' => true,
            'console.command.assets_install' => true,
            'console.command.cache_clear' => true,
            'console.command.cache_pool_clear' => true,
            'console.command.cache_pool_prune' => true,
            'console.command.cache_warmup' => true,
            'console.command.config_debug' => true,
            'console.command.config_dump_reference' => true,
            'console.command.container_debug' => true,
            'console.command.debug_autowiring' => true,
            'console.command.event_dispatcher_debug' => true,
            'console.command.form_debug' => true,
            'console.command.router_debug' => true,
            'console.command.router_match' => true,
            'console.command.translation_debug' => true,
            'console.command.translation_update' => true,
            'console.command.xliff_lint' => true,
            'console.command.yaml_lint' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'data_collector.form' => true,
            'data_collector.form.extractor' => true,
            'data_collector.request' => true,
            'data_collector.router' => true,
            'data_collector.translation' => true,
            'debug.argument_resolver' => true,
            'debug.controller_resolver' => true,
            'debug.debug_handlers_listener' => true,
            'debug.dump_listener' => true,
            'debug.event_dispatcher' => true,
            'debug.file_link_formatter' => true,
            'debug.file_link_formatter.url_format' => true,
            'debug.log_processor' => true,
            'debug.security.access.decision_manager' => true,
            'debug.stopwatch' => true,
            'dependency_injection.config.container_parameters_resource_checker' => true,
            'deprecated.form.registry' => true,
            'deprecated.form.registry.csrf' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.dbal.logger.profiling.default' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.stats_command' => true,
            'expertcoder_swift_mailer.send_grid.transport' => true,
            'file_locator' => true,
            'form.extension' => true,
            'form.registry' => true,
            'form.resolved_type_factory' => true,
            'form.server_params' => true,
            'form.type.entity' => true,
            'form.type_guesser.doctrine' => true,
            'fos_oauth_server.access_token_manager.default' => true,
            'fos_oauth_server.auth_code_manager.default' => true,
            'fos_oauth_server.authorize.form' => true,
            'fos_oauth_server.authorize.form.handler.default' => true,
            'fos_oauth_server.authorize.form.type' => true,
            'fos_oauth_server.clean_command' => true,
            'fos_oauth_server.client_manager.default' => true,
            'fos_oauth_server.create_client_command' => true,
            'fos_oauth_server.entity_manager' => true,
            'fos_oauth_server.refresh_token_manager.default' => true,
            'fos_oauth_server.server' => true,
            'fos_oauth_server.storage' => true,
            'fos_user.change_password.form.factory' => true,
            'fos_user.change_password.form.type' => true,
            'fos_user.command.activate_user' => true,
            'fos_user.command.change_password' => true,
            'fos_user.command.create_user' => true,
            'fos_user.command.deactivate_user' => true,
            'fos_user.command.demote_user' => true,
            'fos_user.command.promote_user' => true,
            'fos_user.group.form.factory' => true,
            'fos_user.group.form.type' => true,
            'fos_user.listener.authentication' => true,
            'fos_user.listener.flash' => true,
            'fos_user.listener.resetting' => true,
            'fos_user.mailer' => true,
            'fos_user.object_manager' => true,
            'fos_user.profile.form.factory' => true,
            'fos_user.profile.form.type' => true,
            'fos_user.registration.form.factory' => true,
            'fos_user.registration.form.type' => true,
            'fos_user.resetting.form.factory' => true,
            'fos_user.resetting.form.type' => true,
            'fos_user.security.interactive_login_listener' => true,
            'fos_user.security.login_manager' => true,
            'fos_user.user_provider.username' => true,
            'fos_user.username_form_type' => true,
            'fos_user.util.canonical_fields_updater' => true,
            'fos_user.util.email_canonicalizer' => true,
            'fos_user.util.password_updater' => true,
            'fos_user.util.token_generator' => true,
            'fos_user.util.user_manipulator' => true,
            'fragment.handler' => true,
            'fragment.listener' => true,
            'fragment.renderer.hinclude' => true,
            'fragment.renderer.inline' => true,
            'httplug.async_client.default' => true,
            'httplug.auto_discovery.auto_discovered_client' => true,
            'httplug.client.default' => true,
            'httplug.collector.collector' => true,
            'httplug.collector.formatter' => true,
            'httplug.message_factory.default' => true,
            'httplug.strategy' => true,
            'httplug.stream_factory.default' => true,
            'httplug.uri_factory.default' => true,
            'hwi_oauth.authentication.listener.oauth.main' => true,
            'hwi_oauth.authentication.provider.oauth.main' => true,
            'hwi_oauth.registration.form.handler.fosub_bridge' => true,
            'hwi_oauth.templating.helper.oauth' => true,
            'hwi_oauth.user.provider.entity.main' => true,
            'hwi_oauth.user.provider.fosub_bridge' => true,
            'ivory_ck_editor.command.installer' => true,
            'ivory_ck_editor.config_manager' => true,
            'ivory_ck_editor.form.type' => true,
            'ivory_ck_editor.installer' => true,
            'ivory_ck_editor.plugin_manager' => true,
            'ivory_ck_editor.renderer' => true,
            'ivory_ck_editor.renderer.json_builder' => true,
            'ivory_ck_editor.styles_set_manager' => true,
            'ivory_ck_editor.template_manager' => true,
            'ivory_ck_editor.toolbar_manager' => true,
            'ivory_ck_editor.twig_extension' => true,
            'kernel.class_cache.cache_warmer' => true,
            'knp_menu.menu_provider' => true,
            'knp_menu.menu_provider.builder_alias' => true,
            'knp_menu.menu_provider.lazy' => true,
            'knp_menu.renderer.list' => true,
            'knp_menu.renderer.twig' => true,
            'knp_menu.renderer_provider' => true,
            'knp_menu.voter.router' => true,
            'locale_listener' => true,
            'logger' => true,
            'maker.auto_command.make_auth' => true,
            'maker.auto_command.make_command' => true,
            'maker.auto_command.make_controller' => true,
            'maker.auto_command.make_crud' => true,
            'maker.auto_command.make_entity' => true,
            'maker.auto_command.make_fixtures' => true,
            'maker.auto_command.make_form' => true,
            'maker.auto_command.make_functional_test' => true,
            'maker.auto_command.make_migration' => true,
            'maker.auto_command.make_registration_form' => true,
            'maker.auto_command.make_serializer_encoder' => true,
            'maker.auto_command.make_serializer_normalizer' => true,
            'maker.auto_command.make_sonata_admin' => true,
            'maker.auto_command.make_subscriber' => true,
            'maker.auto_command.make_twig_extension' => true,
            'maker.auto_command.make_unit_test' => true,
            'maker.auto_command.make_user' => true,
            'maker.auto_command.make_validator' => true,
            'maker.auto_command.make_voter' => true,
            'maker.console_error_listener' => true,
            'maker.doctrine_helper' => true,
            'maker.file_manager' => true,
            'maker.generator' => true,
            'maker.renderer.form_type_renderer' => true,
            'maker.security_config_updater' => true,
            'monolog.handler.azure' => true,
            'monolog.handler.console' => true,
            'monolog.handler.dumps' => true,
            'monolog.handler.email' => true,
            'monolog.handler.hivebrite' => true,
            'monolog.handler.hubtel' => true,
            'monolog.handler.import' => true,
            'monolog.handler.main' => true,
            'monolog.handler.null_internal' => true,
            'monolog.handler.server_log' => true,
            'monolog.handler.sms' => true,
            'monolog.logger.assetic' => true,
            'monolog.logger.cache' => true,
            'monolog.logger.console' => true,
            'monolog.logger.doctrine' => true,
            'monolog.logger.event' => true,
            'monolog.logger.php' => true,
            'monolog.logger.profiler' => true,
            'monolog.logger.request' => true,
            'monolog.logger.security' => true,
            'monolog.logger.snappy' => true,
            'monolog.logger.templating' => true,
            'monolog.logger.translation' => true,
            'monolog.processor.psr_log_message' => true,
            'profiler_listener' => true,
            'property_accessor' => true,
            'resolve_controller_name_subscriber' => true,
            'response_listener' => true,
            'router.cache_warmer' => true,
            'router.request_context' => true,
            'router_listener' => true,
            'security.access.authenticated_voter' => true,
            'security.access.expression_voter' => true,
            'security.access.role_hierarchy_voter' => true,
            'security.access_listener' => true,
            'security.access_map' => true,
            'security.acl.dbal.schema' => true,
            'security.acl.provider' => true,
            'security.acl.voter.basic_permissions' => true,
            'security.authentication.guard_handler' => true,
            'security.authentication.listener.anonymous.admin' => true,
            'security.authentication.listener.anonymous.main' => true,
            'security.authentication.listener.anonymous.oauth_authorize' => true,
            'security.authentication.listener.form.admin' => true,
            'security.authentication.listener.form.oauth_authorize' => true,
            'security.authentication.manager' => true,
            'security.authentication.provider.anonymous.admin' => true,
            'security.authentication.provider.anonymous.main' => true,
            'security.authentication.provider.anonymous.oauth_authorize' => true,
            'security.authentication.provider.dao.admin' => true,
            'security.authentication.provider.dao.oauth_authorize' => true,
            'security.authentication.session_strategy.admin' => true,
            'security.authentication.switchuser_listener.admin' => true,
            'security.authentication.trust_resolver' => true,
            'security.channel_listener' => true,
            'security.command.init_acl' => true,
            'security.command.set_acl' => true,
            'security.command.user_password_encoder' => true,
            'security.context_listener.0' => true,
            'security.context_listener.1' => true,
            'security.context_listener.2' => true,
            'security.csrf.token_storage' => true,
            'security.encoder_factory' => true,
            'security.firewall' => true,
            'security.firewall.map' => true,
            'security.firewall.map.context.admin' => true,
            'security.firewall.map.context.dev' => true,
            'security.firewall.map.context.main' => true,
            'security.firewall.map.context.oauth_authorize' => true,
            'security.firewall.map.context.oauth_token' => true,
            'security.http_utils' => true,
            'security.logout.handler.csrf_token_clearing' => true,
            'security.logout.handler.session' => true,
            'security.logout_url_generator' => true,
            'security.rememberme.response_listener' => true,
            'security.request_matcher.6xxs_ip' => true,
            'security.request_matcher.gt2qimv' => true,
            'security.request_matcher.kenuv22' => true,
            'security.request_matcher.q0ptkup' => true,
            'security.request_matcher.zfhj2lw' => true,
            'security.role_hierarchy' => true,
            'security.user_value_resolver' => true,
            'security.validator.user_password' => true,
            'sensio_distribution.security_checker' => true,
            'sensio_distribution.security_checker.command' => true,
            'sensio_framework_extra.cache.listener' => true,
            'sensio_framework_extra.controller.listener' => true,
            'sensio_framework_extra.converter.datetime' => true,
            'sensio_framework_extra.converter.doctrine.orm' => true,
            'sensio_framework_extra.converter.listener' => true,
            'sensio_framework_extra.converter.manager' => true,
            'sensio_framework_extra.security.listener' => true,
            'sensio_framework_extra.view.listener' => true,
            'service_locator.2po_rap' => true,
            'service_locator.mctheb9' => true,
            'session.handler' => true,
            'session.save_listener' => true,
            'session.storage.filesystem' => true,
            'session.storage.metadata_bag' => true,
            'session.storage.native' => true,
            'session.storage.php_bridge' => true,
            'session_listener' => true,
            'sonata.admin.builder.orm_datagrid' => true,
            'sonata.admin.builder.orm_form' => true,
            'sonata.admin.builder.orm_list' => true,
            'sonata.admin.builder.orm_show' => true,
            'sonata.admin.filter_persister.session' => true,
            'sonata.admin.guesser.orm_datagrid' => true,
            'sonata.admin.guesser.orm_datagrid_chain' => true,
            'sonata.admin.guesser.orm_list' => true,
            'sonata.admin.guesser.orm_list_chain' => true,
            'sonata.admin.guesser.orm_show' => true,
            'sonata.admin.guesser.orm_show_chain' => true,
            'sonata.admin.menu.group_provider' => true,
            'sonata.admin.security.handler' => true,
            'sonata.block.cache.handler.default' => true,
            'sonata.block.cache.handler.noop' => true,
            'sonata.block.exception.strategy.manager' => true,
            'sonata.block.form.type.block' => true,
            'sonata.block.form.type.container_template' => true,
            'sonata.block.loader.chain' => true,
            'sonata.block.loader.service' => true,
            'sonata.block.templating.helper' => true,
            'sonata.block.twig.global' => true,
            'sonata.core.date.moment_format_converter' => true,
            'sonata.core.flashmessage.twig.runtime' => true,
            'sonata.core.model.adapter.doctrine_orm' => true,
            'sonata.core.twig.deprecated_template_extension' => true,
            'sonata.core.twig.extension.text' => true,
            'sonata.core.twig.extension.wrapping' => true,
            'sonata.core.twig.status_extension' => true,
            'sonata.core.twig.status_runtime' => true,
            'sonata.core.twig.template_extension' => true,
            'sonata.core.validator.inline' => true,
            'sonata.easy_extends.doctrine.mapper' => true,
            'sonata.templating' => true,
            'sonata.templating.locator' => true,
            'sonata.templating.name_parser' => true,
            'sonata.user.form.gender_list' => true,
            'sonata.user.mailer.default' => true,
            'sonata.user.matrix_roles_builder' => true,
            'streamed_response_listener' => true,
            'swiftmailer.command.debug' => true,
            'swiftmailer.command.new_email' => true,
            'swiftmailer.command.send_email' => true,
            'swiftmailer.email_sender.listener' => true,
            'swiftmailer.mailer.default.spool' => true,
            'swiftmailer.mailer.default.transport' => true,
            'templating.cache_warmer.template_paths' => true,
            'templating.filename_parser' => true,
            'templating.helper.logout_url' => true,
            'templating.helper.security' => true,
            'templating.locator' => true,
            'templating.name_parser' => true,
            'translation.dumper.csv' => true,
            'translation.dumper.ini' => true,
            'translation.dumper.json' => true,
            'translation.dumper.mo' => true,
            'translation.dumper.php' => true,
            'translation.dumper.po' => true,
            'translation.dumper.qt' => true,
            'translation.dumper.res' => true,
            'translation.dumper.xliff' => true,
            'translation.dumper.yml' => true,
            'translation.extractor' => true,
            'translation.extractor.php' => true,
            'translation.loader' => true,
            'translation.loader.csv' => true,
            'translation.loader.dat' => true,
            'translation.loader.ini' => true,
            'translation.loader.json' => true,
            'translation.loader.mo' => true,
            'translation.loader.php' => true,
            'translation.loader.po' => true,
            'translation.loader.qt' => true,
            'translation.loader.res' => true,
            'translation.loader.xliff' => true,
            'translation.loader.yml' => true,
            'translation.reader' => true,
            'translation.warmer' => true,
            'translation.writer' => true,
            'translator.default' => true,
            'translator_listener' => true,
            'twig.command.debug' => true,
            'twig.command.lint' => true,
            'twig.exception_listener' => true,
            'twig.form.renderer' => true,
            'twig.loader' => true,
            'twig.profile' => true,
            'twig.runtime.httpkernel' => true,
            'twig.translation.extractor' => true,
            'uri_signer' => true,
            'validate_request_listener' => true,
            'validator.builder' => true,
            'validator.email' => true,
            'validator.expression' => true,
            'validator.mapping.cache_warmer' => true,
            'validator.validator_factory' => true,
            'var_dumper.cli_dumper' => true,
            'web_profiler.csp.handler' => true,
            'web_profiler.debug_toolbar' => true,
            'web_server.command.server_log' => true,
            'web_server.command.server_run' => true,
            'web_server.command.server_start' => true,
            'web_server.command.server_status' => true,
            'web_server.command.server_stop' => true,
        ];
        $this->aliases = [
            'FOS\\OAuthServerBundle\\Model\\AccessTokenManagerInterface' => 'fos_oauth_server.access_token_manager.default',
            'FOS\\OAuthServerBundle\\Model\\AuthCodeManagerInterface' => 'fos_oauth_server.auth_code_manager.default',
            'FOS\\OAuthServerBundle\\Model\\ClientManagerInterface' => 'fos_oauth_server.client_manager.default',
            'FOS\\OAuthServerBundle\\Model\\RefreshTokenManagerInterface' => 'fos_oauth_server.refresh_token_manager.default',
            'Knp\\Snappy\\Image' => 'knp_snappy.image',
            'Knp\\Snappy\\Pdf' => 'knp_snappy.pdf',
            'Sonata\\AdminBundle\\Admin\\AdminHelper' => 'sonata.admin.helper',
            'Sonata\\AdminBundle\\Admin\\BreadcrumbsBuilder' => 'sonata.admin.breadcrumbs_builder',
            'Sonata\\AdminBundle\\Admin\\BreadcrumbsBuilderInterface' => 'sonata.admin.breadcrumbs_builder',
            'Sonata\\AdminBundle\\Admin\\Pool' => 'sonata.admin.pool',
            'Sonata\\AdminBundle\\Event\\AdminEventExtension' => 'sonata.admin.event.extension',
            'Sonata\\AdminBundle\\Filter\\FilterFactory' => 'sonata.admin.builder.filter.factory',
            'Sonata\\AdminBundle\\Filter\\FilterFactoryInterface' => 'sonata.admin.builder.filter.factory',
            'Sonata\\AdminBundle\\Filter\\Persister\\FilterPersisterInterface' => 'sonata.admin.filter_persister.session',
            'Sonata\\AdminBundle\\Filter\\Persister\\SessionFilterPersister' => 'sonata.admin.filter_persister.session',
            'Sonata\\AdminBundle\\Model\\AuditManager' => 'sonata.admin.audit.manager',
            'Sonata\\AdminBundle\\Model\\AuditManagerInterface' => 'sonata.admin.audit.manager',
            'Sonata\\AdminBundle\\Route\\AdminPoolLoader' => 'sonata.admin.route_loader',
            'Sonata\\AdminBundle\\Search\\SearchHandler' => 'sonata.admin.search.handler',
            'Sonata\\AdminBundle\\Templating\\MutableTemplateRegistryInterface' => 'sonata.admin.global_template_registry',
            'Sonata\\AdminBundle\\Templating\\TemplateRegistry' => 'sonata.admin.global_template_registry',
            'Sonata\\AdminBundle\\Translator\\BCLabelTranslatorStrategy' => 'sonata.admin.label.strategy.bc',
            'Sonata\\AdminBundle\\Translator\\FormLabelTranslatorStrategy' => 'sonata.admin.label.strategy.form_component',
            'Sonata\\AdminBundle\\Translator\\LabelTranslatorStrategyInterface' => 'sonata.admin.label.strategy.native',
            'Sonata\\AdminBundle\\Translator\\NativeLabelTranslatorStrategy' => 'sonata.admin.label.strategy.native',
            'Sonata\\AdminBundle\\Translator\\NoopLabelTranslatorStrategy' => 'sonata.admin.label.strategy.noop',
            'Sonata\\AdminBundle\\Translator\\UnderscoreLabelTranslatorStrategy' => 'sonata.admin.label.strategy.underscore',
            'Sonata\\AdminBundle\\Twig\\GlobalVariables' => 'sonata.admin.twig.global',
            'cache.app_clearer' => 'cache.default_clearer',
            'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'doctrine_cache.contains_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'doctrine_cache.delete_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'doctrine_cache.flush_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'doctrine_cache.stats_command',
            'console.command.fos_oauthserverbundle_command_cleancommand' => 'fos_oauth_server.clean_command',
            'console.command.fos_oauthserverbundle_command_createclientcommand' => 'fos_oauth_server.create_client_command',
            'console.command.ivory_ckeditorbundle_command_ckeditorinstallercommand' => 'ivory_ck_editor.command.installer',
            'console.command.sonata_corebundle_command_sonatadumpdoctrinemetacommand' => 'Sonata\\CoreBundle\\Command\\SonataDumpDoctrineMetaCommand',
            'console.command.sonata_corebundle_command_sonatalistformmappingcommand' => 'Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fos_oauth_server.access_token_manager' => 'fos_oauth_server.access_token_manager.default',
            'fos_oauth_server.auth_code_manager' => 'fos_oauth_server.auth_code_manager.default',
            'fos_oauth_server.authorize.form.handler' => 'fos_oauth_server.authorize.form.handler.default',
            'fos_oauth_server.client_manager' => 'fos_oauth_server.client_manager.default',
            'fos_oauth_server.controller.token' => 'FOS\\OAuthServerBundle\\Controller\\TokenController',
            'fos_oauth_server.refresh_token_manager' => 'fos_oauth_server.refresh_token_manager.default',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'httplug.client' => 'httplug.client.default',
            'httplug.message_factory' => 'httplug.message_factory.default',
            'httplug.stream_factory' => 'httplug.stream_factory.default',
            'httplug.uri_factory' => 'httplug.uri_factory.default',
            'hwi_oauth.account.connector' => 'hwi_oauth.user.provider.entity.main',
            'hwi_oauth.http.client' => 'httplug.client.default',
            'hwi_oauth.http.message_factory' => 'httplug.message_factory.default',
            'hwi_oauth.registration.form.factory' => 'fos_user.registration.form.factory',
            'hwi_oauth.registration.form.handler' => 'hwi_oauth.registration.form.handler.fosub_bridge',
            'mailer' => 'swiftmailer.mailer.default',
            'security.acl.dbal.connection' => 'doctrine.dbal.default_connection',
            'security.authentication.session_strategy.main' => 'security.authentication.session_strategy.admin',
            'security.authentication.session_strategy.oauth_authorize' => 'security.authentication.session_strategy.admin',
            'session.storage' => 'session.storage.native',
            'sonata.block.cache.handler' => 'sonata.block.cache.handler.default',
            'sonata.block.context_manager' => 'sonata.block.context_manager.default',
            'sonata.block.renderer' => 'sonata.block.renderer.default',
            'sonata.doctrine.model.adapter.chain' => 'sonata.core.model.adapter.chain',
            'sonata.user.group_manager' => 'fos_user.group_manager',
            'sonata.user.mailer' => 'sonata.user.mailer.default',
            'sonata.user.user_manager' => 'fos_user.user_manager',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.mailer.default.transport.real' => 'expertcoder_swift_mailer.send_grid.transport',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'expertcoder_swift_mailer.send_grid.transport',
        ];
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /**
     * Gets the public 'admin.buyer_membership' autowired service.
     *
     * @return \AppBundle\Admin\BuyerMembershipAdmin
     */
    protected function getAdmin_BuyerMembershipService()
    {
        $instance = new \AppBundle\Admin\BuyerMembershipAdmin('admin.buyer_membership', 'AppBundle\\Entity\\BuyerMembership', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Buyer Membership');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.buyer_membership.template_registry']) ? $this->services['admin.buyer_membership.template_registry'] : $this->load('getAdmin_BuyerMembership_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.buyers' autowired service.
     *
     * @return \AppBundle\Admin\BuyerAdmin
     */
    protected function getAdmin_BuyersService()
    {
        $instance = new \AppBundle\Admin\BuyerAdmin('admin.buyers', 'AppBundle\\Entity\\Buyer', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Buyers');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.buyers.template_registry']) ? $this->services['admin.buyers.template_registry'] : $this->load('getAdmin_Buyers_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.categories' autowired service.
     *
     * @return \AppBundle\Admin\CategoryAdmin
     */
    protected function getAdmin_CategoriesService()
    {
        $instance = new \AppBundle\Admin\CategoryAdmin('admin.categories', 'AppBundle\\Entity\\Category', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Company Sectors');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.categories.template_registry']) ? $this->services['admin.categories.template_registry'] : $this->load('getAdmin_Categories_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.companies' autowired service.
     *
     * @return \AppBundle\Admin\CompanyAdmin
     */
    protected function getAdmin_CompaniesService()
    {
        $instance = new \AppBundle\Admin\CompanyAdmin('admin.companies', 'AppBundle\\Entity\\Company', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Suppliers');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.companies.template_registry']) ? $this->services['admin.companies.template_registry'] : $this->load('getAdmin_Companies_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.company_addresses' autowired service.
     *
     * @return \AppBundle\Admin\CompanyAddressAdmin
     */
    protected function getAdmin_CompanyAddressesService()
    {
        $instance = new \AppBundle\Admin\CompanyAddressAdmin('admin.company_addresses', 'AppBundle\\Entity\\CompanyAddress', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Company Address');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.company_addresses.template_registry']) ? $this->services['admin.company_addresses.template_registry'] : $this->load('getAdmin_CompanyAddresses_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.company_contacts' autowired service.
     *
     * @return \AppBundle\Admin\CompanyContactAdmin
     */
    protected function getAdmin_CompanyContactsService()
    {
        $instance = new \AppBundle\Admin\CompanyContactAdmin('admin.company_contacts', 'AppBundle\\Entity\\CompanyContact', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Company Contacts');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.company_contacts.template_registry']) ? $this->services['admin.company_contacts.template_registry'] : $this->load('getAdmin_CompanyContacts_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.company_directors' autowired service.
     *
     * @return \AppBundle\Admin\CompanyDirectorAdmin
     */
    protected function getAdmin_CompanyDirectorsService()
    {
        $instance = new \AppBundle\Admin\CompanyDirectorAdmin('admin.company_directors', 'AppBundle\\Entity\\CompanyDirector', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Company Directors');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.company_directors.template_registry']) ? $this->services['admin.company_directors.template_registry'] : $this->load('getAdmin_CompanyDirectors_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.company_documents' autowired service.
     *
     * @return \AppBundle\Admin\CompanyDocumentationAdmin
     */
    protected function getAdmin_CompanyDocumentsService()
    {
        $instance = new \AppBundle\Admin\CompanyDocumentationAdmin('admin.company_documents', 'AppBundle\\Entity\\CompanyDocumentation', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Document Repository');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.company_documents.template_registry']) ? $this->services['admin.company_documents.template_registry'] : $this->load('getAdmin_CompanyDocuments_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.company_references' autowired service.
     *
     * @return \AppBundle\Admin\CompanyReferenceAdmin
     */
    protected function getAdmin_CompanyReferencesService()
    {
        $instance = new \AppBundle\Admin\CompanyReferenceAdmin('admin.company_references', 'AppBundle\\Entity\\CompanyReference', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Company References');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.company_references.template_registry']) ? $this->services['admin.company_references.template_registry'] : $this->load('getAdmin_CompanyReferences_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.company_requests' autowired service.
     *
     * @return \AppBundle\Admin\CompanyRequestAdmin
     */
    protected function getAdmin_CompanyRequestsService()
    {
        $instance = new \AppBundle\Admin\CompanyRequestAdmin('admin.company_requests', 'AppBundle\\Entity\\CompanyRequest', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Supplier Responses');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.company_requests.template_registry']) ? $this->services['admin.company_requests.template_registry'] : $this->load('getAdmin_CompanyRequests_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.company_shareholding' autowired service.
     *
     * @return \AppBundle\Admin\CompanyShareholdingAdmin
     */
    protected function getAdmin_CompanyShareholdingService()
    {
        $instance = new \AppBundle\Admin\CompanyShareholdingAdmin('admin.company_shareholding', 'AppBundle\\Entity\\CompanyShareholding', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Company Shareholding');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.company_shareholding.template_registry']) ? $this->services['admin.company_shareholding.template_registry'] : $this->load('getAdmin_CompanyShareholding_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.company_type_documentation' autowired service.
     *
     * @return \AppBundle\Admin\CompanyTypeDocumentationAdmin
     */
    protected function getAdmin_CompanyTypeDocumentationService()
    {
        $instance = new \AppBundle\Admin\CompanyTypeDocumentationAdmin('admin.company_type_documentation', 'AppBundle\\Entity\\CompanyTypeDocumentation', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Company Types Documentation');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.company_type_documentation.template_registry']) ? $this->services['admin.company_type_documentation.template_registry'] : $this->load('getAdmin_CompanyTypeDocumentation_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.company_types' autowired service.
     *
     * @return \AppBundle\Admin\CompanyTypeAdmin
     */
    protected function getAdmin_CompanyTypesService()
    {
        $instance = new \AppBundle\Admin\CompanyTypeAdmin('admin.company_types', 'AppBundle\\Entity\\CompanyType', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Company Types');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.company_types.template_registry']) ? $this->services['admin.company_types.template_registry'] : $this->load('getAdmin_CompanyTypes_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.company_verification' autowired service.
     *
     * @return \AppBundle\Admin\CompanyVerificationAdmin
     */
    protected function getAdmin_CompanyVerificationService()
    {
        $instance = new \AppBundle\Admin\CompanyVerificationAdmin('admin.company_verification', 'AppBundle\\Entity\\CompanyVerification', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Company Verification');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.company_verification.template_registry']) ? $this->services['admin.company_verification.template_registry'] : $this->load('getAdmin_CompanyVerification_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.content_categories' autowired service.
     *
     * @return \AppBundle\Admin\ContentCategoryAdmin
     */
    protected function getAdmin_ContentCategoriesService()
    {
        $instance = new \AppBundle\Admin\ContentCategoryAdmin('admin.content_categories', 'AppBundle\\Entity\\ContentCategory', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Content Categories');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.content_categories.template_registry']) ? $this->services['admin.content_categories.template_registry'] : $this->load('getAdmin_ContentCategories_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.documents_types' autowired service.
     *
     * @return \AppBundle\Admin\DocumentTypeAdmin
     */
    protected function getAdmin_DocumentsTypesService()
    {
        $instance = new \AppBundle\Admin\DocumentTypeAdmin('admin.documents_types', 'AppBundle\\Entity\\DocumentType', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Document Types');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.documents_types.template_registry']) ? $this->services['admin.documents_types.template_registry'] : $this->load('getAdmin_DocumentsTypes_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.members' autowired service.
     *
     * @return \AppBundle\Admin\MemberAdmin
     */
    protected function getAdmin_MembersService()
    {
        $instance = new \AppBundle\Admin\MemberAdmin('admin.members', 'AppBundle\\Entity\\Member', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Members');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.members.template_registry']) ? $this->services['admin.members.template_registry'] : $this->load('getAdmin_Members_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.news' autowired service.
     *
     * @return \AppBundle\Admin\ArticleAdmin
     */
    protected function getAdmin_NewsService()
    {
        $instance = new \AppBundle\Admin\ArticleAdmin('admin.news', 'AppBundle\\Entity\\Article', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('News & Case Studies');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.news.template_registry']) ? $this->services['admin.news.template_registry'] : $this->load('getAdmin_News_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.payment_modes' autowired service.
     *
     * @return \AppBundle\Admin\PaymentModeAdmin
     */
    protected function getAdmin_PaymentModesService()
    {
        $instance = new \AppBundle\Admin\PaymentModeAdmin('admin.payment_modes', 'AppBundle\\Entity\\PaymentMode', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Payment Modes');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.payment_modes.template_registry']) ? $this->services['admin.payment_modes.template_registry'] : $this->load('getAdmin_PaymentModes_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.payments' autowired service.
     *
     * @return \AppBundle\Admin\PaymentAdmin
     */
    protected function getAdmin_PaymentsService()
    {
        $instance = new \AppBundle\Admin\PaymentAdmin('admin.payments', 'AppBundle\\Entity\\Payment', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Transactions');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.payments.template_registry']) ? $this->services['admin.payments.template_registry'] : $this->load('getAdmin_Payments_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.promo_codes' autowired service.
     *
     * @return \AppBundle\Admin\PromoCodeAdmin
     */
    protected function getAdmin_PromoCodesService()
    {
        $instance = new \AppBundle\Admin\PromoCodeAdmin('admin.promo_codes', 'AppBundle\\Entity\\PromoCode', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Promo Codes');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.promo_codes.template_registry']) ? $this->services['admin.promo_codes.template_registry'] : $this->load('getAdmin_PromoCodes_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.requests' autowired service.
     *
     * @return \AppBundle\Admin\RequestAdmin
     */
    protected function getAdmin_RequestsService()
    {
        $instance = new \AppBundle\Admin\RequestAdmin('admin.requests', 'AppBundle\\Entity\\Request', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Requests');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.requests.template_registry']) ? $this->services['admin.requests.template_registry'] : $this->load('getAdmin_Requests_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.requests_documents' autowired service.
     *
     * @return \AppBundle\Admin\RequestDocumentAdmin
     */
    protected function getAdmin_RequestsDocumentsService()
    {
        $instance = new \AppBundle\Admin\RequestDocumentAdmin('admin.requests_documents', 'AppBundle\\Entity\\RequestDocument', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Request Documents');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.requests_documents.template_registry']) ? $this->services['admin.requests_documents.template_registry'] : $this->load('getAdmin_RequestsDocuments_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.requests_type' autowired service.
     *
     * @return \AppBundle\Admin\RequestTypeAdmin
     */
    protected function getAdmin_RequestsTypeService()
    {
        $instance = new \AppBundle\Admin\RequestTypeAdmin('admin.requests_type', 'AppBundle\\Entity\\RequestType', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Request Types');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.requests_type.template_registry']) ? $this->services['admin.requests_type.template_registry'] : $this->load('getAdmin_RequestsType_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.staff' autowired service.
     *
     * @return \AppBundle\Admin\StaffAdmin
     */
    protected function getAdmin_StaffService()
    {
        $instance = new \AppBundle\Admin\StaffAdmin('admin.staff', 'AppBundle\\Entity\\Staff', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('IIA Staff');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.staff.template_registry']) ? $this->services['admin.staff.template_registry'] : $this->load('getAdmin_Staff_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.testimonials' autowired service.
     *
     * @return \AppBundle\Admin\TestimonialAdmin
     */
    protected function getAdmin_TestimonialsService()
    {
        $instance = new \AppBundle\Admin\TestimonialAdmin('admin.testimonials', 'AppBundle\\Entity\\Testimonial', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Testimonials');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.testimonials.template_registry']) ? $this->services['admin.testimonials.template_registry'] : $this->load('getAdmin_Testimonials_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.tierBenefits' autowired service.
     *
     * @return \AppBundle\Admin\TierBenefitAdmin
     */
    protected function getAdmin_TierBenefitsService()
    {
        $instance = new \AppBundle\Admin\TierBenefitAdmin('admin.tierBenefits', 'AppBundle\\Entity\\TierBenefit', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Tier Benefits');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.tierBenefits.template_registry']) ? $this->services['admin.tierBenefits.template_registry'] : $this->load('getAdmin_TierBenefits_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.tiers' autowired service.
     *
     * @return \AppBundle\Admin\TierAdmin
     */
    protected function getAdmin_TiersService()
    {
        $instance = new \AppBundle\Admin\TierAdmin('admin.tiers', 'AppBundle\\Entity\\Tier', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Tiers');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.tiers.template_registry']) ? $this->services['admin.tiers.template_registry'] : $this->load('getAdmin_Tiers_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.ujuzi_hub' autowired service.
     *
     * @return \AppBundle\Admin\BusinessGrowthHubAdmin
     */
    protected function getAdmin_UjuziHubService()
    {
        $instance = new \AppBundle\Admin\BusinessGrowthHubAdmin('admin.ujuzi_hub', 'AppBundle\\Entity\\BusinessGrowthHub', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Business Growth Hub');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.ujuzi_hub.template_registry']) ? $this->services['admin.ujuzi_hub.template_registry'] : $this->load('getAdmin_UjuziHub_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.user_guide.content' autowired service.
     *
     * @return \AppBundle\Admin\UserGuideAdmin
     */
    protected function getAdmin_UserGuide_ContentService()
    {
        $instance = new \AppBundle\Admin\UserGuideAdmin('admin.user_guide.content', 'AppBundle\\Entity\\UserGuide', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('User Guide Content');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.user_guide.content.template_registry']) ? $this->services['admin.user_guide.content.template_registry'] : $this->load('getAdmin_UserGuide_Content_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.user_guide.topic' autowired service.
     *
     * @return \AppBundle\Admin\UserGuideTopicAdmin
     */
    protected function getAdmin_UserGuide_TopicService()
    {
        $instance = new \AppBundle\Admin\UserGuideTopicAdmin('admin.user_guide.topic', 'AppBundle\\Entity\\UserGuideTopic', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('User Guide Topics');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.user_guide.topic.template_registry']) ? $this->services['admin.user_guide.topic.template_registry'] : $this->load('getAdmin_UserGuide_Topic_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.verification_stages' autowired service.
     *
     * @return \AppBundle\Admin\VerificationStageAdmin
     */
    protected function getAdmin_VerificationStagesService()
    {
        $instance = new \AppBundle\Admin\VerificationStageAdmin('admin.verification_stages', 'AppBundle\\Entity\\VerificationStage', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Verification Procedures');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.verification_stages.template_registry']) ? $this->services['admin.verification_stages.template_registry'] : $this->load('getAdmin_VerificationStages_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'admin.verification_step' autowired service.
     *
     * @return \AppBundle\Admin\VerificationStepAdmin
     */
    protected function getAdmin_VerificationStepService()
    {
        $instance = new \AppBundle\Admin\VerificationStepAdmin('admin.verification_step', 'AppBundle\\Entity\\VerificationStep', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.native']) ? $this->services['sonata.admin.label.strategy.native'] : ($this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('Verification Steps');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['admin.verification_step.template_registry']) ? $this->services['admin.verification_step.template_registry'] : $this->load('getAdmin_VerificationStep_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'app.twig.extension.date' shared autowired service.
     *
     * @return \Twig_Extensions_Extension_Date
     */
    protected function getApp_Twig_Extension_DateService()
    {
        return $this->services['app.twig.extension.date'] = new \Twig_Extensions_Extension_Date(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('TBZbRDulRJ', 0, ($this->targetDirs[0].'/pools'));
        $a->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'});

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('d+5XY+ytzG', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'}, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, 'UTF-8', ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, NULL);
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['debug.controller_resolver']) ? $this->services['debug.controller_resolver'] : $this->getDebug_ControllerResolverService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->getDebug_ArgumentResolverService()) && false ?: '_'});
    }

    /**
     * Gets the public 'hwi_oauth.resource_ownermap.main' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMap
     */
    protected function getHwiOauth_ResourceOwnermap_MainService()
    {
        $this->services['hwi_oauth.resource_ownermap.main'] = $instance = new \HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMap(${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'}, $this->parameters['hwi_oauth.resource_owners'], $this->parameters['hwi_oauth.resource_ownermap.configured.main']);

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'hwi_oauth.security.oauth_utils' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\Security\OAuthUtils
     */
    protected function getHwiOauth_Security_OauthUtilsService()
    {
        $this->services['hwi_oauth.security.oauth_utils'] = $instance = new \HWI\Bundle\OAuthBundle\Security\OAuthUtils(${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}, true, 'IS_AUTHENTICATED_REMEMBERED');

        $instance->addResourceOwnerMap(${($_ = isset($this->services['hwi_oauth.resource_ownermap.main']) ? $this->services['hwi_oauth.resource_ownermap.main'] : $this->getHwiOauth_ResourceOwnermap_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'knp_menu.matcher' shared service.
     *
     * @return \Knp\Menu\Matcher\Matcher
     */
    protected function getKnpMenu_MatcherService()
    {
        return $this->services['knp_menu.matcher'] = new \Knp\Menu\Matcher\Matcher(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['knp_menu.voter.router']) ? $this->services['knp_menu.voter.router'] : $this->load('getKnpMenu_Voter_RouterService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['sonata.admin.menu.matcher.voter.admin']) ? $this->services['sonata.admin.menu.matcher.voter.admin'] : $this->load('getSonata_Admin_Menu_Matcher_Voter_AdminService.php')) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['sonata.admin.menu.matcher.voter.active']) ? $this->services['sonata.admin.menu.matcher.voter.active'] : ($this->services['sonata.admin.menu.matcher.voter.active'] = new \Sonata\AdminBundle\Menu\Matcher\Voter\ActiveVoter())) && false ?: '_'};
        }, 3));
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.profiler']) ? $this->services['monolog.logger.profiler'] : $this->getMonolog_Logger_ProfilerService()) && false ?: '_'};

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDirs[0].'/profiler')), $a, true);

        $b = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'};
        $c = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $c->addInstance('cache.app', ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->getCache_AppService()) && false ?: '_'});
        $c->addInstance('cache.system', ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->getCache_SystemService()) && false ?: '_'});
        $c->addInstance('cache.validator', ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'});
        $c->addInstance('cache.serializer', ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'});
        $c->addInstance('cache.annotations', ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'});
        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
        $d->addLogger('default', ${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : ($this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())) && false ?: '_'});
        $e = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $e->setKernel($b);
        }

        $instance->add(${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : ($this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector())) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->getDataCollector_FormService()) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDirs[0].'/appDevDebugProjectContainer')));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}));
        $instance->add(${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : ($this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())) && false ?: '_'});
        $instance->add($c);
        $instance->add(${($_ = isset($this->services['data_collector.translation']) ? $this->services['data_collector.translation'] : $this->getDataCollector_TranslationService()) && false ?: '_'});
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'}));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : ($this->services['twig.profile'] = new \Twig\Profiler\Profile())) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(${($_ = isset($this->services['data_collector.dump']) ? $this->services['data_collector.dump'] : $this->getDataCollector_DumpService()) && false ?: '_'});
        $instance->add(${($_ = isset($this->services['httplug.collector.collector']) ? $this->services['httplug.collector.collector'] : ($this->services['httplug.collector.collector'] = new \Http\HttplugBundle\Collector\Collector())) && false ?: '_'});
        $instance->add(new \Sonata\BlockBundle\Profiler\DataCollector\BlockDataCollector(${($_ = isset($this->services['sonata.block.templating.helper']) ? $this->services['sonata.block.templating.helper'] : $this->getSonata_Block_Templating_HelperService()) && false ?: '_'}, $this->parameters['sonata.block.container.types']));
        $instance->add($e);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[0].'/assetic/routing.yml'), ['cache_dir' => $this->targetDirs[0], 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'yaml'], ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'});

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->getConfigCacheFactoryService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'sonata.admin.global_template_registry' shared service.
     *
     * @return \Sonata\AdminBundle\Templating\TemplateRegistry
     */
    protected function getSonata_Admin_GlobalTemplateRegistryService()
    {
        return $this->services['sonata.admin.global_template_registry'] = new \Sonata\AdminBundle\Templating\TemplateRegistry($this->parameters['sonata.admin.configuration.templates']);
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.boolean' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_BooleanService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.callback' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_CallbackService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.choice' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ChoiceService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.class' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ClassService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.date' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.date_range' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.datetime' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.datetime_range' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.model' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ModelService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.model_autocomplete' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ModelAutocompleteFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_ModelAutocompleteService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelAutocompleteFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.number' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_NumberService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.string' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\StringFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_StringService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\StringFilter();
    }

    /**
     * Gets the public 'sonata.admin.orm.filter.type.time' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter
     */
    protected function getSonata_Admin_Orm_Filter_Type_TimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter();
    }

    /**
     * Gets the public 'sonata.admin.pool' shared service.
     *
     * @return \Sonata\AdminBundle\Admin\Pool
     */
    protected function getSonata_Admin_PoolService()
    {
        $this->services['sonata.admin.pool'] = $instance = new \Sonata\AdminBundle\Admin\Pool($this, 'APP Control Panel', 'bundles/app/images/app-logo.png', ['html5_validate' => true, 'sort_admins' => false, 'confirm_exit' => true, 'js_debug' => false, 'use_select2' => true, 'use_icheck' => true, 'use_bootlint' => false, 'use_stickyforms' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'default_group' => 'default', 'default_label_catalogue' => 'SonataAdminBundle', 'default_icon' => '<i class="fa fa-folder"></i>', 'dropdown_number_groups_per_colums' => 2, 'title_mode' => 'both', 'lock_protection' => false, 'enable_jms_di_extra_autoregistration' => true, 'mosaic_background' => 'data:image/png;base64,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', 'javascripts' => [0 => 'bundles/sonatacore/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js', 2 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 3 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 4 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 5 => 'bundles/sonatacore/vendor/bootstrap/dist/js/bootstrap.min.js', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 7 => 'bundles/sonataadmin/vendor/jquery-form/jquery.form.js', 8 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 9 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 10 => 'bundles/sonatacore/vendor/select2/select2.min.js', 11 => 'bundles/sonataadmin/vendor/admin-lte/dist/js/app.min.js', 12 => 'bundles/sonataadmin/vendor/iCheck/icheck.min.js', 13 => 'bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js', 14 => 'bundles/sonataadmin/vendor/waypoints/lib/jquery.waypoints.min.js', 15 => 'bundles/sonataadmin/vendor/waypoints/lib/shortcuts/sticky.min.js', 16 => 'bundles/sonataadmin/vendor/readmore-js/readmore.min.js', 17 => 'bundles/sonataadmin/vendor/masonry/dist/masonry.pkgd.min.js', 18 => 'bundles/sonataadmin/Admin.js', 19 => 'bundles/sonataadmin/treeview.js', 20 => 'bundles/sonataadmin/sidebar.js', 21 => 'bundles/sonatacore/js/base.js'], 'stylesheets' => [0 => 'bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonatacore/vendor/components-font-awesome/css/font-awesome.min.css', 2 => 'bundles/sonatacore/vendor/ionicons/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/AdminLTE.min.css', 4 => 'bundles/sonataadmin/vendor/admin-lte/dist/css/skins/skin-black.min.css', 5 => 'bundles/sonataadmin/vendor/iCheck/skins/square/blue.css', 6 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 7 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 8 => 'bundles/sonatacore/vendor/select2/select2.css', 9 => 'bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css', 10 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 11 => 'bundles/sonataadmin/css/styles.css', 12 => 'bundles/sonataadmin/css/layout.css', 13 => 'bundles/sonataadmin/css/tree.css', 14 => 'bundles/sonatacore/css/flashmessage.css'], 'role_admin' => 'ROLE_SONATA_ADMIN', 'role_super_admin' => 'ROLE_SUPER_ADMIN', 'search' => true], ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->getPropertyAccessorService()) && false ?: '_'});

        $instance->setTemplateRegistry(${($_ = isset($this->services['sonata.admin.global_template_registry']) ? $this->services['sonata.admin.global_template_registry'] : $this->getSonata_Admin_GlobalTemplateRegistryService()) && false ?: '_'});
        $instance->setAdminServiceIds([0 => 'admin.companies', 1 => 'admin.company_addresses', 2 => 'admin.company_contacts', 3 => 'admin.company_documents', 4 => 'admin.documents_types', 5 => 'admin.company_directors', 6 => 'admin.company_shareholding', 7 => 'admin.company_types', 8 => 'admin.company_type_documentation', 9 => 'admin.company_references', 10 => 'admin.buyers', 11 => 'admin.buyer_membership', 12 => 'admin.members', 13 => 'admin.payments', 14 => 'admin.payment_modes', 15 => 'admin.promo_codes', 16 => 'admin.requests', 17 => 'admin.categories', 18 => 'admin.requests_type', 19 => 'admin.requests_documents', 20 => 'admin.company_requests', 21 => 'admin.news', 22 => 'admin.ujuzi_hub', 23 => 'admin.testimonials', 24 => 'admin.content_categories', 25 => 'admin.verification_stages', 26 => 'admin.verification_step', 27 => 'admin.company_verification', 28 => 'admin.staff', 29 => 'admin.user_guide.topic', 30 => 'admin.user_guide.content', 31 => 'admin.tiers', 32 => 'admin.tierBenefits', 33 => 'sonata.user.admin.user', 34 => 'sonata.user.admin.group']);
        $instance->setAdminGroups(['Company Information' => ['label' => 'Company Information', 'label_catalogue' => 'SonataAdminBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => [], 'on_top' => false, 'keep_open' => false, 'items' => [0 => ['admin' => 'admin.companies', 'label' => 'Suppliers', 'route' => '', 'route_params' => [], 'route_absolute' => false], 1 => ['admin' => 'admin.company_contacts', 'label' => 'Company Contacts', 'route' => '', 'route_params' => [], 'route_absolute' => false], 2 => ['admin' => 'admin.company_documents', 'label' => 'Document Repository', 'route' => '', 'route_params' => [], 'route_absolute' => false], 3 => ['admin' => 'admin.documents_types', 'label' => 'Document Types', 'route' => '', 'route_params' => [], 'route_absolute' => false], 4 => ['admin' => 'admin.company_types', 'label' => 'Company Types', 'route' => '', 'route_params' => [], 'route_absolute' => false], 5 => ['admin' => 'admin.buyers', 'label' => 'Buyers', 'route' => '', 'route_params' => [], 'route_absolute' => false], 6 => ['admin' => 'admin.categories', 'label' => 'Company Sectors', 'route' => '', 'route_params' => [], 'route_absolute' => false], 7 => ['admin' => 'admin.tiers', 'label' => 'Tiers', 'route' => '', 'route_params' => [], 'route_absolute' => false]]], 'Members Information' => ['label' => 'Members Information', 'label_catalogue' => 'SonataAdminBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => [], 'on_top' => false, 'keep_open' => false, 'items' => [0 => ['admin' => 'admin.members', 'label' => 'Members', 'route' => '', 'route_params' => [], 'route_absolute' => false]]], 'Payment Information' => ['label' => 'Payment Information', 'label_catalogue' => 'SonataAdminBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => [], 'on_top' => false, 'keep_open' => false, 'items' => [0 => ['admin' => 'admin.payments', 'label' => 'Transactions', 'route' => '', 'route_params' => [], 'route_absolute' => false], 1 => ['admin' => 'admin.payment_modes', 'label' => 'Payment Modes', 'route' => '', 'route_params' => [], 'route_absolute' => false], 2 => ['admin' => 'admin.promo_codes', 'label' => 'Promo Codes', 'route' => '', 'route_params' => [], 'route_absolute' => false]]], 'Requests' => ['label' => 'Requests', 'label_catalogue' => 'SonataAdminBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => [], 'on_top' => false, 'keep_open' => false, 'items' => [0 => ['admin' => 'admin.requests', 'label' => 'Requests', 'route' => '', 'route_params' => [], 'route_absolute' => false], 1 => ['admin' => 'admin.requests_type', 'label' => 'Request Types', 'route' => '', 'route_params' => [], 'route_absolute' => false], 2 => ['admin' => 'admin.requests_documents', 'label' => 'Request Documents', 'route' => '', 'route_params' => [], 'route_absolute' => false], 3 => ['admin' => 'admin.company_requests', 'label' => 'Supplier Responses', 'route' => '', 'route_params' => [], 'route_absolute' => false]]], 'Website Content' => ['label' => 'Website Content', 'label_catalogue' => 'SonataAdminBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => [], 'on_top' => false, 'keep_open' => false, 'items' => [0 => ['admin' => 'admin.news', 'label' => 'News & Case Studies', 'route' => '', 'route_params' => [], 'route_absolute' => false], 1 => ['admin' => 'admin.ujuzi_hub', 'label' => 'Business Growth Hub', 'route' => '', 'route_params' => [], 'route_absolute' => false], 2 => ['admin' => 'admin.testimonials', 'label' => 'Testimonials', 'route' => '', 'route_params' => [], 'route_absolute' => false], 3 => ['admin' => 'admin.content_categories', 'label' => 'Content Categories', 'route' => '', 'route_params' => [], 'route_absolute' => false]]], 'Verification' => ['label' => 'Verification', 'label_catalogue' => 'SonataAdminBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => [], 'on_top' => false, 'keep_open' => false, 'items' => [0 => ['admin' => 'admin.verification_stages', 'label' => 'Verification Procedures', 'route' => '', 'route_params' => [], 'route_absolute' => false]]], 'Staff Information' => ['label' => 'Staff Information', 'label_catalogue' => 'SonataAdminBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => [], 'on_top' => false, 'keep_open' => false, 'items' => [0 => ['admin' => 'admin.staff', 'label' => 'IIA Staff', 'route' => '', 'route_params' => [], 'route_absolute' => false]]], 'User Guide' => ['label' => 'User Guide', 'label_catalogue' => 'SonataAdminBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => [], 'on_top' => false, 'keep_open' => false, 'items' => [0 => ['admin' => 'admin.user_guide.topic', 'label' => 'User Guide Topics', 'route' => '', 'route_params' => [], 'route_absolute' => false], 1 => ['admin' => 'admin.user_guide.content', 'label' => 'User Guide Content', 'route' => '', 'route_params' => [], 'route_absolute' => false]]], 'sonata_user' => ['label' => 'sonata_user', 'label_catalogue' => 'SonataUserBundle', 'icon' => '<i class=\'fa fa-users\'></i>', 'roles' => [], 'on_top' => false, 'keep_open' => false, 'items' => [0 => ['admin' => 'sonata.user.admin.user', 'label' => 'users', 'route' => '', 'route_params' => [], 'route_absolute' => false], 1 => ['admin' => 'sonata.user.admin.group', 'label' => 'groups', 'route' => '', 'route_params' => [], 'route_absolute' => false]]]]);
        $instance->setAdminClasses(['AppBundle\\Entity\\Company' => [0 => 'admin.companies'], 'AppBundle\\Entity\\CompanyAddress' => [0 => 'admin.company_addresses'], 'AppBundle\\Entity\\CompanyContact' => [0 => 'admin.company_contacts'], 'AppBundle\\Entity\\CompanyDocumentation' => [0 => 'admin.company_documents'], 'AppBundle\\Entity\\DocumentType' => [0 => 'admin.documents_types'], 'AppBundle\\Entity\\CompanyDirector' => [0 => 'admin.company_directors'], 'AppBundle\\Entity\\CompanyShareholding' => [0 => 'admin.company_shareholding'], 'AppBundle\\Entity\\CompanyType' => [0 => 'admin.company_types'], 'AppBundle\\Entity\\CompanyTypeDocumentation' => [0 => 'admin.company_type_documentation'], 'AppBundle\\Entity\\CompanyReference' => [0 => 'admin.company_references'], 'AppBundle\\Entity\\Buyer' => [0 => 'admin.buyers'], 'AppBundle\\Entity\\BuyerMembership' => [0 => 'admin.buyer_membership'], 'AppBundle\\Entity\\Member' => [0 => 'admin.members'], 'AppBundle\\Entity\\Payment' => [0 => 'admin.payments'], 'AppBundle\\Entity\\PaymentMode' => [0 => 'admin.payment_modes'], 'AppBundle\\Entity\\PromoCode' => [0 => 'admin.promo_codes'], 'AppBundle\\Entity\\Request' => [0 => 'admin.requests'], 'AppBundle\\Entity\\Category' => [0 => 'admin.categories'], 'AppBundle\\Entity\\RequestType' => [0 => 'admin.requests_type'], 'AppBundle\\Entity\\RequestDocument' => [0 => 'admin.requests_documents'], 'AppBundle\\Entity\\CompanyRequest' => [0 => 'admin.company_requests'], 'AppBundle\\Entity\\Article' => [0 => 'admin.news'], 'AppBundle\\Entity\\BusinessGrowthHub' => [0 => 'admin.ujuzi_hub'], 'AppBundle\\Entity\\Testimonial' => [0 => 'admin.testimonials'], 'AppBundle\\Entity\\ContentCategory' => [0 => 'admin.content_categories'], 'AppBundle\\Entity\\VerificationStage' => [0 => 'admin.verification_stages'], 'AppBundle\\Entity\\VerificationStep' => [0 => 'admin.verification_step'], 'AppBundle\\Entity\\CompanyVerification' => [0 => 'admin.company_verification'], 'AppBundle\\Entity\\Staff' => [0 => 'admin.staff'], 'AppBundle\\Entity\\UserGuideTopic' => [0 => 'admin.user_guide.topic'], 'AppBundle\\Entity\\UserGuide' => [0 => 'admin.user_guide.content'], 'AppBundle\\Entity\\Tier' => [0 => 'admin.tiers'], 'AppBundle\\Entity\\TierBenefit' => [0 => 'admin.tierBenefits'], 'Application\\Sonata\\UserBundle\\Entity\\User' => [0 => 'sonata.user.admin.user'], 'Application\\Sonata\\UserBundle\\Entity\\Group' => [0 => 'sonata.user.admin.group']]);

        return $instance;
    }

    /**
     * Gets the public 'sonata.admin.twig.extension' shared service.
     *
     * @return \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension
     */
    protected function getSonata_Admin_Twig_ExtensionService()
    {
        $this->services['sonata.admin.twig.extension'] = $instance = new \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, $this, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'});

        $instance->setXEditableTypeMapping($this->parameters['sonata.admin.twig.extension.x_editable_type_mapping']);

        return $instance;
    }

    /**
     * Gets the public 'sonata.admin.twig.global' shared service.
     *
     * @return \Sonata\AdminBundle\Twig\GlobalVariables
     */
    protected function getSonata_Admin_Twig_GlobalService()
    {
        return $this->services['sonata.admin.twig.global'] = new \Sonata\AdminBundle\Twig\GlobalVariables(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'}, 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOcAAADnCAYAAADl9EEgAAAXfWlDQ1BJQ0MgUHJvZmlsZQAAWAmtWWVYVU3Xnn0KOBy6u7u7u7sbgUN3NyopUkoISIoggqCCQYmIiCCCiKACBiAhkiqooAjIu0F93ufH9/779nWdvW/W3GvNmlkzs/daAMDQgg8NDUSQAxAUHBluqafJbu/gyE7wFhACKkAHhAEG7xERqmFubgz+57U9AaDDxhcih7b+J+3/bqDw9IrwAAAyh5vdPSM8gmDcAgCizSM0PBIA1KE9rpjI0EOcB2PqcNhBGNceYp/fuOMQu//Gw0cca0stmDMLACEOjw/3AQC3DsvZoz18YDskOAAwlMGefsEAULHDWNXDF+8JAIMbzBEOCgo5xDkw5nf/lx2ff2E83v0fm3i8zz/491hgTbhjbb+I0EB83NEf/5+3oMAoeL6OLlr4jguN1LSEn/TwvNH7RRpYw5gaxuK+Ufo2f7B2vK+13SEXltsHu5uawZgSxp4eEVrwXALYDhQdEGJ0aOeQk+Pppa0DY3hVQCUR0VZ/8ZV4Xy3TPxx7f7zhYcxIYU4HPhxGv/t9FBppfujDoc03wYGmxn/whne47qF9WI7AeEXoWMEY9gHBHBlufSiHfUaIevvpGsAY7hehGRp4tOYOOZbhUZaHY+GGsadXsM1f3QxPvLYRLGeG5WXAGGgBbcAO30NAIPwLB37AE37+lXv8S24F4sFHEAy8QASsccRw9UsJ/4uBLsDD+j5wu8gffc0jiReIhrX2//JG1tvX/+I/Ou7/aOiC90c2/lgQvyq+Ir73l81O9tcvjA5GG6OP0cUI/JXAPf0eRfiRf0bwaLxAFGzLC+77rz//HlXUP4x/S3/PgeWRVgDM8PvbN7A98szvH1tG/8zMn7lA8aIkUTIoTZQKShWlANhRtChGIIKSRsmjNFBqKCW4TeFf8/xH64//IsD7aK6ij7wPAB9gz+FdHekVGwnHCmiFhMaF+/n4RrJrwKeFlzC7QbCHqDC7pLiEBDg8ew45AHy1PDpTINpn/5V5LQOgDK8NotH/yvzPAdDYDwBd1n9lvE7w/hUG4OZzj6jw6N/2UIcPNMACMnilMQBWwAX44fFLAlmgBNSBDjAEZsAaOAAX4AF8YX/DQQw4DpJBOsgGeaAIlIEqcAlcAdfBLdAOusAD8Ag8AaNgHLwFs2ARrIENsA12IQgigEggKogBYoN4ICFIEpKHVCEdyBiyhBwgN8gHCoaioONQKpQNFUBlUDXUAN2E7kAPoEFoDHoNzUEr0BfoJwKJwCGoESwIXoQYQh6hgTBCWCOOIXwQYYh4RBriLKIEUYO4hmhDPEA8QYwjZhFriC0kQBIjaZEcSBGkPFILaYZ0RHojw5EnkVnIYmQNsgnZiRxAvkDOIteROygMigrFjhKBY6mPskF5oMJQJ1E5qDLUFVQbqg/1AjWH2kD9QpOgmdFCaEW0Adoe7YOOQaeji9F16FZ0P3ocvYjexmAwtBg+jBy8fh0w/pgETA6mEtOM6cGMYRYwWwQEBAwEQgQqBGYEeIJIgnSCUoJrBPcJnhMsEvwgJCZkI5Qk1CV0JAwmTCEsJmwk7CZ8TrhEuEtETsRDpEhkRuRJFEeUS1RL1En0jGiRaBdLgeXDqmCtsf7YZGwJtgnbj53CfiUmJuYkViC2IPYjTiIuIb5B/Jh4jngHR4kTxGnhnHFRuLO4elwP7jXuKwkJCS+JOokjSSTJWZIGkockMyQ/SKlIRUkNSD1JE0nLSdtIn5N+IiMi4yHTIHMhiycrJrtN9oxsnZyInJdcixxPfpK8nPwO+ST5FgUVhQSFGUUQRQ5FI8UgxTIlASUvpQ6lJ2Ua5SXKh5QLVEgqLiotKg+qVKpaqn6qRWoMNR+1AbU/dTb1deoR6g0aShppGluaWJpymns0s7RIWl5aA9pA2lzaW7QTtD/pWOg06LzoMuma6J7Tfadnolen96LPom+mH6f/ycDOoMMQwJDP0M4wzYhiFGS0YIxhvMDYz7jORM2kxOTBlMV0i+kNM4JZkNmSOYH5EvMw8xYLK4seSyhLKctDlnVWWlZ1Vn/WQtZu1hU2KjZVNj+2Qrb7bKvsNOwa7IHsJex97BsczBz6HFEc1RwjHLucfJw2nCmczZzTXFgueS5vrkKuXq4NbjZuE+7j3Fe53/AQ8cjz+PKc5xng+c7Lx2vHe5q3nXeZj57PgC+e7yrfFD8Jvxp/GH8N/0sBjIC8QIBApcCoIEJQRtBXsFzwmRBCSFbIT6hSaEwYLawgHCxcIzwpghPREIkWuSoyJ0oraiyaItou+kmMW8xRLF9sQOyXuIx4oHit+FsJSglDiRSJTokvkoKSHpLlki+lSKR0pRKlOqQ2pYWkvaQvSL+SoZIxkTkt0yuzLysnGy7bJLsixy3nJlchNylPLW8unyP/WAGtoKmQqNClsKMoqxipeEvxs5KIUoBSo9KyMp+yl3Kt8oIKpwpepVplVpVd1U31ouqsGocaXq1GbV6dS91TvU59SUNAw1/jmsYnTXHNcM1Wze9ailontHq0kdp62lnaIzqUOjY6ZTozupy6PrpXdTf0ZPQS9Hr00fpG+vn6kwYsBh4GDQYbhnKGJwz7jHBGVkZlRvPGgsbhxp0mCBNDk3MmU6Y8psGm7WbAzMDsnNm0OZ95mPldC4yFuUW5xQdLCcvjlgNWVFauVo1W29aa1rnWb234baJsem3JbJ1tG2y/22nbFdjN2ovZn7B/4sDo4OfQ4UjgaOtY57jlpONU5LToLOOc7jxxjO9Y7LFBF0aXQJd7rmSueNfbbmg3O7dGtz28Gb4Gv+Vu4F7hvuGh5XHeY81T3bPQc8VLxavAa8lbxbvAe9lHxeecz4qvmm+x77qfll+Z36a/vn+V//cAs4D6gINAu8DmIMIgt6A7wZTBAcF9IawhsSFjoUKh6aGzYYphRWEb4UbhdRFQxLGIjkhq+CNvOIo/6lTUXLRqdHn0jxjbmNuxFLHBscNxgnGZcUvxuvGXE1AJHgm9xzmOJx+fO6FxovokdNL9ZG8iV2Ja4mKSXtKVZGxyQPLTFPGUgpRvqXapnWksaUlpC6f0Tl1NJ00PT588rXS6KgOV4ZcxkimVWZr5K8szayhbPLs4ey/HI2fojMSZkjMHZ73PjuTK5l7Iw+QF503kq+VfKaAoiC9YOGdyrq2QvTCr8FuRa9FgsXRx1Xns+ajzsyXGJR2l3KV5pXtlvmXj5ZrlzRXMFZkV3ys9K59fUL/QVMVSlV3186LfxVfVetVtNbw1xZcwl6Ivfai1rR24LH+5oY6xLrtuvz64fvaK5ZW+BrmGhkbmxtyriKtRV1euOV8bva59vaNJpKm6mbY5+wa4EXVj9abbzYlbRrd6b8vfbmrhaalopWrNaoPa4to22n3bZzscOsbuGN7p7VTqbL0rere+i6Or/B7NvdxubHda98H9+PtbPaE96w98Hiz0uva+fWj/8GWfRd9Iv1H/40e6jx4OaAzcf6zyuGtQcfDOkPxQ+xPZJ23DMsOtT2Weto7IjrQ9k3vWMaow2jmmPNb9XO35gxfaLx69NHj5ZNx0fGzCZuLVpPPk7CvPV8uvA19vvol+s/s2aQo9lTVNPl08wzxT807gXfOs7Oy9Oe254Xmr+bcLHgtr7yPe7y2mfSD5ULzEttSwLLnctaK7MrrqtLq4Frq2u57+keJjxSf+Ty2f1T8Pb9hvLG6Gbx58yfnK8LX+m/S33i3zrZntoO3d71k/GH5c2ZHfGfhp93NpN2aPYK9kX2C/85fRr6mDoIODUHw4/uhbAAnfEd7eAHyph3MBBzgHGAUAS/o7NzhiAICEYA6MbSEdhAZSHkWPxmIICcQJHYhSsfdxGBI8aTs5liKQcohahqaCDtAHMIwwyTLnsayxqbPncoxxYbkVeBx4A/iC+J0FNAVZBDeFHgmXigSIqoiRiL0Tb5ZIkrSQ4pD6KH1H5pSshRyz3KJ8k0KsooYSVumFcoWKp6qw6he1dvXjGpqaOM13Wt3ajTqVuvl6J/XxBmqG9IabRsPGTSaVptVmXeYLlmgrBmtGG3JbpO2e3a4DcCRyInUmOYY6tuUy7zrq1oO/7V7nUeqZ5RXn7eNj7avpJ+0vGMARyBBEFowM/hYyHzoadje8NuJsZGJUenRrLCrOK77nODjBe1Ix0SDJKTkq5WxqUVrCKelTC+m5p80zeDKJs0A2IofiDP9Z1VzTPLt8xwLHc/aFtkXWxRbnTUuMSvXKNMtVKxQqpS6IVAleFK82qkm9NHvZoO5a/VoDRSPPVYlrSte1m0ya7W643vS9FXo7puVka0rbqfaMjuw7uZ1Fdyu66u61dPffn+yZfTDR2/zQu4++73F/8aOYAe/HxwbthiyeGA3rPdUfsX4WNnpx7PUL4pdi41oTBpM6r+Rf87whfbPzdnnq1fSDmUvvUmd95mzmTRdM3pstmn0wXFJYplueXclalV6dXbuyHv9R/xPhp4bPep8XNi5txn5x+Wr2zWTLf7v3x+mf7fvaBwd/4i+BRCFXULPoBcwGIZJIFutLXIGbJRUkiyF/RMlAFUf9klaSLoV+mlGGKZ15lJWRzZ49n6OLc4pri3ubZ5X3Kd8l/nABVUFCwZdCVcL+IjIiv0QfiZ0Vt5Ngk1iSbJKKllaRgWT6ZbPkzOSp5CcUShWdlFiUpuBV4KzKoDqpdl7dSYNXY1dzXOumdo6Ol66yHoXeB/0ugyLDaCMvY3cTX9MQsyBzdwszSyUrQWsmG1JbhO223ZL9hMNDxyancuesY/Eufq72btp4MXd6D8hj1XPcq8+71afOt9gvzT8kwCFQPYgvmAReCXOhM2HfIjgiXaNKox/EvIpdiFuP3zlOfIL1JH8iexIm6V1ya0puaniayymbdPvTfhmpmZVZ17Nbc9rOtJy9mXs9ryH/csHFc+WFRUW5xZnnU0riSkPKfMr9KpIq71cJXLxSw3epoPbF5Z160iuMDVyNgvA6kLuu2qTdbHLD4WbgrfTbl1q6W8faZtqXO752Iu/SdQndU+pWvy/Xw/EA8WC+d+Bha199f/mjvIFTj+MHw4cin2QOd43QPjsxOv2c8YXaS+tx74mkycuvnr3+9pZySmTaeCb03fnZu3PP52cW5t+vfUDD0U9eGVujWBf/KPOJ9zPZ5x8bHzYnvwx9vfOteitx2/Y73/ftH1078T+VdnF72vsrf+IvCq0hKpEuKAE0AXoTs0KwSjhPtEmMxfGQaJA6kiWTX6MYozyg5qHRofWnO0VfxdDC2M/0mPkRy13WarZYdk32nxy1nEaca1wZ3HzcvTwuPDu8hXzifEP8PgIEAvWC+oJLQunC/ML9Ih6iQLRSTFnslXgU/HXTLGksuSyVKs0q3SFjKbMue0qOTa4d/mpZVkhUpFW8qqSh9FzZQ/mTSoIqgWq5mrTahHq8BqtGh6aZ5mstX60D7Rodc10i3Yd6x/Wl9VcNagydjeiNJoyLTKxMyUwHzVLNlcy/WTRbBljxWb23rrY5Zstg+9Iu117f/sCh1THQidtp2rn4mOmxbZdCVx7XFjcNtzf4WHdO91fwOeLrpect56Pga+CH9w8KwAeqBZEHTQVfDgkKlQndC3sYnhVhHkkT+TaqKtozhjfmQ+yFOJ24qfjABOqEF8fvnug+2Zf4MOlOckNKcWpqWsgpp3Sd04IZ6IyXmaVZjtnc2bs5s2eenr2TezHvZL5TgeI5xnM7hRNFt4rPnz9TUlBaXXa7/FHFq8rVC7sXSarZa6Qu6dc6Xw6pO1mfeSWnIakRf1XuGum1L9c/Nu3cwN1kvSV527wlobWl7UeHwp3QztK7N7o67t3tHry/9UCv906fVf/WQPGg1NDL4TMjbqMGzzVeak4EviadWpsfWd36tnMY/981osN3AkYWgHPJANinA2CjBkB+HwC843DeiQXAnAQAawWA4PUGCNwwgBTn/nl/QAAJMIAYUMD1GTbAB8SBIlyjMAOOcI4cAWeXueACaALd4BmYA9/gzJEZkoD0IFcoBsqHrkGPoQ8IDIIfYYyIQFTCed4BnNdFI+8gf6H0UOdQ82gpdAb6HUYRU4rZhTOsIUI5wnoiJqJ8LDE2kxhLnIdjxNWTSJN0kaqQdpLJk90l1yd/SxFJSU55nUqbaozamnqMxozmOa0r7Q+6UnoV+hmGE4xMjJ1MLsxEzF0s0azSrF/ZbrGHc8hw7HEOcBVz+/Io85LyzvLd5s8QcBfUEOIVJhXeFfkk+l5sXLxVIkFSQnJGKkNaRvqzTIdsgVycvKeCsaK4Ep0yqYqoarm6kMYZzUGtzzqEujR6DPrMBtyG0kamxmEmJaZ9Zl8suCztrM5aD9ii7LTt0x2GnWid3Y81urx3w+Ap3DHuWx6LnlNeqz5kvkZ+Rf5LgcpBhcGfQg3DGiNwkWFRb2J0YzviRRLqTrCfLE+iTc5PxaYln9o67Z+xlpWdE3S2NZ/iHGPhx+KGEtcy2vLRyjNVehe3anJrqS9n1G1fCWj4cjXvuk4zxY3NWx9altvWOpY6F7o279M90Hro0u82YDWo9kTsqcAz2bHgFz8mUW+IpqreUc11L5IuH1/T+Nj8efeL7Dfdbez3Mz+GdpZ/Lu6+3mvZz/vlfiB+dH4cxp8ArqlRwjUHDiAIpIAK0IfrDG5whSEBZIJS0ADuwHWEabABoSFGSPwo+nFQIXQDGoE+IsgQUghHRCriFmIRyYZ0RdYi11GyqDTUOFoAnYyegmNfTgAIfAnGCXUIO4jEiBqxAthrxNLE93HmuAWSWFIi0iIyDrIbcP76liKGkpayncqW6iP1CRosTQmtCO0QXQg9HX0Pgx8jNWMPUwgzN/MUSymrPRs922v2Sg5PTnEuwPWS+ypPGq8znzScy60KDAveht9iuSKposfFIsU9JNQlcZIjUlnSRjJ0Mpuyr+UG5NsUahRzlOKVo1UyVTvUvmtIaXpqZWvX6bTp3tW7q3/PYNBwzhhhImhqa3bKvN1i3Yrb2tWm0nbGntPB37HNmeCYnUuZa7/bGL7XvcEjw9PPy9Jb38fBN8WvJ4Ak0D2oK4QxND5sOkIzsiGaLCY09kk8R0L08dGTMom1yUwphWnYUwnp6xn4zPns+DPiuYi86YKbhdHF0ue/lN4sj6pUvPDzYl2N5KXK2qU6vnrfKzca6a5WXFdp+nij9JbC7ZFWfNtuR02nRRe413DfuGezt6rP/ZHiY44h1JOnT6OfYUaznuNe1Iy7Tpq8DnxbP700yzZv/j75Q/cK3VreJ96Np18Lt3N2DHYl9y7sv/+1+Sf+KEAE1zPp4egLwbUmLWAOV5iCwAl451eDFvAYzMD7HgfxQurQMSgBKofuQXMIIjjqeEQRYhRJg/RC3kMxo5JQq2gH9FOMFuYeXE95QGhMOE0UgSXD3iC2xSFx7SRhpBKkP8j6yUspoigdqAyoDWksaA3p5OgFGGQYXZnimCNZ3Fmt2UzZTThMOI25TLgteVx5I/jO8DcKPBZcESYRkRP1FisTn5BklPKUbpbZlTOXf6qYqeygilbLU9/TNNJKhSPYrtul160/YrBrZGTcZipqds1C1LLNWstmwi7IAet4zdnWhcKN2N3V08nrvY+Sb7bfhwDLwOFgk5DnYU7hy5EJ0awxM3GPEnpOVCbaJP1MqU6zTWc7vZF5LzvnjHeuXj5DwZNC76Lt86mlFGU1FbKVT6u8q6Gailr5y+P1UQ1MjY+vJTbp3RC7pduS2FbTkdvp0EV3b/J++QOHhwR9lx9JD9wd1BmaHI4dERtFjm28WB4fm8x/zfem8u2vaZ2ZrHdP5sjmbRYuvl/5ILEUsHxx5fHq6jr6I/Mn8c/aG3ab+C+eX82/cX7b2jqzzbzd+F3he9n3nR92P9p2aHfCd9p2dn+q/0z7ObhLumu1e353dI9wT30vdu/m3so+x77DfsH+0P7+L4lfnr/O/3ry69eBxIHXQcnB8GH8I7ylJA/fHgDCacLlx5mDg6+8ABAUALCff3CwW3NwsH8JTjamAOgJ/P1/h0MyBq5xVmwcoiGOXI7D57+v/wDYS4aShLvGpgAAAdVpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IlhNUCBDb3JlIDUuNC4wIj4KICAgPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIKICAgICAgICAgICAgeG1sbnM6dGlmZj0iaHR0cDovL25zLmFkb2JlLmNvbS90aWZmLzEuMC8iPgogICAgICAgICA8dGlmZjpDb21wcmVzc2lvbj4xPC90aWZmOkNvbXByZXNzaW9uPgogICAgICAgICA8dGlmZjpQaG90b21ldHJpY0ludGVycHJldGF0aW9uPjI8L3RpZmY6UGhvdG9tZXRyaWNJbnRlcnByZXRhdGlvbj4KICAgICAgICAgPHRpZmY6T3JpZW50YXRpb24+MTwvdGlmZjpPcmllbnRhdGlvbj4KICAgICAgPC9yZGY6RGVzY3JpcHRpb24+CiAgIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjl0tmoAACcLSURBVHgB7V0LvE1VGl/kmp5IEslrIqEQpcdIuDUeeZVL6DFRpJIk5ZVUE8pQjcTElNKQR4qiUnlWqIbkEcKQ8cgrjwpFNf6r9p3j3L32c621197n+36/c8+5e6+91rf/6/zPWnut75Hv12PCQsqRI0dC1hCfy0844QSWP39+R4V//vln9ssvvziWkX0SOkE3P5JJ/eYHFxllvXxP3NrJ54echw8fZm+//Tb74IMP2JIlS9j69evZgQMHmAR+u+lpzPnnn3+e3XbbbY76dO/enY0YMcKxjMyT+fLl431RtmxZz9XiB+QPf/iD5/JU0D8CJ510EkOfXHjhhax+/fqsZcuWrHjx4p4rKuCl5I4dO9jQoUPZmDFj2Pfff+/lksSWOXr0qOu9ffvtt65lZBZo2LAh/xL4qVO3jn50S0rZQ4cOsTVr1vDXlClTWNeuXVmLFi1Yv379WI0aNVxv03F+hhHx2WefZRUrVmRPP/10xhMTaGLEcZO9e/e6FZF6/r777vNd365du3xfQxeEQwCPOm+88Qa7+OKL2R133MG+++47xwqF5MSFzZo1Y+j4gwcPOlaSSSe9kFPnqFS1alWWnZ3tuwu2bt3q+xq6QB4CL7zwAqtZsyb78ssvhZXakhNfrnr16rF3331XeGGmnvjxxx9db10nOXv06OGqj10BIqcdKnqPbdy4kdWpU4d99tlntg3nISe+fE2bNmVffPGF7QWZftBtKgJ8dE1rS5Uqxdq3bx+oS4icgWCTfhEWVBs3bszWrVuXp+485MQ09tNPP81TkA78hoAXcu7fv18LXL169WJZWVmB2sKvNokZCOzbt4/l5OQw7IakynHknDdvHhs9enTqefqchgB+6dxEx/4hluTdtnSc9NywYYPTaTqnGYFVq1axgQMHHtfqceQMsup3XG0Z8I/byKmDmIC5b9++ofYpsUdNYhYCf/vb31jq40YuObH4s2LFCrO0NVAbN3L+9NNPyrUuXbo069y5c+B2sP+2ffv2wNfThWoQwB46tiwtySXniy++aB2jdwcEdu/e7XCWMR3kfOSRR1jBggUd9XA66bR873QdnVOPwCuvvMIsQxdOTkzFYJZH4o7Ali1bHAt52WpxrMDlZJUqVdjNN9/sUsr59MqVK50L0NnIENizZw9bvHgxb5+Tc+nSpXlWiiLTzvCGd+7cyZxWY61fPVW3gWmPm+G9W9tETjeEoj2/YMECrgAnJ01z/HWG0x6wX88QPy03adIkkDVQehvLli1LP0T/G4SAxUdOzm3bthmkmvmqLFy4UKhk0H1HYYW/nyhQoAB76qmn3Iq5noe9NDyKSMxFwFqx5eTMdE8Tv9300UcfCS8BiVRI7969WYUKFUJXjf1NL3u1oRuiCgIjYPGRk9OLMXfglhJ4IUZOkTO1CnKWL1+e9enTRwqSZP0lBUallVjfLU5OpS0lsHKMPKKpoQpywsFblmO006ifwK6K9S0ROQN236xZs2yvDLP/aFdhp06dWIMGDexOBTpmrQQGupgu0ooAkTMg3CJyYpsD4SlkyDnnnMOGDBkioypeB/bQ4JlPEg8EiJwB++mTTz4R7ncWLlw4YK3/vwxxgcaNG8dOO+20/x8M+QmODSTxQYDIGbCv8NCOQGd2UqhQIbvDvo5hdbZu3bq+rnErLBrt3a6j89EgQOQMgfs777xje3XYkfPSSy9lAwYMsK07zEEiZxj09F9L5AyBuSiMSxhyFitWjE2ePJnJXvVdvXr1ce5IIW6bLtWEAJEzBNDffPON7QJL0aJFA9WKxSQQE+FHZMu0adNkV0n1KUaAyBkS4Llz5+apwU/g4NSLEYZU9nOmVT9CMpLECwEiZ8j+siNniRIlfNfas2dPHsvU94UeLoCtJjyPSOKFAJEzZH/Nnz8/Tw1nn312nmNOB9q1a8cGDx7sVCTUOUyVSeKHAJEzZJ9hYz/dARthRLxKq1at2EsvvcSwr6lKxo8fr6pqqlchAkROCeB+/vnnx9XilZytW7dmII5KH9C1a9cy8t88rnti8w+RU0JXpX/5y5Qp4zoS3nPPPWzChAnSt0zSbwcxaUjiiQCRU0K/WZ7rVlUwfoddrJ3AGXvkyJE8yprKqSzaRsgUCtxm1wvxOEbklNBPmzdvzlOLnWM0gnMtWrQoVFjLPA05HJg5cyZDzCOSeCJA5JTQb3bp9EBES8444wyGgMHYzvCSl9G6Luw7/EBJ4ouAmpga8cUjkOZ2gaYvv/xyBtIiSU2bNm2kOUt7VRALQe+9957X4lTOQASInIo6pW3btgyvqOSZZ56JqmlqVxICNK2VAKQs52oJqvAqkB8UvqAk8UaAyCmh/0qWLCmhFnlVYNRUHXlenrZUkwgBIqcIGR/HK1eu7KO02qKIRj98+HC1jVDtWhAgckqAuX79+hJqkVMFiGnFPZVTI9USFQJEzpDIn3zyyax58+Yha5FzOfY0hw4dKqcyqiVyBIicIbugQ4cOUoNwhVEHCXV/+OGHMFXQtQYhQOQM0RlYpQUhTBAEG4N3C0lyECByhujLfv36sbPOOitEDXIu3bt3L+vYsaOcyqgWYxAgcgbsCpjhIXpB1IKsYX/5y18YZYqLuifkt0/kDIAp8pZgk192hLwAqvAICpSVPAhy5l9D5AzQR3D5SjVsD1CFlEvefPNN9vDDD0upiyoxDwEip88+6dy5M59G+rxMenF4uNx4443S66UKzUGAyOmjL+rVq2eE9c2mTZvYtddeyw4dOuRDeyoaNwSInB577Pzzz2evvfZa5M+ZCCjWqFEj7o7mUXUqFlMEiJweOg6G7Ui9UKRIEQ+l1RXBSNmsWTO2fv16dY1QzcYgQOR06YrTTz+dOy2LYgK5XC7t9M8//8z9QyltvDRIja+IyOnQRaeeeipDZi4TvE66dOnCEBOIJHMQIHIK+hoG7UjxV7NmTUEJfYexXTJ27Fh9DVJLRiBA5LTpBhATIybiAEUto0aNYoMGDYpaDWo/AgSInGmgg5hY/DGBmDNmzGDdunVL05D+zRQEiJwpPQ0vE0xlr7jiipSj0XxEigcECIPtLElmIkDk/L3fTznlFD6V/dOf/hT5N2HHjh2sRYsW7PDhw5HrQgpEhwCFxjyG/WmnncaJWbt27eh64veWjxw5wpB5jLxMIu+KyBXIeHIWLlyYvf/++0asyuLb0KdPH7Z48eLIvxikQPQIZDQ5ixYtyhBBoFq1atH3xDENsABEwaCN6AojlMhYchYrVozNnj2bVa1a1YiOQCDoTp06GaELKWEGAhlJzjPPPJPNmTPHCMsf62tw7733kjG7BQa9cwQyjpwYMefOncvgZWKKfPzxx+zVV181RR3SwxAEMmorBc+YphET34Pu3bsb8nUgNUxCIGPIWahQIb4qa4IRe+oXAEYPMDggIQTSEcgIciIgF4JgVa9ePf3+I/9/yJAhketACpiJQOLJmT9/fjZlyhR22WWXGdcD//nPf9iHH35onF6kkBkIJJ6cI0aMYE2aNDED7TQtJk2alHaE/iUE/o9AosnZo0cPhmh5pgosk0gIARECiSUnDMeffPJJ0X1HfvyXX35h//73vyPXgxQwF4FEkrNWrVrsX//6F8uXL5+xyG/evJkdPHjQWP1IsegRSBw5ESlv2rRpDL6ZJgvcwkgIAScEEkVObJlMnz6dgaCmy759+0xXkfSLGIFEkfPll182xvVr3rx57OjRo8LuxRYPCSHghEBiviGIUJeTk+N0r9rOYfS+5ppr2E033SQMM4JRnoQQcEIgEeREFPT+/fs73ae2c/Pnz8+N/YP0DcOGDbNtu3jx4rbH6SAhYCEQe3JWrFiR58o0YWUWNrLNmzdnCDViCbJfb9y40fo3971UqVK5n+kDIWCHQKzJiaBcWJlFDKCoZfXq1axhw4bshx9+OE4VpFGwy6EJnUuUKHFcWfqHEEhFINbkfOWVV1ilSpVS7yeSz+vWrWPZ2dkM0QzsZPLkyWz79u15Tl144YV5jtEBQsBCILbk7NmzJ59CWjcS1TumrA0aNGA7d+4UqoDREyvJ6WKiMX66jvR/dAjEkpyIxv74449Hh9rvLf/3v//lxLQbFdOVmzp1avohZkKM3DxK0QFjEIgdOZGSb+LEiZEnsQUxkeka714Ei0Xpo2udOnVYwYIFvVxOZTIQgdiREzazUa90WsT8+uuvfX1lsM2SKieeeCK76qqrUg/RZ0IgF4FYkfO+++7jK6K52kfwYcuWLax+/frMLzGhql3i2+uuuy6Cu6Am44BAbMh5wQUXsIEDB0aKKYiJqeymTZsC6bFixYo817Vs2dJo75k8CtMBbQjEgpxZWVncBSzK57OwxESPLl++PE/HwlIIz54khEA6ArEg5+DBgxlGzqjEesYMOmJaemNBaPfu3da/ue+m2ATnKkQfjEDAeHJeeeWVDNHQoxIQE8+YYYlp6b927VrrY+5769ataWqbiwZ9sBAwmpyYzo4ePTqyL+7WrVulEhOgI+JeumBqCwsjEkIgFQGjyQmbVBi2RyEwLJA5Ylr3YEdOnGvfvr1VhN4JAY6AseTEM+YDDzwQSTchhAhM8kRECqOUnYcK6sOWSpQLXmHuia5Vg4CR5IT715gxYyKxAtq1axcnJozZVYiInPBSadSokYomqc6YImAkOW+99VZ2ySWXaIcUcX0QwcBu0UaWMiJyon5atZWFcjLqMY6cp556Khs0aJB2dL///nvWuHFjtnLlSqVt41k21Rk7tbGmTZtGMltI1YE+m4OAceTs1asXQ3JbnXL48GGGINSfffaZ8mZ//fVXhpi1doJMaLRqa4dMZh4zipyIDKA7VyUi5LVp04alG6Wr/Do4LTTRc6dK5ONVt1Hk7NOnj/Zg0LfffjtPD6iz27788kthc1glJiEEgIAx5MSoCaLoFATfgguablm1apWwySpVqjA8d5MQAsaQE+5gOmO5jho1KrJER07kxDYSxRYiYgIBI8iJKHqdOnXS1iMI+tytWzdt7aU3BHJiYUgkFSpUEJ2i4xmEgBHkhOkaVip1yNKlS1m7du0cyaFaD2zbOD13ilarkcIBP2Qnn3wyO+GEE1SrSfVHjECBiNvnzXfs2FGLGjDLw5bJTz/9pKU9p0YWLFjAqlatalsEmbjLly/PypYty8qUKcMTM+E5NH3aj6h+3333HYOBPrxn8IJDN+IVLVu2jB06dMi2fjoYDwQiJ2flypW1WAOBkNdff71t/Ngouurtt99md955p23TiLaAl5tg9CxSpAh/pRMd02aQdNasWfy1cOFChoS9JPFBIHJy6ho1QYRPPvkk8p7BSAhLJIzgKgULSzVr1uQvbFHBZvjVV1/lqSswqpKYj0Ckz5z45UcmLtXy3HPP2QZ1Vt2uVT+mox06dOABvmCAAH3+/Oc/W6e1vOM5FotgSHW/ePFi1qpVq8j8ZLXccAIaiZScdevWVW6qh6nd/fffH0lXYeFmwIABbNu2bdzLBiOZCXLxxRezSZMmsa+++ordeOONJqhEOtggECk5kZFLpWBV9IYbbnBMYquifUwpu3TpwtavX89TExYuXFhFM6HrxKIT0kTAphg/lCRmIZBocuI508mOVUVX4Jlyzpw5bMSIESwuOTgvuugirjN8aE3I2KaiX+JYZ2TkRKQDbBWoEowIWADRKW3btuXhLxGULI6C52IYSFx99dVxVD9xOkdGTmSjViWIMavbAujRRx/ldrpxt4s9++yzuSMAMoVjek4SHQKRkRPBs1QJprPpSWxVtQWrHRjPw4g+KYJ7wkLWW2+9xa2RknJfcbuPSMiJzr/00kuVYIUMZO+8846SutMrxciCBL6YziZR4FsKSyaROWES79mke4qEnNWrV+c2orKB2LNnj9bp7NixY/lqsOz7MKm+GjVqsEWLFrFy5cqZpFZG6BIJOVXlBunRo4cw9bvs3sQzmQ4DCtl6B6kPxMQK9DnnnBPkcromIAKRkFNFRuclS5aw8ePHB4TB32WIMYuA15kk1hYRnOJJ9CAQCTmrVasm/e50BaDG9g+ms5m4kvnHP/6RzZgxgyHpL4l6BLSTE/a05557rtQ7g4cHFi5Ui7UAFPftkjA44Rl0woQJGfnjFAa3INdqJ+d5550n1VEYblAIp6lDevbsya644godTRndBswuM21aH0WHaCcnAljJlHHjxrHVq1fLrNK2LmzOYxGI5DcEsK9br149gkMhAtrJCedqWYJRE4l1dcjQoUNpQz4FaMv4omjRoilH6aNMBLSTE6t+smTq1Klsw4YNsqoT1nPZZZfxwNPCAhl6Aiu3w4cPz9C7V3/b2skpcyl+2LBh6hE61gJM2UjsEYB1FGIekchHQDs5S5YsKeUu4NGPl2pBtjNkHiMRIzBy5Mg8wcfEpemMVwS0k1PWyIlQHzqkd+/eOpqJdRuwHMJKNolcBLQG+MI+oQwHZEQ4mDJlilwkbGrDCi3S8pkgCLeCCHrwtsFCGEKgwCAdL5ADW1RYpIlKHnzwQR6KZefOnVGpkLh2tZITga5kBEN+/fXXGdL2qRbkbpGhrww9582bx5ysoE466SSGiAbYh0UI0Nq1a8to1nMdCHb90EMPaXU88KxcTAtq/amVZfalK/mQrrCd+O4gbKfTPqrbKjcCSGNkxZYPCAozQ5BF50gGvGTMjGLKJelqx46ce/fuZRhFVAu2T1R7YWCKiq0ITEnhDIA9W0RwtxM3cqZfgyjwTzzxBHf16tq1K/vmm2/Si0j/Hz++9OwpD9bYkROG1zoil+fk5MhDOa0mkPKxxx7jqRbg5pYahEyUQ8UvOa0mEen+H//4Bzv//PP5u1MCJeuaMO9ISIUpNkl4BLSSMz3XRxD1QU4dguc22QJiwKMFIyXIuX///jxNiEwRzzrrrFDeIFhEwwgKkzvkjFEliN6XKX6uqjC06tVKTiTeCSP4csPpV7XAayboSCXS7euvv+ZR7TCyOJFDNHKiXhmpAT/++GNWq1Ytpakp7rrrLhEMdNwHAlrJGTbr1fLlyxmeOVVLdna21CYQ1wgJcefPn+9arxM5K1as6Hq9lwJ4/sQIqirWEu5Vhc+ul3tLUhmt5Ay7/aHDZxOdKysyIGYK2P/DNO/gwYOevjc6yAlFjhw5whDRYebMmZ708lsIOVBJwiGglZxhR85PP/003N16vFrGHiEWYrCo9NRTT3ls9bdiyLEpwgmLOjLl6NGjPKERprqyJakRCWXj5FSfVnKGHTmR00O1IK9J2Ej0GCURNBtxX/0KnqvXrFlje5mKqSIIisWvzZs327YZ9GDp0qUZoiySBEdAKzmxBXLgwIFA2mI0QWIg1QIrmzCCqWzr1q3Z7NmzA1ezcuVK22vhC6vCRA8hRTHFxVRXpiAPKUlwBLSSE2pu3749kLZIV6dDwk4dEW0e2aTDCBa+7ARbUbIWhdLr/+KLLxhSSsgUImc4NGNDTtFUL9zt570aEeaCClynXnzxxaCX514nIicKqJjaWg0/+eSTPB2g9X/Yd0T1l7G3HVaPuF4fG3KmWtGoBBs5K4PIihUrpCXpRV0iUUlOPO/efffdDO8ypECBAgyJekmCIRAbcsJWVIcEsafFogoyRMt6ZoOx+u7du21vF3uIKmXp0qU89KWsNi6//HJZVWVcPdrJGXRRB6nbdcjpp5/uuxkkynXan/Rd4bELRKOnypHT0rNv377Sfmho5LRQ9f+unZwi21E31XW5PvmNJrdr1y4lMYZEz50wKyxUqJAbXKHOY5YiK/Fw1apVQ+mSyRfHhpxBt2D8di72Of3IM888oyQXqIic0A1xjVQL/EJlCOyBTXFYl3E/OuvQTk48SwWxj4VXhQ7x80XCD4aqWEZO5JRhweSGJabpc+fOdSvmej4rK4sFXWRzrTzhBbSTE3gGeT7TlanaT38jca6qHw0YImChyU50kBPtvvzyy3bN+z4GayES/whEQs4gZniylvf9QyS+QmW4FKz8in7EdJETQbtl/CiWKlVKDCKdESIQCTkR68ZU8Wr/u3HjRqkb9nZ4YFvDTuB4reMLD5NJZHALK4hiSOIfgdiQU1c+zH379nlC8f333/dULkwhETlRp67RUwY5ixQpEgaGjL02EnLC2ReuUX4EcVp1iFdyenGcDquvCeR89913Q1sMIXQJiX8EIiEn1PTrQ6h6b8+Czut+6qJFi6xLlL0vW7ZMGMwMdqs6BPu4omdfr+1ncrJhrxjZlYuMnH5DZOgiJ54l3QSO1H5Hfrc67c7j+Xft2rV2p/hep59tH9tKPB5ETN0wAhtbEv8IREZOv9MlWQmQ3CDyQk4Y4etaPRZNbRF+Upczc1hy6sLKrW/jdj4ycsLB10+WMF17ZV5sf4P6pAb5cojIibp0GZUjT0sY0RFnOIx+pl4bGTkBiJ/gUrJDVYo6xIkM1jWiGD/WeZnvTvog7YIOWbduXahmfvzxx1DXZ+rFkZJz+vTpnnEPG6HAa0P4IrpZ/egkJ0Yt0bRQFzmRIgILQ0EliLlm0LaSdF2k5IRblNeVwAsuuEAL7iCC02gFJWAvqkvwQyFyNMdUX9ez+KZNmwLfstftqcANJPTCSMkJTL2awMEixq/HSNA+++CDDxwv9etW5liZh5NOPxa6njvDjJxYXyDxj0Dk5JwwYYJw2pZ+O8j8pUPcAnSZRE5dU9sw5EQqChL/CEROzi1btrCPPvrIk+ZIk6dDMFKJwoSg/XLlyjFd5oRoz2nk1PWDFea5McyUGPefqRI5OQH8888/7wn/unXreioXthCeOydPniysBqaEIKgucSIn4uzq2OQPGh8JWNLIGeybYgQ5p0yZ4im5K56vdFkKwVfTSVQH2kptG6OWKCI7Qk+GDYSd2pboc9AMcTDqoK0UEarOx40gJzoeCV7dBOZqjRo1cism5Tx8Tp0CWV911VVS2vFaiZMPrI6pbVBDAgSrJgmGgBHkhOogJ2xW3aRly5ZuRaSdf/rpp4V1tWjRQnhOxYmoyRnUeB3G+yTBEDCGnFiAwcqtmyBB0CmnnOJWTMp5hOkQrVLimfPqq6+W0o6XSpwyrOnYTgnq9rV48WIvt0dlbBAwhpzQbeDAgcK4OZbuMPhu1aqV9a/Sd4zkTqNn//79lbafWvmSJUuEW04wbSxevHhqcemfg+wxYxHJr2ugdMVjXKFR5MTigdtCDLBG6nZdgtCXosUYbO107NhRiyqI5SNyH4MCqv07g0TCh2OD17AvWkCMWSNGkRPYPf74466jJ6ZxOlYooQ9Gz969e+OjrSA5rq7AyU7PnTVr1rTVT9bBII4HOkK5yLo/E+sxjpzYE3vppZdcserWrZtrGVkFsOcp+qJhoQRxdnS4tEVFzoIFCzIEFfMrb7zxht9LqHwKAsaRE7o9/PDDDJ4QTtKuXTuthgC33nor+/bbb21Vgt0vnq2qVKlie17WQadFIZUjJ5wO/FpE4RFFlO9FFh5Jr8dIciKOz1//+ldH7GEV069fP8cyMk/u2LGDde7cWVglwj8i5GdOTo6wTNgT2DMUWerAO+XMM88M24Tt9UEeIV577TXbuuigdwSMJCfU//vf/+64AIIyN998M6tUqRI+apFp06Y5Zn/GFHfixIls7NixLOjWg9ONgJhOo5Gq0TNIpjAZSYSdsMiEc8aSE1ZD3bt3d+wDjJ5YkNEpGNHd3Nzwo7Fq1Sol1kxRPHc2aNDAF8SY4oeNnuCrwYQWNpacwBuLMG6p6Bo2bMgaN26stXtuu+02BntgJ8E0d8aMGTzfSJCcn6K6dZMTq7TnnnuuSB3b414dGWwvpoO5CBhNTmjZtWtX5hZQa+TIkUxX0GnohFG9ffv2fPqK/50EGa+RlKhJkyZOxTyfcyJnjRo1PNfjtaBfvbEQhKk9SXgEjCfn/v37HRdiAAG2MYYMGRIeDR81wBUKxhAPPfQQJ6vTpdiGePPNN9ngwYN9r3qm14uwLgcPHkw/zP+HSeGJJ55oey7oQayK+xHcY1AjeT/tZEJZ48mJTkAAare9zzvuuEPJM57bl+CJJ57gNrZIMeEmDzzwAJ/m+t2WSK3XKcYR6q1cuXJq8VCf8aPnx8F9w4YN0tIGhlI8IRfHgpzAGkYHTuZr+GLCUL1EiRLau+bDDz9k2AscPXq066iB6fAjjzwSSkenqa3MvVanrSO7G7jrrrtcZxF219ExewRiQ05M5WDw7pQv8owzzuARDHREBkiHExHm8OWEjatbkqNevXqxihUrplfh+X8d5ISDQZcuXTzrhIW72bNney5PBd0RiA05cStr1qxxNXpHwCuMYFEJ4sxmZ2fzFH1Y0bWLIIAfj9tvvz2wik7kDEP6VIUwanpdZd62bRu79957Uy+nzxIQiBU5cb+wc3322Wcdb/2WW25hffr0cSyj+iTi/mAxBaZ9d955J0O4zdQ08mEiKWBFVBRwSwY54R7m1foK99S2bVuhaaNqnJNcf+zIic64//77+SKRU8fAWACLRFELnMjHjBnDF6sw7YaDdt++fZmTnawXnUV5ZvzuSdq1hWdir+E/cS8mZyq3u7+4HIslObFU37p1a9dESCNGjOAmfqZ0Bp6X582bx7d9wnrViKa22O8N43iNeER4dvYieHzQbaHlRa+klIklOQE+nHivvfZaYaoClMEKLmw8/Sxs4Lo4iIic0L1cwLCdsA0eP34885L386233mJ33313HKCKrY6xJScQR5h/RONz2mMEQTGCRv0MKvsb4kTOIL6l+fPn58QsW7asq6rvvfcea9OmjTBsimsFVMATArEmJ+4QSX7q1avHsGLoJHgGhbdIFNssTnoFPYcfJJFZYxBywh4WMxE3gUEIIg+KXNfcrqfz3hGIPTlxq0h4C4IitYOTwFtk7ty52jJzOeki45xo9PRDToyYCEvaoUMHV5WwUn7dddcRMV2RklMgEeQEFNYIKgrGZcGF+EOIpaorOLXVrop3ETnhEeNF8IyJZ0cve66IQgjrptTtIC9tUJngCCSGnIAACXNghOCWJh1bGvhSPvfcc1q9WYJ3k/2VInJ6iYhwzTXXcMdtuNw5CciIhR/YBZPoRSBR5AR0eBZDwiP4UjoJFoqwDwp3rriOoiJyOm2lwPYWwbvx7Og2/cUeLUhM/plO3yR15xJHTkCFtPB4Nho+fLgrcnAmBpHh0lWhQgXX8iYVgDudXdbr9JETEfKxuoowK4hDhM9uAiOJWrVqMRj1k0SDQCLJCSjhWtWjRw+GqHlOxvIW7HAqRnweOG7D5C4uYjd6YtqOWQF+nLAAhpQSGC2bNm3qyZ8U0/0rr7ySbd26NS4wJFLPxJLT6i3E+0GAKqfAWFbZrKws7tiN+DcgqQw7VatuVe92ZoBYgQXBYOkDkiHurBfBSAzLKxix2xnse6mDyshDIPHkBFQgW+3atT17q+DLDK8MRB2YOXMm3//zYjUjr1u81ySysfVew28lMQIjeh8FgvaLnLryGUFOwIdNc4wkWPzBqq4XwaIRVjOnT5/O91CxnQB/TRw3ReD9EjYsCOxj69SpQxmoTenU3/XIGHJauMN1C7lNhg0b5mvqhkWWe+65h0d2hzXSP//5Tz4FDJKmwNIl6Dum24gAOG7cOO7jimlsEIGDOPKdPvjgg76wCNIWXeMfgXzHFk5+RedkondB9erV+aKJnzg5dhAjdg7yUGIlFC9Mh7Glg0WpMIIfBKwgn3feeaxatWp82okIezICVi9fvpyvaCM3DYlZCOB7iZSPBcxSS682IBKcnmFTOmjQoMDZwuBDiRfCYFqC7GSwVsIL+4XIs4IXvGmwsY8Xpsdw8UJIEGx3gIwYifFCyj1Y8KgQPFfClJHS86lAV16dGU1OC0Ys+iBT2E033cQGDBjAygV0ubLqwzsWlTDqmbZ3CoMCxAIOO6qn3it9VoNAsIcVNbpEWiu+rEjci+e5G264gU9TI1VIQeMwcIcpHhFTAbgKqiRypoGKL+7UqVP56iWM5OGJgSlq3GXWrFl8QSvu95FJ+hM5HXobe3/wxEAsXOx7zjsWYiTstoVDc8pOIdcpPE9oxFQGsZKKiZweYD1w4AAPd4LgXIgUALNAjESitAgeqtRaBAHGRI7ZWhWhxnwhQAtCvuBi/EsOm1W8EFUBLmrw3MCqL5bAseqqS2Azi9Ed2zhYFRalrIAHCkn8ECByhugzbIcsWLCAv1ANtkbKly/PsBcJoiJFA/7H6m+hQoUCtYTtDhigYz8SZoh4Ifcn9imRbTtVsNqM0T1d4FxOEj8EiJwS+wzPdHDhwuv1118/rmbsZcLPslixYpyo2MNERjBY9+AFooOIeMFyB3ui2B+FMbpXQTbwdHJiSi4KQO21XioXDQJETk24w8cUo59KixxMX2GtlBpYOn101XS71IwEBGhBSAKIJlWR/tyZhG0gk/DVqQuRUyfaGtpCGsTU7R4KYakBdEVNEDkVARtVtfCYmTNnTm7zQT1WciugD5EhQOSMDHp1DU+cODG38vR4Qrkn6IPxCBA5je8i/wrCOdwKM0Lk9I+fKVdwcprk2W8KMHHWA1snVnZtGEoQQePZm5yc8CkkSRYCCINpCSI/kMQHAYuPnJwIpUiSLARg+2sJoiiQxAcBGKpAODkrVaoUH81JU08IwBjBMniAKSFJfBBAWBoIJyfCRtJzZ3w6z6um1ugZNkaS1/aonBwE4EcM4eQsXLgwD/kop2qqxRQE4H8KQaiUKKIE8sbpjy8EsIBXv359fg0nJz4h4BNJshBYuHBh7g3BpY3EfASaNWvGMFhCjiNn0aJFzdeeNPSMAJIJW/lO3FL9ea6UCipFAI78luSSE8u3/fv3t47Te0IQsEbPxo0bJ+SOknsbCNFqPW/iLnPJiX+QrgBp30iSgwDSNUDgS0p9a26/wr83PWXlceREsp5JkyaxIkWKmHsXpJkvBBA425LmzZtbH+ndMAReeOEFHp8qVa3jyIkTCKmBIMvw3CeJPwKp5Lz++uvjf0MJvAPk7WnVqlWeO8tDTpRAJi0kXbUsFfJcRQdigwAiIezZs4frW7lyZeMi0McGSAWKwp1v1KhRPB+qXfW25ERBJJz9/PPPWXZ2tt11dCxGCCAomCV2v9DWOXrXhwBCrMI5oVOnTsJGheTEFSVLluTxWZGy3DIpEtZEJ4xFIJWcOTk5xuqZCYphPefRRx/lERRTV2bt7t2RnNYFbdq04ZUhgNQtt9zCSWudo3fzEVi/fn2ukhdddBFfV8g9QB+UI4BYxk2aNOGByWHv3K9fPx550a1hnp/TrZDd+Z07dzJ0OsI4Uio5O4TMOVa6dGl2ySWX5Cq0cuVK9tVXX+X+Tx/kI5CVlcXzqGKBtUyZMjz8qd9WApPTb0NUnhAgBPwh8D8I22yw4XkRvwAAAABJRU5ErkJggg==');
    }

    /**
     * Gets the public 'sonata.block.context_manager.default' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockContextManager
     */
    protected function getSonata_Block_ContextManager_DefaultService()
    {
        return $this->services['sonata.block.context_manager.default'] = new \Sonata\BlockBundle\Block\BlockContextManager(${($_ = isset($this->services['sonata.block.loader.chain']) ? $this->services['sonata.block.loader.chain'] : $this->getSonata_Block_Loader_ChainService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.block.manager']) ? $this->services['sonata.block.manager'] : $this->getSonata_Block_ManagerService()) && false ?: '_'}, $this->parameters['sonata_block.cache_blocks'], ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'sonata.block.manager' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockServiceManager
     */
    protected function getSonata_Block_ManagerService()
    {
        $this->services['sonata.block.manager'] = $instance = new \Sonata\BlockBundle\Block\BlockServiceManager($this, true, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});

        $instance->add('sonata.block.dash', 'sonata.block.dash', [0 => 'cms']);
        $instance->add('sonata.block.service.container', 'sonata.block.service.container', []);
        $instance->add('sonata.block.service.empty', 'sonata.block.service.empty', []);
        $instance->add('sonata.block.service.text', 'sonata.block.service.text', [0 => 'cms']);
        $instance->add('sonata.block.service.rss', 'sonata.block.service.rss', []);
        $instance->add('sonata.block.service.menu', 'sonata.block.service.menu', []);
        $instance->add('sonata.block.service.template', 'sonata.block.service.template', []);
        $instance->add('sonata.admin.block.admin_list', 'sonata.admin.block.admin_list', [0 => 'admin']);
        $instance->add('sonata.admin.block.search_result', 'sonata.admin.block.search_result', []);
        $instance->add('sonata.admin.block.stats', 'sonata.admin.block.stats', []);

        return $instance;
    }

    /**
     * Gets the public 'sonata.block.renderer.default' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockRenderer
     */
    protected function getSonata_Block_Renderer_DefaultService()
    {
        return $this->services['sonata.block.renderer.default'] = new \Sonata\BlockBundle\Block\BlockRenderer(${($_ = isset($this->services['sonata.block.manager']) ? $this->services['sonata.block.manager'] : $this->getSonata_Block_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.block.exception.strategy.manager']) ? $this->services['sonata.block.exception.strategy.manager'] : $this->getSonata_Block_Exception_Strategy_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'sonata.core.flashmessage.twig.extension' shared service.
     *
     * @return \Sonata\Twig\Extension\FlashMessageExtension
     */
    protected function getSonata_Core_Flashmessage_Twig_ExtensionService()
    {
        return $this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\Twig\Extension\FlashMessageExtension();
    }

    /**
     * Gets the public 'sonata.user.admin.group' service.
     *
     * @return \Sonata\UserBundle\Admin\Entity\GroupAdmin
     */
    protected function getSonata_User_Admin_GroupService()
    {
        $instance = new \Sonata\UserBundle\Admin\Entity\GroupAdmin('sonata.user.admin.group', 'Application\\Sonata\\UserBundle\\Entity\\Group', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setTranslationDomain('SonataUserBundle');
        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.underscore']) ? $this->services['sonata.admin.label.strategy.underscore'] : ($this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('groups');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['sonata.user.admin.group.template_registry']) ? $this->services['sonata.user.admin.group.template_registry'] : $this->load('getSonata_User_Admin_Group_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'sonata.user.admin.user' service.
     *
     * @return \Sonata\UserBundle\Admin\Entity\UserAdmin
     */
    protected function getSonata_User_Admin_UserService()
    {
        $instance = new \Sonata\UserBundle\Admin\Entity\UserAdmin('sonata.user.admin.user', 'Application\\Sonata\\UserBundle\\Entity\\User', 'Sonata\\AdminBundle\\Controller\\CRUDController');

        $instance->setUserManager(${($_ = isset($this->services['fos_user.user_manager']) ? $this->services['fos_user.user_manager'] : $this->load('getFosUser_UserManagerService.php')) && false ?: '_'});
        $instance->setTranslationDomain('SonataUserBundle');
        $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
        $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
        $instance->setLabelTranslatorStrategy(${($_ = isset($this->services['sonata.admin.label.strategy.underscore']) ? $this->services['sonata.admin.label.strategy.underscore'] : ($this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy())) && false ?: '_'});
        $instance->setManagerType('orm');
        $instance->setModelManager(${($_ = isset($this->services['sonata.admin.manager.orm']) ? $this->services['sonata.admin.manager.orm'] : $this->load('getSonata_Admin_Manager_OrmService.php')) && false ?: '_'});
        $instance->setFormContractor(${($_ = isset($this->services['sonata.admin.builder.orm_form']) ? $this->services['sonata.admin.builder.orm_form'] : $this->load('getSonata_Admin_Builder_OrmFormService.php')) && false ?: '_'});
        $instance->setShowBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_show']) ? $this->services['sonata.admin.builder.orm_show'] : $this->load('getSonata_Admin_Builder_OrmShowService.php')) && false ?: '_'});
        $instance->setListBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_list']) ? $this->services['sonata.admin.builder.orm_list'] : $this->load('getSonata_Admin_Builder_OrmListService.php')) && false ?: '_'});
        $instance->setDatagridBuilder(${($_ = isset($this->services['sonata.admin.builder.orm_datagrid']) ? $this->services['sonata.admin.builder.orm_datagrid'] : $this->load('getSonata_Admin_Builder_OrmDatagridService.php')) && false ?: '_'});
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, false);
        $instance->setConfigurationPool(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});
        $instance->setRouteGenerator(${($_ = isset($this->services['sonata.admin.route.default_generator']) ? $this->services['sonata.admin.route.default_generator'] : $this->load('getSonata_Admin_Route_DefaultGeneratorService.php')) && false ?: '_'});
        $instance->setValidator(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
        $instance->setSecurityHandler(${($_ = isset($this->services['sonata.admin.security.handler']) ? $this->services['sonata.admin.security.handler'] : $this->load('getSonata_Admin_Security_HandlerService.php')) && false ?: '_'});
        $instance->setMenuFactory(${($_ = isset($this->services['knp_menu.factory']) ? $this->services['knp_menu.factory'] : $this->load('getKnpMenu_FactoryService.php')) && false ?: '_'});
        $instance->setRouteBuilder(${($_ = isset($this->services['sonata.admin.route.path_info']) ? $this->services['sonata.admin.route.path_info'] : $this->load('getSonata_Admin_Route_PathInfoService.php')) && false ?: '_'});
        $instance->setPagerType('default');
        $instance->setLabel('users');
        $instance->showMosaicButton(true);
        $instance->setTemplateRegistry(${($_ = isset($this->services['sonata.user.admin.user.template_registry']) ? $this->services['sonata.user.admin.user.template_registry'] : $this->load('getSonata_User_Admin_User_TemplateRegistryService.php')) && false ?: '_'});
        $instance->setSecurityInformation($this->parameters['sonata.admin.configuration.security.information']);
        $instance->initialize();
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.event.extension']) ? $this->services['sonata.admin.event.extension'] : $this->load('getSonata_Admin_Event_ExtensionService.php')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(new \Symfony\Component\Translation\LoggingTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.translation']) ? $this->services['monolog.logger.translation'] : $this->getMonolog_Logger_TranslationService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->getTwig_LoaderService()) && false ?: '_'}, ['form_themes' => [0 => 'form_div_layout.html.twig', 1 => '@SonataUser/Form/form_admin_fields.html.twig', 2 => 'SonataCoreBundle:Form:datepicker.html.twig'], 'paths' => [($this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu/Resources/views') => NULL], 'debug' => true, 'strict_variables' => true, 'cache' => false, 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape' => 'name', 'charset' => 'UTF-8', 'default_path' => ($this->targetDirs[3].'/templates'), 'date' => ['format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL], 'number_format' => ['decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',']]);

        $a = ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'};
        $b = ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'};
        $c = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'};
        $d = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);
        $d->setDisplayOptions(['fileLinkFormat' => $b]);
        $e = new \Knp\Menu\Util\MenuManipulator();
        $f = ${($_ = isset($this->services['knp_menu.matcher']) ? $this->services['knp_menu.matcher'] : $this->getKnpMenu_MatcherService()) && false ?: '_'};
        $g = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $g->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => $b]);
        $h = new \Symfony\Bridge\Twig\AppVariable();
        $h->setEnvironment('dev');
        $h->setDebug(true);
        if ($this->has('security.token_storage')) {
            $h->setTokenStorage(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'});
        }
        if ($this->has('request_stack')) {
            $h->setRequestStack($c);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : ($this->services['twig.profile'] = new \Twig\Profiler\Profile())) && false ?: '_'}, $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->getAssets_PackagesService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($b, ($this->targetDirs[3].'\\app'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($c, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->getVarDumper_ClonerService()) && false ?: '_'}, $d));
        $instance->addExtension(new \AppBundle\Twig\Extension\FileExtension());
        $instance->addExtension(${($_ = isset($this->services['twig.extension.sortbyfield']) ? $this->services['twig.extension.sortbyfield'] : ($this->services['twig.extension.sortbyfield'] = new \Snilius\Twig\SortByFieldExtension())) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['app.twig.extension.date']) ? $this->services['app.twig.extension.date'] : $this->getApp_Twig_Extension_DateService()) && false ?: '_'});
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(${($_ = isset($this->services['sonata.core.flashmessage.twig.extension']) ? $this->services['sonata.core.flashmessage.twig.extension'] : ($this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\Twig\Extension\FlashMessageExtension())) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.core.twig.extension.wrapping']) ? $this->services['sonata.core.twig.extension.wrapping'] : ($this->services['sonata.core.twig.extension.wrapping'] = new \Sonata\Twig\Extension\FormTypeExtension('standard'))) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.core.twig.extension.text']) ? $this->services['sonata.core.twig.extension.text'] : ($this->services['sonata.core.twig.extension.text'] = new \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension())) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.core.twig.status_extension']) ? $this->services['sonata.core.twig.status_extension'] : ($this->services['sonata.core.twig.status_extension'] = new \Sonata\CoreBundle\Twig\Extension\StatusExtension())) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.core.twig.deprecated_template_extension']) ? $this->services['sonata.core.twig.deprecated_template_extension'] : ($this->services['sonata.core.twig.deprecated_template_extension'] = new \Sonata\Twig\Extension\DeprecatedTemplateExtension())) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sonata.core.twig.template_extension']) ? $this->services['sonata.core.twig.template_extension'] : $this->getSonata_Core_Twig_TemplateExtensionService()) && false ?: '_'});
        $instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension(${($_ = isset($this->services['sonata.block.templating.helper']) ? $this->services['sonata.block.templating.helper'] : $this->getSonata_Block_Templating_HelperService()) && false ?: '_'}));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper(${($_ = isset($this->services['knp_menu.renderer_provider']) ? $this->services['knp_menu.renderer_provider'] : $this->getKnpMenu_RendererProviderService()) && false ?: '_'}, ${($_ = isset($this->services['knp_menu.menu_provider']) ? $this->services['knp_menu.menu_provider'] : $this->getKnpMenu_MenuProviderService()) && false ?: '_'}, $e, $f), $f, $e));
        $instance->addExtension(${($_ = isset($this->services['sonata.admin.twig.extension']) ? $this->services['sonata.admin.twig.extension'] : $this->getSonata_Admin_Twig_ExtensionService()) && false ?: '_'});
        $instance->addExtension(new \Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension(${($_ = isset($this->services['sonata.admin.global_template_registry']) ? $this->services['sonata.admin.global_template_registry'] : $this->getSonata_Admin_GlobalTemplateRegistryService()) && false ?: '_'}, $this));
        $instance->addExtension(new \Sonata\UserBundle\Twig\RolesMatrixExtension(${($_ = isset($this->services['sonata.user.matrix_roles_builder']) ? $this->services['sonata.user.matrix_roles_builder'] : $this->getSonata_User_MatrixRolesBuilderService()) && false ?: '_'}));
        $instance->addExtension(${($_ = isset($this->services['ivory_ck_editor.twig_extension']) ? $this->services['ivory_ck_editor.twig_extension'] : $this->getIvoryCkEditor_TwigExtensionService()) && false ?: '_'});
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension(${($_ = isset($this->services['assetic.asset_factory']) ? $this->services['assetic.asset_factory'] : $this->getAssetic_AssetFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : ($this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'}, true, [], $this->parameters['assetic.bundles'], new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension());
        $instance->addExtension(new \HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension(${($_ = isset($this->services['hwi_oauth.templating.helper.oauth']) ? $this->services['hwi_oauth.templating.helper.oauth'] : $this->getHwiOauth_Templating_Helper_OauthService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($g));
        $instance->addGlobal('app', $h);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(['Sonata\\Twig\\Extension\\FlashMessageRuntime' => function () {
            return ${($_ = isset($this->services['sonata.core.flashmessage.twig.runtime']) ? $this->services['sonata.core.flashmessage.twig.runtime'] : $this->load('getSonata_Core_Flashmessage_Twig_RuntimeService.php')) && false ?: '_'};
        }, 'Sonata\\Twig\\Extension\\StatusRuntime' => function () {
            return ${($_ = isset($this->services['sonata.core.twig.status_runtime']) ? $this->services['sonata.core.twig.status_runtime'] : $this->load('getSonata_Core_Twig_StatusRuntimeService.php')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->load('getTwig_Runtime_HttpkernelService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\FormRenderer' => function () {
            return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->load('getTwig_Form_RendererService.php')) && false ?: '_'};
        }])));
        $instance->addGlobal('local_supplier_registration', 236.25);
        $instance->addGlobal('international_supplier_registration', 945.0);
        $instance->addGlobal('sonata_block', ${($_ = isset($this->services['sonata.block.twig.global']) ? $this->services['sonata.block.twig.global'] : ($this->services['sonata.block.twig.global'] = new \Sonata\BlockBundle\Twig\GlobalVariables(['block_base' => '@SonataBlock/Block/block_base.html.twig', 'block_container' => '@SonataBlock/Block/block_container.html.twig']))) && false ?: '_'});
        $instance->addGlobal('sonata_admin', ${($_ = isset($this->services['sonata.admin.twig.global']) ? $this->services['sonata.admin.twig.global'] : $this->getSonata_Admin_Twig_GlobalService()) && false ?: '_'});
        $instance->addGlobal('sonata_user', new \Sonata\UserBundle\Twig\GlobalVariables($this));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'twig.extension.sortbyfield' shared autowired service.
     *
     * @return \Snilius\Twig\SortByFieldExtension
     */
    protected function getTwig_Extension_SortbyfieldService()
    {
        return $this->services['twig.extension.sortbyfield'] = new \Snilius\Twig\SortByFieldExtension();
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->getValidator_BuilderService()) && false ?: '_'}->getValidator());
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the private 'Http\HttplugBundle\Collector\PluginClientFactoryListener' shared service.
     *
     * @return \Http\HttplugBundle\Collector\PluginClientFactoryListener
     */
    protected function getPluginClientFactoryListenerService()
    {
        return $this->services['Http\\HttplugBundle\\Collector\\PluginClientFactoryListener'] = new \Http\HttplugBundle\Collector\PluginClientFactoryListener(new \Http\HttplugBundle\Collector\PluginClientFactory(${($_ = isset($this->services['httplug.collector.collector']) ? $this->services['httplug.collector.collector'] : ($this->services['httplug.collector.collector'] = new \Http\HttplugBundle\Collector\Collector())) && false ?: '_'}, ${($_ = isset($this->services['httplug.collector.formatter']) ? $this->services['httplug.collector.formatter'] : $this->getHttplug_Collector_FormatterService()) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'}));
    }

    /**
     * Gets the private 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, ${($_ = isset($this->services['annotations.cache']) ? $this->services['annotations.cache'] : $this->load('getAnnotations_CacheService.php')) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'assetic.asset_factory' shared service.
     *
     * @return \Symfony\Bundle\AsseticBundle\Factory\AssetFactory
     */
    protected function getAssetic_AssetFactoryService()
    {
        $this->services['assetic.asset_factory'] = $instance = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, $this, $this->getParameterBag(), ($this->targetDirs[3].'\\app/../web'), true);

        $instance->addWorker(new \Symfony\Bundle\AsseticBundle\Factory\Worker\UseControllerWorker());

        return $instance;
    }

    /**
     * Gets the private 'assetic.request_listener' shared service.
     *
     * @return \Symfony\Bundle\AsseticBundle\EventListener\RequestListener
     */
    protected function getAssetic_RequestListenerService()
    {
        return $this->services['assetic.request_listener'] = new \Symfony\Bundle\AsseticBundle\EventListener\RequestListener();
    }

    /**
     * Gets the private 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, '', false);
    }

    /**
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), ${($_ = isset($this->services['assets.context']) ? $this->services['assets.context'] : $this->getAssets_ContextService()) && false ?: '_'}), []);
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->services['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('9x++FM-VBB', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->services['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('BpXDbr6D27', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->services['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('BUCNfo8Wdm', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['dependency_injection.config.container_parameters_resource_checker']) ? $this->services['dependency_injection.config.container_parameters_resource_checker'] : ($this->services['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this))) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['config.resource.self_checking_resource_checker']) ? $this->services['config.resource.self_checking_resource_checker'] : ($this->services['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker())) && false ?: '_'};
        }, 2));
    }

    /**
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(${($_ = isset($this->services['data_collector.form.extractor']) ? $this->services['data_collector.form.extractor'] : ($this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor())) && false ?: '_'});
    }

    /**
     * Gets the private 'data_collector.form.extractor' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the private 'data_collector.request' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the private 'data_collector.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the private 'data_collector.translation' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollector\TranslationDataCollector
     */
    protected function getDataCollector_TranslationService()
    {
        return $this->services['data_collector.translation'] = new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->services['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : ($this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver())) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : ($this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver())) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : ($this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver())) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.user_value_resolver']) ? $this->services['security.user_value_resolver'] : $this->load('getSecurity_UserValueResolverService.php')) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->load('getArgumentResolver_ServiceService.php')) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : ($this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver())) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : ($this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver())) && false ?: '_'};
        }, 7)), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : ($this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->getDebug_ArgumentResolverService()) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['monolog.logger.php']) ? $this->services['monolog.logger.php'] : $this->getMonolog_Logger_PhpService()) && false ?: '_'}, -1, -1, true, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'debug.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.event']) ? $this->services['monolog.logger.event'] : $this->getMonolog_Logger_EventService()) && false ?: '_'});

        $instance->addListener('adactive_sas_saml2.sso_authn_get_response', [0 => function () {
            return ${($_ = isset($this->services['app.saml.event_subscriber']) ? $this->services['app.saml.event_subscriber'] : $this->load('getApp_Saml_EventSubscriberService.php')) && false ?: '_'};
        }, 1 => 'addEmail'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : ($this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())) && false ?: '_'};
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['sonata.block.cache.handler.default']) ? $this->services['sonata.block.cache.handler.default'] : ($this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['assetic.request_listener']) ? $this->services['assetic.request_listener'] : ($this->services['assetic.request_listener'] = new \Symfony\Bundle\AsseticBundle\EventListener\RequestListener())) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('fos_user.resetting.reset.success', [0 => function () {
            return ${($_ = isset($this->services['AppBundle\\EventListener\\PasswordResettingListener']) ? $this->services['AppBundle\\EventListener\\PasswordResettingListener'] : $this->load('getPasswordResettingListenerService.php')) && false ?: '_'};
        }, 1 => 'onPasswordResettingSuccess'], 0);
        $instance->addListener('Saml2Events::SSO_AUTHN_GET_RESPONSE', [0 => function () {
            return ${($_ = isset($this->services['AppBundle\\EventSubscriber\\SamlSubscriber']) ? $this->services['AppBundle\\EventSubscriber\\SamlSubscriber'] : $this->load('getSamlSubscriberService.php')) && false ?: '_'};
        }, 1 => 'addEmail'], 0);
        $instance->addListener('Saml2Events::SSO_AUTHN_GET_RESPONSE', [0 => function () {
            return ${($_ = isset($this->services['app.saml.event_subscriber']) ? $this->services['app.saml.event_subscriber'] : $this->load('getApp_Saml_EventSubscriberService.php')) && false ?: '_'};
        }, 1 => 'addEmail'], 0);
        $instance->addListener('fos_user.resetting.reset.success', [0 => function () {
            return ${($_ = isset($this->services['app.password_resetting']) ? $this->services['app.password_resetting'] : $this->load('getApp_PasswordResettingService.php')) && false ?: '_'};
        }, 1 => 'onPasswordResettingSuccess'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : ($this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8'))) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : ($this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : ($this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener())) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 24);
        $instance->addListener('console.error', [0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : ($this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['fragment.listener']) ? $this->services['fragment.listener'] : $this->getFragment_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 48);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 10);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : ($this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector())) && false ?: '_'};
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : ($this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['security.rememberme.response_listener']) ? $this->services['security.rememberme.response_listener'] : ($this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->load('getTwig_ExceptionListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('console.command', [0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'};
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'};
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->getSensioFrameworkExtra_Controller_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->getSensioFrameworkExtra_Converter_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : ($this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this))) && false ?: '_'};
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : ($this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this))) && false ?: '_'};
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : ($this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener())) && false ?: '_'};
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : ($this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.security.listener']) ? $this->services['sensio_framework_extra.security.listener'] : $this->getSensioFrameworkExtra_Security_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('fos_user.security.implicit_login', [0 => function () {
            return ${($_ = isset($this->services['fos_user.security.interactive_login_listener']) ? $this->services['fos_user.security.interactive_login_listener'] : $this->load('getFosUser_Security_InteractiveLoginListenerService.php')) && false ?: '_'};
        }, 1 => 'onImplicitLogin'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ${($_ = isset($this->services['fos_user.security.interactive_login_listener']) ? $this->services['fos_user.security.interactive_login_listener'] : $this->load('getFosUser_Security_InteractiveLoginListenerService.php')) && false ?: '_'};
        }, 1 => 'onSecurityInteractiveLogin'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.authentication']) ? $this->services['fos_user.listener.authentication'] : $this->load('getFosUser_Listener_AuthenticationService.php')) && false ?: '_'};
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.registration.confirmed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.authentication']) ? $this->services['fos_user.listener.authentication'] : $this->load('getFosUser_Listener_AuthenticationService.php')) && false ?: '_'};
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.authentication']) ? $this->services['fos_user.listener.authentication'] : $this->load('getFosUser_Listener_AuthenticationService.php')) && false ?: '_'};
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.change_password.edit.completed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.create.completed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.delete.completed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.edit.completed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.profile.edit.completed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.flash']) ? $this->services['fos_user.listener.flash'] : $this->load('getFosUser_Listener_FlashService.php')) && false ?: '_'};
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.resetting.reset.initialize', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.resetting']) ? $this->services['fos_user.listener.resetting'] : $this->load('getFosUser_Listener_ResettingService.php')) && false ?: '_'};
        }, 1 => 'onResettingResetInitialize'], 0);
        $instance->addListener('fos_user.resetting.reset.success', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.resetting']) ? $this->services['fos_user.listener.resetting'] : $this->load('getFosUser_Listener_ResettingService.php')) && false ?: '_'};
        }, 1 => 'onResettingResetSuccess'], 0);
        $instance->addListener('fos_user.resetting.reset.request', [0 => function () {
            return ${($_ = isset($this->services['fos_user.listener.resetting']) ? $this->services['fos_user.listener.resetting'] : $this->load('getFosUser_Listener_ResettingService.php')) && false ?: '_'};
        }, 1 => 'onResettingResetRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['httplug.strategy']) ? $this->services['httplug.strategy'] : $this->getHttplug_StrategyService()) && false ?: '_'};
        }, 1 => 'onEvent'], 1024);
        $instance->addListener('console.command', [0 => function () {
            return ${($_ = isset($this->services['httplug.strategy']) ? $this->services['httplug.strategy'] : $this->getHttplug_StrategyService()) && false ?: '_'};
        }, 1 => 'onEvent'], 1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['Http\\HttplugBundle\\Collector\\PluginClientFactoryListener']) ? $this->services['Http\\HttplugBundle\\Collector\\PluginClientFactoryListener'] : $this->getPluginClientFactoryListenerService()) && false ?: '_'};
        }, 1 => 'onEvent'], 1024);
        $instance->addListener('console.command', [0 => function () {
            return ${($_ = isset($this->services['Http\\HttplugBundle\\Collector\\PluginClientFactoryListener']) ? $this->services['Http\\HttplugBundle\\Collector\\PluginClientFactoryListener'] : $this->getPluginClientFactoryListenerService()) && false ?: '_'};
        }, 1 => 'onEvent'], 1024);
        $instance->addListener('console.command', [0 => function () {
            return ${($_ = isset($this->services['debug.dump_listener']) ? $this->services['debug.dump_listener'] : $this->load('getDebug_DumpListenerService.php')) && false ?: '_'};
        }, 1 => 'configure'], 1024);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['web_profiler.debug_toolbar']) ? $this->services['web_profiler.debug_toolbar'] : $this->getWebProfiler_DebugToolbarService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ${($_ = isset($this->services['maker.console_error_listener']) ? $this->services['maker.console_error_listener'] : ($this->services['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber())) && false ?: '_'};
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ${($_ = isset($this->services['maker.console_error_listener']) ? $this->services['maker.console_error_listener'] : ($this->services['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber())) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'], 0);

        return $instance;
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, $this->targetDirs[3], function () {
            return ${($_ = isset($this->services['debug.file_link_formatter.url_format']) ? $this->services['debug.file_link_formatter.url_format'] : $this->load('getDebug_FileLinkFormatter_UrlFormatService.php')) && false ?: '_'};
        });
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor();
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->services['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.acl.voter.basic_permissions']) ? $this->services['security.acl.voter.basic_permissions'] : $this->load('getSecurity_Acl_Voter_BasicPermissionsService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.access.authenticated_voter']) ? $this->services['security.access.authenticated_voter'] : $this->load('getSecurity_Access_AuthenticatedVoterService.php')) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.access.role_hierarchy_voter']) ? $this->services['security.access.role_hierarchy_voter'] : $this->load('getSecurity_Access_RoleHierarchyVoterService.php')) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.access.expression_voter']) ? $this->services['security.access.expression_voter'] : $this->load('getSecurity_Access_ExpressionVoterService.php')) && false ?: '_'};
        }, 4), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true);
    }

    /**
     * Gets the private 'doctrine.dbal.logger.profiling.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the private 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, ($this->targetDirs[3].'\\app/Resources'), [0 => ($this->targetDirs[3].'\\app')]);
    }

    /**
     * Gets the private 'fos_user.util.canonical_fields_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\CanonicalFieldsUpdater
     */
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        $a = ${($_ = isset($this->services['fos_user.util.email_canonicalizer']) ? $this->services['fos_user.util.email_canonicalizer'] : ($this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer())) && false ?: '_'};

        return $this->services['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }

    /**
     * Gets the private 'fos_user.util.email_canonicalizer' shared service.
     *
     * @return \FOS\UserBundle\Util\Canonicalizer
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the private 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : ($this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('c4f57dfa548af16401321584a770269cb6d8b6ec'))) && false ?: '_'}, '/_fragment');
    }

    /**
     * Gets the private 'httplug.auto_discovery.auto_discovered_client' shared service.
     *
     * @return \Http\HttplugBundle\Collector\ProfileClient
     */
    protected function getHttplug_AutoDiscovery_AutoDiscoveredClientService()
    {
        return $this->services['httplug.auto_discovery.auto_discovered_client'] = new \Http\HttplugBundle\Collector\ProfileClient(\Http\Discovery\HttpClientDiscovery::find(), ${($_ = isset($this->services['httplug.collector.collector']) ? $this->services['httplug.collector.collector'] : ($this->services['httplug.collector.collector'] = new \Http\HttplugBundle\Collector\Collector())) && false ?: '_'}, ${($_ = isset($this->services['httplug.collector.formatter']) ? $this->services['httplug.collector.formatter'] : $this->getHttplug_Collector_FormatterService()) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'});
    }

    /**
     * Gets the private 'httplug.collector.collector' shared service.
     *
     * @return \Http\HttplugBundle\Collector\Collector
     */
    protected function getHttplug_Collector_CollectorService()
    {
        return $this->services['httplug.collector.collector'] = new \Http\HttplugBundle\Collector\Collector();
    }

    /**
     * Gets the private 'httplug.collector.formatter' shared service.
     *
     * @return \Http\HttplugBundle\Collector\Formatter
     */
    protected function getHttplug_Collector_FormatterService()
    {
        return $this->services['httplug.collector.formatter'] = new \Http\HttplugBundle\Collector\Formatter(new \Http\Message\Formatter\FullHttpMessageFormatter(0), new \Http\Message\Formatter\CurlCommandFormatter());
    }

    /**
     * Gets the private 'httplug.strategy' shared service.
     *
     * @return \Http\HttplugBundle\Discovery\ConfiguredClientsStrategy
     */
    protected function getHttplug_StrategyService()
    {
        return $this->services['httplug.strategy'] = new \Http\HttplugBundle\Discovery\ConfiguredClientsStrategy(${($_ = isset($this->services['httplug.auto_discovery.auto_discovered_client']) ? $this->services['httplug.auto_discovery.auto_discovered_client'] : $this->getHttplug_AutoDiscovery_AutoDiscoveredClientService()) && false ?: '_'}, NULL);
    }

    /**
     * Gets the private 'hwi_oauth.templating.helper.oauth' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\Templating\Helper\OAuthHelper
     */
    protected function getHwiOauth_Templating_Helper_OauthService()
    {
        return $this->services['hwi_oauth.templating.helper.oauth'] = new \HWI\Bundle\OAuthBundle\Templating\Helper\OAuthHelper(${($_ = isset($this->services['hwi_oauth.security.oauth_utils']) ? $this->services['hwi_oauth.security.oauth_utils'] : $this->getHwiOauth_Security_OauthUtilsService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'});
    }

    /**
     * Gets the private 'ivory_ck_editor.renderer' shared service.
     *
     * @return \Ivory\CKEditorBundle\Renderer\CKEditorRenderer
     */
    protected function getIvoryCkEditor_RendererService()
    {
        return $this->services['ivory_ck_editor.renderer'] = new \Ivory\CKEditorBundle\Renderer\CKEditorRenderer($this);
    }

    /**
     * Gets the private 'ivory_ck_editor.twig_extension' shared service.
     *
     * @return \Ivory\CKEditorBundle\Twig\CKEditorExtension
     */
    protected function getIvoryCkEditor_TwigExtensionService()
    {
        return $this->services['ivory_ck_editor.twig_extension'] = new \Ivory\CKEditorBundle\Twig\CKEditorExtension(${($_ = isset($this->services['ivory_ck_editor.renderer']) ? $this->services['ivory_ck_editor.renderer'] : ($this->services['ivory_ck_editor.renderer'] = new \Ivory\CKEditorBundle\Renderer\CKEditorRenderer($this))) && false ?: '_'});
    }

    /**
     * Gets the private 'knp_menu.menu_provider' shared service.
     *
     * @return \Knp\Menu\Provider\ChainProvider
     */
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['knp_menu.menu_provider.lazy']) ? $this->services['knp_menu.menu_provider.lazy'] : $this->load('getKnpMenu_MenuProvider_LazyService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['knp_menu.menu_provider.builder_alias']) ? $this->services['knp_menu.menu_provider.builder_alias'] : $this->load('getKnpMenu_MenuProvider_BuilderAliasService.php')) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['sonata.admin.menu.group_provider']) ? $this->services['sonata.admin.menu.group_provider'] : $this->load('getSonata_Admin_Menu_GroupProviderService.php')) && false ?: '_'};
        }, 3));
    }

    /**
     * Gets the private 'knp_menu.renderer_provider' shared service.
     *
     * @return \Knp\Menu\Renderer\PsrProvider
     */
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Menu\Renderer\PsrProvider(new \Symfony\Component\DependencyInjection\ServiceLocator(['list' => function () {
            return ${($_ = isset($this->services['knp_menu.renderer.list']) ? $this->services['knp_menu.renderer.list'] : $this->load('getKnpMenu_Renderer_ListService.php')) && false ?: '_'};
        }, 'twig' => function () {
            return ${($_ = isset($this->services['knp_menu.renderer.twig']) ? $this->services['knp_menu.renderer.twig'] : $this->load('getKnpMenu_Renderer_TwigService.php')) && false ?: '_'};
        }]), 'twig');
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, 'en', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : ($this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true))) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [], []);
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'\\logs/dev.log'), 100, true, NULL, false);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : ($this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.server_log' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ServerLogHandler
     */
    protected function getMonolog_Handler_ServerLogService()
    {
        return $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true);
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : ($this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true))) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : ($this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true))) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : ($this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true))) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.profiler' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : ($this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true))) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : ($this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true))) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.translation' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : ($this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true))) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.processor.psr_log_message' shared service.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->getProfilerService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, NULL, false, false);
    }

    /**
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false));
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : ($this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'});
    }

    /**
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}, $this->targetDirs[3], true);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.authentication.provider.dao.admin']) ? $this->services['security.authentication.provider.dao.admin'] : $this->load('getSecurity_Authentication_Provider_Dao_AdminService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.authentication.provider.anonymous.admin']) ? $this->services['security.authentication.provider.anonymous.admin'] : ($this->services['security.authentication.provider.anonymous.admin'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash')))) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.authentication.provider.dao.oauth_authorize']) ? $this->services['security.authentication.provider.dao.oauth_authorize'] : $this->load('getSecurity_Authentication_Provider_Dao_OauthAuthorizeService.php')) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.authentication.provider.anonymous.oauth_authorize']) ? $this->services['security.authentication.provider.anonymous.oauth_authorize'] : ($this->services['security.authentication.provider.anonymous.oauth_authorize'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash')))) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['hwi_oauth.authentication.provider.oauth.main']) ? $this->services['hwi_oauth.authentication.provider.oauth.main'] : $this->load('getHwiOauth_Authentication_Provider_Oauth_MainService.php')) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['security.authentication.provider.anonymous.main']) ? $this->services['security.authentication.provider.anonymous.main'] : ($this->services['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash')))) && false ?: '_'};
        }, 6), true);

        $instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->services['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(['security.firewall.map.context.admin' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.admin']) ? $this->services['security.firewall.map.context.admin'] : $this->load('getSecurity_Firewall_Map_Context_AdminService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.dev' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.dev']) ? $this->services['security.firewall.map.context.dev'] : $this->load('getSecurity_Firewall_Map_Context_DevService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.main' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.main']) ? $this->services['security.firewall.map.context.main'] : $this->load('getSecurity_Firewall_Map_Context_MainService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.oauth_authorize' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.oauth_authorize']) ? $this->services['security.firewall.map.context.oauth_authorize'] : $this->load('getSecurity_Firewall_Map_Context_OauthAuthorizeService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.oauth_token' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.oauth_token']) ? $this->services['security.firewall.map.context.oauth_token'] : $this->load('getSecurity_Firewall_Map_Context_OauthTokenService.php')) && false ?: '_'};
        }]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ${($_ = isset($this->services['security.request_matcher.zfhj2lw']) ? $this->services['security.request_matcher.zfhj2lw'] : ($this->services['security.request_matcher.zfhj2lw'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'))) && false ?: '_'};
            yield 'security.firewall.map.context.admin' => ${($_ = isset($this->services['security.request_matcher.6xxs_ip']) ? $this->services['security.request_matcher.6xxs_ip'] : ($this->services['security.request_matcher.6xxs_ip'] = new \Symfony\Component\HttpFoundation\RequestMatcher('/admin(.*)'))) && false ?: '_'};
            yield 'security.firewall.map.context.oauth_token' => ${($_ = isset($this->services['security.request_matcher.q0ptkup']) ? $this->services['security.request_matcher.q0ptkup'] : ($this->services['security.request_matcher.q0ptkup'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/oauth/v2/token'))) && false ?: '_'};
            yield 'security.firewall.map.context.oauth_authorize' => ${($_ = isset($this->services['security.request_matcher.kenuv22']) ? $this->services['security.request_matcher.kenuv22'] : ($this->services['security.request_matcher.kenuv22'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/oauth/v2/auth'))) && false ?: '_'};
            yield 'security.firewall.map.context.main' => ${($_ = isset($this->services['security.request_matcher.gt2qimv']) ? $this->services['security.request_matcher.gt2qimv'] : ($this->services['security.request_matcher.gt2qimv'] = new \Symfony\Component\HttpFoundation\RequestMatcher('.*'))) && false ?: '_'};
        }, 5));
    }

    /**
     * Gets the private 'security.http_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils
     */
    protected function getSecurity_HttpUtilsService()
    {
        $a = ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'};

        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a, '{^https?://%s$}i');
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'});

        $instance->registerListener('admin', '/admin/logout', 'logout', '_csrf_token', NULL, 'admin');
        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy($this->parameters['security.role_hierarchy.roles']);
    }

    /**
     * Gets the private 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.datetime' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.doctrine.orm' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->getSensioFrameworkExtra_Converter_ManagerService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.doctrine.orm']) ? $this->services['sensio_framework_extra.converter.doctrine.orm'] : $this->getSensioFrameworkExtra_Converter_Doctrine_OrmService()) && false ?: '_'}, 0, 'doctrine.orm');
        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.datetime']) ? $this->services['sensio_framework_extra.converter.datetime'] : ($this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter())) && false ?: '_'}, 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : ($this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken'))) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the private 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(['session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load('getSessionService.php')) && false ?: '_'};
        }]));
    }

    /**
     * Gets the private 'sonata.block.cache.handler.default' shared service.
     *
     * @return \Sonata\BlockBundle\Cache\HttpCacheHandler
     */
    protected function getSonata_Block_Cache_Handler_DefaultService()
    {
        return $this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler();
    }

    /**
     * Gets the private 'sonata.block.exception.strategy.manager' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Strategy\StrategyManager
     */
    protected function getSonata_Block_Exception_Strategy_ManagerService()
    {
        $this->services['sonata.block.exception.strategy.manager'] = $instance = new \Sonata\BlockBundle\Exception\Strategy\StrategyManager($this, ['debug_only' => 'sonata.block.exception.filter.debug_only', 'ignore_block_exception' => 'sonata.block.exception.filter.ignore_block_exception', 'keep_all' => 'sonata.block.exception.filter.keep_all', 'keep_none' => 'sonata.block.exception.filter.keep_none'], ['inline' => 'sonata.block.exception.renderer.inline', 'inline_debug' => 'sonata.block.exception.renderer.inline_debug', 'throw' => 'sonata.block.exception.renderer.throw'], [], []);

        $instance->setDefaultFilter('debug_only');
        $instance->setDefaultRenderer('throw');

        return $instance;
    }

    /**
     * Gets the private 'sonata.block.loader.chain' shared service.
     *
     * @return \Sonata\BlockBundle\Block\BlockLoaderChain
     */
    protected function getSonata_Block_Loader_ChainService()
    {
        return $this->services['sonata.block.loader.chain'] = new \Sonata\BlockBundle\Block\BlockLoaderChain([0 => ${($_ = isset($this->services['sonata.block.loader.service']) ? $this->services['sonata.block.loader.service'] : $this->getSonata_Block_Loader_ServiceService()) && false ?: '_'}]);
    }

    /**
     * Gets the private 'sonata.block.loader.service' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Loader\ServiceLoader
     */
    protected function getSonata_Block_Loader_ServiceService()
    {
        return $this->services['sonata.block.loader.service'] = new \Sonata\BlockBundle\Block\Loader\ServiceLoader([0 => 'sonata.admin.block.admin_list', 1 => 'sonata.user.block.menu', 2 => 'sonata.user.block.account', 3 => 'sonata.block.service.text', 4 => 'sonata.block.dash', 'sonata.block.dash' => ['context' => []], 'sonata.block.service.container' => ['context' => []], 'sonata.block.service.empty' => ['context' => []], 'sonata.block.service.text' => ['context' => []], 'sonata.block.service.rss' => ['context' => []], 'sonata.block.service.menu' => ['context' => []], 'sonata.block.service.template' => ['context' => []], 'sonata.admin.block.admin_list' => ['context' => []], 'sonata.admin.block.search_result' => ['context' => []], 'sonata.admin.block.stats' => ['context' => []]]);
    }

    /**
     * Gets the private 'sonata.block.templating.helper' shared service.
     *
     * @return \Sonata\BlockBundle\Templating\Helper\BlockHelper
     */
    protected function getSonata_Block_Templating_HelperService()
    {
        return $this->services['sonata.block.templating.helper'] = new \Sonata\BlockBundle\Templating\Helper\BlockHelper(${($_ = isset($this->services['sonata.block.manager']) ? $this->services['sonata.block.manager'] : $this->getSonata_Block_ManagerService()) && false ?: '_'}, $this->parameters['sonata_block.cache_blocks'], ${($_ = isset($this->services['sonata.block.renderer.default']) ? $this->services['sonata.block.renderer.default'] : $this->getSonata_Block_Renderer_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.block.context_manager.default']) ? $this->services['sonata.block.context_manager.default'] : $this->getSonata_Block_ContextManager_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, NULL, ${($_ = isset($this->services['sonata.block.cache.handler.default']) ? $this->services['sonata.block.cache.handler.default'] : ($this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler())) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'});
    }

    /**
     * Gets the private 'sonata.block.twig.global' shared service.
     *
     * @return \Sonata\BlockBundle\Twig\GlobalVariables
     */
    protected function getSonata_Block_Twig_GlobalService()
    {
        return $this->services['sonata.block.twig.global'] = new \Sonata\BlockBundle\Twig\GlobalVariables(['block_base' => '@SonataBlock/Block/block_base.html.twig', 'block_container' => '@SonataBlock/Block/block_container.html.twig']);
    }

    /**
     * Gets the private 'sonata.core.twig.deprecated_template_extension' shared service.
     *
     * @return \Sonata\Twig\Extension\DeprecatedTemplateExtension
     */
    protected function getSonata_Core_Twig_DeprecatedTemplateExtensionService()
    {
        return $this->services['sonata.core.twig.deprecated_template_extension'] = new \Sonata\Twig\Extension\DeprecatedTemplateExtension();
    }

    /**
     * Gets the private 'sonata.core.twig.extension.text' shared service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension
     */
    protected function getSonata_Core_Twig_Extension_TextService()
    {
        return $this->services['sonata.core.twig.extension.text'] = new \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension();
    }

    /**
     * Gets the private 'sonata.core.twig.extension.wrapping' shared service.
     *
     * @return \Sonata\Twig\Extension\FormTypeExtension
     */
    protected function getSonata_Core_Twig_Extension_WrappingService()
    {
        return $this->services['sonata.core.twig.extension.wrapping'] = new \Sonata\Twig\Extension\FormTypeExtension('standard');
    }

    /**
     * Gets the private 'sonata.core.twig.status_extension' shared service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\StatusExtension
     */
    protected function getSonata_Core_Twig_StatusExtensionService()
    {
        return $this->services['sonata.core.twig.status_extension'] = new \Sonata\CoreBundle\Twig\Extension\StatusExtension();
    }

    /**
     * Gets the private 'sonata.core.twig.template_extension' shared service.
     *
     * @return \Sonata\Twig\Extension\TemplateExtension
     */
    protected function getSonata_Core_Twig_TemplateExtensionService()
    {
        return $this->services['sonata.core.twig.template_extension'] = new \Sonata\Twig\Extension\TemplateExtension(true, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.core.model.adapter.chain']) ? $this->services['sonata.core.model.adapter.chain'] : $this->load('getSonata_Core_Model_Adapter_ChainService.php')) && false ?: '_'});
    }

    /**
     * Gets the private 'sonata.user.matrix_roles_builder' shared service.
     *
     * @return \Sonata\UserBundle\Security\RolesBuilder\MatrixRolesBuilder
     */
    protected function getSonata_User_MatrixRolesBuilderService()
    {
        $a = ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'};
        $c = ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'};

        return $this->services['sonata.user.matrix_roles_builder'] = new \Sonata\UserBundle\Security\RolesBuilder\MatrixRolesBuilder(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, new \Sonata\UserBundle\Security\RolesBuilder\AdminRolesBuilder($a, $b, $c), new \Sonata\UserBundle\Security\RolesBuilder\SecurityRolesBuilder($a, $b, $c, $this->parameters['security.role_hierarchy.roles']));
    }

    /**
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : ($this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, ($this->targetDirs[3].'\\app/Resources'), [0 => ($this->targetDirs[3].'\\app')]))) && false ?: '_'}, $this->targetDirs[0]);
    }

    /**
     * Gets the private 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\ServiceLocator(['translation.loader.csv' => function () {
            return ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : ($this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader())) && false ?: '_'};
        }, 'translation.loader.dat' => function () {
            return ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : ($this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader())) && false ?: '_'};
        }, 'translation.loader.ini' => function () {
            return ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : ($this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader())) && false ?: '_'};
        }, 'translation.loader.json' => function () {
            return ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : ($this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader())) && false ?: '_'};
        }, 'translation.loader.mo' => function () {
            return ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : ($this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader())) && false ?: '_'};
        }, 'translation.loader.php' => function () {
            return ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : ($this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader())) && false ?: '_'};
        }, 'translation.loader.po' => function () {
            return ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : ($this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader())) && false ?: '_'};
        }, 'translation.loader.qt' => function () {
            return ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : ($this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader())) && false ?: '_'};
        }, 'translation.loader.res' => function () {
            return ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : ($this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader())) && false ?: '_'};
        }, 'translation.loader.xliff' => function () {
            return ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : ($this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader())) && false ?: '_'};
        }, 'translation.loader.yml' => function () {
            return ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : ($this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader())) && false ?: '_'};
        }]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\MessageSelector()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => true, 'resource_files' => ['af' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.af.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.af.yml')], 'ar' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ar.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ar.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ar.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.ar.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.ar.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ar.yml'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ar.yml')], 'az' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.az.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.az.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.az.xlf')], 'be' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.be.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.be.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.be.xlf')], 'bg' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.bg.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.bg.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.bg.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.bg.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.bg.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.bg.yml'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.bg.yml'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.bg.xliff')], 'ca' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ca.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ca.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ca.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.ca.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.ca.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ca.yml'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ca.yml'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.ca.xliff')], 'cs' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cs.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.cs.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.cs.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.cs.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.cs.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.cs.yml'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.cs.yml'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.cs.xliff')], 'cy' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cy.xlf')], 'da' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.da.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.da.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.da.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.da.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.da.yml')], 'de' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.de.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.de.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.de.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.de.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.de.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\validators.de.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.de.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.de.yml'), 8 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.de.yml'), 9 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.de.xliff'), 10 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\oauth-server-bundle/Resources/translations\\FOSOAuthServerBundle.de.yml'), 11 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.de.yml')], 'el' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.el.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.el.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.el.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.el.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.el.yml')], 'en' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.en.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.en.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.en.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.en.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.en.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\validators.en.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.en.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.en.yml'), 8 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.en.yml'), 9 => ($this->targetDirs[3].'\\app/Resources/FOSUserBundle/translations\\FOSUserBundle.en.yml'), 10 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.en.xliff'), 11 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\oauth-server-bundle/Resources/translations\\FOSOAuthServerBundle.en.yml'), 12 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.en.yml')], 'es' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.es.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.es.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.es.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.es.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.es.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.es.yml'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.es.yml'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.es.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.es.yml')], 'et' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.et.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.et.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.et.yml')], 'eu' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.eu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.eu.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.eu.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.eu.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.eu.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.eu.yml'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.eu.yml')], 'fa' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fa.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fa.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.fa.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.fa.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.fa.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.fa.yml'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.fa.yml'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.fa.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.fa.yml')], 'fi' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fi.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.fi.xliff'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.fi.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.fi.yml'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.fi.xliff')], 'fr' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.fr.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.fr.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.fr.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\validators.fr.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.fr.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.fr.yml'), 8 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.fr.yml'), 9 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.fr.xliff'), 10 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\oauth-server-bundle/Resources/translations\\FOSOAuthServerBundle.fr.yml'), 11 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.fr.yml')], 'gl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.gl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.gl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.gl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.gl.yml')], 'he' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.he.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.he.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.he.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.he.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.he.yml')], 'hr' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.hr.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.hr.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.hr.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.hr.yml'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.hr.yml'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.hr.xliff')], 'hu' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hu.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.hu.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.hu.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.hu.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.hu.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.hu.yml'), 7 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.hu.yml'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.hu.xliff'), 9 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.hu.yml')], 'hy' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hy.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hy.xlf')], 'id' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.id.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.id.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.id.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.id.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.id.yml')], 'it' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.it.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.it.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.it.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.it.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.it.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.it.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.it.yml'), 7 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.it.yml'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.it.xliff'), 9 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.it.yml')], 'ja' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ja.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ja.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ja.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.ja.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.ja.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ja.yml'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ja.yml'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.ja.xliff')], 'lb' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lb.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lb.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lb.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.lb.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.lb.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.lb.yml')], 'lt' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lt.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lt.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.lt.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.lt.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.lt.yml'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.lt.yml'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.lt.xliff')], 'lv' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lv.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lv.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.lv.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.lv.yml'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.lv.yml')], 'mn' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.mn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.mn.xlf')], 'nb' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nb.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nb.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nb.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.nb.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.nb.yml')], 'nl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.nl.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.nl.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.nl.yml'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.nl.yml'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.nl.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.nl.yml')], 'nn' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nn.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nn.xlf')], 'no' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.no.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.no.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.no.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.no.xliff')], 'pl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.pl.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.pl.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.pl.yml'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.pl.yml'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.pl.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.pl.yml')], 'pt' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.pt.xliff'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.pt.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.pt.yml'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.pt.yml'), 6 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.pt.xliff')], 'pt_BR' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.pt_BR.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.pt_BR.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.pt_BR.yml'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.pt_BR.yml'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.pt_BR.xliff')], 'ro' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ro.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ro.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ro.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.ro.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.ro.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ro.yml'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ro.yml'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.ro.xliff')], 'ru' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ru.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ru.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ru.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.ru.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/translations\\SonataBlockBundle.ru.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.ru.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ru.yml'), 7 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ru.yml'), 8 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\FOSUserBundle.ru.xliff'), 9 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.ru.xliff'), 10 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.ru.yml')], 'sk' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sk.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sk.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.sk.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.sk.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sk.yml'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sk.yml'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.sk.xliff')], 'sl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.sl.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.sl.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sl.yml'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sl.yml'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.sl.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\oauth-server-bundle/Resources/translations\\FOSOAuthServerBundle.sl.yml')], 'sq' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sq.xlf')], 'sr_Cyrl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sr_Latn.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sr_Latn.yml')], 'sv' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sv.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sv.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sv.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sv.yml')], 'th' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.th.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.th.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.th.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.th.yml')], 'tl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.tl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.tl.xlf')], 'tr' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.tr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.tr.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.tr.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.tr.yml'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.tr.yml'), 6 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.tr.yml')], 'uk' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.uk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.uk.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.uk.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.uk.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.uk.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.uk.yml'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.uk.yml'), 7 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.uk.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.uk.yml')], 'vi' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.vi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.vi.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.vi.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.vi.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.vi.yml')], 'zh_CN' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/translations\\SonataCoreBundle.zh_CN.xliff'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.zh_CN.xliff'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.zh_CN.yml'), 6 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.zh_CN.yml')], 'zh_TW' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_TW.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/translations\\SonataUserBundle.zh_TW.xliff')], 'pt_PT' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pt_PT.xlf')], 'sv_SE' => [0 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.sv_SE.xliff')], 'zh_HK' => [0 => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/translations\\SonataAdminBundle.zh_HK.xliff')], 'bn' => [0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.bn.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.bn.yml')], 'bn_BD' => [0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.bn_BD.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.bn_BD.yml')], 'eo' => [0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.eo.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.eo.yml')], 'ky' => [0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ky.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ky.yml')], 'zh' => [0 => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/translations\\HWIOAuthBundle.zh.yml')]]]);

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->getConfigCacheFactoryService()) && false ?: '_'});
        $instance->setFallbackLocales([0 => 'en']);

        return $instance;
    }

    /**
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'});
    }

    /**
     * Gets the private 'twig.loader' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : ($this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'}, $this->targetDirs[3]);

        $instance->addPath(($this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views'), '!Framework');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), '!Security');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), '!Twig');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), '!Doctrine');
        $instance->addPath(($this->targetDirs[3].'\\src\\AppBundle/Resources/views'), 'App');
        $instance->addPath(($this->targetDirs[3].'\\src\\AppBundle/Resources/views'), 'ApplicationSonataUser');
        $instance->addPath(($this->targetDirs[3].'\\src\\Application\\Sonata\\UserBundle/Resources/views'), 'ApplicationSonataUser');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/views'), 'SonataCore');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle/Resources/views'), '!SonataCore');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/views'), 'SonataBlock');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src/Resources/views'), '!SonataBlock');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\knplabs\\knp-menu-bundle\\src/Resources/views'), 'KnpMenu');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\knplabs\\knp-menu-bundle\\src/Resources/views'), '!KnpMenu');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src/Resources/views'), 'SonataDoctrineORMAdmin');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src/Resources/views'), '!SonataDoctrineORMAdmin');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/views'), 'SonataAdmin');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src/Resources/views'), '!SonataAdmin');
        $instance->addPath(($this->targetDirs[3].'\\app/Resources/FOSUserBundle/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/views'), '!FOSUser');
        $instance->addPath(($this->targetDirs[3].'\\src\\AppBundle/Resources/views'), 'SonataUser');
        $instance->addPath(($this->targetDirs[3].'\\src\\Application\\Sonata\\UserBundle/Resources/views'), 'SonataUser');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/views'), 'SonataUser');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src/Resources/views'), '!SonataUser');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\oauth-server-bundle/Resources/views'), 'FOSOAuthServer');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\oauth-server-bundle/Resources/views'), '!FOSOAuthServer');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\egeloen\\ckeditor-bundle/Resources/views'), 'IvoryCKEditor');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\egeloen\\ckeditor-bundle/Resources/views'), '!IvoryCKEditor');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\php-http\\httplug-bundle\\src/Resources/views'), 'Httplug');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\php-http\\httplug-bundle\\src/Resources/views'), '!Httplug');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/views'), 'HWIOAuth');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle/Resources/views'), '!HWIOAuth');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\DebugBundle/Resources/views'), '!Debug');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views'), '!WebProfiler');
        $instance->addPath(($this->targetDirs[3].'\\app/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the private 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the private 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('c4f57dfa548af16401321584a770269cb6d8b6ec');
    }

    /**
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(${($_ = isset($this->services['validator.validator_factory']) ? $this->services['validator.validator_factory'] : $this->getValidator_ValidatorFactoryService()) && false ?: '_'});
        if ($this->has('translator')) {
            $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
        }
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/config/validation.xml'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\oauth-server-bundle/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([0 => ${($_ = isset($this->services['doctrine.orm.validator_initializer']) ? $this->services['doctrine.orm.validator_initializer'] : $this->getDoctrine_Orm_ValidatorInitializerService()) && false ?: '_'}, 1 => new \FOS\UserBundle\Validator\Initializer(${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'})]);
        $instance->addXmlMapping(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\DependencyInjection\\Compiler/../../Resources/config/storage-validation/orm.xml'));

        return $instance;
    }

    /**
     * Gets the private 'validator.validator_factory' shared service.
     *
     * @return \Symfony\Component\Validator\ContainerConstraintValidatorFactory
     */
    protected function getValidator_ValidatorFactoryService()
    {
        return $this->services['validator.validator_factory'] = new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(['Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->load('getDoctrine_Orm_Validator_UniqueService.php')) && false ?: '_'};
        }, 'Sonata\\CoreBundle\\Validator\\InlineValidator' => function () {
            return ${($_ = isset($this->services['sonata.admin.validator.inline']) ? $this->services['sonata.admin.validator.inline'] : $this->load('getSonata_Admin_Validator_InlineService.php')) && false ?: '_'};
        }, 'Sonata\\Form\\Validator\\InlineValidator' => function () {
            return ${($_ = isset($this->services['sonata.core.validator.inline']) ? $this->services['sonata.core.validator.inline'] : $this->load('getSonata_Core_Validator_InlineService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->load('getSecurity_Validator_UserPasswordService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
            return ${($_ = isset($this->services['validator.email']) ? $this->services['validator.email'] : ($this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false))) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : ($this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator())) && false ?: '_'};
        }, 'doctrine.orm.validator.unique' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->load('getDoctrine_Orm_Validator_UniqueService.php')) && false ?: '_'};
        }, 'security.validator.user_password' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->load('getSecurity_Validator_UserPasswordService.php')) && false ?: '_'};
        }, 'sonata.admin.validator.inline' => function () {
            return ${($_ = isset($this->services['sonata.admin.validator.inline']) ? $this->services['sonata.admin.validator.inline'] : $this->load('getSonata_Admin_Validator_InlineService.php')) && false ?: '_'};
        }, 'sonata.core.validator.inline' => function () {
            return ${($_ = isset($this->services['sonata.core.validator.inline']) ? $this->services['sonata.core.validator.inline'] : $this->load('getSonata_Core_Validator_InlineService.php')) && false ?: '_'};
        }, 'validator.expression' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : ($this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator())) && false ?: '_'};
        }]));
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->services['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, false, 2, 'bottom', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, '^/((index|app(_[\\w]+)?)\\.php/)?_wdt', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'});
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
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
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'write_to' => false,
        'documents_directory' => false,
        'requests_directory' => false,
        'uploads_directory' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'translator.default_path' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'router.resource' => false,
        'twig.default_path' => false,
        'swiftmailer.spool.default.memory.path' => false,
        'doctrine.orm.proxy_dir' => false,
        'assetic.cache_dir' => false,
        'assetic.read_from' => false,
        'assetic.write_to' => false,
    ];
    private $dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'\\app'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'\\logs'); break;
            case 'kernel.bundles_metadata': $value = [
                'FrameworkBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'SecurityBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'TwigBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'MonologBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'SwiftmailerBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'DoctrineBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'AppBundle' => [
                    'parent' => 'ApplicationSonataUserBundle',
                    'path' => ($this->targetDirs[3].'\\src\\AppBundle'),
                    'namespace' => 'AppBundle',
                ],
                'SonataCoreBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\CoreBundle'),
                    'namespace' => 'Sonata\\CoreBundle',
                ],
                'SonataBlockBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src'),
                    'namespace' => 'Sonata\\BlockBundle',
                ],
                'KnpMenuBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-menu-bundle\\src'),
                    'namespace' => 'Knp\\Bundle\\MenuBundle',
                ],
                'SonataDoctrineORMAdminBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\src'),
                    'namespace' => 'Sonata\\DoctrineORMAdminBundle',
                ],
                'SonataAdminBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src'),
                    'namespace' => 'Sonata\\AdminBundle',
                ],
                'SonataEasyExtendsBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\easy-extends-bundle\\src'),
                    'namespace' => 'Sonata\\EasyExtendsBundle',
                ],
                'FOSUserBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle'),
                    'namespace' => 'FOS\\UserBundle',
                ],
                'SonataUserBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src'),
                    'namespace' => 'Sonata\\UserBundle',
                ],
                'ApplicationSonataUserBundle' => [
                    'parent' => 'SonataUserBundle',
                    'path' => ($this->targetDirs[3].'\\src\\Application\\Sonata\\UserBundle'),
                    'namespace' => 'Application\\Sonata\\UserBundle',
                ],
                'KnpSnappyBundle' => [
                    'parent' => NULL,
                    'path' => 'G:/www/appghana/vendor/knplabs/knp-snappy-bundle',
                    'namespace' => 'Knp\\Bundle\\SnappyBundle',
                ],
                'FOSOAuthServerBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\oauth-server-bundle'),
                    'namespace' => 'FOS\\OAuthServerBundle',
                ],
                'IvoryCKEditorBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\egeloen\\ckeditor-bundle'),
                    'namespace' => 'Ivory\\CKEditorBundle',
                ],
                'AsseticBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\assetic-bundle'),
                    'namespace' => 'Symfony\\Bundle\\AsseticBundle',
                ],
                'ExpertCoderSwiftmailerSendGridBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\gulaandrij\\swiftmailer-send-grid-bundle\\src'),
                    'namespace' => 'ExpertCoder\\Swiftmailer\\SendGridBundle',
                ],
                'HttplugBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\php-http\\httplug-bundle\\src'),
                    'namespace' => 'Http\\HttplugBundle',
                ],
                'HWIOAuthBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle'),
                    'namespace' => 'HWI\\Bundle\\OAuthBundle',
                ],
                'DebugBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\DebugBundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ],
                'WebProfilerBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
                'SensioDistributionBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sensio\\distribution-bundle'),
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ],
                'MakerBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\maker-bundle\\src'),
                    'namespace' => 'Symfony\\Bundle\\MakerBundle',
                ],
                'SensioGeneratorBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sensio\\generator-bundle'),
                    'namespace' => 'Sensio\\Bundle\\GeneratorBundle',
                ],
                'WebServerBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebServerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ],
            ]; break;
            case 'write_to': $value = ($this->targetDirs[3].'\\app/../web/bundles/app'); break;
            case 'documents_directory': $value = ($this->targetDirs[3].'\\app/../web/uploads/documents'); break;
            case 'requests_directory': $value = ($this->targetDirs[3].'\\app/../web/uploads/requests'); break;
            case 'uploads_directory': $value = ($this->targetDirs[3].'\\app/../web/uploads/'); break;
            case 'session.save_path': $value = ($this->targetDirs[3].'/var/sessions/dev'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/translations'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDirs[0].'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDirs[0].'/appDevDebugProjectContainer.xml'); break;
            case 'router.resource': $value = ($this->targetDirs[0].'/assetic/routing.yml'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDirs[0].'/swiftmailer/spool/default'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            case 'assetic.cache_dir': $value = ($this->targetDirs[0].'/assetic'); break;
            case 'assetic.read_from': $value = ($this->targetDirs[3].'\\app/../web'); break;
            case 'assetic.write_to': $value = ($this->targetDirs[3].'\\app/../web'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    private $normalizedParameterNames = [
        'sourcedogg.supplierurl' => 'sourcedogg.supplierUrl',
        'sourcedogg.buyerurl' => 'sourcedogg.buyerUrl',
        'hivebriteurlaccesstoken' => 'hiveBriteUrlAccessToken',
        'hivebriteurlbaseurl' => 'hiveBriteUrlBaseUrl',
        'hivebriteuuid' => 'hiveBriteUUID',
        'hivebritesecret' => 'hiveBriteSecret',
        'hivebritegroupid' => 'hiveBriteGroupId',
        'dthotkey' => 'dthotKey',
        'dhotiv' => 'dhotIV',
        'azureclientid' => 'azureClientId',
        'azureclientsecret' => 'azureClientSecret',
        'azuretenantid' => 'azureTenantId',
        'azuresuppliergroupid' => 'azureSupplierGroupId',
        'azurebuyergroupid' => 'azureBuyerGroupId',
        'azureappid' => 'azureAppId',
    ];

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
                'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle',
                'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle',
                'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle',
                'ApplicationSonataUserBundle' => 'Application\\Sonata\\UserBundle\\ApplicationSonataUserBundle',
                'KnpSnappyBundle' => 'Knp\\Bundle\\SnappyBundle\\KnpSnappyBundle',
                'FOSOAuthServerBundle' => 'FOS\\OAuthServerBundle\\FOSOAuthServerBundle',
                'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'ExpertCoderSwiftmailerSendGridBundle' => 'ExpertCoder\\Swiftmailer\\SendGridBundle\\ExpertCoderSwiftmailerSendGridBundle',
                'HttplugBundle' => 'Http\\HttplugBundle\\HttplugBundle',
                'HWIOAuthBundle' => 'HWI\\Bundle\\OAuthBundle\\HWIOAuthBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'MakerBundle' => 'Symfony\\Bundle\\MakerBundle\\MakerBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'database_host' => 'localhost',
            'database_port' => 3306,
            'database_name' => 'appghana',
            'database_user' => 'ourclient',
            'database_password' => '8bqr61FUEgMWgJ1x',
            'mailer_transport' => 'expertcoder_swift_mailer.send_grid.transport',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'c4f57dfa548af16401321584a770269cb6d8b6ec',
            'locale' => 'en',
            'base_url' => 'https://appghana.com/',
            'buyer.registration.amount' => 0,
            'supplier.registration.amountl' => 236.25,
            'supplier.registration.amounti' => 945.0,
            'sourcedogg.supplierUrl' => 'https://secure.sourcedogg.com/supplier-registration',
            'sourcedogg.buyerUrl' => 'https://www.sourcedogg.com/free-trial/',
            'sourcedogg.login' => 'https://secure.sourcedogg.com/',
            'hiveBriteUrlAccessToken' => 'https://kenya-app.hivebrite.com/oauth/token',
            'hiveBriteUrlBaseUrl' => 'https://kenya-app.hivebrite.com/api/admin/v1/',
            'hiveBriteUUID' => '57c2cb636833b3add9711c4940f04098dce5d27607e9eba9a781ce882267e460',
            'hiveBriteSecret' => '10e66c4f108212717f2871efe30c258e527a7cd3b84e6432f306ef132f6c6d45',
            'hiveBriteGroupId' => 13163,
            'dthotKey' => '375BABC02EEBFBCC43FCBA330321D38125F1670CEFE1A43C22A30A086D1C3474',
            'dhotIV' => '25A568F8521ED95BF7E198A1B72711C0',
            'noreply' => 'no-reply@appghana.com',
            'sendgrid_api_key' => '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',
            'hubtel_client_id' => 'dhmqvhot',
            'hubtel_secret' => 'aimhebqi',
            'hubtel_from' => 'APP',
            'azureClientId' => '5e24a69b-f667-4c76-99d5-5d3ee52fb8df',
            'azureClientSecret' => '08tc7OZj9*a_dN--ORSc+h4IxDnMz/AG',
            'azureTenantId' => '417f9f2c-0bb5-497d-bdb0-3c282099840f',
            'azureSupplierGroupId' => '60be1a3e-c5c7-4b07-b51f-ddcadfef9ba7',
            'azureBuyerGroupId' => 'ba0ee40c-b3a4-450c-9d20-75a73811b275',
            'azureAppId' => '848a3d12-c856-4705-8640-ff701f57121f',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'c4f57dfa548af16401321584a770269cb6d8b6ec',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
                'use_strict_mode' => true,
            ],
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => [
                0 => 'twig',
            ],
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => true,
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'appDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => [
                'ROLE_ADMIN' => [
                    0 => 'ROLE_USER',
                    1 => 'ROLE_SONATA_ADMIN',
                ],
                'ROLE_SUPER_ADMIN' => [
                    0 => 'ROLE_ADMIN',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ],
                'SONATA' => [
                    0 => 'ROLE_SONATA_PAGE_ADMIN_PAGE_EDIT',
                ],
            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'hwi_oauth.resource_ownermap.configured.main' => [
                'azure' => '/login/check-azure',
            ],
            'security.acl.dbal.class_table_name' => 'acl_classes',
            'security.acl.dbal.entry_table_name' => 'acl_entries',
            'security.acl.dbal.oid_table_name' => 'acl_object_identities',
            'security.acl.dbal.oid_ancestors_table_name' => 'acl_object_identity_ancestors',
            'security.acl.dbal.sid_table_name' => 'acl_security_identities',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => [
                0 => '@IvoryCKEditor/Form/ckeditor_widget.html.twig',
                1 => 'form_div_layout.html.twig',
                2 => '@SonataUser/Form/form_admin_fields.html.twig',
                3 => 'SonataCoreBundle:Form:datepicker.html.twig',
            ],
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.server_log' => NULL,
                'monolog.handler.console' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ],
                ],
                'monolog.handler.main' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                    ],
                ],
                'monolog.handler.dumps' => [
                    'type' => 'inclusive',
                    'elements' => [
                        0 => 'dumps',
                    ],
                ],
                'monolog.handler.azure' => [
                    'type' => 'inclusive',
                    'elements' => [
                        0 => 'azure',
                    ],
                ],
                'monolog.handler.hubtel' => [
                    'type' => 'inclusive',
                    'elements' => [
                        0 => 'hubtel',
                    ],
                ],
                'monolog.handler.email' => [
                    'type' => 'inclusive',
                    'elements' => [
                        0 => 'email',
                    ],
                ],
                'monolog.handler.sms' => [
                    'type' => 'inclusive',
                    'elements' => [
                        0 => 'sms',
                    ],
                ],
                'monolog.handler.hivebrite' => [
                    'type' => 'inclusive',
                    'elements' => [
                        0 => 'hivebrite',
                    ],
                ],
                'monolog.handler.import' => [
                    'type' => 'inclusive',
                    'elements' => [
                        0 => 'import',
                    ],
                ],
            ],
            'swiftmailer.mailer.default.transport.name' => 'expertcoder_swift_mailer.send_grid.transport',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
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
                'json' => [
                    'class' => 'Sonata\\Doctrine\\Types\\JsonType',
                    'commented' => NULL,
                ],
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
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
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
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'sonata.core.flashmessage.manager.class' => 'Sonata\\Twig\\FlashMessage\\FlashManager',
            'sonata.core.twig.extension.flashmessage.class' => 'Sonata\\Twig\\Extension\\FlashMessageExtension',
            'sonata.core.form_type' => 'standard',
            'sonata.core.form.mapping.type' => [

            ],
            'sonata.core.form.mapping.extension' => [

            ],
            'sonata.block.service.container.class' => 'Sonata\\BlockBundle\\Block\\Service\\ContainerBlockService',
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.service.menu.class' => 'Sonata\\BlockBundle\\Block\\Service\\MenuBlockService',
            'sonata.block.service.template.class' => 'Sonata\\BlockBundle\\Block\\Service\\TemplateBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata.block.container.types' => [
                0 => 'sonata.block.service.container',
                1 => 'sonata.page.block.container',
                2 => 'sonata.dashboard.block.container',
                3 => 'cmf.block.container',
                4 => 'cmf.block.slideshow',
            ],
            'sonata_block.blocks' => [
                'sonata.admin.block.admin_list' => [
                    'contexts' => [
                        0 => 'admin',
                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.user.block.menu' => [
                    'contexts' => [
                        0 => 'cms',
                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.user.block.account' => [
                    'contexts' => [
                        0 => 'cms',
                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.service.text' => [
                    'contexts' => [
                        0 => 'cms',
                    ],
                    'templates' => [

                    ],
                    'cache' => 'sonata.cache.noop',
                    'settings' => [

                    ],
                ],
                'sonata.block.dash' => [
                    'contexts' => [
                        0 => 'cms',
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
                0 => 'sonata.admin.block.admin_list',
                1 => 'sonata.user.block.menu',
                2 => 'sonata.user.block.account',
                3 => 'sonata.block.service.text',
                4 => 'sonata.block.dash',
            ],
            'sonata_block.cache_blocks' => [
                'by_type' => [
                    'sonata.admin.block.admin_list' => 'sonata.cache.noop',
                    'sonata.user.block.menu' => 'sonata.cache.noop',
                    'sonata.user.block.account' => 'sonata.cache.noop',
                    'sonata.block.service.text' => 'sonata.cache.noop',
                    'sonata.block.dash' => 'sonata.cache.noop',
                ],
            ],
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => [

            ],
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => [

            ],
            'knp_menu.renderer.twig.template' => '@KnpMenu/menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'sonata.admin.manipulator.acl.object.orm.class' => 'Sonata\\DoctrineORMAdminBundle\\Util\\ObjectAclManipulator',
            'sonata_doctrine_orm_admin.entity_manager' => NULL,
            'sonata_doctrine_orm_admin.templates' => [
                'types' => [
                    'list' => [
                        'array' => '@SonataAdmin/CRUD/list_array.html.twig',
                        'boolean' => '@SonataAdmin/CRUD/list_boolean.html.twig',
                        'date' => '@SonataAdmin/CRUD/list_date.html.twig',
                        'time' => '@SonataAdmin/CRUD/list_time.html.twig',
                        'datetime' => '@SonataAdmin/CRUD/list_datetime.html.twig',
                        'text' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'textarea' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'email' => '@SonataAdmin/CRUD/list_email.html.twig',
                        'trans' => '@SonataAdmin/CRUD/list_trans.html.twig',
                        'string' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'smallint' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'bigint' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'integer' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'decimal' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'identifier' => '@SonataAdmin/CRUD/list_string.html.twig',
                        'currency' => '@SonataAdmin/CRUD/list_currency.html.twig',
                        'percent' => '@SonataAdmin/CRUD/list_percent.html.twig',
                        'choice' => '@SonataAdmin/CRUD/list_choice.html.twig',
                        'url' => '@SonataAdmin/CRUD/list_url.html.twig',
                        'html' => '@SonataAdmin/CRUD/list_html.html.twig',
                    ],
                    'show' => [
                        'array' => '@SonataAdmin/CRUD/show_array.html.twig',
                        'boolean' => '@SonataAdmin/CRUD/show_boolean.html.twig',
                        'date' => '@SonataAdmin/CRUD/show_date.html.twig',
                        'time' => '@SonataAdmin/CRUD/show_time.html.twig',
                        'datetime' => '@SonataAdmin/CRUD/show_datetime.html.twig',
                        'text' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'email' => '@SonataAdmin/CRUD/show_email.html.twig',
                        'trans' => '@SonataAdmin/CRUD/show_trans.html.twig',
                        'string' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'smallint' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'bigint' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'integer' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'decimal' => '@SonataAdmin/CRUD/base_show_field.html.twig',
                        'currency' => '@SonataAdmin/CRUD/show_currency.html.twig',
                        'percent' => '@SonataAdmin/CRUD/show_percent.html.twig',
                        'choice' => '@SonataAdmin/CRUD/show_choice.html.twig',
                        'url' => '@SonataAdmin/CRUD/show_url.html.twig',
                        'html' => '@SonataAdmin/CRUD/show_html.html.twig',
                    ],
                ],
                'form' => [
                    0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig',
                ],
                'filter' => [
                    0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig',
                ],
            ],
            'sonata.admin.twig.extension.x_editable_type_mapping' => [
                'choice' => 'select',
                'boolean' => 'select',
                'text' => 'text',
                'textarea' => 'textarea',
                'html' => 'textarea',
                'email' => 'email',
                'string' => 'text',
                'smallint' => 'text',
                'bigint' => 'text',
                'integer' => 'number',
                'decimal' => 'number',
                'currency' => 'number',
                'percent' => 'number',
                'url' => 'url',
                'date' => 'date',
            ],
            'sonata.admin.configuration.global_search.empty_boxes' => 'show',
            'sonata.admin.configuration.global_search.case_sensitive' => true,
            'sonata.admin.configuration.templates' => [
                'user_block' => '@SonataUser/Admin/Core/user_block.html.twig',
                'layout' => 'AppBundle::standard_layout.html.twig',
                'add_block' => '@SonataAdmin/Core/add_block.html.twig',
                'ajax' => '@SonataAdmin/ajax_layout.html.twig',
                'dashboard' => '@SonataAdmin/Core/dashboard.html.twig',
                'search' => '@SonataAdmin/Core/search.html.twig',
                'list' => '@SonataAdmin/CRUD/list.html.twig',
                'filter' => '@SonataAdmin/Form/filter_admin_fields.html.twig',
                'show' => '@SonataAdmin/CRUD/show.html.twig',
                'show_compare' => '@SonataAdmin/CRUD/show_compare.html.twig',
                'edit' => '@SonataAdmin/CRUD/edit.html.twig',
                'preview' => '@SonataAdmin/CRUD/preview.html.twig',
                'history' => '@SonataAdmin/CRUD/history.html.twig',
                'acl' => '@SonataAdmin/CRUD/acl.html.twig',
                'history_revision_timestamp' => '@SonataAdmin/CRUD/history_revision_timestamp.html.twig',
                'action' => '@SonataAdmin/CRUD/action.html.twig',
                'select' => '@SonataAdmin/CRUD/list__select.html.twig',
                'list_block' => '@SonataAdmin/Block/block_admin_list.html.twig',
                'search_result_block' => '@SonataAdmin/Block/block_search_result.html.twig',
                'short_object_description' => '@SonataAdmin/Helper/short-object-description.html.twig',
                'delete' => '@SonataAdmin/CRUD/delete.html.twig',
                'batch' => '@SonataAdmin/CRUD/list__batch.html.twig',
                'batch_confirmation' => '@SonataAdmin/CRUD/batch_confirmation.html.twig',
                'inner_list_row' => '@SonataAdmin/CRUD/list_inner_row.html.twig',
                'outer_list_rows_mosaic' => '@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig',
                'outer_list_rows_list' => '@SonataAdmin/CRUD/list_outer_rows_list.html.twig',
                'outer_list_rows_tree' => '@SonataAdmin/CRUD/list_outer_rows_tree.html.twig',
                'base_list_field' => '@SonataAdmin/CRUD/base_list_field.html.twig',
                'pager_links' => '@SonataAdmin/Pager/links.html.twig',
                'pager_results' => '@SonataAdmin/Pager/results.html.twig',
                'tab_menu_template' => '@SonataAdmin/Core/tab_menu_template.html.twig',
                'knp_menu_template' => '@SonataAdmin/Menu/sonata_menu.html.twig',
                'action_create' => '@SonataAdmin/CRUD/dashboard__action_create.html.twig',
                'button_acl' => '@SonataAdmin/Button/acl_button.html.twig',
                'button_create' => '@SonataAdmin/Button/create_button.html.twig',
                'button_edit' => '@SonataAdmin/Button/edit_button.html.twig',
                'button_history' => '@SonataAdmin/Button/history_button.html.twig',
                'button_list' => '@SonataAdmin/Button/list_button.html.twig',
                'button_show' => '@SonataAdmin/Button/show_button.html.twig',
            ],
            'sonata.admin.configuration.admin_services' => [

            ],
            'sonata.admin.configuration.dashboard_groups' => [

            ],
            'sonata.admin.configuration.dashboard_blocks' => [
                0 => [
                    'position' => 'top',
                    'type' => 'sonata.block.dash',
                    'class' => 'col-lg-12',
                    'roles' => [

                    ],
                    'settings' => [

                    ],
                ],
            ],
            'sonata.admin.configuration.sort_admins' => false,
            'sonata.admin.configuration.mosaic_background' => 'data:image/png;base64,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',
            'sonata.admin.configuration.default_group' => 'default',
            'sonata.admin.configuration.default_label_catalogue' => 'SonataAdminBundle',
            'sonata.admin.configuration.default_icon' => '<i class="fa fa-folder"></i>',
            'sonata.admin.configuration.breadcrumbs' => [
                'child_admin_route' => 'edit',
            ],
            'sonata.admin.security.acl_user_manager' => 'fos_user.user_manager',
            'sonata.admin.configuration.security.role_admin' => 'ROLE_SONATA_ADMIN',
            'sonata.admin.configuration.security.role_super_admin' => 'ROLE_SUPER_ADMIN',
            'sonata.admin.configuration.security.information' => [
                'EDIT' => [
                    0 => 'EDIT',
                ],
                'LIST' => [
                    0 => 'LIST',
                ],
                'CREATE' => [
                    0 => 'CREATE',
                ],
                'VIEW' => [
                    0 => 'VIEW',
                ],
                'DELETE' => [
                    0 => 'DELETE',
                ],
                'EXPORT' => [
                    0 => 'EXPORT',
                ],
                'ALL' => [
                    0 => 'ALL',
                ],
            ],
            'sonata.admin.configuration.security.admin_permissions' => [
                0 => 'CREATE',
                1 => 'LIST',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'EXPORT',
                5 => 'OPERATOR',
                6 => 'MASTER',
            ],
            'sonata.admin.configuration.security.object_permissions' => [
                0 => 'VIEW',
                1 => 'EDIT',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'OPERATOR',
                5 => 'MASTER',
                6 => 'OWNER',
            ],
            'sonata.admin.security.handler.noop.class' => 'Sonata\\AdminBundle\\Security\\Handler\\NoopSecurityHandler',
            'sonata.admin.security.handler.role.class' => 'Sonata\\AdminBundle\\Security\\Handler\\RoleSecurityHandler',
            'sonata.admin.security.handler.acl.class' => 'Sonata\\AdminBundle\\Security\\Handler\\AclSecurityHandler',
            'sonata.admin.security.mask.builder.class' => 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder',
            'sonata.admin.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminAclManipulator',
            'sonata.admin.object.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminObjectAclManipulator',
            'sonata.admin.extension.map' => [
                'admins' => [

                ],
                'excludes' => [

                ],
                'implements' => [

                ],
                'extends' => [

                ],
                'instanceof' => [

                ],
                'uses' => [

                ],
            ],
            'sonata.admin.configuration.filters.persist' => false,
            'sonata.admin.configuration.filters.persister' => 'sonata.admin.filter_persister.session',
            'sonata.admin.configuration.show.mosaic.button' => true,
            'sonata.admin.configuration.translate_group_label' => false,
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Resetting/email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'Application\\Sonata\\UserBundle\\Entity\\User',
            'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => [
                0 => 'Profile',
                1 => 'Default',
            ],
            'fos_user.registration.confirmation.from_email' => [
                'no-reply@appkenya.com' => 'African Partnership Pool',
            ],
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => [
                0 => 'Registration',
                1 => 'Default',
            ],
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => [
                0 => 'ChangePassword',
                1 => 'Default',
            ],
            'fos_user.resetting.email.from_email' => [
                'no-reply@appkenya.com' => 'African Partnership Pool',
            ],
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => [
                0 => 'ResetPassword',
                1 => 'Default',
            ],
            'fos_user.group_manager.class' => 'FOS\\UserBundle\\Doctrine\\GroupManager',
            'fos_user.model.group.class' => 'Application\\Sonata\\UserBundle\\Entity\\Group',
            'fos_user.group.form.type' => 'FOS\\UserBundle\\Form\\Type\\GroupFormType',
            'fos_user.group.form.name' => 'fos_user_group_form',
            'fos_user.group.form.validation_groups' => [
                0 => 'Registration',
                1 => 'Default',
            ],
            'sonata.user.admin.groupname' => 'sonata_user',
            'sonata.user.admin.label_catalogue' => 'SonataUserBundle',
            'sonata.user.admin.groupicon' => '<i class=\'fa fa-users\'></i>',
            'sonata.user.admin.user.class' => 'Sonata\\UserBundle\\Admin\\Entity\\UserAdmin',
            'sonata.user.admin.group.class' => 'Sonata\\UserBundle\\Admin\\Entity\\GroupAdmin',
            'sonata.user.admin.user.entity' => 'Application\\Sonata\\UserBundle\\Entity\\User',
            'sonata.user.admin.group.entity' => 'Application\\Sonata\\UserBundle\\Entity\\Group',
            'sonata.user.admin.user.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.group.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.user.controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController',
            'sonata.user.admin.group.controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController',
            'sonata.user.default_avatar' => 'bundles/sonatauser/default_avatar.png',
            'sonata.user.impersonating' => [
                'route' => 'sonata_admin_dashboard',
                'parameters' => [

                ],
            ],
            'sonata.user.google.authenticator.enabled' => false,
            'knp_snappy.pdf.binary' => '/usr/local/bin/wkhtmltopdf',
            'knp_snappy.pdf.options' => [

            ],
            'knp_snappy.pdf.env' => [

            ],
            'knp_snappy.image.binary' => '/usr/local/bin/wkhtmltoimage',
            'knp_snappy.image.options' => [

            ],
            'knp_snappy.image.env' => [

            ],
            'fos_oauth_server.server.class' => 'OAuth2\\OAuth2',
            'fos_oauth_server.security.authentication.provider.class' => 'FOS\\OAuthServerBundle\\Security\\Authentication\\Provider\\OAuthProvider',
            'fos_oauth_server.security.authentication.listener.class' => 'FOS\\OAuthServerBundle\\Security\\Firewall\\OAuthListener',
            'fos_oauth_server.security.entry_point.class' => 'FOS\\OAuthServerBundle\\Security\\EntryPoint\\OAuthEntryPoint',
            'fos_oauth_server.server.options' => [
                'supported_scopes' => 'user',
            ],
            'fos_oauth_server.model_manager_name' => NULL,
            'fos_oauth_server.model.client.class' => 'AppBundle\\Entity\\Client',
            'fos_oauth_server.model.access_token.class' => 'AppBundle\\Entity\\AccessToken',
            'fos_oauth_server.model.refresh_token.class' => 'AppBundle\\Entity\\RefreshToken',
            'fos_oauth_server.model.auth_code.class' => 'AppBundle\\Entity\\AuthCode',
            'fos_oauth_server.template.engine' => 'twig',
            'fos_oauth_server.authorize.form.type' => 'FOS\\OAuthServerBundle\\Form\\Type\\AuthorizeFormType',
            'fos_oauth_server.authorize.form.name' => 'fos_oauth_server_authorize_form',
            'fos_oauth_server.authorize.form.validation_groups' => [
                0 => 'Authorize',
                1 => 'Default',
            ],
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => [

            ],
            'assetic.bundles' => [
                0 => 'FrameworkBundle',
                1 => 'SecurityBundle',
                2 => 'TwigBundle',
                3 => 'MonologBundle',
                4 => 'SwiftmailerBundle',
                5 => 'DoctrineBundle',
                6 => 'SensioFrameworkExtraBundle',
                7 => 'AppBundle',
                8 => 'SonataCoreBundle',
                9 => 'SonataBlockBundle',
                10 => 'KnpMenuBundle',
                11 => 'SonataDoctrineORMAdminBundle',
                12 => 'SonataAdminBundle',
                13 => 'SonataEasyExtendsBundle',
                14 => 'FOSUserBundle',
                15 => 'SonataUserBundle',
                16 => 'ApplicationSonataUserBundle',
                17 => 'KnpSnappyBundle',
                18 => 'FOSOAuthServerBundle',
                19 => 'IvoryCKEditorBundle',
                20 => 'AsseticBundle',
                21 => 'ExpertCoderSwiftmailerSendGridBundle',
                22 => 'HttplugBundle',
                23 => 'HWIOAuthBundle',
                24 => 'DebugBundle',
                25 => 'WebProfilerBundle',
                26 => 'SensioDistributionBundle',
                27 => 'MakerBundle',
                28 => 'SensioGeneratorBundle',
                29 => 'WebServerBundle',
            ],
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => true,
            'assetic.enable_profiler' => false,
            'assetic.variables' => [

            ],
            'assetic.java.bin' => 'C:\\Program Files (x86)\\Common Files\\Oracle\\Java\\javapath\\java.EXE',
            'assetic.node.bin' => 'C:\\Program Files\\nodejs\\\\node.EXE',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.reactjsx.bin' => '/usr/bin/jsx',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.filter.jsqueeze.single_line' => true,
            'assetic.filter.jsqueeze.keep_important_comments' => true,
            'assetic.filter.jsqueeze.special_var_rx' => false,
            'assetic.twig_extension.functions' => [

            ],
            'assetic.controller.class' => 'Symfony\\Bundle\\AsseticBundle\\Controller\\AsseticController',
            'assetic.routing_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Routing\\AsseticLoader',
            'assetic.cache.class' => 'Assetic\\Cache\\FilesystemCache',
            'assetic.use_controller_worker.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Worker\\UseControllerWorker',
            'assetic.request_listener.class' => 'Symfony\\Bundle\\AsseticBundle\\EventListener\\RequestListener',
            'expertcoder_swiftmailer_sendgrid.api_key' => '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',
            'expertcoder_swiftmailer_sendgrid.categories' => [

            ],
            'expertcoder_swiftmailer_sendgrid.sandbox_mode' => false,
            'hwi_oauth.authentication.listener.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\Firewall\\OAuthListener',
            'hwi_oauth.authentication.provider.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\Authentication\\Provider\\OAuthProvider',
            'hwi_oauth.authentication.entry_point.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\EntryPoint\\OAuthEntryPoint',
            'hwi_oauth.user.provider.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\OAuthUserProvider',
            'hwi_oauth.user.provider.entity.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\EntityUserProvider',
            'hwi_oauth.user.provider.fosub_bridge.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\FOSUBUserProvider',
            'hwi_oauth.registration.form.handler.fosub_bridge.class' => 'HWI\\Bundle\\OAuthBundle\\Form\\FOSUBRegistrationFormHandler',
            'hwi_oauth.resource_owner.oauth1.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GenericOAuth1ResourceOwner',
            'hwi_oauth.resource_owner.oauth2.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GenericOAuth2ResourceOwner',
            'hwi_oauth.resource_owner.amazon.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\AmazonResourceOwner',
            'hwi_oauth.resource_owner.asana.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\AsanaResourceOwner',
            'hwi_oauth.resource_owner.auth0.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\Auth0ResourceOwner',
            'hwi_oauth.resource_owner.azure.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\AzureResourceOwner',
            'hwi_oauth.resource_owner.bitbucket.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BitbucketResourceOwner',
            'hwi_oauth.resource_owner.bitbucket2.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\Bitbucket2ResourceOwner',
            'hwi_oauth.resource_owner.bitly.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BitlyResourceOwner',
            'hwi_oauth.resource_owner.box.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BoxResourceOwner',
            'hwi_oauth.resource_owner.bufferapp.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BufferAppResourceOwner',
            'hwi_oauth.resource_owner.clever.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\CleverResourceOwner',
            'hwi_oauth.resource_owner.dailymotion.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DailymotionResourceOwner',
            'hwi_oauth.resource_owner.deviantart.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DeviantartResourceOwner',
            'hwi_oauth.resource_owner.deezer.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DeezerResourceOwner',
            'hwi_oauth.resource_owner.discogs.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DiscogsResourceOwner',
            'hwi_oauth.resource_owner.disqus.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DisqusResourceOwner',
            'hwi_oauth.resource_owner.dropbox.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DropboxResourceOwner',
            'hwi_oauth.resource_owner.eve_online.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\EveOnlineResourceOwner',
            'hwi_oauth.resource_owner.eventbrite.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\EventbriteResourceOwner',
            'hwi_oauth.resource_owner.facebook.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FacebookResourceOwner',
            'hwi_oauth.resource_owner.fiware.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FiwareResourceOwner',
            'hwi_oauth.resource_owner.flickr.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FlickrResourceOwner',
            'hwi_oauth.resource_owner.foursquare.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FoursquareResourceOwner',
            'hwi_oauth.resource_owner.github.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GitHubResourceOwner',
            'hwi_oauth.resource_owner.gitlab.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GitLabResourceOwner',
            'hwi_oauth.resource_owner.google.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GoogleResourceOwner',
            'hwi_oauth.resource_owner.youtube.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YoutubeResourceOwner',
            'hwi_oauth.resource_owner.hubic.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\HubicResourceOwner',
            'hwi_oauth.resource_owner.instagram.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\InstagramResourceOwner',
            'hwi_oauth.resource_owner.jawbone.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\JawboneResourceOwner',
            'hwi_oauth.resource_owner.jira.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\JiraResourceOwner',
            'hwi_oauth.resource_owner.linkedin.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\LinkedinResourceOwner',
            'hwi_oauth.resource_owner.mailru.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\MailRuResourceOwner',
            'hwi_oauth.resource_owner.office365.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\Office365ResourceOwner',
            'hwi_oauth.resource_owner.paypal.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\PaypalResourceOwner',
            'hwi_oauth.resource_owner.qq.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\QQResourceOwner',
            'hwi_oauth.resource_owner.reddit.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\RedditResourceOwner',
            'hwi_oauth.resource_owner.runkeeper.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\RunKeeperResourceOwner',
            'hwi_oauth.resource_owner.salesforce.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SalesforceResourceOwner',
            'hwi_oauth.resource_owner.sensio_connect.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SensioConnectResourceOwner',
            'hwi_oauth.resource_owner.sina_weibo.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SinaWeiboResourceOwner',
            'hwi_oauth.resource_owner.slack.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SlackResourceOwner',
            'hwi_oauth.resource_owner.spotify.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SpotifyResourceOwner',
            'hwi_oauth.resource_owner.soundcloud.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SoundcloudResourceOwner',
            'hwi_oauth.resource_owner.stack_exchange.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StackExchangeResourceOwner',
            'hwi_oauth.resource_owner.stereomood.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StereomoodResourceOwner',
            'hwi_oauth.resource_owner.strava.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StravaResourceOwner',
            'hwi_oauth.resource_owner.toshl.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\ToshlResourceOwner',
            'hwi_oauth.resource_owner.trakt.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TraktResourceOwner',
            'hwi_oauth.resource_owner.trello.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TrelloResourceOwner',
            'hwi_oauth.resource_owner.twitch.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TwitchResourceOwner',
            'hwi_oauth.resource_owner.twitter.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TwitterResourceOwner',
            'hwi_oauth.resource_owner.vkontakte.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\VkontakteResourceOwner',
            'hwi_oauth.resource_owner.windows_live.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WindowsLiveResourceOwner',
            'hwi_oauth.resource_owner.wordpress.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WordpressResourceOwner',
            'hwi_oauth.resource_owner.wunderlist.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WunderlistResourceOwner',
            'hwi_oauth.resource_owner.xing.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\XingResourceOwner',
            'hwi_oauth.resource_owner.yahoo.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YahooResourceOwner',
            'hwi_oauth.resource_owner.yandex.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YandexResourceOwner',
            'hwi_oauth.resource_owner.odnoklassniki.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\OdnoklassnikiResourceOwner',
            'hwi_oauth.resource_owner.37signals.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\ThirtySevenSignalsResourceOwner',
            'hwi_oauth.resource_owner.itembase.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\ItembaseResourceOwner',
            'hwi_oauth.resource_ownermap.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\ResourceOwnerMap',
            'hwi_oauth.security.oauth_utils.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\OAuthUtils',
            'hwi_oauth.storage.session.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\RequestDataStorage\\SessionStorage',
            'hwi_oauth.templating.helper.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Templating\\Helper\\OAuthHelper',
            'hwi_oauth.twig.extension.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Twig\\Extension\\OAuthExtension',
            'hwi_oauth.firewall_names' => [
                0 => 'main',
            ],
            'hwi_oauth.target_path_parameter' => NULL,
            'hwi_oauth.use_referer' => false,
            'hwi_oauth.failed_use_referer' => false,
            'hwi_oauth.failed_auth_path' => 'hwi_oauth_connect',
            'hwi_oauth.grant_rule' => 'IS_AUTHENTICATED_REMEMBERED',
            'hwi_oauth.resource_owners' => [
                'azure' => 'azure',
            ],
            'hwi_oauth.connect' => true,
            'hwi_oauth.fosub_enabled' => true,
            'hwi_oauth.connect.confirmation' => true,
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'data_collector.templates' => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.validator' => [
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.form' => [
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.translation' => [
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'data_collector.doctrine' => [
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ],
                'swiftmailer.data_collector' => [
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ],
                'data_collector.dump' => [
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ],
                'httplug.collector.collector' => [
                    0 => 'httplug',
                    1 => '@Httplug/webprofiler.html.twig',
                ],
                'sonata.block.data_collector' => [
                    0 => 'block',
                    1 => '@SonataBlock/Profiler/block.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ],
            ],
            'sonata.core.form.types' => [
                0 => 'form.type.form',
                1 => 'form.type.choice',
                2 => 'form.type.file',
                3 => 'form.type.entity',
                4 => 'sonata.core.form.type.array_legacy',
                5 => 'sonata.core.form.type.boolean_legacy',
                6 => 'sonata.core.form.type.collection_legacy',
                7 => 'sonata.core.form.type.translatable_choice',
                8 => 'sonata.core.form.type.date_range_legacy',
                9 => 'sonata.core.form.type.datetime_range_legacy',
                10 => 'sonata.core.form.type.date_picker_legacy',
                11 => 'sonata.core.form.type.datetime_picker_legacy',
                12 => 'sonata.core.form.type.date_range_picker_legacy',
                13 => 'sonata.core.form.type.datetime_range_picker_legacy',
                14 => 'sonata.core.form.type.equal_legacy',
                15 => 'sonata.core.form.type.color_selector',
                16 => 'sonata.core.form.type.color_legacy',
                17 => 'sonata.core.form.type.array',
                18 => 'sonata.core.form.type.boolean',
                19 => 'sonata.core.form.type.collection',
                20 => 'sonata.core.form.type.date_range',
                21 => 'sonata.core.form.type.datetime_range',
                22 => 'sonata.core.form.type.date_picker',
                23 => 'sonata.core.form.type.datetime_picker',
                24 => 'sonata.core.form.type.date_range_picker',
                25 => 'sonata.core.form.type.datetime_range_picker',
                26 => 'sonata.core.form.type.equal',
                27 => 'sonata.block.form.type.block',
                28 => 'sonata.block.form.type.container_template',
                29 => 'sonata.admin.form.type.admin',
                30 => 'sonata.admin.form.type.model_choice',
                31 => 'sonata.admin.form.type.model_list',
                32 => 'sonata.admin.form.type.model_reference',
                33 => 'sonata.admin.form.type.model_hidden',
                34 => 'sonata.admin.form.type.model_autocomplete',
                35 => 'sonata.admin.form.type.collection',
                36 => 'sonata.admin.doctrine_orm.form.type.choice_field_mask',
                37 => 'sonata.admin.form.filter.type.number',
                38 => 'sonata.admin.form.filter.type.choice',
                39 => 'sonata.admin.form.filter.type.default',
                40 => 'sonata.admin.form.filter.type.date',
                41 => 'sonata.admin.form.filter.type.daterange',
                42 => 'sonata.admin.form.filter.type.datetime',
                43 => 'sonata.admin.form.filter.type.datetime_range',
                44 => 'fos_user.username_form_type',
                45 => 'fos_user.profile.form.type',
                46 => 'fos_user.registration.form.type',
                47 => 'fos_user.change_password.form.type',
                48 => 'fos_user.resetting.form.type',
                49 => 'fos_user.group.form.type',
                50 => 'sonata.user.form.type.security_roles',
                51 => 'sonata.user.form.roles_matrix_type',
                52 => 'sonata.user.form.gender_list',
                53 => 'fos_oauth_server.authorize.form.type',
                54 => 'ivory_ck_editor.form.type',
            ],
            'sonata.core.form.type_extensions' => [
                0 => 'form.type_extension.form.transformation_failure_handling',
                1 => 'form.type_extension.form.http_foundation',
                2 => 'form.type_extension.form.validator',
                3 => 'form.type_extension.repeated.validator',
                4 => 'form.type_extension.submit.validator',
                5 => 'form.type_extension.upload.validator',
                6 => 'form.type_extension.csrf',
                7 => 'form.type_extension.form.data_collector',
                8 => 'sonata.admin.form.extension.field',
                9 => 'sonata.admin.form.extension.field.mopa',
                10 => 'sonata.admin.form.extension.choice',
            ],
            'console.command.ids' => [
                'console.command.appbundle_command_addtogroupcommand' => 'console.command.appbundle_command_addtogroupcommand',
                'console.command.appbundle_command_addverificationcommand' => 'console.command.appbundle_command_addverificationcommand',
                'console.command.appbundle_command_closerequestscommand' => 'console.command.appbundle_command_closerequestscommand',
                'console.command.appbundle_command_confirmationcommand' => 'console.command.appbundle_command_confirmationcommand',
                'console.command.appbundle_command_createbronzecommand' => 'console.command.appbundle_command_createbronzecommand',
                'console.command.appbundle_command_createoauthclientcommand' => 'console.command.appbundle_command_createoauthclientcommand',
                'console.command.appbundle_command_dbbackupcommand' => 'console.command.appbundle_command_dbbackupcommand',
                'console.command.appbundle_command_importsupplierscommand' => 'console.command.appbundle_command_importsupplierscommand',
                'console.command.appbundle_command_importtenderscommand' => 'console.command.appbundle_command_importtenderscommand',
                'console.command.appbundle_command_importupdatecommand' => 'console.command.appbundle_command_importupdatecommand',
                'console.command.appbundle_command_importupdatevalidationcommand' => 'console.command.appbundle_command_importupdatevalidationcommand',
                'console.command.appbundle_command_invoicecommand' => 'console.command.appbundle_command_invoicecommand',
                'console.command.appbundle_command_migratereferencescommand' => 'console.command.appbundle_command_migratereferencescommand',
                'console.command.appbundle_command_migratetoazurecommand' => 'console.command.appbundle_command_migratetoazurecommand',
                'console.command.appbundle_command_organisationtosourcedoggcommand' => 'console.command.appbundle_command_organisationtosourcedoggcommand',
                'console.command.appbundle_command_patacommand' => 'console.command.appbundle_command_patacommand',
                'console.command.appbundle_command_pushtoapicommand' => 'console.command.appbundle_command_pushtoapicommand',
                'console.command.appbundle_command_requestsremindercommand' => 'console.command.appbundle_command_requestsremindercommand',
                'console.command.appbundle_command_runbronzecommand' => 'console.command.appbundle_command_runbronzecommand',
                'console.command.appbundle_command_runcrbcommand' => 'console.command.appbundle_command_runcrbcommand',
                'console.command.appbundle_command_smscommand' => 'console.command.appbundle_command_smscommand',
                'console.command.appbundle_command_sendemailactivationcommand' => 'console.command.appbundle_command_sendemailactivationcommand',
                'console.command.appbundle_command_subscriptionremindercommand' => 'console.command.appbundle_command_subscriptionremindercommand',
                'console.command.appbundle_command_updatesubscriptioncommand' => 'console.command.appbundle_command_updatesubscriptioncommand',
                'console.command.appbundle_command_updatesupplierscommand' => 'console.command.appbundle_command_updatesupplierscommand',
                'console.command.appbundle_command_usertosourcedoggcommand' => 'console.command.appbundle_command_usertosourcedoggcommand',
                'console.command.appbundle_command_createoauthclientcommand_app.command.create_oauth_client' => 'app.command.create_oauth_client',
                'console.command.symfony_bundle_frameworkbundle_command_aboutcommand' => 'console.command.about',
                'console.command.symfony_bundle_frameworkbundle_command_assetsinstallcommand' => 'console.command.assets_install',
                'console.command.symfony_bundle_frameworkbundle_command_cacheclearcommand' => 'console.command.cache_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolclearcommand' => 'console.command.cache_pool_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolprunecommand' => 'console.command.cache_pool_prune',
                'console.command.symfony_bundle_frameworkbundle_command_cachewarmupcommand' => 'console.command.cache_warmup',
                'console.command.symfony_bundle_frameworkbundle_command_configdebugcommand' => 'console.command.config_debug',
                'console.command.symfony_bundle_frameworkbundle_command_configdumpreferencecommand' => 'console.command.config_dump_reference',
                'console.command.symfony_bundle_frameworkbundle_command_containerdebugcommand' => 'console.command.container_debug',
                'console.command.symfony_bundle_frameworkbundle_command_debugautowiringcommand' => 'console.command.debug_autowiring',
                'console.command.symfony_bundle_frameworkbundle_command_eventdispatcherdebugcommand' => 'console.command.event_dispatcher_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routerdebugcommand' => 'console.command.router_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routermatchcommand' => 'console.command.router_match',
                'console.command.symfony_bundle_frameworkbundle_command_translationdebugcommand' => 'console.command.translation_debug',
                'console.command.symfony_bundle_frameworkbundle_command_translationupdatecommand' => 'console.command.translation_update',
                'console.command.symfony_bundle_frameworkbundle_command_xlifflintcommand' => 'console.command.xliff_lint',
                'console.command.symfony_bundle_frameworkbundle_command_yamllintcommand' => 'console.command.yaml_lint',
                'console.command.symfony_component_form_command_debugcommand' => 'console.command.form_debug',
                'console.command.symfony_bundle_securitybundle_command_initaclcommand' => 'security.command.init_acl',
                'console.command.symfony_bundle_securitybundle_command_setaclcommand' => 'security.command.set_acl',
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'security.command.user_password_encoder',
                'console.command.symfony_bridge_twig_command_debugcommand' => 'twig.command.debug',
                'console.command.symfony_bundle_twigbundle_command_lintcommand' => 'twig.command.lint',
                'console.command.symfony_bundle_swiftmailerbundle_command_debugcommand' => 'swiftmailer.command.debug',
                'console.command.symfony_bundle_swiftmailerbundle_command_newemailcommand' => 'swiftmailer.command.new_email',
                'console.command.symfony_bundle_swiftmailerbundle_command_sendemailcommand' => 'swiftmailer.command.send_email',
                'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand',
                'console.command.doctrine_bundle_doctrinebundle_command_createdatabasedoctrinecommand' => 'doctrine.database_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_dropdatabasedoctrinecommand' => 'doctrine.database_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_generateentitiesdoctrinecommand' => 'doctrine.generate_entities_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_runsqldoctrinecommand' => 'doctrine.query_sql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearmetadatacachedoctrinecommand' => 'doctrine.cache_clear_metadata_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearquerycachedoctrinecommand' => 'doctrine.cache_clear_query_cache_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearresultcachedoctrinecommand' => 'doctrine.cache_clear_result_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_collectionregiondoctrinecommand' => 'doctrine.cache_collection_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_convertmappingdoctrinecommand' => 'doctrine.mapping_convert_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_createschemadoctrinecommand' => 'doctrine.schema_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_dropschemadoctrinecommand' => 'doctrine.schema_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_ensureproductionsettingsdoctrinecommand' => 'doctrine.ensure_production_settings_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_entityregioncachedoctrinecommand' => 'doctrine.clear_entity_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_importdoctrinecommand' => 'doctrine.database_import_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_infodoctrinecommand' => 'doctrine.mapping_info_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_queryregioncachedoctrinecommand' => 'doctrine.clear_query_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_rundqldoctrinecommand' => 'doctrine.query_dql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_updateschemadoctrinecommand' => 'doctrine.schema_update_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_validateschemacommand' => 'doctrine.schema_validate_command',
                'console.command.doctrine_bundle_doctrinebundle_command_importmappingdoctrinecommand' => 'doctrine.mapping_import_command',
                'console.command.sonata_corebundle_command_sonatadumpdoctrinemetacommand' => 'console.command.sonata_corebundle_command_sonatadumpdoctrinemetacommand',
                'console.command.sonata_corebundle_command_sonatalistformmappingcommand' => 'console.command.sonata_corebundle_command_sonatalistformmappingcommand',
                'console.command.sonata_blockbundle_command_debugblockscommand' => 'Sonata\\BlockBundle\\Command\\DebugBlocksCommand',
                'console.command.sonata_adminbundle_command_createclasscachecommand' => 'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand',
                'console.command.sonata_adminbundle_command_explainadmincommand' => 'Sonata\\AdminBundle\\Command\\ExplainAdminCommand',
                'console.command.sonata_adminbundle_command_generateadmincommand' => 'Sonata\\AdminBundle\\Command\\GenerateAdminCommand',
                'console.command.sonata_adminbundle_command_generateobjectaclcommand' => 'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand',
                'console.command.sonata_adminbundle_command_listadmincommand' => 'Sonata\\AdminBundle\\Command\\ListAdminCommand',
                'console.command.sonata_adminbundle_command_setupaclcommand' => 'Sonata\\AdminBundle\\Command\\SetupAclCommand',
                'console.command.sonata_easyextendsbundle_command_dumpmappingcommand' => 'Sonata\\EasyExtendsBundle\\Command\\DumpMappingCommand',
                'console.command.sonata_easyextendsbundle_command_generatecommand' => 'Sonata\\EasyExtendsBundle\\Command\\GenerateCommand',
                'console.command.fos_userbundle_command_activateusercommand' => 'fos_user.command.activate_user',
                'console.command.fos_userbundle_command_changepasswordcommand' => 'fos_user.command.change_password',
                'console.command.fos_userbundle_command_createusercommand' => 'fos_user.command.create_user',
                'console.command.fos_userbundle_command_deactivateusercommand' => 'fos_user.command.deactivate_user',
                'console.command.fos_userbundle_command_demoteusercommand' => 'fos_user.command.demote_user',
                'console.command.fos_userbundle_command_promoteusercommand' => 'fos_user.command.promote_user',
                'console.command.sonata_userbundle_command_twostepverificationcommand' => 'Sonata\\UserBundle\\Command\\TwoStepVerificationCommand',
                'console.command.fos_oauthserverbundle_command_cleancommand' => 'console.command.fos_oauthserverbundle_command_cleancommand',
                'console.command.fos_oauthserverbundle_command_createclientcommand' => 'console.command.fos_oauthserverbundle_command_createclientcommand',
                'console.command.ivory_ckeditorbundle_command_ckeditorinstallercommand' => 'console.command.ivory_ckeditorbundle_command_ckeditorinstallercommand',
                'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
                'console.command.symfony_bundle_webserverbundle_command_serverruncommand' => 'web_server.command.server_run',
                'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' => 'web_server.command.server_start',
                'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' => 'web_server.command.server_stop',
                'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' => 'web_server.command.server_status',
                'console.command.symfony_bundle_webserverbundle_command_serverlogcommand' => 'web_server.command.server_log',
                'console.command.symfony_bundle_makerbundle_command_makercommand' => 'maker.auto_command.make_migration',
            ],
            'console.lazy_command.ids' => [
                'console.command.about' => true,
                'console.command.assets_install' => true,
                'console.command.cache_clear' => true,
                'console.command.cache_pool_clear' => true,
                'console.command.cache_pool_prune' => true,
                'console.command.cache_warmup' => true,
                'console.command.config_debug' => true,
                'console.command.config_dump_reference' => true,
                'console.command.container_debug' => true,
                'console.command.debug_autowiring' => true,
                'console.command.event_dispatcher_debug' => true,
                'console.command.router_debug' => true,
                'console.command.router_match' => true,
                'console.command.translation_debug' => true,
                'console.command.translation_update' => true,
                'console.command.xliff_lint' => true,
                'console.command.yaml_lint' => true,
                'console.command.form_debug' => true,
                'security.command.init_acl' => true,
                'security.command.set_acl' => true,
                'security.command.user_password_encoder' => true,
                'twig.command.debug' => true,
                'twig.command.lint' => true,
                'swiftmailer.command.debug' => true,
                'swiftmailer.command.new_email' => true,
                'swiftmailer.command.send_email' => true,
                'doctrine.database_create_command' => true,
                'doctrine.database_drop_command' => true,
                'doctrine.generate_entities_command' => true,
                'doctrine.query_sql_command' => true,
                'doctrine.cache_clear_metadata_command' => true,
                'doctrine.cache_clear_query_cache_command' => true,
                'doctrine.cache_clear_result_command' => true,
                'doctrine.cache_collection_region_command' => true,
                'doctrine.mapping_convert_command' => true,
                'doctrine.schema_create_command' => true,
                'doctrine.schema_drop_command' => true,
                'doctrine.ensure_production_settings_command' => true,
                'doctrine.clear_entity_region_command' => true,
                'doctrine.database_import_command' => true,
                'doctrine.mapping_info_command' => true,
                'doctrine.clear_query_region_command' => true,
                'doctrine.query_dql_command' => true,
                'doctrine.schema_update_command' => true,
                'doctrine.schema_validate_command' => true,
                'doctrine.mapping_import_command' => true,
                'Sonata\\BlockBundle\\Command\\DebugBlocksCommand' => true,
                'Sonata\\AdminBundle\\Command\\CreateClassCacheCommand' => true,
                'Sonata\\AdminBundle\\Command\\ExplainAdminCommand' => true,
                'Sonata\\AdminBundle\\Command\\GenerateAdminCommand' => true,
                'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand' => true,
                'Sonata\\AdminBundle\\Command\\ListAdminCommand' => true,
                'Sonata\\AdminBundle\\Command\\SetupAclCommand' => true,
                'fos_user.command.activate_user' => true,
                'fos_user.command.change_password' => true,
                'fos_user.command.create_user' => true,
                'fos_user.command.deactivate_user' => true,
                'fos_user.command.demote_user' => true,
                'fos_user.command.promote_user' => true,
                'sensio_distribution.security_checker.command' => true,
                'web_server.command.server_run' => true,
                'web_server.command.server_start' => true,
                'web_server.command.server_stop' => true,
                'web_server.command.server_status' => true,
                'web_server.command.server_log' => true,
                'maker.auto_command.make_sonata_admin' => true,
                'maker.auto_command.make_auth' => true,
                'maker.auto_command.make_command' => true,
                'maker.auto_command.make_controller' => true,
                'maker.auto_command.make_crud' => true,
                'maker.auto_command.make_entity' => true,
                'maker.auto_command.make_fixtures' => true,
                'maker.auto_command.make_form' => true,
                'maker.auto_command.make_functional_test' => true,
                'maker.auto_command.make_registration_form' => true,
                'maker.auto_command.make_serializer_encoder' => true,
                'maker.auto_command.make_serializer_normalizer' => true,
                'maker.auto_command.make_subscriber' => true,
                'maker.auto_command.make_twig_extension' => true,
                'maker.auto_command.make_unit_test' => true,
                'maker.auto_command.make_validator' => true,
                'maker.auto_command.make_voter' => true,
                'maker.auto_command.make_user' => true,
                'maker.auto_command.make_migration' => true,
            ],
        ];
    }
}
