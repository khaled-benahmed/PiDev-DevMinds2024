<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\OffresRepository;
use App\Repository\PromotionRepository;
class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function index(OffresRepository $offresRepository,PromotionRepository $promotionRepository): Response
    {
        $staticDate = new \DateTime('2015-05-15');
        $currentDate = new \DateTime();
        $interval = $currentDate->diff($staticDate);
        $differenceInYears = $interval->y;
        if($differenceInYears <= 15){
            $promotion = $promotionRepository->findOneBy(['codePromotion' => "kids"]);
        }
        if($differenceInYears > 15){
            $promotion = $promotionRepository->findOneBy(['codePromotion' => "adultes"]);
        }
        
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'offres' => $offresRepository->findAll(),
            'promotion' => $promotion,
        ]);
    }
}
