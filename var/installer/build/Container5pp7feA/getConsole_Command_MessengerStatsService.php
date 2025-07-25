<?php

namespace Container5pp7feA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerStatsService extends Pimcore_Bundle_InstallBundle_InstallerKernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.messenger_stats' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\StatsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Command/StatsCommand.php';

        $container->privates['console.command.messenger_stats'] = $instance = new \Symfony\Component\Messenger\Command\StatsCommand(($container->privates['messenger.receiver_locator'] ??= new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [], [])), []);

        $instance->setName('messenger:stats');
        $instance->setDescription('Show the message count for one or more transports');

        return $instance;
    }
}
