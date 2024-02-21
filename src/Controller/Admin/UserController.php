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



   /* #[Route('/{id}/supprimer', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('admin_users_list', [], Response::HTTP_SEE_OTHER);
    }
*/
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