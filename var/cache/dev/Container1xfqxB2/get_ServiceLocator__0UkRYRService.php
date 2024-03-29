<?php

namespace Container1xfqxB2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__0UkRYRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..0UkRYR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..0UkRYR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorieAbonnementsRepository' => ['privates', 'App\\Repository\\CategorieAbonnementsRepository', 'getCategorieAbonnementsRepositoryService', true],
        ], [
            'categorieAbonnementsRepository' => 'App\\Repository\\CategorieAbonnementsRepository',
        ]);
    }
}
