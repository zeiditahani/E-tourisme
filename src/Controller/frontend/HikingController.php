<?php

namespace App\Controller\frontend;

use App\Repository\HikingRepository;
use App\Service\OfferService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HikingController extends AbstractController
{
    #[Route('/hiking', name: 'app_hiking',methods: 'GET')]
  public function hiking(OfferService $offerService): Response
  {
      return $this->render('hiking/index.html.twig', [
          'data' => json_decode($offerService->getHiking()),

      ]);
  }
    public function limitedHiking(OfferService $offerService): Response
    {
        return $this->render('hiking/limitedHiking.html.twig', [
            'data' => json_decode($offerService->getLimitedHiking(3)),

        ]);
    }
}
