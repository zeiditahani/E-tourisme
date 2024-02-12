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
    public function travel(OfferService $offerService): Response
    {
        return $this->render('travel/index.html.twig', [
            'data' => json_decode($offerService->getTravel()),

        ]);
    }
    public function limitedTravel(OfferService $offerService): Response
    {
        return $this->render('travel/limitedtravel.html.twig', [
            'data' => json_decode($offerService->getLimitedListTravel(3)),

        ]);
    }
}
