<?php

namespace ContainerKs68Klj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_ProviderInitiatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'scheb_two_factor.provider_initiator' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderInitiator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'TwoFactorProviderInitiator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'Token'.\DIRECTORY_SEPARATOR.'TwoFactorTokenFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'Token'.\DIRECTORY_SEPARATOR.'TwoFactorTokenFactory.php';

        $a = ($container->privates['scheb_two_factor.provider_registry'] ?? $container->getSchebTwoFactor_ProviderRegistryService());

        if (isset($container->privates['scheb_two_factor.provider_initiator'])) {
            return $container->privates['scheb_two_factor.provider_initiator'];
        }

        return $container->privates['scheb_two_factor.provider_initiator'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorProviderInitiator($a, new \Scheb\TwoFactorBundle\Security\Authentication\Token\TwoFactorTokenFactory());
    }
}
