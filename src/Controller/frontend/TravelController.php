<?php

namespace App\Controller\frontend;

use App\Repository\TravelRepository;
use App\Entity\Travel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TravelController extends AbstractController
{
    #[Route('/travel', name: 'app_travel',methods: 'GET')]
    public function index(TravelRepository $travelRepository): Response
    {
        return $this->render('travel/index.html.twig', [
            'data' => $travelRepository->findAll(),

        ]);
    }
    public function limitedTravel(TravelRepository $travelRepository): Response
    {
        $travel = $travelRepository->findByExampleField();
        return $this->render('travel/limitedtravel.html.twig', [
            'data' => $travel,

        ]);
    }
    #[Route('/travel{id}', name: 'app_detailTravel',methods: 'GET')]
    public function detailTravel(Travel $travel): Response
    {
        return $this->render('travel/detailTravel.html.twig', [
              'travel' => $travel,
        ]);
    }
}
