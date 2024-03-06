<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Entity\Reclamation;
use App\Form\Reponse1Type;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reponse/back')]
class ReponseBackController extends AbstractController
{
    #[Route('/', name: 'app_reponse_back_index', methods: ['GET'])]
    public function index(ReponseRepository $reponseRepository): Response
    {
        return $this->render('reponse_back/index.html.twig', [
            'reponses' => $reponseRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reponse_back_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reponse = new Reponse();
        $form = $this->createForm(Reponse1Type::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reponse);
            $entityManager->flush();

            return $this->redirectToRoute('app_reponse_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reponse_back/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_back_show', methods: ['GET'])]
    public function show($id, EntityManagerInterface $entityManager): Response
    {
        $reponse = $entityManager->getRepository(Reponse::class)->find($id);
        return $this->render('reponse_back/show.html.twig', [
            'reponse' => $reponse,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reponse_back_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request,$id, EntityManagerInterface $entityManager): Response
    {
        $reponse = $entityManager->getRepository(Reponse::class)->find($id);
        $form = $this->createForm(Reponse1Type::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reponse_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reponse_back/edit.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_back_delete', methods: ['POST'])]
    public function delete(Request $request, Reponse $reponse, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reponse->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reponse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reponse_back_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/auto_response', name: 'app_reclamation_auto_response', methods: ['POST'])]
    public function newAuto(Request $request, EntityManagerInterface $entityManager, $id): Response
    {
        $reponse = new Reponse();
        $reclamation = $entityManager->getRepository(Reclamation::class)->find($id);

        // If a Reclamation object is passed, set it to the Reclamation field of the new Reponse
        if ($reclamation !== null) {
            $reponse->setIdreclamation($reclamation);
        }
        $form = $this->createForm(Reponse1Type::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reponse);
            $entityManager->flush();

            return $this->redirectToRoute('app_reponse_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reponse_back/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
            'reclamation' => $reclamation,
        ]);
    }
}
