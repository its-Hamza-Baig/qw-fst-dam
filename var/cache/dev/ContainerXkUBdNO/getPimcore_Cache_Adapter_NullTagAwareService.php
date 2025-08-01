<?php

namespace ContainerXkUBdNO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_Cache_Adapter_NullTagAwareService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'pimcore.cache.adapter.null_tag_aware' shared autowired service.
     *
     * @return \Symfony\Component\Cache\Adapter\TagAwareAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/NullAdapter.php';

        $container->services['pimcore.cache.adapter.null_tag_aware'] = $instance = new \Symfony\Component\Cache\Adapter\TagAwareAdapter(new \Symfony\Component\Cache\Adapter\NullAdapter(), NULL);

        $instance->setLogger(($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)));

        return $instance;
    }
}
