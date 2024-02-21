<?php

namespace App\Controller;

use App\Entity\Offres;
use App\Form\Offres1Type;
use App\Repository\OffresRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/offres/back')]
class OffresBackController extends AbstractController
{
    #[Route('/', name: 'app_offres_back_index', methods: ['GET'])]
    public function index(OffresRepository $offresRepository): Response
    {
        return $this->render('offres_back/index.html.twig', [
            'offres' => $offresRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_offres_back_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $offre = new Offres();
        $form = $this->createForm(Offres1Type::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($offre);
            $entityManager->flush();

            return $this->redirectToRoute('app_offres_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offres_back/new.html.twig', [
            'offre' => $offre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_offres_back_show', methods: ['GET'])]
    public function show(Offres $offre): Response
    {
        return $this->render('offres_back/show.html.twig', [
            'offre' => $offre,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_offres_back_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Offres $offre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Offres1Type::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_offres_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offres_back/edit.html.twig', [
            'offre' => $offre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_offres_back_delete', methods: ['POST'])]
    public function delete(Request $request, Offres $offre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offre->getId(), $request->request->get('_token'))) {
            $entityManager->remove($offre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_offres_back_index', [], Response::HTTP_SEE_OTHER);
    }
}
