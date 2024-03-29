<?php

namespace ContainerHUnEMOW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BPwFCzPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bPwFCzP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bPwFCzP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'planningRepository' => ['privates', 'App\\Repository\\PlanningRepository', 'getPlanningRepositoryService', true],
        ], [
            'paginator' => '?',
            'planningRepository' => 'App\\Repository\\PlanningRepository',
        ]);
    }
}
