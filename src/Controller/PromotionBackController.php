<?php

namespace App\Controller;

use App\Entity\Promotion;
use App\Form\Promotion1Type;
use App\Repository\PromotionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/promotion/back')]
class PromotionBackController extends AbstractController
{
    #[Route('/', name: 'app_promotion_back_index', methods: ['GET'])]
    public function index(PromotionRepository $promotionRepository): Response
    {
        return $this->render('promotion_back/index.html.twig', [
            'promotions' => $promotionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_promotion_back_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $promotion = new Promotion();
        $form = $this->createForm(Promotion1Type::class, $promotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($promotion);
            $entityManager->flush();

            return $this->redirectToRoute('app_promotion_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('promotion_back/new.html.twig', [
            'promotion' => $promotion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_promotion_back_show', methods: ['GET'])]
    public function show(Promotion $promotion): Response
    {
        return $this->render('promotion_back/show.html.twig', [
            'promotion' => $promotion,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_promotion_back_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Promotion $promotion, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Promotion1Type::class, $promotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_promotion_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('promotion_back/edit.html.twig', [
            'promotion' => $promotion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_promotion_back_delete', methods: ['POST'])]
    public function delete(Request $request, Promotion $promotion, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$promotion->getId(), $request->request->get('_token'))) {
            $entityManager->remove($promotion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_promotion_back_index', [], Response::HTTP_SEE_OTHER);
    }
}
