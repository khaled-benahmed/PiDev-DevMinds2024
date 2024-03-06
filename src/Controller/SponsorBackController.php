<?php

namespace App\Controller;

use App\Entity\Sponsor;
use App\Form\Sponsor1Type;
use App\Repository\SponsorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/sponsor/back')]
class SponsorBackController extends AbstractController
{
    #[Route('/', name: 'app_sponsor_back_index', methods: ['GET'])]
    public function index(SponsorRepository $sponsorRepository, Request $request): Response
    {
        if ($request->isXmlHttpRequest()) {
            // houni na9raw el data li jeya mel ajax
            $searchTerm = $request->query->get('search');
    
            // Chouni na3mel el recherche
            $sponsors = $sponsorRepository->searchSponsors($searchTerm);

    
            // Convert the results to an array
            if($searchTerm == ""){
                $sponsors = $sponsorRepository->findAll();;
            }

            $sponsorsArray = [];
            foreach ($sponsors as $sponsor) {
                $sponsorsArray[] = [
                    'id' => $sponsor->getId(),
                    'nomSponsor' => $sponsor->getNomSponsor(),
                    'donnation' => $sponsor->getDonnation(),
                    'image' => $sponsor->getImage(),
                ];
            }
            // nraja3 l reponse lel ajax
            return new JsonResponse(['sponsors' => $sponsorsArray]);
        }
        return $this->render('sponsor_back/index.html.twig', [
            'sponsors' => $sponsorRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_sponsor_back_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $sponsor = new Sponsor();
        $form = $this->createForm(Sponsor1Type::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload
            $file = $form->get('image')->getData();
            if ($file) {
                $fileName = uniqid().'.'.$file->guessExtension();
                // Move the uploaded file to the desired directory
                $file->move(
                    $this->getParameter('images_directory'), // Specify the directory where you want to store uploaded images
                    $fileName
                );
                // Set the file path to the entity's image property
                $sponsor->setImage($fileName);
            }

            $entityManager->persist($sponsor);
            $entityManager->flush();

            return $this->redirectToRoute('app_sponsor_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sponsor_back/new.html.twig', [
            'sponsor' => $sponsor,
            'form' => $form,
        ]);
    }
    #[Route('/{id}', name: 'app_sponsor_back_show', methods: ['GET'])]
    public function show($id, EntityManagerInterface $entityManager): Response
    {
        $sponsor = $entityManager->getRepository(Sponsor::class)->find($id);

        return $this->render('sponsor_back/show.html.twig', [
            'sponsor' => $sponsor,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_sponsor_back_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, $id, EntityManagerInterface $entityManager): Response
    {
        $sponsor = $entityManager->getRepository(Sponsor::class)->find($id);

        $form = $this->createForm(Sponsor1Type::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload
            $file = $form->get('image')->getData();
            if ($file) {
                $fileName = uniqid().'.'.$file->guessExtension();
                // Move the uploaded file to the desired directory
                $file->move(
                    $this->getParameter('images_directory'), // Specify the directory where you want to store uploaded images
                    $fileName
                );
                // Set the file path to the entity's image property
                $sponsor->setImage($fileName);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_sponsor_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sponsor_back/edit.html.twig', [
            'sponsor' => $sponsor,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sponsor_back_delete', methods: ['POST'])]
    public function delete(Request $request, $id, EntityManagerInterface $entityManager): Response
    {
        $sponsor = $entityManager->getRepository(Sponsor::class)->find($id);

        if ($this->isCsrfTokenValid('delete'.$sponsor->getId(), $request->request->get('_token'))) {
            $entityManager->remove($sponsor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_sponsor_back_index', [], Response::HTTP_SEE_OTHER);
    }
}
