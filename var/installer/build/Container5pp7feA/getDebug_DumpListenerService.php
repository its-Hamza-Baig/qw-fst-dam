<?php

namespace Container5pp7feA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_DumpListenerService extends Pimcore_Bundle_InstallBundle_InstallerKernelDevDebugContainer
{
    /**
     * Gets the private 'debug.dump_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/DumpListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/DataDumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/ContextualizedDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/ContextProvider/ContextProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/FileLinkFormatter.php';

        return $container->privates['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener(($container->services['var_dumper.cloner'] ?? $container->load('getVarDumper_ClonerService')), new \Symfony\Component\VarDumper\Dumper\ContextualizedDumper(($container->privates['var_dumper.contextualized_cli_dumper.inner'] ?? $container->load('getVarDumper_ContextualizedCliDumper_InnerService')), ['source' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider('UTF-8', \dirname(__DIR__, 4), ($container->privates['debug.file_link_formatter'] ??= new \Symfony\Component\ErrorHandler\ErrorRenderer\FileLinkFormatter($container->getEnv('default::SYMFONY_IDE'))))]), NULL);
    }
}
