<?php

namespace ContainerXkUBdNO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDefaultControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\DefaultController' shared autowired service.
     *
     * @return \App\Controller\DefaultController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/FrontendController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/DefaultController.php';

        $container->services['App\\Controller\\DefaultController'] = $instance = new \App\Controller\DefaultController();

        $instance->setContainer(($container->privates['.service_locator.jIByowl'] ?? $container->load('get_ServiceLocator_JIByowlService'))->withContext('App\\Controller\\DefaultController', $container));

        return $instance;
    }
}
