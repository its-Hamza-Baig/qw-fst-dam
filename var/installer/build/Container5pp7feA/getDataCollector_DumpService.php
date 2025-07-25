<?php

namespace Container5pp7feA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDataCollector_DumpService extends Pimcore_Bundle_InstallBundle_InstallerKernelDevDebugContainer
{
    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/DataCollectorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/DataCollector.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/DataDumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/DumpDataCollector.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/FileLinkFormatter.php';

        return $container->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(($container->services['debug.stopwatch'] ??= new \Symfony\Component\Stopwatch\Stopwatch(true)), ($container->privates['debug.file_link_formatter'] ??= new \Symfony\Component\ErrorHandler\ErrorRenderer\FileLinkFormatter($container->getEnv('default::SYMFONY_IDE'))), 'UTF-8', NULL, NULL);
    }
}
