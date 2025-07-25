<?php

namespace ContainerWlVdSvm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MXOUSS_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mXOUSS.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mXOUSS.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'actionsButtonService' => ['privates', 'Pimcore\\Bundle\\AdminBundle\\Service\\Workflow\\ActionsButtonService', 'getActionsButtonServiceService', true],
            'placeStatusInfo' => ['services', 'Pimcore\\Workflow\\Place\\StatusInfo', 'getStatusInfoService', true],
            'router' => ['services', 'router', 'getRouterService', false],
            'workflowManager' => ['services', 'Pimcore\\Workflow\\Manager', 'getManagerService', true],
        ], [
            'actionsButtonService' => 'Pimcore\\Bundle\\AdminBundle\\Service\\Workflow\\ActionsButtonService',
            'placeStatusInfo' => 'Pimcore\\Workflow\\Place\\StatusInfo',
            'router' => '?',
            'workflowManager' => 'Pimcore\\Workflow\\Manager',
        ]);
    }
}
