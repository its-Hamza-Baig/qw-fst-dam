<?php

namespace ContainerXkUBdNO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getManager2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\AdminBundle\GDPR\DataProvider\Manager' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\GDPR\DataProvider\Manager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/admin-ui-classic-bundle/src/GDPR/DataProvider/Manager.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DependencyInjection/CollectionServiceLocator.php';

        return $container->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Manager'] = new \Pimcore\Bundle\AdminBundle\GDPR\DataProvider\Manager(new \Pimcore\DependencyInjection\CollectionServiceLocator(['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Assets' => #[\Closure(name: 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Assets')] fn () => ($container->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Assets'] ?? $container->load('getAssetsService')), 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\DataObjects' => #[\Closure(name: 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\DataObjects')] fn () => ($container->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\DataObjects'] ?? $container->load('getDataObjectsService')), 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\PimcoreUsers' => #[\Closure(name: 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\PimcoreUsers')] fn () => ($container->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\PimcoreUsers'] ?? $container->load('getPimcoreUsersService')), 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\SentMail' => #[\Closure(name: 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\SentMail')] fn () => ($container->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\SentMail'] ??= new \Pimcore\Bundle\AdminBundle\GDPR\DataProvider\SentMail())]));
    }
}
