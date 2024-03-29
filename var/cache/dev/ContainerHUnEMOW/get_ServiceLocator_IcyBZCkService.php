<?php

namespace ContainerHUnEMOW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IcyBZCkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.icyBZCk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.icyBZCk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'offresRepository' => ['privates', 'App\\Repository\\OffresRepository', 'getOffresRepositoryService', true],
            'promotionRepository' => ['privates', 'App\\Repository\\PromotionRepository', 'getPromotionRepositoryService', true],
        ], [
            'offresRepository' => 'App\\Repository\\OffresRepository',
            'promotionRepository' => 'App\\Repository\\PromotionRepository',
        ]);
    }
}
