<?php

namespace ContainerWlVdSvm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailLogsCleanupCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Pimcore\Bundle\CoreBundle\Command\EmailLogsCleanupCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.Pimcore\\Bundle\\CoreBundle\\Command\\EmailLogsCleanupCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('pimcore:email:cleanup', ['email:cleanup'], 'Cleanup email logs', false, #[\Closure(name: 'Pimcore\\Bundle\\CoreBundle\\Command\\EmailLogsCleanupCommand')] fn (): \Pimcore\Bundle\CoreBundle\Command\EmailLogsCleanupCommand => ($container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\EmailLogsCleanupCommand'] ?? $container->load('getEmailLogsCleanupCommandService')));
    }
}
