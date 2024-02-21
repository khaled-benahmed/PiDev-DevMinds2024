<?php

namespace App\Controller;

use App\Entity\CategorieAbonnements;
use App\Form\AjoutCatType;
use App\Form\ModifcatType;
use App\Repository\CategorieAbonnementsRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    #[Route('/gestioncategorie', name: 'Read_Back_Category')]
    public function index(CategorieAbonnementsRepository $categorieAbonnementsRepository): Response
    {

        $categories = $categorieAbonnementsRepository->findAll();//yejbed mel base de donne kol chy
        return $this->render('categorie/Read_Back_Category.html.twig', [
            'categories' => $categories,//mbae3ed t3adi el variable categories lel view reaad_back oitamlelha boucle oitafichi
        ]);
    }


    #[Route('/ad', name: 'add_category')]
    public function ajoutCategorie(Request $request,ManagerRegistry $managerRegistry): Response
    {   $categorie=new CategorieAbonnements();
        $form=$this->createForm(AjoutCatType::class,$categorie);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $em=$managerRegistry->getManager();
            $em->persist($categorie);
            $em->flush();
        }
        return $this->render('categorie/Ajoutcatg.html.twig',
            [
                'form' => $form->createView(),
            ]);
    }

    #[Route('/update/categorie/{id}', name: 'updateCategorie')]
    public function  updateCategorie(CategorieAbonnementsRepository $categorieAbonnementsRepository,ManagerRegistry $managerRegistry,$id,  Request  $request) : Response
    {
        $categorie=$categorieAbonnementsRepository->find($id);

        $form = $this->createForm(ModifcatType::class, $categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        { $em = $managerRegistry->getManager();
            $em->flush();
            return $this->redirectToRoute('Read_Back_Category');
        }
        return $this->renderForm("categorie/updateCat.html.twig",
            ["form"=>$form]) ;


    }

    #[Route("/delete/categorie/{id}", name:'deleteCategorie')]
    public function delete($id, CategorieAbonnementsRepository $categorieAbonnementsRepository,ManagerRegistry $managerRegistry)
    {
        $categorie=$categorieAbonnementsRepository->find($id);
        $em = $managerRegistry->getManager();
        $em->remove($categorie);
        $em->flush() ;
        return $this->redirectToRoute('Read_Back_Category');
    }

}
