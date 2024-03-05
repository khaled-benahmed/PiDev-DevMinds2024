<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use App\Entity\Plat;
use App\Entity\Allergie;
use App\Form\PlatType;
use App\Repository\PlatRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\TwilioService;
use App\Services\PdfGenerator;
use Dompdf\Dompdf;
use App\Repository\PostLikeRepository;
use App\Repository\PostRepository;
use App\Entity\Post;
use App\Entity\PostLike;
use Doctrine\Common\Persistence\ObjectManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;



#[Route('/plat')]
class PlatController extends AbstractController
{

    private $twilioService;
    private $PdfGenerator;
    public function __construct(TwilioService $twilioService,PdfGenerator $PdfGenerator)
    {
        $this->PdfGenerator = $PdfGenerator;
        $this->twilioService = $twilioService;
    }
    #[Route('/plat', name: 'app_plat_index', methods: ['GET'])]
    public function index(PlatRepository $platRepository): Response
    {
        return $this->render('plat/index.html.twig', [
            'plats' => $platRepository->findAll(),
        ]);
    }

    #[Route('/pdf/{id}', name: 'app_pdf', methods: ['GET'])]
    public function affiche_pdf(PlatRepository $platRepository,$id): Response
    {
        $plats = $platRepository->find($id);
        return new Response (
        #$dompdf->stream('resume', ["Attachment" => false]),
            $this->PdfGenerator->generate($plats),
            Response::HTTP_OK,
            ['Content-Type' => 'application/pdf']
        );
    }



    #[Route('/affiche_front', name: 'app_affiche_front', methods: ['GET'])]
    public function affiche_front(PlatRepository $platRepository): Response
    {
        return $this->render('main/indexx.html.twig', [
            'plats' => $platRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_plat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $plat = new Plat();
        $form = $this->createForm(PlatType::class, $plat);
        $form->handleRequest($request);
        $selectedAllergies = $form->get('allergies')->getData();

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('image')->getData();
            // Associate selected allergies with the plat entity

            $plat->addAllergy($selectedAllergies[0]);
            $selectedAllergies[0]->setPlat($plat->getId());

            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            try {
                $file->move(
                    $this->getParameter('images_directory'),
                    $fileName
                );
            } catch (FileException $e){
            }
            $plat->setImage('uploads/images/'.$fileName);
            $entityManager->persist($plat);
            $entityManager->flush();
            $twilioMessage = $form->get('nom')->getData();

            $this->twilioService->sendTwillioMessage("+21623352549", "We have new plate");

            return $this->redirectToRoute('app_plat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('plat/new.html.twig', [
            'plat' => $plat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_plat_show', methods: ['GET'])]
    public function show( $id,PlatRepository $platRepository): Response
    {
        $plat = $platRepository->find($id);
        return $this->render('plat/show.html.twig', [
            'plat' => $plat,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_plat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, $id,PlatRepository $platRepository, EntityManagerInterface $entityManager): Response
    {
        $plat = $platRepository->find($id);

        $form = $this->createForm(PlatType::class, $plat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_plat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('plat/edit.html.twig', [
            'plat' => $plat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_plat_delete', methods: ['POST'])]
    public function delete(Request $request,$id,PlatRepository $platRepository, EntityManagerInterface $entityManager): Response
    {        $plat = $platRepository->find($id);



        if ($this->isCsrfTokenValid('delete'.$plat->getId(), $request->request->get('_token'))) {
            $entityManager->remove($plat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_plat_index', [], Response::HTTP_SEE_OTHER);

    }
    #[Route('/plat/{id}/like', name: 'post_like')]
    public function like($id, EntityManagerInterface $entityManager,PostLikeRepository $postLikeRepository,PlatRepository $platRepository): Response
    {
        $post = $platRepository->find($id);
        $like = new PostLike();
        $like->setPost($post);
        $entityManager->persist($like);
        $entityManager->flush();
        $likes =$postLikeRepository->count(['post'=>$post]);
        //*$likes=count( $like ) ;

        return $this->json([
            'code' =>200,
            'message' => 'like bien ajouter',
            'likes' => $likes
        ],200);
    }

}
