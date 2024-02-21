<?php

namespace App\Controller;

use App\Entity\Abonnement;
use App\Form\AbonnementType;
use App\Repository\AbonnementRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AbonnementController extends AbstractController
{
    #[Route('/Abonnement/Read_Back', name: 'Read_Back_Abonnement')]///bch thotha fel back
    public function ReadBackAbonnement(AbonnementRepository $abonnementRepository): Response
    {
        $Abonnements = $abonnementRepository->findAll();

        return $this->render('Abonnement/ReadAbonnementBack.html.twig', ["Abonnements"=>$Abonnements]);
    }



    #[Route('/Abonnement/Create', name: 'Create_Abonnement')]/// ajout
    public function CreateAbonnement(ManagerRegistry $doctrine, Request $req): Response
    {
        $em = $doctrine->getManager();
        $Abonnement = new Abonnement();
        $form = $this->createForm(AbonnementType::class,$Abonnement);
        $form->handleRequest($req);

        if($form->isSubmitted() && $form->isValid())
        {
            $em->persist($Abonnement);
            $em->flush();

            $this->addFlash('notice','Ajout avec success!');

            return $this->redirectToRoute('Read_Back_Abonnement');
        }

        return $this->renderForm('Abonnement/CreateAbonnement.html.twig',['form'=>$form]);

    }

    #[Route('/Abonnement/Delete/{id}', name: 'Delete_Abonnement')]// delete
    public function DeleteAbonnement(ManagerRegistry $managerRegistry,AbonnementRepository $abonnementRepository , $id): Response
    {
        $em= $managerRegistry->getManager();
        $Abonnement= $abonnementRepository->find($id);
        $em->remove($Abonnement);
        $em->flush();

        $this->addFlash('notice','Suppression avec success!');

        return $this->redirectToRoute('Read_Back_Abonnement');
    }

    #[Route('/Abonnement/Update/{id}', name: 'Update_Abonnement')]/// update
    public function UpdateAbonnement(ManagerRegistry $managerRegistry, $id, Request $req,AbonnementRepository $abonnementRepository): Response
    {

        $Abonnement = $abonnementRepository->find($id);
        $form = $this->createForm(AbonnementType::class,$Abonnement);
        $form->handleRequest($req);

        if($form->isSubmitted() && $form->isValid())
        {$em = $managerRegistry->getManager();
            $em->persist($Abonnement);
            $em->flush();

            $this->addFlash('notice','Modification avec success!');

            return $this->redirectToRoute('Read_Back_Abonnement');
        }

        return $this->renderForm('Abonnement/UpdateAbonnement.html.twig',['form'=>$form]);

    }
}
