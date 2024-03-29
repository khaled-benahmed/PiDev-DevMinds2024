<?php

namespace ContainerHUnEMOW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KPYmnHiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kPYmnHi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kPYmnHi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'planning' => ['privates', '.errored..service_locator.kPYmnHi.App\\Entity\\Planning', NULL, 'Cannot autowire service ".service_locator.kPYmnHi": it references class "App\\Entity\\Planning" but no such service exists.'],
        ], [
            'Normalizer' => '?',
            'planning' => 'App\\Entity\\Planning',
        ]);
    }
}
