<?php

namespace ContainerWlVdSvm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFilteredMigrationsRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Migrations\FilteredMigrationsRepository' shared autowired service.
     *
     * @return \Pimcore\Migrations\FilteredMigrationsRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/src/MigrationsRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Migrations/FilteredMigrationsRepository.php';

        return $container->services['Pimcore\\Migrations\\FilteredMigrationsRepository'] = new \Pimcore\Migrations\FilteredMigrationsRepository();
    }
}
