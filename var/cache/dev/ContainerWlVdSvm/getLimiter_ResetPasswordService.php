<?php

namespace ContainerWlVdSvm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLimiter_ResetPasswordService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'limiter.reset_password' shared service.
     *
     * @return \Symfony\Component\RateLimiter\RateLimiterFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/rate-limiter/RateLimiterFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/rate-limiter/Storage/StorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/rate-limiter/Storage/CacheStorage.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/lock/Store/StoreFactory.php';

        $a = ($container->privates['cache.rate_limiter'] ?? self::getCache_RateLimiterService($container));

        if (isset($container->privates['limiter.reset_password'])) {
            return $container->privates['limiter.reset_password'];
        }
        $b = new \Symfony\Component\Lock\LockFactory(\Symfony\Component\Lock\Store\StoreFactory::createStore('flock'));
        if ($container->has('monolog.logger.lock')) {
            $b->setLogger(($container->services['monolog.logger.lock'] ?? $container->load('getMonolog_Logger_LockService')));
        }

        return $container->privates['limiter.reset_password'] = new \Symfony\Component\RateLimiter\RateLimiterFactory(['policy' => 'fixed_window', 'limit' => 5, 'interval' => '5 minutes', 'id' => 'reset_password'], new \Symfony\Component\RateLimiter\Storage\CacheStorage($a), $b);
    }
}
