<?php

namespace ContainerHUnEMOW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_Security_Email_DefaultFormRendererService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'scheb_two_factor.security.email.default_form_renderer' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'TwoFactorFormRendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'DefaultTwoFactorFormRenderer.php';

        $a = ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService());

        if (isset($container->privates['scheb_two_factor.security.email.default_form_renderer'])) {
            return $container->privates['scheb_two_factor.security.email.default_form_renderer'];
        }

        return $container->privates['scheb_two_factor.security.email.default_form_renderer'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer($a, '@SchebTwoFactor/Authentication/form.html.twig');
    }
}
