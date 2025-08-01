<?php

namespace ContainerXkUBdNO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteUnusedLocaleDataCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Pimcore\Bundle\CoreBundle\Command\DeleteUnusedLocaleDataCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.Pimcore\\Bundle\\CoreBundle\\Command\\DeleteUnusedLocaleDataCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('pimcore:locale:delete-unused-tables', [], 'Delete unused locale(invalid language) tables & views', false, #[\Closure(name: 'Pimcore\\Bundle\\CoreBundle\\Command\\DeleteUnusedLocaleDataCommand')] fn (): \Pimcore\Bundle\CoreBundle\Command\DeleteUnusedLocaleDataCommand => ($container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\DeleteUnusedLocaleDataCommand'] ?? $container->load('getDeleteUnusedLocaleDataCommandService')));
    }
}
