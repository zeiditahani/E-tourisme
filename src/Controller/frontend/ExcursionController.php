<?php

namespace App\Controller\frontend;

use App\Entity\Excursion;
use App\Repository\ExcursionRepository;
use App\Service\OfferService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExcursionController extends AbstractController
{
    #[Route('/excursion', name: 'app_excursion',methods: 'GET')]
    public function excursion(OfferService $offerService): Response
    {
        return $this->render('excursion/index.html.twig', [
            'data' => json_decode($offerService->getExcursion()),

        ]);
    }
    public function limitedExcursion(OfferService $offerService): Response
    {
        return $this->render('excursion/limitedExcursion.html.twig', [
            'data' => json_decode($offerService->getLimitedExcursion(2)),
        ]);
    }

}
