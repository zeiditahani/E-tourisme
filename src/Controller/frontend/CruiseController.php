<?php

namespace App\Controller\frontend;

use App\Service\OfferService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CruiseController extends AbstractController
{
    #[Route('/cruise', name: 'app_cruise',methods: 'GET')]
    public function cruise(OfferService $offerService): Response
    {
        return $this->render('cruise/index.html.twig', [
            'data' => json_decode($offerService->getCruise()),

        ]);
    }
    public function limitedCruise(OfferService $offerService):Response
    {
        return $this->render('cruise/limitedCruise.html.twig', [
            'data' => json_decode($offerService->getLimitedCruise(1)),
        ]);
    }

}
