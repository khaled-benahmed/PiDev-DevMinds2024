<?php

namespace ContainerX8ppO4h;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A586ISzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.a586ISz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.a586ISz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'offresRepository' => ['privates', 'App\\Repository\\OffresRepository', 'getOffresRepositoryService', true],
        ], [
            'offresRepository' => 'App\\Repository\\OffresRepository',
        ]);
    }
}