<?php

namespace ContainerWlVdSvm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getControllerDataProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Controller\Config\ControllerDataProvider' shared autowired service.
     *
     * @return \Pimcore\Controller\Config\ControllerDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Config/ControllerDataProvider.php';

        return $container->services['Pimcore\\Controller\\Config\\ControllerDataProvider'] = new \Pimcore\Controller\Config\ControllerDataProvider(($container->services['kernel'] ?? $container->get('kernel', 1)), $container->parameters['pimcore.service_controllers']);
    }
}
