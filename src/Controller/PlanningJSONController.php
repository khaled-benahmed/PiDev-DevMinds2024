<?php

namespace App\Controller;

use App\Entity\Planning;
use App\Form\PlanningType;
use App\Repository\PlanningRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\ORM\EntityManagerInterface;
use DateTime;

class PlanningJSONController extends AbstractController
{
    /* JSON Edit */
    #[Route('/planning/editJSON/{id}', name: 'editJSONPlanning')]
    public function editJSON($id,Request $request, Planning $planning, NormalizerInterface $Normalizer)
    {
        $em=$this->getDoctrine()->getManager();

        $planning=$em->getRepository(Planning::class)->find($id);
        $planning->setDatePlanning($request->get('datePlanning'));
        $planning->setJourPlanning($request->get('jourPlanning'));
        $planning->setHeurePlanning($request->get('heurePlanning'));

        $em->flush();

        $jsonContent = $Normalizer->normalize($planning,'json',['groups'=>'planning']);

        return new Response("Planning est mise à jour".json_encode($jsonContent));
    }

    /* JSON Show */
    #[Route('/planning/showJSON/{id}', name: 'showJSONPlanning')]
    public function showJSON($id,PlanningRepository $repo,NormalizerInterface $normalizer)
    {
        $planning=$repo->find($id);
        $planningNormalises=$normalizer->normalize($planning,'json',['groups'=>"planning"]);
        return new Response(json_encode($planningNormalises));
    }

    /* JSON Delete */
    #[Route('/planning/deleteJSON/{id}', name: 'deleteJSONPlanning')]
    public function deleteJSON(Request $request, $id, NormalizerInterface $Normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $planning=$em->getRepository(Planning::class)->find($id);
        $em->remove($planning);
        $em->flush();
        $jsonContent=$Normalizer->normalize($planning,'json',['groups'=>'planning']);

        return new Response("Planning supprimée avec succés".json_encode($jsonContent));
    }

    /* JSON View Back */
    #[Route('/planning/viewJSON', name: 'viewJSONPlanning')]
    public function viewJSON(PlanningRepository $planningRepository, NormalizerInterface $normalizer)
    {
        $planning = $planningRepository->findAll();

        $planningNormalises = $normalizer->normalize($planning,'json',['groups'=>'planning']);

        $json = json_encode($planningNormalises);

        return new Response($json);
    }

    /* JSON Add */
    #[Route('/planning/newJSON', name: 'addJSONPlanning')]
    public function newJSON(Request $request, NormalizerInterface $Normalizer, EntityManagerInterface $em)
    {
        $em =$this->getDoctrine()->getManager();
        $planning = new Planning();
        $dateString=$request->get('datePlanning');
        $planningDate=new DateTime($dateString);
        $planning->setDatePlanning($planningDate);
        $planning->setJourPlanning($request->get('jourPlanning'));
        $planning->setHeurePlanning($request->get('startTime'));

        $em->persist($planning);
        $em->flush();

        $jsonContent = $Normalizer->normalize($planning,'json',['groups'=>'planning']);

        return new Response("Planning ajouté avec succés".json_encode($jsonContent));
    }

    #[Route('/calendrier', name: 'app_calendar')]
    public function CalendarView(PlanningRepository $repo): Response
    {
        $events = $repo->findAll();

        $rdvs = [];

        foreach($events as $event){
            $rdvs[] = [
                'id' => $event->getId(),
                'start' => $event->getDatePlanning()->format('Y-m-d'),

                'title' => $event->getTitre(),
                //'nomCoach' => $event->getCours()->getNomCoach(),
                'backgroundColor' => "#2C3E50",
                'borderColor' => "#2C3E50",
                'textColor' => "#ffffff",
            ];
        }

        $data = json_encode($rdvs);

        return $this->render('planning_crud/calendrier.html.twig', compact('data'));
    }
}
