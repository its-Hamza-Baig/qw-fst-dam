<?php

namespace ContainerWlVdSvm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_DataObject_GridColumnConfig_Value_Factory_DefaultService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pimcore.data_object.grid_column_config.value.factory.default' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\DataObject\GridColumnConfig\Value\Factory\DefaultValueFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/admin-ui-classic-bundle/src/DataObject/GridColumnConfig/Value/Factory/ValueFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/admin-ui-classic-bundle/src/DataObject/GridColumnConfig/Value/Factory/DefaultValueFactory.php';

        return $container->privates['pimcore.data_object.grid_column_config.value.factory.default'] = new \Pimcore\Bundle\AdminBundle\DataObject\GridColumnConfig\Value\Factory\DefaultValueFactory('Pimcore\\Bundle\\AdminBundle\\DataObject\\GridColumnConfig\\Value\\DefaultValue', ($container->services['Pimcore\\Localization\\LocaleServiceInterface'] ?? self::getLocaleServiceInterfaceService($container)));
    }
}
