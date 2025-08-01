<?php

namespace ContainerXkUBdNO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_CachePoolClearService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolClearCommand.php';

        $container->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($container->services['cache.global_clearer'] ?? $container->load('getCache_GlobalClearerService')), ['cache.app', 'cache.system', 'cache.validator', 'cache.serializer', 'cache.annotations', 'cache.property_info', 'cache.messenger.restart_workers_signal', 'cache.rate_limiter', 'cache.validator_expression_language', 'cache.security_expression_language', 'cache.security_is_granted_attribute_expression_language', 'cache.webpack_encore']);

        $instance->setName('cache:pool:clear');
        $instance->setDescription('Clear cache pools');

        return $instance;
    }
}
