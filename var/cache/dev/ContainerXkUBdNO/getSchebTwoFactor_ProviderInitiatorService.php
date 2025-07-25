<?php

namespace ContainerXkUBdNO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_ProviderInitiatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'scheb_two_factor.provider_initiator' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderInitiator
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->privates['scheb_two_factor.provider_initiator'] = $container->createProxy('TwoFactorProviderInitiatorGhostE85820f', static fn () => \TwoFactorProviderInitiatorGhostE85820f::createLazyGhost(static fn ($proxy) => self::do($container, $proxy)));
        }

        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Provider/TwoFactorProviderInitiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/Authentication/Token/TwoFactorTokenFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/Authentication/Token/TwoFactorTokenFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Provider/TwoFactorProviderDeciderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Provider/TwoFactorProviderDecider.php';

        return ($lazyLoad->__construct(($container->privates['scheb_two_factor.provider_registry'] ?? self::getSchebTwoFactor_ProviderRegistryService($container)), ($container->privates['scheb_two_factor.default_token_factory'] ??= new \Scheb\TwoFactorBundle\Security\Authentication\Token\TwoFactorTokenFactory()), ($container->privates['scheb_two_factor.default_provider_decider'] ??= new \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderDecider())) && false ?: $lazyLoad);
    }
}
