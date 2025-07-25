<?php

namespace ContainerWlVdSvm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDataObjectsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\AdminBundle\GDPR\DataProvider\DataObjects' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\GDPR\DataProvider\DataObjects
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/admin-ui-classic-bundle/src/GDPR/DataProvider/DataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/admin-ui-classic-bundle/src/GDPR/DataProvider/Elements.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/admin-ui-classic-bundle/src/GDPR/DataProvider/DataObjects.php';

        return $container->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\DataObjects'] = new \Pimcore\Bundle\AdminBundle\GDPR\DataProvider\DataObjects($container->parameters['pimcore.gdpr-data-extrator.dataobjects']);
    }
}
