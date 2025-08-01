<?php

namespace ContainerWlVdSvm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMigrateElementsCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\CoreBundle\Command\Document\MigrateElementsCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\Command\Document\MigrateElementsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/src/Command/Document/MigrateElementsCommand.php';

        $container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\Document\\MigrateElementsCommand'] = $instance = new \Pimcore\Bundle\CoreBundle\Command\Document\MigrateElementsCommand();

        $instance->setName('pimcore:documents:migrate-elements');
        $instance->setDescription('Migrates document elements to editables.'."\n".'    See issue https://github.com/pimcore/pimcore/issues/7384 first');

        return $instance;
    }
}
