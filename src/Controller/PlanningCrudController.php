<?php

namespace App\Controller;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use App\Entity\Planning;
use App\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;

use App\Form\PlanningType;
use App\Repository\NotificationRepository;
use App\Repository\PlanningRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
#[Route('/planning/crud')]
class PlanningCrudController extends AbstractController
{
    #[Route('/viewPlanning' , name:'app_planning_crud_index_front', methods: ['GET'])]
    public function viewPlanning(PlanningRepository $planningRepository): Response
    {
        $user = $this->getUser();
        return $this->render('planning_crud/view.html.twig', [
            'user'=>$user,
        ]);
    }
    #[Route("/planning/upcoming", name:"check_upcoming_planning")]
    public function checkUpcomingPlanning(PlanningRepository $planningRepository): JsonResponse
    {
        $upcomingPlanning = $planningRepository->findUpcomingWithinMinutes(30);

        if ($upcomingPlanning) {
            return $this->json([
                'hasUpcoming' => true,
                'message' => 'You have a planning event starting in less than 30 minutes.'
            ]);
        }

        return $this->json(['hasUpcoming' => false]);
    }
    #[Route('delete/{id}', name: 'app_planning_crud_delete', methods: ['POST'])]
    public function delete(Request $request, $id,PlanningRepository $planningRepository): Response
    {
        $planning=$planningRepository->find($id);
        if ($this->isCsrfTokenValid('delete'.$planning->getId(), $request->request->get('_token'))) {
            $planningRepository->remove($planning, true);
        }

        return $this->redirectToRoute('app_planning_crud_index', [], Response::HTTP_SEE_OTHER);
    }
    private function sendmail(MailerInterface $mailer, array $noms, \DateTime $date, \DateTime $starttime): void
    {
        $formattedDate = $date->format("d/m/Y");
        $formattedTime = $starttime->format("H:i");
    
        // Concatenate all names in the array
        $allNames = implode(', ', $noms);
    
        $emailContent = "
            <html>
            <head>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        color: #333;
                    }
                    .container {
                        max-width: 600px;
                        margin: 0 auto;
                        padding: 20px;
                        background-color: #fff;
                        border-radius: 5px;
                        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
                    }
                    h1 {
                        color: #007bff;
                    }
                    p {
                        margin-bottom: 15px;
                    }
                </style>
            </head>
            <body>
                <div class='container'>
                    <h1>Bonjour $allNames!</h1>
                    <p>Vous avez un planning le $formattedDate à $formattedTime.</p>
                </div>
            </body>
            </html>
        ";
    
        $email = (new Email())
            ->from(new Address('user@gmail.com', 'DevMind'))
            ->to('dhiadriss@gmail.com')
            ->subject('Confirmation de planning')
            ->html($emailContent);
    
        $mailer->send($email);
    }
    
    
    #[Route('/edit/{id}', name: 'app_planning_crud_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, $id,PlanningRepository $planningRepository): Response
    {
        $planning=$planningRepository->find($id);
        $form = $this->createForm(PlanningType::class, $planning);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $planningRepository->save($planning, true);

            return $this->redirectToRoute('app_planning_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('planning_crud/edit.html.twig', [
            'planning' => $planning,
            'form' => $form,
        ]);
    }

    #[Route('/', name: 'app_planning_crud_index', methods: ['GET'])]
    public function index(
        PlanningRepository $planningRepository,
        Request $request,
        PaginatorInterface $paginator): Response
    {
        $data=$planningRepository->findAll();

        $plannings=$paginator->paginate(
            $data,
            $request->query->getInt('page',1),
            5

        );

        return $this->render('planning_crud/index.html.twig', [
            'plannings' => $plannings,
        ]);
    }

    #[Route('/new', name: 'app_planning_crud_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PlanningRepository $planningRepository,MailerInterface $mailer): Response
    {
        $planning = new Planning();
        $form = $this->createForm(PlanningType::class, $planning);
        $form->handleRequest($request);
        $nomuser=$planning->getUsersFirstNames();
        $date = $planning->getDatePlanning();
        $startime=$planning->getStartTime();
        if ($form->isSubmitted() && $form->isValid()) {
            $this->sendmail($mailer,$nomuser,$date,$startime);

            $planningRepository->save($planning, true);

            return $this->redirectToRoute('app_planning_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('planning_crud/new.html.twig', [
            'planning' => $planning,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_planning_crud_show', methods: ['GET'])]
    public function show( PlanningRepository $planningRepository,$id): Response
    {
        $planning=$planningRepository->find($id);
        return $this->render('planning_crud/show.html.twig', [
            'planning' => $planning,
        ]);
    }

}
