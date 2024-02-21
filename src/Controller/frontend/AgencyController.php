<?php

namespace App\Controller\frontend;

use App\Entity\Agency;
use App\Service\OfferService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
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

    public function limitedListAgency(OfferService $offerService ): Response
    {
        return $this->render('agency/limitedListAgency.html.twig', [

            'data' => json_decode($offerService->getLimitedListAgency(3)),
        ]);
    }

    #[Route('agency/{id_agency} ', name: 'app_detailAgency',methods: 'GET')]

    public function detailAgency( OfferService $offerService, $id_agency ) : Response
    {
        return $this->render('agency/detailAgency.html.twig', [
            'data' => json_decode($offerService->getOfferByAgency($id_agency)),
        ]);
    }

}
