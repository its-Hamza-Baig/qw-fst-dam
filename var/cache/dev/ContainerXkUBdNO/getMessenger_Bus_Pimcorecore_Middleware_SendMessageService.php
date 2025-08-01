<?php

namespace ContainerXkUBdNO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Bus_Pimcorecore_Middleware_SendMessageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.bus.pimcore-core.middleware.send_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\SendMessageMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/SendMessageMiddleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Sender/SendersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Sender/SendersLocator.php';

        $a = ($container->privates['.service_locator.9GQ2JRc'] ?? $container->load('get_ServiceLocator_9GQ2JRcService'));

        if (isset($container->privates['messenger.bus.pimcore-core.middleware.send_message'])) {
            return $container->privates['messenger.bus.pimcore-core.middleware.send_message'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['messenger.bus.pimcore-core.middleware.send_message'])) {
            return $container->privates['messenger.bus.pimcore-core.middleware.send_message'];
        }

        $container->privates['messenger.bus.pimcore-core.middleware.send_message'] = $instance = new \Symfony\Component\Messenger\Middleware\SendMessageMiddleware(new \Symfony\Component\Messenger\Transport\Sender\SendersLocator(['Pimcore\\Messenger\\VideoConvertMessage' => ['pimcore_core'], 'Pimcore\\Messenger\\CleanupThumbnailsMessage' => ['pimcore_core'], 'Pimcore\\Messenger\\SanityCheckMessage' => ['pimcore_core'], 'Pimcore\\Messenger\\AssetUpdateTasksMessage' => ['pimcore_asset_update'], 'Pimcore\\Messenger\\AssetPreviewImageMessage' => ['pimcore_core'], 'Pimcore\\Messenger\\GeneratePagePreviewMessage' => ['pimcore_core'], 'Pimcore\\Messenger\\VersionDeleteMessage' => ['pimcore_core'], 'Pimcore\\Messenger\\OptimizeImageMessage' => ['pimcore_image_optimize'], 'Pimcore\\Messenger\\MaintenanceTaskMessage' => ['pimcore_maintenance'], 'Pimcore\\Messenger\\ScheduledTaskMessage' => ['pimcore_scheduled_tasks']], $a), $b, true);

        if ($container->has('monolog.logger.messenger')) {
            $instance->setLogger(($container->services['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));
        }

        return $instance;
    }
}
