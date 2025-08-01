<?php

namespace ContainerWlVdSvm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_R1GFKNNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.R1GFKNN' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Messenger/Handler/ScheduledTaskHandler.php';

        $a = ($container->privates['Pimcore\\Maintenance\\Executor'] ?? $container->load('getExecutorService'));

        if (isset($container->privates['.messenger.handler_descriptor.R1GFKNN'])) {
            return $container->privates['.messenger.handler_descriptor.R1GFKNN'];
        }

        return $container->privates['.messenger.handler_descriptor.R1GFKNN'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Pimcore\Messenger\Handler\ScheduledTaskHandler($a), []);
    }
}
