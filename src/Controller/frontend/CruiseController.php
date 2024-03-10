<?php

namespace App\Controller\frontend;

use App\Entity\Cruise;
use App\Repository\CruiseRepository;
use App\Service\OfferService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CruiseController extends AbstractController
{
    #[Route('/cruise', name: 'app_cruise',methods: 'GET')]
    public function cruise(CruiseRepository $cruiseRepository): Response
    {
        return $this->render('cruise/index.html.twig', [
            'data' => $cruiseRepository->findAll(),

        ]);
    }
    public function limitedCruise(CruiseRepository $cruiseRepository):Response
    {
        return $this->render('cruise/limitedCruise.html.twig', [
            'data' => $cruiseRepository->findAll(),
        ]);
    }

    #[Route('cruise/{id_cruise} ', name: 'app_detailCruise',methods: 'GET')]

    public function detailCruise( Cruise $cruise): Response
    {
        // Récupérer l'ID à partir de la route, des paramètres de la requête ou de toute autre source appropriée.
        // $id_agency = $request->attributes->get('id');
        return $this->render('cruise/detailCruise.html.twig', [
            'data' => $cruise,
        ]);
    }


}
