<?php

namespace App\Controller\frontend;

use App\Service\OfferService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CountryController extends AbstractController
{
    public function index(OfferService $offerService): Response
    {
        return $this->render('excursion/index.html.twig', [
            'data' => json_decode($offerService->getCountry()),

        ]);
    }

}
