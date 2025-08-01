<?php

namespace ContainerWlVdSvm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_PimcoreWebdavService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.firewall.map.context.pimcore_webdav' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        return $container->privates['security.firewall.map.context.pimcore_webdav'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.context_listener.0'] ?? self::getSecurity_ContextListener_0Service($container));
            yield 2 => ($container->privates['debug.security.firewall.authenticator.pimcore_webdav'] ?? $container->load('getDebug_Security_Firewall_Authenticator_PimcoreWebdavService'));
            yield 3 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 4), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), ($container->privates['scheb_two_factor.security.authentication.trust_resolver'] ?? self::getSchebTwoFactor_Security_Authentication_TrustResolverService($container)), ($container->privates['security.http_utils'] ?? self::getSecurity_HttpUtilsService($container)), 'pimcore_webdav', ($container->privates['security.authenticator.http_basic.pimcore_webdav'] ?? $container->load('getSecurity_Authenticator_HttpBasic_PimcoreWebdavService')), NULL, NULL, ($container->services['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)), false), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('pimcore_webdav', 'security.user_checker', '.security.request_matcher.qKsx4bF', true, false, 'Pimcore\\Security\\User\\UserProvider', 'pimcore_webdav', 'security.authenticator.http_basic.pimcore_webdav', NULL, NULL, ['http_basic'], NULL, NULL));
    }
}
