<?php

namespace App\Controller\frontend;

use App\Entity\Agency;
use App\Repository\AgencyRepository;
use  App\Entity\hiking;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgencyController extends AbstractController
{
    #[Route('/agency', name: 'app_agency',methods: 'GET')]

    public function agency(AgencyRepository $agencyRepository): Response
    {

        return $this->render('agency/index.html.twig', [
            'data' => $agencyRepository ->findAll(),
        ]);
    }


    #[Route('agency{id_agency} ', name: 'app_detailAgency',methods: 'GET')]

    public function detailAgency( Agency $agency ) : Response
    {
        return $this->render('agency/detailAgency.html.twig', [
            'agency' => $agency,
        ]);
    }

    public function limitedAgency( AgencyRepository $agencyRepository ) : Response
    {
        return $this->render('agency/limitedListAgency.html.twig', [
            'data' => $agencyRepository->findAll(),
        ]);
    }

}
