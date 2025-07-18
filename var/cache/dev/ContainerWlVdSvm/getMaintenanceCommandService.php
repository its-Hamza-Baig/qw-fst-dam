<?php

namespace ContainerWlVdSvm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaintenanceCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\CoreBundle\Command\MaintenanceCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\Command\MaintenanceCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/src/Command/MaintenanceCommand.php';

        $container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\MaintenanceCommand'] = $instance = new \Pimcore\Bundle\CoreBundle\Command\MaintenanceCommand(($container->privates['Pimcore\\Maintenance\\Executor'] ?? $container->load('getExecutorService')), ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)));

        $instance->setName('pimcore:maintenance');
        $instance->setAliases(['maintenance']);
        $instance->setDescription('Asynchronous maintenance jobs of pimcore (needs to be set up as cron job)');

        return $instance;
    }
}
