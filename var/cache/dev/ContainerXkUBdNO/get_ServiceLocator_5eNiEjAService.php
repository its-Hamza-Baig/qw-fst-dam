<?php

namespace ContainerXkUBdNO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5eNiEjAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5eNiEjA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5eNiEjA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'defaultPreviewGenerator' => ['privates', 'Pimcore\\Model\\DataObject\\ClassDefinition\\PreviewGeneratorInterface', 'getPreviewGeneratorInterfaceService', true],
        ], [
            'defaultPreviewGenerator' => 'Pimcore\\Model\\DataObject\\ClassDefinition\\PreviewGeneratorInterface',
        ]);
    }
}
