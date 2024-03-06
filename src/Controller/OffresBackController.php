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
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

#[Route('/offres/back')]
class OffresBackController extends AbstractController
{
    #[Route('/pdfO', name: 'offres_pdf')]
    public function generatePdf(): Response
    {
        // Fetch reclamations from your repository
        $offres = $this->getDoctrine()->getRepository(Offres::class)->findAll();
    
        // Render the reclamations table using Twig
        $html = $this->renderView('offres_back/pdf.html.twig', [
            'offres' => $offres,
        ]);
    
        // Configure Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
    
        // Instantiate Dompdf
        $dompdf = new Dompdf($options);
    
        // Load HTML content
        $dompdf->loadHtml($html);
    
        // Render PDF (optional: set paper size and orientation)
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
    
        // Stream the PDF to the browser
        $pdfContent = $dompdf->output();
        
        // Return the PDF as a response
        $response = new Response($pdfContent);
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'offres.pdf'
        );
        $response->headers->set('Content-Disposition', $disposition);
    
        return $response;
    }
    #[Route('/', name: 'app_offres_back_index', methods: ['GET'])]
    public function index(OffresRepository $offresRepository): Response
    {
        return $this->render('offres_back/index.html.twig', [
            'offres' => $offresRepository->findAll(),
            'countGreaterThan1000' => $offresRepository->countOffersGreaterThan1000(),
            'countLessThanOrEqual1000'=> $offresRepository->countOffersLessThanOrEqual1000(),
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
    public function show($id, EntityManagerInterface $entityManager): Response
    {
        $offre = $entityManager->getRepository(Offres::class)->find($id);
        return $this->render('offres_back/show.html.twig', [
            'offre' => $offre,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_offres_back_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, $id, EntityManagerInterface $entityManager): Response
    {
        $offre = $entityManager->getRepository(Offres::class)->find($id);
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
    public function delete(Request $request, $id, EntityManagerInterface $entityManager): Response
    {
        $offre = $entityManager->getRepository(Offres::class)->find($id);
        if ($this->isCsrfTokenValid('delete'.$offre->getId(), $request->request->get('_token'))) {
            $entityManager->remove($offre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_offres_back_index', [], Response::HTTP_SEE_OTHER);
    }
}
