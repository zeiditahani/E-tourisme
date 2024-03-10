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
    public function excursion(ExcursionRepository $excursionRepository): Response
    {
        return $this->render('excursion/index.html.twig', [
            'data' => $excursionRepository->findAll() ,

        ]);
    }
    public function limitedExcursion(ExcursionRepository $excursionRepository): Response
    {
        return $this->render('excursion/limitedExcursion.html.twig', [
            'data' => $excursionRepository->findAll(),
        ]);
    }

}
