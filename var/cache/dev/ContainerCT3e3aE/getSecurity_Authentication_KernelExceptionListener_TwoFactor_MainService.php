<?php

namespace ContainerCT3e3aE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_KernelExceptionListener_TwoFactor_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.kernel_exception_listener.two_factor.main' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\Http\Firewall\ExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'ExceptionListener.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['security.authentication.kernel_exception_listener.two_factor.main'])) {
            return $container->privates['security.authentication.kernel_exception_listener.two_factor.main'];
        }

        return $container->privates['security.authentication.kernel_exception_listener.two_factor.main'] = new \Scheb\TwoFactorBundle\Security\Http\Firewall\ExceptionListener('main', ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['security.authentication.authentication_required_handler.two_factor.main'] ?? $container->load('getSecurity_Authentication_AuthenticationRequiredHandler_TwoFactor_MainService')), $a);
    }
}
