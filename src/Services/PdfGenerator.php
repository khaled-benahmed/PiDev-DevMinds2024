<?php

namespace App\Services;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;

class PdfGenerator extends AbstractController
{

    public function generate($data)
    {

        $entities = $data;
        $transformedEntity = [];


        $transformedEntity = [
            'imageSrc'  => $this->imageToBase64($this->getParameter('kernel.project_dir') ."/public/".$entities->getImage()),
            'id' => $entities->getId(),
            'nom' => $entities->getnom(),
            'calories' => $entities->getCalories(),
            'allergie' => $entities->getAllergies(),
            'prix' => $entities->getPrix(),
            // Add more fields as needed
        ];

        //dd($transformedEntity);
        $html =  $this->renderView('pdf_generator/index.html.twig', $transformedEntity);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->render();

        return $dompdf->stream('resume', ["Attachment" => false]);

    }

    private function imageToBase64($path) {
        $path = $path;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        return $base64;
    }
}