<?php

namespace ContainerWlVdSvm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWorkflowManagementListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Bundle\AdminBundle\EventListener\WorkflowManagementListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\EventListener\WorkflowManagementListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/admin-ui-classic-bundle/src/EventListener/WorkflowManagementListener.php';

        $a = ($container->services['Pimcore\\Workflow\\Manager'] ?? $container->load('getManagerService'));

        if (isset($container->services['Pimcore\\Bundle\\AdminBundle\\EventListener\\WorkflowManagementListener'])) {
            return $container->services['Pimcore\\Bundle\\AdminBundle\\EventListener\\WorkflowManagementListener'];
        }

        return $container->services['Pimcore\\Bundle\\AdminBundle\\EventListener\\WorkflowManagementListener'] = new \Pimcore\Bundle\AdminBundle\EventListener\WorkflowManagementListener($a, ($container->services['Pimcore\\Workflow\\Place\\StatusInfo'] ?? $container->load('getStatusInfoService')), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->privates['Pimcore\\Bundle\\AdminBundle\\Service\\Workflow\\ActionsButtonService'] ?? $container->load('getActionsButtonServiceService')));
    }
}
