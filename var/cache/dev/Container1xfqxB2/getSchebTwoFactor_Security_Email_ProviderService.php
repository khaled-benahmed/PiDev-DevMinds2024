<?php

namespace Container1xfqxB2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_Security_Email_ProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'scheb_two_factor.security.email.provider' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\Email\EmailTwoFactorProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'TwoFactorProviderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-email'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'Email'.\DIRECTORY_SEPARATOR.'EmailTwoFactorProvider.php';

        $a = ($container->services['scheb_two_factor.security.email.code_generator'] ?? $container->load('getSchebTwoFactor_Security_Email_CodeGeneratorService'));

        if (isset($container->privates['scheb_two_factor.security.email.provider'])) {
            return $container->privates['scheb_two_factor.security.email.provider'];
        }
        $b = ($container->privates['scheb_two_factor.security.email.default_form_renderer'] ?? $container->load('getSchebTwoFactor_Security_Email_DefaultFormRendererService'));

        if (isset($container->privates['scheb_two_factor.security.email.provider'])) {
            return $container->privates['scheb_two_factor.security.email.provider'];
        }

        return $container->privates['scheb_two_factor.security.email.provider'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\Email\EmailTwoFactorProvider($a, $b);
    }
}