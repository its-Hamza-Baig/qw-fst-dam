<?php

namespace ContainerXkUBdNO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExtJSCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\AdminBundle\Command\ExtJSCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Command\ExtJSCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/admin-ui-classic-bundle/src/Command/ExtJSCommand.php';

        $container->privates['Pimcore\\Bundle\\AdminBundle\\Command\\ExtJSCommand'] = $instance = new \Pimcore\Bundle\AdminBundle\Command\ExtJSCommand();

        $instance->setName('pimcore:extjs');

        return $instance;
    }
}
