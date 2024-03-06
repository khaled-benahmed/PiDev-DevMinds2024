<?php

namespace App\Security;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;


class UserAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';

    public function __construct(private UrlGeneratorInterface $urlGenerator,private EntityManagerInterface $entityManager)
    {
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email', '');

        $request->getSession()->set(Security::LAST_USERNAME, $email);

        // Get the user object by email
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $email]);

        if (!$user) {
            throw new CustomUserMessageAuthenticationException('Email could not be found.');
        }

        // Check if the user is blocked
        if ($user->getIsBlocked()) {
            throw new CustomUserMessageAuthenticationException('Votre compte a été bloqué par l\'administrateur. Veuillez le contacter pour plus d\'informations.');
        }

        // If the user is not blocked, return the passport
        return new Passport(
            new UserBadge($email),
            new PasswordCredentials($request->request->get('password', '')),
            [
                new CsrfTokenBadge('authenticate', $request->request->get('_csrf_token')),
                new RememberMeBadge(),
            ]
        );
    }

    //public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    //{
         public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        // Get the user object from the token
        $user = $token->getUser();

        // Check if the user has the role 'ROLE_ADMIN'
        if (in_array('ROLE_ADMIN', $user->getRoles(), true)) {
            // If the user is an admin, redirect to the admin interface
            return new RedirectResponse($this->urlGenerator->generate('admin_index'));
        }
        

        // If the user is not an admin, redirect to the default route (or any other route you prefer)
        return new RedirectResponse($this->urlGenerator->generate('app_home'));
    }
       // if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
         //   return new RedirectResponse($targetPath);
            
       // }
        
        // For example:
       // return new RedirectResponse($this->urlGenerator->generate('app_home'));
 
       // throw new \Exception('TODO: provide a valid redirect inside '.__FILE__);
        


    

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}