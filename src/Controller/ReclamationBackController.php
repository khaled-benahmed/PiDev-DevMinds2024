<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\Reclamation1Type;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

#[Route('/reclamation/back')]
class ReclamationBackController extends AbstractController
{
    #[Route('/', name: 'app_reclamation_back_index', methods: ['GET'])]
    public function index(ReclamationRepository $reclamationRepository, Request $request): Response
    {
        if ($request->isXmlHttpRequest()) {
            // Get the search term from the request
            $searchTerm = $request->query->get('search');
    
            // Call the search function in your repository
            $reclamations = $reclamationRepository->searchReclamations($searchTerm);

    
            // Convert the results to an array
            if($searchTerm == ""){
                $reclamations = $reclamationRepository->findAll();
            }
            $sort = $request->query->get('sort');
            if ($sort === 'date') {
                usort($reclamations, function($a, $b) {
                    return $a->getDateReclamation() <=> $b->getDateReclamation();
                });
            }
            $reclamationsArray = [];
            foreach ($reclamations as $reclamation) {
                $reclamationsArray[] = [
                    'id' => $reclamation->getId(),
                    'NomUserReclamation' => $reclamation->getNomUserReclamation(),
                    'textReclamation' => $reclamation->getTextReclamation(),
                    'dateReclamation' => $reclamation->getDateReclamation()->format('Y-m-d'),
                ];
            }

            return new JsonResponse(['reclamations' => $reclamationsArray]);
        }
        $reclamationData = $reclamationRepository->getReclamationCountsByMonth();

        $counterFile = __DIR__ . '/../../public/notify.json';
        $jsonContent = file_get_contents($counterFile);
        $counterData = json_decode($jsonContent, true);
        return $this->render('reclamation_back/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
            'reclamationData' => $reclamationData,
            'counterData' => $counterData,

        ]);
    }
    #[Route('/resetCounter', name: 'app_resetCounter')]
    public function resetCounter(Request $request)
{
    $counterFile = __DIR__ . '/../../public/notify.json';
    $jsonContent = file_get_contents($counterFile);
    $counterData = json_decode($jsonContent, true);

    // Reset the counter value to 0
    $counterData['value'] = 0;

    // Save the updated JSON data
    file_put_contents($counterFile, json_encode($counterData));

    // Return a JSON response
    return new Response(json_encode(['success' => true]), 200, ['Content-Type' => 'application/json']);
}
    #[Route('/pdf', name: 'reclamations_pdf')]
public function generatePdf(): Response
{
    // Fetch reclamations from your repository
    $reclamations = $this->getDoctrine()->getRepository(Reclamation::class)->findAll();

    // Render the reclamations table using Twig
    $html = $this->renderView('reclamation_back/pdf.html.twig', [
        'reclamations' => $reclamations,
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
        'reclamations.pdf'
    );
    $response->headers->set('Content-Disposition', $disposition);

    return $response;
}


    #[Route('/new', name: 'app_reclamation_back_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(Reclamation1Type::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation_back/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_back_show', methods: ['GET'])]
    public function show($id,EntityManagerInterface $entityManager): Response
    {
        $reclamation = $entityManager->getRepository(Reclamation::class)->find($id);
        return $this->render('reclamation_back/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reclamation_back_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, $id, EntityManagerInterface $entityManager): Response
    {
        $reclamation = $entityManager->getRepository(Reclamation::class)->find($id);
        $form = $this->createForm(Reclamation1Type::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation_back/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_back_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclamation_back_index', [], Response::HTTP_SEE_OTHER);
    }
}
