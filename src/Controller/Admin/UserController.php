<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\UserAdminType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\Query\Expr;


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
    public function showUser ($id,UserRepository $repository){
        $user=$repository->find($id);
        if (!$user){
            return $this->redirectToRoute('main');
        }
        return $this->render('admin/showUser.html.twig',['user'=>$user]);

    }

    #[Route('/{id}/edit', name: 'edit')]
    public function updateUser($id,UserRepository $repository,Request  $request, ManagerRegistry $managerRegistry)
    {
        $user= $repository->find($id) ;
        $form= $this->createForm(UserAdminType::class, $user);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em = $managerRegistry->getManager();
            $em->flush();
           // return  new Response("Done!");
            return  $this->redirectToRoute("admin_users_list");
        }
        return $this->renderForm('admin/editUser.html.twig',
            array('formUser'=>$form));
    }

    #[Route('/{id}/delete', name: 'delete')]
    public function deleteUser($id, UserRepository $repository,
                                 ManagerRegistry $managerRegistry)
    {
        $user= $repository->find($id);
        $em = $managerRegistry->getManager();
        $em->remove($user);
        $em->flush();

        return  $this->redirectToRoute("admin_users_list");

    }

    #[Route("/block/user/{id}", name: "block_user")]
    public function blockUser($id): Response
    {
        // Récupérer l'utilisateur à partir de l'ID
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
    
        // Vérifier si l'utilisateur existe
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé.');
        }
    
        // Mettre à jour le statut de blocage de l'utilisateur
        $user->setIsBlocked(true);
    
        // Enregistrer les modifications en base de données
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();
    
        // Rediriger vers la page où vous affichez la liste des utilisateurs
        return $this->redirectToRoute('admin_users_list');
    }
    
    #[Route("/user/{id}/unblock", name: "user_unblock")]
    public function unblockUser( $id): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $user->setIsBlocked(false); 

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();
        return $this->redirectToRoute('admin_users_list'); 
    }

    #[Route('/admin/user/statistics', name: 'statistics')]
    public function userStatistics(): Response
    {
        // Statistiques basées sur le rôle des utilisateurs
        $roleStatistics = $this->entityManager->createQuery(
            'SELECT u.roles, COUNT(u.id) AS count FROM App\Entity\User u GROUP BY u.roles'
        )->getResult();
    
        // Statistiques basées sur l'état de vérification des utilisateurs
        $verificationStatistics = $this->entityManager->createQuery(
            'SELECT u.isVerified, COUNT(u.id) AS count FROM App\Entity\User u GROUP BY u.isVerified'
        )->getResult();
    
        return $this->render('admin/statistics.html.twig', [
            'roleStatistics' => $roleStatistics,
            'verificationStatistics' => $verificationStatistics,
        ]);
    }
    
}