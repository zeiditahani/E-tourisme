<?php

namespace App\Controller\frontend;

use App\Repository\TravelRepository;
use App\Service\OfferService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TravelController extends AbstractController
{
    #[Route('/travel', name: 'app_travel',methods: 'GET')]
    public function travel(TravelRepository $travelRepository): Response
    {
        return $this->render('travel/index.html.twig', [
            'data' => $travelRepository->findAll(),

        ]);
    }
    public function limitedTravel(TravelRepository $travelRepository): Response
    {
        return $this->render('travel/limitedtravel.html.twig', [
            'data' => $travelRepository->findAll(),

        ]);
    }
}
