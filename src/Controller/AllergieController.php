<?php

namespace App\Controller;

use App\Entity\Allergie;
use App\Form\AllergieType;
use App\Repository\AllergieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/allergie')]
class AllergieController extends AbstractController
{
    #[Route('/allergie', name: 'app_allergie_index', methods: ['GET'])]
    public function index(AllergieRepository $allergieRepository): Response
    {
        return $this->render('allergie/index.html.twig', [
            'allergies' => $allergieRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_allergie_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $allergie = new Allergie();
        $form = $this->createForm(AllergieType::class, $allergie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($allergie);
            $entityManager->flush();

            return $this->redirectToRoute('app_allergie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('allergie/new.html.twig', [
            'allergie' => $allergie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_allergie_show', methods: ['GET'])]
    public function show(AllergieRepository $allergieRepository,$id): Response
    {
        $allergie = $allergieRepository->find($id);
        return $this->render('allergie/show.html.twig', [
            'allergie' => $allergie,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_allergie_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, $id,AllergieRepository $allergieRepository, EntityManagerInterface $entityManager): Response
    {
        $allergie = $allergieRepository->find($id);

        $form = $this->createForm(AllergieType::class, $allergie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_allergie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('allergie/edit.html.twig', [
            'allergie' => $allergie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_allergie_delete', methods: ['POST'])]
    public function delete(Request $request, $id,AllergieRepository $allergieRepository, EntityManagerInterface $entityManager): Response
    {
        $allergie = $allergieRepository->find($id);

        if ($this->isCsrfTokenValid('delete'.$allergie->getId(), $request->request->get('_token'))) {
            $entityManager->remove($allergie);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_allergie_index', [], Response::HTTP_SEE_OTHER);
    }
}
