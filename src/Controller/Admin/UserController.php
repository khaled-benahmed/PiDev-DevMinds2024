<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\EdituserTypeformType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/utilisateurs', name: 'admin_users_')]
class UserController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    #[Route('/', name: 'list')]
    public function index(UserRepository $usersRepository): Response
    {
        $users = $usersRepository->findBy([], ['firstname' => 'asc']);
        return $this->render('admin/listUsers.html.twig', compact('users'));
    }
    

    #[Route('/{id}', name: 'show')]
    public function showBook ($id,UserRepository $repository){
        $user=$repository->find($id);
        if (!$user){
            return $this->redirectToRoute('main');
        }
        return $this->render('admin/showUser.html.twig',['user'=>$user]);

    }


    #[Route('/{id}/supprimer', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('admin_users_list', [], Response::HTTP_SEE_OTHER);
    }

    #[Route("/block/user/{id}", name: "block_user")]
    public function blockUser($id): Response
    {
        // Récupérer l'utilisateur à partir de l'ID (supposons que votre utilisateur est stocké en base de données)
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        // Vérifier si l'utilisateur existe
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé.');
        }

        // Mettre à jour le statut de vérification de l'utilisateur
        $user->setIsVerified(false); // Supposons que setIsVerified est la méthode pour changer le statut de vérification
        $user->setIsBlocked(True);

        // Enregistrer les modifications en base de données
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        // Rediriger vers la page où vous affichez la liste des utilisateurs
        return $this->redirectToRoute('admin_users_list');
    }
    
    #[Route("/user/{id}/unblock", name: "user_unblock", methods: ["POST"])]
    public function unblockUser(User $user): Response
    {
        // Votre logique pour débloquer l'utilisateur
        $user->setIsBlocked(false); // Supposons que vous ayez une propriété "blocked" dans votre entité User
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        // Redirection ou réponse JSON, selon votre besoin
        return $this->redirectToRoute('admin_users_list'); // Rediriger vers la liste des utilisateurs après le déblocage
    }

}