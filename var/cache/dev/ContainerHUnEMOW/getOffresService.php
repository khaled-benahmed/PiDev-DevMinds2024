<?php

namespace ContainerHUnEMOW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOffresService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Entity\Offres' shared autowired service.
     *
     * @return \App\Entity\Offres
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Entity'.\DIRECTORY_SEPARATOR.'Offres.php';

        return $container->services['App\\Entity\\Offres'] = new \App\Entity\Offres();
    }
}
