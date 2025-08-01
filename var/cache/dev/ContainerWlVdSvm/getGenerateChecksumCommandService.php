<?php

namespace ContainerWlVdSvm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGenerateChecksumCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\CoreBundle\Command\Asset\GenerateChecksumCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\Command\Asset\GenerateChecksumCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/src/Command/Asset/GenerateChecksumCommand.php';

        $container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\Asset\\GenerateChecksumCommand'] = $instance = new \Pimcore\Bundle\CoreBundle\Command\Asset\GenerateChecksumCommand();

        $instance->setName('pimcore:assets:generate-checksums');
        $instance->setDescription('Re-generates checksum for specific or all assets');

        return $instance;
    }
}
