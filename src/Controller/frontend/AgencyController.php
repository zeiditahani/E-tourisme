<?php

namespace App\Controller\frontend;

use App\Service\OfferService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgencyController extends AbstractController
{
    #[Route('/agency', name: 'app_agency',methods: 'GET')]

    public function agency(OfferService $offerService): Response
    {
        return $this->render('agency/index.html.twig', [
            'data' => json_decode($offerService->getAgencies()),
        ]);
    }
    public function limitedListAgency(OfferService $offerService): Response
    {
        return $this->render('agency/limitedListAgency.html.twig', [
            'data' => json_decode($offerService->getLimitedListAgency(3)),
        ]);
    }

}
