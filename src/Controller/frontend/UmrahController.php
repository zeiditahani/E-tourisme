<?php

namespace App\Controller\frontend;

use App\Repository\UmrahRepository;
use App\Service\OfferService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UmrahController extends AbstractController
{
    #[Route('/umrah', name: 'app_umrah',methods: 'GET')]
    public function umrah(OfferService $offerService): Response
    {
        return $this->render('umrah/index.html.twig', [
            'data' => json_decode($offerService->getUmrah()),

        ]);
    }
    public function limitedUmrah(OfferService $offerService): Response
    {
        return $this->render('umrah/limitedUmrah.html.twig', [
            'data' => json_decode($offerService->getLimitedListUmrah(1)),
        ]);
    }

}
