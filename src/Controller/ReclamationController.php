<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ReponseRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;



#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    #[Route('/', name: 'app_reclamation_index', methods: ['GET'])]
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $text = $reclamation->getTextReclamation();
        
            $filteredText = $this->filterwords($text);
    
            // Set the censored text in the reclamation entity
            $reclamation->setTextReclamation($filteredText);

            $entityManager->persist($reclamation);
            $entityManager->flush();
           // Increment counter value
            $counterFile = __DIR__ . '/../../public/notify.json';
            $jsonContent = file_get_contents($counterFile);
            $counterData = json_decode($jsonContent, true);
            $counterValue = $counterData['value'] ?? 0; // Initialize to 0 if not set
            $counterValue++;
            $counterData['value'] = $counterValue;

           // Add the object to the JSON file
            $newObject = [
                "id" => $reclamation->getId(), // Assuming the reclamation has an ID field
                "nomUserReclamation" => $reclamation->getNomUserReclamation(),
                "textReclamation" => $filteredText,
                "dateReclamation" => $reclamation->getDateReclamation()->format('Y-m-d H:i:s') // Assuming a date field
                         ];

            $counterData['reclamations'][] = $newObject;

// Save the updated JSON data
file_put_contents($counterFile, json_encode($counterData));

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show($id,ReponseRepository $reponseRepository, EntityManagerInterface $entityManager): Response
    {
        $reclamation = $entityManager->getRepository(Reclamation::class)->find($id);
        $reponses = $reponseRepository->findBy(['idreclamation' => $reclamation]);
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
            'reponses' =>$reponses,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, $id, EntityManagerInterface $entityManager): Response
    {
        $reclamation = $entityManager->getRepository(Reclamation::class)->find($id);
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }
    public function filterwords($text)
    {
        $filterWords = array('badword1', 'badword2', 'badword3', 'badword4', 'badword5', 'badword6');
        $filterCount = count($filterWords);
        $str = "";
        $data = preg_split('/\s+/',  $text);
        foreach($data as $s){
            $g = false;
            foreach ($filterWords as $lib) {
                if($s == $lib){
                    $t = "";
                    for($i =0; $i<strlen($s); $i++) $t .= "*";
                    $str .= $t . " ";
                    $g = true;
                    break;
                }
            }
            if(!$g)
            $str .= $s . " ";
        }
        return $str;
    }
    #[Route('/{id}/pdf_front', name: 'reclamations_pdf_front')]
    public function generatePdf($id,ReponseRepository $reponseRepository, EntityManagerInterface $entityManager): Response
    {
        $reclamation = $entityManager->getRepository(Reclamation::class)->find($id);

        $reponses = $reponseRepository->findBy(['idreclamation' => $reclamation]);
        // Render the reclamations table using Twig
        $html = $this->renderView('reclamation/pdf.html.twig', [
            'reclamation' => $reclamation,
            'reponses' =>$reponses,
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
            'reclamationsUser.pdf'
        );
        $response->headers->set('Content-Disposition', $disposition);
    
        return $response;
    }
}
