<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use App\Entity\User;


class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Vérifier si l'utilisateur est bloqué
        $user = $this->getUser();
        if ($user instanceof User && $user->getIsBlocked()) {
            throw new CustomUserMessageAuthenticationException('Votre compte a été bloqué par l\'administrateur. Veuillez le contacter pour plus d\'informations.');
        }
    
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
    
        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route(path: '/admin', name: 'admin_home')]
    public function adminHome(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        // Add logic here to handle admin dashboard
        return $this->render('admin/admin.html.twig');
    }
}
