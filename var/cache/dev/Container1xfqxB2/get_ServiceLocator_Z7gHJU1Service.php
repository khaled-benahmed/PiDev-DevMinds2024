<?php

namespace Container1xfqxB2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z7gHJU1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Z7gHJU1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Z7gHJU1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'blogRepository' => ['privates', 'App\\Repository\\BlogRepository', 'getBlogRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'blogRepository' => 'App\\Repository\\BlogRepository',
            'entityManager' => '?',
        ]);
    }
}
