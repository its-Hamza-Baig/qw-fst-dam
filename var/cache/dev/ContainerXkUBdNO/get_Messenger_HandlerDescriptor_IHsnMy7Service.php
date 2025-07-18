<?php

namespace ContainerXkUBdNO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_IHsnMy7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.iHsnMy7' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Messenger/Handler/AssetUpdateTasksHandler.php';

        return $container->privates['.messenger.handler_descriptor.iHsnMy7'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Pimcore\Messenger\Handler\AssetUpdateTasksHandler(($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)), ($container->services['Pimcore\\Helper\\LongRunningHelper'] ?? $container->load('getLongRunningHelperService'))), []);
    }
}
